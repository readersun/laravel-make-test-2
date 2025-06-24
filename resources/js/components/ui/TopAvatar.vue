<script setup lang="ts">
import { ref } from 'vue';
import { router } from '@inertiajs/vue3';

const isOpen = ref(false);

const toggleMenu = () => {
    isOpen.value = !isOpen.value;
};

const logout = () => {
    router.post('/logout');
};
</script>

<template>
    <div class="flex items-center p-4 gap-4 justify-end relative">
        <div class="flex items-center gap-4">
            <div class="flex flex-col items-center gap-2 cursor-pointer" @click="toggleMenu">
                <img src="@/assets/images/user.png" alt="avatar" class="w-10 h-10 rounded-full" />
                <span class="text-sm font-medium">관리자님</span>
            </div>
            <button type="button" class="bg-blue-500 text-white px-4 py-2 rounded-md cursor-pointer hover:bg-blue-600" @click="logout">로그아웃</button>
        </div>
        <div class="absolute top-10 right-0 w-48 bg-white shadow-md rounded-md p-4" v-if="isOpen">
            <div class="flex items-center gap-2">
                <img src="@/assets/images/user.png" alt="avatar" class="w-10 h-10 rounded-full" />
                <span class="text-sm font-medium">관리자님</span>
            </div>
        </div>
    </div>
</template>