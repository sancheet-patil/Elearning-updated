@extends('layouts.front.main')
@section('header')
@include('layouts.front.header');<br><br><br><br><br>
@stop

@section('content')

<br><br><br><br><br>
<div class="page_top_wrap page_top_title page_top_breadcrumbs">
  <div class="content_wrap">
      <div class="breadcrumbs">
        <a class="breadcrumbs_item home" href="{{route('front')}}">Home</a>
        <span class="breadcrumbs_delimiter"></span>
        <a class="breadcrumbs_item all" href="{{route('blog')}}">All posts</a>
        <span class="breadcrumbs_delimiter"></span>
        <span class="breadcrumbs_item current">Blog Details</span> 
      </div>
      @foreach($blog as $blog)
      <h1 class="page_title">{{$blog->title}}</h1>
    </div>
 </div>
 <br>
      <!-- /Page title -->
       
      <!-- Content -->
<div class="page_content_wrap">
  <div class="content_wrap">

    <div class="content">
     
  
      <article class="post_item post_item_single post">
        <section class="post_featured">
          <div class="post_thumb" data-image="{{asset('blogfiles\upload/'.$blog->image)}}" data-title="{{$blog->title}}">
            <a class="hover_icon hover_icon_view" href="{{asset('blogfiles\upload/'.$blog->image)}}" title="{{$blog->title}}">
              <img alt="" src="{{asset('blogfiles\upload/'.$blog->image)}}">
            </a>
          </div>
        </section>
        <div class="post_info">
          <span class="post_info_item post_info_posted">Posted:
             <?php 
              $date = new DateTime($blog->created_at);
              ?>
                                            
            <a href="javascript:void(0);" class="post_info_date date updated" content="2015-01-14">{{$date->format('F d Y')}}</a>
          </span>
          <span class="post_info_item post_info_posted_by vcard">by:
            @if($blog->teacher_id==0)
              <?php $admin=App\Admin::where('id',1)->get();?>
                @foreach($admin as $admin)
                  <a href="javascript:void(0);" class="post_info_author">{{$admin->name}}</a>
                @endforeach
            @else
              <?php $teacher=App\Teacher::where('id',$blog->teacher_id)->get();?>
                @foreach($teacher as $teacher)
                  <a href="javascript:void(0);" class="post_info_author">{{$teacher->name}}</a>
                @endforeach
            @endif
          </span>
          <span class="post_info_item post_info_tags">in 
            <?php $goal=App\goals::find($blog->goal); ?>
            <a class="category_link" href="javascript:void(0);">{{$goal->goal_name}}</a>, 
            <?php $course=App\course::find($blog->course); ?>
            <a class="category_link" href="javascript:void(0);">{{$course->course_name}}</a>
            
           </span>
          <span class="post_info_item post_info_counters">  
             <span class="post_counters_item post_counters_views icon-eye" title="Views - 125">125</span>
              <a class="post_counters_item post_counters_comments icon-comment-1" title="Comments - 0" href="javascript:void(0);">
                <span class="post_counters_number">0</span>
              </a>
              <a class="post_counters_item post_counters_likes icon-heart enabled" title="Like" href="javascript:void(0);">
                <span class="javascript:void(0);">0</span>
              </a>
           </span>
        </div>
        <section class="post_content">
            <p>{{$blog->content}}</p>
            
        </section>
        
      </article>
      
      
      </div>
  </div>
    
        <!-- Related posts section -->
                <section class="related_wrap scroll_wrap">
                    <div class="content_wrap">
                        <h2 class="section_title">Related Posts</h2>
                             
                        <div class="sc_scroll_container sc_scroll_controls sc_scroll_controls_horizontal sc_scroll_controls_type_top">
                          <div class="sc_scroll sc_scroll_horizontal swiper-slider-container scroll-container" id="related_scroll">
                           
                            <div class="sc_scroll_wrapper swiper-wrapper">
                               <?php $goal= App\blog::where('goal',$blog->goal)->get();?>
                                @foreach($goal as $goal)
                                  <div class="sc_scroll_slide swiper-slide">
                                <article class="post_item post_item_related post_item_1">
                                  <div class="post_content">
                                    <div class="post_featured">
                                      <div class="post_thumb" data-image="{{asset('blogfiles\upload/'.$goal->image)}}" data-title="Medical Chemistry: The Molecular Basis">
                                        <a class="hover_icon hover_icon_link" href="post-with-sidebar.html" style="height: 230px">
                                          <img alt="" src="{{asset('blogfiles\upload/'.$goal->image)}}" height="300px"></a>
                                        </div>
                                    </div>
                                    <div class="post_content_wrap">
                                    <h4 class="post_title">
                                    <a href="{{route('singleblog',$goal->id)}}">{{$goal->title}}</a><br>
                                   <a href="{{route('singleblog',$goal->id)}}">
                                     <?php $goal1=App\goals::find($blog->goal); ?>
                                    {{$goal1->goal_name}}</a>
                                    </h4>

                                  </div>
                                </div>
                               

                              </article>

                                
                              </div>
                              @endforeach
                            </div>
                             
                            <div id="related_scroll_bar" class="sc_scroll_bar sc_scroll_bar_horizontal related_scroll_bar"></div>
                          </div>
                          <div class="sc_scroll_controls_wrap">
                                <a class="sc_scroll_prev" href="#"></a>
                                <a class="sc_scroll_next" href="#"></a>
                          </div>
                        </div>
                        
                    </div>
                </section>
         <!-- /Comments form -->
            </div>

@endforeach
@endsection