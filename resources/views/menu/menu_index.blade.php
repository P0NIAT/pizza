@extends('admin.admin_dashboard')
@section('content')

<style>
    .hide-content-horizontal {
    max-width: 200px;
    word-wrap: break-word;
    overflow: hidden;
}
</style>

<div class="page-content">

    @if(Auth::user()->can('menu.add'))
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <a href="{{ route('menu.create') }}" class="btn btn-inverse-info">Add Menu Item</a>
        </ol>
    </nav>
    @endif

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">All Blogs</h6>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Pizza Name</th>
                                    <th>Ingredients</th>
                                    <th>Price</th>
                                    <th>Photo</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($menus as $menu)
                                <tr>
                                    <td>{{ $menu->id }}</td>
                                    <td class="hide-content-horizontal">{{ $menu->name }}</td>
                                    <td>
                                        @foreach ($menu->ingredients as $ingred)
                                            <li>{{ $ingred }}</li>
                                        @endforeach
                                    </td>
                                    <td class="hide-content-horizontal">{{ $menu->price }}</td>
                                    <td>
                                        <div class="aspect-ratio aspect-ratio-1x1">
                                          <img class="w-50 h-50 rounded img-fluid" id="showImage"
                                            src="{{ (!empty($menu->photo)) ? url('upload/menu_images/'.$menu->photo) : url('upload/no_image.jpg') }}"
                                            alt="profile">
                                        </div>
                                    </td>
                                    <td>
                                        @if(Auth::user()->can('menu.edit'))
                                        <a href="{{ route('menu.edit',$menu->id) }}" class="btn btn-inverse-warning">Edit</a>
                                        @endif

                                        @if(Auth::user()->can('menu.delete'))
                                        <a href="{{ route('menu.destroy',$menu->id) }}" class="btn btn-inverse-danger" id="delete" >Delete</a>
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

@endsection


