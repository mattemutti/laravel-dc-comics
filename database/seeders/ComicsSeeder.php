<?php

namespace Database\Seeders;

use App\Models\Comics;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = config('comics.comics');

        foreach ($products as $product) {
            $comic = new Comics();
            $comic->title = $product['title'];
            $comic->tumb = $product['tumb'];
            $comic->description = $product['description'];
            $comic->price = $product['price'];
            $comic->series = $product['series'];
            $comic->sale_date = $product['sale_date'];
            $comic->type = $product['type'];
            $comic->save();

        }

    }
}
