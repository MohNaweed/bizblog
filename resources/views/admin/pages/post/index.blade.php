@extends('admin.layouts.vertical')


@section('css')
<!-- plugin css -->
<link href="{{ URL::asset('admin/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
@endsection

@section('breadcrumb')
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Shreyu</a></li>
                <li class="breadcrumb-item"><a href="">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page">Advanced</li>
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">Advanced Tables</h4>
    </div>
</div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-1">All Posts</h4>
                    <a href="{{route('posts.create')}}"><i class="fas fa-plus fa-2x"></i></a>

                    <table id="basic-datatable" class="table dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Categories</th>
                                <th>User Name</th>
                                <th>#Comments</th>
                                <th>Actions</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach($posts as $post)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$post->title}}</td>
                                <td>
                                    @foreach($post->categories as $postCat)
                                        <span class="badge badge-primary"> {{$postCat->name  }}</span>
                                    @endforeach
                                </td>
                                <td>{{$post->user->name}}</td>
                                <td>{{count($post->comments)    }}</td>
                                <td style="padding: 0px 30px">
                                    <a href="{{route('posts.edit',$post->slug)}}"><i class="fas fa-edit"></a></i>
                                    <a href="" class="float-right" data-toggle="modal" onclick="handleDeleteButton('{{$post->slug}}')"><i class="fas fa-trash"></a></i>
                                </td>
                                <td>{!! Str::limit($post->body, 100) !!}</td>
                                <th><img src="{{asset('storage/smallPic/'. $post->image['path'])}}" /></th>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->


    <!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="" method="Post" id="deleteForm">
            @csrf
            @method('DELETE')
            <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="deleteModalLabel">Delete Post</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  Are you really want to delete this post?
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-danger">Delete Post</button>
                </div>
              </div>
        </form>
    </div>
  </div>
@endsection

@section('script')
  <script>
      function handleDeleteButton(slug){
          $('#deleteModal').modal("show");
          document.getElementById('deleteForm').action = '/dashboard/posts/'+ slug;
      }


  </script>
<!-- datatable js -->
<script src="{{ URL::asset('admin/assets/libs/datatables/datatables.min.js') }}"></script>
@endsection

@section('script-bottom')
<!-- Datatables init -->
<script src="{{ URL::asset('admin/assets/js/pages/datatables.init.js') }}"></script>
@endsection
