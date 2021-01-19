<template>
  <div class="vx-row mb-2">
    <div class="vx-col w-full" v-if="form">
      <form @submit.prevent="submit">
        <template v-for="(row, i) in rows">
          <template v-if="row">
            <template v-if="!row.hidden_edit">
              <component
                :key="i"
                :collumn="row"
                :form="form"
                :is="currentTabComponent(row.component)"
              ></component>
            </template>
          </template>
        </template>
        <div class="vx-row">
          <div class="vx-col w-full">
            <vs-button @click.native="submit" class="mr-3 mb-2">Submit</vs-button>
          </div>
        </div>
      </form>
    </div>
  </div>
</template>
<script>
import { Form } from "vform";
export default {
  props: {
    rows: {
      type: [Object, Array, String],
      required: true
    },
    index: {
      type: [Object, Array, String]
    }
  },
  data() {
    return {
      form: null
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
    if (this.rows) {
      Object.values(this.rows).map(item => {
        if (item) {
          if (item.type) {
            data[item.name] = item.value;
          }
        }
      });
    }
    this.form = new Form(data);
  }
};
</script>

<style>
</style>
