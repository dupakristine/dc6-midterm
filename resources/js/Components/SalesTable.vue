<script setup>
import { computed, defineProps, inject } from 'vue';

const props = defineProps({
  client: Object,
  sales: Array,
});

const totalAmount = computed(() => {
  return props.sales.reduce((sum, obj) => sum + (obj.amount || 0), 0);
});

const darkTheme = inject('darkTheme');
</script>


<template>
    <div :class="{ 'filter invert': darkTheme }" class="">
      <div class=" dark:bg-gray-900 overflow-hidden shadow-sm sm:rounded-lg p-8">

        <table class="w-full border-collapse">
    <thead>
        <tr :class="{ 'text-gray-700': !darkTheme, 'text-black': darkTheme }" class="bg-gray-300 dark:bg-slate-900 dark:text-white">
            <th class="px-4 py-2 text-left bg-gray-200 dark:bg-gray-800 border border-gray-400">Date</th>
            <th class="px-4 py-2 text-left bg-gray-200 dark:bg-gray-800 border border-gray-400">Cash/Credit</th>
            <th class="px-4 py-2 text-left bg-gray-200 dark:bg-gray-800 border border-gray-400">Total</th>
        </tr>
    </thead>
    <tbody>
        <tr :class="{ 'text-gray-700': !darkTheme, 'text-black': darkTheme }" v-for="sale in sales" :key="sale.id"
            class="border-b border-gray-300 dark:border-gray-900">
            <td :class="{ 'text-gray-700': !darkTheme, 'text-black': darkTheme }"
                class="px-4 py-2 dark:text-white border border-gray-400">{{ sale.date }}</td>
            <td :class="{ 'text-gray-700': !darkTheme, 'text-black': darkTheme }"
                class="px-4 py-2 dark:text-white border border-gray-400">{{ sale.is_credit ? 'Credit' : 'Cash' }}</td>
            <td :class="{ 'text-gray-700': !darkTheme, 'text-black': darkTheme }"
                class="px-4 py-2 dark:text-white border border-gray-400">{{ sale.amount }}</td>
        </tr>
        <tr>
            <td colspan="2" class="px-4 py-2 font-semibold text-right dark:text-white border border-gray-400">Total Sum:</td>
            <td class="px-4 py-2 text-xl font-semibold text-center dark:text-white border border-gray-400">{{ totalAmount }}</td>
        </tr>
    </tbody>
</table>


      </div>
    </div>
  </template>
