<script setup lang="ts">
import { computed, ref } from 'vue';
import { type TopMenu } from '@/types/TopMenu';
import { Link, usePage } from '@inertiajs/vue3';

const page = usePage();

const topMenu = ref<TopMenu[]>([
    {
        title: '홈',
        url: '/',
        isActive: page.url === '/',
    },
    {
        title: '정류소 조회',
        url: '/bus-route',
        isActive: page.url === '/bus-route',
    },
    {
        title: '실시간 위치',
        url: '/bus-arrival',
        isActive: page.url === '/bus-arrival',
    },
]);
</script>

<template>
    <div class="flex items-center p-4 gap-4">
        <Link
            v-for="menu in topMenu"
            :key="menu.url"
            :href="menu.url"
            :class="menu.isActive ? 'bg-blue-100 text-blue-500' : 'text-gray-500'"
            class="text-sm font-medium hover:bg-blue-300 rounded-md transition-colors w-20 p-4 text-center">
        {{ menu.title }}
        </Link>
    </div>
</template>