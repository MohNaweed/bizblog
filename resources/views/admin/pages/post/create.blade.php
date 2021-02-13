@extends('admin.layouts.vertical')


@section('css')
<!-- Summernote css -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
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
                <h4 class="header-title mt-0">Input Types</h4>
                <p class="sub-header">
                    Create Your New Post
                </p>

                <form class="form-horizontal" action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="simpleinput">Title</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="title" name="title" value="" placeholder="Insert The Title" onblur="generateSlugValue(this)">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-placeholder">Slug</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="Insert The Slug"
                                        id="slug" name="slug">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-textarea">Description</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" rows="5" id="summernote" name="body"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-textarea">Images</label>
                                <div class="col-lg-10">
                                    <input type="file" rows="5" id="example-textarea" name="pic" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label for="exampleFormControlSelect2">Categories</label>
                                <div class="col-lg-10">
                                    <select multiple class="form-control" id="exampleFormControlSelect2" name="categories[]">
                                        @foreach($categories as $cat)
                                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                                         @endforeach
                                    </select>
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

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<!--Summernote js-->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script>
    $('#summernote').summernote({
    placeholder: 'Insert the post Description',
    tabsize: 2,
    height: 100
    });
</script>

@endsection

@section('script-bottom')
<!-- Init js -->
<script src="{{ URL::asset('admin/assets/js/pages/form-editor.init.js') }}"></script>
@endsection
