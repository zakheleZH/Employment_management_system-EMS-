  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->

      <!-- SidebarSearch Form -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <!-- start here  -->

               {{-- @if(isset(auth()->user()->role->permission['name']['department']['can-add'])) --}}
          <li class="nav-item menu-close">
            <a href="#" class="nav-link active">
              <i class="fa fa-link"></i>
              <p>
                Departments
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="{{route('departments.create')}}" class="nav-link">
              <i class="fa fa-plus"></i>
              <p>
                Create Department

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('departments.index')}}" class="nav-link">
              <i class="fa fa-building"></i>

              <p>
                List Department
              </p>

            </a>
          </li>

            </ul>
          </li>
          <!-- end here -->

          {{-- @endif --}}


                <!-- start here  -->
                {{-- @if(isset(auth()->user()->role->permission['name']['department']['can-add'])) --}}
        <li class="nav-item menu-close">
            <a href="#" class="nav-link active">
              <i class="fas fa-user fa-fw"></i>
              <p>
                User
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="{{route('roles.create')}}" class="nav-link">
              <i class="fa fa-plus"></i>
              <p>
               Create Role

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('roles.index')}}" class="nav-link">
              <i class="fa fa-list"></i>

              <p>
               List Role
              </p>

            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('users.create')}}" class="nav-link">
              <i class="fa fa-plus"></i>
              <p>
              Create Employee
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('users.index')}}" class="nav-link">
              <i class="fa fa-list"></i>
              <p>
                List Employee
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('permissions.create')}}" class="nav-link">
              <i class="fa fa-plus"></i>
              <p>
                Create Permission
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('permissions.index')}}" class="nav-link">
              <i class="fa fa-list"></i>
              <p>
                List Permission
              </p>
            </a>
          </li>




            </ul>
          </li>
          <!-- end here -->
{{-- @endif --}}


               <!-- start here  -->
               <li class="nav-item menu-close">
                <a href="#" class="nav-link active">
                  <i class="fa fa-pencil-alt"></i>
                  <p>
                    Staff Leave
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="{{route('leaves.create')}}" class="nav-link">
                  <i class="fa fa-plus"></i>
                  <p>
                    Create Leave

                  </p>
                </a>
              </li>
              @if(isset(auth()->user()->role->permission['name']['leave']['can-list']))
              <li class="nav-item">
                <a href="{{route('leaves.index')}}" class="nav-link">
                  <i class="fa fa-list"></i>

                  <p>
                   List Leave
                  </p>

                </a>
              </li>
              @endif









                </ul>
              </li>
              <!-- end here -->



                    <!-- start here  -->
          <li class="nav-item menu-close">
            <a href="#" class="nav-link active">
              <i class="fa fa-pencil-alt""></i>
              <p>
              Notice
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="{{route('notices.create')}}" class="nav-link">
              <i class="fa fa-plus"></i>
              <p>
               Create Notice

              </p>
            </a>
          </li>
          @if(isset(auth()->user()->role->permission['name']['notice']['can-list']))
          <li class="nav-item">
            <a href="{{route('notices.index')}}" class="nav-link">
              <i class="fa fa-list"></i>

              <p>
                List Notice
              </p>

            </a>
          </li>
          @endif




            </ul>
          </li>



          <li class="nav-item menu-close">
            <a href="#" class="nav-link active">
              <i class="fa fa-envelope"></i>
              <p>
              Mail
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="{{route('mails.create')}}" class="nav-link">
              <i class="fa fa-plus"></i>
              <p>
               Create Mail

              </p>
            </a>
          </li>
          <!-- end here -->






        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
