<script>
import { mapGetters, mapActions } from "vuex";
export default {
  data() {
    return {
      params: {
        api: "",
        query: {
          page: 1
        }
      }
    };
  },
  computed: {
    ...mapGetters({
      getAll: "userManagement/getAll",
      getHeaders: "userManagement/getHeaders",
      getOptions: "userManagement/getOptions",
      getQuery: "userManagement/getQuery",
      getResults: "userManagement/getResults"
    })
  }
};
</script>
