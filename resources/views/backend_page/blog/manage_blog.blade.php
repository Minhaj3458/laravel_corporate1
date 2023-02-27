@extends('layouts.backend.app')
@section('title')
 manage blog
@endsection
@section('blog')
active
@endsection
@section('manage_blog')
active
@endsection

@section('Content_header')
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Blog</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('create/blog') }}">Create Blog</a></li>
              <li class="breadcrumb-item active">Manage Blog</li>
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
                    <th>User Name</th>
                    <th>Blog Category Name</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Create Date</th>
                    <th>Update Date</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

                  @foreach($blog as $serial=>$show)
                    <tr>
                    <td>{{ $serial +1 }}</td>
                    <td>{{$show->user->name}}</td>
                    <th>{{$show->blog_Category->category_name}}</th>
                    <td>{{$show->title}}</td>
                    <td>{{Str::limit($show->description, 50)}}</td>
                    <td>
                        <img class="img-fluid img-thumbnail" src="{{asset('frontend/img/blog/'.$show->image)}}" width="100" height="100" alt="img">
                    </td>
                    <td>{{$show->created_at->format('Y-m-d h:i:s')}}</td>
                    <td>{{$show->updated_at->format('Y-m-d h:i:s')}}</td>
                    <td>
                      <a class="h4 text-danger mr-2" type="submit" onclick="deletecontent({{ $show->id  }})">
                          <i class="fas fa-trash-alt"></i>
                      </a>
                    <form id="delete-form-{{ $show->id }}"
                     action="{{ route('delete/blog',$show->id)}}" method="get" style="display: none;">
                      @csrf

                    </form>
                    <a href="{{ route('edit/blog', $show->id)}}" class="h4 text-success"> <i class="fa fa-pencil-alt"></i> </a>
                   </td>
                  </tr>
                  @endforeach




                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Serial</th>
                    <th>User Name</th>
                    <th>Blog Category Name</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
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
