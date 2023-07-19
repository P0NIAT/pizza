@extends('admin.admin_dashboard')
@section('content')

<style>
    .blog-img{
        max-height: 150px;
        object-fit: cover
    }
    .blogs-img {
        max-height: 300px;
        object-fit: cover
    }
</style>

<div class="page-content">

    <div class="row profile-body">
      <div class="middle-wrapper">
        <div class="row">
          <div class="card col-md-10 col-lg-8 blog-card">
             <div class="card-body">

                 <h6 class="blog-title mb-4">Edit Blog Post</h6>

                 <div class="aspect-ratio-16x9">
                    <div class="w-100 max-vh-50">
                        <img class="w-100 h-100 rounded mb-3 blogs-img"
                         src="{{ url('upload/blog_images/'.$blog->photo) }}" alt="profile"">
                    </div>
                </div>

                 <form id="myForm" method="POST" enctype="multipart/form-data" action="{{ route('blog.update') }}" class="forms-sample">
                     @csrf

                     <input type="hidden" name="id" value="{{ $blog->id }}" class="blog-input">
                     <label for="order"  class="blog-label form-control">Blog nr: {{ $blog->id }}</label><br>

                    <div class="form-group">
                        <label for="title" class="blog-label">Title:</label><br>
                        <input type="text" id="title" name="title" value="{{ $blog->title }}" class="blog-input form-control"><br>
                    </div>

                    <div class="form-group">
                        <label for="author" class="blog-label">Author:</label><br>
                        <input type="text" id="author" name="author" value="{{ $blog->author }}" class="blog-input form-control"><br>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputUsername1" class="blog-label">Photo: </label>
                        <input class="form-control" name="photo" type="file" id="image">
                    </div>
                    <div class="mb-3 ">
                        <label for="exampleInputUsername1" class="blog-label"></label>
                        <img class="wd-200 rounded blog-img" id="showImage"
                        src="{{ (!empty($blog->photo)) ? url('upload/blog_images/'.$blog->photo) : url('upload/no_image.jpg') }}" alt="profile">
                    </div>

                    <div class="form-group">
                        <label for="intro" class="blog-label">Introduction</label>
                        <textarea type="text" id="content" name="intro" class="blog-input form-control" rows="5">{{ $blog->intro }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="content"  class="blog-label">Content:</label><br>
                        <textarea
                            name="content"
                            class="form-control"
                            id="tinymceExample"
                            rows="10"
                            style="color: #ddd"
                        >{{ $blog->content }}</textarea>

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





