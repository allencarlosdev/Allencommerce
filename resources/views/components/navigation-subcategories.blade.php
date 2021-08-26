@props(['category'])

<div class="grid grid-cols-4 p-4">
    <div>
        <p class="text-lg font-bold text-center text-Emerald-700 mb-3">Subcategories</p>
        <ul>
            @foreach($category->subcategories as $subcategory)
            <li class="">
                <a href="" class="text-Emerald-700 text-sm font-semibold inline-block py-1 px-4 hover:text-Red-600">
                    {{ $subcategory->name }}
                </a>
            </li>
            @endforeach
        </ul>
    </div>

    <div class="col-span-3">
        <img class="h-64 w-full object-cover object-center"" src="{{ Storage::url($category->image) }}" alt="">
    </div>
</div>
