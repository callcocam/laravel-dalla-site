<script>
import { mapGetters, mapActions } from "vuex";
import moduleUserManagement from "@/store/modules/user-management/moduleUserManagement";
import AbstractPageVue from "@/views/pages/AbstractPage";

export default {
  extends: AbstractPageVue,
  data() {
    return {
      user_not_found: false,
      url: null,
      page: 1,
      lastPage: 1,
      params: {}
    };
  },
  computed: {
    ...mapGetters({
      userTemplate: "userManagement/getTemplate",
      rows: "userManagement/getAll",
      meta: "userManagement/getMeta"
    })
  },
  methods: {
    ...mapActions({
      all: "userManagement/all"
    }),
    urlWithApi() {
      if (!this.$route.meta.api) return;

      return this.$route.meta.api;
    },
    fetch_user_data(url, parameters = this.$route.query) {
      if (!url) return;

      let params = parameters;
      dd("parameters", parameters);
      this.$vs.loading();
      this.all({ url, params })
        .then(response => {
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
    }
  },
  created() {
    // Register Module UserManagement Module
    if (!moduleUserManagement.isRegistered) {
      this.$store.registerModule("userManagement", moduleUserManagement);
      moduleUserManagement.isRegistered = true;
    }
    this.fetch_user_data(this.urlWithApi());
  }
};
</script>

<style>
</style>
