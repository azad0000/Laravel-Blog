<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- Mirrored from template.hasthemes.com/lira/lira/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Aug 2021 06:05:42 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        @yield('title')
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.html">
		<link rel="shortcut icon" type="image/x-icon" href="img/icon/favicon.ico">
		<!-- Place favicon.ico in the root directory -->
		
		
		<!-- all css here -->
        @include('frontend.includes.stylesheet')
        <script src="{{asset('assets/frontend')}}/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Body main wrapper start -->
		<div class="wrapper home-three">
			<!-- Start of header area -->
			@include('frontend.includes.header')
			<!-- End of header area -->
			<!-- Main Slide Top Area Start -->
			<div class="fix">
				 <!-- Start of slider area -->
				@include('frontend.includes.slider')
				<!-- End of slider area -->
			</div>
			<!-- Main Slide Top Area Start -->
			<!-- Page Content Start -->
			<section class="page-content-area ptb-120">
				<div class="container-fluid plr-80">
					<div class="row">
						<!-- Content Left Area --> 
						@yield('content')
						<!-- Content Left Area End --> 
						<!-- Content Right Area Start --> 
						@include('frontend.includes.sidebar')
						<!-- Content Right Area End -->
					</div>
				</div>
			</section>
			<!-- Page Content End -->
			<!-- Start footer area -->
			@include('frontend.includes.footer')
			<!-- End footer area -->
		</div>
		<!-- Body main wrapper end -->

       
		<!-- all js here -->
        @include('frontend.includes.scripts')
    </body>

<!-- Mirrored from template.hasthemes.com/lira/lira/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Aug 2021 06:05:42 GMT -->
</html>
