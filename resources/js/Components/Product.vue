<script setup>
import { defineProps, inject } from 'vue';

const { product } = defineProps(['product']);
const darkTheme = inject('darkTheme');
</script>

<template>
<table style="width: 200px; border: 1px solid #000; border-collapse: collapse;">
  <tr>
    <td style="text-align: center; padding: 10px; border: 1px solid #000;">
      <div style="height: 200px; width: 200px;">
        <img style="object-cover; width: 100%; height: 100%;" :src="product.thumbnail" alt="">
      </div>
    </td>
  </tr>
  <tr>
    <td style="padding: 10px; border: 1px solid #000;">
      <b :class="{ 'bg-gray-50': !darkTheme, 'bg-gray-500': darkTheme }" class="rounded-lg p-2">Name:</b> {{ product.name }}
    </td>
  </tr>
  <tr>
    <td style="padding: 10px; border: 1px solid #000;">
      <b :class="{ 'bg-gray-50': !darkTheme, 'bg-gray-500': darkTheme }" class="rounded-lg p-2">Category:</b> {{ product.category }}
    </td>
  </tr>
  <tr>
    <td style="padding: 10px; border: 1px solid #000;">
      <b :class="{ 'bg-gray-50': !darkTheme, 'bg-gray-500': darkTheme }" class="rounded-lg p-2">Retail Price:</b> {{ product.retail_price }}
    </td>
  </tr>
</table>


      <!-- <div v-if="product" :class="{ 'filter invert': darkTheme }" class="mt-4 duration-200 transform bg-white bg-gray-100 rounded-lg shadow-md cursor-pointer hover:bg-gray-200 hover:scale-105">
        <div class="h-[150px]">
          <img class="object-cover w-full h-full" :src="product.thumbnail" alt="">
        </div>
        <div class="p-4">
          <h1 class="text-lg font-semibold" :class="{ 'text-gray-700': !darkTheme, 'text-black': darkTheme }">{{ product.name }}</h1>
          <span class="px-4 py-1.5 mt-3 text-xs font-semibold bg-gray-50 tracking-wide uppercase" :class="{ 'text-gray-500': !darkTheme, 'text-black': darkTheme }">{{ product.category }}</span>
          <p class="font-semibold text-md" :class="{ 'text-gray-600': !darkTheme, 'text-black': darkTheme }">{{ product.retail_price }}</p>
        </div>
      </div> -->
  </template>


