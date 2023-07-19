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

                 <h6 class="card-title">Edit Roles Permissions</h6>

                 <form method="POST" action="{{ route('roles.permission.update', $role->id) }}" id="myForm" class="forms-sample">
                     @csrf

                     <div class="form-group mt-4 mb-3">
                        <label for="name" class="form-label">Role Name</label>
                        <h3>{{ $role->name }}</h3>
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

                                @php
                                $permissions = App\Models\User::getPermissionByGroupName($group->group_name);
                                @endphp

                                <div class="form-check mb-2">
                                    <input type="checkbox" name="group_name" id="{{ $group->group_name }}" class="form-check-input groupRole" {{ App\Models\User::roleHasPermissions($role, $permissions) ? 'checked' : ''}} />
                                    <label class="form-check-label" for="{{ $group->group_name }}">
                                        {{ $group->group_name }}
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">

                                @foreach ($permissions as $permission)
                                <div class="form-check mb-2">
                                    <input name="permission[]" id="checkDefault{{ $permission->id }}" type="checkbox" class="permissionCheckbox form-check-input {{ $group->group_name }}" {{ $role->hasPermissionTo($permission->name) ? 'checked' : '' }} value="{{ $permission->id }}" />
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

const allCheckboxes = document.querySelectorAll('input[type="checkbox"]');
const checkboxes = document.querySelectorAll('.permissionCheckbox');
const groupRoles = document.querySelectorAll('.groupRole');

document.addEventListener("DOMContentLoaded", function() {
    groupRoles.forEach(group => {
        checkboxes.forEach(checkbox => {
            if(checkbox.classList.contains(group.id)) {
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

groupRoles.forEach(group => group.addEventListener('click', function() {
    checkboxes.forEach(checkbox => {
        if(checkbox.classList.contains(group.id)) {
            if (!group.checked) {
            checkbox.disabled = true;
            checkbox.checked = false;
            } else {
            checkbox.disabled = false;
            }
        }
    });
}));

document.getElementById('checkPerAll').addEventListener('click', function() {
    checkboxes.forEach(checkbox => {
        if(this.checked) {
            checkbox.checked = true;
            checkbox.disabled = false;
        } else {
            checkbox.checked = false;
            checkbox.disabled = true;
            this.disabled = false;
        }

        groupRoles.forEach(group => {
            group.checked = this.checked;
        })
    });
});

// const allCheckboxes = document.querySelectorAll('input[type="checkbox"]');
// const selectGroup = document.getElementById('group_name');
// const checkboxes = document.querySelectorAll('.permissionCheckbox');
// const groupRoles = document.querySelectorAll('.groupRole');

// document.addEventListener("DOMContentLoaded", () => {
//     checkboxes.forEach(checkbox => {
//     checkbox.disabled = true;
//   });
// });

// selectGroup.addEventListener('click', () => {
//     if (selectGroup.value !== 'choose') {
//         allCheckboxes.forEach(checkbox => {
//         checkbox.disabled = false;
//         });
//         checkboxes.forEach(checkbox => {
//         checkbox.disabled = true;
//         });
//     }
// });

// groupRoles.forEach(group => {
//   group.addEventListener('click', () => {
//     checkboxes.forEach(checkbox => {
//       if (checkbox.classList.contains(group.id)) {
//         if (!group.checked) {
//           checkbox.disabled = true;
//           checkbox.checked = false;
//         } else {
//           checkbox.disabled = false;
//         }
//       }
//     });
//   });
// });

// document.getElementById('checkPerAll').addEventListener('click', function() {
//     allCheckboxes.forEach(checkbox => {
//         checkbox.checked = this.checked;
//         if(this.checked) {
//             checkbox.checked = true;
//             checkbox.disabled = false;
//         } else {
//             checkbox.checked = false;
//             checkbox.disabled = true;
//             this.disabled = false;

//         }
//     });
// });

</script>

@endsection
