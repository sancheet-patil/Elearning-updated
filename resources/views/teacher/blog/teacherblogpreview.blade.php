@extends('blogpages.main')
@section('content')
 <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Blog Single</h2>
                            <p>Home<span>-</span>Blog Single</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->
   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section_padding">
      <div class="container">
         <div class="row">
            @foreach($blog as $blog)
            
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                     <img src="{{asset('blogfiles\upload/'.$blog->image)}}" height="400px" width="700px">
                  </div>
                  <div class="blog_details">
                     <h2>{{$blog->title}}</h2>
                    
                     <p class="excert">
                        {{$blog->content}}
                     </p>
                  </div>
               </div>
               @endforeach
               
            </div>
            
         
            @include('blogpages.side')
         </div>
      </div>
   </section>
   
@endsection
