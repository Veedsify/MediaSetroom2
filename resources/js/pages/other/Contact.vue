<script lang="ts" setup>
import InputError from '@/components/InputError.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import { Menu, X } from 'lucide-vue-next';
import { onMounted, ref } from 'vue';
import { toast, Toaster } from 'vue-sonner';

const open = ref(false);

const form = useForm({
    name: '',
    phone: '',
    email: '',
    message: '',
});

const submit = () => {
    toast.loading('Sending message...');
    form.post(route('contact.store'), {
        preserveScroll: true,
        onSuccess: () => {
            toast.dismiss();
            toast.success('Message sent successfully');
            form.reset();
        },
        onError: () => {
            toast.dismiss();
            toast.error('An error occurred while sending your message');
        },
    });
};

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
    <Head title="Contact Us">
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700,800" rel="stylesheet" />
    </Head>
    <Toaster rich-colors position="top-center" />
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
    <div class="bg-gray-50 py-16 sm:py-24">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <!-- Header Section -->
            <div class="mx-auto mb-16 max-w-2xl text-center">
                <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">Get in Touch</h1>
                <p class="mt-6 text-lg leading-8 text-gray-600">Have questions or want to collaborate? We'd love to hear from you.</p>
            </div>

            <!-- Main Content -->
            <div class="mx-auto max-w-6xl">
                <div class="mb-8">
                    <h2 class="mb-4 text-2xl font-semibold text-gray-900">Let's work together</h2>
                    <p class="max-w-md leading-relaxed text-gray-600">
                        We're here to help! Send us a message and we'll get back to you within 24 hours.
                    </p>
                </div>
                <div class="grid grid-cols-1 gap-x-12 gap-y-12 lg:grid-cols-2">
                    <!-- Contact Information -->
                    <div class="flex flex-col justify-between">
                        <div class="space-y-8">
                            <div class="space-y-6">
                                <div class="flex items-center gap-x-4">
                                    <div class="flex h-12 w-12 items-center justify-center rounded-full bg-slate-100">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                            class="h-6 w-6 text-slate-600"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"
                                            />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-gray-900">Email</h3>
                                        <p class="mt-1 text-gray-600">info@mediasetroom.com</p>
                                    </div>
                                </div>

                                <div class="flex items-center gap-x-4">
                                    <div class="flex h-12 w-12 items-center justify-center rounded-full bg-slate-100">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                            class="h-6 w-6 text-slate-600"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"
                                            />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-gray-900">Phone</h3>
                                        <p class="mt-1 text-gray-600">+234 707 683 8162</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <form class="order-first space-y-8 lg:order-last" @submit.prevent="submit">
                        <div class="space-y-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700">Full name</label>
                                <input
                                    v-model="form.name"
                                    type="text"
                                    required
                                    id="name"
                                    class="mt-2 block w-full rounded-md border border-gray-300 p-4 shadow-sm focus:border-slate-500 focus:ring-slate-500 sm:text-sm"
                                />
                                <InputError :message="form.errors.name" />
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                                <input
                                    v-model="form.email"
                                    type="email"
                                    required
                                    id="email"
                                    class="mt-2 block w-full rounded-md border border-gray-300 p-4 shadow-sm focus:border-slate-500 focus:ring-slate-500 sm:text-sm"
                                />
                                <InputError :message="form.errors.email" />
                            </div>

                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                                <input
                                    v-model="form.phone"
                                    type="tel"
                                    required
                                    id="phone"
                                    class="mt-2 block w-full rounded-md border border-gray-300 p-4 shadow-sm focus:border-slate-500 focus:ring-slate-500 sm:text-sm"
                                />
                                <InputError :message="form.errors.phone" />
                            </div>

                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                                <textarea
                                    required
                                    id="message"
                                    v-model="form.message"
                                    rows="4"
                                    class="mt-2 block w-full rounded-md border border-gray-300 p-4 shadow-sm focus:border-slate-500 focus:ring-slate-500 sm:text-sm"
                                ></textarea>
                                <InputError :message="form.errors.message" />
                            </div>
                        </div>

                        <button
                            type="submit"
                            class="w-full rounded-md bg-slate-900 px-6 py-3 text-base font-semibold text-white shadow-sm transition duration-200 hover:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-slate-500 focus:ring-offset-2"
                        >
                            Send message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
