@extends('admin.admin_dashboard')
@section('content')

<div class="page-content">

    <div class="row profile-body">
      <div class="col-md-8 col-xl-8 middle-wrapper">
        <div class="row">
          <div class="card">
             <div class="card-body">
                 <h6 class="card-title">Add New Role</h6>

                 <form method="POST" action="{{ route('roles.store') }}" id="myForm" class="forms-sample">
                     @csrf

                     <div class="form-group mb-3">
                         <label for="name" class="form-label">Role Name</label>
                         <input name="name" type="text" class="form-control">
                     </div>

                     <button type="submit" class="btn btn-primary me-2">Save Changes</button>
                 </form>

             </div>
           </div>
        </div>
      </div>
    </div>
</div>

<script>
    $(document).ready(() => validateName("name"));
</script>

@endsection

