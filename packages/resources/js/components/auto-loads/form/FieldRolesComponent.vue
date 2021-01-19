<template>
  <div class="vx-row mb-6">
    <div class="vx-col w-full">
      <label class="vs-input--label">{{ $t(collumn.label) }}</label>
      <ul class="demo-alignment">
        <li v-for="option in collumn.options" :key="option.value">
          <vs-checkbox v-model="selected" :vs-value="option.value">{{ option.label }}</vs-checkbox>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
import AbstractFieldComponentVue from "@/components/AbstractFieldComponent.vue";
export default {
  extends: AbstractFieldComponentVue,
  data() {
    return {
      selected: null
    };
  },
  watch: {
    selected(val) {
      this.form[this.collumn.name] = val;
    }
  },
  created() {
    this.selected = this.form[this.collumn.name];
  }
};
</script>

<style>
</style>
