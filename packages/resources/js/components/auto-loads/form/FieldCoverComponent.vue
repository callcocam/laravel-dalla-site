<template>
  <div id="profile-page" class="vx-row mb-8">
    <div class="vx-col w-full">
      <div class="profile-header">
        <div class="relative">
          <div class="cover-container rounded-t-lg">
            <img :src="form[collumn.name]" alt="user-profile-cover" class="responsive block" />
          </div>
          <div class="profile-img-container pointer-events-none">
            <div>
              <vs-avatar class="user-profile-img" :src="form[collumn.name]" size="85px" />
            </div>
            <div class="profile-actions pointer-events-auto flex">
              <input
                type="file"
                class="hidden"
                ref="update_avatar_input"
                @change="update_avatar"
                accept="image/*"
              />
              <vs-button
                icon-pack="feather"
                @click="$refs.update_avatar_input.click()"
                radius
                icon="icon-arrow-up"
              ></vs-button>
              <vs-button
                icon-pack="feather"
                color="danger"
                @click="confirmDeleteRecord()"
                radius
                icon="icon-trash"
                class="ml-2 lg:ml-4"
              ></vs-button>
            </div>
          </div>
        </div>
        <!-- <vx-navbar> -->
        <!-- </vx-navbar> -->
      </div>
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
      dd(this.collumn.upload);
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

<style lang="scss">
@import "@/assets/scss/vuexy/pages/profile.scss";
</style>
