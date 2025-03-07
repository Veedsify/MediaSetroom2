<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import PlaceholderPattern from '../components/PlaceholderPattern.vue';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Dashboard',
        href: '/dashboard',
    },
];
</script>

<template>
    <Head title="Dashboard" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex h-full flex-1 flex-col gap-4 rounded-xl p-4">
            <div class="grid auto-rows-min gap-4 md:grid-cols-3">
                <div class="relative overflow-hidden rounded-xl bordcontacter border-sidebar-border/70 dark:border-sidebar-border">
                    <div class="flex shadow-md border rounded-xl flex-col gap-2 p-4">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Total Page Views</h3>
                        <p class="text-3xl font-bold text-gray-900 dark:text-gray-100">2.5K</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">
                            <span class="text-green-500">↑ 12%</span> from last month
                        </p>
                    </div>
                    <!-- <PlaceholderPattern /> -->
                </div>
                <div class="relative overflow-hidden rounded-xl border border-sidebar-border/70 dark:border-sidebar-border">
                    <div class="flex shadow-md border rounded-xl flex-col gap-2 p-4">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Total Views Today</h3>
                        <p class="text-3xl font-bold text-gray-900 dark:text-gray-100">200</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">
                            <span class="text-green-500">↑ 12%</span> from yesterday
                        </p>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-xl border border-sidebar-border/70 dark:border-sidebar-border">
                    <div class="flex shadow-md border rounded-xl flex-col gap-2 p-4">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                            Contacts
                        </h3>
                        <p class="text-3xl font-bold text-gray-900 dark:text-gray-100">240</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">
                            all time contacts
                        </p>
                    </div>
                </div>
            </div>
            <div class="relative aspect-video rounded-xl border border-sidebar-border/70 dark:border-sidebar-border">
                <PlaceholderPattern />
            </div>
        </div>
    </AppLayout>
</template>
