<template>
  <vs-input class="w-full" :type="collumn.type" v-model="form[collumn.name]"/>
</template>

<script>
import AbstractFieldComponentVue from '@/components/AbstractFieldComponent.vue';
export default {
  extends: AbstractFieldComponentVue,
};
</script>

<style>
</style>
