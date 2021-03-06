<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date1= Carbon::createFromDate(2015, 12, 03)->toDateTimeString();
        $date2= Carbon::createFromDate(2010, 01, 03)->toDateTimeString();
        $date3= Carbon::createFromDate(2016, 04, 03)->toDateTimeString();
        $date4= Carbon::createFromDate(2018, 12, 03)->toDateTimeString();

    	DB::table('portfolio')->insert([
    	    'title' => 'Explore North Myrtle Beach',
    	    'url'   => 'https://www.explorenorthmyrtlebeach.com/',
    	    'slug'  => 'explore-north-myrtle-beach',
    	    'thumbnail'    => 'explore-thumb.jpg',
    	    'description'  => 'Server Build and Maintaince, Migrate from old server to new server, Front end, Back end and API development',
            'year_created' => $date1,
    	]);
        DB::table('portfolio')->insert([
    	    'title' => 'Tiger Census',
    	    'url'   => 'http://tigercensus.com/',
    	    'slug'  => 'tiger-census',
    	    'thumbnail'    => 'tigercenus-thumb.jpg',
    	    'description'  => 'Front-end and Back-end development',
            'year_created' => $date2,
        ]);
        DB::table('portfolio')->insert([
    	    'title' => 'Alabama Theatre',
    	    'url'   => 'https://www.alabama-theatre.com/',
    	    'slug'  => 'alabama-theatre',
    	    'thumbnail'    => 'alabama-theatre-calendar-thumb.jpg',
    	    'description'  => 'Front-end and Back-end development',
            'year_created' => $date3,
        ]);
        DB::table('portfolio')->insert([
    	    'title' => 'Code Examples',
    	    'url'   => 'https://gist.github.com/shawncrigger/',
    	    'slug'  => 'code-examples',
    	    'thumbnail'    => 'code-examples.jpg',
    	    'description'  => 'Code Examples',
            'year_created' => $date4,
    	]);
        // $this->call('UsersTableSeeder');
    }
}

