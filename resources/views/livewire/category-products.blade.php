<div wire:init="loadPosts">
    @if (count($products))
        <div class="glider-contain">
            <ul class="glider-{{ $category->id }}">
                @foreach ($products as $product)
                    <li class="bg-white rounded-lg shadow {{ $loop->last ? '' : 'sm:mr-4' }}">
                        <article>
                            <figure>
                                <img class="h-48 w-full object-cover object-center" src="{{ Storage::url($product->images->first()->url) }}" alt="">
                            </figure>

                            <div class="py-4 px-6">
                                <h1 class="text-lg font-semibold">
                                    <a href="" class="___class_+?5___">
                                        {{ Str::limit($product->name, 14) }}
                                    </a>
                                </h1>
                                <p class="bg-red-500 rounded-md font-bold text-white text-center">US$ {{ $product->price }}</p>
                            </div>
                        </article>
                    </li>
                @endforeach
            </ul>

            <button aria-label="Previous" class="glider-prev">«</button>
            <button aria-label="Next" class="glider-next">»</button>
            <div role="tablist" class="dots"></div>
        </div>
    @else
        <div class=" flex justify-center items-center">
            <div class="animate-spin rounded-full h-32 w-32 border-t-2 border-b-2 border-Emerald-500"></div>
        </div>
    @endif
</div>
