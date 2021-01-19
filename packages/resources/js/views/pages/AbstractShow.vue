<template>
  <div>
    <template v-if="userTemplate">
      <component :is="currentTabComponent(userTemplate)"></component>
    </template>
  </div>
</template>

<script>
import { mapGetters, mapActions } from "vuex";
import moduleUserManagement from "@/store/modules/user-management/moduleUserManagement";
export default {
  data() {
    return {
      user_not_found: false,
      url: null,
      activeTab: 0,
      params: {}
    };
  },
  computed: {
    ...mapGetters({
      userTemplate: "userManagement/getTemplate"
    })
  },
  methods: {
    ...mapActions({
      find: "userManagement/show"
    }),
    urlWithApi() {
      if (!this.$route.meta.api) return;

      return this.$route.meta.api.replace("_id_", this.$route.params.id);
    },
    currentTabComponent: function(Component) {
      return Component;
    },
    fetch_user_data(url, parameters = this.$route.query) {
      if (!url) return;

      let params = parameters;
      this.$vs.loading();
      this.find({ url, params })
        .then(response => {
          this.$vs.loading.close();
          this.user_not_found = false;
        })
        .catch(error => {
          this.$vs.loading.close();
          this.user_not_found = true;
          this.$store.commit("userManagement/SET_ERROR", error);
        });
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
    this.fetch_user_data(this.urlWithApi());
  }
};
</script>

<style>
</style>
