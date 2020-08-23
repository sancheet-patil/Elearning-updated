<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\blog;


class blogcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog=blog::all();

        return view('frontblog',compact('blog'));
       
    }

    public function singleblog($id)
    {
        $blog=blog::all()->where('id','=',$id);
        return view('singleblog',compact('blog'));
        //
    }
    public function goal($id)
    {
        $blog=blog::all()->where('goal','=',$id);
        return view('frontblog',compact('blog'));
        //
    }
    
   
    
}
