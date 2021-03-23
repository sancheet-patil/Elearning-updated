<?php

namespace App\Http\Controllers\API;

use App\course;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserCourcesController extends Controller
{
    public function get_all_cources()
    {
        $courses['data']=course::with('goals')
            ->with('user_buy_course')
            ->get();


        return response()->json([
            'status' => 'success',
            'message' => 'get all cources',
            'cources' => $courses
        ]);
    }


    public function course_details($id)
    {
        $course = course::where('goal_id',$id)
            ->get();



        if (count($course) > 0){
            return response()->json([
                'status' => 'success',
                'message' => 'cources details',
                'cources' => $course
            ]);
        }else{
            return response()->json([
                'status' => 'error',
                'message' => 'no course found',
                'cources' => $course
            ]);
        }


    }


}
