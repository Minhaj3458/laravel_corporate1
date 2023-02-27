
@extends('layouts.backend.app')
@section('title')
create blog
@endsection
@section('blog')
active
@endsection
@section('create_blog')
active
@endsection

@section('Content_header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create Blog </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('manage/blog') }}">Manage Blog</a></li>
              <li class="breadcrumb-item active">Create Blog</li>
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
                <h3 class="card-title">Create Blog</h3>
              </div>
             <!-- /.card-header -->
              <!-- form start -->

              <form id="quickForm" action="{{ route('store/blog') }}"  method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Blog Category Name</label>
                        <select name="blog_category_id" class="form-control select2 @error('blog_category_id') is-invalid @enderror" style="width: 100%;">
                            @foreach ( $blog_cat as $show )
                              <option value="{{$show->id}}">{{ $show->category_name }}</option>
                            @endforeach
                        </select>
                        @error('blog_category_id')
                        <div class="alert alert-danger alert-dismissible fade show" style="padding:5px;" role="alert">
                            <strong>{{ $message }}</strong>
                            <button type="button" class="close" style="padding:5px; color:white !important;" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true" style="color:white !important;">&times;</span>
                           </button>
                        </div>
                        @enderror
                    </div>
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
                    <label for="name">Image</label>
                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="name" placeholder="Slider" >
                    @error('image')
                    <div class="alert alert-danger alert-dismissible fade show" style="padding:5px;" role="alert">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="close" style="padding:5px; color:white !important;" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true" style="color:white !important;">&times;</span>
                       </button>
                    </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" data-placeholder="Enter Description" cols="4" rows="4" class="form-control @error('description') is-invalid @enderror" maxlength="300"></textarea>
                    @error('description')
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
