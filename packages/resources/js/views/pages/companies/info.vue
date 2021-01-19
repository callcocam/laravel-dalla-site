<script>
import { mapActions } from "vuex";
import moduleUserManagement from "@/store/modules/user-management/moduleUserManagement";
import AbstractPageVue from "@/views/pages/AbstractPage";
export default {
  extends: AbstractPageVue,
  methods: {
    ...mapActions({
      fetchCompany: "userManagement/fetchCompany"
    })
  },
  mounted() {
    this.$vs.loading();
    this.fetchCompany({ url: "/api/v1/company" })
      .then(response => {
        this.$vs.loading.close();
        this.user_not_found = false;
      })
      .catch(error => {
        this.$vs.loading.close();
        this.user_not_found = true;
      });
  }
};
</script>

<style>
</style>
