@extends('admin.admin_dashboard')
@section('content')

<div class="page-content">
    @if(Auth::user()->can('orders.add'))
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <a href="{{ route('pizzas.create') }}" class="btn btn-inverse-info">Add New Order</a>
        </ol>
    </nav>
    @endif

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Pizza - All Orders</h6>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>Order</th>
                                        <th>Type</th>
                                        <th>Base</th>
                                        {{-- <th>Size</th> --}}
                                        <th>Topings</th>
                                        <th>Price</th>
                                        <th>Name</th>
                                        <th>Adress</th>
                                        <th>Phone</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($pizzas as $pizza)
                                    <tr>
                                        <td>{{ $pizza->id }}</td>
                                        <td>{{ $pizza->type }}</td>
                                        <td>{{ $pizza->base }}</td>
                                        {{-- <td>{{ $pizza->size }}</td> --}}
                                        <td>@foreach($pizza->toppings as $topping)
                                            <li>{{ $topping }} </li>
                                            @endforeach</td>
                                        <td>{{ $pizza->price }}</td>
                                        <td>{{ $pizza->name }}</td>
                                        <td>{{ $pizza->address }}</td>
                                        <td>{{ $pizza->phone }}</td>
                                        <td>
                                            <a href="{{ route('pizzas.show',$pizza->id) }}" class="btn btn-inverse-info">View</a>
                                            @if(Auth::user()->can('orders.edit'))
                                            <a href="{{ route('pizzas.edit',$pizza->id) }}" class="btn btn-inverse-warning">Edit</a>
                                            @endif
                                            @if(Auth::user()->can('orders.delete'))
                                            <a href="{{ route('pizzas.destroy',$pizza->id) }}" class="btn btn-inverse-danger" id="delete" >Delete</a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


