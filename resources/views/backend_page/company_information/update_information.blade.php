@extends('layouts.backend.app')
@section('title')
update company information
@endsection
@section('company_information')
active
@endsection
@section('create_company_information')
active
@endsection

@section('Content_header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Company Information </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('manage/info') }}">Manage Company Information</a></li>
              <li class="breadcrumb-item active">Update Company Information</li>
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
            {{-- @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
             </div>
           @endif --}}
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update Company Information</h3>
              </div>
             <!-- /.card-header -->
              <!-- form start -->

              <form id="quickForm" action="{{ route('update/info',$info->id) }}"  method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Company Logo1</label>
                    <input type="file" name="company_logo1" class="form-control @error('company_logo1') is-invalid @enderror" id="name" placeholder="Company Logo1" >
                    @error('company_logo1')
                    <div class="alert alert-danger alert-dismissible fade show" style="padding:5px;" role="alert">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="close" style="padding:5px; color:white !important;" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true" style="color:white !important;">&times;</span>
                       </button>
                    </div>
                    @enderror


                  </div>
                  <div class="form-group">
                    <label for="name">Company Logo2</label>
                    <input type="file" name="company_logo2" class="form-control" id="name" placeholder="Company Logo2">
                  </div>
                  <div class="form-group">
                    <label for="name">Email</label>
                    <input type="email" name="email" value={{$info->email}} class="form-control @error('email') is-invalid @enderror" id="name" placeholder="Email" >
                    @error('email')
                    <div class="alert alert-danger alert-dismissible fade show" style="padding:5px;" role="alert">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="close" style="padding:5px; color:white !important;" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true" style="color:white !important;">&times;</span>
                       </button>
                    </div>
                    @enderror

                  </div>
                  <div class="form-group">
                    <label for="name">Phone Number</label>
                    <input type="text" name="number" value={{$info->number}} class="form-control @error('number') is-invalid @enderror " id="name" placeholder="Number" >
                    @error('number')
                    <div class="alert alert-danger alert-dismissible fade show" style="padding:5px;" role="alert">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="close" style="padding:5px; color:white !important;" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true" style="color:white !important;">&times;</span>
                       </button>
                    </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="name">Address</label>
                    <input type="address" name="address" value={{$info->address}} class="form-control @error('address') is-invalid @enderror" id="name"  placeholder="Address" >
                    @error('address')
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
                  <button type="submit" class="btn btn-primary h3">Update</button>
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
