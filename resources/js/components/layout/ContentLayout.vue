<script setup lang="ts">
import ContentMainPanel from '../ui/ContentMainPanel.vue';
import ContentRightPanel from '../ui/ContentRightPanel.vue';

</script>

<template>
    <div class="flex flex-row items-center justify-center h-screen">
        <!-- Main Panel  -->
        <ContentMainPanel/>

        <!-- Right Panel -->
        <ContentRightPanel/>
    </div>
</template>