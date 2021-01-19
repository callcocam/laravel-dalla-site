<template>
  <div>
    <a
      href="#"
      class="btn mt-15 mt-sm-3"
      data-toggle="modal"
      data-target="#modalTestimonialForm"
      style="position: absolute;bottom: 10px;"
    >
      <i class="icon-right-arrow"></i>
      <span>{{ $t('Add testimonial')}}</span>
      <i class="icon-right-arrow"></i>
    </a>
    <div class="modal modal-form modal-form-sm fade" id="modalTestimonialForm">
      <div class="modal-dialog">
        <div class="modal-content">
          <button ref="CloseModal" aria-label="Close" class="close" data-dismiss="modal">
            <i class="icon-error"></i>
          </button>
          <div class="modal-body">
            <div class="modal-form">
              <h3>{{ $t('Add testimonial') }}</h3>
              <form class="mt-15" id="questionForm" method="post" novalidate>
                <div class="successform">
                  <p>{{ successform }}</p>
                </div>
                <div class="errorform">
                  <p>{{errorform}}</p>
                </div>
                <div class="form-row">
                  <div class="input-group">
                    <span>
                      <i class="icon-user"></i>
                    </span>
                    <input
                      type="text"
                      name="name"
                      v-model="form.name"
                      class="form-control"
                      autocomplete="off"
                      :placeholder="$t('Your Name')"
                    />
                  </div>
                  <span
                    class="text-danger text-sm errorform"
                    v-show="form.errors.has('name')"
                  >{{ form.errors.get('name') }}</span>
                </div>
                <div class="form-row">
                  <div class="input-group">
                    <span>
                      <i class="icon-email2"></i>
                    </span>
                    <input
                      type="text"
                      name="email"
                      v-model="form.email"
                      class="form-control"
                      autocomplete="off"
                      :placeholder="$t('Your Email')"
                    />
                  </div>
                  <span
                    class="text-danger text-sm errorform"
                    v-show="form.errors.has('email')"
                  >{{ form.errors.get('email') }}</span>
                </div>
                <div class="form-row">
                  <div class="input-group">
                    <span>
                      <i class="icon-smartphone"></i>
                    </span>
                    <input
                      type="text"
                      name="phone"
                      v-model="form.phone"
                      class="form-control"
                      autocomplete="off"
                      :placeholder="$t('Your phone')"
                    />
                  </div>
                  <span
                    class="text-danger text-sm errorform"
                    v-show="form.errors.has('phone')"
                  >{{ form.errors.get('phone') }}</span>
                </div>
                <div class="form-row">
                  <textarea
                    name="description"
                    v-model="form.description"
                    class="form-control"
                    :placeholder="$t('Your phone')"
                  ></textarea>
                  <span
                    class="text-danger text-sm errorform"
                    v-show="form.errors.has('description')"
                  >{{ form.errors.get('description') }}</span>
                </div>
                <div class="text-right mt-2">
                  <VueLoadingButton
                    @click.native="submit"
                    :loading="isLoading"
                    class="btn btn-sm btn-hover-fill"
                  >{{ $t('Send Testified') }}</VueLoadingButton>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
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
      this.successform = '';
      this.errorform = '';
      this.isLoading = true;

      this.form
        .post("/ep3/testifieds")
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
          console.log("testified err", err);
        });
    }
  }
};
</script>
