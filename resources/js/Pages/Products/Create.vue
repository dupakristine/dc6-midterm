<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import TextInput from '@/Components/TextInput.vue';
import InputLabel from '@/Components/InputLabel.vue';
import { Link } from '@inertiajs/vue3';
import { inject } from 'vue';

const darkTheme = inject('darkTheme');
</script>

<template>
    <Head title="Products" />

    <AuthenticatedLayout>
        <div>
            <div class="m-10 flex justify-start">
                <!-- <Link :href="route('product')"
                class="bg-black text-white p-2 ps-4 pe-4 shadow-lg rounded-lg">
                    <i class="fa fa-arrow-left"></i> Back
                </Link> -->
            </div>

            <div class="flex justify-center">
                <table style="width: 550px; border: 1px solid #000; border-collapse: collapse;">
  <tr>
    <td style="padding: 10px; border: 1px solid #000;">
      <h1 style="font-size: 30px;"><b>Product Details</b></h1>
    </td>
  </tr>
  <tr>
    <td>
      <div style="display: flex;">
        <div style="width: 500px; padding: 10px; border: 1px solid #000;">
            <label for="dropzone-file">
            <div class="bg-slate-50 flex items-center justify-center p-10 rounded-lg">
              <p class=""><span class="font-semibold">Upload a Photo</span></p>
            </div>
            <input id="dropzone-file" type="file" class="hidden" />
          </label> <br>
          <label for="product">Product name</label>
          <input type="text" class="block w-full mt-1" id="product" />
          <br>

          <label for="brand">Brand</label>
          <input type="text" class="block w-full mt-1" id="brand" />
          <br>

          <label for="retail_price">Retail Price</label>
          <input type="number" class="block w-full mt-1" id="retail_price" />
          <br>

          <label for="qty_stock">Quantity Stock</label>
          <input type="number" class="block w-full mt-1" id="qty_stock" />
          <br>

          <label for="category">Category</label>
          <select id="category" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            <option value="" selected>Category</option>
          </select>
          <br>

          <label for="description">Description</label>
          <textarea id="description" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"></textarea>
          <br>

          <button class="px-4 py-2 text-sm text-white bg-blue-500 rounded-md">Create</button>
          <br> <br>


        </div>
      </div>
    </td>
  </tr>
</table>

            </div>
        </div>


    </AuthenticatedLayout>
</template>
