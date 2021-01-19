<template>
  <div class="vx-col md:w-1/4 sm:w-1/2 w-full">
    <vs-input
      class="sm:mr-4 mr-0 sm:w-auto w-full sm:order-normal order-3 sm:mt-0 mt-4"
      v-model="collumn.value"
      @keyup.enter="updateSearchQuery"
      @keyup.esc="cancelEdit"
      :placeholder="$t(collumn.label)"
    />
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
      console.log(`The user searched for 2: ${searching.target.value}`);
      this.updateQueryString({
        page: 1,
        [this.index]: searching.target.value
      });
    }
  }
};
</script>

<style>
</style>
