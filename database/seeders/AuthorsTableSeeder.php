<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a1 = new Author;

        $a1->firstName = "John Ronald";
        $a1->lastName = "Tolkien";
        $a1->save();

        $a2 = new Author;
        $a2->firstName = "Max";
        $a2->lastName = "Mayer";
        $a2->save();

        $a3 = new Author;
        $a3->firstName = "Maxl";
        $a3->lastName = "Muster";
        $a3->save();
    }
}
