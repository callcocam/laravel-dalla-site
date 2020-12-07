<template>
  <div class="vx-row mb-2">
    <div class="vx-col w-full">
      <label class="vs-input--label">{{ $t(collumn.label) }}</label>
      <vs-textarea class="w-full" v-model="form[collumn.name]" />
      <span
        class="text-danger text-sm"
        v-show="form.errors.has(collumn.name)"
      >{{ form.errors.get(collumn.name) }}</span>
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
