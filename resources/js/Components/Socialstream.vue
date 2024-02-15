<script setup>
import InputError from '@/Components/InputError.vue';
import ProviderIcon from '@/Components/SocialstreamIcons/ProviderIcon.vue';

defineProps({
    error: {
        type: String,
        default: null,
    },
    providers: {
        type: Array,
    },
    labels: {
        type: Object,
    }
});
</script>

<template>
    <div v-if="providers.length" class="space-y-6 p-5">

        <InputError v-if="error" :message="error" class="text-center"/>

        <a v-for="provider in providers" :key="provider.id"
           class="flex gap-2 items-center justify-center transition duration-200 border border-gray-400 w-full p-5 py-10 rounded-lg text-sm shadow-sm hover:shadow-md font-normal text-center inline-block"
           :href="route('oauth.redirect', provider.id)">
            <ProviderIcon :provider="provider" classes="h-6 w-6 mx-2"/>
            <span class="block font-medium text-sm text-gray-700">{{ provider.buttonLabel || provider.name }}</span>
        </a>
    </div>
</template>
