@extends('admin.admin_dashboard')

@section('content')
<div class="page-content">

    <div class="row profile-body">
      <div class="col-md-8 middle-wrapper">
        <div class="row">
          <div class="card blog-card">
             <div class="card-body">

                 <h6 class="blog-title">Pizza Order Nr: {{ $pizza->id }} </h6>

                 <form method="POST" action="{{ route('pizzas.update') }}" class="forms-sample">
                     @csrf
                     <input type="hidden" name="id" value="{{ $pizza->id }}">

                     <label for="order2"  class="blog-label">Type:</label>
                     <select name="type" id="type" class="form-select form-select-lg" aria-label=".form-select-lg example">
                            <option value="REGINA" class="form-control">{{ $pizza->type }}</option>
                        </select><br>
                        <label for="base" class="blog-label">Base:</label>
                        <select name="base" id="base" class="form-select form-select-lg" aria-label=".form-select-lg example">
                            <option value="Thin & Crispy" class="form-control" >{{ $pizza->base }}</option>
                        </select><br>
                        {{-- <label for="size" class="blog-label">Size:</label>
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="size" id="size">
                            <option value='12"' id='pizza'>12 inches</option>
                            <option value='15"' id='pizza' selected>15 inches</option>
                            </select> --}}
                        <fieldset class="form-select form-select-lg" aria-label=".form-select-lg example">
                            <label class="blog-label">Extra toppings:</label><br>
                            <ul>
                            @foreach ($pizza->toppings as $top)
                                <li>{{ $top }}</li>
                            @endforeach
                            </ul>
                        </fieldset><br>

                        <fieldset class="form-select form-select-lg" aria-label=".form-select-lg example">
                            <label for="name" class="blog-label">Name: {{ $pizza->name }}</label><br>
                            <label for="phone" class="blog-label">Phone: {{ $pizza->phone }}</label><br>
                            <label for="address" class="blog-label">Address: {{ $pizza->address }}</label><br>
                        </fieldset>

                        <a href="{{ route('pizzas.index') }}" class="btn btn-primary px-5 mt-4">Back</a>

                 </form>

             </div>
           </div>
        </div>
      </div>
    </div>
</div>
@endsection
