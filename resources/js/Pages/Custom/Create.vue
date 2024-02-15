<template>
    <AppLayout>
        <template #header>
            <div class="flex flex-row gap-x-8 overflow-scroll items-center md:items-start">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Inzeráty
                </h2>
                <NavLink active>Vytvoriť inzerát</NavLink>
                <NavLink>Moje inzeráty</NavLink>
                <NavLink>História nákupov</NavLink>
            </div>
        </template>

        <div class="py-20">
            <div class="md:max-w-6xl mx-auto sm:px-2 lg:px-5 flex flex-col gap-y-12">
                <div class="md:p-20 p-10 h-full w-full bg-white rounded-md">
                    <form method="post" :action="route('ads.store')" enctype="multipart/form-data">
                        <input type="hidden" name="_token" :value="this.$page.props.csrf_token" />
                        <div class="space-y-12">
                            <div class="border-b border-gray-900/10 pb-12">
                                <h2 class="text-xl font-semibold leading-7 text-gray-900">Inzerát</h2>
                                <p class="mt-1 text-sm leading-6 text-gray-600">Formulár pre vytvorenie inzerátu, prosíme o pravdivé vyplnenie údajov.</p>

                                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                    <div class="sm:col-span-4">
                                        <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Názov knihy</label>
                                        <div class="mt-2">
                                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                                <input required type="text" name="name" id="name" class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-span-full">
                                        <label for="price" class="block text-sm font-medium leading-6 text-gray-900">Cena</label>
                                        <div class="relative mt-2 rounded-md shadow-sm sm:max-w-md">
                                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                <span class="text-gray-500 sm:text-sm">€</span>
                                            </div>
                                            <input required type="number" name="price" id="price" class="block w-full rounded-md border-0 py-1.5 pl-7 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="0.00">
                                        </div>
                                    </div>

                                    <div class="col-span-full">
                                        <label class="block text-sm font-medium leading-6 text-gray-900">Fotografia knihy</label>
                                        <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                                            <div class="text-center">
                                                <PhotoIcon class="mx-auto h-12 w-12 text-gray-300" aria-hidden="true" />
                                                <div class="mt-4 flex flex-wrap justify-center text-sm leading-6 text-gray-600">
                                                    <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                                        <span>Nahrať fotografiu</span>
                                                        <input required id="file-upload" name="image" type="file" capture="environment" class="sr-only" />
                                                    </label>
                                                    <p class="pl-1">alebo ju presuňte sem</p>
                                                </div>
                                                <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF do 10MB</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="border-b border-gray-900/10 pb-12">
                                <h2 class="text-base font-semibold leading-7 text-gray-900">Kategórie knihy</h2>
                                <p class="mt-1 text-sm leading-6 text-gray-600">Kategórie knihy, podľa ktorých sa bude inzerát filtrovať.</p>

                                <div class="mt-10 space-y-10">
                                    <fieldset>
                                        <legend class="text-sm font-semibold leading-6 text-gray-900">Predmet</legend>
                                        <p class="mt-1 text-sm leading-6 text-gray-600">These are delivered via SMS to your mobile phone.</p>
                                        <div class="mt-3 space-y-3">
                                            <div class="flex items-center gap-x-3">
                                                <input required id="subject-slovak" name="subject" type="radio" value="slovak" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
                                                <label for="subject-slovak" class="block text-sm font-medium leading-6 text-gray-900">Slovenčina</label>
                                            </div>
                                            <div class="flex items-center gap-x-3">
                                                <input required id="subject-english" name="subject" type="radio" value="english" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
                                                <label for="subject-english" class="block text-sm font-medium leading-6 text-gray-900">Angličtina</label>
                                            </div>
                                            <div class="flex items-center gap-x-3">
                                                <input required id="subject-german" name="subject" type="radio" value="german" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
                                                <label for="subject-german" class="block text-sm font-medium leading-6 text-gray-900">Nemčina</label>
                                            </div>
                                            <div class="flex items-center gap-x-3">
                                                <input required id="subject-maths" name="subject" type="radio" value="maths" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
                                                <label for="subject-maths" class="block text-sm font-medium leading-6 text-gray-900">Matematika</label>
                                            </div>
                                            <div class="flex items-center gap-x-3">
                                                <input required id="subject-other" name="subject" type="radio" value="other" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
                                                <label for="subject-other" class="block text-sm font-medium leading-6 text-gray-900">
                                                    Iné
                                                    <p class="inline-block text-xs font-normal text-gray-500">(Nespadá ani do jednej z týchto kategórií)</p>
                                                </label>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend class="text-sm font-semibold leading-6 text-gray-900">Stav knihy</legend>
                                        <p class="mt-1 text-sm leading-6 text-gray-600">These are delivered via SMS to your mobile phone.</p>
                                        <div class="mt-3 space-y-3">
                                            <div class="flex items-center gap-x-3">
                                                <input required id="condition-new" name="condition" type="radio" value="new" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
                                                <label for="condition-new" class="block text-sm font-medium leading-6 text-gray-900">Nová</label>
                                            </div>
                                            <div class="flex items-center gap-x-3">
                                                <input required id="condition-used" name="condition" type="radio" value="used" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
                                                <label for="condition-used" class="block text-sm font-medium leading-6 text-gray-900">Použitá</label>
                                            </div>
                                            <div class="flex items-center gap-x-3">
                                                <input required id="condition-bad" name="condition" type="radio" value="bad" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
                                                <label for="condition-bad" class="block text-sm font-medium leading-6 text-gray-900">Zlá</label>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend class="text-sm font-semibold leading-6 text-gray-900">Čistota knihy</legend>
                                        <p class="mt-1 text-sm leading-6 text-gray-600">These are delivered via SMS to your mobile phone.</p>
                                        <div class="mt-3 space-y-3">
                                            <div class="flex items-center gap-x-3">
                                                <input required id="cleanliness-clean" name="cleanliness" type="radio" value="clean" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
                                                <label for="cleanliness-clean" class="block text-sm font-medium leading-6 text-gray-900">Nepopísaná</label>
                                            </div>
                                            <div class="flex items-center gap-x-3">
                                                <input required id="cleanliness-erased" name="cleanliness" type="radio" value="erased" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
                                                <label for="cleanliness-erased" class="block text-sm font-medium leading-6 text-gray-900">Vygumovaná</label>
                                            </div>
                                            <div class="flex items-center gap-x-3">
                                                <input required id="cleanliness-written" name="cleanliness" type="radio" value="written" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
                                                <label for="cleanliness-written" class="block text-sm font-medium leading-6 text-gray-900">Nevygumovaná</label>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="border-b border-gray-900/10 pb-12">
                                <div class="relative flex gap-x-3">
                                    <div class="flex h-6 items-center">
                                        <input required id="rules" name="rules" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    </div>
                                    <div class="text-sm leading-6">
                                        <label for="rules" class="font-medium text-gray-900">Pravidlá inzerátov</label>
                                        <div class="text-gray-500">
                                            Prečítal som si
                                            <p class="hover:underline inline-block hover:text-blue-500 hover:underline-offset-2 hover:text-sm transition-all duration-300">pravidlá inzerátov</p>
                                            a súhlasím s nimi.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 flex items-center justify-end gap-x-6">
                            <button type="submit" class="rounded-md bg-blue-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Vytvoriť inzerát</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script setup>
import { PhotoIcon, UserCircleIcon } from '@heroicons/vue/24/solid'
</script>

<script>
import NavLink from "@/Components/NavLink.vue";
import AppLayout from "@/Layouts/AppLayout.vue";

export default {
    name: "Create",
    components: {
        NavLink,
        AppLayout,
    }
}
</script>

<style scoped>

</style>
