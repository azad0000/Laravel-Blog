@extends('frontend.master')
@section('title')
<title>Home | Blog Lira</title>
@endsection
@section('content')
<div class="col-md-9">

	<div class="row">
		<!-- Blog Small Image Single Item -->
		@foreach ($allPosts as $item)
		<div class="col-md-4">
			<div class="blog-single-post pb-60">
				<div class="blog-img">
					<a href="#"><img src="{{asset('images')}}/{{$item->image}}" alt="" class=" img-fluid"/></a>
					<span class="pst-titel"><a href="#">{{$item->category->cat_name}}</a></span>
				</div>
				<div class="post-content">
					<div class="post-titel-author pt-30 pb-15">
						<h3><a href="#">{{$item->title}}</a></h3>
						<span>{{$item->created_at->diffForHumans()}}   /  <a href="#">By : {{$item->user->name}}</a></span>
					</div>
					<div class="post-srt-content pb-20 border-bottom">
						<p>{{$item->exerpt}}</p>
						<a href="#">CONTINUE READING <i class="icofont icofont-long-arrow-right"></i></a>
					</div>
					<div class="post-info pt-15">
						<span class="post-txt mr-25">
							<a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>12 Likes</a>
						</span>
						<span class="post-txt mr-25">
							<a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>08 Comments</a>
						</span>
						<span class="post-txt mr-25">
							<a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i>50 Shares</a>
						</span>
					</div>
				</div>
			</div>
		</div>
		@endforeach
		
		<!-- Blog Small Image Single Item -->
		<!-- Blog Small Single Item -->
		<!-- Banner Add Area Start -->
		<div class="col-md-12 fix pb-60">
			<div class="middle-banner bg-1">
				<div class="banner-content text-white">
					<div class="left-bnr-cnt">
						<h2>YOUR BANNER ADD HERE</h2>
					</div>
					<div class="right-bnr-cnt">
						<a href="#">BUY NOW <i class="icofont icofont-long-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</div>
		<!-- Banner Add Area End -->
		<!-- Blog Large Video Single Item -->
		<div class="col-md-4">
			<div class="blog-single-post pb-60">
				<div class="blog-img">
					<a href="#"><img src="{{asset('assets/frontend')}}/img/blog/home-3/small/10.jpg" alt="" /></a>
					<span class="pst-titel"><a href="#">Food</a></span>
				</div>
				<div class="post-content">
					<div class="post-titel-author pt-30 pb-15">
						<h3><a href="#">Mysterious Food Menu</a></h3>
						<span>20 November 2016, 10.15 am   /  <a href="#">By : Zenaul</a></span>
					</div>
					<div class="post-srt-content pb-20 border-bottom">
						<p>Adventure Sed ut perspiciatis unde omnis iste natus erro tem accusantium doloremque laudantium, totam rem aperiaque ipsa quae ab illo inventore veritatis perspiciats</p>
						<a href="#">CONTINUE READING <i class="icofont icofont-long-arrow-right"></i></a>
					</div>
					<div class="post-info pt-15">
						<span class="post-txt mr-25">
							<a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>12 Likes</a>
						</span>
						<span class="post-txt mr-25">
							<a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>08 Comments</a>
						</span>
						<span class="post-txt mr-25">
							<a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i>50 Shares</a>
						</span>
					</div>
				</div>
			</div>
		</div>
		<!-- Blog Large Video Single Item -->
		<!-- Blog Small Image Single Item -->
		<div class="col-md-4">
			<div class="blog-single-post pb-60">
				<div class="blog-img">
					<a href="#"><img src="{{asset('assets/frontend')}}/img/blog/home-3/small/11.jpg" alt="" /></a>
					<span class="pst-titel"><a href="#">Fashion</a></span>
				</div>
				<div class="post-content">
					<div class="post-titel-author pt-30 pb-15">
						<h3><a href="#">Memory of Awesome Journey</a></h3>
						<span>20 November 2016, 10.15 am   /  <a href="#">By : Nayan</a></span>
					</div>
					<div class="post-srt-content pb-20 border-bottom">
						<p>Adventure Sed ut perspiciatis unde omnis iste natus erro tem accusantium doloremque laudantium, totam rem aperiaque ipsa quae ab illo inventore veritatis perspiciats</p>
						<a href="#">CONTINUE READING <i class="icofont icofont-long-arrow-right"></i></a>
					</div>
					<div class="post-info pt-15">
						<span class="post-txt mr-25">
							<a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>12 Likes</a>
						</span>
						<span class="post-txt mr-25">
							<a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>08 Comments</a>
						</span>
						<span class="post-txt mr-25">
							<a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i>50 Shares</a>
						</span>
					</div>
				</div>
			</div>
		</div>
		<!-- Blog Small Image Single Item -->
		<!-- Blog Small Single Item -->
		<div class="col-md-4">
			<div class="blog-single-post pb-60">
				<div class="blog-img">
					<a href="#"><img src="{{asset('assets/frontend')}}/img/blog/home-3/small/12.jpg" alt="" /></a>
					<span class="pst-titel"><a href="#">Life</a></span>
				</div>
				<div class="post-content">
					<div class="post-titel-author pt-30 pb-15">
						<h3><a href="#">Enjoy the Beauty of Life</a></h3>
						<span>20 November 2016, 10.15 am   /  <a href="#">By : Salim</a></span>
					</div>
					<div class="post-srt-content pb-20 border-bottom">
						<p>Adventure Sed ut perspiciatis unde omnis iste natus erro tem accusantium doloremque laudantium, totam rem aperiaque ipsa quae ab illo inventore veritatis perspiciats</p>
						<a href="#">CONTINUE READING <i class="icofont icofont-long-arrow-right"></i></a>
					</div>
					<div class="post-info pt-15">
						<span class="post-txt mr-25">
							<a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>12 Likes</a>
						</span>
						<span class="post-txt mr-25">
							<a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>08 Comments</a>
						</span>
						<span class="post-txt mr-25">
							<a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i>50 Shares</a>
						</span>
					</div>
				</div>
			</div>
		</div>
		<!-- Blog Small Single Item -->
		<!-- Blog Large Video Single Item -->
		<div class="col-md-4">
			<div class="blog-single-post pb-60">
				<div class="blog-img">
					<a href="#"><img src="{{asset('assets/frontend')}}/img/blog/home-3/small/13.jpg" alt="" /></a>
					<span class="pst-titel"><a href="#">Fashion</a></span>
				</div>
				<div class="post-content">
					<div class="post-titel-author pt-30 pb-15">
						<h3><a href="#">New Fashion in the Twon</a></h3>
						<span>20 November 2016, 10.15 am   /  <a href="#">By : Rana</a></span>
					</div>
					<div class="post-srt-content pb-20 border-bottom">
						<p>Adventure Sed ut perspiciatis unde omnis iste natus erro tem accusantium doloremque laudantium, totam rem aperiaque ipsa quae ab illo inventore veritatis perspiciats</p>
						<a href="#">CONTINUE READING <i class="icofont icofont-long-arrow-right"></i></a>
					</div>
					<div class="post-info pt-15">
						<span class="post-txt mr-25">
							<a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>12 Likes</a>
						</span>
						<span class="post-txt mr-25">
							<a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>08 Comments</a>
						</span>
						<span class="post-txt mr-25">
							<a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i>50 Shares</a>
						</span>
					</div>
				</div>
			</div>
		</div>
		<!-- Blog Large Video Single Item -->
		<!-- Blog Small Image Single Item -->
		<div class="col-md-4">
			<div class="blog-single-post pb-60">
				<div class="blog-img">
					<a href="#"><img src="{{asset('assets/frontend')}}/img/blog/home-3/small/14.jpg" alt="" /></a>
					<span class="pst-titel"><a href="#">Music</a></span>
				</div>
				<div class="post-content">
					<div class="post-titel-author pt-30 pb-15">
						<h3><a href="#">Attending Music Fest November</a></h3>
						<span>20 November 2016, 10.15 am   /  <a href="#">By : Ashim</a></span>
					</div>
					<div class="post-srt-content pb-20 border-bottom">
						<p>Adventure Sed ut perspiciatis unde omnis iste natus erro tem accusantium doloremque laudantium, totam rem aperiaque ipsa quae ab illo inventore veritatis perspiciats</p>
						<a href="#">CONTINUE READING <i class="icofont icofont-long-arrow-right"></i></a>
					</div>
					<div class="post-info pt-15">
						<span class="post-txt mr-25">
							<a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>12 Likes</a>
						</span>
						<span class="post-txt mr-25">
							<a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>08 Comments</a>
						</span>
						<span class="post-txt mr-25">
							<a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i>50 Shares</a>
						</span>
					</div>
				</div>
			</div>
		</div>
		<!-- Blog Small Image Single Item -->
		<!-- Blog Small Single Item -->
		<div class="col-md-4">
			<div class="blog-single-post pb-60">
				<div class="blog-img">
					<a href="#"><img src="{{asset('assets/frontend')}}/img/blog/home-3/small/11.jpg" alt="" /></a>
					<span class="pst-titel"><a href="#">Travel</a></span>
				</div>
				<div class="post-content">
					<div class="post-titel-author pt-30 pb-15">
						<h3><a href="#">One Day in the London City</a></h3>
						<span>20 November 2016, 10.15 am   /  <a href="#">By : Kumar</a></span>
					</div>
					<div class="post-srt-content pb-20 border-bottom">
						<p>Adventure Sed ut perspiciatis unde omnis iste natus erro tem accusantium doloremque laudantium, totam rem aperiaque ipsa quae ab illo inventore veritatis perspiciats</p>
						<a href="#">CONTINUE READING <i class="icofont icofont-long-arrow-right"></i></a>
					</div>
					<div class="post-info pt-15">
						<span class="post-txt mr-25">
							<a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>12 Likes</a>
						</span>
						<span class="post-txt mr-25">
							<a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>08 Comments</a>
						</span>
						<span class="post-txt mr-25">
							<a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i>50 Shares</a>
						</span>
					</div>
				</div>
			</div>
		</div>
		<!-- Blog Small Single Item -->
		<!-- Blog Large Video Single Item -->
		<div class="col-md-4">
			<div class="blog-single-post pb-60">
				<div class="blog-img">
					<a href="#"><img src="{{asset('assets/frontend')}}/img/blog/home-3/small/16.jpg" alt="" /></a>
					<span class="pst-titel"><a href="#">Music</a></span>
				</div>
				<div class="post-content">
					<div class="post-titel-author pt-30 pb-15">
						<h3><a href="#">Adventure Makes Life More Beautiful</a></h3>
						<span>20 November 2016, 10.15 am   /  <a href="#">By : Modu</a></span>
					</div>
					<div class="post-srt-content pb-20 border-bottom">
						<p>Adventure Sed ut perspiciatis unde omnis iste natus erro tem accusantium doloremque laudantium, totam rem aperiaque ipsa quae ab illo inventore veritatis perspiciats</p>
						<a href="#">CONTINUE READING <i class="icofont icofont-long-arrow-right"></i></a>
					</div>
					<div class="post-info pt-15">
						<span class="post-txt mr-25">
							<a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>12 Likes</a>
						</span>
						<span class="post-txt mr-25">
							<a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>08 Comments</a>
						</span>
						<span class="post-txt mr-25">
							<a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i>50 Shares</a>
						</span>
					</div>
				</div>
			</div>
		</div>
		<!-- Blog Large Video Single Item -->
		<!-- Blog Small Image Single Item -->
		<div class="col-md-4">
			<div class="blog-single-post pb-60">
				<div class="blog-img">
					<a href="#"><img src="{{asset('assets/frontend')}}/img/blog/home-3/small/14.jpg" alt="" /></a>
					<span class="pst-titel"><a href="#">Life</a></span>
				</div>
				<div class="post-content">
					<div class="post-titel-author pt-30 pb-15">
						<h3><a href="#">Life Means Joy, Life Means Enjoy</a></h3>
						<span>20 November 2016, 10.15 am   /  <a href="#">By : Shimul</a></span>
					</div>
					<div class="post-srt-content pb-20 border-bottom">
						<p>Adventure Sed ut perspiciatis unde omnis iste natus erro tem accusantium doloremque laudantium, totam rem aperiaque ipsa quae ab illo inventore veritatis perspiciats</p>
						<a href="#">CONTINUE READING <i class="icofont icofont-long-arrow-right"></i></a>
					</div>
					<div class="post-info pt-15">
						<span class="post-txt mr-25">
							<a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>12 Likes</a>
						</span>
						<span class="post-txt mr-25">
							<a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>08 Comments</a>
						</span>
						<span class="post-txt mr-25">
							<a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i>50 Shares</a>
						</span>
					</div>
				</div>
			</div>
		</div>
		<!-- Blog Small Image Single Item -->
		<!-- Blog Small Single Item -->
		<div class="col-md-4">
			<div class="blog-single-post pb-60">
				<div class="blog-img">
					<a href="#"><img src="{{asset('assets/frontend')}}/img/blog/home-3/small/13.jpg" alt="" /></a>
					<span class="pst-titel"><a href="#">Travel</a></span>
				</div>
				<div class="post-content">
					<div class="post-titel-author pt-30 pb-15">
						<h3><a href="#">Advanture Makes Life More Beautiful</a></h3>
						<span>20 November 2016, 10.15 am   /  <a href="#">By : Horipodo</a></span>
					</div>
					<div class="post-srt-content pb-20 border-bottom">
						<p>Adventure Sed ut perspiciatis unde omnis iste natus erro tem accusantium doloremque laudantium, totam rem aperiaque ipsa quae ab illo inventore veritatis perspiciats</p>
						<a href="#">CONTINUE READING <i class="icofont icofont-long-arrow-right"></i></a>
					</div>
					<div class="post-info pt-15">
						<span class="post-txt mr-25">
							<a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>12 Likes</a>
						</span>
						<span class="post-txt mr-25">
							<a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>08 Comments</a>
						</span>
						<span class="post-txt mr-25">
							<a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i>50 Shares</a>
						</span>
					</div>
				</div>
			</div>
		</div>
		<!-- Blog Small Single Item -->
		<!-- Pager Previous Next Button -->
		<div class="col-md-12">
			<ul class="pager">
				<li><a href="#"><i class="fa fa-angle-double-left"></i>PREVIOUS</a></li>
				<li><a href="#">NEXT<i class="fa fa-angle-double-right"></i></a></li>
			</ul>
		</div>
		<!-- Pager Previous Next Button -->
	</div>
</div>
@endsection