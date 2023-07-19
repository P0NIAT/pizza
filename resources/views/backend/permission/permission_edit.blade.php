@extends('admin.admin_dashboard')
@section('content')

<div class="page-content">


    <div class="row profile-body">
      <div class="col-md-8 col-xl-8 middle-wrapper">
        <div class="row">
          <div class="card">
             <div class="card-body">

                 <h6 class="card-title">Edit Permission</h6>

                 <form method="POST" action="{{ route('permission.update') }}" class="forms-sample" id="myForm">
                     @csrf

                     <input type="hidden" name="id" value="{{ $permissions->id }}">
                     <div class="mb-3">
                        <div class="form-group mt-5 my-4">
                         <label for="mame" class="form-label">Permission Name</label>
                         <input name="name" type="text" class="form-control @error('facilities_name') is-invalid @enderror" value="{{ $permissions->name }}">
                        </div>
                        <div class="form-group my-4">
                         <label for="group_name" class="form-label">Group Name</label>
                         <select name="group_name" class="form-select" id="group_name">
                            <option selected disabled>Select Group</option>
                            <option value="type" {{ $permissions->group_name == 'type' ? 'selected' : '' }}>Pizza Orders</option>
                            <option value="facilities" {{ $permissions->group_name == 'facilities' ? 'selected' : '' }}>Blogs</option>
                            <option value="agent" {{ $permissions->group_name == 'agent' ? 'selected' : '' }}>Products</option>
                         </select>
                        </div>
                         @error('facilities_name')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror
                     </div>

                     {{-- <div class="mb-3">
                         <label for="facilities_icon" class="form-label">Facility Icon</label>
                         <input name="facilities_icon" type="text" class="form-control @error('facilities_icon') is-invalid @enderror" value="{{ $facil->facilities_icon }}">
                         @error('facilities_icon')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror
                     </div> --}}

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



