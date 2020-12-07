<template>
  <form @submit.prevent="submit">
    <div class="form-group row">
      <label for="email" class="col-md-4 col-form-label text-md-right">{{ $t('E-Mail Address') }}</label>
      <div class="col-md-6">
        <input
          id="email"
          type="email"
          class="form-control"
          v-bind:class="{ 'is-invalid': form.errors.has('email') }"
          name="email"
          v-model="form.email"
          required
          autocomplete="email"
          autofocus
        />
        <span role="alert" v-if="form.errors.has('email')">
          <strong>{{ form.errors.get('email')}}</strong>
        </span>
      </div>
    </div>

    <div class="form-group row">
      <label for="password" class="col-md-4 col-form-label text-md-right">{{ $t('Password') }}</label>

      <div class="col-md-6">
        <input
          id="password"
          type="password"
          class="form-control"
          v-bind:class="{ 'is-invalid': form.errors.has('password') }"
          v-model="form.password"
          name="password"
          required
          autocomplete="current-password"
        />
        <span role="alert" v-if="form.errors.has('password')">
          <strong>{{form.errors.get('password')}}</strong>
        </span>
      </div>
    </div>

    <div class="form-group row">
      <div class="col-md-6 offset-md-4">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="remember" id="remember" />
          <label class="form-check-label" for="remember">{{ $t('Remember Me') }}</label>
        </div>
      </div>
    </div>

    <div class="form-group row mb-0">
      <div class="col-md-8 offset-md-4">
        <VueLoadingButton
          @click.native="submit"
          :loading="isLoading"
          class="btn btn-primary"
        >{{ $t('Login') }}</VueLoadingButton>
      </div>
    </div>
  </form>
</template>

<script>
export default {
  data() {
    return {
      isLoading: false,
      form: new Form({
        email: "super-admin@localhost.crm-11.test",
        password: "password"
      })
    };
  },
  methods: {
    submit() {
      this.form.errors.clear();

      this.isLoading = true;

      this.form
        .get("/sanctum/csrf-cookie")
        .then(user => {
          this.form
            .post("/login")
            .then(user => {
              let params = new URL(document.location).searchParams;
              let redirect = params.get("redirect");
              if (params.has("redirect") === true) {
                window.location.href = redirect;
              } else {
                window.location.href = "/";
              }
            })
            .catch(err => {
              this.isLoading = false;
              console.log("login err", err);
            });
        })
        .catch(() => {
          this.isLoading = false;
        });
    }
  },
  mounted() {
    console.log("Component mounted.");
  }
};
</script>
