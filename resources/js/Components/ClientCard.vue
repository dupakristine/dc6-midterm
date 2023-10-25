<script setup>
import { defineProps, inject } from 'vue';
import { router } from '@inertiajs/vue3';

const props = defineProps({
    client: Object,
});

const darkTheme = inject('darkTheme');

const viewClient = () => {
    router.get('/client/view/' + props.client.id);
};
</script>

<template>
        <div @click="viewClient" :class="darkTheme ? 'text-white' : 'text-gray-700'" class="">
            <table style="width: 375px; font-size: 20px; border: 1px solid #000; border-collapse: collapse;">
            <tr>
                <td colspan="2" style="text-align: center; padding: 10px; border: 1px solid #000;"><b>Name:</b> {{ client.first_name }} {{ client.last_name }}</td>
            </tr>

            <tr>
                <td style="width: 40%; text-align: right; padding: 10px; border: 1px solid #000;"><b>Address:</b></td>
                <td style="padding: 10px; border: 1px solid #000;">{{ client.address }}</td>
            </tr>

            <tr>
                <td style="text-align: right; padding: 10px; border: 1px solid #000;"><b>Phone:</b></td>
                <td style="padding: 10px; border: 1px solid #000;">{{client.phone}}</td>
            </tr>

            <tr>
                <td style="text-align: right; padding: 10px; border: 1px solid #000;"><b>Credit Limit:</b></td>
                <td style="padding: 10px; border: 1px solid #000;">{{ client.credit_limit }}</td>
            </tr>

            </table>
        </div>


    <!-- <div class="min-w-[350px] mb-4 mx-2 p-4 bg-white rounded shadow border flex-1 cursor-pointer" @click="viewClient" :class="{ 'filter invert': darkTheme }">
        <h5 class="flex items-center mb-2 text-2xl font-bold tracking-tight" :class="darkTheme ? 'text-black' : 'text-gray-700'">
            {{ client.first_name }} {{ client.last_name }}
        </h5>
        <div class="mb-2">
            <p class="text-sm font-semibold" :class="darkTheme ? 'text-black' : 'text-gray-700'">Address</p>
            <p class="text-sm font-light" :class="darkTheme ? 'text-black' : 'text-gray-700'">{{ client.address }}</p>
        </div>
        <div class="mb-2">
            <p class="text-sm font-semibold" :class="darkTheme ? 'text-black' : 'text-gray-700'">Phone</p>
            <p class="text-sm font-light" :class="darkTheme ? 'text-black' : 'text-gray-700'">{{ client.phone }}</p>
        </div>
        <div>
            <p class="text-sm font-semibold" :class="darkTheme ? 'text-black' : 'text-gray-700'">Credit Limit</p>
            <p class="text-sm font-light" :class="darkTheme ? 'text-black' : 'text-gray-700'">{{ client.credit_limit }}</p>
        </div>
    </div> -->
</template>
