<template>
    <div class="flex flex-col gap-y-4 w-full max-w-lg bg-white p-4 rounded-md drop-shadow">
        <div class="flex flex-row gap-x-4 h-full">
            <div class="w-24">
                <img class="w-full rounded-sm" src="https://cdn.aukro.cz/images/sk1671726626714/kniha-slovencina-pre-vsetkych-145580013.jpeg" />
            </div>
            <div class="grid grid-cols-2 flex-1 w-full h-full gap-3">
                <div class="col-span-2 flex flex-col gap-y-1">
                    <div class="text-xs font-bold uppercase">Názov</div>
                    <div class="text-sm text-wrap">{{ item.name }}</div>
                </div>
                <div class="flex flex-col gap-y-1">
                    <div class="text-xs font-bold uppercase">Predmet</div>
                    <div class="text-sm">{{ translateSubject(item.subject) }}</div>
                </div>
                <div class="flex flex-col gap-y-1 hidden md:flex">
                    <div class="text-xs font-bold uppercase">Majiteľ</div>
                    <div class="text-sm">{{ item.user.name }}</div>
                </div>
                <div class="flex flex-col gap-y-1">
                    <div class="text-xs font-bold uppercase">Cena</div>
                    <div class="text-sm">{{ item.price }} €</div>
                </div>
                <div class="flex flex-col gap-y-1 hidden md:flex">
                    <div class="text-xs font-bold uppercase">Pridané dňa</div>
                    <div class="text-sm">{{ convertTime(item.created_at) }}</div>
                </div>
            </div>
        </div>
        <div class="w-full flex">
            <a href="/" class="bg-blue-500 text-white w-full rounded-sm p-1 text-center py-2">Zobraziť</a>
        </div>
    </div>
</template>

<script>
export default {
    name: "AdComponent",
    props: {
        item: Object
    },
    methods: {
        translateSubject(subject) {
            switch (subject) {
                case 'english':
                    return 'Angličtina';
                case 'german':
                    return 'Nemčina';
                case 'slovak':
                    return 'Slovenčina';
                case 'maths':
                    return 'Matematika';
                default:
                    return 'Iné';
            }
        },
        convertTime(time) {
            return new Date(time).toLocaleDateString('sk-SK', {
                    day: 'numeric',
                    month: 'numeric',
                    year: 'numeric'
                }) + ' ' +
                new Date(time).toLocaleTimeString('sk-SK', {
                    hour: 'numeric',
                    minute: 'numeric',
                    hour12: false
                })
        }
    },
}
</script>

<style scoped>

</style>
