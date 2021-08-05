@extends('layouts.front.app')

@section('content')
{{-- include header --}}
@include('include.front.header')
{{-- end header --}}

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div id="hot-post" class="row hot-post">
				<div class="col-md-8 hot-post-left">
<!-- post -->
<div class="post post-thumb">
<a class="post-img" href="{{route('front.single-page-posts', ['slug' => $first_post->slug])}}"><img src="{{$first_post->photo}}" alt=""></a>
<div class="post-body">
<div class="post-category">
<a href="{{route('front.category', ['id' => $first_post->category->id])}}">{{$first_post->category->name}}</a>
</div>
<h3 class="post-title title-lg"><a href="#">{{$first_post->title}}</a></h3>
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


                        @foreach ($lasted_posts as $item_posts)
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
								<h2 class="title">{{$category_one->name ?? ''}}</h2>
							</div>
						</div>
                        <!-- post -->
                        @foreach ($category_one->post()->orderBy('created_at','desc')->take(3)->get() as $post)
						<div class="col-md-4">
							<div class="post post-sm">
								<a class="post-img" href="blog-post.html"><img src="{{$post->photo}}" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="category.html">{{$post->category->name}}</a>
									</div>
									<h3 class="post-title title-sm"><a href="blog-post.html">{{$post->title}}.</a></h3>
									<ul class="post-meta">
                                        <li>{{$post->created_at->diffForHumans()}}</li>
									</ul>
								</div>
							</div>
                        </div>
                        @endforeach
						<!-- /post -->
					</div>
					<!-- /row -->
{{-- start category posts --}}

                <!-- row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2 class="title">{{$category_two->name}}</h2>
                            </div>
                        </div>
                        <!-- post -->
                        @foreach ($category_two->post()->orderBy('created_at','desc')->take(3)->get() as $post)
                            <div class="col-md-4">
                                <div class="post post-sm">
                                    <a class="post-img" href="blog-post.html"><img src="{{$post->photo ?? ''}}" alt=""></a>
                                    <div class="post-body">
                                        <div class="post-category">
                                            <a href="category.html">{{$post->category->name}}</a>
                                        </div>
                                        <h3 class="post-title title-sm"><a href="blog-post.html">{{$post->title}}.</a></h3>
                                        <ul class="post-meta">
                                            <li>{{$post->created_at->diffForHumans()}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                    <!-- /post -->
                    </div>
                    <!-- /row -->


{{--   start category 4  --}}

                <!-- row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2 class="title">{{$category_three->name}}</h2>
                            </div>
                        </div>
                        <!-- post -->
                        @foreach ($category_three->post()->orderBy('created_at','desc')->take(3)->get() as $post)
                            <div class="col-md-4">
                                <div class="post post-sm">
                                    <a class="post-img" href="blog-post.html"><img src="{{$post->photo}}" alt=""></a>
                                    <div class="post-body">
                                        <div class="post-category">
                                            <a href="category.html">{{$post->category->name}}</a>
                                        </div>
                                        <h3 class="post-title title-sm"><a href="blog-post.html">{{$post->title}}.</a></h3>
                                        <ul class="post-meta">
                                            <li>{{$post->created_at->diffForHumans()}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                    @endforeach
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


<!-- category widget -->
<div class="aside-widget">
<div class="section-title">
<h2 class="title">Categories</h2>
</div>
<div class="category-widget">
<ul>
@foreach ($get_all_category as $category)
<li><a href="#">{{$category->name}} <span>20</span></a></li>
@endforeach
</ul>
</div>
</div>
<!-- /category widget -->

<!-- newsletter widget -->
<div class="aside-widget">
<div class="section-title">
<h2 class="title">Contact Me</h2>
</div>
<div class="newsletter-widget">
<form id="contactForm">
<div class="mt-3 mb-3">
<h4>Can you send message</h4>
</div>
<div><input class="input" name="name" placeholder="Enter Your name"></div>
<div><input class="input" name="email" placeholder="Enter Your Email"></div>
<div><input class="input" name="mobile_number" placeholder="Enter You mobile number"></div>
<div><input class="input" name="subject" placeholder="Subject"></div>
<div class="mt-2 mb-2"><textarea name="message" class="form-control" placeholder="Enter Your Message" rows="3"></textarea></div>
<button id="submit" class="primary-button mt-4 mb-4">Send Message</button>
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

	<!-- FOOTER -->
	@include('include.front.footer')
	<!-- /FOOTER -->



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

    <script type="text/javascript">

     $('#contactForm').on('submit',function(e){

         e.preventDefault();

         let name            = $('#name').val();
         let email           = $('#email').val();
         let mobile_number   = $('#mobile_number').val();
         let subject         = $('#subject').val();
         let message         = $('#message').val();

         $.ajax({
           url: "{{route('contact')}}",
           type:"POST",
           data:{
             "_token": "{{ csrf_token() }}",
             name:name,
             email:email,
             mobile_number:mobile_number,
             subject:subject,
             message:message,
           },
           success:function(response){
             console.log(response);
           },
          });
         });
       </script>

@endsection
