<html lang="en">

<head>
<meta charset="utf-8">
<!-- Stylesheets -->
<link href="/frontend/css/bootstrap.css" rel="stylesheet">
<link href="/frontend/plugins/revolution/css/settings.css" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="/frontend/plugins/revolution/css/layers.css" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="/frontend/plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
<link href="/frontend/css/style.css" rel="stylesheet">
<link href="/frontend/css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="/frontend/images/logo.png" type="image/x-icon">
<link rel="icon" href="/frontend/images/logo.png" type="image/x-icon">
<!-- Responsive -->
<!-- Stylesheets -->

<link rel="shortcut icon" href="/frontend/images/favicon.png" type="image/x-icon">
<link rel="icon" href="/frontend/images/favicon.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="/frontend/js/respond.js"></script><![endif]-->
</head>
<div class="page-wrapper">
 <!-- Preloader -->
    <div class="preloader"></div>
   <!-- Main Header-->
    <header class="main-header">
        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="top-left">
                        <ul class="contact-list clearfix">
                            @foreach($tb_s_sekolah as $data) 
                            <li><a href="kindergarden.com">info@kindergarden.com</a></li>
                            <li>{{ $data->no_telepon }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="top-right clearfix">
                        <ul class="clearfix">
                            <li>Language : </li>
                            <li class="language dropdownn"><a class="btn btn-default dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#">Eng <span class="icon fa fa-caret-down"></span></a>
                                <ul class="dropdown-menu style-one" aria-labelledby="dropdownMenu1">
                                    <li><a href="#">Arabic</a></li>
                                    <li><a href="#">Chinese</a></li>
                                    <li><a href="#">German</a></li>
                                    <li><a href="#">French</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Top -->

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
                <div class="clearfix">
                    
                              @foreach($tb_s_sekolah as $data)
                    <div class="logo-outer">
                        <div class="logo"><a href="/">
                          <img src="{{ asset('img/FotoSekolah/'.$data->logo) }}" style="min-width:120px; min-height:80px;   max-height:80px; max-width: 120px; margin-top:7px;"></a></div>
                    </div>
                    
                    <div class="upper-right clearfix">
                        
                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="flaticon-map"></span></div>
                            <ul>
                                <li><strong>Alamat</strong>: Bandung ID</li>
                                <li>{{ $data->alamat }}</li>
                            </ul>
                        </div>
                        
                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="flaticon-clock-5"></span></div>
                            <ul>
                                <li><strong>Waktu Buka</strong>:{{ $data->waktu_buka }}</li>
                                <li>{{ $data->hari_buka }} - Buka</li>
                            </ul>
                        </div>

                    </div>
                              @endforeach
                </div>
            </div>
        </div>

        <!--Header-lower-->
        <div class="header-lower">
            <div class="auto-container">

                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md navbar-dark">
                        <div class="navbar-header">
                            <!-- Toggle Button -->      
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="flaticon-menu"></span>
                            </button>
                        </div>
                        
                        <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="current dropdown"><a href="#">Home</a>
                                    <ul>
                                        <li><a href="/">Home Page 01</a></li>
                                        <li><a href="index-3.html">Home Page 02</a></li>
                                        <li class="dropdown"><a href="#">Header Styles</a>
                                            <ul>
                                                <li><a href="/">Header Style One</a></li>
                                                <li><a href="index-3.html">Header Style Two</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About Us</a></li>
                                <li class="dropdown"><a href="#">Pages</a>
                                    <ul>
                                        <li><a href="services.html">Services</a></li>
                                        <li><a href="courses.html">Courses</a></li>
                                        <li><a href="course-single.html">Course Single</a></li>
                                        <li><a href="event.html">Event</a></li>
                                        <li><a href="event-single.html">Event Single</a></li>
                                    </ul>
                                </li> 
                                <li class="dropdown"><a href="#">Gallery</a>
                                    <ul>
                                        <li><a href="gallery-masonry.html">Gallery Masonry</a></li>
                                        <li><a href="gallery-with-filters.html">Gallery With Filters</a></li>
                                        <li><a href="gallery-full-width.html">Gallery Full Width</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Blogs</a>
                                    <ul>
                                        <li><a href="blog.html">Blog Standard</a></li>
                                        <li><a href="blog-grid.html">Blog Grid</a></li>
                                        <li><a href="blog-full-width.html">Blog Full Width</a></li>
                                        <li><a href="blog-single-1.html">Blog Single 01</a></li>
                                        <li><a href="blog-single-2.html">Blog Single 02</a></li>
                                        <li><a href="error-page.html">404 Page</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ Route('contact') }}">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->

                    <!-- Outer Box -->
                    <div class="outer-box">
                        <ul class="social-icon-one">
                        	@foreach($tb_s_sekolah as $data)
                            <li><a href="{{ $data->Facebook }}"><i class="fa fa-facebook-official"></i></a></li>
                            <li><a href="{{ $data->Instagram }}"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="{{ $data->Twitter }}"><i class="fa fa-twitter-square"></i></a></li>
                            @endforeach
                            <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!-- Sticky Header -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                		@foreach($tb_s_sekolah as $data)
                    <a href="/" title=""><img src="{{ asset('img/FotoSekolah/'.$data->logo) }}" style="max-height:60px; max-width: 60px; margin-top:7px;"></a>
                    	@endforeach
                  
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-collapse show collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="current dropdown"><a href="#">Home</a>
                                    <ul>
                                        <li><a href="/">Home Page 01</a></li>
                                        <li><a href="index-3.html">Home Page 02</a></li>
                                        <li class="dropdown"><a href="#">Header Styles</a>
                                            <ul>
                                                <li><a href="/">Header Style One</a></li>
                                                <li><a href="index-3.html">Header Style Two</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About Us</a></li>
                                <li class="dropdown"><a href="#">Pages</a>
                                    <ul>
                                        <li><a href="services.html">Services</a></li>
                                        <li><a href="courses.html">Courses</a></li>
                                        <li><a href="course-single.html">Course Single</a></li>
                                        <li><a href="event.html">Event</a></li>
                                        <li><a href="event-single.html">Event Single</a></li>
                                    </ul>
                                </li> 
                                <li class="dropdown"><a href="#">Gallery</a>
                                    <ul>
                                        <li><a href="gallery-masonry.html">Gallery Masonry</a></li>
                                        <li><a href="gallery-with-filters.html">Gallery With Filters</a></li>
                                        <li><a href="gallery-full-width.html">Gallery Full Width</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Blogs</a>
                                    <ul>
                                        <li><a href="blog.html">Blog Standard</a></li>
                                        <li><a href="blog-grid.html">Blog Grid</a></li>
                                        <li><a href="blog-full-width.html">Blog Full Width</a></li>
                                        <li><a href="blog-single-1.html">Blog Single 01</a></li>
                                        <li><a href="blog-single-2.html">Blog Single 02</a></li>
                                        <li><a href="error-page.html">404 Page</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
            </div>
        </div>
    </header>
    <!--End Main Header -->
    
@yield('content')


		<!-- Main Footer -->
    <footer class="main-footer">
        <!-- Footer upper -->
        <div class="footer-upper">
            <div class="inner-container">
                <!--Widgets Section-->
                <div class="widgets-section">
                    <div class="row clearfix">       
                        <!--Footer Column-->
                        <div class="footer-column col-lg-4 col-md-12 col-sm-12">
                            <div class="footer-widget testimonial-widget">                            
                                <div class="single-item-carousel owl-carousel owl-theme">
                                    <div class="testimonial-block">
                                        <h2 class="name">John doue</h2>
                                        <div class="inner-box">
                                            <div class="thumb"><img src="/frontend/images/resource/thumb-1.jpg" alt=""></div>
                                            <div class="text">Efficiently enable enabled sources and cost Procces Affective Products. Completely synthesize princi centered sources and cost effective products.</div>
                                            <ul class="social-links">
                                                <li><a href="#"><i class="fa fa-facebook-official"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="testimonial-block">
                                        <h2 class="name">John doue</h2>
                                        <div class="inner-box">
                                            <div class="thumb"><img src="/frontend/images/resource/thumb-1.jpg" alt=""></div>
                                            <div class="text">Efficiently enable enabled sources and cost Procces Affective Products. Completely synthesize princi centered sources and cost effective products.</div>
                                            <ul class="social-links">
                                                <li><a href="#"><i class="fa fa-facebook-official"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="testimonial-block">
                                        <h2 class="name">John doue</h2>
                                        <div class="inner-box">
                                            <div class="thumb"><img src="/frontend/images/resource/thumb-1.jpg" alt=""></div>
                                            <div class="text">Efficiently enable enabled sources and cost Procces Affective Products. Completely synthesize princi centered sources and cost effective products.</div>
                                            <ul class="social-links">
                                                <li><a href="#"><i class="fa fa-facebook-official"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!--Footer Column-->
                        <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                            <div class="footer-widget post-widget">
                                <h2 class="widget-title">Recent Post</h2>
                                <div class="widget-content">
                                    <!-- Recent Post -->
                                   @foreach($tb_m_artikel as $data)
                                    <article class="post">
                                        <span class="date">{{Date::parse($data->create_at)->format('d M')}}</span>
                                        <h4><a href="blog-single-2.html">{{ $data->judul }}</a></h4>
                                    </article>
                                    @endforeach
                                </div>
                            </div>  
                        </div>         
                        
                        <!--Footer Column-->
                        <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                            <div class="footer-widget gallery-widget">
                                <h2 class="widget-title">Widget Gallery</h2>
                                <div class="widget-content">
                                    <div class="outer clearfix">
                                        <figure class="image">
                                            <a href="/frontend/images/gallery/2-2.jpg" class="lightbox-image" title="Image Title Here"><img src="/frontend/images/resource/insta-1.jpg" alt=""></a>
                                        </figure>

                                        <figure class="image">
                                            <a href="/frontend/images/gallery/2.jpg" class="lightbox-image" title="Image Title Here"><img src="/frontend/images/resource/insta-2.jpg" alt=""></a>
                                        </figure>

                                        <figure class="image">
                                            <a href="/frontend/images/gallery/3.jpg" class="lightbox-image" title="Image Title Here"><img src="/frontend/images/resource/insta-3.jpg" alt=""></a>
                                        </figure>

                                        <figure class="image">
                                            <a href="/frontend/images/gallery/4.html" class="lightbox-image" title="Image Title Here"><img src="/frontend/images/resource/insta-4.jpg" alt=""></a>
                                        </figure>
                                    </div>
                                </div>       
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      {{-- End Main Footer --}}

		<!-- Footer Lower -->
        <div class="footer-lower">
            <div class="auto-container">
                <div class="inner-box">
                    <div class="logo-box">
                    	@foreach($tb_s_sekolah as $data)
                        <figure><img src="{{ asset('img/FotoSekolah/'.$data->logo) }}" style="max-height:100px; max-width: 100px; margin-top:7px;" alt="footer logo"></figure>
                    	@endforeach
                    </div>
                    <div class="footer-social-links">
                        <ul class="social-links">
                        	@foreach($tb_s_sekolah as $data)
                            <li><a href="{{ $data->Facebook }}">Facebook</a></li>
                            <li><a href="{{ $data->Twitter }}">Twitter</a></li>
                            <li><a href="{{ $data->Instagram }}">Instagram</a></li>
                            <li><a href="#">Pinterest</a></li>
                            <li><a href="#">Linkedin</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>                                                                  
            </div>
        </div>
        {{-- End Footer Lower --}}


        <!--Footer Bottom-->
         <div class="footer-bottom">
            <div class="auto-container">
                <div class="copyright-text clearfix">
                    <div class="text">© Copyright 2018 <a href="/">
                    	@foreach($tb_s_sekolah as $data)
                    	{{ $data->nama_sekolah }}
                    	@endforeach
                    </a>. All Rights Reserved</div>
                    <div class="link">
                        <a href="#">Wonderful Education HTML Template</a>                    
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Main Footer -->


</div>


<script src="/frontend/js/jquery.js"></script> 
<script src="/frontend/js/popper.min.js"></script>
<script src="/frontend/js/bootstrap.min.js"></script>
<!--Revolution Slider-->
<script src="/frontend/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="/frontend/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="/frontend/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="/frontend/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="/frontend/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="/frontend/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="/frontend/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="/frontend/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="/frontend/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="/frontend/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="/frontend/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="/frontend/js/main-slider-script.html"></script>
<!--End Revolution Slider-->
<script src="/frontend/js/jquery.fancybox.js"></script>
<script src="/frontend/js/owl.js"></script>
<script src="/frontend/js/wow.js"></script>
<script src="/frontend/js/countdown.js"></script>
<script src="/frontend/js/isotope.js"></script>
<script src="/frontend/js/appear.js"></script>
<script src="/frontend/js/script.js"></script>



</html>

