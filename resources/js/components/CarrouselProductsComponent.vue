<template>
  <div v-if="sliders.length">
    <carousel-3d
        :inverse-scaling="0"
        :space="310"
        :controls-visible="true"
        :controls-prev-html="'&#8249;'"
        :controls-next-html="'&#8250;'"
        :controls-width="30"
        :controls-height="30"
        :clickable="true"
        :width="300"
        :height="500"
        :display="3"
        :perspective="0"
        :border="0"
        :disable3d="true"
    >
      <slide v-for="(slide, i) in sliders" :index="i" :key="i">
        <figure>
          <img :src="slide.cover" />
        </figure>
      </slide>
    </carousel-3d>
  </div>
</template>

<script>
import { Carousel3d, Slide } from "vue-carousel-3d";

import axios from "axios";
export default {
  props: ["url"],
  data() {
    return {
      slides: 5,
      sliders: []
    };
  },
  components: {
    "carousel-3d": Carousel3d,
    slide: Slide
  },
  created() {
    axios.get(this.url).then(response => {
      console.log(response.data)
      this.sliders = response.data;
    });
  }
};
</script>