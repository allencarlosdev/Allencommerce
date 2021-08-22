<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories = [
            //cellphone and tablets
            [
                'category_id'=>1,
                'name'=> 'Cell phones and smartphones',
                'slug'=> Str::slug('Cell phones and smartphones'),
                'color'=> true

            ],
            [
                'category_id'=>1,
                'name'=> 'cell phone accessories',
                'slug'=> Str::slug('cell phone accessories'),

            ],
            [
                'category_id'=>1,
                'name'=> 'Smartwatches',
                'slug'=> Str::slug('Smartwatches'),

            ],
                // TV, AUDIO AND VIDEO
            [
                'category_id'=>2,
                'name'=> 'TV and audio',
                'slug'=> Str::slug('TV and audio'),

            ],
            [
                'category_id'=>2,
                'name'=> 'Audios',
                'slug'=> Str::slug('Audios'),

            ],
            [
                'category_id'=>2,
                'name'=> 'Car audio',
                'slug'=> Str::slug('Car audio'),

            ],
            // Console and videogames
            [
                'category_id'=>3,
                'name'=> 'Xbox',
                'slug'=> Str::slug('Xbox'),

            ],
            [
                'category_id'=>3,
                'name'=> 'Play Station',
                'slug'=> Str::slug('Play Station'),

            ],
            [
                'category_id'=>3,
                'name'=> 'Pc videogames',
                'slug'=> Str::slug('Pc videogames'),

            ],
            [
                'category_id'=>3,
                'name'=> 'Nintendo',
                'slug'=> Str::slug('Nintendo'),

            ],
            // Computation
            [
                'category_id'=>4,
                'name'=> 'Laptops',
                'slug'=> Str::slug('Laptops'),

            ],
            [
                'category_id'=>4,
                'name'=> 'desktop pc',
                'slug'=> Str::slug('desktop pc'),

            ],
            [
                'category_id'=>4,
                'name'=> 'Storage',
                'slug'=> Str::slug('Storage'),

            ],
            [
                'category_id'=>4,
                'name'=> 'Computer accessories',
                'slug'=> Str::slug('Computer accessories'),

            ],

            // fashion
            [
                'category_id'=>5,
                'name'=> 'Women',
                'slug'=> Str::slug('Women'),

            ],
            [
                'category_id'=>5,
                'name'=> 'Man',
                'slug'=> Str::slug('Man'),

            ],
            [
                'category_id'=>5,
                'name'=> 'Lens',
                'slug'=> Str::slug('Lens'),

            ],
            [
                'category_id'=>5,
                'name'=> 'Watches',
                'slug'=> Str::slug('Watches'),

            ],

            ];

            foreach ($subcategories as $subcategory) {
                Subcategory::factory(1)->create($subcategory);
            }
    }
}
