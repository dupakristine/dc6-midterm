<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import Sale from '@/Components/Sale.vue';

const { sales } = defineProps(['sales']);
</script>

<template>
    <Head title="Sales" />

    <AuthenticatedLayout>
       <div>
            <div class="m-5 flex flex-wrap justify-center">
                <Sale class="m-10 p-5 rounded-lg shadow-xl" :sales="sales" v-for="sale in sales" :key="sale.id" />
            </div>
       </div>
    </AuthenticatedLayout>
</template>
