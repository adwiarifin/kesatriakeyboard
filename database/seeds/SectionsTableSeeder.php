<?php

use Illuminate\Database\Seeder;
use App\Section;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Section::create(['key' => 'title']);
        Section::create(['key' => 'subtitle']);
        Section::create(['key' => 'who_we_are']);
    }
}
