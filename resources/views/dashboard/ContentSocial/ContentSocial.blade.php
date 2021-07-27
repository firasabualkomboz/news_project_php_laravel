@extends('layouts.dashboard.app')

@section('content')

<div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">

            {{-- check any content social  --}}
            @if (count($contentSocial)==0)
            <div class="alert alert-danger" role="alert">NO Content Social !</div>
            @endif
@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }} 😡 </li>
@endforeach
</ul>
</div>
@endif

@if (session()->has('msg'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session()->get('msg') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if (session()->has('msg_delete'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{ session()->get('msg_delete') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif


            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Add Content Socail
                  </button>

            {{-- show all Content Social  --}}
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name Social</th>
                    <th scope="col">Url Page</th>
                    <th>Icon Url</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                        <?php $i=0 ?>
                      @foreach ($contentSocial as $i=>  $item_socail)
                      <tr>
                      <th scope="row">{{$i}}</th>
                      <td>{{$item_socail->name}}</td>
                      <td><a href="">{{$item_socail->url}}</a></td>
                      <td>icon</td>
                      <td>



                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop_edit">
                                <i class="fa fa-edit"></i>
                              </button>


                        <form action="{{route('dashboard.ContentSocail.destroy', $item_socail->id)}}" method="post" style="display: inline-block">
                            {{ csrf_field() }}
                            {{ method_field('delete') }}
                            <button type="submit"  class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        </form>

                      </td>
                    </tr>
                      @endforeach
               </tbody>
              </table>

            {{-- end Content Socail --}}

            <!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel"> Add Content Socail</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <form method="post" action="{{route('dashboard.ContentSocail.store')}}">

                {{csrf_field()}}
                {{method_field('post')}}
                <div class="mb-3">
                  <label  class="form-label">Name Social</label>
                  <input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Url Page</label>
                  <input type="text" class="form-control" name="url" id="url">
                </div>

                <div class="mb-3">
                    <label class="form-label">Icon Url</label>
                    <input type="file" class="form-control" name="icon" id="url">
                  </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>

              </form>
        </div>

      </div>
    </div>
  </div>



  <!-- Modal edit -->
  <div class="modal fade" id="staticBackdrop_edit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Edit Contact Social</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <form method="post" action="{{route('dashboard.ContentSocail.store')}}">

                {{csrf_field()}}
                {{method_field('post')}}
                <div class="mb-3">
                  <label  class="form-label">Name Social</label>
                  <input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Url Page</label>
                  <input type="text" class="form-control" name="url" id="url">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Update</button>
                  </div>

              </form>
        </div>

      </div>
    </div>
  </div>



        </div>
    </div>

</div>
@endsection
