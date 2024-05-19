<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    //

    public function cities()
    {
        $cities = DB::table('cities')->orderBy('city', 'asc')->get();
        return response()->json($cities);
    }
}
