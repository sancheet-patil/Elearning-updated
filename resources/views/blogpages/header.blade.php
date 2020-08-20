 <header class="main_menu single_page_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand logo_1" href="index.html"> <img src="{{asset('blogfiles\img\logo.png')}}" alt="logo"> </a>
                        <a class="navbar-brand logo_2" href="index.html"> <img src="{{asset('blogfiles\img\logo.png')}}" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{route('front')}}" style="font-size: 13px; 
    font-family:sans-serif; line-height: 1;">HOME</a>
                                </li>
                                <li class="nav-item" style="">
                                    <a class="nav-link" href="about.html" style="font-size: 13px; 
    font-family:sans-serif; line-height:1">ABOUT</a>
                                </li>
                               <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 13px; 
    font-family:sans-serif; line-height: 1">
                                    COURSES
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="single-blog.html"style="font-size: 13px; 
    font-family:sans-serif; line-height: 1" >COURSES</a>
                                        <a class="dropdown-item" href="elements.html" style="font-size: 13px; 
    font-family:sans-serif; line-height: 1">COURSE DETAILS</a>
                                    </div>
                                </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="{{route('blog')}}" style="font-size: 13px; 
    font-family:sans-serif; line-height: 1">BLOG</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html" style="font-size: 13px; 
    font-family:sans-serif; line-height: 1">CONTACT</a>
                                </li>
                                  <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 13px; 
    font-family:sans-serif; line-height: 1">
                                    ACCOUNT
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{route('teacher.login')}}"style="font-size: 13px; 
    font-family:sans-serif; line-height: 1" >TEACHER LOGIN</a>
                                       
                                    </div>
                                </li>
                             
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
   