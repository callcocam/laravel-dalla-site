<template>
  <vs-dropdown-item @click="sendAction">
    <span class="flex items-center">
      <feather-icon :icon="action.icon" svgClasses="h-4 w-4" class="mr-2" />
      <span>{{ action.label }}</span>
    </span>
  </vs-dropdown-item>
</template>

<script>
import AbstractActionComponentVue from "@/components/AbstractActionComponent.vue";
import { Form } from "vform";
export default {
  extends: AbstractActionComponentVue,
  methods: {
    sendAction() {
      this.form = new Form({
        selected: this.selected
      });
      this.urlWithApiStoreUpdate()
        .then(response => {})
        .catch(err => {});
    }
  }
};
</script>

<style>
</style>
