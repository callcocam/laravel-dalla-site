<template>
  <div>
    <template v-if="collumn">
      <template v-for="(action, indexAction) in collumn.value">
        <vs-button
          :key="indexAction"
          icon-pack="feather"
          :icon="action.icon"
          :color="action.color"
          :size="action.size"
          :class="action.class"
          :to="action"
        >{{ action.label }}</vs-button>
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
