<x-app-layout>
    <div class="container py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
            <div>
                <div class="flexslider">
                    <ul class="slides">
                        @foreach ($product->images as $image)

                            <li data-thumb=" {{ Storage::url($image->url) }}">
                                <img src=" {{ Storage::url($image->url) }}" />
                            </li>

                        @endforeach

                    </ul>
                </div>

                <div class="-mt-10 text-WarmGray-800">
                    <h2 class="font-bold text-lg">Description</h2>
                    {!!$product->description!!}
                </div>
            </div>

            <div>
                <h1 class="text-xl font-bold text-WarmGray-800">{{ $product->name }}</h1>
                <div>
                    <p class="text-WarmGray-800">Brand: <a href="" class="underline capitalize hover:text-Red-500">{{ $product->brand->name }}</a></p>

                </div>

                <p class="text-2xl font-semibold text-WarmGray-800 my-4">US ${{ $product->price }}</p>
                <div class="bg-white rounded-lg shadow-lg mb-6">
                    <div class="p-4 flex items-center">
                        <span class="flex items-center justify-center h-10 w-10 rounded-full bg-Green-400">
                            <i class="fas fa-truck text-sm text-white"></i>
                        </span>
                        <div class="ml-4">
                            <p class="text-lg font-semibold text-Green-500">With international shipping</p>
                            <p>Estimated Delivery: {{ now()->addDay(13)->format('l j F') }}</p>
                        </div>
                    </div>
                </div>

                @if($product->subcategory->size)
                    @livewire('add-cart-item-size', ['product' => $product])
                @elseif($product->subcategory->color)
                    @livewire('add-cart-item-color', ['product' => $product])
                @else
                    @livewire('add-cart-item', ['product' => $product])
                @endif
            </div>
        </div>
    </div>

    @push('script')
        <script>
            $(document).ready(function() {
                $('.flexslider').flexslider({
                    animation: "slide",
                    controlNav: "thumbnails"
                });
            });
        </script>
    @endpush
</x-app-layout>
