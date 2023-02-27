@extends('layouts.backend.app')
@section('title')
create blog category
@endsection
@section('category')
active
@endsection
@section('create_category')
active
@endsection

@section('Content_header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create Blog Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('manage/blog/category') }}">Manage Blog Category</a></li>
              <li class="breadcrumb-item active">Create Blog Category</li>
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
                <h3 class="card-title">Create Blog Category</h3>
              </div>
             <!-- /.card-header -->
              <!-- form start -->

              <form id="quickForm" action="{{ route('store/blog/category') }}"  method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Category Name</label>
                    <input type="text" name="category_name" class="form-control @error('category_name') is-invalid @enderror" id="name" placeholder="Category Name" >
                    @error('category_name')
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
