<template>
  <v-navigation-drawer v-model="drawer" app>
    <v-list-item>
      <v-list-item-avatar>
        <v-img
          src="https://www.croptecshow.com/wp-content/uploads/2019/09/guest-avatar-300px.png?x91340"
        ></v-img>
      </v-list-item-avatar>

      <v-list-item-content>
        <v-list-item-title>Guest</v-list-item-title>
      </v-list-item-content>
    </v-list-item>

    <v-list dense>
      <v-list-item link exact :to="{ name: 'home' }">
        <v-list-item-action>
          <v-icon>mdi-home</v-icon>
        </v-list-item-action>
        <v-list-item-content>
          <v-list-item-title>Home</v-list-item-title>
        </v-list-item-content>
      </v-list-item>
      <v-list-item link exact :to="{ name: 'about' }">
        <v-list-item-action>
          <v-icon>mdi-information</v-icon>
        </v-list-item-action>
        <v-list-item-content>
          <v-list-item-title>About</v-list-item-title>
        </v-list-item-content>
      </v-list-item>
      <v-list-item link exact :to="{ name: 'register' }">
        <v-list-item-action>
          <v-icon>mdi-account-plus</v-icon>
        </v-list-item-action>
        <v-list-item-content>
          <v-list-item-title>Register</v-list-item-title>
        </v-list-item-content>
      </v-list-item>
      <v-list-item link exact :to="{ name: 'login' }">
        <v-list-item-action>
          <v-icon>mdi-login</v-icon>
        </v-list-item-action>
        <v-list-item-content>
          <v-list-item-title>Log In</v-list-item-title>
        </v-list-item-content>
      </v-list-item>
      <v-list-item>
        <v-list-item-action
          ><v-switch v-model="$vuetify.theme.dark" />
        </v-list-item-action>
        <v-list-item-content
          ><v-list-item-title> Dark Mode</v-list-item-title>
        </v-list-item-content>
      </v-list-item>
    </v-list>
  </v-navigation-drawer>
</template>

<script>
export default {
  data() {
    return {
      drawer: false,
    };
  },
};
</script>
