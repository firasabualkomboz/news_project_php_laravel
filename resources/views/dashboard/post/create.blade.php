@extends('layouts.dashboard.app')
@section('content')
<div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page body start -->
            <div class="page-body">

                <div class="row">
                <div class="col-md-6">
                <div class="card">
                <div class="card-header"><h5>Add Posts</h5></div>

                <div class="card-block">
                <form action="{{route('dashboard.post.store')}}" method="POST" enctype="multipart/form-data" class="form-material">
                {{csrf_field()}}
                {{method_field('post')}}

                <div class="form-group form-default">
                <span class="form-bar"></span>
                <label class="">category</label>
                <select class="form-control" name="category_id" id="category">
                @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
                </select>
                </div>

                <div class="form-group form-default">
                <span class="form-bar"></span>
                <label class="">Tags</label>
                <br>
                @foreach ($tags as $tag)
                <input class="" type="checkbox" name="tag[]"value="{{$tag->id}}">
                <label class="">{{$tag->tag}}</label>
                @endforeach
                </div>

                <div class="form-group form-default">
                <input type="title" name="title" class="form-control" required="">
                <span class="form-bar"></span>
                <label class="float-label">Title</label>
                </div>
                <div class="form-group form-default">
                <textarea class="form-control" name="content" required=""></textarea>
                <span class="form-bar"></span>
                <label for="content" class="float-label">Description</label>
                </div>

                <div class="form-group form-default">
                <input type="file" name="photo" class="form-control" required="" value="My value">
                </div>

                <button type="submit" class="btn btn-primary">Add Post</button>

                </form>

                </div>
                </div>
                </div>

                </div>

            </div>
            <!-- Page body end -->
        </div>
    </div>
    <!-- Main-body end -->

</div>


@endsection
