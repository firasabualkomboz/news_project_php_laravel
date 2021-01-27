@extends('layouts.dashboard.app')

@section('content')





<div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">

            <div class="alert alert-success" role="alert">{{session('msg')}}</div>
            <div class="alert alert-warning" role="alert">{{session('msg_delete')}}</div>

            <!-- Page-body start -->
            <div class="page-body">
                <!-- Basic table card start -->
                <div class="card">
                    <div class="card-header">
                        <h5>Users</h5>

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
                                    <th>name</th>
                                    <th>email</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $index =>  $user)
                                <tr>
                                    <th scope="row">{{$index}}</th>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td><button class="btn btn-primary"> <a href="{{ route('dashboard.user.edit', $user->id) }}"> <i class="fa fa-edit"></i> </a> </button>

                                <form action="{{ route('dashboard.user.destroy', $user->id) }}" method="post" style="display: inline-block">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <button type="submit"  class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </form><!-- end of form -->

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
