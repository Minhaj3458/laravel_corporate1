@extends('layouts.backend.app')
@section('title')
create social media
@endsection
@section('social_media')
active
@endsection
@section('create_social_media')
active
@endsection

@section('Content_header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create Social Media</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('manage/media') }}">Manage Social Media</a></li>
              <li class="breadcrumb-item active">Create Social Media</li>
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
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create  Social Media</h3>
              </div>
             <!-- /.card-header -->
              <!-- form start -->

              <form id="quickForm" action="{{ route('store/media') }}"  method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Facebook Link</label>
                    <input type="text" name="facebook" class="form-control" id="name" placeholder="Facebook Link" required >
                  </div>
                  <div class="form-group">
                    <label for="name">Twitter Link</label>
                    <input type="text" name="twitter" class="form-control" id="name" placeholder="Twitter Link" required >
                  </div>
                  <div class="form-group">
                    <label for="name">Instagram Link</label>
                    <input type="text" name="instagram" class="form-control" id="name" placeholder="Instagram Link" required >
                  </div>
                  <div class="form-group">
                    <label for="name">Youtube Link</label>
                    <input type="text" name="youtube" class="form-control" id="name" placeholder="Youtube Link" required >
                  </div>
                  <div class="form-group">
                    <label for="name">Linkdin Link</label>
                    <input type="text" name="linkdin" class="form-control" id="name" placeholder="Linkdin Link" required >
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
