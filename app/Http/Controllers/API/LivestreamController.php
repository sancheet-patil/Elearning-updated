<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\livestream;
class LivestreamController extends Controller
{
    public function view ()
    {
        $livestream['data']=livestream::with('goals','course','subcourse','teacher')->get();
        return response()->json($livestream);
    }
}
