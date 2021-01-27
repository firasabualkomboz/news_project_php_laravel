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
                            <div class="card-header">
                                <h5>Edit Category {{$category->name}}</h5>
                                <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->

                            </div>
                            <div class="card-block">
                                <form action="{{route('dashboard.category.update',$category->id)}}" method="POST"  class="form-material">
                                    {{csrf_field()}}
                                    {{method_field('put')}}
                                    <div class="form-group form-default">
                                        <input type="title" name="name" value="{{$category->name}}" class="form-control" required="">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Name</label>
                                    </div>

                                    <button class="btn btn-primary">Update Category</button>
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
    <div id="styleSelector">

    </div>
</div>

@endsection
