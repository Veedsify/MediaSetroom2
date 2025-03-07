<script setup lang="ts">
import Footer from '@/components/Footer.vue';
import HomePageHero from '@/components/HomePageHero.vue';
import { Head, Link } from '@inertiajs/vue3';
import { Menu, X } from 'lucide-vue-next';
import { onMounted, ref } from 'vue';

const open = ref(false);

onMounted(() => {
    window.addEventListener('resize', () => {
        if (window.innerWidth > 1024) {
            open.value = false;
        }
    });

    window.addEventListener('click', (event) => {
        const target = event.target as HTMLElement;
        if (open.value && !target.closest('nav')) {
            open.value = false;
        }
    });
});
</script>

<template>
    <Head title="Media Setroom">
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700,800" rel="stylesheet" />
    </Head>
    <div>
        <header class="container mx-auto p-4 md:p-8">
            <nav>
                <ul class="flex items-center justify-between">
                    <li class="block lg:hidden">
                        <button v-on:click="open = !open" v-show="!open">
                            <Menu />
                        </button>
                        <button v-on:click="open = !open" v-show="open">
                            <X />
                        </button>
                    </li>
                    <li class="hidden lg:block">
                        <Link href="#" class="font-black text-blue-500"> Browse Jobs </Link>
                    </li>
                    <li class="mx-auto lg:mx-0">
                        <Link :href="route('home')">
                            <img src="/images/logo.png" alt="" width="100" />
                        </Link>
                    </li>
                    <li class="hidden lg:block">
                        <Link :href="route('contact')" class="font-black text-blue-500"> Contact </Link>
                    </li>
                </ul>
                <div v-show="open" class="lg:hidden">
                    <ul class="flex min-h-52 flex-col items-center justify-center space-y-4">
                        <li>
                            <Link href="#" class="text-black-500 font-black"> Browse Jobs </Link>
                        </li>
                        <li>
                            <Link :href="route('contact')" class="text-black-500 font-black"> Contact </Link>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <HomePageHero />
        <Footer />
        <div class="h-14.5 hidden lg:block"></div>
    </div>
</template>
