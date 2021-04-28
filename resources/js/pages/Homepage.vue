<template>
  <div class="home">
    <v-container>
      <v-row>
        <v-col
          v-for="product in products"
          :key="product.id"
          cols="12"
          sm="6"
          md="4"
        >
          <v-card
            :loading="loading"
            class="mx-auto"
            max-width="400"
            color="secondary white--text"
          >
            <template slot="progress">
              <v-progress-linear
                color="primary"
                height="10"
                indeterminate
              ></v-progress-linear>
            </template>

            <v-img height="250" :src="product.photo"></v-img>

            <v-card-title>{{ product.name }}</v-card-title>

            <v-card-text>
              <v-row align="center" class="mx-0">
                <v-rating
                  :value="product.rating"
                  color="amber"
                  dense
                  half-increments
                  readonly
                  size="14"
                ></v-rating>

                <div class="ml-4 white--text">{{ product.rating }} (413)</div>
              </v-row>

              <div class="my-4 subtitle-1 white--text">$ • Italian, Cafe</div>

              <div class="white--text">
                {{ product.description }}
              </div>
            </v-card-text>

            <v-divider class="mx-4"></v-divider>

            <v-card-title>Tonight's availability</v-card-title>

            <v-card-text>
              <v-chip-group
                v-model="selection"
                active-class="primary white--text"
                column
              >
                <v-chip>5:30PM</v-chip>

                <v-chip>7:30PM</v-chip>

                <v-chip>8:00PM</v-chip>

                <v-chip>9:00PM</v-chip>
              </v-chip-group>
            </v-card-text>

            <v-card-actions>
              <v-btn color="white" text @click="reserve"> Reserve </v-btn>
            </v-card-actions>
          </v-card>
        </v-col>
      </v-row>
    </v-container>
  </div>
</template>

<script>
export default {
  data() {
    return {
      products: {},
      loading: false,
      selection: 1,
    };
  },
  methods: {
    reserve() {
      this.loading = true;

      setTimeout(() => (this.loading = false), 1000);
    },
  },
  mounted() {
    axios.get("/api/products").then((response) => {
      this.products = response.data.data;
    });
  },
};
</script>
