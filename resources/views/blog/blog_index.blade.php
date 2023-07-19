@extends('admin.admin_dashboard')
@section('content')

<style>
    .hide-content-horizontal {
    max-width: 150px;
    word-wrap: break-word;
    overflow: hidden;
}
</style>

<div class="page-content">

    @if(Auth::user()->can('blogs.add'))
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <a href="{{ route('blog.create') }}" class="btn btn-inverse-info">Add New Blog</a>
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
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Introdution</th>
                                    <th>Content</th>
                                    <th>Photo</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($blogs as $blog)
                                <tr>
                                    <td>{{ $blog->id }}</td>
                                    <td class="hide-content-horizontal">{{ $blog->title }}</td>
                                    <td>{{ $blog->author }}</td>
                                    <td class="hide-content-horizontal">{{ $blog->intro }}</td>
                                    <td class="hide-content-horizontal">{{ $blog->content }}</td>
                                    <td class="hide-content-horizontal">{{ $blog->photo }}</td>
                                    <td class="hide-content-horizontal">

                                        <a href="{{ route('blog.show',$blog->id) }}" class="btn btn-inverse-info">View</a>

                                        @if(Auth::user()->can('blogs.edit'))
                                        <a href="{{ route('blog.edit',$blog->id) }}" class="btn btn-inverse-warning">Edit</a>
                                        @endif

                                        @if(Auth::user()->can('blogs.delete'))
                                        <a href="{{ route('blog.destroy',$blog->id) }}" class="btn btn-inverse-danger" id="delete" >Delete</a>
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


