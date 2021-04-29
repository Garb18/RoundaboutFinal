<template>
  <v-form ref="form" v-model="valid" lazy-validation>
    <v-text-field
      v-model="fields.name"
      :rules="nameRules"
      label="Your full name"
      required
    ></v-text-field>
    <v-text-field
      v-model="fields.email"
      :rules="emailRules"
      label="E-mail"
      required
    ></v-text-field>
    <v-text-field
      :value="fields.password"
      label="Enter password"
      :append-icon="value ? 'mdi-eye' : 'mdi-eye-off'"
      @click:append="() => (value = !value)"
      :type="value ? 'password' : 'text'"
      :rules="passwordRules"
      @input="(_) => (password = _)"
    ></v-text-field>
    <v-checkbox
      v-model="checkbox"
      :rules="[(v) => !!v || 'You must agree to continue!']"
      label="By continuing, you agree to our terms and conditions"
      required
    ></v-checkbox>

    <v-btn :disabled="!valid" color="success" class="mr-4" @click="register">
      Register
    </v-btn>

    <v-btn color="warning" class="mr-4" @click="reset"> Reset Form </v-btn>
  </v-form>
</template>

<script>
import HomepageVue from "./Homepage.vue";
export default {
  data: () => ({
    valid: true,
    value: true,
    fields: {
      name: "",
      email: "",
      password: "",
    },
    nameRules: [
      (v) => !!v || "A name is required",
      (v) => (v && v.length <= 30) || "Name must be less than 30 characters",
    ],
    emailRules: [
      (v) => !!v || "E-mail is required",
      (v) => /.+@.+\..+/.test(v) || "E-mail must be valid",
    ],
    passwordRules: [
      (v) => !!v || "Password is required",
      (v) =>
        /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/.test(
          v
        ) ||
        "Min. 8 characters with at least one capital letter, a number and a special character.",
    ],
    select: null,
    checkbox: false,
  }),

  methods: {
    register() {
      this.$refs.form.validate();
      axios.post("/api/register", this.fields).then(() => {
        console.log("Success");
        this.$router.push({ name: "home" });
      });
    },
    reset() {
      this.$refs.form.reset();
    },
  },
};
</script>