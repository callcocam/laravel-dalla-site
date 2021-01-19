<template>
  <div class="vx-row mb-6">
    <div class="vx-col w-full">
      <label class="vs-input--label">{{ $t(collumn.label) }}</label>
      <ul class="demo-alignment" v-if="collumn.options">
        <li v-for="option in collumn.options" :key="option">
          <vs-radio color="success" v-model="form[collumn.name]" :vs-value="option">{{ option }}</vs-radio>
        </li>
        <li class="modelx">{{ form[collumn.name] }}</li>
      </ul>
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
