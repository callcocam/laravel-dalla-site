<template>
  <div class="vx-col md:w-1/4 sm:w-1/2 w-full">
    <v-select
      @input="updateSearchQuery"
      :options="collumn.options"
      :clearable="true"
      dir="ltr"
      v-model="collumn.value"
      class="mb-4 md:mb-0"
    >
      <template #option="option">
       {{ $t(option.label) }}
      </template>
    </v-select>
  </div>
</template>

<script>
import { mapState } from "vuex";

import AbstractFieldComponentVue from "@/components/AbstractFieldComponent.vue";
export default {
  extends: AbstractFieldComponentVue,
  data() {
    return {
      // Filter Options
      searchQuery: ""
    };
  },
  methods: {
    updateSearchQuery(searching) {
      console.log(`The user searched for 2: ${this.collumn.default}`, searching);
      if (!searching || searching.value == this.collumn.default) {
        this.cancelEdit();
      } else {
        this.updateQueryString({
          page: 1,
          [this.index]: searching.value
        });
      }
    }
  }
};
</script>

<style>
</style>
