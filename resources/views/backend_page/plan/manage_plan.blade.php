@extends('layouts.backend.app')
@section('title')
 manage plan
@endsection
@section('plan')
active
@endsection
@section('manage_plan')
active
@endsection

@section('Content_header')
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Plan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('create/plan') }}">Create Plan</a></li>
              <li class="breadcrumb-item active">Manage Plan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
@endsection
@section('content')
<!-- /.card -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"></h3>
                   @if(session()->has('message'))
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session()->get('message') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                    @elseif (session()->has('message_warring'))
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <strong>{{ session()->get('message_warring') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                    @endif
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Serial</th>
                    <th>Plan Name</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Create Date</th>
                    <th>Update Date</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

                  @foreach($plan as $serial=>$show)
                    <tr>
                    <td>{{ $serial +1 }}</td>
                    <td>{{$show->plan}}</td>
                    <td>{{$show->title}}</td>
                    <td>{{$show->price}}</td>
                    <td>{{$show->created_at->format('Y-m-d h:i:s')}}</td>
                    <td>{{$show->updated_at->format('Y-m-d h:i:s')}}</td>
                    <td>
                      <a class="h4 text-danger mr-2" type="submit" onclick="deletecontent({{ $show->id  }})">
                          <i class="fas fa-trash-alt"></i>
                      </a>
                    <form id="delete-form-{{ $show->id  }}"
                     action="{{ route('delete/plan',$show->id)}}" method="get" style="display: none;">
                      @csrf

                    </form>

                    <a href="{{ route('edit/plan', $show->id)}}" class="h4 text-success"> <i class="fa fa-pencil-alt"></i> </a>
                   </td>
                  </tr>
                  @endforeach




                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Serial</th>
                    <th>Plan Name</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Create Date</th>
                    <th>Update Date</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
@endsection

@push('js')


@endpush
