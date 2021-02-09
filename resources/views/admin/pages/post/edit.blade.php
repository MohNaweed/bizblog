@extends('admin.layouts.vertical')


@section('css')
<!-- Summernote css -->
<link href="{{ URL::asset('admin/assets/libs/summernote/summernote.min.css') }}" rel="stylesheet" />
@endsection

@section('breadcrumb')
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Shreyu</a></li>
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editor</li>
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">Forms Editor</h4>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-1">Default Editor</h4>
                <p class="sub-header">Super simple wysiwyg editor on Bootstrap</p>
                <div id="summernote-editor">
                    <h6>This is an simple editable area.</h6>
                    <ul>
                        <li>
                            Select a text to reveal the toolbar.
                        </li>
                        <li>
                            Edit rich document on-the-fly, so elastic!
                        </li>
                    </ul>
                    <p>
                        End of simple area
                    </p>
                </div> <!-- end summernote-editor-->
            </div>
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>
<!-- end row-->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">Input Types</h4>
                <p class="sub-header">
                    Create Your New Post
                </p>

                <form class="form-horizontal" action="{{route('posts.update',$post->slug)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col">
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="simpleinput">Title</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}" placeholder="Insert The Title" onblur="generateSlugValue(this)">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-placeholder">Slug</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="Insert The Slug"
                                        id="slug" name="slug" value="{{$post->slug}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-textarea">Description</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" rows="5" id="example-textarea" name="body">{{$post->body}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-textarea">Images</label>
                                <div class="col-lg-10">
                                    <input type="file" rows="5" id="example-textarea" name="pics" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-2 offset-lg-2">
                                    <input type="submit" class="btn btn-secondary" value="Add Post">
                                </div>
                            </div>

                        </div>
                    </div>
                </form>

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->

@endsection

@section('script')
<script>
        function generateSlugValue(e){
            $('#slug').val(convertToSlug(e.value));

        }


        function convertToSlug(Text)
        {
            return Text
                .toLowerCase()
                .replace(/[^\w ]+/g,'')
                .replace(/ +/g,'-')
                ;
        }
    $(document).ready(function(){



    })
</script>


<!--Summernote js-->
<script src="{{ URL::asset('admin/assets/libs/summernote/summernote.min.js') }}"></script>
@endsection

@section('script-bottom')
<!-- Init js -->
<script src="{{ URL::asset('admin/assets/js/pages/form-editor.init.js') }}"></script>
@endsection
