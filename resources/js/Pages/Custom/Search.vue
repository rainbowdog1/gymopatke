<template>
    <AppLayout title="Search">
        <template #header></template>

        <div class="py-12">
            <div class="max-w-8xl mx-auto sm:px-2 lg:px-5 flex flex-col gap-y-12">
                <div class="p-10 h-full w-full">
                    <div class="h-full w-full grid grid-cols-3 grid-rows-3 gap-20">
                        <div class="bg-white row-span-2">

                        </div>
                        <div class="col-span-2 row-span-5">
                            <div class="mb-5">
                                <label for="hs-trailing-button-add-on-with-icon-and-button" class="sr-only">Label</label>
                                <div class="relative flex rounded-lg">
                                    <input type="text" id="hs-trailing-button-add-on-with-icon-and-button" name="hs-trailing-button-add-on-with-icon-and-button" class="py-3 px-4 ps-11 block w-full border-gray-200 rounded-s-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                    <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                                        <svg class="flex-shrink-0 h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                                    </div>
                                    <button type="button" class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-e-md border border-transparent bg-blue-500 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">Hladať</button>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-10 w-full">
                                <BookComponent />
                                <BookComponent />
                                <BookComponent />
                                <BookComponent />
                                <BookComponent />
                                <BookComponent />
                                <BookComponent />
                                <BookComponent />
                            </div>
                        </div>
                    </div>
                    <nav class="flex items-center justify-center mt-10 -space-x-px">
                        <button type="button" class="min-h-[38px] min-w-[38px] bg-white py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm first:rounded-s-lg last:rounded-e-lg border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-gray-700 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                            <svg class="flex-shrink-0 w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
                            <span class="hidden sm:block">Previous</span>
                        </button>
                        <button type="button" class="min-h-[38px] min-w-[38px] flex justify-center items-center bg-blue-400 text-gray-800 border border-gray-200 py-2 px-3 text-sm first:rounded-s-lg last:rounded-e-lg focus:outline-none focus:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-600 dark:border-gray-700 dark:text-white dark:focus:bg-gray-500" aria-current="page">1</button>
                        <button type="button" class="min-h-[38px] min-w-[38px] bg-white flex justify-center items-center border border-gray-200 text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm first:rounded-s-lg last:rounded-e-lg focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-gray-700 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">2</button>
                        <button type="button" class="min-h-[38px] min-w-[38px] bg-white flex justify-center items-center border border-gray-200 text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm first:rounded-s-lg last:rounded-e-lg focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-gray-700 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">3</button>
                        <button type="button" class="min-h-[38px] min-w-[38px] bg-white py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm first:rounded-s-lg last:rounded-e-lg border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-gray-700 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                            <span class="hidden sm:block">Next</span>
                            <svg class="flex-shrink-0 w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                        </button>
                    </nav>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script>
import BookComponent from "@/Pages/Custom/BookComponent.vue";
import AppLayout from "@/Layouts/AppLayout.vue";
export default {
    name: "Search",
    components: {AppLayout, BookComponent}
}
</script>

<style scoped>

</style>
