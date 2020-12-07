<template>
  <div class="flex items-center">
    <vs-avatar :src="collumn.value" class="flex-shrink-0 mr-2" size="30px" />
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
