@extends('admin.admin_dashboard')
@section('content')

<div class="page-content">

    @if(Auth::user()->can('permissions.add'))
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <a href="{{ route('roles.permission.add') }}" class="btn btn-inverse-info">Add Permission to Roles</a>
        </ol>
    </nav>
    @endif

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">All Roles Permission</h6>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Role Name</th>
                                <th>Permission</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($roles as $key => $item )
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $item->name }}</td>
                                <td>
                                    @foreach ($item->permissions as $perm)
                                    <span class="badge bg-success">{{ $perm->name }}</span>
                                    @endforeach
                                </td>
                                <td>
                                    @if(Auth::user()->can('permissions.edit'))
                                    <a href="{{ route('roles.permission.edit',$item->id) }}" class="btn btn-inverse-warning">Edit</a>
                                    @endif

                                    @if(Auth::user()->can('permissions.delete'))
                                    <a href="{{ route('roles.permission.delete',$item->id) }}" class="btn btn-inverse-danger" id="delete" >Delete</a>
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

