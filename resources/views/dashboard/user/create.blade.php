@extends('layouts.dashboard.app')
@section('content')
<div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page body start -->
            <div class="page-body">

            {{-- check errors  --}}
            @include('errors._check_error')
            {{-- end check erros  --}}

                <div class="row">
                <div class="col-md-6">
                <div class="card">
                <div class="card-header"><h5>Add Users</h5></div>

                <div class="card-block">
                <form action="{{route('dashboard.user.store')}}" method="POST" enctype="multipart/form-data" class="form-material">
                {{csrf_field()}}
                {{method_field('post')}}


                <div class="form-group form-default">
                <input value="{{old('name')}}" type="name" name="name" class="form-control" >
                <span class="form-bar"></span>
                <label class="float-label">name</label>
                </div>

                <div class="form-group form-default">
                <input value="{{old('email')}}" type="email" name="email" class="form-control" >
                <span class="form-bar"></span>
                <label class="float-label">email</label>
                </div>

                <div class="form-group form-default">
                <input type="password" name="password" class="form-control">
                <span class="form-bar"></span>
                <label class="float-label">password</label>
                </div>

<!-- Row start -->
<div class="row">
<div class="col-lg-12 col-xl-12 ">
<div class="sub-title">@lang('site.permissions')</div>
<!-- Nav tabs -->

@php
$models = ['users','categories','posts'];
$maps =['create','read','update','delete'];
@endphp

<ul class="nav nav-tabs  tabs" role="tablist">

@foreach ($models as $index=> $model)
<li class="nav-item {{$index ==0 ? 'active':''}}"><a class="nav-link active" data-toggle="tab" href="#{{$model}}" role="tab">@lang('site.'.$model)</a></li>
@endforeach

</ul>
            <!-- Tab panes -->
<div class="tab-content tabs card-block">
@foreach ($models as $index=> $model)

<div  class="tab-pane {{$index ==0 ?'active' : ''}}" id="{{$model}}">

    <div class="tab-pane {{$index ==0 ?'active' : ''}}" id="{{$model}}"></div>

    @foreach ($maps as $map)
    <label>  <input name="permissions[]" type="checkbox" value="{{$map.'_'.$model}}"> @lang('site.'.$map) </label>
    @endforeach

</div>

@endforeach

</div>
</div>
</div>
    <!-- Row end -->






                <button type="submit" class="btn btn-primary">Add User</button>

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
