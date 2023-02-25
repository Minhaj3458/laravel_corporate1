@extends('layouts.backend.app')
@section('title')
create about us
@endsection
@section('about')
active
@endsection
@section('create_about')
active
@endsection

@section('Content_header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update About Us</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('manage/about') }}">Manage About Us</a></li>
              <li class="breadcrumb-item active">Update About Us</li>
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
          <div class="col-md-12">
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
                <h3 class="card-title">Update About Us</h3>
              </div>
             <!-- /.card-header -->
              <!-- form start -->

              <form id="quickForm" action="{{ route('update/about',$about->id) }}"  method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Title</label>
                                <input type="text" name="title" value="{{ $about->title }}" class="form-control @error('title') is-invalid @enderror" id="name" placeholder="Title" >
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
                                <label for="name">Sub Title1</label>
                                <input type="text" name="sub_title1" value="{{ $about->sub_title1 }}" class="form-control @error('sub_title1') is-invalid @enderror" id="name" placeholder="Sub Title1" >
                                @error('sub_title1')
                                <div class="alert alert-danger alert-dismissible fade show" style="padding:5px;" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="close" style="padding:5px; color:white !important;" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true" style="color:white !important;">&times;</span>
                                   </button>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name">Sub Title2</label>
                                <input type="text" name="sub_title2" value="{{ $about->sub_title2 }}" class="form-control @error('sub_title2') is-invalid @enderror" id="name" placeholder="Sub Title2" >
                                @error('sub_title2')
                                <div class="alert alert-danger alert-dismissible fade show" style="padding:5px;" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="close" style="padding:5px; color:white !important;" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true" style="color:white !important;">&times;</span>
                                </button>
                                </div>
                                @enderror
                            </div>

                           <div class="form-group">
                               <label for="name">Sub Title3</label>
                               <input type="text" name="sub_title3" value="{{ $about->sub_title3 }}" class="form-control @error('sub_title3') is-invalid @enderror" id="name" placeholder="Sub Title3" >
                                @error('sub_title3')
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

                        <!-- /.card-body -->
                            <div class="card-footer">
                              <button type="submit" class="btn btn-primary h3">Update</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Sub Title4</label>
                                <input type="text" name="sub_title4" value="{{ $about->sub_title4 }}" class="form-control @error('sub_title4') is-invalid @enderror" id="name" placeholder="Sub Title4" >
                                @error('sub_title4')
                                <div class="alert alert-danger alert-dismissible fade show" style="padding:5px;" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="close" style="padding:5px; color:white !important;" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true" style="color:white !important;">&times;</span>
                                </button>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name">Number</label>
                                <input type="text" name="number" value="{{ $about->number }}" class="form-control @error('number') is-invalid @enderror" id="name" placeholder="Number" >
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
                                <label for="name">Image</label>
                                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="name" placeholder="Image" >
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
                                <label for="description"> About Us</label>
                                <textarea name="about" id="description" data-placeholder="Enter About Us" cols="4" rows="4" class="form-control @error('about') is-invalid @enderror" maxlength="300">{{ $about->about }}</textarea>
                                @error('about')
                                <div class="alert alert-danger alert-dismissible fade show" style="padding:5px;" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="close" style="padding:5px; color:white !important;" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true" style="color:white !important;">&times;</span>
                                   </button>
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
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
