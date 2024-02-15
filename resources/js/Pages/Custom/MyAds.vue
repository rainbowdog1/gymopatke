<template>
    <AppLayout title="Search">
        <template #header>
            <div class="flex flex-row gap-x-8">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Inzeráty
                </h2>
                <NavLink :active="true">Moje inzeráty</NavLink>
                <NavLink>História nákupov</NavLink>
            </div>
        </template>

        <div class="py-8">
            <div class="max-w-8xl mx-auto sm:px-2 lg:px-5 flex flex-col gap-y-12">
                <div class="p-10 h-full w-full">
                    <div class="flex w-full justify-end pb-5">
                        <a href="#" class="p-2 px-4 text-white font-medium rounded-md bg-blue-500">Pridať inzerát</a>
                    </div>
                    <div class="w-full flex flex-col gap-y-5 md:grid md:grid-cols-4 md:gap-20">
                        <div class="bg-white rounded-lg drop-shadow h-fit p-7 flex flex-col gap-y-7">
                            <div class="flex flex-col gap-y-3">
                                <p class="text-sm font-bold text-gray-500 uppercase">Predmet</p>
                                <div class="flex flex-col gap-y-2">
                                    <div class="flex flex-row gap-x-2 items-center">
                                        <Checkbox @update:checked="updateSelectedSubjects('slovak')" class="w-4 h-4" id="subject-slovak" />
                                        <Label class="select-none" for="subject-slovak">
                                            Slovenčina
                                            <p class="text-sm font-medium text-gray-500 inline-block">({{ items.data.filter(item => item.subject === 'slovak').length }})</p>
                                        </Label>
                                    </div>
                                    <div class="flex flex-row gap-x-2 items-center">
                                        <Checkbox @update:checked="updateSelectedSubjects('english')" class="w-4 h-4" id="subject-english" />
                                        <Label class="select-none" for="subject-english">
                                            Angličtina
                                            <p class="text-sm font-medium text-gray-500 inline-block">({{ items.data.filter(item => item.subject === 'english').length }})</p>
                                        </Label>
                                    </div>
                                    <div class="flex flex-row gap-x-2 items-center">
                                        <Checkbox @update:checked="updateSelectedSubjects('german')" class="w-4 h-4" id="subject-german" />
                                        <Label class="select-none" for="subject-german">
                                            Nemčina
                                            <p class="text-sm font-medium text-gray-500 inline-block">({{ items.data.filter(item => item.subject === 'german').length }})</p>
                                        </Label>
                                    </div>
                                    <div class="flex flex-row gap-x-2 items-center">
                                        <Checkbox @update:checked="updateSelectedSubjects('maths')" class="w-4 h-4" id="subject-maths" />
                                        <Label class="select-none" for="subject-maths">
                                            Matematika
                                            <p class="text-sm font-medium text-gray-500 inline-block">({{ items.data.filter(item => item.subject === 'maths').length }})</p>
                                        </Label>
                                    </div>
                                    <div class="flex flex-row gap-x-2 items-center">
                                        <Checkbox @update:checked="updateSelectedSubjects('other')" class="w-4 h-4" id="subject-other" />
                                        <Label class="select-none" for="subject-other">
                                            Iné
                                            <p class="text-sm font-medium text-gray-500 inline-block">({{ items.data.filter(item => item.subject === 'other').length }})</p>
                                        </Label>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-y-3">
                                <p class="text-sm font-bold text-gray-500 uppercase">Stav knihy</p>
                                <div class="flex flex-col gap-y-2">
                                    <div class="flex flex-row gap-x-2 items-center">
                                        <Checkbox @update:checked="updateSelectedConditions('new')" class="w-4 h-4" id="condition-new" />
                                        <Label class="select-none" for="condition-new">Nová</Label>
                                    </div>
                                    <div class="flex flex-row gap-x-2 items-center">
                                        <Checkbox @update:checked="updateSelectedConditions('used')" class="w-4 h-4" id="condition-used" />
                                        <Label class="select-none" for="condition-used">Používaná</Label>
                                    </div>
                                    <div class="flex flex-row gap-x-2 items-center">
                                        <Checkbox @update:checked="updateSelectedConditions('bad')" class="w-4 h-4" id="condition-bad" />
                                        <Label class="select-none" for="condition-bad">Zlá</Label>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-y-3">
                                <p class="text-sm font-bold text-gray-500 uppercase">Čistota knihy</p>
                                <div class="flex flex-col gap-y-2">
                                    <div class="flex flex-row gap-x-2 items-center">
                                        <Checkbox @update:checked="updateSelectedCleanliness('erased')" class="w-4 h-4" id="cleanliness-erased" />
                                        <Label class="select-none" for="cleanliness-erased">Vygumovaná</Label>
                                    </div>
                                    <div class="flex flex-row gap-x-2 items-center">
                                        <Checkbox @update:checked="updateSelectedCleanliness('clean')" class="w-4 h-4" id="cleanliness-clean" />
                                        <Label class="select-none" for="cleanliness-clean">Nepopísaná</Label>
                                    </div>
                                    <div class="flex flex-row gap-x-2 items-center">
                                        <Checkbox @update:checked="updateSelectedCleanliness('written')" class="w-4 h-4" id="cleanliness-written" />
                                        <Label class="select-none" for="cleanliness-written">Nevygumovaná</Label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-3">
                            <div class="mb-5 drop-shadow">
                                <label for="search" class="sr-only">Label</label>
                                <div class="relative flex rounded-lg">
                                    <input v-model="searchTerm" placeholder="Vyhľadať inzerát podľa mena" type="text" id="search" class="py-3 px-4 ps-11 block w-full border-gray-200 rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                    <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                                        <svg class="flex-shrink-0 h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-y-3 md:gap-6 w-full">
                                <AdComponent v-for="filteredItem in filteredItems" :item="filteredItem" :key="filteredItem.id" />
                            </div>
                        </div>
                    </div>
                    <nav class="flex items-center gap-x-1 justify-center mt-10">
                        <a :href="link.link" v-for="link in items.links" type="button" :class="(link.active ? 'bg-blue-500 text-white hover:bg-blue-600 ' : '') + 'min-h-[38px] min-w-[38px] font-medium flex justify-center items-center text-gray-800 border border-gray-300 py-2 px-3 text-sm rounded-sm hover:bg-gray-200 transition easy-in-out duration-300 cursor-pointer'" aria-current="page">{{ link.label }}</a>
                    </nav>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script>
import AdComponent from "@/Pages/Custom/AdComponent.vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import NavLink from "@/Components/NavLink.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import Checkbox from "@/Components/Checkbox.vue";


export default {
    name: "MyAds",
    components: {
        Checkbox,
        SecondaryButton,
        PrimaryButton,
        NavLink,
        AppLayout,
        AdComponent,
    },
    props: {
        items: Object
    },
    data() {
        return {
            selectedSubjects: [], // Use an array for selected subjects
            selectedConditions: [],
            selectedCleanliness: [],
            searchTerm: '',
        };
    },
    computed: {
        filteredItems() {
            return this.items.data.filter(item => {
                const subjectMatch = this.selectedSubjects.length === 0 || this.selectedSubjects.includes(item.subject);
                const conditionMatch = this.selectedConditions.length === 0 || this.selectedConditions.includes(item.condition);
                const cleanlinessMatch = this.selectedCleanliness.length === 0 || this.selectedCleanliness.includes(item.cleanliness);

                const nameMatch = item.name.toLowerCase().includes(this.searchTerm.toLowerCase());

                return subjectMatch && conditionMatch && cleanlinessMatch && nameMatch;
            });
        },
    },
    methods: {
        // Method to update selectedSubjects array
        updateSelectedSubjects(subject) {
            const index = this.selectedSubjects.indexOf(subject);

            if (index === -1) {
                // Add the subject to the array if not present
                this.selectedSubjects.push(subject);
            } else {
                // Remove the subject from the array if present
                this.selectedSubjects.splice(index, 1);
            }
        },
        updateSelectedConditions(condition) {
            const index = this.selectedConditions.indexOf(condition);

            if (index === -1) {
                // Add the subject to the array if not present
                this.selectedConditions.push(condition);
            } else {
                // Remove the subject from the array if present
                this.selectedConditions.splice(index, 1);
            }
        },
        updateSelectedCleanliness(cleanliness) {
            const index = this.selectedCleanliness.indexOf(cleanliness);

            if (index === -1) {
                // Add the subject to the array if not present
                this.selectedCleanliness.push(cleanliness);
            } else {
                // Remove the subject from the array if present
                this.selectedCleanliness.splice(index, 1);
            }
        },
    },
}
</script>

<style scoped>
</style>
