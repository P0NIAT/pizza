<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PermissionExport;
use App\Imports\PermissionImport;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    public function PermissionAll()
    {
        $permissions = Permission::all();
        return view('backend.permission.permission_all', compact('permissions'));
    }

    public function PermissionAddNew()
    {
        return view('backend.permission.permission_addnew');
    }

    public function PermissionStore(Request $request)
    {
        Permission::create([
            'name' => $request->name,
            'group_name' => $request->group_name,
        ]);

        $notification = array(
            'message' => 'Permission Created Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('permission.all')->with($notification);
    }

    public function PermissionEdit($id)
    {
        $permissions = Permission::findOrFail($id);
        return view('backend.permission.permission_edit', compact('permissions'));
    }

    public function PermissionUpdate(Request $request)
    {
        $per_id = $request->id;

        Permission::findOrFail($per_id)->update([
            'name' => $request->name,
            'group_name' => $request->group_name,
        ]);

        $notification = array(
            'message' => 'Permission Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('permission.all')->with($notification);
    }

    public function PermissionDelete($id)
    {
        Permission::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Permission Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function PermissionImport()
    {
        return view('backend.permission.permission_import');
    }

    public function Export()
    {
        return
            Excel::download(new PermissionExport, 'permission.xlsx');
    }

    public function Import(Request $request)
    {
        Excel::import(new PermissionImport, $request->file('import_file'));

        $notification = array(
            'message' => 'Permission Imported Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('permission.all')->with($notification);
    }

    ///// ROLES FUNCTIONS /////
    public function RolesAll()
    {
        $roles = Role::all();
        return view('backend.roles.roles_all', compact('roles'));
    }

    public function RolesAddNew()
    {
        return view('backend.roles.roles_addnew');
    }

    public function RolesStore(Request $request)
    {
        Role::create([
            'name' => $request->name,
        ]);

        $notification = array(
            'message' => 'Roles Created Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('roles.all')->with($notification);
    }

    public function RolesEdit($id)
    {
        $role = Role::findOrFail($id);
        return view('backend.roles.roles_edit', compact('role'));
    }

    public function RolesUpdate(Request $request)
    {
        $role_id = $request->id;

        Role::findOrFail($role_id)->update([
            'name' => $request->name,
            'group_name' => $request->group_name,
        ]);

        $notification = array(
            'message' => 'Role Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('roles.all')->with($notification);
    }

    public function RolesDelete($id)
    {
        Role::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Role Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    ///// ADD ROLE PERMISSION /////

    public function RolesAddPermission()
    {
        $roles = Role::all();
        $permissions = Permission::all();
        $permission_groups = User::getPermissionGroups();

        return view('backend.rolesetup.roles_add_permission', compact('roles', 'permissions', 'permission_groups'));
    }

    public function RolesPermissionStore(Request $request)
    {
        $data = array();
        $permissions = $request->permission;

        foreach ($permissions as $key => $item) {
            $data['role_id'] = $request->role_id;
            $data['permission_id'] = $item;

            DB::table('role_has_permissions')->insert($data);
        }

        $notification = array(
            'message' => 'Role Permission Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('roles.permission.all')->with($notification);
    }

    public function RolesPermissionAll()
    {
        $roles = Role::all();
        return view('backend.rolesetup.roles_all_permission', compact('roles'));
    }

    public function RolesPermissionEdit($id)
    {
        $role = Role::findOrFail($id);
        $permissions = Permission::all();
        $permission_groups = User::getPermissionGroups();

        return view('backend.rolesetup.roles_edit_permission', compact('role', 'permissions', 'permission_groups'));
    }

    public function RolesPermissionUpdate(Request $request, $id)
    {
        $role = Role::findOrFail($id);
        $permissions = $request->permission;

        if (!empty($permissions)) {
            $role->syncPermissions($permissions);
        }

        $notification = array(
            'message' => 'Role Permission Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('roles.permission.all')->with($notification);
    }

    public function RolesPermissionDelete($id)
    {
        $role = Role::findOrFail($id);

        if (!is_null($role)) {
            $role->delete();
        };

        $notification = array(
            'message' => 'Role Permission Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
