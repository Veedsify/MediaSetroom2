<template>
    <div class="col-span-3 md:col-span-1">
        <div class="mb-3">
            <img :src="data.icon" alt="" width="70" />
        </div>
        <h2 class="mb-4 text-2xl font-black">{{ data.title }}</h2>
        <p class="text-sm leading-relaxed text-gray-500">{{ data.description }}</p>
        <div>
            <div v-if="data.showOP">
                <h3 class="mb-4 mt-6 text-2xl font-black">opportunities</h3>
            </div>
            <ul class="ml-4 list-disc pl-4">
                <li v-for="(opportunity, index) in data.opportuinites" :key="index" class="text-gray-500">
                    {{ opportunity }}
                </li>
            </ul>
        </div>
    </div>
</template>

<script setup lang="ts">
interface AboutComponentProps {
    data: {
        title: string;
        description: string;
        icon: string;
        showOP: boolean;
        opportuinites: string[];
    };
}

defineProps<AboutComponentProps>();
</script>
