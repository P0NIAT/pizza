<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\MenuController;
use App\Models\Blog;
use App\Models\Menu;

Route::get('/', function () {
    $menus = Menu::all();
    $blogs = Blog::all();
    return view('frontend.index', compact('blogs', 'menus'));
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');

Route::middleware(['auth', 'roles:admin'])->group(function () {


    Route::controller(AdminController::class)->group(function () {

        Route::get('/admin/dashboard', 'AdminDashboard')->name('admin.dashboard');

        Route::get('/admin/logout', 'AdminLogout')->name('admin.logout');

        Route::get('/admin/profile', 'AdminProfile')->name('admin.profile');

        Route::post('/admin/profile/store', 'AdminProfileStore')->name('admin.profile.store');

        Route::get('/admin/password', 'AdminPassword')->name('admin.password');

        Route::post('/admin/password/update', 'AdminPasswordUpdate')->name('admin.password.update');
    });


    Route::controller(MenuController::class)->group(function () {

        Route::get('/menu/all', 'Index')->name('menu.index')->middleware('permission:menu.all');

        Route::get('/menu/create', 'Create')->name('menu.create')->middleware('permission:menu.add');

        Route::post('/menu/store', 'Store')->name('menu.store');

        Route::get('/menu/edit/{id}', 'Edit')->name('menu.edit')->middleware('permission:menu.edit');

        Route::post('/menu/update', 'Update')->name('menu.update');

        Route::get('/menu/delete/{id}', 'Destroy')->name('menu.destroy')->middleware('permission:menu.delete');
    });


    Route::controller(BlogController::class)->group(function () {

        Route::get('/blog/all', 'Index')->name('blog.index')->middleware('permission:blogs.all');

        Route::get('/blog/create', 'Create')->name('blog.create')->middleware('permission:blogs.add');

        Route::post('/blog/store', 'Store')->name('blog.store');

        Route::get('/blog/edit/{id}', 'Edit')->name('blog.edit')->middleware('permission:blogs.edit');

        Route::post('/blog/update', 'Update')->name('blog.update');

        Route::get('/blog/delete/{id}', 'Destroy')->name('blog.destroy')->middleware('permission:blogs.delete');
    });


    Route::controller(PizzaController::class)->group(function () {

        Route::get('/pizzas/all', 'Index')->name('pizzas.index')->middleware('permission:orders.all');

        Route::get('/pizzas/create', 'Create')->name('pizzas.create')->middleware('permission:orders.add');

        Route::post('/pizzas/store', 'Store')->name('pizzas.store');

        Route::get('/pizzas/edit/{id}', 'Edit')->name('pizzas.edit')->middleware('permission:orders.edit');

        Route::post('/pizzas/update', 'Update')->name('pizzas.update');

        Route::get('/pizzas/delete/{id}', 'Destroy')->name('pizzas.destroy')->middleware('permission:orders.delete');
    });


    // Permission All Routes
    Route::controller(RoleController::class)->group(function () {

        Route::get('/permission/all', 'PermissionAll')->name('permission.all')->middleware('permission:permissions.all');

        Route::get('/permission/addnew', 'PermissionAddNew')->name('permission.addnew')->middleware('permission:permissions.add');

        Route::post('/permission/store', 'PermissionStore')->name('permission.store');

        Route::get('/permission/edit/{id}', 'PermissionEdit')->name('permission.edit')->middleware('permission:permissions.edit');

        Route::post('/permission/update', 'PermissionUpdate')->name('permission.update');

        Route::get('/permission/delete/{id}', 'PermissionDelete')->name('permission.delete')->middleware('permission:permissions.delete');

        Route::get('/permission/import', 'PermissionImport')->name('permission.import')->middleware('permission:permissions.edit');

        Route::get('/export', 'Export')->name('export')->middleware('permission:permissions.edit');

        Route::post('/import', 'Import')->name('import')->middleware('permission:permissions.edit');
    });

    // Roles All Routes
    Route::controller(RoleController::class)->group(function () {

        Route::get('/roles/all', 'RolesAll')->name('roles.all')->middleware('permission:permissions.all');

        Route::get('/roles/addnew', 'RolesAddNew')->name('roles.addnew')->middleware('permission:permissions.add');

        Route::post('/roles/store', 'RolesStore')->name('roles.store');

        Route::get('/roles/edit/{id}', 'RolesEdit')->name('roles.edit')->middleware('permission:permissions.edit');

        Route::post('/roles/update', 'RolesUpdate')->name('roles.update');

        Route::get('/roles/delete/{id}', 'RolesDelete')->name('roles.delete')->middleware('permission:permissions.delete');
    });

    // Roles Setup All Routes
    Route::controller(RoleController::class)->group(function () {

        Route::get('/roles/permission/all', 'RolesPermissionAll')->name('roles.permission.all')->middleware('permission:permissions.all');

        Route::get('/roles/permission/add', 'RolesAddPermission')->name('roles.permission.add')->middleware('permission:permissions.add');

        Route::post('/roles/permission/store', 'RolesPermissionStore')->name('roles.permission.store');

        Route::get('/roles/permission/edit/{id}', 'RolesPermissionEdit')->name('roles.permission.edit')->middleware('permission:permissions.edit');

        Route::post('/roles/permission/update/{id}', 'RolesPermissionUpdate')->name('roles.permission.update');

        Route::get('/roles/permission/delete/{id}', 'RolesPermissionDelete')->name('roles.permission.delete')->middleware('permission:permissions.delete');
    });

    Route::controller(AdminController::class)->group(function () {

        Route::get('/admins/all', 'AdminsAll')->name('admins.all')->middleware('permission:admins.all');

        Route::get('/admins/addnew', 'AdminsAddNew')->name('admins.addnew')->middleware('permission:admins.add');

        Route::post('/admins/store', 'AdminsStore')->name('admins.store');

        Route::get('/admins/edit/{id}', 'AdminsEdit')->name('admins.edit')->middleware('permission:admins.edit');

        Route::post('/admins/update/{id}', 'AdminsUpdate')->name('admins.update');

        Route::get('/admins/delete/{id}', 'AdminsDelete')->name('admins.delete')->middleware('permission:admins.delete');
    });
}); // End Group Admin Midleware

Route::controller(BlogController::class)->group(function () {

    Route::get('/blog/showall', 'Showall')->name('blog.showall');

    Route::get('/blog/{id}', 'Show')->name('blog.show');
});


Route::controller(PizzaController::class)->group(function () {

    Route::get('/pizzas/order', 'Order')->name('pizzas.order');

    Route::post('/pizzas/order/store', 'StoreOrder')->name('pizzas.store.order');

    Route::get('/pizzas/{id}', 'Show')->name('pizzas.show');
});
