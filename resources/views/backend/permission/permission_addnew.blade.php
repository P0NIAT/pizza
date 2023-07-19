@extends('admin.admin_dashboard')
@section('content')


<div class="page-content">

    <div class="row profile-body">
        <!-- middle wrapper start -->
        <div class="col-md-8 col-xl-8 middle-wrapper">
        <div class="row">
          <div class="card">
             <div class="card-body">

                 <h6 class="card-title">Add Permission</h6>

                 <form method="POST" action="{{ route('permission.store') }}" id="myForm" class="forms-sample">
                     @csrf

                     <div class="form-group mb-3">
                         <label for="name" class="form-label">Permission Name</label>
                         <input name="name" type="text" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="group_name" class="form-label">Group Name</label>
                            <select name="group_name" class="form-select" id="group_name">
                                <option value="choose" selected disabled>Select Group</option>
                                <option value="admins">Admins</option>
                                <option value="blogs">Blogs</option>
                                <option value="menu">Menu</option>
                                <option value="orders">Orders</option>
                                <option value="permissions">Permissions</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary me-2">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script type="text/javascript">
    $(document).ready(() => validateName_Group());
</script>

@endsection

