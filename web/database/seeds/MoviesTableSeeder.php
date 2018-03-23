<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = array([
            'title' => 'Okja',
            'description' => 'A young girl risks everything to prevent a powerful, multinational company from kidnapping her best friend - a fascinating beast named Okj',
            'year' => 2017,
            'score' => 7.4
        ],[
            'title' => 'Call Me by Your Name',
            'description' => 'In 1980s Italy, a romance blossoms between a seventeen year-old student and the older man hired as his father\'s research assistant.',
            'year' => 2017,
            'score' => 8.1
        ],[
            'title' => 'The Shape of Water',
            'description' => 'At a top secret research facility in the 1960s, a lonely janitor forms a unique relationship with an amphibious creature that is being held in captivity.',
            'year' => 2017,
            'score' => 7.5
        ]);
        DB::table('movies')->insert($movies);
    }
}
