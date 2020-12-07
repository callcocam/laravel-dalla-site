<template>
  <div class="vx-row mb-2">
    <div class="vx-col w-full">
      <label class="vs-input--label">{{ $t(collumn.label) }}</label>
      <v-select
        @input="updateSearchQuery"
        :options="collumn.options"
        :clearable="true"
        dir="ltr"
        v-model="selected"
        class="mb-4 md:mb-0"
      >
        <template #option="option">{{ $t(option.label) }}</template>
      </v-select>
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
  extends: AbstractFieldComponentVue,
  data() {
    return {
      selected: null
    };
  },
  created() {
    if (this.form[this.collumn.name]) {
      this.selected = _.filter(
        this.collumn.options,
        option => this.form[this.collumn.name] == option.code
      );
    }
  },
  methods: {
    updateSearchQuery() {
      this.form[this.collumn.name] = this.selected.code;
    }
  }
};
</script>

<style>
</style>
