@extends('layouts.backend.app')
@section('title')
Update pricing plan
@endsection
@section('pricing_plan')
active
@endsection
@section('create_pricing_plan')
active
@endsection

@section('Content_header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Pricing Plan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('manage/pricing_plan') }}">Manage Pricing Plan</a></li>
              <li class="breadcrumb-item active">Update Pricing Plan</li>
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
                <h3 class="card-title">Update Pricing Plan</h3>
              </div>
             <!-- /.card-header -->
              <!-- form start -->

              <form id="quickForm" action="{{ route('update/pricing_plan',$pricing_plan->id) }}"  method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="name">Plan Name</label>
                                <select name="plan_id" class="form-control select2" style="width: 100%;">
                                    @foreach ( $plan as $show )
                                      <option value="{{$show->id}}" @if ($show->id == $pricing_plan->plan_id) selected
                                      @endif>{{$show->plan}}</option>
                                    @endforeach
                                </select>
                                @error('plan_id')
                                <div class="alert alert-danger alert-dismissible fade show" style="padding:5px;" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="close" style="padding:5px; color:white !important;" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true" style="color:white !important;">&times;</span>
                                   </button>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name">Features Name</label>
                                <input type="text" name="features_name" value="{{ $pricing_plan->features_name }}" class="form-control @error('features_name') is-invalid @enderror" id="name" placeholder="Features Name" >
                                @error('features_name')
                                <div class="alert alert-danger alert-dismissible fade show" style="padding:5px;" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="close" style="padding:5px; color:white !important;" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true" style="color:white !important;">&times;</span>
                                </button>
                                </div>
                                @enderror
                            </div>

                           <div class="form-group">
                               <label for="name">Feature Is Available</label>
                               <select name="feature_available" class="form-control @error('feature_available1') is-invalid @enderror" style="width: 100%;">
                                <option value="{{ $pricing_plan->feature_available }}">{{ $pricing_plan->feature_available }}</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                               </select>
                                @error('feature_available1')
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
