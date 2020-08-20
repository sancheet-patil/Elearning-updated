<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\blog;

class add_blogcontroller extends Controller
{
    
    public function index()
    {  
        $blog=blog::all();

        return view('teacher/blog/addblog',compact('blog'));
        //
    }

   
    public function create()
    {
        return view('teacher/blog/createblog');
        //
    }

        public function store(Request $request){
         $this->validate($request,[
            'goal'=>'required',
            'title'=>'required',
            'content'=>'required',
            'image'=>'required',
            'date'=>'required'


        ]);
        $blog=new blog;
        $blog->goal=$request->goal;
        $blog->title=$request->title;
        $blog->content=$request->content;
        
        if($request->hasfile('image'))
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().".".$extension;
            $file->move('blogfiles\upload',$filename);
            $blog->image=$filename;
            $blog->date=$request->date;
        }
        else
        {
            return $request;
            $blog->image='';
        }
        $blog->save();
        return redirect('blog/addblog');
        //$blog->save();
         //

    }
    public function edit($id)
    {

      $blog=blog::find($id);
      return view('teacher/blog/updateblog',compact('blog'));  
        //
    }

    public function update(Request $request, $id)
    {
          $this->validate($request,[
            'goal'=>'required',
            'title'=>'required',
            'content'=>'required',
            'image'=>'required',
            'date'=>'required'


        ]);

        $blog=blog::find($id);
        $blog->goal=$request->goal;
        $blog->title=$request->title;
        $blog->content=$request->content;
        
        if($request->hasfile('image'))
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().".".$extension;
            $file->move('blogfiles\upload',$filename);
            $blog->image=$filename;
            $blog->date=$request->date;
        }
        else
        {
            return $request;
            $blog->image='';
        }
        $blog->save();
        return redirect('blog/addblog');
       
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        blog::find($id)->delete();
        return redirect('blog/addblog');
        //
    }
}
