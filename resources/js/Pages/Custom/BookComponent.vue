<template>
    <div class="flex flex-col gap-y-3 min-h-40 min-w-96 bg-white p-5 rounded-lg drop-shadow">
        <div class="flex flex-row gap-x-5">
            <div class="h-full text-center w-60 border"></div>
            <div class="flex flex-col gap-y-5">
                <div class="flex flex-col gap-y-1">
                    <div class="text-xs font-bold uppercase">Názov</div>
                    <div class="text-sm">Literárna výchova pre 7. ročník základných škôl a 2. ročník gymnázií s
                        osemročným štúdiom
                    </div>
                </div>
                <div class="flex flex-col gap-y-1">
                    <div class="text-xs font-bold uppercase">Stav poškodenia</div>
                    <div class="text-sm">Používaná</div>
                </div>
                <div class="flex flex-col gap-y-1">
                    <div class="text-xs font-bold uppercase">Majiteľ</div>
                    <div class="text-sm">Martin Novák</div>
                </div>
            </div>
        </div>
        <div class="w-full flex">
            <a href="/" class="bg-blue-500 text-white w-full rounded-lg p-1 text-center py-2">Zobraziť</a>
        </div>
    </div>
</template>

<script>
export default {
    name: "BookComponent"
}
</script>

<style scoped>

</style>
