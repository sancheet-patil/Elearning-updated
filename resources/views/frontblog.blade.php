@extends('layouts.front.main')
@section('header')
@include('layouts.front.header');<br><br><br><br><br>
@stop

@section('content')


            <div class="page_top_wrap page_top_title page_top_breadcrumbs">
                <div class="content_wrap">
                    <div class="breadcrumbs">
                        <a class="breadcrumbs_item home" href="{{route('front')}}">Home</a>
                        <span class="breadcrumbs_delimiter"></span>
                        <a class="breadcrumbs_item all" href="{{route('blog')}}">All posts</a>
                        <span class="breadcrumbs_delimiter"></span>
                        <span class="breadcrumbs_item current">Blogs</span> 
                    </div>
                    <h1 class="page_title">Our  Blogs</h1>
                </div>
            </div>
            <!-- /Page title -->
            <!-- Content -->
            <div class="page_content_wrap">
                <div class="content_wrap">
                    <br>
                    <div class="content">
                        <div class="isotope_wrap" data-columns="2">
                             @foreach($blog as $blog)
                       
                            <div class="isotope_item isotope_item_masonry isotope_item_masonry_2 isotope_column_2 flt_34">
                                <article class="post_item post_item_masonry post_item_masonry_2 odd">
                                    <div class="post_featured">
                                        <div class="post_thumb" data-image="{{asset('blogfiles\upload/'.$blog->image)}}" data-title="Medical Chemistry: The Molecular Basis" style="height: 300px">
                                            <a class="hover_icon hover_icon_link" href="post-with-sidebar.html">
                                                <img alt="" src="{{asset('blogfiles\upload/'.$blog->image)}}" height="400px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post_content isotope_item_content">
                                        <h4 class="post_title">
                                            <a href="{{route('singleblog',$blog->id)}}">{{$blog->title}}</a>
                                        </h4>
                                        <div class="post_info">
                                            <span class="post_info_item post_info_posted">Posted 
                                                
                                             <?php 
                                                   $date = new DateTime($blog->created_at);

                  
                                             ?>
                                                <a href="#" class="post_info_date">{{$date->format('F d Y')}}</a>
                                            
                                            </span>
                                             <span class="post_info_item post_info_posted_by">by 
                                                @if($blog->teacher_id==0)
                                                <?php $admin=App\Admin::where('id',1)->get();?>
                                                @foreach($admin as $admin)
                                                <a href="#" class="post_info_author">{{$admin->name}}</a>
                                                @endforeach
                                                @else
                                                <?php $teacher=App\Teacher::where('id',$blog->teacher_id)->get();?>
                                                @foreach($teacher as $teacher)

                                                <a href="#" class="post_info_author">{{$teacher->name}}</a>
                                                @endforeach
                                                
                                                @endif

                                            </span>
                                        </div>
                                        <div class="post_descr">
                                            <a href="{{route('singleblog',$blog->id)}}" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">READ MORE</a> 
                                        </div>
                                    </div>
                                </article>
                            </div>
                            @endforeach
                        </div>
                        
                        
                    </div>
                </div>
            </div>

@endsection