<template>
  <div>
    <div class="vx-row">
      <template v-if="filters">
        <template v-for="(filter, index) in filters">
          <component
            :key="index"
            :collumn="filter"
            :index="index"
            :is="currentTabComponent(filter.component)"
          ></component>
        </template>
      </template>
    </div>
  </div>
</template>

<script>
import { mapGetters, mapActions } from "vuex";
export default {
  name: "vsx-filters",
  data() {
    return {};
  },
  computed: {
    ...mapGetters({
      filters: "userManagement/getFilters"
    })
  },
  methods: {
    currentTabComponent: function(Component) {
      return Component;
    }
  }
};
</script>
