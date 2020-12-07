<script>
export default {
  props: {
    action: {
      type: [Object, Array, String],
      required: true
    },
    selected: {
      type: [Object, Array, String],
      required: true
    },
    index: {
      type: [Object, Array, String]
    }
  },
  data() {
    return {
      form: null
    };
  },
  methods: {
    urlWithApiStoreUpdate() {
      if (!this.action && !this.action.route) return;

      return this.form.post(this.action.route);
    }
  }
};
</script>
