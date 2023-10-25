<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import ClientCard from '@/Components/ClientCard.vue';
import { Head } from '@inertiajs/vue3';
import { defineProps } from 'vue';

const { clients } = defineProps(['clients']);
</script>

<template>
    <Head title="Clients" />

    <AuthenticatedLayout>
        <div>
            <div class="m-5 flex flex-wrap justify-center">
                <ClientCard v-for="client in clients" :key="client.id" :client="client" class="m-10 p-5 rounded-lg shadow-lg" />
            </div>
        </div>

        <!-- <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="grid grid-cols-4 gap-4">
                    <ClientCard v-for="client in clients" :key="client.id" :client="client" class="p-4 mb-4 duration-200 transform bg-gray-100 rounded-lg shadow-md cursor-pointer hover:bg-gray-200 hover:scale-105" />
                </div>
            </div>
        </div> -->
    </AuthenticatedLayout>
</template>
