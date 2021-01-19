<template>
  <div id="page-user-edit">
    <vx-card v-if="rows">
      <div slot="no-body" class="tabs-container px-6 pt-6">
        <vs-tabs v-model="activeTab" class="tab-action-btn-fill-conatiner">
          <vs-tab :label="$t('Data')" icon-pack="feather" icon="icon-settings">
            <div class="tab-text">
              <vs-list>
                <vs-list-item
                  icon-pack="feather"
                  icon="icon-check"
                  :title="rows.name.value"
                  :subtitle="rows.name.label"
                ></vs-list-item>
                <vs-list-item
                  icon-pack="feather"
                  icon="icon-check"
                  :title="rows.app_root.value"
                  :subtitle="rows.app_root.label"
                ></vs-list-item>
                <vs-list-item
                  icon-pack="feather"
                  icon="icon-check"
                  :title="rows.app_path.value"
                  :subtitle="rows.app_path.label"
                ></vs-list-item>
                <vs-list-item
                  icon-pack="feather"
                  icon="icon-check"
                  :title="rows.app_theme.value"
                  :subtitle="rows.app_theme.label"
                ></vs-list-item>
                <vs-list-item
                  icon-pack="feather"
                  icon="icon-check"
                  :title="rows.app_route.value"
                  :subtitle="rows.app_route.label"
                ></vs-list-item>
                <vs-list-item
                  icon-pack="feather"
                  icon="icon-check"
                  :title="rows.app_table.value"
                  :subtitle="rows.app_table.label"
                >
                  <vs-button
                    size="small"
                    icon-pack="feather"
                    icon="icon-check"
                    color="dark"
                    @click="Generate(rows,'/api/v1/makes/generate/table')"
                  >{{ $t('Generate Table')}}</vs-button>
                </vs-list-item>

                <vs-list-item
                  icon-pack="feather"
                  icon="icon-check"
                  :title="rows.app_model.value"
                  :subtitle="rows.app_model.label"
                >
                  <vs-button
                    size="small"
                    color="success"
                    icon-pack="feather"
                    icon="icon-check"
                    @click="Generate(rows,'/api/v1/makes/generate/model')"
                  >{{ $t('Generate Model')}}</vs-button>
                </vs-list-item>

                <vs-list-item
                  icon-pack="feather"
                  icon="icon-check"
                  :title="rows.app_model.value"
                  :subtitle="$t('Seeder')"
                >
                  <vs-button
                    size="small"
                    color="success"
                    icon-pack="feather"
                    icon="icon-check"
                    @click="Generate(rows,'/api/v1/makes/generate/seeder')"
                  >{{ $t('Generate Seeder')}}</vs-button>
                </vs-list-item>

                <vs-list-item
                  icon-pack="feather"
                  icon="icon-check"
                  :title="headerNames(rows.app_controller.value, 'Controller')"
                  :subtitle="rows.app_controller.label"
                >
                  <vs-button
                    size="small"
                    color="warning"
                    icon-pack="feather"
                    icon="icon-check"
                    @click="Generate(rows,'/api/v1/makes/generate/controller')"
                  >{{ $t('Generate Controller')}}</vs-button>
                </vs-list-item>

                <vs-list-item
                  icon-pack="feather"
                  icon="icon-check"
                  :title="headerNames(rows.app_model.value, 'Site Controller')"
                  :subtitle="$t('Site Controller')"
                >
                  <vs-button
                    size="small"
                    icon="icon-check"
                    icon-pack="feather"
                    color="warning"
                    @click="Generate(rows,'/api/v1/makes/generate/site-controller')"
                  >{{ $t('Generate Site Controller')}}</vs-button>
                </vs-list-item>

                <vs-list-item
                  icon-pack="feather"
                  icon="icon-check"
                  :title="headerNames(rows.app_model.value, 'Request')"
                  :subtitle="$t('Request')"
                >
                  <vs-button
                    size="small"
                    icon="icon-check"
                    icon-pack="feather"
                    color="primary"
                    @click="Generate(rows,'/api/v1/makes/generate/request')"
                  >{{ $t('Generate Request')}}</vs-button>
                </vs-list-item>
                <vs-list-item
                  icon-pack="feather"
                  icon="icon-check"
                  :title="headerNames(rows.app_model.value, 'Filters')"
                  :subtitle="$t('Filter')"
                >
                  <vs-button
                    size="small"
                    icon="icon-check"
                    icon-pack="feather"
                    color="dark"
                    @click="Generate(rows,'/api/v1/makes/generate/filters')"
                  >{{ $t('Generate Filters')}}</vs-button>
                </vs-list-item>
                <vs-list-item
                  icon-pack="feather"
                  icon="icon-check"
                  :title="headerNames(rows.app_model.value, 'Resource')"
                  :subtitle="$t('Resource')"
                >
                  <vs-button
                    size="small"
                    icon-pack="feather"
                    icon="icon-check"
                    color="primary"
                    @click="Generate(rows,'/api/v1/makes/generate/resource')"
                  >{{ $t('Generate Resourcer')}}</vs-button>
                </vs-list-item>
                <vs-list-item
                  icon-pack="feather"
                  icon="icon-check"
                  :title="headerNames(rows.app_model.value, 'Collection')"
                  :subtitle="$t('Collection')"
                >
                  <vs-button
                    size="small"
                    icon-pack="feather"
                    icon="icon-check"
                    color="rgb(62, 201, 214)"
                    @click="Generate(rows,'/api/v1/makes/generate/collection')"
                  >{{ $t('Generate Collection')}}</vs-button>
                </vs-list-item>
                <vs-list-item>
                  <component
                    :collumn="rows.actions"
                    :is="currentTabComponent(rows.actions.showComponent)"
                  ></component>
                </vs-list-item>
              </vs-list>
            </div>
          </vs-tab>
          <template v-if="rows.app_describe">
            <vs-tab :label="rows.app_describe.label" icon-pack="feather" icon="icon-table">
              <table-describe :describes="rows.app_describe.value" />
            </vs-tab>
          </template>
          <template v-if="rows.menu">
            <vs-tab :label="rows.menu.label" icon-pack="feather" icon="icon-table">
              <table-menu :describes="rows.menu.value" />
            </vs-tab>
          </template>
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
import { Form } from "vform";
export default {
  data() {
    return {
      // Filter Options
      params: { page: 1 },
      searchQuery: "",
      selected: [],
      activeTab: 0,
      log: [],
      user_not_found: false
    };
  },
  created() {
    this.params = Object.assign({}, this.$route.query);
  },
  computed: {
    ...mapGetters({
      rows: "userManagement/getFind",
      meta: "userManagement/getMeta"
    })
  },
  methods: {
    headerNames(name, sufix) {
      return `${name}${sufix}`;
    },
    currentTabComponent: function(Component) {
      return Component;
    },
    updateQueryString(params) {
      this.$router
        .replace({
          query: Object.assign({}, this.$route.query, params)
        })
        .catch(err => {
          dd("err", err);
        });
    },
    Generate(data, url) {
      let form = new Form({
        id: data.id.value,
        name: data.name.value,
        path: data.path.value,
        app_root: data.app_root.value,
        app_path: data.app_path.value,
        app_table: data.app_table.value,
        app_theme: data.app_theme.value,
        app_controller: data.app_controller.value,
        app_model: data.app_model.value,
        app_route: data.app_route.value
      });
      this.$vs.loading();
      form
        .post(url)
        .then(response => {
          dd(response);
          this.$vs.loading.close();
          this.$vs.notify({
            color: "success",
            title: "Make Ação",
            text: response.data.message
          });
        })
        .catch(error => {
          this.$vs.loading.close();
        });
    }
  }
};
</script>

<style>
</style>
