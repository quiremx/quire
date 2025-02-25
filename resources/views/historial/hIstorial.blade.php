<x-slider title="Historial">
    <div x-data="{ tab: 'transferencias' }" class=" flex flex-col h-screen overflow-hidden">
        <div class="sticky top-0 z-10 ">
            <x-button-historial></x-button-historial>
        </div>

        <div class="flex-1 overflow-y-auto space-y-4 mb-10">
            <div x-show="tab === 'transferencias'" class="space-y-4 mb-10">
                <x-card-trans></x-card-trans>
                <x-card-trans></x-card-trans>
                <x-card-trans></x-card-trans>
                <x-card-trans></x-card-trans>
            </div>

            <div x-show="tab === 'viajes'" class="space-y-4 mb-5">
                <x-card-viajes></x-card-viajes>
                <x-card-viajes></x-card-viajes>
                <x-card-viajes></x-card-viajes>
                <x-card-viajes></x-card-viajes>
            </div>
        </div>
    </div>
</x-slider>
