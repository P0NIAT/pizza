@extends('admin.admin_dashboard')
@section('content')

<div class="page-content">
    @if(Auth::user()->can('permissions.add'))
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <a href="{{ route('roles.addnew') }}" class="btn btn-inverse-info">Add Roles</a>
        </ol>
    </nav>
    @endif

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">All Roles</h6>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                            <tr>
                                <th>Serial Number</th>
                                <th>Role Name</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($roles as $key => $item )
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $item->name }}</td>
                                <td>
                                    @if(Auth::user()->can('permissions.edit'))
                                    <a href="{{ route('roles.edit',$item->id) }}" class="btn btn-inverse-warning">Edit</a>
                                    @endif

                                    @if(Auth::user()->can('permissions.delete'))
                                    <a href="{{ route('roles.delete',$item->id) }}" class="btn btn-inverse-danger" id="delete" >Delete</a>
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

