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
    	$site   = DB::table('portfolio')->where('slug', $slug)->first();
    	$pid    = $site->id;
    	$thumbs = DB::table('portfolio_images')->where('pid', $pid)
    	                                       ->where('thumb', 0)
    	                                       ->pluck('image');
    	$full   = DB::table('portfolio_images')->where('pid', $pid)
    	                                       ->where('thumb', 1)
    	                                       ->pluck('image');
    	$site->images = array(
    		'thumbs' => $thumbs,
    		'full'   => $full,
    	);
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
