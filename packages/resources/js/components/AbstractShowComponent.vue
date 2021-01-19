<script>
export default {
  props: {
    collumn: {
      type: [Object, Array, String],
      required: true
    },
    index: {
      type: [Object, Array, String]
    }
  },
  methods: {
    updateQueryString(params, omit = []) {
      this.$router
        .replace({
          query: Object.assign({}, _.omit(this.$route.query, omit), params)
        })
        .catch(err => {
          console.log("err", err);
        });
    },
    cancelEdit() {
      this.updateQueryString(
        {
          page: 1
        },
        [[this.index]]
      );
    }
  }
};
</script>
