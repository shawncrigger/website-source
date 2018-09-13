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
    	$users = DB::table('portfolio')->get();
    	dd($users);
    }

    // ------------------------------------------------------------------------





}
