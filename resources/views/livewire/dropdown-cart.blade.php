<div>
    <x-jet-dropdown width="48">
        <x-slot name="trigger">
            <span class="relative inline-block cursor-pointer">
                <x-cart size="40"/>
                {{-- <span class="absolute bottom-6 left-0 inline-flex items-center justify-center px-2 py-1/4 text-xs font-bold leading-none text-red-100 transform translate-x-1/2 -translate-y-1/12 bg-red-600 rounded-full">99</span> --}}
            </span>
        </x-slot>

        <x-slot name="content">
            <div class="py-4 px-4">
                <p class="text-center text-WarmGray-800">
                    The cart is empty
                </p>
            </div>
        </x-slot>
    </x-jet-dropdown>
</div>
