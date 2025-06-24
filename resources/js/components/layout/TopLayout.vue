<script setup lang="ts">
import TopMenu from '../ui/TopMenu.vue';
import TopSearchMenu from '../ui/TopSearchMenu.vue';
import TopAvatar from '../ui/TopAvatar.vue';
</script>

<template>
    <div class="grid grid-cols-3 gap-4 border-b border-gray-200">
        <!-- 상단 메뉴 -->
        <TopMenu />
        <!-- 상단 검색 메뉴 -->
        <TopSearchMenu class="w-full" />
        <!-- 상단 아바타 -->
        <TopAvatar />
    </div>
</template>