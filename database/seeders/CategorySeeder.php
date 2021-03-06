<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories = [
            [
                'name'=>'Cell phones and tablets',
                'slug'=> Str::slug('Cell phones and tablets'),
                'icon' => '<i class="fas fa-mobile-alt"></i>'
            ],

            [
                'name'=>'TV, audio and video',
                'slug'=> Str::slug('TV, audio and video'),
                'icon'=> '<i class="fas fa-tv"></i>'
            ],
            [
                'name'=>'Console and video games',
                'slug'=> Str::slug('Console and video games'),
                'icon'=> '<i class="fas fa-gamepad"></i>'
            ],
            [
                'name'=>'Computation',
                'slug'=> Str::slug('Computation'),
                'icon'=> '<i class="fas fa-laptop"></i>'
            ],
            [
                'name'=>'Fashion',
                'slug'=> Str::slug('Fashion'),
                'icon'=> '<i class="fas fa-tshirt"></i>'
            ],
            ];

            foreach ($categories as $category) {
                $category = Category::factory(1)->create($category)->first();

                $brands=Brand::factory(4)->create();

                foreach ($brands as $brand){
                    $brand->categories()->attach($category->id);
                }


            }
    }
}
