<script>
import { mapActions } from "vuex";
import AbstractPageVue from "@/views/pages/AbstractPage";
export default {
  extends: AbstractPageVue,
  methods: {
    ...mapActions({
      fetchUser: "userManagement/fetchUser"
    })
  },
  mounted() {
    this.$vs.loading();
    this.fetchUser({ url: "/api/v1/profile" })
      .then(response => {
        this.$vs.loading.close();
      })
      .catch(error => {
        this.$vs.loading.close();
      });
  }
};
</script>

<style>
</style>
