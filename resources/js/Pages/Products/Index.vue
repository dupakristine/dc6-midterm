<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, usePage } from '@inertiajs/vue3';
import Product from '@/Components/Product.vue';

import { defineProps, inject } from 'vue';

const darkTheme = inject('darkTheme');

const page = usePage();

const { products } = defineProps(['products']);
</script>

<template>
  <Head title="Products" />

  <AuthenticatedLayout>
    <div>
        <div class="m-10 flex justify-end">
            <Link :href="route('product.create')" class="p-2 pe-4 ps-4 shadow-lg rounded-lg bg-black text-white">
            <i class="fa fa-add"></i> Add
            </Link>
        </div>
        <div class="m-5 flex flex-wrap justify-center">
            <Product
            v-for="product in products"
            :key="product.id"
            :product="product"
            class="m-10 p-5 rounded-lg shadow-xl"
          />

        </div>
    </div>

  </AuthenticatedLayout>
</template>
