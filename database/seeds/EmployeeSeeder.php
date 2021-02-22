<?php

use Illuminate\Database\Seeder;
use App\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $librarians_list = config('librarians');

        foreach ($librarians_list as $librarian) {
            $newLibrarian = new Employee();
            $newLibrarian->name = $librarian['name'];
            $newLibrarian->lastname = $librarian['lastname'];
            $newLibrarian->email = $librarian['email'];
            $newLibrarian->telephone = $librarian['telephone'];
            $newLibrarian->address = $librarian['address'];
            $newLibrarian->save();
        }
    }
}
