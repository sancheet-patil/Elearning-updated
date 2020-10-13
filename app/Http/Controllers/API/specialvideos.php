<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\specialvideos as spv;

class specialvideos extends Controller
{
    public function data()
    {
        $specialVideo['data']=spv::all();
        return response()->json($specialVideo);
    }
}
