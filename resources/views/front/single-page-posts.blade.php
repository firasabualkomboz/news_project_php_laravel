@extends('layouts.front.app')

@section('content')
    {{-- include header --}}
    @include('include.front.header')
    {{-- end header --}}

{{--    start single page --}}

    <!-- HEADER -->
    <header id="header">
        <!-- PAGE HEADER -->
        <div id="post-header" class="page-header">
            <div class="page-header-bg" style="background-image: url('{{$post->photo}}');" data-stellar-background-ratio="0.5"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <div class="post-category">
                            <a href="category.html">{{$post->category->name}}</a>
                        </div>
                        <h1>{{$post->title}}</h1>
                        <ul class="post-meta">
                            <li><a href="author.html">John Doe</a></li>
                            <li>{{$post->created_at->diffForHumans()}}</li>
                            <li><i class="fa fa-comments"></i> 3</li>
                            <li><i class="fa fa-eye"></i> 807</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /PAGE HEADER -->
    </header>
    <!-- /HEADER -->

    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-8">


                    <!-- post content -->
                    <div class="section-row">
                        <h3>{{$post->title}}</h3>
                        <p>{{$post->content}}</p>

                    </div>
                    <!-- /post content -->

                    <!-- post tags -->
                    <div class="section-row">
                        <div class="post-tags">
                            <ul>
                                <li>TAGS:</li>
                                @foreach($get_all_tags as $tag)
                                    <li><a href="#">{{$tag->tag}}</a></li>
                                @endforeach


                            </ul>
                        </div>
                    </div>
                    <!-- /post tags -->

                    <!-- post next -->
                    <div class="section-row">
                        <div class="post-share">
                            @if($prev)
                                <a href="{{route('front.single-page-posts', ['slug' => $prev->slug])}}" class="social-facebook"><i class="fa fa-arrow-left"></i><span>{{$prev->title}}</span></a>
                            @endif
                            @if($next)
                                <a href="{{route('front.single-page-posts', ['slug' => $next->slug])}}" class="social-facebook"><i class="fa fa-arrow-right"></i><span>{{$next->title}}</span></a>
                            @endif

                        </div>
                    </div>
                    <!-- /post next -->

                @include('include.front.disqus')

                    <!-- /related post -->
                    <div>
                        <div class="section-title">
                            <h3 class="title">Related Posts</h3>
                        </div>
                        <div class="row">
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
                                    <a class="post-img" href="blog-post.html"><img src="./img/post-6.jpg" alt=""></a>
                                    <div class="post-body">
                                        <div class="post-category">
                                            <a href="category.html">Fashion</a>
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
                                    <a class="post-img" href="blog-post.html"><img src="./img/post-7.jpg" alt=""></a>
                                    <div class="post-body">
                                        <div class="post-category">
                                            <a href="category.html">Health</a>
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
                    </div>
                    <!-- /related post -->

                </div>
                <div class="col-md-4">
                    <!-- ad widget -->
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

                                @foreach($get_all_category as $category)
                                    <li><a href="#">{{$category->name}} <span>0</span></a></li>
                                @endforeach
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
                                <input class="input" placeholder="Enter Your Email">
                                <button class="primary-button">Subscribe</button>
                            </form>
                        </div>
                    </div>
                    <!-- /newsletter widget -->



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

    {{--end single page --}}
    <!-- FOOTER -->
    @include('include.front.footer')
    <!-- /FOOTER -->
@endsection
