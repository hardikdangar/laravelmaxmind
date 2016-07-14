<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            'slug' => 'home',
            'title' => 'Home',
            'description' => 'TIYB is organization located in canada.',
            'content' =>'<h1>Hello User</h1><p>This is home page</p>'
        ]);
        DB::table('pages')->insert([
            'slug' => 'aboutus',
            'title' => 'About Us',
            'description' => 'about TIYB - organization that helps people.',
            'content' =>'<h1>About Us</h1><p>This is About us page</p>'
        ]);
    }
}
