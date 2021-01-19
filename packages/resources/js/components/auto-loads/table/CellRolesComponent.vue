<template>
  <div>
    <template v-if="collumn.value">
      <template v-for="(value, index) in collumn.value">
        <span :key="index">{{ value.name }}</span>
      </template>
    </template>
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
