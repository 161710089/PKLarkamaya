@extends('layouts.user')
@section('content')
<!DOCTYPE html>
<head>
<meta charset="utf-8">
@foreach($tb_s_sekolah as $data)
<title>{{ $data->nama_sekolah }} - Taman Kanak kanak | Contact </title>
@endforeach

<!-- Stylesheets -->
<link href="/frontend/css/bootstrap.css" rel="stylesheet">
<link href="/frontend/css/style.css" rel="stylesheet">
<link href="/frontend/css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


<body>

    
       <section class="page-title">
        <div class="auto-container">
            <h1>Contact Us</h1>
            <ul class="page-breadcrumb">
                <li><a href="index-2.html">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Info Section -->
    <section class="contact-info-section">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">
                    <!-- Contact Info Block -->
                    <div class="contact-info-block col-lg-4 col-md-6 col-sm-12">
                        @foreach($tb_s_sekolah as $data)
                        <div class="inner-box">
                            <h3>London, UK</h3>
                            <ul>
                                <li>{{ $data->alamat }} <br>London, N10 3LY</li>
                                <li>Tel: {{ $data->no_telepon }}</li>
                                <li>Email; <a href="#">Support@arans.com</a></li>
                            </ul>
                        </div>
                        @endforeach
                    </div>

                    <!-- Contact Info Block -->
                    <div class="contact-info-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <h3>New York, USA</h3>
                            <ul>
                                <li>10, Firs Avenue, Muswell Hill, <br>London, N10 3LY</li>
                                <li>Tel: 02 562-958</li>
                                <li>Email; <a href="#">Support@arans.com</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Contact Info Block -->
                    <div class="contact-info-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <h3>Tokyo, Japan</h3>
                            <ul>
                                <li>10, Firs Avenue, Muswell Hill, <br>London, N10 3LY</li>
                                <li>Tel: 02 562-958</li>
                                <li>Email; <a href="#">Support@arans.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Info Section -->

    <!-- Contact Form Section -->
    
    <!--End Contact Form Section -->

    <!-- Map Section -->
    <section class="map-section">
        <div class="auto-container">
            <div class="map-outer">
                <!--Map Canvas-->
                @foreach($tb_s_sekolah as $data)
                <div class="map-canvas"
                    data-zoom="15"
                    data-lat="-6.9639253"
                    data-lng="107.6037469"
                    data-type="roadmap"
                    data-hue="#ffc400"
                    data-title="{{ $data->nama_sekolah }}"
                    data-icon-path="/frontend/images/icons/map-marker.png"
                    data-content="{{ $data->alamat }}<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--End Map Section -->



                   


@endsection
<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
