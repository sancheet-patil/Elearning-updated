<div class="col-lg-4">
               <div class="blog_right_sidebar">
                  
                  <aside class="single_sidebar_widget post_category_widget">
                     <h4 class="widget_title">Goal</h4>
                     <ul class="list cat-list">
                        <?php $goal=\App\goals::all();?>
                        @foreach($goal as $goal)
                        <li>
                           
                           <a href="{{route('goal',$goal->id)}}" class="d-flex">
                              <p>{{$goal->goal_name}}</p>
                              
                           </a>
                        </li>
                        @endforeach
                       
                     </ul>
                  </aside>
                  <aside class="single_sidebar_widget popular_post_widget">

                     <h3 class="widget_title">Recent Post</h3>
                     <?php   $blog=\App\blog::Orderby('id', 'desc')->limit(3)->get();?>
                     @foreach($blog as $blog)
                     <div class="media post_item">
                       <img src="{{asset('blogfiles\upload/'.$blog->image)}}" height="70px" width="70px">
                        <div class="media-body">
                           <a href="{{route('singleblog',$blog->id)}}">
                              <h3>{{$blog->title}}</h3>
                           </a>
                           <p>{{$blog->created_at}}</p>
                        </div>
                     </div>
                     @endforeach
                  </aside>
                 
               </div>
            </div>