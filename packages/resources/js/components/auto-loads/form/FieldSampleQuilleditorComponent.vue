<template>
  <div class="vx-row mb-6">
    <div class="vx-col sm:w-1/3 w-full">
      <span>{{ collumn.label }}</span>
    </div>
    <div class="vx-col sm:w-2/3 w-full">
      <quill-editor v-model="content" :options="editorOption">
        <div id="toolbar" slot="toolbar">
          <!-- Add a bold button -->
          <button class="ql-bold">Bold</button>
          <button class="ql-italic">Italic</button>

          <!-- Add font size dropdown -->
          <select class="ql-size">
            <option value="small"></option>
            <!-- Note a missing, thus falsy value, is used to reset to default -->
            <option selected></option>
            <option value="large"></option>
            <option value="huge"></option>
          </select>

          <select class="ql-font">
            <option selected="selected"></option>
            <option value="serif"></option>
            <option value="monospace"></option>
          </select>

          <!-- Add subscript and superscript buttons -->
          <button class="ql-script" value="sub"></button>
          <button class="ql-script" value="super"></button>

          <!-- You can also add your own -->
          <button style="width:auto" @click="customButtonClick">Click here</button>
        </div>
      </quill-editor>
      <span
        class="text-danger text-sm"
        v-show="form.errors.has(collumn.name)"
      >{{ form.errors.get(collumn.name) }}</span>
    </div>
  </div>
</template>

<script>
import AbstractFieldComponentVue from "@/components/AbstractFieldComponent.vue";
// require styles
import "quill/dist/quill.core.css";
import "quill/dist/quill.snow.css";
import "quill/dist/quill.bubble.css";

import { quillEditor } from "vue-quill-editor";

export default {
  extends: AbstractFieldComponentVue,
  data() {
    return {
      editorOption: {
        modules: {
          toolbar: "#toolbar"
        }
      },
      content: `...`
    };
  },
  components: {
    quillEditor
  },
  methods: {
    customButtonClick() {
      alert("Button clicked!");
    }
  }
};
</script>
