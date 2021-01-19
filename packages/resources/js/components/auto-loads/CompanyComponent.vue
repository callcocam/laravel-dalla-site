<template>
  <div id="page-user-view">
    <vs-alert color="danger" title="User Not Found" :active.sync="user_not_found">
      <span>User record with not found.</span>
      <span>
        <span>Check</span>
        <router-link
          :to="{name:'admin'}"
          class="text-inherit underline"
        >{{ $t('Back To Dashboard')}}</router-link>
      </span>
    </vs-alert>
    <div id="user-data" v-if="company_data">
      <vx-card title="Account" class="mb-base">
        <!-- Avatar -->
        <div class="vx-row">
          <!-- Avatar Col -->
          <div class="vx-col" id="avatar-col">
            <div class="img-container mb-4">
              <img :src="company_data.cover.value" class="rounded w-full" />
            </div>
          </div>

          <!-- Information - Col 1 -->
          <div class="vx-col flex-1" id="account-info-col-1">
            <table>
              <tr>
                <td class="font-semibold">Name</td>
                <td>{{ company_data.name.value }}</td>
              </tr>
              <tr>
                <td class="font-semibold">Email</td>
                <td>{{ company_data.email.value }}</td>
              </tr>
            </table>
          </div>
          <!-- /Information - Col 1 -->

          <!-- Information - Col 2 -->
          <div class="vx-col flex-1" id="account-info-col-2">
            <table>
              <tr>
                <td class="font-semibold">Status</td>
                <td><ShowStatusComponent :collumn="company_data.status"/></td>
              </tr>
              <tr v-if="company_data.tenant">
                <td class="font-semibold">Company</td>
                <td>{{ company_data.tenant.value.name }}</td>
              </tr>
              <tr v-if="company_data.address">
                <td class="font-semibold">{{ $t('Address')}}</td>
                <td>
                  <template v-if="company_data.address">
                    <span>{{ company_data.address.value.street }}</span> -
                    <span>{{ company_data.address.value.number }}</span>,
                    <span>{{ company_data.address.value.district }}</span>,
                    <span>{{ company_data.address.value.zip }}</span>,
                    <span>{{ company_data.address.value.city }}</span>/
                    <span>{{ company_data.address.value.state }}</span>
                  </template>
                </td>
              </tr>
            </table>
          </div>
          <!-- /Information - Col 2 -->
        </div>
      </vx-card>

      <div class="vx-row">
        <div class="vx-col w-full">
          <vx-card title="Information" class="mb-base">
            <table>
              <tr>
                <td class="font-semibold">Mobile</td>
                <td></td>
              </tr>
              <tr>
                <td class="font-semibold">{{ $t('Documents')}}</td>
                <td>
                  <template v-if="company_data.documents">
                    <span
                      v-for="document in company_data.documents.value"
                      :key="document.id"
                    >{{ document.name }}</span>
                  </template>
                </td>
              </tr>
              <tr>
                <td class="font-semibold">Contact</td>
                <td>
                  <template v-if="company_data.contacts">
                    <span
                      v-for="contact in company_data.contacts.value"
                      :key="contact.id"
                    >{{ contact.name }}</span>
                  </template>
                </td>
              </tr>
            </table>
          </vx-card>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapGetters, mapActions } from "vuex";
export default {
  data() {
    return {
      user_not_found: false
    };
  },
  computed: {
    ...mapGetters({
      company_data: "userManagement/getCompany"
    })
  },
  methods: {}
};
</script>

<style>
</style>
