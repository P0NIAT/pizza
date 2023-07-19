<nav class="sidebar">
   <div class="sidebar-header">
     <a href="#" class="sidebar-brand">
      Pizza<span>Italiano</span>
     </a>
     <div class="sidebar-toggler not-active">
       <span></span>
       <span></span>
       <span></span>
     </div>
   </div>
   <div class="sidebar-body">
     <ul class="nav">
       <li class="nav-item nav-category">Main</li>
       <li class="nav-item">
        <a href="{{ route('welcome') }}" class="nav-link">
          <i class="link-icon" data-feather="home"></i>
          <span class="link-title">Home Page</span>
        </a>
      </li>
       <li class="nav-item">
        <a href="{{ route('admin.dashboard') }}" class="nav-link">
          <i class="link-icon" data-feather="user"></i>
          <span class="link-title">Dashboard</span>
        </a>
      </li>
       <li class="nav-item">
        <a href="{{ route('admin.profile') }}" class="nav-link">
          <i class="link-icon" data-feather="edit-2"></i>
          <span class="link-title">Edit Profile</span>
        </a>
      </li>
       <li class="nav-item">
        <a href="{{ route('admin.password') }}" class="nav-link">
          <i class="link-icon" data-feather="repeat"></i>
          <span class="link-title">Change Password</span>
        </a>
      </li>
      <li class="nav-item">
          <a href="{{ route('admin.logout') }}" class="nav-link">
            <i class="link-icon" data-feather="log-out"></i>
            <span class="link-title">Log Out</span>
        </a>
    </li>
    @if(Auth::user()->can('orders.all'))
    <li class="nav-item nav-category">Orders</li>
    <li class="nav-item">
        <a href="{{ route('pizzas.index') }}" class="nav-link" id="piz-ind">
            <i class="link-icon" data-feather="box"></i>
            <span class="link-title">All Orders</span>
        </a>
    </li>
    @if(Auth::user()->can('orders.add'))
      <li class="nav-item">
          <a href="{{ route('pizzas.create') }}" class="nav-link" id="piz-cre">
              <i class="link-icon" data-feather="edit"></i>
              <span class="link-title">Add New Order</span>
          </a>
      </li>
      @endif
    @endif

    @if(Auth::user()->can('menu.all'))
    <li class="nav-item nav-category">Pizza Menu</li>

    <li class="nav-item">
        <a href="{{ route('menu.index') }}" class="nav-link" id="menu-ind">
            <i class="link-icon" data-feather="users"></i>
            <span class="link-title">All Menu Items</span>
        </a>
    </li>

    <li class="nav-item">
            @if(Auth::user()->can('menu.add'))
            <a href="{{ route('menu.create') }}" class="nav-link" id="menu-cre">
                <i class="link-icon" data-feather="user"></i>
                <span class="link-title">Add New Item</span>
            </a>
            @endif
        </li>

    @endif

    @if(Auth::user()->can('blogs.all'))
    <li class="nav-item nav-category">Blogs</li>
    <li class="nav-item">
        <a href="{{ route('blog.index') }}" class="nav-link" id="blo-ind">
            <i class="link-icon" data-feather="users"></i>
            <span class="link-title">All Blogs</span>
        </a>
    </li>

    <li class="nav-item">
            @if(Auth::user()->can('blogs.add'))
            <a href="{{ route('blog.create') }}" class="nav-link" id="blo-cre">
                <i class="link-icon" data-feather="user"></i>
                <span class="link-title">Add New Blog</span>
            </a>
            @endif
        </li>
    @endif

      @if(Auth::user()->can('permissions.all'))
      <li class="nav-item nav-category">Role & Permision</li>
       <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#permission" role="button" aria-expanded="false" aria-controls="permission">
          <i class="link-icon" data-feather="anchor"></i>
          <span class="link-title">Role & Permision</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="permission">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ route('permission.all') }}" class="nav-link">All Permission</a>
            </li>

            @if(Auth::user()->can('permissions.add'))
            <li class="nav-item">
              <a href="{{ route('permission.addnew') }}" class="nav-link">Add New Permission</a>
            </li>
            @endif

            {{-- <li class="nav-item">
              <a href="{{ route('permission.import') }}" class="nav-link">Import Permissions</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('export') }}" class="nav-link">Export Permissions</a>
            </li> --}}
            <li class="nav-item">
              <a href="{{ route('roles.all') }}" class="nav-link">All Roles</a>
            </li>

            @if(Auth::user()->can('permissions.add'))
            <li class="nav-item">
              <a href="{{ route('roles.addnew') }}" class="nav-link">Add New Role</a>
            </li>
            @endif

            <li class="nav-item">
                <a href="{{ route('roles.permission.all') }}" class="nav-link">All Roles Permissions</a>
            </li>

            @if(Auth::user()->can('permissions.add'))
            <li class="nav-item">
                <a href="{{ route('roles.permission.add') }}" class="nav-link">Add Permission to Role</a>
            </li>
            @endif

          </ul>
        </div>
      </li>
      @endif

      @if(Auth::user()->can('admins.all'))
      <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#admin" role="button" aria-expanded="false" aria-controls="admin">
              <i class="link-icon" data-feather="mail"></i>
              <span class="link-title">Manage Admin Users</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="admin">
              <ul class="nav sub-menu">

                  <li class="nav-item">
                      <a href="{{ route('admins.all') }}" class="nav-link">All Admins</a>
                  </li>


                  @if(Auth::user()->can('admins.add'))
                  <li class="nav-item">
                      <a href="{{ route('admins.addnew') }}" class="nav-link">Add New Admin</a>
                  </li>
                  @endif

              </ul>
          </div>
      </li>
      @endif

      {{-- <li class="nav-item nav-category">Users</li>

        <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="link-icon" data-feather="users"></i>
            <span class="link-title">All Customers</span>
        </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="link-icon" data-feather="edit"></i>
              <span class="link-title">Edit Customer</span>
            </a>
        </li> --}}

       {{-- <li class="nav-item">
         <a class="nav-link" data-bs-toggle="collapse" href="#authPages" role="button" aria-expanded="false" aria-controls="authPages">
           <i class="link-icon" data-feather="unlock"></i>
           <span class="link-title">Authentication</span>
           <i class="link-arrow" data-feather="chevron-down"></i>
         </a>
         <div class="collapse" id="authPages">
           <ul class="nav sub-menu">
             <li class="nav-item">
               <a href="{{ route('admin.logout') }}" class="nav-link">Login</a>
             </li>
             <li class="nav-item">
               <a href="{{ route('admin.logout') }}" class="nav-link">Register</a>
             </li>
           </ul>
         </div>
       </li> --}}

     </ul>
   </div>
 </nav>
