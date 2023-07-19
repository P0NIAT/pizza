@extends('admin.admin_dashboard') @section('content')

<div class="page-content">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">

            @if(Auth::user()->can('admins.add'))
            <a href="{{ route('admins.addnew') }}" class="btn btn-inverse-info">
                Add Admin
            </a>
            @endif

        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Admin All</h6>

                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($admins as $key => $item)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>
                                        <img
                                            src="{{ (!empty($item->photo)) ? url('upload/admin_images/'.$item->photo) : url('upload/no_image.jpg') }}"
                                            style="width: 70px; height: 70px"
                                        />
                                    </td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>
                                        @foreach($item->roles as $role)
                                        <span class="badge badge-pill bg-success"
                                            >{{ $role->name }}</span
                                        >
                                        @endforeach
                                    </td>
                                    <td>

                                        @if(Auth::user()->can('admins.edit'))
                                        <a
                                        href="{{ route('admins.edit',$item->id) }}"
                                        class="btn btn-inverse-warning"
                                        title="Edit"
                                        >
                                        <i data-feather="edit"></i>
                                        </a>
                                        @endif

                                        @if(Auth::user()->can('admins.delete'))
                                        <a
                                        href="{{ route('admins.delete',$item->id) }}"
                                        class="btn btn-inverse-danger"
                                        id="delete"
                                        title="Delete"
                                        >
                                        <i data-feather="trash-2"></i>
                                        </a>
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
