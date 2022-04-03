<?php

use Illuminate\Database\Seeder;
use App\Comics;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');

        foreach($comics as $comic) {

            $comicBook = new Comics();
            $comicBook->title = $comic['title'];
            $comicBook->description = $comic['description'];
            $comicBook->thumb = $comic['thumb'];
            $comicBook->price = $comic['price'];
            $comicBook->series = $comic['series'];
            $comicBook->sale_date = $comic['sale_date'];
            $comicBook->type = $comic['type'];
            $comicBook->save();

        }
    }
}
