<?php

use App\Product;
use App\Category;
use Illuminate\Database\Seeder;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Mangue / Passion',
            'slug' => 'mangue-passion',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mollis ultricies quam, ac cursus massa fringilla sit amet. Etiam at egestas dui. ',
            'price' => 6,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mollis ultricies quam, ac cursus massa fringilla sit amet. Etiam at egestas dui. Vestibulum eu justo augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam volutpat nunc in ullamcorper bibendum. Integer id dolor turpis. Morbi at leo augue. Nunc eu gravida neque. Vivamus urna dui, egestas sed tincidunt sed, iaculis in leo. ',
            'category_id'=> Category::all()->random()->id
        ]);
        Product::create([
            'name' => 'Mangue / Citron',
            'slug' => 'mangue-citron',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mollis ultricies quam, ac cursus massa fringilla sit amet. Etiam at egestas dui. ',
            'price' => 6,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mollis ultricies quam, ac cursus massa fringilla sit amet. Etiam at egestas dui. Vestibulum eu justo augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam volutpat nunc in ullamcorper bibendum. Integer id dolor turpis. Morbi at leo augue. Nunc eu gravida neque. Vivamus urna dui, egestas sed tincidunt sed, iaculis in leo. ',
            'category_id'=> Category::all()->random()->id
        ]);
        Product::create([
            'name' => 'Mangue / Fraise',
            'slug' => 'mangue-fraise',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mollis ultricies quam, ac cursus massa fringilla sit amet. Etiam at egestas dui. ',
            'price' => 6,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mollis ultricies quam, ac cursus massa fringilla sit amet. Etiam at egestas dui. Vestibulum eu justo augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam volutpat nunc in ullamcorper bibendum. Integer id dolor turpis. Morbi at leo augue. Nunc eu gravida neque. Vivamus urna dui, egestas sed tincidunt sed, iaculis in leo. ',
            'category_id'=> Category::all()->random()->id
        ]);
        Product::create([
            'name' => 'Mangue / Melon',
            'slug' => 'mangue-melon',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mollis ultricies quam, ac cursus massa fringilla sit amet. Etiam at egestas dui. ',
            'price' => 6,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mollis ultricies quam, ac cursus massa fringilla sit amet. Etiam at egestas dui. Vestibulum eu justo augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam volutpat nunc in ullamcorper bibendum. Integer id dolor turpis. Morbi at leo augue. Nunc eu gravida neque. Vivamus urna dui, egestas sed tincidunt sed, iaculis in leo. ',
            'category_id'=> Category::all()->random()->id
        ]);
        Product::create([
            'name' => 'Mangue / Banane',
            'slug' => 'mangue-banane',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mollis ultricies quam, ac cursus massa fringilla sit amet. Etiam at egestas dui. ',
            'price' => 9,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mollis ultricies quam, ac cursus massa fringilla sit amet. Etiam at egestas dui. Vestibulum eu justo augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam volutpat nunc in ullamcorper bibendum. Integer id dolor turpis. Morbi at leo augue. Nunc eu gravida neque. Vivamus urna dui, egestas sed tincidunt sed, iaculis in leo. ',
            'category_id'=> Category::all()->random()->id
        ]);
        Product::create([
            'name' => 'Mangue / raisin',
            'slug' => 'mangue-raisin',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mollis ultricies quam, ac cursus massa fringilla sit amet. Etiam at egestas dui. ',
            'price' => 7,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mollis ultricies quam, ac cursus massa fringilla sit amet. Etiam at egestas dui. Vestibulum eu justo augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam volutpat nunc in ullamcorper bibendum. Integer id dolor turpis. Morbi at leo augue. Nunc eu gravida neque. Vivamus urna dui, egestas sed tincidunt sed, iaculis in leo. ',
            'category_id'=> Category::all()->random()->id
        ]);
        Product::create([
            'name' => 'Mangue / Pasteque',
            'slug' => 'mangue-pasteque',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mollis ultricies quam, ac cursus massa fringilla sit amet. Etiam at egestas dui. ',
            'price' => 10,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mollis ultricies quam, ac cursus massa fringilla sit amet. Etiam at egestas dui. Vestibulum eu justo augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam volutpat nunc in ullamcorper bibendum. Integer id dolor turpis. Morbi at leo augue. Nunc eu gravida neque. Vivamus urna dui, egestas sed tincidunt sed, iaculis in leo. ',
            'category_id'=> Category::all()->random()->id
        ]);
        Product::create([
            'name' => 'Mangue / Vanille',
            'slug' => 'mangue-vanille',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mollis ultricies quam, ac cursus massa fringilla sit amet. Etiam at egestas dui. ',
            'price' => 5,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mollis ultricies quam, ac cursus massa fringilla sit amet. Etiam at egestas dui. Vestibulum eu justo augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam volutpat nunc in ullamcorper bibendum. Integer id dolor turpis. Morbi at leo augue. Nunc eu gravida neque. Vivamus urna dui, egestas sed tincidunt sed, iaculis in leo. '
        ]);
        Product::create([
            'name' => 'Mangue / Orange',
            'slug' => 'mangue-orange',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mollis ultricies quam, ac cursus massa fringilla sit amet. Etiam at egestas dui. ',
            'price' => 10,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mollis ultricies quam, ac cursus massa fringilla sit amet. Etiam at egestas dui. Vestibulum eu justo augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam volutpat nunc in ullamcorper bibendum. Integer id dolor turpis. Morbi at leo augue. Nunc eu gravida neque. Vivamus urna dui, egestas sed tincidunt sed, iaculis in leo. ',
            'category_id'=> Category::all()->random()->id
        ]);
        Product::create([
            'name' => 'Mangue / Chocolat',
            'slug' => 'mangue-chocolat',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mollis ultricies quam, ac cursus massa fringilla sit amet. Etiam at egestas dui. ',
            'price' => 11,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mollis ultricies quam, ac cursus massa fringilla sit amet. Etiam at egestas dui. Vestibulum eu justo augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam volutpat nunc in ullamcorper bibendum. Integer id dolor turpis. Morbi at leo augue. Nunc eu gravida neque. Vivamus urna dui, egestas sed tincidunt sed, iaculis in leo. ',
            'category_id'=> Category::all()->random()->id
        ]);
    }
}
