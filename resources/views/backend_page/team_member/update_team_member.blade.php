@extends('layouts.backend.app')
@section('title')
Update team member
@endsection
@section('team_member')
active
@endsection
@section('create_team_member')
active
@endsection

@section('Content_header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Team Member</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('manage/team_member') }}">Manage Team Member</a></li>
              <li class="breadcrumb-item active">Update Team Member</li>
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
                <h3 class="card-title">Update Team Member</h3>
              </div>
             <!-- /.card-header -->
              <!-- form start -->

              <form id="quickForm" action="{{ route('update/team_member',$team_member->id ) }}"  method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" name="name" value="{{ $team_member->name }}" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Full Name" >
                                @error('name')
                                <div class="alert alert-danger alert-dismissible fade show" style="padding:5px;" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="close" style="padding:5px; color:white !important;" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true" style="color:white !important;">&times;</span>
                                   </button>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name">Designation</label>
                                <input type="text" name="designation" value="{{ $team_member->designation}}" class="form-control @error('designation') is-invalid @enderror" id="name" placeholder="Designation" >
                                @error('designation')
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




                           <div class="form-group mb-0">
                                {{-- <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                                <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>.</label>
                                </div> --}}
                           </div>

                        <!-- /.card-body -->
                            <div class="card-footer">
                              <button type="submit" class="btn btn-primary h3">Update </button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Facebook Link</label>
                                <input type="text" name="facebook" value="{{ $team_member->facebook }}"  class="form-control @error('facebook') is-invalid @enderror" id="name" placeholder="Facebook Link" >
                                @error('facebook')
                                <div class="alert alert-danger alert-dismissible fade show" style="padding:5px;" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="close" style="padding:5px; color:white !important;" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true" style="color:white !important;">&times;</span>
                                </button>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name">Instagram Link</label>
                                <input type="text" name="instagram" value="{{ $team_member->instagram }}" class="form-control @error('instagram') is-invalid @enderror" id="name" placeholder="Instagram Link" >
                                @error('instagram')
                                <div class="alert alert-danger alert-dismissible fade show" style="padding:5px;" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="close" style="padding:5px; color:white !important;" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true" style="color:white !important;">&times;</span>
                                </button>
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="name">Twitter Link</label>
                                <input type="text" name="twitter" value="{{ $team_member->twitter }}" class="form-control @error('twitter') is-invalid @enderror" id="name" placeholder="Twitter Link" >
                                @error('twitter')
                                <div class="alert alert-danger alert-dismissible fade show" style="padding:5px;" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="close" style="padding:5px; color:white !important;" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true" style="color:white !important;">&times;</span>
                                </button>
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="name">Linkedin Link</label>
                                <input type="text" name="linkedin" value="{{ $team_member->linkedin }}" class="form-control @error('linkedin') is-invalid @enderror" id="name" placeholder="Linkedin Link" >
                                @error('linkedin')
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
