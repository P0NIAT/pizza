@extends('admin.admin_dashboard')
@section('content')

<div class="page-content">
    <div class="row profile-body">
      <div class="middle-wrapper">
        <div class="row">
          <div class="card col-md-10 col-lg-8 blog-card">
             <div class="card-body">

                 <h2 class="blog-title">Create New Menu Item</h2>
                 <form id="myForm" method="POST" enctype="multipart/form-data" action="{{ route('menu.store') }}" class="forms-sample">
                    @csrf

                    <div class="form-group">
                        <label for="name" class="blog-label">Pizza Name</label>
                        <input type="text" id="name" name="name" class="blog-input form-control">
                    </div>

                    <div class="form-group">
                        <label for="price" class="blog-label">Price</label>
                        <input type="number" id="price" name="price" class="blog-input form-control"/>
                    </div>


                    <div class="form-group">
                        <label for="exampleInputUsername1" class="form-label">Photo</label>
                        <input class="form-control" name="photo" type="file" id="image">
                    </div>
                    <div class="m-3">
                        <label for="exampleInputUsername1" class="form-label"></label>
                        <img class="wd-200 rounded" id="showImage"
                        src="{{ url('upload/no_image.jpg') }}" alt="profile">
                    </div>

                    {{-- <div class="form-group">
                        <label for="ingredients" class="blog-label">Ingredients</label>
                        <input id="tags" name="ingredients[]" class="blog-input form-control">
                    </div> --}}

                    <div class="container p-0">
                        <hr>
                        <div class="form-group d-flex justify-content-center">
                            <button id="btnRemove" class="btn btn-inverse-warning m-2">Remove</button>
                            <label for="ingredients" class="blog-label mx-2">Ingredients</label>
                            <button id="btnAdd" class="btn btn-inverse-info m-2">Add</button>
                        </div>

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


const containerDiv = document.querySelector('.container');
let formGroupDiv;

document.getElementById('btnAdd').addEventListener('click', function() {
    event.preventDefault();
    formGroupDiv = document.createElement("div");
    formGroupDiv.className = "form-group";

    const label = document.createElement("label");
    label.setAttribute("for", "ingredients");
    label.className = "blog-label";
    label.innerText = "Ingredient";

    const input = document.createElement("input");
    input.type = "text";
    input.id = "ingredients";
    input.name = "ingredients[]";
    input.className = "blog-input form-control";

    formGroupDiv.appendChild(label);
    formGroupDiv.appendChild(input);

    containerDiv.appendChild(formGroupDiv);
});

document.getElementById('btnRemove').addEventListener('click', function() {
    event.preventDefault();
    if (containerDiv.lastChild.classList.contains('form-group')) {
        containerDiv.removeChild(containerDiv.lastChild);
    }
});

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
            name: {
                required : true,
            },
            'ingredients[]': {
                required : true,
            },
            photo: {
                required : true,
            },
            price: {
                required : true,
            },
        },
        messages :{
            name: {
                required : 'Please Enter Pizza Name',
            },
            'ingredients[]': {
                required : 'Enter Ingredients',
            },
            photo: {
                required : 'Add Photo',
            },
            price: {
                required : 'Add Item Price',
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


