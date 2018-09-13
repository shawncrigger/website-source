<?php



namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PortfolioController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    // ------------------------------------------------------------------------

    public function show($slug='')
    {
    	$site = DB::table('portfolio')->where('slug', $slug)->first();
    	return response()->json( $site );
    }

    // ------------------------------------------------------------------------

    public function fetchAll()
    {
    	$sites = DB::table('portfolio')->get();
    	//$sites = json_encode( $sites, JSON_PRETTY_PRINT );
    	return response()->json( $sites );
    }

    // ------------------------------------------------------------------------





}
