@extends('admin.admin_dashboard')
@section('content')

<style type="text/css">
    .form-check-label{
        text-transform: capitalize;
    }
</style>

<div class="page-content">
    <div class="row profile-body">
      <div class="col-md-12 col-xl-12 middle-wrapper">
        <div class="row">
          <div class="card">
             <div class="card-body">
                 <h6 class="card-title">Add Permission to Role</h6>

                 <form method="POST" action="{{ route('roles.permission.store') }}" id="myForm" class="forms-sample">
                     @csrf

                     <div class="form-group mt-5 mb-4">
                         <label for="name" class="form-label">Role Name</label>
                         <select name="role_id" class="form-select" id="group_name">
                            <option value="choose" selected disabled>Select Group</option>
                            @foreach ($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                         </select>
                     </div>
                     <div class="form-check mb-2">
                        <input type="checkbox" class="form-check-input" id="checkPerAll" />
                        <label class="form-check-label" for="checkPerAll">
                            Permission All
                        </label>
                    </div>
                    <hr>

                    @foreach ($permission_groups as $group)
                    <div class="row">
                            <div class="col-3">
                                <div class="form-group mb-2">
                                    <input type="checkbox" name="group_name" class="form-check-input groupRole" id="{{ $group->group_name }}" />
                                    <label class="form-check-label" for="{{ $group->group_name }}">
                                        {{ $group->group_name }}
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">

                                @php
                                $permissions = App\Models\User::getPermissionByGroupName($group->group_name);
                                @endphp

                                @foreach ($permissions as $permission)
                                <div class="mb-2">
                                    <input name="permission[]" id="checkDefault{{ $permission->id }}" class="permissionCheckbox form-check-input {{ $group->group_name }}" type="checkbox" value="{{ $permission->id }}" />
                                    <label class="form-check-label" for="checkDefault{{ $permission->id }}">
                                        {{ $permission->name }}
                                    </label>
                                </div>
                                @endforeach
                                <br>
                            </div>
                    </div>
                    @endforeach

                    <button type="submit" class="btn btn-primary me-2">Save Changes</button>
                </form>

            </div>
           </div>
        </div>
      </div>
    </div>
</div>

<script type="text/javascript">

$(document).ready(() => valName_SecondName("role_id","group_name"));

const allCheckboxes = document.querySelectorAll('input[type="checkbox"]');
const selectGroup = document.getElementById('group_name');
const checkboxes = document.querySelectorAll('.permissionCheckbox');
const groupRoles = document.querySelectorAll('.groupRole');

document.addEventListener("DOMContentLoaded", () => {
  allCheckboxes.forEach(checkbox => {
    checkbox.disabled = true;
  });
});

selectGroup.addEventListener('click', () => {
    if (selectGroup.value !== 'choose') {
        allCheckboxes.forEach(checkbox => {
        checkbox.disabled = false;
        });
        checkboxes.forEach(checkbox => {
        checkbox.disabled = true;
        });
    }
});

groupRoles.forEach(group => {
  group.addEventListener('click', () => {
    checkboxes.forEach(checkbox => {
      if (checkbox.classList.contains(group.id)) {
        if (!group.checked) {
          checkbox.disabled = true;
          checkbox.checked = false;
        } else {
          checkbox.disabled = false;
        }
      }
    });
  });
});

document.getElementById('checkPerAll').addEventListener('click', function() {
    allCheckboxes.forEach(checkbox => {
        checkbox.checked = this.checked;
        if(this.checked) {
            checkbox.checked = true;
            checkbox.disabled = false;
        } else {
            checkbox.checked = false;
            checkbox.disabled = true;
            this.disabled = false;
        }
    });
});

// const valName_SecondName = ("role_id","permission[]") => {
//     $(document).ready(() => {
//       const rules = {};
//       const messages = {};

//       rules[firstName] = {
//         required: true,
//       };

//       rules[secondName] = {
//         required: true,
//       };

//       messages[firstName] = {
//         required: "Please Choose",
//       };

//       messages[secondName] = {
//         required: "Please Check at least one to save",
//       };

//       $("#myForm").validate({
//         rules: rules,
//         messages: messages,
//         errorElement: "span",
//         errorPlacement: (error, element) => {
//           error.addClass("invalid-feedback");
//           element.closest(".form-group").append(error);
//         },
//         highlight: (element, errorClass, validClass) => {
//           $(element).addClass("is-invalid");
//         },
//         unhighlight: (element, errorClass, validClass) => {
//           $(element).removeClass("is-invalid");
//         },
//       });
//     });
//   };

</script>

@endsection
