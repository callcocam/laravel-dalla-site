<template>
  <span>
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
  </span>
</template>

<script>
import AbstractShowComponentVue from "@/components/AbstractShowComponent.vue";
export default {
  extends: AbstractShowComponentVue
};
</script>

<style>
</style>
