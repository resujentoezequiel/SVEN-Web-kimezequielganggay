<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div style="width: 92%; margin: auto">
            <div style="width: 100%">

                <div>
                    <livewire:product.add-product/>
                </div>

                <div>
                    <livewire:product.product-dashboard/>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
