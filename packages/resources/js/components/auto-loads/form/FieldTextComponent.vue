<template>
  <div class="vx-row mb-2">
    <div class="vx-col w-full">
      <vs-input
        :danger="form.errors.has(collumn.name)"
        :danger-text="form.errors.get(collumn.name)"
        :label="$t(collumn.label)"
        :class="collumn.attributes.class || 'w-full'"
        :readonly="collumn.attributes.readonly || false"
        :type="collumn.type || 'text'"
        v-model="form[collumn.name]"
      />
      <!-- <span
        class="text-danger text-sm"
        v-show="form.errors.has(collumn.name)"
      >{{ form.errors.get(collumn.name) }}</span> -->
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
