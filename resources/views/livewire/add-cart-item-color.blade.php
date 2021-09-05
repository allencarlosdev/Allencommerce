<div>
    <p class="text-xl text-WarmGray-800">Color:</p>

    <select class="form-control w-full">
        <option value="" selected disabled>Select a color</option>

        @foreach($colors as $color)
            <option value="{{ $color->id }}">{{ $color->name }}</option>
        @endforeach

    </select>
</div>
