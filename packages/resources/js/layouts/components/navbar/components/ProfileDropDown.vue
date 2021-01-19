<template>
  <div class="the-navbar__user-meta flex items-center" v-if="activeUserInfo.name">
    <div class="text-right leading-tight hidden sm:block">
      <p class="font-semibold">{{ activeUserInfo.name }} </p>
      <small>Available</small>
    </div>

    <vs-dropdown vs-custom-content vs-trigger-click class="cursor-pointer">
      <div class="con-img ml-3">
        <img
          v-if="activeUserInfo.cover"
          key="onlineImg"
          :src="activeUserInfo.cover"
          alt="user-img"
          width="40"
          height="40"
          class="rounded-full shadow-md cursor-pointer block"
        />
      </div>

      <vs-dropdown-menu class="vx-navbar-dropdown">
        <ul style="min-width: 9rem">
           <li
            class="flex py-2 px-4 cursor-pointer hover:bg-primary hover:text-white"
            @click="$router.push({name: 'admin.auth.profile'}).catch(() => {})">
            <feather-icon icon="UserIcon" svgClasses="w-4 h-4" />
            <span class="ml-2">{{ $t('Profile') }}</span>
          </li>
          <vs-divider class="m-1" />
          <li
            class="flex py-2 px-4 cursor-pointer hover:bg-primary hover:text-white"
            @click="logout"
          >
            <form ref="logoutForm" action="/logout" method="POST" style="display: none;">
              <input type="text" name="_token" :value="token" />
            </form>
            <feather-icon icon="LogOutIcon" svgClasses="w-4 h-4" />
            <span class="ml-2">Logout</span>
          </li>
        </ul>
      </vs-dropdown-menu>
    </vs-dropdown>
  </div>
</template>

<script>
export default {
  data() {
    return {
      token:null
    };
  },
  computed: {
    activeUserInfo() {
      return this.$store.state.AppActiveUser;
    }
  },
  methods: {
    logout() {
      // This is just for demo Purpose. If user clicks on logout -> redirect
      this.$auth.logOut();

      this.$refs.logoutForm.submit();
    }
  },
  created() {
    this.token = document.head.querySelector('meta[name="csrf-token"]').content;
  }
};
</script>
