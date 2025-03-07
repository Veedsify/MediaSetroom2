<script setup lang="ts">
import { AboutData } from '@/lib/about-data';
import { Stats } from '@/lib/stats';
import { Link } from '@inertiajs/vue3';
import { LucidePlay } from 'lucide-vue-next';
import { ref } from 'vue';
import AboutComponent from './small-components/AboutComponent.vue';
import StatComponent from './small-components/StatComponent.vue';
import VideoContainer from './VideoContainer.vue';

const isVideoModalOpen = ref(false);
const closeModal = () => (isVideoModalOpen.value = false);
</script>

<template>
    <main>
        <div class="mb-4">
            <img src="/images/hero.jpg" alt="" class="block w-full object-cover lg:h-[450px]" />
        </div>
        <div class="mx-auto mb-10 max-w-7xl p-4 md:p-8 md:py-20">
            <h1 class="mx-auto mb-6 text-nowrap text-center text-3xl font-black md:text-6xl">About Media Setroom</h1>
            <p class="mx-auto max-w-2xl text-center leading-relaxed text-gray-500">
                Media Setroom LTD is a leading provider of innovative talent solutions and content creation services, focused on supporting socially
                conscious creators in the public media and podcasting sectors.
            </p>
        </div>
        <div class="mx-auto mb-20 max-w-7xl p-4 md:p-8">
            <div class="grid grid-cols-3 gap-8">
                <AboutComponent v-for="(data, index) in AboutData" :key="index" :data="data" />
            </div>
        </div>
        <div class="relative mb-4">
            <img src="/images/on-set.jpg" alt="" class="block h-[500px] w-full object-cover" />
            <div class="absolute inset-0 left-0 top-0 z-10 bg-black opacity-50"></div>
            <div class="absolute inset-0 left-0 top-0 z-10 flex w-full items-center justify-center">
                <div class="grid w-full max-w-6xl grid-cols-1 justify-between gap-6 text-center md:grid-cols-2 lg:grid-cols-4">
                    <StatComponent
                        v-for="(data, index) in Stats"
                        :key="index"
                        :value="data.value"
                        :description="data.description"
                        :delay="data.delay"
                    />
                </div>
            </div>
        </div>
        <div class="relative mb-4">
            <div class="mx-auto max-w-6xl p-4 md:p-8">
                <h2 class="mb-8 text-2xl font-black md:text-6xl">Empowering Content Creators to Reach New Heights</h2>
                <div class="mb-8">
                    <p>
                        Are you a passionate content creator looking to expand your audience and take your brand to the next level? Look no further!
                        Our Podcast sessions are specifically designed to help talented individuals like you reach a broader audience, increase
                        engagement.
                    </p>
                </div>
                <div>
                    <img src="/images/studio-podcast.jpg" alt="" class="block aspect-[21/9] w-full rounded-2xl object-cover" />
                </div>
            </div>
        </div>

        <div class="bg-gray-50 dark:bg-black md:py-20">
            <div class="mx-auto max-w-6xl p-4 md:p-8">
                <div class="grid gap-8 rounded-lg md:grid-cols-2">
                    <div class="space-y-6">
                        <h3 class="text-2xl font-bold text-gray-800 dark:text-white">Amplify Your Content with Our Broadcast Sessions</h3>
                        <p class="text-gray-600">Our expert team is dedicated to providing top-notch broadcast sessions that promise to:</p>
                        <ul class="space-y-3 text-gray-700">
                            <li class="flex items-center">
                                <svg class="mr-3 h-5 w-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        fillRule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clipRule="evenodd"
                                    />
                                </svg>
                                Showcase more about your content to a wider audience
                            </li>
                            <li class="flex items-center">
                                <svg class="mr-3 h-5 w-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        fillRule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clipRule="evenodd"
                                    />
                                </svg>
                                Increase your online presence and credibility
                            </li>
                            <li class="flex items-center">
                                <svg class="mr-3 h-5 w-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        fillRule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clipRule="evenodd"
                                    />
                                </svg>
                                Drive engagement and grow your fan base
                            </li>
                            <li class="flex items-center">
                                <svg class="mr-3 h-5 w-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        fillRule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clipRule="evenodd"
                                    />
                                </svg>
                                Help you reach new heights of success and fame
                            </li>
                            <li class="flex items-center">
                                <svg class="mr-3 h-5 w-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        fillRule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clipRule="evenodd"
                                    />
                                </svg>
                                Opportunities to connect with other creators
                            </li>
                            <li class="flex items-center">
                                <svg class="mr-3 h-5 w-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        fillRule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clipRule="evenodd"
                                    />
                                </svg>
                                Collaborations with other influencers and creators
                            </li>
                            <li class="flex items-center">
                                <svg class="mr-3 h-5 w-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        fillRule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clipRule="evenodd"
                                    />
                                </svg>
                                Targeted audience engagement to build a loyal fan base
                            </li>
                            <li class="flex items-center">
                                <svg class="mr-3 h-5 w-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        fillRule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clipRule="evenodd"
                                    />
                                </svg>
                                Help you build a loyal community of followers
                            </li>
                        </ul>
                    </div>
                    <div class="space-y-6">
                        <h2 class="text-2xl font-bold text-gray-800 dark:text-white">Promoting Your Page and Content</h2>
                        <p class="text-gray-600 dark:text-white">We're committed to helping you promote your page and content through:</p>
                        <ul class="space-y-3 text-gray-700">
                            <li class="flex items-center">
                                <svg class="mr-3 h-5 w-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        fillRule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clipRule="evenodd"
                                    />
                                </svg>
                                Strategic social media marketing
                            </li>
                            <li class="flex items-center">
                                <svg class="mr-3 h-5 w-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        fillRule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clipRule="evenodd"
                                    />
                                </svg>
                                Targeted audience engagement
                            </li>
                            <li class="flex items-center">
                                <svg class="mr-3 h-5 w-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        fillRule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clipRule="evenodd"
                                    />
                                </svg>
                                Collaborations with other influencers and creators
                            </li>
                            <li class="flex items-center">
                                <svg class="mr-3 h-5 w-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        fillRule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clipRule="evenodd"
                                    />
                                </svg>
                                Expert advice on content optimization
                            </li>
                            <li class="flex items-center">
                                <svg class="mr-3 h-5 w-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        fillRule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clipRule="evenodd"
                                    />
                                </svg>
                                Content monetization strategies
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="mx-auto max-w-6xl p-4 md:p-8 md:py-20">
            <div class="grid items-center gap-12 md:grid-cols-2">
                <div class="space-y-6">
                    <h2 class="text-5xl font-bold text-gray-900">How can we work together?</h2>

                    <p class="text-gray-600">
                        Every collaboration is tailored to your unique needs, timelines, and goals. We'd love to explore how we can work together to
                        achieve success.
                    </p>

                    <p class="text-gray-600">
                        With a deep understanding that every engagement is unique, we're open to negotiating rates and tailoring our services to meet
                        your specific needs.
                    </p>

                    <Link
                        :href="route('contact')"
                        class="inline-block rounded-md bg-black px-6 py-3 font-bold text-white transition-colors hover:bg-gray-800"
                        prefetch
                    >
                        BOOK CONSULTATION
                    </Link>

                    <div class="pt-8">
                        <h2 class="mb-4 text-2xl font-semibold text-gray-900">Office Hours</h2>
                        <p class="text-gray-600">Monday - Friday: 9AM - 6PM</p>
                    </div>

                    <div class="pt-4">
                        <h2 class="mb-4 text-2xl font-semibold text-gray-900">Contact</h2>
                        <p class="text-gray-600">info@mediastroom.com</p>
                        <p class="text-gray-600">+234 707 683 8162</p>
                    </div>
                </div>

                <div class="relative">
                    <div class="aspect-w-16 aspect-h-9">
                        <img src="/images/promotion.jpg" alt="Meeting Room" class="rounded-lg object-cover shadow-lg" />
                        <div class="absolute inset-0 flex items-center justify-center">
                            <button @click="isVideoModalOpen = true" class="rounded-full bg-white p-4 shadow-lg transition-colors hover:bg-gray-100">
                                <LucidePlay />
                            </button>
                        </div>
                    </div>
                </div>
                <VideoContainer :isOpen="isVideoModalOpen" :close="closeModal" />
            </div>
        </div>
    </main>
</template>
