            @extends('layouts.dashboard.app')

            @section('content')

            <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">
            <div class="page-wrapper">
            {{-- CHAECK CATEGORY  --}}
            @if(count($posts )==0)<div class="alert alert-danger" role="alert">NO POST!</div>@endif
            {{--END  CHAECK CATEGORY  --}}
            <!-- Page-body start -->
            <div class="page-body">
            <!-- Basic table card start -->
            <div class="card">
            <div class="card-header">
            <h5>Posts</h5>

            <div class="card-header-right">
            <ul class="list-unstyled card-option">
            <li><i class="fa fa fa-wrench open-card-option"></i></li>
            <li><i class="fa fa-window-maximize full-card"></i></li>
            <li><i class="fa fa-minus minimize-card"></i></li>
            <li><i class="fa fa-refresh reload-card"></i></li>
            <li><i class="fa fa-trash close-card"></i></li>
            </ul>
            </div>
            </div>
            <div class="card-block table-border-style">
            <div class="table-responsive">
            <table class="table">
            <thead>
            <tr>
            <th>#</th>
            <th>Title</th>
            <th>Content</th>
            <th>Photo</th>
            <th>Category</th>
            <th>Action</th>
            </tr>
            </thead>

            <tbody>
            @foreach($posts as $index =>  $post)
            <tr>
            <th scope="row">{{$index}}</th>
            <td>{{$post->title}}</td>
            <td>{{$post->content}}</td>
            <td><img style="width: 10%" src="{{asset('uploads/posts/'. $post->photo) ?? 'NAN'}}" alt=""></td>
            <td>{{$post->category->name ?? 'NAN'}}</td>
            <td><button class="btn btn-outline-primary btn-sm"> <a href="{{ route('dashboard.post.edit', $post->id) }}"> <i class="fa fa-edit"></i> </a> </button>
            <form action="{{ route('dashboard.post.destroy', $post->id) }}" method="post" style="display: inline-block">
            {{ csrf_field() }}
            {{ method_field('delete') }}
            <button type="submit"  class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></button>
            </form><!-- end of form -->
            <button class="btn-sm btn btn-outline-warning"> <i  class="fa fa-eye" ></i></button>
            </td>

            </tr>
            @endforeach
            </tbody>

            </table>
            </div>
            </div>
            </div>
            <!-- Basic table card end -->
            <!-- Inverse table card start -->




            <!-- Background Utilities table end -->
            </div>
            <!-- Page-body end -->
            </div>
            </div>
            <!-- Main-body end -->

            </div>


            @endsection
