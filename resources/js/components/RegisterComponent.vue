<template>
  <form @submit.prevent="submit">
    <div class="form-group row">
      <label for="name" class="col-md-4 col-form-label text-md-right">{{ $t('Name') }}</label>
      <div class="col-md-6">
        <input
          id="name"
          type="text"
          class="form-control"
          v-bind:class="{ 'is-invalid': form.errors.has('name') }"
          name="name"
          v-model="form.name"
          autocomplete="name"
          autofocus
        />
        <span role="alert" v-if="form.errors.has('name')">
          <strong>{{ form.errors.get('name')}}</strong>
        </span>
      </div>
    </div>

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
          autocomplete="current-password"
        />
        <span role="alert" v-if="form.errors.has('password')">
          <strong>{{form.errors.get('password')}}</strong>
        </span>
      </div>
    </div>

    <div class="form-group row">
      <label
        for="password_confirmation"
        class="col-md-4 col-form-label text-md-right"
      >{{ $t('Password Confirmation') }}</label>

      <div class="col-md-6">
        <input
          id="password_confirmation"
          type="password"
          class="form-control"
          v-bind:class="{ 'is-invalid': form.errors.has('password_confirmation') }"
          v-model="form.password_confirmation"
          name="password_confirmation"
          autocomplete="current-password"
        />
        <span role="alert" v-if="form.errors.has('password_confirmation')">
          <strong>{{form.errors.get('password_confirmation')}}</strong>
        </span>
      </div>
    </div>

    <div class="form-group row mb-0">
      <div class="col-md-8 offset-md-4">
        <VueLoadingButton
          @click.native="submit"
          :loading="isLoading"
          class="btn btn-primary"
        >{{ $t('Register') }}</VueLoadingButton>
      </div>
    </div>
  </form>
</template>

<script>
export default {
  data() {
    return {
      isLoading: false,
      isStyled: false,
      form: new Form({
        name: "",
        email: "",
        password: "",
        password_confirmation: ""
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
            .post("/register")
            .then(user => {
              window.location.href = "/";
            })
            .catch(() => {
              this.isLoading = false;
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
