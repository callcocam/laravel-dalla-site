<template>
  <div class="vx-row mb-2">
    <div class="vx-col w-full" v-if="form">
      <template v-for="(row, i) in collumn.value">
        <template v-if="row">
          <template v-if="!row.hidden_edit">
            <component
              :key="i"
              :collumn="row"
              :form="formChild"
              :is="currentTabComponent(row.component)"
            ></component>
          </template>
        </template>
      </template>
    </div>
  </div>
</template>
<script>
import { Form } from "vform";
import AbstractFieldComponentVue from "@/components/AbstractFieldComponent.vue";
export default {
  extends: AbstractFieldComponentVue,
  data() {
    return {
      formChild: null
    };
  },
  methods: {
    currentTabComponent: function(Component) {
      return Component;
    },
    submit() {}
  },
  created() {
    let data = [];
    if (this.collumn) {
      if (this.collumn.value) {
        Object.values(this.collumn.value).map(item => {
          if (item) {
            if (item.type) {
              data[item.name] = item.value;
            }
          }
        });
      }
    }
    this.formChild = new Form(data);
    this.form[this.collumn.name] = this.formChild;
  }
};
</script>
