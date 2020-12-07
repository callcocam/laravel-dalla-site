<template>
  <div class="vx-row mb-2">
    <div class="vx-col w-full">
      <label class="vs-input--label">{{ $t(collumn.label) }}</label>
      <datepicker
        :label="collumn.label"
        :format="collumn.attributes.format || 'yyyy-MM-dd'"
        :language="languages[language]"
        :placeholder="collumn.attributes.placeholder || $t(collumn.label)"
        v-model="form[collumn.name]"
      ></datepicker>
      <span
        class="text-danger text-sm"
        v-show="form.errors.has(collumn.name)"
      >{{ form.errors.get(collumn.name) }}</span>
    </div>
  </div>
</template>

<script>
import AbstractFieldComponentVue from "@/components/AbstractFieldComponent.vue";

import Datepicker from "vuejs-datepicker";
import * as lang from "vuejs-datepicker/src/locale";
export default {
  extends: AbstractFieldComponentVue,
  components: {
    Datepicker
  },
  data() {
    return {
      date: null,
      languages: lang,
      language: "ptBR"
    };
  },
  watch: {
    date(val) {
      this.form[this.collumn.name] = val;
    }
  },
  created() {
    this.date = this.collumn.value;
  }
};
</script>

<style>
</style>
