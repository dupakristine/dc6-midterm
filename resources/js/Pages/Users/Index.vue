<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { defineProps } from 'vue';
import User from '@/Components/User.vue'

const { users } = defineProps(['users']);
</script>

<template>
    <Head title="Users" />

    <AuthenticatedLayout>
        <div>
            <div class="flex justify-center">
                <User class="m-5" v-for="user in users" :key="user.id" :user="user" />
            </div>
        </div>
    </AuthenticatedLayout>
</template>
