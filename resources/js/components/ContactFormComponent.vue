<template>
  <div>
    <form class="contact-form" id="contactForm" method="post" novalidate="novalidate">
      <div class="successform">
        <p>{{ successform }}</p>
      </div>
      <div class="errorform">
        <p>{{errorform}}</p>
      </div>
      <div>
        <input
          type="text"
          class="form-control"
          name="name"
          v-model="form.name"
          :placeholder="$t('Your Name')"
        />
        <span
          class="text-danger text-sm errorform"
          v-show="form.errors.has('name')"
        >{{ form.errors.get('name') }}</span>
      </div>
      <div class="row row-sm-space mt-15">
        <div class="col-sm-6">
          <input
            type="text"
            class="form-control"
            v-model="form.phone"
            name="phone"
            :placeholder="$t('Your Phone')"
          />
          <span
            class="text-danger text-sm errorform"
            v-show="form.errors.has('phone')"
          >{{ form.errors.get('phone') }}</span>
        </div>
        <div class="col-sm-6 mt-15 mt-sm-0">
          <input
            type="text"
            class="form-control"
            v-model="form.email"
            name="email"
            :placeholder="$t('Your Email')"
          />
          <span
            class="text-danger text-sm errorform"
            v-show="form.errors.has('email')"
          >{{ form.errors.get('email') }}</span>
        </div>
      </div>
      <div class="mt-15">
        <textarea
          class="form-control"
          v-model="form.description"
          name="description"
          :placeholder="$t('Your Message')"
        ></textarea>
        <span
          class="text-danger text-sm errorform"
          v-show="form.errors.has('description')"
        >{{ form.errors.get('description') }}</span>
      </div>
      <div class="mt-2 mt-lg-4 text-center text-md-left">
        <VueLoadingButton
          @click.native="submit"
          :loading="isLoading"
          class="btn btn-sm btn-hover-fill"
        >
          <i class="icon-right-arrow"></i>
          <span>{{ $t('Send Contact')}}</span>
          <i class="icon-right-arrow"></i>
        </VueLoadingButton>
      </div>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      errorform: "",
      successform: "",
      isLoading: false,
      form: new Form({
        name: "",
        email: "",
        phone: "",
        description: ""
      })
    };
  },
  methods: {
    submit() {
      this.form.errors.clear();
      this.successform = "";
      this.errorform = "";
      this.isLoading = true;

      this.form
        .post("/ep3/contact")
        .then(user => {
          this.isLoading = false;
          this.form.name = "";
          this.form.email = "";
          this.form.phone = "";
          this.form.description = "";
          this.successform = user.data.text;
        })
        .catch(err => {
          this.isLoading = false;
          this.errorform = err.response.statusText;
          console.log("testified err", err.response.statusText);
        });
    }
  }
};
</script>
