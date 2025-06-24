<script setup lang="ts">
import { ref } from 'vue';

const search = ref('');

const searchText = () => {
    console.log(search.value);
};
</script>

<template>
    <div class="flex items-center p-4 gap-4 ">
        <input type="text" placeholder="검색" v-model="search" @keyup.enter="searchText" class="w-80 border-2 border-gray-300 rounded-md p-2" />
        <button type="button" @click="searchText" class="bg-blue-500 text-white px-4 py-2 rounded-md cursor-pointer hover:bg-blue-600">검색</button>
    </div>
</template>