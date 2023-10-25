<script setup>
import { defineProps, inject } from 'vue';

const props = defineProps({
  client: Object,
});

const darkTheme = inject('darkTheme');
</script>

<template>
<div :class="{ 'text-black': !darkTheme, 'text-white': darkTheme }">
    <div class="p-3 m-3 rounded-lg" :class="{ 'bg-gray-100': !darkTheme, 'bg-gray-700': darkTheme }">
        <table class="border-collapse border border-gray-400">
            <tr>
                <td class="border border-gray-400 p-2">
                    <b :class="{ 'bg-gray-50': !darkTheme, 'bg-gray-500': darkTheme }" class="rounded-lg p-2">Name:</b>
                </td>
                <td class="border border-gray-400 p-2">{{ client.first_name }} {{ client.last_name }}</td>
            </tr>
            <tr>
                <td class="border border-gray-400 p-2">
                    <b :class="{ 'bg-gray-50': !darkTheme, 'bg-gray-500': darkTheme }" class="rounded-lg p-2">Address:</b>
                </td>
                <td class="border border-gray-400 p-2">{{ client.address }}</td>
            </tr>
            <tr>
                <td class="border border-gray-400 p-2">
                    <b :class="{ 'bg-gray-50': !darkTheme, 'bg-gray-500': darkTheme }" class="rounded-lg p-2">Phone:</b>
                </td>
                <td class="border border-gray-400 p-2">{{ client.phone }}</td>
            </tr>
            <tr>
                <td class="border border-gray-400 p-2">
                    <b :class="{ 'bg-gray-50': !darkTheme, 'bg-gray-500': darkTheme }" class="rounded-lg p-2">Credit Limit:</b>
                </td>
                <td class="border border-gray-400 p-2">{{ client.credit_limit }}</td>
            </tr>
        </table>
    </div>
</div>

  </template>
