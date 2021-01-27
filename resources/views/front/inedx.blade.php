@extends('layouts.front.app')

@section('content')



  	<!-- HEADER -->
	<header id="header">
		<!-- NAV -->
		<div id="nav">
			<!-- Top Nav -->
			<div id="nav-top">
				<div class="container">
					<!-- social -->
					<ul class="nav-social">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
					</ul>
					<!-- /social -->

					<!-- logo -->
					<div class="nav-logo">
						<a href="index.html" class="logo"><img src="./img/logo.png" alt=""></a>
					</div>
					<!-- /logo -->

					<!-- search & aside toggle -->
					<div class="nav-btns">
						<button class="aside-btn"><i class="fa fa-bars"></i></button>
						<button class="search-btn"><i class="fa fa-search"></i></button>
						<div id="nav-search">
							<form>
								<input class="input" name="search" placeholder="Enter your search...">
							</form>
							<button class="nav-close search-close">
								<span></span>
							</button>
						</div>
					</div>
					<!-- /search & aside toggle -->
				</div>
			</div>
			<!-- /Top Nav -->

			<!-- Main Nav -->
			<div id="nav-bottom">
				<div class="container">
					<!-- nav -->
					<ul class="nav-menu">
                        @foreach ($get_all_category as $get_category)
                            <li class=""><a href="#">{{$get_category->name}}</a>  </li>
                        @endforeach


					</ul>
					<!-- /nav -->
				</div>
			</div>
			<!-- /Main Nav -->

			<!-- Aside Nav -->
			<div id="nav-aside">
				<ul class="nav-aside-menu">
                    @foreach ($get_all_category as $get_category)
                    <li><a href="index.html">{{$get_category->name}}</a></li>
                    @endforeach
				</ul>
				<button class="nav-close nav-aside-close"><span></span></button>
			</div>
			<!-- /Aside Nav -->
		</div>
		<!-- /NAV -->
	</header>
	<!-- /HEADER -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div id="hot-post" class="row hot-post">
				<div class="col-md-8 hot-post-left">
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="blog-post.html"><img src="{{$first_post->photo}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">{{$first_post->category->name}}</a>
							</div>
							<h3 class="post-title title-lg"><a href="blog-post.html">{{$first_post->title}}</a></h3>
							<ul class="post-meta">
								<li>{{$first_post->created_at->diffForHumans()}}</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
				<div class="col-md-4 hot-post-right">
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="blog-post.html"><img src="{{$second_post->photo}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">{{$second_post->category->name}}</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">{{$second_post->title}}</a></h3>
							<ul class="post-meta">
                                <li>{{$second_post->created_at->diffForHumans()}}</li>
							</ul>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="blog-post.html"><img src="{{$third_post->photo}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
                                <a href="category.html">{{$third_post->category->name}}</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">{{$third_post->title}}</a></h3>
							<ul class="post-meta">
                                <li>{{$third_post->created_at->diffForHumans()}}</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">Recent posts</h2>
							</div>
						</div>


                        @foreach ($lastesd_posts as $item_posts)
            <!-- post -->
						<div class="col-md-6">
							<div class="post">
								<a class="post-img" href="blog-post.html"><img src="{{$item_posts->photo}}" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="category.html">{{$item_posts->category->name}}</a>
									</div>
									<h3 class="post-title"><a href="#">{{$item_posts->title}}</a></h3>
									<ul class="post-meta">
                                        <li>{{$item_posts->created_at->diffForHumans()}}</li>
									</ul>
								</div>
							</div>
                        </div>
<!-- /post -->
                        @endforeach



					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">Lifestyle</h2>
							</div>
						</div>
						<!-- post -->
						<div class="col-md-4">
							<div class="post post-sm">
								<a class="post-img" href="blog-post.html"><img src="./img/post-9.jpg" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="category.html">Lifestyle</a>
									</div>
									<h3 class="post-title title-sm"><a href="blog-post.html">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
									<ul class="post-meta">
										<li><a href="author.html">John Doe</a></li>
										<li>20 April 2018</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="col-md-4">
							<div class="post post-sm">
								<a class="post-img" href="blog-post.html"><img src="./img/post-8.jpg" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="category.html">Fashion</a>
										<a href="category.html">Lifestyle</a>
									</div>
									<h3 class="post-title title-sm"><a href="blog-post.html">Postea senserit id eos, vivendo periculis ei qui</a></h3>
									<ul class="post-meta">
										<li><a href="author.html">John Doe</a></li>
										<li>20 April 2018</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="col-md-4">
							<div class="post post-sm">
								<a class="post-img" href="blog-post.html"><img src="./img/post-11.jpg" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="category.html">Technology</a>
									</div>
									<h3 class="post-title title-sm"><a href="blog-post.html">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
									<ul class="post-meta">
										<li><a href="author.html">John Doe</a></li>
										<li>20 April 2018</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /post -->
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">Fashion & Travel</h2>
							</div>
						</div>
						<!-- post -->
						<div class="col-md-4">
							<div class="post post-sm">
								<a class="post-img" href="blog-post.html"><img src="./img/post-10.jpg" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="category.html">Travel</a>
									</div>
									<h3 class="post-title title-sm"><a href="blog-post.html">Ne bonorum praesent cum, labitur persequeris definitionem quo cu?</a></h3>
									<ul class="post-meta">
										<li><a href="author.html">John Doe</a></li>
										<li>20 April 2018</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="col-md-4">
							<div class="post post-sm">
								<a class="post-img" href="blog-post.html"><img src="./img/post-12.jpg" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="category.html">Lifestyle</a>
									</div>
									<h3 class="post-title title-sm"><a href="blog-post.html">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
									<ul class="post-meta">
										<li><a href="author.html">John Doe</a></li>
										<li>20 April 2018</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="col-md-4">
							<div class="post post-sm">
								<a class="post-img" href="blog-post.html"><img src="./img/post-13.jpg" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="category.html">Travel</a>
										<a href="category.html">Lifestyle</a>
									</div>
									<h3 class="post-title title-sm"><a href="blog-post.html">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
									<ul class="post-meta">
										<li><a href="author.html">John Doe</a></li>
										<li>20 April 2018</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /post -->
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">Technology & Health</h2>
							</div>
						</div>
						<!-- post -->
						<div class="col-md-4">
							<div class="post post-sm">
								<a class="post-img" href="blog-post.html"><img src="./img/post-4.jpg" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="category.html">Health</a>
									</div>
									<h3 class="post-title title-sm"><a href="blog-post.html">Postea senserit id eos, vivendo periculis ei qui</a></h3>
									<ul class="post-meta">
										<li><a href="author.html">John Doe</a></li>
										<li>20 April 2018</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="col-md-4">
							<div class="post post-sm">
								<a class="post-img" href="blog-post.html"><img src="./img/post-1.jpg" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="category.html">Travel</a>
									</div>
									<h3 class="post-title title-sm"><a href="blog-post.html">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
									<ul class="post-meta">
										<li><a href="author.html">John Doe</a></li>
										<li>20 April 2018</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="col-md-4">
							<div class="post post-sm">
								<a class="post-img" href="blog-post.html"><img src="./img/post-3.jpg" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="category.html">Lifestyle</a>
									</div>
									<h3 class="post-title title-sm"><a href="blog-post.html">Ne bonorum praesent cum, labitur persequeris definitionem quo cu?</a></h3>
									<ul class="post-meta">
										<li><a href="author.html">John Doe</a></li>
										<li>20 April 2018</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /post -->
					</div>
					<!-- /row -->
				</div>
				<div class="col-md-4">
					<!-- ad widget-->
					<div class="aside-widget text-center">
						<a href="#" style="display: inline-block;margin: auto;">
							<img class="img-responsive" src="./img/ad-3.jpg" alt="">
						</a>
					</div>
					<!-- /ad widget -->

					<!-- social widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Social Media</h2>
						</div>
						<div class="social-widget">
							<ul>
								<li>
									<a href="#" class="social-facebook">
										<i class="fa fa-facebook"></i>
										<span>21.2K<br>Followers</span>
									</a>
								</li>
								<li>
									<a href="#" class="social-twitter">
										<i class="fa fa-twitter"></i>
										<span>10.2K<br>Followers</span>
									</a>
								</li>
								<li>
									<a href="#" class="social-google-plus">
										<i class="fa fa-google-plus"></i>
										<span>5K<br>Followers</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- /social widget -->

					<!-- category widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Categories</h2>
						</div>
						<div class="category-widget">
							<ul>
								<li><a href="#">Lifestyle <span>451</span></a></li>
								<li><a href="#">Fashion <span>230</span></a></li>
								<li><a href="#">Technology <span>40</span></a></li>
								<li><a href="#">Travel <span>38</span></a></li>
								<li><a href="#">Health <span>24</span></a></li>
							</ul>
						</div>
					</div>
					<!-- /category widget -->

					<!-- newsletter widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Newsletter</h2>
						</div>
						<div class="newsletter-widget">
							<form>
								<p>Nec feugiat nisl pretium fusce id velit ut tortor pretium.</p>
								<input class="input" name="newsletter" placeholder="Enter Your Email">
								<button class="primary-button">Subscribe</button>
							</form>
						</div>
					</div>
					<!-- /newsletter widget -->

					<!-- post widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Popular Posts</h2>
						</div>
						<!-- post -->
						<div class="post post-widget">
							<a class="post-img" href="blog-post.html"><img src="./img/widget-3.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-category">
									<a href="category.html">Lifestyle</a>
								</div>
								<h3 class="post-title"><a href="blog-post.html">Ne bonorum praesent cum, labitur persequeris definitionem quo cu?</a></h3>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="post post-widget">
							<a class="post-img" href="blog-post.html"><img src="./img/widget-2.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-category">
									<a href="category.html">Technology</a>
									<a href="category.html">Lifestyle</a>
								</div>
								<h3 class="post-title"><a href="blog-post.html">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="post post-widget">
							<a class="post-img" href="blog-post.html"><img src="./img/widget-4.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-category">
									<a href="category.html">Health</a>
								</div>
								<h3 class="post-title"><a href="blog-post.html">Postea senserit id eos, vivendo periculis ei qui</a></h3>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="post post-widget">
							<a class="post-img" href="blog-post.html"><img src="./img/widget-5.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-category">
									<a href="category.html">Health</a>
									<a href="category.html">Lifestyle</a>
								</div>
								<h3 class="post-title"><a href="blog-post.html">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
							</div>
						</div>
						<!-- /post -->
					</div>
					<!-- /post widget -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- ad -->
				<div class="col-md-12 section-row text-center">
					<a href="#" style="display: inline-block;margin: auto;">
						<img class="img-responsive" src="./img/ad-2.jpg" alt="">
					</a>
				</div>
				<!-- /ad -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-4">
					<div class="section-title">
						<h2 class="title">Lifestyle</h2>
					</div>
					<!-- post -->
					<div class="post">
						<a class="post-img" href="blog-post.html"><img src="./img/post-6.jpg" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Fashion</a>
								<a href="category.html">Lifestyle</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">Postea senserit id eos, vivendo periculis ei qui</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">John Doe</a></li>
								<li>20 April 2018</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
				<div class="col-md-4">
					<div class="section-title">
						<h2 class="title">Fashion</h2>
					</div>
					<!-- post -->
					<div class="post">
						<a class="post-img" href="blog-post.html"><img src="./img/post-5.jpg" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Lifestyle</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">John Doe</a></li>
								<li>20 April 2018</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
				<div class="col-md-4">
					<div class="section-title">
						<h2 class="title">Health</h2>
					</div>
					<!-- post -->
					<div class="post">
						<a class="post-img" href="blog-post.html"><img src="./img/post-9.jpg" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Lifestyle</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">John Doe</a></li>
								<li>20 April 2018</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
			</div>
			<!-- /row -->

			<!-- row -->
			<div class="row">
				<div class="col-md-4">
					<!-- post -->
					<div class="post post-widget">
						<a class="post-img" href="blog-post.html"><img src="./img/widget-1.jpg" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Travel</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">Postea senserit id eos, vivendo periculis ei qui</a></h3>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="post post-widget">
						<a class="post-img" href="blog-post.html"><img src="./img/widget-2.jpg" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Technology</a>
								<a href="category.html">Lifestyle</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="post post-widget">
						<a class="post-img" href="blog-post.html"><img src="./img/widget-3.jpg" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Lifestyle</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
						</div>
					</div>
					<!-- /post -->
				</div>
				<div class="col-md-4">
					<!-- post -->
					<div class="post post-widget">
						<a class="post-img" href="blog-post.html"><img src="./img/widget-4.jpg" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Health</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">Ne bonorum praesent cum, labitur persequeris definitionem quo cu?</a></h3>
						</div>
					</div>
					<!-- /post -->

					<!-- /post -->
					<div class="post post-widget">
						<a class="post-img" href="blog-post.html"><img src="./img/widget-5.jpg" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Health</a>
								<a href="category.html">Lifestyle</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="post post-widget">
						<a class="post-img" href="blog-post.html"><img src="./img/widget-6.jpg" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Fashion</a>
								<a href="category.html">Lifestyle</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">Postea senserit id eos, vivendo periculis ei qui</a></h3>
						</div>
					</div>
					<!-- /post -->
				</div>
				<div class="col-md-4">
					<!-- post -->
					<div class="post post-widget">
						<a class="post-img" href="blog-post.html"><img src="./img/widget-8.jpg" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Travel</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="post post-widget">
						<a class="post-img" href="blog-post.html"><img src="./img/widget-9.jpg" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Technology</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">Postea senserit id eos, vivendo periculis ei qui</a></h3>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="post post-widget">
						<a class="post-img" href="blog-post.html"><img src="./img/widget-10.jpg" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Lifestyle</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
						</div>
					</div>
					<!-- /post -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					<!-- post -->
					<div class="post post-row">
						<a class="post-img" href="blog-post.html"><img src="./img/post-13.jpg" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Travel</a>
								<a href="category.html">Lifestyle</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">John Doe</a></li>
								<li>20 April 2018</li>
							</ul>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="post post-row">
						<a class="post-img" href="blog-post.html"><img src="./img/post-1.jpg" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Travel</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">John Doe</a></li>
								<li>20 April 2018</li>
							</ul>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="post post-row">
						<a class="post-img" href="blog-post.html"><img src="./img/post-5.jpg" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Lifestyle</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">Postea senserit id eos, vivendo periculis ei qui</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">John Doe</a></li>
								<li>20 April 2018</li>
							</ul>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="post post-row">
						<a class="post-img" href="blog-post.html"><img src="./img/post-6.jpg" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Fashion</a>
								<a href="category.html">Lifestyle</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">John Doe</a></li>
								<li>20 April 2018</li>
							</ul>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="post post-row">
						<a class="post-img" href="blog-post.html"><img src="./img/post-7.jpg" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Health</a>
								<a href="category.html">Lifestyle</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">Ne bonorum praesent cum, labitur persequeris definitionem quo cu?</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">John Doe</a></li>
								<li>20 April 2018</li>
							</ul>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
						</div>
					</div>
					<!-- /post -->

					<div class="section-row loadmore text-center">
						<a href="#" class="primary-button">Load More</a>
					</div>
				</div>
				<div class="col-md-4">
					<!-- galery widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Instagram</h2>
						</div>
						<div class="galery-widget">
							<ul>
								<li><a href="#"><img src="./img/galery-1.jpg" alt=""></a></li>
								<li><a href="#"><img src="./img/galery-2.jpg" alt=""></a></li>
								<li><a href="#"><img src="./img/galery-3.jpg" alt=""></a></li>
								<li><a href="#"><img src="./img/galery-4.jpg" alt=""></a></li>
								<li><a href="#"><img src="./img/galery-5.jpg" alt=""></a></li>
								<li><a href="#"><img src="./img/galery-6.jpg" alt=""></a></li>
							</ul>
						</div>
					</div>
					<!-- /galery widget -->

					<!-- Ad widget -->
					<div class="aside-widget text-center">
						<a href="#" style="display: inline-block;margin: auto;">
							<img class="img-responsive" src="./img/ad-1.jpg" alt="">
						</a>
					</div>
					<!-- /Ad widget -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- FOOTER -->
	@include('include.front.footer')
	<!-- /FOOTER -->




@endsection
