<script setup>
import { defineProps, inject } from 'vue';

const props = defineProps({
    sales: Array, // Ensure that this type matches the type of your sales prop
});

const darkTheme = inject('darkTheme');
</script>

<template>
    <div :class="darkTheme ? 'text-white' : 'text-gray-700'" class="h-[150px] w-[300px] m-10 p-3 rounded-lg" v-for="sale in sales" :key="sale.id">
        <table style="width: 375px; font-size: 20px; border: 1px solid #000; border-collapse: collapse;">
        <tr>
            <td colspan="2" style="text-align: center; padding: 10px; border: 1px solid #000;"><b>Client ID</b> {{ sale.id }}</td>
        </tr>
        <tr>
            <td style="width: 40%; text-align: right; padding: 10px; border: 1px solid #000;"><b>Date</b></td>
            <td style="padding: 10px; border: 1px solid #000;">{{ sale.date }}</td>
        </tr>
        <tr>
            <td style="text-align: right; padding: 10px; border: 1px solid #000;"><b>Is Credited:</b></td>
            <td style="padding: 10px; border: 1px solid #000;">{{ sale.is_credit }}</td>
        </tr>
        </table>
    </div>


    <!-- <div :class="darkTheme ? 'text-white' : 'text-gray-700'" class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div :class="darkTheme ? 'bg-black' : 'bg-white'" class="overflow-hidden shadow-sm sm:rounded-lg">
        <div :class="darkTheme ? 'text-white' : 'text-gray-700'" class="p-6 text-gray-900">

          <table class="min-w-full divide-y divide-gray-200">
            <thead>
              <tr>
                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase bg-gray-50 dark:bg-gray-800 dark:text-gray-400">
                  Date
                </th>
                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase bg-gray-50 dark:bg-gray-800 dark:text-gray-400">
                  Client ID
                </th>
                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase bg-gray-50 dark:bg-gray-800 dark:text-gray-400">
                  Is Credit
                </th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="sale in sales" :key="sale.id">
                <td class="px-6 py-4 whitespace-no-wrap">
                  {{ sale.date }}
                </td>
                <td class="px-6 py-4 whitespace-no-wrap">
                  {{ sale.client_id }}
                </td>
                <td class="px-6 py-4 whitespace-no-wrap">
                  {{ sale.is_credit ? 'Yes' : 'No' }}
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div> -->
  </template>
