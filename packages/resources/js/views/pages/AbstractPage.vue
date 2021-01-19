<template>
  <div>
    <!-- Content Header (Page header) -->
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <template v-if="user_not_found">
              <div class="h-screen flex w-full bg-img">
                <div
                  class="vx-col flex items-center justify-center flex-col sm:w-1/2 md:w-3/5 lg:w-3/4 xl:w-1/2 mx-auto text-center"
                >
                  <img src="/images/500.png" alt="graphic-500" class="mx-auto mb-4" />
                  <h1
                    class="sm:mx-0 mx-4 mb-4 sm:mb-12 text-5xl d-theme-heading-color"
                  >{{ getErrors }}</h1>
                  <router-link
                    tag="a"
                    :to="{name:'admin.dashboard'}"
                    class="btn btn-danger btn-lg"
                  >{{ $t('Back to Home') }}</router-link>
                </div>
              </div>
            </template>
            <template v-else>
              <template v-if="userTemplate">
                <component :is="currentTabComponent(userTemplate)"></component>
              </template>
            </template>
          </div>
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
  </div>
</template>

<script>
import { mapGetters, mapActions } from "vuex";
import moduleUserManagement from "@/store/modules/user-management/moduleUserManagement";

export default {
  data() {
    return {
      user_not_found: false,
      url: null,
      page: 1,
      lastPage: 1,
      params: {}
    };
  },
  computed: {
    ...mapGetters({
      userTemplate: "userManagement/getTemplate",
      getErrors: "userManagement/getErrors",
      meta: "userManagement/getMeta"
    })
  },
  methods: {
    handleChangePage(page) {
      console.log(
        `The user changed the page to:${this.meta.current_page} ${page}`
      );
      if (this.meta.current_page == page) return;
      if (!page) return;
      this.updateQueryString({ page: page });
    },
    currentTabComponent: function(Component) {
      return Component;
    }
  },
  created() {
    // Register Module UserManagement Module
    if (!moduleUserManagement.isRegistered) {
      this.$store.registerModule("userManagement", moduleUserManagement);
      moduleUserManagement.isRegistered = true;
    }
  }
};
</script>

<style>
</style>
