<template>
  <div id="page-user-edit">
    <vx-card v-if="form">
      <div slot="no-body" class="tabs-container px-6 pt-6">
        <vs-tabs v-model="activeTab" class="tab-action-btn-fill-conatiner">
          <vs-tab :label="$t('Data')" icon-pack="feather" icon="icon-settings">
            <div class="tab-text">
              <form @submit.prevent="submit">
                <template v-for="(row, i) in rows">
                  <template v-if="!row.hidden_edit">
                    <component
                      :key="i"
                      :collumn="row"
                      :form="form"
                      :is="currentTabComponent(row.component)"
                    ></component>
                  </template>
                </template>
                <div class="vx-row">
                  <div class="vx-col w-full">
                    <vs-button @click.native="submit" class="mr-3 mb-2">{{ $t('Submit') }}</vs-button>
                    <vs-button
                      @click="urlWithIndex"
                      color="warning"
                      type="border"
                      class="mb-2"
                    >{{ $t('Reset') }}</vs-button>
                  </div>
                </div>
              </form>
            </div>
          </vs-tab>
          <template v-if="rows.cards">
            <vs-tab
              :label="card.label"
              icon-pack="feather"
              icon="icon-user"
              v-for="(card, i) in rows.cards"
              :key="i"
            >
              <component :key="i" :rows="card.value" :is="currentTabComponent(card.component)"></component>
            </vs-tab>
          </template>
        </vs-tabs>
      </div>
    </vx-card>
  </div>
</template>

<script>
import { mapGetters, mapActions } from "vuex";
import moduleUserManagement from "@/store/modules/user-management/moduleUserManagement";
import { Form } from "vform";

export default {
  data() {
    return {
      user_not_found: false,
      url: null,
      activeTab: 0,
      page: 1,
      lastPage: 1,
      params: {},
      form: null
    };
  },
  computed: {
    ...mapGetters({
      userTemplate: "userManagement/getTemplate",
      rows: "userManagement/getFind",
      meta: "userManagement/getMeta"
    })
  },
  methods: {
    ...mapActions({
      find: "userManagement/find"
    }),
    urlWithApi() {
      if (!this.$route.meta.api) return;

      return this.$route.meta.api.replace("_id_", this.$route.params.id);
    },
    urlWithIndex() {
      if (!this.$route.meta.parent) return;

      this.$router.push({ name: this.$route.meta.parent.replace("list", 'index') });
    },

    urlWithApiStoreUpdate() {
      if (!this.$route.meta.update && !this.$route.meta.store) return;

      if (this.$route.params.id) {
        return this.form.put(
          this.$route.meta.update.replace("_id_", this.$route.params.id)
        );
      }

      return this.form.post(this.$route.meta.store);
    },

    submit() {
      this.form.errors.clear();
      this.$vs.loading();
      this.urlWithApiStoreUpdate()
        .then(response => {
          this.notify(response.data);
          if (response.data.redirect) {
            this.$router.push(response.data.redirect);
          }
          this.$vs.loading.close();
        })
        .catch(() => {
          this.isLoading = false;
          this.$vs.loading.close();
        });
    },
    notify(data) {
      let { color, title, text, icon, position } = data;
      this.$vs.notify({ color, title, text, icon, position });
    },
    fetch_user_data(url, parameters = this.$route.query) {
      if (!url) return;

      let params = parameters;
      this.$vs.loading();
      this.find({ url, params })
        .then(response => {
          let data = [];
          Object.values(response.data.data).map(row => {
            if (row.type) {
              data[row.name] = row.value;
            }
          });
          this.form = new Form(data);

          this.$vs.loading.close();
          this.user_not_found = false;
        })
        .catch(error => {
          this.$vs.loading.close();
          this.user_not_found = true;
          this.$store.commit("userManagement/SET_ERROR", error);
        });
    },
    updateQueryString(params) {
      this.$router.replace({ query: params });
    },
    currentTabComponent: function(Component) {
      return Component;
    }
  },
  created() {
    // Register Module UserManagement Module
    if (!moduleUserManagement.isRegistered) {
      this.$store.registerModule("userManagement", moduleUserManagement);
      moduleUserManagement.isRegistered = true;
    }
  },
  mounted() {
    dd(this.$route);
    this.fetch_user_data(this.urlWithApi());
  }
};
</script>

<style>
</style>
