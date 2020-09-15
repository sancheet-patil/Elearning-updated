@extends('blogpages.main')
@section('content')
<section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Our Staff</h2>
                            <p>Home<span>/</span>Teachers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<section class="course_details_area section_padding">
        <div class="container">
            @foreach($teacherdetail as $teacherdetail)
            <div class="row">
                <div class="col-lg-8 course_details_left">
                    <div class="main_image">
                        <img class="img-fluid" src="{{asset('blogfiles\img\special_cource_1.png')}}" alt="" style="width: 1000px; height:400px ">
                    </div>
                    <div class="content_wrapper">
                        <h4 class="title_top">Eligibility</h4>
                        <div class="content">
                            <div class="review-top row pt-40">
                                <div class="col-lg-11">
                                    <div class="d-flex flex-row reviews justify-content-between">
                                        <span>Certification</span>
                                        <span>{{$teacherdetail->certification}}</span>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content_wrapper">
                        <h4 class="title">Courses</h4>
                        <div class="content">
                            <ul class="course_list">
                                <?php $sub=App\teacher_sub_courses::where('subCourse_id',$teacherdetail->id)->where('status',2)->get();
                                    ?>
                                     @foreach($sub as $sub)
                                
                                <li class="justify-content-between align-items-center d-flex">
                                    <?php $teacher=App\subcourses::find($sub->subCourse_id);?>
                                        
                                    <p>{{$teacher->subCourses_name}}</p>
                                    <a class="btn_2 text-uppercase" href="#">View Details</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>               
                    </div>
                </div>


                <div class="col-lg-4 right-contents">
                    <div class="sidebar_top">
                        <ul>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Subscriber</p>
                                    <span class="color">50</span>
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Ratings</p>
                                    <span>5.5</span>
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Reviews</p>
                                    <span>15</span>
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <?php $sub=App\teacher_sub_courses::where('subCourse_id',$teacherdetail->id)->where('status',2)->get()->count();
                                    ?>
                            
                                    <p>Courses</p>
                                    <span>{{$sub}}</span>
                                </a>
                            </li>

                        </ul>
                        
                    </div>

                    <h4 class="title">Reviews</h4>
                    <div class="content">
                        <div class="review-top row pt-40">
                            <div class="col-lg-12">
                                <h6 class="mb-15">Provide Your Rating</h6>
                                <div class="d-flex flex-row reviews justify-content-between">
                                    <span>Quality</span>
                                    <div class="rating">
                                            <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                            <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                            <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                            <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                            <a href="#"><img src="img/icon/star.svg" alt=""></a>
                                        </div>
                                    <span>Outstanding</span>
                                </div>
                                <div class="d-flex flex-row reviews justify-content-between">
                                    <span>Puncuality</span>
                                    <div class="rating">
                                            <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                            <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                            <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                            <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                            <a href="#"><img src="img/icon/star.svg" alt=""></a>
                                        </div>
                                    <span>Outstanding</span>
                                </div>
                                <div class="d-flex flex-row reviews justify-content-between">
                                    <span>Quality</span>
                                    <div class="rating">
                                            <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                            <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                            <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                            <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                            <a href="#"><img src="img/icon/star.svg" alt=""></a>
                                        </div>
                                    <span>Outstanding</span>
                                </div>

                            </div>
                        </div>
                        <div class="feedeback">
                            <h6>Your Feedback</h6>
                            <textarea name="feedback" class="form-control" cols="10" rows="10"></textarea>
                            <div class="mt-10 text-right">
                                <a href="#" class="btn_1">Read more</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            @endforeach
        </div>
</section>
 @endsection   