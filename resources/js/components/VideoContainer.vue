<script lang="ts" setup>
import { onMounted, onUnmounted, watch } from 'vue';

interface Props {
    isOpen: boolean;
    close: () => void;
}

const props = defineProps<Props>();

const updateScroll = () => {
    document.body.style.overflow = props.isOpen ? 'hidden' : '';
};

onMounted(() => {
    updateScroll();
});

watch(() => props.isOpen, () => {
    updateScroll();
});

onUnmounted(() => {
    document.body.style.overflow = '';
});
</script>

<template>
    <div v-if="isOpen" class="fixed inset-0 z-50 flex flex-grow items-center justify-center bg-black bg-opacity-75" @click="close">
        <iframe
            class="aspect-video w-full max-w-4xl bg-black"
            src="https://www.youtube.com/embed/Psi3lOpLxcM?si=-7yOa5kMi66WRVMT"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin"
            allowfullscreen
        ></iframe>
    </div>
</template>
