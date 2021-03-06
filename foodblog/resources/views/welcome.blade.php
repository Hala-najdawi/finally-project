<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <title>{{__('Food Blog')}}</title>
	<meta charset="UTF-8">
	<meta name="description" content="Food Blog Web Template">
	<meta name="keywords" content="food, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">  

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
    </head>
    <body>
  
            <div class="content">
            <div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="header-social">
					<a href="#"><i class="fa fa-pinterest"></i></a>
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
				</div>
				<div class="user-panel">

                    <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    
                    @endauth
                </div>
            @endif
</div>
				</div>
			</div>
		</div>
		<div class="header-bottom">
			<div class="container">
				<a href="index.html" class="site-logo">
					<!-- <img src="img/logo.png" alt=""> -->
					<h3 class="add-text">{{__('Food Blog')}}</h3>
				</a>
				<div class="nav-switch">
					<i class="fa fa-bars"></i>
				</div>
				
				<ul class="main-menu">
					<!-- <li><a href="about.html">Features</a></li>
					<li><a href="#">Reviews</a></li> -->
					
					<li><a href="{{route('Sweets.index',app()->getlocale())}}">{{__('Sweets')}}</a></li>
					<li><a href="{{route('LunchBoxes.index',app()->getlocale())}}">{{__('Lunch Box')}}</a></li> 
					<li><a href="{{route('babies.index',app()->getlocale())}}">{{__('Baby&Toddler')}}</a></li>
					<li><a href="{{ url('/') }}">{{__('Home') }}</a></li>
				</ul>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hero-slide-item set-bg" data-setbg="img/slider-bg-1.jpg">
				<div class="hs-text">
					<h2 class="hs-title-1"><span>{{__('Healthy Recipes')}}</span></h2>
					<h2 class="hs-title-2"><span>{{__('from the best chef')}}</span></h2>
					<h2 class="hs-title-3"><span>{{__('for all the foodies')}}</span></h2>
				</div>
			</div>
			<div class="hero-slide-item set-bg" data-setbg="img/slider-bg-2.jpg">
				<div class="hs-text">
					<h2 class="hs-title-1"><span>{{__('Healthy Recipes')}}</span></h2>
					<h2 class="hs-title-2"><span>{{__('from the best chef')}}</span></h2>
					<h2 class="hs-title-3"><span>{{__('for all the foodies')}}</span></h2>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->


	<!-- Add section end -->
	<section class="add-section spad">
		<div class="container">
			<div class="add-warp">
				<div class="add-slider owl-carousel">
					<div class="as-item set-bg" data-setbg="img/add/1.jpg"></div>
					<div class="as-item set-bg" data-setbg="img/add/2.jpg"></div>
					<div class="as-item set-bg" data-setbg="img/add/3.jpg"></div>
				</div>
				<div class="row add-text-warp">
					<div class="col-lg-4 col-md-5 offset-lg-8 offset-md-7">
						<div class="add-text text-white ">
							<div class="at-style"></div>
							<h2>{{__('Amazing deserts')}}</h2>
							<ul>
								<li>{{__('Easy to make')}}</li>
								<li>{{__('Step by Step')}}</li>
								<li>{{__('Gluten Free')}}</li>
								<li>{{__('Healty  Ingredients')}}</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Add section end -->


	<!-- Recipes section -->
	<section class="recipes-section spad pt-0">
		<div class="container">
			<div class="section-title text-right ">
				<h2>{{__('Latest recipes')}}</h2>
			</div>
			
			<div class="row">
			@foreach($posts as $post)
			@if($post->created_at <= '23-12-2019')
				<div class="col-lg-4 col-md-6">
					<div class="recipe">
					<a href="{{route('babies.show',[app()->getlocale(),'id'=>$post->id]) }} "> 
						<img src="{{$post->img}}" alt="" style="height:281px">
						<div class="recipe-info-warp">
							<div class="recipe-info">
								<h3>{{$post->name}}</h3>
								
								<h3>{{date('F d,Y',strtotime($post->created_at))}}</h3>
						
							</div>
						</div>
						</a>
					</div>
				</div>
				@endif
				@endforeach
			</div>

		</div>
	</section>
	<!-- Recipes section end -->


	<!-- Footer widgets section -->
	<section class="bottom-widgets-section spad">
		<div class="container ">
		<div class="section-title  text-right">
						<h3>{{__('Top rated recipes')}}</h3>
					</div>
			<div class="row">
			@foreach($posts as $post)
			@if($post->like_count >= 2)
				<div class="col-lg-8 col-md-6 ftw-warp" style="padding-left:500px">
				
					<ul class="sp-recipes-list">
					
						<li>
						<a href="{{route('babies.show',[app()->getlocale(),'id'=>$post->id]) }} "> 
							<div class="rl-thumb set-bg" data-setbg="{{$post->img}}"></div>
							<div class="rl-info">
								<span>{{$post->updated_at}}</span>
								<h6>{{$post->name}}</h6>
								<div class="rating">
									<i class="fa fa-heart">{{$post->like_count}}</i>
								</div>
							</div>
							</a>
						</li>
						
					</ul>
					
				</div>
				@endif
				@endforeach
				</div>
			</div>
		</div>
	</section>
	<!-- Footer widgets section end -->


	<!-- Review section end -->
	<section class="review-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-8 offset-lg-4 offset-md-2">
					<div class="review-item">
						<div class="">
							<h6 style="text-align:right">{{__('Tips')}}</h6>
							<div class="author-meta" >
								
								<p>
							{{__("Put sweets in their place. Occasional sweets are fine, but don't turn dessert into the main reason for eating dinner. When dessert is the prize for eating dinner, kids naturally place more value on the cupcake than the broccoli. Try to stay neutral about foods.")}}
							</p>
								
							</div>
						</div>
					</div>
				</div>
			
			</div>
		</div>
	</section>
	<!-- Review section end -->


	<!-- Gallery section -->
	<div class="gallery">
		<div class="gallery-slider owl-carousel">
			<div class="gs-item set-bg" data-setbg="img/instagram/1.jpg"></div>
			<div class="gs-item set-bg" data-setbg="img/instagram/2.jpg"></div>
			<div class="gs-item set-bg" data-setbg="img/instagram/3.jpg"></div>
			<div class="gs-item set-bg" data-setbg="img/instagram/4.jpg"></div>
			<div class="gs-item set-bg" data-setbg="img/instagram/5.jpg"></div>
			<div class="gs-item set-bg" data-setbg="img/instagram/6.jpg"></div>
		</div>
	</div>
	<!-- Gallery section end -->


	<!-- Footer section  -->
	<footer class="footer-section set-bg" data-setbg="img/footer-bg.jpg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					
					<div class="footer-social">
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						
					</div>
				</div>
				<div class="col-lg-6 text-lg-right">
					<ul class="footer-menu">
					
					<li><a href="{{route('Sweets.index',app()->getlocale())}}">{{__('Sweets')}}</a></li>
					<li><a href="{{route('LunchBoxes.index',app()->getlocale())}}">{{__('Lunch Box')}}</a></li> 
					<li><a href="{{route('babies.index',app()->getlocale())}}">{{__('Baby&Toddler')}}</a></li>
					<li><a href="{{ url('/') }}">{{__('Home') }}</a></li>
					</ul>
					<p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer section end -->
            </div>
        
        
	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>
    </body>
</html>
