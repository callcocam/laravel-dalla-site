<template>
  <div class="vx-col md:w-1/3 sm:w-1/2 w-full"  code-toggler>
    <div class="float-left">
      <flat-pickr
        :config="configFromdateTimePicker"
        v-model="fromDate"
        :placeholder="collumn.label"
        @on-change="onFromChange"
      />
    </div>
  </div>
</template>

<script>
import { mapState } from "vuex";

import flatPickr from "vue-flatpickr-component";
import "flatpickr/dist/flatpickr.css";
import AbstractFieldComponentVue from "@/components/AbstractFieldComponent.vue";
export default {
  extends: AbstractFieldComponentVue,
  components: {
    flatPickr
  },
  data() {
    return {
      fromDate: null,
      toDate: null,
      configFromdateTimePicker: {
        minDate: new Date(),
        maxDate: null
      },
      configTodateTimePicker: {
        minDate: null
      }
    };
  },
  methods: {
    onFromChange(selectedDates, dateStr, instance) {
      this.$set(this.configTodateTimePicker, "minDate", dateStr);
    },
    onToChange(selectedDates, dateStr, instance) {
      this.$set(this.configFromdateTimePicker, "maxDate", dateStr);
    },
    updateSearchQuery(searching) {
      console.log(`The user searched for 2: ${this.collumn.default}`);
      if (searching.value == this.collumn.default) {
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

