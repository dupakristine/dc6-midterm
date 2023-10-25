<script setup>
import { defineProps, inject } from 'vue';

const { user } = defineProps(['user']);
const darkTheme = inject('darkTheme');
</script>

<template>
<table style="width: 375px; font-size: 20px; border: 1px solid #000; border-collapse: collapse;">
  <tr>
    <td colspan="2" style="text-align: center; padding: 10px; border: 1px solid #000;"><b></b> {{ user.id }}</td>
  </tr>
  <tr>
    <td style="width: 40%; text-align: right; padding: 10px; border: 1px solid #000;"><b>Name:</b></td>
    <td style="padding: 10px; border: 1px solid #000;">{{ user.name }}</td>
  </tr>
  <tr>
    <td style="text-align: right; padding: 10px; border: 1px solid #000;"><b>Email:</b></td>
    <td style="padding: 10px; border: 1px solid #000;">{{ user.email }}</td>
  </tr>
</table>

<!--
  <div :class="{ 'bg-gray-100': !darkTheme, 'bg-black': darkTheme }" class="max-w-md p-4 rounded-lg shadow-lg">
    <h3 class="text-xl font-semibold text-center" :class="{ 'text-gray-700': !darkTheme, 'text-white': darkTheme }">User Information</h3>
    <div class="grid grid-cols-2 gap-4">
      <div class="font-medium tracking-wider text-left uppercase" :class="{ 'text-gray-700': !darkTheme, 'text-white': darkTheme }">ID:</div>
      <div class="font-light whitespace-nowrap" :class="{ 'text-gray-700': !darkTheme, 'text-white': darkTheme }">{{ user.id }}</div>

      <div class="font-medium tracking-wider text-left uppercase" :class="{ 'text-gray-700': !darkTheme, 'text-white': darkTheme }">Name:</div>
      <div class="font-light whitespace-nowrap" :class="{ 'text-gray-700': !darkTheme, 'text-white': darkTheme }">{{ user.name }}</div>

      <div class="font-medium tracking-wider text-left uppercase" :class="{ 'text-gray-700': !darkTheme, 'text-white': darkTheme }">Email:</div>
      <div class="font-light whitespace-nowrap" :class="{ 'text-gray-700': !darkTheme, 'text-white': darkTheme }">{{ user.email }}</div>
    </div>
  </div> -->
</template>
