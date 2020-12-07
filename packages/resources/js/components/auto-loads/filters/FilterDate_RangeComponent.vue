<template>
  <div class="vx-col md:w-1/4 sm:w-1/2 w-full">
    <date-range-picker
      v-model="dateRange"
      @update="updateSearchQuery"
      controlContainerClass
      :showDropdowns="true"
      :localeData="$DateUtil.localeData(localeData)"
      :ranges="ranges"
      :timePicker24Hour="true"
    >
      <!--    input slot (new slot syntax)-->

      <template #input="picker" style="min-width: 350px;">
        <vs-input
          icon-pack="feather"
          icon="icon-calendar"
          icon-after
          vs-icon-after="true"
          :value="('start-end').replace('start', picker.startDate.toLocaleDateString()).replace('end', picker.endDate.toLocaleDateString())"
        />
      </template>
      <!--    ranges (new slot syntax) -->
      <template #ranges="ranges">
        <div class="ranges">
          <ul>
            <li
              v-for="(range, name) in ranges.ranges"
              :key="name"
              @click="ranges.clickRange(range)"
            >
              <b>{{name}}</b>
              <small
                class="text-muted"
              >{{range[0].toLocaleDateString()}} - {{range[1].toLocaleDateString()}}</small>
            </li>
          </ul>
        </div>
      </template>
      <!--    footer slot-->
      <div slot="footer" slot-scope="data" class="vx-card__footer">
        <vs-row vs-w="12">
          <vs-col vs-type="flex" vs-justify="center" vs-align="center" vs-w="8">
            <b class="text-black">Calendar footer</b>
            - {{data.rangeText}}
          </vs-col>
          <vs-col vs-type="flex" vs-justify="center" vs-align="right" vs-w="4">
            <vs-button
              @click="clickCancel(data)"
              v-if="!data.in_selection"
              color="primary"
              class="ml-2"
              type="filled"
            >{{ $t("Cancel")}}</vs-button>
            <vs-button
              @click="clickApply(data)"
              v-if="!data.in_selection"
              color="success"
              type="filled"
              class="ml-2"
            >{{ $t("Apply")}}</vs-button>
          </vs-col>
        </vs-row>
      </div>
    </date-range-picker>
  </div>
</template>

<script>
import { mapState } from "vuex";

import AbstractFieldComponentVue from "@/components/AbstractFieldComponent.vue";
import DateRangePicker from "vue2-daterange-picker";
export default {
  extends: AbstractFieldComponentVue,
  components: { DateRangePicker },
  data() {
    let today = new Date();
    // let startDate = new Date(today.getFullYear(), today.getMonth(), 1);
    // let endDate = new Date(
    //   today.getFullYear(),
    //   today.getMonth(),
    //   today.getDay()
    // );
    let startDate = new Date(this.collumn.value.start);
    let endDate = new Date(this.collumn.value.end);

    //endDate.setDate(endDate.getDate() + 6);

    today.setHours(0, 0, 0, 0);
    let yesterday = new Date();
    yesterday.setDate(today.getDate() - 1);
    yesterday.setHours(0, 0, 0, 0);
    let thisMonthStart = new Date(today.getFullYear(), today.getMonth(), 1);
    let thisMonthEnd = new Date(today.getFullYear(), today.getMonth() + 1, 0);

    return {
      dateRange: { startDate, endDate },
      ranges: {
        Hoje: [today, today],
        Ontem: [yesterday, yesterday],
        "Este mês": [thisMonthStart, thisMonthEnd],
        "Este ano": [
          new Date(today.getFullYear(), 0, 1),
          new Date(today.getFullYear(), 11, 31)
        ],
        "Último mês": [
          new Date(today.getFullYear(), today.getMonth() - 1, 1),
          new Date(today.getFullYear(), today.getMonth(), 0)
        ]
      },
      localeData: {
        direction: "ltr",
        format: "mm/dd/yyyy",
        separator: " - ",
        applyLabel: "Aplicar",
        cancelLabel: "Cancelar",
        weekLabel: "W",
        customRangeLabel: "Perssonalizado",
        daysOfWeek: ["Do", "Se", "Te", "Qua", "Qui", "Sex", "Sab"],
        monthNames: [
          "Jan",
          "Fev",
          "Mar",
          "Abr",
          "Mai",
          "Jun",
          "Jul",
          "Ago",
          "Set",
          "Out",
          "Nov",
          "Dez"
        ]
      }
    };
  },
  filters: {
    date(val) {
      return val ? val.toLocaleString() : "";
    }
  },
  methods: {
    clickApply(data) {
      data.clickApply();
    },
    clickCancel(data) {
      data.clickCancel();
      this.updateQueryString(
        {
          page: 1
        },
        ["range"]
      );
    },
    updateSearchQuery(searching) {
      this.$DateUtil.log(searching);
      this.collumn.value = {
        start: searching.startDate.toDateString(),
        end: searching.endDate.toDateString()
      };
      this.updateQueryString({
        page: 1,
        range: "start_end"
          .replace(
            "start",
            searching.startDate
              .toLocaleDateString()
              .replace("/", "-")
              .replace("/", "-")
              .replace("/", "-")
          )
          .replace(
            "end",
            searching.endDate
              .toLocaleDateString()
              .replace("/", "-")
              .replace("/", "-")
              .replace("/", "-")
          )
      });
    }
  }
};
</script>
//you need to import the CSS manually (in case you want to override it)
<style  lang="scss">
@import "~vue2-daterange-picker/dist/vue2-daterange-picker.css";

.daterangepicker.show-calendar .ranges {
  margin-top: 8px;
  display: inline-block;
}

.daterangepicker .calendars-container {
  float: right;
}
.slot {
  background-color: #aaa;
  padding: 0.5rem;
  color: white;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.text-black {
  color: #000;
}
</style>
