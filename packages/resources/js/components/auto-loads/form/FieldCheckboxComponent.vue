<template>
  <div class="vx-row mb-2">
    <div class="vx-col sm:w-1/3 w-full">
      <span>{{ $t(collumn.label) }}</span>
    </div>
    <div class="vx-col sm:w-2/3 w-full">
     {{ collumn.value }}
    </div>
  </div>
</template>

<script>
import AbstractFieldComponentVue from "@/components/AbstractFieldComponent.vue";
export default {
  extends: AbstractFieldComponentVue
};
</script>

<style>
</style>
