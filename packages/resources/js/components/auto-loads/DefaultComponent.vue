<template>
  <div>
    <vx-card ref="filterCard" title="Filters" class="user-list-filters mb-8">
      <vsx-filters />
    </vx-card>
    <div class="vx-card p-6">
      <div class="flex flex-wrap items-center">
        <!-- ITEMS PER PAGE -->
        <div class="flex-grow">
          <vs-dropdown vs-trigger-click class="cursor-pointer" v-if="options">
            <div
              class="p-4 border border-solid d-theme-border-grey-light rounded-full d-theme-dark-bg cursor-pointer flex items-center justify-between font-medium"
            >
              <span
                class="mr-2"
                v-if="meta"
              >{{ meta.from }} - {{ meta.per_page * meta.current_page }} of {{ meta.total }}</span>
              <feather-icon icon="ChevronDownIcon" svgClasses="h-4 w-4" />
            </div>
            <!-- <vs-button class="btn-drop" type="line" color="primary" icon-pack="feather" icon="icon-chevron-down"></vs-button> -->
            <vs-dropdown-menu>
              <vs-dropdown-item
                v-for="option in options.itemsPerPage"
                @click="paginationSetPageSize(option)"
                :key="option"
              >
                <span>{{ option }}</span>
              </vs-dropdown-item>
            </vs-dropdown-menu>
          </vs-dropdown>
        </div>
        <!-- ACTION - DROPDOWN -->
        <template v-if="navigations">
          <template v-for="(navigation, i) in navigations">
            <vs-button
              :key="i"
              :color="navigation.color"
              :to="navigation.route"
            >{{ $t(navigation.label) }}</vs-button>
          </template>
        </template>
        <template v-if="actions">
          <vs-dropdown v-if="selected.length" vs-trigger-click class="cursor-pointer ml-3">
            <div
              class="p-3 shadow-drop rounded-lg d-theme-dark-light-bg cursor-pointer flex items-end justify-center text-lg font-medium w-32"
            >
              <span class="mr-2 leading-none">Actions</span>
              <feather-icon icon="ChevronDownIcon" svgClasses="h-4 w-4" />
            </div>

            <vs-dropdown-menu>
              <template v-for="(action, i) in actions">
                <component :key="i" :selected="selected" :action="action" :is="currentTabComponent(action.component)"></component>
              </template>
            </vs-dropdown-menu>
          </vs-dropdown>
        </template>
      </div>
    </div>
    <div class="vx-card p-6">
      <vs-table
        v-if="user_data"
        multiple
        :sst="true"
        @sort="handleSort"
        v-model="selected"
        :data="user_data"
      >
        <template slot="thead" v-if="user_headers">
          <template v-for="(tr,indexTh) in user_headers">
            <template v-if="tr.label">
              <template v-if="!tr.hidden_index">
                <template v-if="tr.sortable === true">
                  <vs-th :sort-key="tr.name" :key="indexTh">{{ tr.label }}</vs-th>
                </template>
                <template v-else>
                  <vs-th :key="indexTh">{{ tr.label }}</vs-th>
                </template>
              </template>
            </template>
          </template>
        </template>

        <template slot-scope="{data}">
          <vs-tr :data="tr" :key="index" v-for="(tr, index) in data">
            <template v-for="header in user_headers">
              <template v-if="!header.hidden_index">
                <vs-td :data="tr" :key="header.name+index">
                  <component
                    :collumn="tr[header.name]"
                    :is="currentTabComponent(header.cellRendererFramework)"
                  ></component>
                </vs-td>
              </template>
            </template>
          </vs-tr>
        </template>
      </vs-table>
      <vs-card v-if="meta">
        <vsx-pagination :source="meta"></vsx-pagination>
      </vs-card>
    </div>
  </div>
</template>

<script>
import { mapGetters, mapActions } from "vuex";
export default {
  data() {
    return {
      // Filter Options
      params: { page: 1 },
      searchQuery: "",
      selected: [],
      log: [],
      user_not_found: false
    };
  },
  created() {
    this.params = Object.assign({}, this.$route.query);
  },
  computed: {
    ...mapGetters({
      meta: "userManagement/getMeta",
      actions: "userManagement/getActions",
      navigations: "userManagement/getNavigations",
      filters: "userManagement/getFilters",
      user_headers: "userManagement/getHeaders",
      options: "userManagement/getOptions",
      user_data: "userManagement/getAll"
    })
  },
  methods: {
    headerNames(header) {
      return header;
    },
    paginationSetPageSize(per_page) {
      dd(`The user per_page for: ${per_page}`);
      this.updateQueryString({
        page: 1,
        per_page: per_page
      });
    },
    updateSearchQuery(searching) {
      dd(`The user searched for: ${searching}`);
      this.updateQueryString({
        page: 1,
        search: searching
      });
    },
    handleSort(key, active) {
      if (!active) return;
      if (!key) return;
      dd(`the user ordered: ${key} ${active}`);
      this.updateQueryString({
        order: active,
        collumn: key
      });
    },
    currentTabComponent: function(Component) {
      return Component;
    },
    updateQueryString(params) {
      this.$router
        .replace({
          query: Object.assign({}, this.$route.query, params)
        })
        .catch(err => {
          dd("err", err);
        });
    }
  }
};
</script>

<style>
</style>
