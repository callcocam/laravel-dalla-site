<template>
  <div class="vx-row mb-2">
    <div class="vx-col w-full">
      <ckeditor :editor="editor" v-model="form[collumn.name]" :config="editorConfig"></ckeditor>
    </div>
  </div>
</template>

<script>
import AbstractFieldComponentVue from "@/components/AbstractFieldComponent.vue";
import ClassicEditor from "@ckeditor/ckeditor5-build-classic";
export default {
  extends: AbstractFieldComponentVue,
  data() {
    return {
      editor: ClassicEditor,
      editorData: "<p>Content of the editor.</p>",
      editorConfig: {
        // The configuration of the editor.
      }
    };
  }
};
</script>
