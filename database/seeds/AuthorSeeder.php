<?php

use Illuminate\Database\Seeder;
use App\Author;
//use Faker\Generator as Faker;
class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $authors_list = [
            [
                'name' => 'Paolo',
                'lastname' => 'Giangian',
                'nickname' => 'PaoloG',
                'email' => 'paolo.gian@gmail.it',
                'bio' => 'Appassionato di tecnologia, dalla penna veloce'
            ],
            [
                'name' => 'Giulia',
                'lastname' => 'Genge',
                'nickname' => 'GengyGy',
                'email' => 'genny.giu@gmail.it',
                'bio' => 'Folle, frizzante con la passione per unicorni e tecnologia '
            ],
            [
                'name' => 'Franca',
                'lastname' => 'Forgia',
                'nickname' => 'Francy85',
                'email' => 'francy.85@gmail.it',
                'bio' => 'Appassionato di tecnologia, mangiatrice di gelati'
            ]
        ];

        foreach ($authors_list as $author) {
            $newAuthor = new Author();
            $newAuthor->name = $author['name'];
            $newAuthor->lastname = $author['lastname'];
            $newAuthor->nickname = $author['nickname'];
            $newAuthor->email = $author['email'];//non facciamo nessuna validazione perchè i dati li stiamo passando noi
            $newAuthor->bio = $author['bio'];
            $newAuthor->save();
        }
    }
}
