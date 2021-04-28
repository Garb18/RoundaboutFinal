<template>
  <v-bottom-navigation :color="primary" grow hide-on-scroll>
    <v-btn to="/">
      <span>Recents</span>

      <v-icon>mdi-history</v-icon>
    </v-btn>

    <v-btn to="/">
      <span>Favorites</span>

      <v-icon>mdi-heart</v-icon>
    </v-btn>
  </v-bottom-navigation>
</template>

<script>
export default {};
</script>
