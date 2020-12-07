<template>
  <div></div>
</template>

<script>
import { mapActions } from "vuex";
export default {
  data: () => ({
    activeConfirm: false
  }),
  methods: {
    ...mapActions({
      delete: "userManagement/removeRecord"
    }),
    openConfirm() {
      this.$vs.dialog({
        type: "confirm",
        color: this.$route.meta.question.color || 'danger',
        title: this.$route.meta.question.title || 'Confirm' ,
        text:this.$route.meta.question.text,
        accept: this.acceptAlert,
        cancel: this.rejectAlert
      });
    },
    updateQueryString() {
      this.$router.push({
        name: this.$route.meta.parent,
        query: this.$route.query
      });
    },
    notify(color, title, text, icon, position = "bottom-center") {
      this.$vs.notify({
        color,
        title,
        text,
        //icon,
        position
      });
    },
    rejectAlert() {
      this.updateQueryString();
    },
    acceptAlert() {
      this.delete({
        url: this.$route.meta.api,
        id: this.$route.params.id,
        params: this.$route.params.query
      })
        .then(response => {
          this.notify(
            response.data.type,
            response.data.title,
            response.data.messages,
            response.data.icon,
            response.data.position,
          );
          this.updateQueryString();
        })
        .catch(err => {
          this.notify(
            "danger",
            "Opss!!",
            err.response.data.message,
            "icon-alert-circle"
          );
          this.updateQueryString();
        });
    }
  },
  mounted() {
    this.openConfirm();
    console.log("mounted", this.$route);
  }
};
</script>

<style>
</style>
