@extends('admin.admin_dashboard')
@section('content')

<div class="page-content">
    <div class="row profile-body">
        <div class="middle-wrapper">
            <div class="row">
                <div class="card col-md-10 col-lg-8 blog-card">
                    <div class="card-body">

                        <h2 class="blog-title">Create New Blog</h2>
                        <form id="myForm" method="POST" enctype="multipart/form-data" action="{{ route('blog.store') }}" class="forms-sample" >
                            @csrf

                            <div class="form-group">
                                <label for="title" class="blog-label">Title</label>
                                <input type="text" id="title" name="title" class="blog-input form-control">
                            </div>

                            <div class="form-group  mb-4">
                                <label for="author" class="blog-label">Author</label>
                                <input type="text" id="author" name="author" class="blog-input form-control">
                            </div>

                            <div class="form-group mb-4">
                                <label for="exampleInputUsername1" class="form-label">Photo</label>
                                <input class="form-control" name="photo" type="file" id="image">
                            </div>

                            <div class="form-group mb-4">
                                <label for="exampleInputUsername1" class="form-label"></label>
                                <img class="wd-200 rounded" id="showImage"
                                src="{{ url('upload/no_image.jpg') }}" alt="profile">
                            </div>

                            <div class="form-group">
                                <label for="intro" class="blog-label">Introduction</label>
                                <textarea type="text" id="content" name="intro" class="blog-input form-control" rows="5"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="content" class="blog-label">Content</label>
                                <textarea
                                name="content"
                                class="form-control"
                                id="tinymceExample"
                                rows="10"
                                ></textarea>
                                {{-- <textarea type="text" id="content" name="content" class="blog-input form-control" rows="5"></textarea> --}}
                            </div>

                            <button type="submit" class="btn btn-primary mt-4">Save Changes</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
$(document).ready(function (){
    $('#image').change(function(e){
        const reader = new FileReader();
        reader.onload = function(e){
            $('#showImage').attr('src', e.target.result);
        }
        reader.readAsDataURL(e.target.files['0']);
    });
        $('#myForm').validate({
            rules: {
                title: {
                    required : true,
                },
                author: {
                    required : true,
                },
                photo: {
                    required : true,
                },
                intro: {
                    required : true,
                },
                content: {
                    required : true,
                },
            },
            messages :{
                title: {
                    required : 'Please Enter Blog Title',
                },
                author: {
                    required : 'Enter Author Name',
                },
                photo: {
                    required : 'Add Photo',
                },
                intro: {
                    required : 'Please Add Introduction',
                },
                content: {
                    required : 'Please Add Content',
                },
            },
            errorElement : 'span',
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });

</script>

@endsection


