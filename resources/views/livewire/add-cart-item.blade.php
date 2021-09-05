<div  x-data>
    <p class="text-WarmGray-800 mb-4">
        <span class="font-semibold text-lg">Available stock:{{ $quantity }}</span>
    </p>

    <div class="flex">
        <div class="mr-4">
            <x-jet-secondary-button
            disabled
            x-bind:disabled="$wire.qty <=1"
            wire:loading.attr="disabled"
            wire:target="decrement"
            wire:click="decrement">
                -
            </x-jet-secondary-button>
            <span class="mx-2 text-WarmGray-800">{{ $qty }}</span>
            <x-jet-secondary-button
            x-bind:disabled="$wire.qty >= $wire.quantity"
            wire:loading.attr="disabled"
            wire:target="increment"
            wire:click="increment">
                +
            </x-jet-secondary-button>
        </div>

        <div class="flex-1">
            <x-button color="Red" class="w-full">
                Add to shopping cart
            </x-button>
        </div>
    </div>
</div>
