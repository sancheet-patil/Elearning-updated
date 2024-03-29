<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\blog;

class admin_blogController extends Controller
{
	public function index()
	{
    
		$blog=blog::all();

        return view('admin.blog.blog',compact('blog'));
       
	}
	public function create()
	{
		return view('admin.blog.newblog');
	}
public function store(Request $request){
         $this->validate($request,[
            'goal'=>'required',
            'course'=>'required',
            'subcourse'=>'required',
            'title'=>'required',
            'content'=>'required',
            'image'=>'required'
            


        ]);
        $blog=new blog;
        $blog->teacher_id=$request->teacher_id;
        $blog->goal=$request->goal;
        $blog->course=$request->course;
        $blog->subcourse=$request->subcourse;
        $blog->title=$request->title;
        $blog->content=$request->content;
        
        if($request->hasfile('image'))
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().".".$extension;
            $file->move('blogfiles\upload',$filename);
            $blog->image=$filename;
            
        }
        else
        {
            return $request;
            $blog->image='';
        }
        $blog->save();
         return redirect('admin/Adminblog')->with('successMsg','Your Blog Post Sucessfully');
       
        //return redirect('');
        //$blog->save();
         //

    }
    public function edit($id)
    {

      $blog=blog::find($id);
      return view('admin/blog/update',compact('blog'));  
        //
    }

     public function update(Request $request, $id)
    {
          $this->validate($request,[
            
            'title'=>'required',
            'content'=>'required',
            'image'=>'required'


        ]);

        $blog=blog::find($id);
        $blog->title=$request->title;
        $blog->content=$request->content;
        
        if($request->hasfile('image'))
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().".".$extension;
            $file->move('blogfiles\upload',$filename);
            $blog->image=$filename;
            
        }
        else
        {
            return $request;
            $blog->image='';
        }
        $blog->save();
        return redirect('admin/Adminblog');
       
        //
    }
    public function delete($id)
    {
        blog::find($id)->delete();
        return redirect('admin/Adminblog');
        //
    }
    public function singleblog($id)
    {
        $blog=blog::all()->where('id','=',$id);
        return view('singleblog',compact('blog'));
        //
    }
    
    
    
	public function getCourse($goal_id)
    {
        $course['data'] = \DB::table('courses')->where('goal_id',$goal_id)->get();
        echo json_encode($course);
        exit;
    }
     public function getSubcourse($course_id)
    {
        $subcourse['data'] = \DB::table('subcourses')->where('course_id',$course_id)->get();
        echo json_encode($subcourse);
        exit;
    }
    //
}
