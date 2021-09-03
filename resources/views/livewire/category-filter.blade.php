<div>
    <div class="bg-WarmGray-800 rounded-lg shadow-lg mb-4">
        <div class="px-6 py-2 flex justify-between items-cente">
            <h1 class="text-white font-semibold uppercase">{{ $category->name }}</h1>
            <div class="grid grid-cols-2 border border-WarmGray-100 divide-x divide-WarmGray-100">
                <i class="fas fa-border-all p-3 text-WarmGray-100 cursor-pointer hover:text-red-500"></i>
                <i class="fas fa-th-list p-3 text-WarmGray-100 cursor-pointer hover:text-red-500"></i>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-5">
        <aside>
            <div class="bg-WarmGray-800 rounded-md py-6 px-4 mr-4">
                <h2 class="font-semibold text-center mb-4 text-white">Subcategories</h2>

                @foreach($category->subcategories as $subcategory)
                    <li class="my-2 text-sm text-white">
                        <a class="cursor-pointer hover:text-red-500 capitalize" href="">{{ $subcategory->name }}</a>
                    </li>
                @endforeach
            </div>
        </aside>

        <div class="col-span-4">
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

            <div class="mt-4">
                {{ $products->links() }}
            </div>
        </div>
    </div>
</div>
