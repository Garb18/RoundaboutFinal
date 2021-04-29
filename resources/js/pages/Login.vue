<template>
  <v-form ref="form">
    <v-text-field v-model="fields.email" label="E-mail" required></v-text-field>
    <v-text-field
      :value="fields.password"
      label="Enter password"
      :append-icon="value ? 'mdi-eye' : 'mdi-eye-off'"
      @click:append="() => (value = !value)"
      :type="value ? 'password' : 'text'"
      @input="(_) => (password = _)"
    ></v-text-field>

    <v-btn color="success" class="mr-4" @click="register"> Login </v-btn>

    <v-btn color="warning" class="mr-4" @click="reset"> Reset Form </v-btn>
  </v-form>
</template>

<script>
import HomepageVue from "./Homepage.vue";
export default {
  data: () => ({
    value: true,
    fields: {
      email: "",
      password: "",
    },
  }),

  methods: {
    register() {
      this.$refs.form.validate();
      axios.post("/api/login", this.fields).then(() => {
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