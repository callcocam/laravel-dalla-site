<template>
  <div class="vx-row">
    <div class="flex items-start flex-col sm:flex-row">
      <!-- <img :src="form[collumn.name]" class="mr-8 rounded h-24 w-24" /> -->
      <vs-avatar :src="form[collumn.name]" size="80px" class="mr-8 ml-4" />
      <div>
        <input
          type="file"
          class="hidden"
          ref="update_avatar_input"
          @change="update_avatar"
          accept="image/*"
        />
        <!-- Toggle comment of below buttons as one for actual flow & currently shown is only for demo -->
        <vs-button
          type="border"
          class="mr-4 mt-8"
          @click="$refs.update_avatar_input.click()"
        >{{ $t('Change Avatar') }}</vs-button>
        <vs-button
          type="border"
          v-if="collumn.remove"
          color="danger"
          @click="confirmDeleteRecord()"
        >{{ $t('Remove Avatar') }}</vs-button>
      </div>
      <span
        class="text-danger text-sm"
        v-show="form.errors.has(collumn.name)"
      >{{ form.errors.get(collumn.name) }}</span>
    </div>
  </div>
</template>

<script>
import AbstractFieldComponentVue from "@/components/AbstractFieldComponent.vue";

import { Form } from "vform";
import { objectToFormData } from "object-to-formdata";
export default {
  extends: AbstractFieldComponentVue,
  data() {
    return {
      uploadForm: new Form({
        file: ""
      })
    };
  },
  methods: {
    remove_file() {
      this.uploadForm.file = this.form[this.collumn.name];
      this.uploadForm.submit("post", this.collumn.remove).then(({ data }) => {
        this.form[this.collumn.name] = data.path;
      });
    },
    confirmDeleteRecord() {
      this.$vs.dialog({
        type: "confirm",
        color: "danger",
        title: `Por favor confirme`,
        text: `Deseja realmente excluir a imagem "${
          this.form[this.collumn.name]
        }"`,
        accept: this.remove_file,
        acceptText: "Excluir"
      });
    },
    update_avatar(e) {
      const file = e.target.files[0];
      this.uploadForm.file = file;

      this.uploadForm
        .submit("post", this.collumn.upload, {
          // Transform form data to FormData
          transformRequest: [
            function(data, headers) {
              return objectToFormData(data);
            }
          ],
          onUploadProgress: e => {}
        })
        .then(({ data }) => {
          this.form[this.collumn.name] = data.path;
        });
    }
  }
};
</script>

<style>
</style>
