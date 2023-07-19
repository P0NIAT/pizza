@extends('admin.admin_dashboard')
@section('content')

<div class="page-content">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            @if(Auth::user()->can('permissions.add'))
            <a
                href="{{ route('permission.addnew') }}"
                class="btn btn-inverse-info"
                >Add Permission</a
            >
            &nbsp;&nbsp;
            @endif

            @if(Auth::user()->can('permissions.edit'))
            <a
                href="{{ route('permission.import') }}"
                class="btn btn-inverse-warning"
                >Import</a
            >
            &nbsp;&nbsp;
            <a href="{{ route('export') }}" class="btn btn-inverse-primary"
                >Export</a
            >
            @endif
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">All Permission</h6>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>Serial number</th>
                                    <th>Permission Name</th>
                                    <th>Group Name</th>
                                    <th>Action</th>
                                    {{--
                                    <th>Facility Icon</th>
                                    --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($permissions as $key => $item )
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->group_name }}</td>
                                    <td>
                                        @if(Auth::user()->can('permissions.edit'))
                                        <a
                                            href="{{ route('permission.edit',$item->id) }}"
                                            class="btn btn-inverse-warning"
                                            >Edit</a
                                        >
                                        @endif

                                        @if(Auth::user()->can('permissions.delete'))
                                        <a
                                            href="{{ route('permission.delete',$item->id) }}"
                                            class="btn btn-inverse-danger"
                                            id="delete"
                                            >Delete</a
                                        >
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
