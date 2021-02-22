<?php

use Illuminate\Database\Seeder;
use App\Book;

use Faker\Generator as Faker;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for ($i=0; $i < 30; $i++) { 
            $newBook = new Book();
    
            $newBook->title = $faker->sentence(rand(1,5));//
            $newBook->isbn = $faker->isbn13();
            $newBook->author = $faker->name($gender = 'male'|'female');
            $newBook->pages = $faker->numberBetween(250,540);
            $newBook->imageFile = $faker->image(null, 360, 360, 'animals', true);
            $newBook->price = $faker->randomFloat(2, 20, 30);
            $newBook->created_at = $faker->dateTime();
            $newBook->updated_at = $faker->dateTime();
            $newBook->save();
        }
    }
}
