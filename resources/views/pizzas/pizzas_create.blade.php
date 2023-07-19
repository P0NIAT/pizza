@extends('admin.admin_dashboard')
@section('content')

<div class="page-content">
    <div class="row profile-body">
      <div class="col-md-8 col-xl-8 middle-wrapper">
        <div class="row">
          <div class="card">
             <div class="card-body">
                <h6 class="blog-title">Order Your Pizza</h6>
                <form action="{{ route('pizzas.store') }}" method="POST" id="myForm" class="forms-sample">
                   @csrf

                   <div class="form-group">
                    <label for="type" class="blog-label">Type:</label>
                    <select class="form-select" name="type" id="types">
                        <option id="type" disabled selected>Please Choose Type</option>
                        @foreach ($menus as $menu)
                            <option id="type" value="{{ $menu->name }}" data-price="{{ $menu->price }}">{{ $menu->name }}</option>
                        @endforeach
                        {{-- <option id="type" value="CALABRIA" data-price="14.99">CALABRIA</option>
                        <option id="type" value="FIORENTINA" data-price="12.99">FIORENTINA</option>
                        <option id="type" value="GIARDINO" data-price="12.99">GIARDINO</option>
                        <option id="type" value="MARGHERITA" data-price="9.99">MARGHERITA</option>
                        <option id="type" value="PEPPERONI" data-price="11.99">PEPPERONI</option>
                        <option id="type" value="POLLO" data-price="14.99">POLLO</option>
                        <option id="type" value="TROPICALI" data-price="12.99">TROPICALI</option>
                        <option id="type" value="REGINA" data-price="14.99">REGINA</option> --}}
                    </select>
                </div>
                    <div class="form-group">
                        <label for="base" class="blog-label">Base:</label>
                        <select class="form-select"  name="base" id="base">
                            <option selected disabled>Please Choose Base</option>
                            <option value="Thin & Crispy" data-price="0">Thin & Crispy</option>
                            <option value="Thick Pan" data-price="1.99">Thick Pan (+ £1.99)</option>
                            <option value="Cheesy Crust" data-price="3.99">Cheesy Crust(+ £3.99)</option>
                        </select>
                    </div>

                    <fieldset class="mb-3">
                        <label class="blog-label">Extra toppings: </label><br>
                        <input type="checkbox" name="toppings[]" id="none" value="none" checked> NONE<br/>
                        <input type="checkbox" name="toppings[]" id="toppings" value="cheese"> Cheese (+ £0.99)<br/>
                        <input type="checkbox" name="toppings[]" id="toppings" value="garlic"> Garlic (+ £0.49)<br/>
                        <input type="checkbox" name="toppings[]" id="toppings" value="mushrooms"> Mushrooms (+ £0.49)<br/>
                        <input type="checkbox" name="toppings[]" id="toppings" value="olives"> Olives (+ £0.49)<br/>
                        <input type="checkbox" name="toppings[]" id="toppings" value="peppers"> Pepers (+ £0.49)<br/>
                    </fieldset>

                                        {{-- <label for="size" class="blog-label">Size:</label>
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="size" id="size">
                       <option value='12"' id='pizza'>12 inches</option>
                       <option value='15"' id='pizza' selected>15 inches</option>
                    </select> --}}

                    <div class="form-group mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input name="name" type="text" id="name" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" id="phone" name="phone" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <label for="address" class="form-label">Address:</label>
                        <input type="text" id="address" name="address" class="form-control">
                    </div>

                    <input type="hidden" name="price" id="price">

                   <div class="d-flex justify-content-between align-items-center pt-5 pb-2">
                       <button type="submit" class="btn btn-primary m-0" >Order Pizza</button>
                       <h3 id="totalPayable" class="text-warning pt-3" ></h3>
                   </div>

                 </form>

             </div>
           </div>
        </div>
      </div>
    </div>
</div>

<script>

const types = document.querySelector('#types');
const base = document.querySelector('#base');
const totalVal = document.querySelector("#totalPayable");
const checkBoxes = document.querySelectorAll('#toppings');
const noneCheckbox = document.getElementById("none");
const inputPrice = document.getElementById("price");


let total = 0;
let basePrice = 0;
let typePrice = 0;
let toppingsPrice = 0;

noneCheckbox.checked = true;
checkBoxes.forEach(checkBox => {
    checkBox.disabled = true;
});

noneCheckbox.addEventListener("change", () => {
    checkBoxes.forEach(checkBox => {
        if (noneCheckbox.checked) {
            checkBox.checked = false;
      checkBox.disabled = true;
      toppingsPrice = 0;
    } else {
        checkBox.disabled = false;
    }

    calculateTotalPrice();
});
});

checkBoxes.forEach(checkBox => {
    checkBox.addEventListener("change", e => {
        const checkboxValue = e.target.value;
        const checkboxChecked = e.target.checked;

        if (checkboxChecked) {
            if (checkboxValue === 'cheese') {
                toppingsPrice += 0.99;
            } else {
                toppingsPrice += 0.49;
      }
    } else {
      if (checkboxValue === 'cheese') {
        toppingsPrice -= 0.99;
      } else {
        toppingsPrice -= 0.49;
      }
    }

    calculateTotalPrice();
});
});

types.addEventListener("change", () => {
  typePrice = Array.from(types.options).reduce((acc, option) => {
    if (option.selected) {
      return acc + parseFloat(option.dataset.price);
    } else {
      return acc;
    }
  }, 0);

  calculateTotalPrice();
});

base.addEventListener("change", () => {
  basePrice = Array.from(base.options).reduce((acc, option) => {
      if (option.selected) {
          return acc + parseFloat(option.dataset.price);
        } else {
            return acc;
        }
    }, 0);

    calculateTotalPrice();
});

function calculateTotalPrice() {
    total = parseFloat(basePrice + typePrice + toppingsPrice);
    totalVal.textContent = `£${total.toFixed(2)}`;
    inputPrice.value = total;
    console.log(inputPrice.value)
}

$(document).ready(function (){
    $('#myForm').validate({
        rules: {
            name: {
                required : true,
            },
            phone: {
                required : true,
            },
            address: {
                required : true,
            },
            type: {
                required : true,
            },
            base: {
                required : true,
            },
        },
        messages :{
            name: {
                required : 'Please Enter Your Name',
            },
            phone: {
                required : 'Enter Phone Number',
            },
            address: {
                required : 'Enter Delivery Address',
            },
            type: {
                required : 'Please Choose',
            },
            base: {
                required : 'Please Choose',
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


