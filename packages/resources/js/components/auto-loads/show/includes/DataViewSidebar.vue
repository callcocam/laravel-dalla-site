<!-- =========================================================================================
  File Name: AddNewDataSidebar.vue
  Description: Add New Data - Sidebar component
  ----------------------------------------------------------------------------------------
  Item Name: Vuexy - Vuejs, HTML & Laravel Admin Dashboard Template
  Author: Pixinvent
  Author URL: http://www.themeforest.net/user/pixinvent
========================================================================================== -->


<template>
  <vs-sidebar
    click-not-close
    position-right
    parent="body"
    default-index="1"
    color="primary"
    class="add-new-data-sidebar items-no-padding"
    spacer
    v-model="isSidebarActiveLocal"
  >
    <div class="mt-6 flex items-center justify-between px-6">
      <h4>{{ Object.entries(this.data).length === 0 ? "ADD NEW" : "UPDATE" }} ITEM</h4>
      <feather-icon icon="XIcon" @click.stop="isSidebarActiveLocal = false" class="cursor-pointer"></feather-icon>
    </div>
    <vs-divider class="mb-0"></vs-divider>

    <VuePerfectScrollbar class="scroll-area--data-list-add-new" :settings="settings" :key="$vs.rtl">
      <div class="p-6" v-if="form">
        <!-- Product Image -->
        <!-- NAME -->
        <vs-input label="Field" v-model="form.Field" class="mt-5 w-full" name="Field" />
        <span
          class="text-danger text-sm"
          v-show="form.errors.has('Field')"
        >{{ form.errors.get('Field') }}</span>

        <vs-input label="Type" v-model="form.Type" class="mt-5 w-full" name="Type" />
        <span
          class="text-danger text-sm"
          v-show="form.errors.has('Type')"
        >{{ form.errors.get('Type') }}</span>

        <vs-input label="Null" v-model="form.Null" class="mt-5 w-full" name="Null" />
        <span
          class="text-danger text-sm"
          v-show="form.errors.has('Null')"
        >{{ form.errors.get('Null') }}</span>

        <vs-input label="Key" v-model="form.Key" class="mt-5 w-full" name="Key" />
        <span
          class="text-danger text-sm"
          v-show="form.errors.has('Key')"
        >{{ form.errors.get('Key') }}</span>

        <vs-input label="Default" v-model="form.Default" class="mt-5 w-full" name="Default" />
        <span
          class="text-danger text-sm"
          v-show="form.errors.has('Default')"
        >{{ form.errors.get('Default') }}</span>

        <vs-input label="Extra" v-model="form.Extra" class="mt-5 w-full" name="Extra" />
        <span
          class="text-danger text-sm"
          v-show="form.errors.has('Extra')"
        >{{ form.errors.get('Extra') }}</span>
      </div>
    </VuePerfectScrollbar>

    <div class="flex flex-wrap items-center p-6" slot="footer">
      <vs-button class="mr-6" @click="submitData">{{ $t('Submit') }}</vs-button>
      <vs-button type="border" color="danger" @click="isSidebarActiveLocal = false">Cancel</vs-button>
    </div>
  </vs-sidebar>
</template>

<script>
import VuePerfectScrollbar from "vue-perfect-scrollbar";
import { Form } from "vform";

export default {
  props: {
    isSidebarActive: {
      type: Boolean,
      required: true
    },
    data: {
      type: Object,
      default: () => {}
    }
  },
  watch: {
    isSidebarActive(val) {
      if (!val) return;
      if (Object.entries(this.data).length === 0) {
        this.initValues();
      } else {
        this.form = new Form(this.data);
        this.initValues();
      }
    }
  },
  data() {
    return {
      form: null,
      settings: {
        // perfectscrollbar settings
        maxScrollbarLength: 60,
        wheelSpeed: 0.6
      }
    };
  },
  computed: {
    isSidebarActiveLocal: {
      get() {
        return this.isSidebarActive;
      },
      set(val) {
        if (!val) {
          this.$emit("closeSidebar");
          this.form = null;
        }
      }
    }
  },
  methods: {
    initValues() {
      if (this.data.Field) return;
      this.form = new Form({
        Field: "",
        Type: "",
        Null: 'YES',
        Key: "",
        Default: "",
        Extra: ""
      });
    },
    submitData() {
      this.form.post("api/v1/makes/table").then(result => {
        this.$emit("closeSidebar");
        this.initValues();
      });
    }
  },
  components: {
    VuePerfectScrollbar
  }
};
</script>

<style lang="scss" scoped>
.add-new-data-sidebar {
  ::v-deep .vs-sidebar--background {
    z-index: 52010;
  }

  ::v-deep .vs-sidebar {
    z-index: 52010;
    width: 400px;
    max-width: 90vw;

    .img-upload {
      margin-top: 2rem;

      .con-img-upload {
        padding: 0;
      }

      .con-input-upload {
        width: 100%;
        margin: 0;
      }
    }
  }
}

.scroll-area--data-list-add-new {
  // height: calc(var(--vh, 1vh) * 100 - 4.3rem);
  height: calc(var(--vh, 1vh) * 100 - 16px - 45px - 82px);
}
</style>
