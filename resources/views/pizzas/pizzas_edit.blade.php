@extends('admin.admin_dashboard')
@section('content')

<div class="page-content">
    <div class="row profile-body">
      <div class="col-md-8 middle-wrapper">
        <div class="row">
          <div class="card blog-card">
             <div class="card-body">
                 <h6 class="blog-title">Edit Pizza Order</h6>
                 <form method="POST" action="{{ route('pizzas.update') }}" id="myForm" class="forms-sample">
                     @csrf

                    <label for="order"  class="blog-label">Order nr: {{ $pizza->id }}</label><br>
                    <input type="hidden" name="id" value="{{ $pizza->id }}">

                    <div class="form-group">
                        <label for="order2"  class="blog-label">Type:</label>
                        <select name="type" id="types" class="form-select form-select-lg" aria-label=".form-select-lg example">

                            @foreach ($menus as $menu)

                            <option value="{{ $menu->name }}" data-price="{{ $menu->price }}" {{ $pizza->type == $menu->name ? 'selected' : '' }}>{{ $menu->name }}</option>

                            @endforeach
                            {{-- <option value="CALABRIA" data-price="14.99" {{ $pizza->type == 'CALABRIA' ? 'selected' : '' }}>CALABRIA</option>
                            <option value="FIORENTINA" data-price="12.99" {{ $pizza->type == 'FIORENTINA' ? 'selected' : '' }}>FIORENTINA</option>
                            <option value="GIARDINO" data-price="12.99" {{ $pizza->type == 'GIARDINO' ? 'selected' : '' }}>GIARDINO</option>
                            <option value="MARGHERITA" data-price="9.99" {{ $pizza->type == 'MARGHERITA' ? 'selected' : '' }}>MARGHERITA</option>
                            <option value="PEPPERONI" data-price="11.99" {{ $pizza->type == 'PEPPERONI' ? 'selected' : '' }}>PEPPERONI</option>
                            <option value="POLLO" data-price="14.99" {{ $pizza->type == 'POLLO' ? 'selected' : '' }}>POLLO</option>
                            <option value="TROPICALI" data-price="12.99" {{ $pizza->type == 'TROPICALI' ? 'selected' : '' }}>TROPICALI</option>
                            <option value="REGINA" data-price="14.99" {{ $pizza->type == 'REGINA' ? 'selected' : '' }}>REGINA</option> --}}
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="base" class="blog-label">Base:</label>
                        <select name="base" id="base" class="form-select form-select-lg" aria-label=".form-select-lg example">
                            {{-- <option disabled>Please Choose Base</option> --}}
                            <option value="Thin & Crispy" data-price="0" {{ $pizza->base == 'Thin & Crispy' ? 'selected' : '' }}>Thin & Crispy</option>
                            <option value="Thick Pan" data-price="1.99" {{ $pizza->base == 'Thick Pan' ? 'selected' : '' }}>Thick Pan (+ £1.99)</option>
                            <option value="Cheesy Crust" data-price="3.99" {{ $pizza->base == 'Cheesy Crust' ? 'selected' : '' }}>Cheesy Crust(+ £3.99)</option>
                        </select>
                    </div>
{{--
                    <div class="form-group">
                        <label for="size" class="blog-label">Size:</label>
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="size" id="size">
                            <option value='12"' id='pizza'>12 inches</option>
                            <option value='15"' id='pizza' selected>15 inches</option>
                        </select>
                    </div> --}}

                    <div class="form-group">
                        <fieldset class="form-select form-select-lg" aria-label=".form-select-lg example">
                            <label class="blog-label">Extra toppings (tick min one):</label><br>
                            <input type="checkbox" name="toppings[]" id="none" value="none" {{ in_array('none', $pizza->toppings) ? 'checked' : '' }}>NONE<br/>
                            <input type="checkbox" name="toppings[]" id="toppings" value="cheese" {{ in_array('cheese', $pizza->toppings) ? 'checked' : '' }}>Cheese<br/>
                            <input type="checkbox" name="toppings[]" id="toppings" value="garlic" {{ in_array('garlic', $pizza->toppings) ? 'checked' : '' }}>Garlic<br/>
                            <input type="checkbox" name="toppings[]" id="toppings" value="mushrooms" {{ in_array('mushrooms', $pizza->toppings) ? 'checked' : '' }}>Mushrooms<br/>
                            <input type="checkbox" name="toppings[]" id="toppings" value="olives" {{ in_array('olives', $pizza->toppings) ? 'checked' : '' }}>Olives<br/>
                            <input type="checkbox" name="toppings[]" id="toppings" value="peppers" {{ in_array('peppers', $pizza->toppings) ? 'checked' : '' }}>Pepers<br/>
                        </fieldset>
                    </div>

                    <div class="form-group">
                        <label for="name" class="blog-label">Name:</label><br>
                        <input type="text" class="blog-input form-control" id="name" name="name" value="{{ $pizza->name }}">
                    </div>

                    <div class="form-group">
                        <label for="phone" class="blog-label">Phone:</label><br>
                        <input type="text" class="blog-input form-control" id="phone" name="phone" value="{{ $pizza->phone }}">
                    </div>

                    <div class="form-group">
                        <label for="address" class="blog-label">Address:</label><br>
                        <input type="text" class="blog-input form-control" id="address" name="address" value="{{ $pizza->address }}">
                    </div>

                    <input type="hidden" name="price" id="price" value="{{ $pizza->price }}">

                   <div class="d-flex justify-content-between align-items-center pt-5 pb-2">
                       <button type="submit" class="btn btn-primary m-0" >Save Changes</button>
                       <h3 id="totalPayable" class="text-warning pt-3"></h3>
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

    let total = inputPrice.value;
    let basePrice = 0;
    let typePrice = 0;
    let toppingsPrice = 0;



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

    document.addEventListener('DOMContentLoaded', (e) => {
        checkBoxes.forEach(checkBox => {
        const checkboxValue = e.target.value;
            const checkboxChecked = e.target.checked;

            if (checkboxChecked) {
                if (checkboxValue === 'cheese') {
                    toppingsPrice += 0.99;
                } else {
                    toppingsPrice += 0.49;
                }
        }

        calculateTotalPrice();
    });
});

document.addEventListener('DOMContentLoaded', () => {
    checkBoxes.forEach(checkBox => {
        console.log("dom")
    if (checkBox.checked) {
        if (checkBox.value === 'cheese') {
            toppingsPrice += 0.99;
        } else {
            toppingsPrice += 0.49;
        }
    }

    typePrice = Array.from(types.options).reduce((acc, option) => {
        if (option.selected) {
            return acc + parseFloat(option.dataset.price);
        } else {
            return acc;
        }
    }, 0);

      basePrice = Array.from(base.options).reduce((acc, option) => {
          if (option.selected) {
              return acc + parseFloat(option.dataset.price);
            } else {
                return acc;
            }
        }, 0);

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
        inputPrice.value = total;
        totalVal.textContent = `£${total.toFixed(2)}`;
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



