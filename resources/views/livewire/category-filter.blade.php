<div>
    <div class="bg-WarmGray-800 rounded-lg shadow-lg mb-4">
        <div class="px-6 py-2 flex justify-between items-cente">
            <h1 class="text-white font-semibold uppercase">{{ $category->name }}</h1>
            <div class="grid grid-cols-2 border border-WarmGray-100 divide-x divide-WarmGray-100">
                <i class="fas fa-border-all p-3 text-WarmGray-100 cursor-pointer {{ $view == 'grid' ? 'text-Red-500' : ''}}" wire:click="$set('view', 'grid')"></i>
                <i class="fas fa-th-list p-3 text-WarmGray-100 cursor-pointer {{ $view == 'list' ? 'text-Red-500' : ''}}" wire:click="$set('view', 'list')"></i>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-5">
        <aside>
            <div class="bg-WarmGray-800 rounded-md py-6 px-4 mr-4">

                <h2 class="font-semibold text-center mb-4 text-white">Subcategories</h2>
                <ul class="divide-y divide-WarmGray-100">
                @foreach($category->subcategories as $subcategory)
                    <li class="py-2 text-sm text-white">
                        <a class="cursor-pointer hover:text-red-500 capitalize {{ $subcategoria == $subcategory->name ? 'text-red-500 font-semibold' : ''}}"
                        wire:click="$set('subcategoria', '{{ $subcategory->name }}')"
                        >{{ $subcategory->name }}</a>
                    </li>
                @endforeach
                </ul>
            </div>

            <div class="bg-WarmGray-800 rounded-md py-6 px-4 mt-4 mr-4">
                <h2 class="font-semibold text-center mb-4 text-white">brands</h2>
                <ul class="divide-y divide-WarmGray-100">
                @foreach($category->brands as $brand)
                    <li class="py-2 text-sm text-white">
                        <a class="cursor-pointer hover:text-red-500 capitalize {{ $marca == $brand->name ? 'text-red-500 font-semibold' : ''}}"
                        wire:click="$set('marca','{{ $brand->name }}')"
                        >{{ $brand->name }}</a>
                    </li>
                @endforeach
                </ul>
            </div>

            <x-jet-button class="mt-4 ml-8" wire:click="cleanUp">
                Delete fitlers
            </x-jet-button>
        </aside>

        <div class="col-span-4">
            @if($view == 'grid')

                <ul class="grid grid-cols-4 gap-4">
                    @foreach($products as $product)
                    <li class="bg-white rounded-lg shadow">
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

            @else
                <ul class="">
                    @foreach($products as $product)
                        <li class="bg-white rounded-lg shadow mb-4">
                            <article class="flex">
                                <figure class="">
                                    <img class="h-48 w-56 object-cover object-center" src="{{ Storage::url($product->images->first()->url) }}" alt="">
                                </figure>
                                <div class="flex-1 py-4 px-6">
                                    <div class="flex justify-between">
                                        <div>
                                            <h1 class="text-lg font-semibold text-WarmGray-800">{{ $product->name }}</h1>
                                            <p class="mt-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore deleniti beatae quos qui incidunt odit corporis, atque dignissimos illum! Omnis facilis voluptas debitis molestias voluptatibus, est ut sunt, facere aperiam eaque unde cumque ea! Quo!</p>
                                            <p class="w-36 text-center bg-red-500 rounded-md font-bold text-white mt-4">US$ {{ $product->price }}</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                    @endforeach
                </ul>
            @endif

            <div class="mt-4">
                {{ $products->links() }}
            </div>
        </div>
    </div>
</div>
