<template>
  <div class="vx-row mb-2">
    <div class="vx-col w-full">
       <label class="vs-input--label">{{ $t(collumn.label) }}</label>
      <quill-editor v-model="form[collumn.name]" ref="myQuillEditor" :options="editorOption"></quill-editor>
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

import { quillEditor, Quill } from "vue-quill-editor";
import { container, ImageExtend, QuillWatch } from "quill-image-extend-module";

Quill.register("modules/ImageExtend", ImageExtend);
export default {
  extends: AbstractFieldComponentVue,
  components: {
    quillEditor
  },
  data() {
    return {
      content: "",
      // 富文本框参数设置
      editorOption: {
        modules: {
          ImageExtend: {
            loading: true,
            name: "img",
            action: "",
            response: res => {
              return res.info;
            }
          },
          toolbar: {
            container: container,
            handlers: {
              image: function() {
                QuillWatch.emit(this.quill.id);
              }
            }
          }
        }
      }
    };
  }
};
</script>

<style>
</style>
