<template>
  <vs-chip class="ag-grid-cell-chip" :color="chipColor(collumn.value)">
    <span>{{ collumn.value }}</span>
  </vs-chip>
</template>

<script>
import AbstractShowComponentVue from "@/components/AbstractShowComponent.vue";
export default {
  extends: AbstractShowComponentVue,
  computed: {
    chipColor() {
      return value => {
        if (value === "published") return "success";
        else if (value === "draft") return "warning";
        else if (value === "deleted") return "danger";
        else "primary";
      };
    }
  }
};
</script>

<style>
</style>
