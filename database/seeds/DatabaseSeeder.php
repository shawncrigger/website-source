<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('portfolio')->insert([
    	    'title' => 'Explore North Myrtle Beach',
    	    'url'   => 'https://www.explorenorthmyrtlebeach.com/',
    	    'slug'  => 'explore-north-myrtle-beach',
    	    'thumbnail'    => 'explore-thumb.jpg',
    	    'description'  => 'Server Build and Maintaince, Migrate from old server to new server, Front end, Back end and API development',
    	    'year_created' => "12-2015",
    	])->insert([
    	    'title' => 'Tiger Census',
    	    'url'   => 'http://tigercensus.com/',
    	    'slug'  => 'tiger-census',
    	    'thumbnail'    => 'tigercenus-thumb.jpg',
    	    'description'  => 'Front-end and Back-end development',
    	    'year_created' => "12-2011",
    	])->insert([
    	    'title' => 'Alabama Theatre',
    	    'url'   => 'https://www.alabama-theatre.com/',
    	    'slug'  => 'alabama-theatre',
    	    'thumbnail'    => 'alabama-theatre-calendar-thumb.jpg',
    	    'description'  => 'Front-end and Back-end development',
    	    'year_created' => "04-2016",
    	])->insert([
    	    'title' => 'Code Examples',
    	    'url'   => 'https://gist.github.com/shawncrigger/',
    	    'slug'  => 'code-examples',
    	    'thumbnail'    => 'code-examples.jpg',
    	    'description'  => 'Code Examples',
    	    'year_created' => "04-2018",
    	]);
        // $this->call('UsersTableSeeder');
    }
}

