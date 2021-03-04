@extends('layouts.front.app')

@section('content')



    {{-- include header --}}
    @include('include.front.header')
    {{-- end header --}}

{{--start category section--}}

    <!-- HEADER -->
    <header id="header">


        <!-- PAGE HEADER -->
        <div class="page-header">
            <div class="page-header-bg" style="background-image: url('./img/header-2.jpg');" data-stellar-background-ratio="0.5"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-1 col-md-10 text-center">
                        <h1 class="text-uppercase">{{$title}}</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- /PAGE HEADER -->
    </header>
    <!-- /HEADER -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-8">
                    <h2 class="post-title">All posts </h2>
                    @foreach($category->post as $item_post)
                        <!-- post -->
                            <div class="post post-row">
                                <a class="post-img" href="blog-post.html"><img src="{{$item_post->photo}}" alt=""></a>
                                <div class="post-body">
                                    <div class="post-category">
                                        <a href="category.html">{{$category->name}}</a>
                                    </div>
                                    <h3 class="post-title"><a href="blog-post.html">{{$item_post->title}}</a></h3>
                                    <ul class="post-meta">
                                        <li>{{$item_post->created_at->diffForHumans()}}</li>
                                    </ul>
                                    <p>{{$item_post->content}}</p>
                                </div>
                            </div>
                            <!-- /post -->
                    @endforeach

                    <div class="section-row loadmore text-center">
                        <a href="#" class="primary-button">Load More</a>
                    </div>
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
                                @foreach($get_all_category as $category)
                                    <li><a href="#">{{$category->name}} <span>0</span></a></li>
                                @endforeach


                            </ul>
                        </div>
                    </div>
                    <!-- /category widget -->

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

{{--    end category section --}}
    <!-- FOOTER -->
    @include('include.front.footer')
    <!-- /FOOTER -->




@endsection
