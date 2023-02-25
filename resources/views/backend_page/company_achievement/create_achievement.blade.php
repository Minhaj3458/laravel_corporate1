@extends('layouts.backend.app')
@section('title')
create company achievement
@endsection
@section('achievement')
active
@endsection
@section('create_achievement')
active
@endsection

@section('Content_header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create Company Achievement </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('manage/achiev') }}">Manage Achievement</a></li>
              <li class="breadcrumb-item active">Create Achievement</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-1"></div>
          <div class="col-md-8">
            @if(session()->has('message'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session()->get('message') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
              </div>
            @endif
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create Achievement</h3>
              </div>
             <!-- /.card-header -->
              <!-- form start -->

              <form id="quickForm" action="{{ route('store/achiev') }}"  method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Title</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="name" placeholder="Title" >
                    @error('title')
                    <div class="alert alert-danger alert-dismissible fade show" style="padding:5px;" role="alert">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="close" style="padding:5px; color:white !important;" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true" style="color:white !important;">&times;</span>
                       </button>
                    </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="name">Total Count</label>
                    <input type="text" name="total_count" class="form-control @error('total_count') is-invalid @enderror" id="name" placeholder="Total Count" >
                    @error('total_count')
                    <div class="alert alert-danger alert-dismissible fade show" style="padding:5px;" role="alert">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="close" style="padding:5px; color:white !important;" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true" style="color:white !important;">&times;</span>
                       </button>
                    </div>
                    @enderror
                  </div>
                  <div class="form-group mb-0">
                    {{-- <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                      <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>.</label>
                    </div> --}}
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary h3">Create </button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection
