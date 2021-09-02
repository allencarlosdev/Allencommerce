<x-app-layout>
    <div class="container py-8">
        @foreach ($categories as $category)
            <section class="mb-6 px-6 py-4 bg-WarmGray-800 shadow-lg rounded-lg">
                <div class="flex justify-between items-center mb-2">
                    <h1 class="text-lg uppercase font-semibold text-white">
                        {{ $category->name }}
                    </h1>

                    <a href="{{ route('categories.show', $category) }}" class=" text-white hover:text-red-500 hover:cursor-pointer mr-2 font-bold">View more</a>
                </div>
                @livewire('category-products', ['category' => $category])
            </section>
        @endforeach
    </div>
    @push('script')
        <script>
            livewire.on('glider', function(id) {
                new Glider(document.querySelector('.glider-'+ id), {
                    slidesToScroll: 1,
                    slidesToShow: 1,
                    draggable: true,
                    dots: '.glider-'+ id+'~ .dots',
                    arrows: {
                        prev:'.glider-'+ id+'~ .glider-prev',
                        next:'.glider-'+ id+'~ .glider-next'
                    },
                    responsive: [
                        {
                            breakpoint: 640,
                            settings:{
                                slidesToShow: 2.5,
                                slidesToScroll: 1,
                            }
                        },
                        {
                            breakpoint: 768,
                            settings:{
                                slidesToShow: 3.5,
                                slidesToScroll: 3,
                            }
                        },
                        {
                            breakpoint: 1024,
                            settings:{
                                slidesToShow: 4.5,
                                slidesToScroll: 4,
                            }
                        },
                        {
                            breakpoint: 1280,
                            settings:{
                                slidesToShow: 5.5,
                                slidesToScroll: 5,
                            }
                        },
                    ]
                });
            });
        </script>
    @endpush
</x-app-layout>
