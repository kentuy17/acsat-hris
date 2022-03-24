<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
      <!-- EMPLOYEES -->
      <li class="nav-item">
        <a href="#" id="employees" class="nav-link">
          <i class="nav-icon fa fa-user"></i>
          <p>Employees</p>
          <i class="fas fa-angle-left right"></i>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{route('add-employee')}}" class="nav-link">
              <i class="fa fa-caret-right nav-icon"></i>
              <p>Add Employee</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('list-employee')}}" class="nav-link">
              <i class="fa fa-caret-right nav-icon"></i>
              <p>Employee List</p>
            </a>
          </li>
        </ul>
      </li>

      <!-- ROLES -->
      <li class="nav-item">
        <a href="#" id="roles" class="nav-link">
          <i class="nav-icon fa fa-graduation-cap"></i>
          <p>Roles</p>
          <i class="fas fa-angle-left right"></i>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{route('add-role')}}" class="nav-link">
              <i class="fa fa-caret-right nav-icon"></i>
              <p>Add Role</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('role-list')}}" class="nav-link">
              <i class="fa fa-caret-right nav-icon"></i>
              <p>List Roles</p>
            </a>
          </li>
        </ul>
      </li>

      <!-- LEAVES -->
      <li class="nav-item">
        <a href="#" id="leaves" class="nav-link">
          <i class="nav-icon fa fa-envelope"></i>
          <p>Leaves</p>
          <i class="fas fa-angle-left right"></i>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{route('apply-leave')}}" class="nav-link">
              <i class="fa fa-caret-right nav-icon"></i>
              <p>Apply Leave</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('my-leave-list')}}" class="nav-link">
              <i class="fa fa-caret-right nav-icon"></i>
              <p>My Leave List</p>
            </a>
          </li>
          <!-- For HR -->
          @if(\Auth::user()->isHR())
            <li class="nav-item">
              <a href="{{route('add-leave-type')}}" class="nav-link">
              <i class="fa fa-caret-right nav-icon"></i>
                <p>Add Leave Type</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('leave-type-listing')}}" class="nav-link">
              <i class="fa fa-caret-right nav-icon"></i>
                <p>Leave Types</p>
              </a>
            </li>
          @endif
          <!-- HR or Coordinator -->
          @if(Auth::user()->isHR() || Auth::user()->isCoordinator())
            <li class="nav-item">
              <a href="{{route('total-leave-list')}}" class="nav-link">
              <i class="fa fa-caret-right nav-icon"></i>
                <p>Total Leave Lists</p>
              </a>
            </li>
          @endif
        </ul>
      </li>

      
      @if(Auth::user()->isHR())
        <!-- ATTENDANCE -->
        <li class="nav-item">
          <a href="#" id="attendance" class="nav-link">
            <i class="nav-icon fa fa-clock"></i>
            <p>Attendance</p>
            <i class="fas fa-angle-left right"></i>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('attendance-upload')}}" class="nav-link">
                <i class="fa fa-caret-right nav-icon"></i>
                <p>Upload Excel</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- HOLIDAY -->
        <li class="nav-item">
          <a href="#" id="holiday" class="nav-link">
            <i class="nav-icon fa fa-calendar"></i>
            <p>Holiday</p>
            <i class="fas fa-angle-left right"></i>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('add-holidays')}}" class="nav-link">
                <i class="fa fa-caret-right nav-icon"></i>
                <p>Add Holiday</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/holiday-listing" class="nav-link">
                <i class="fa fa-caret-right nav-icon"></i>
                <p>Holiday List</p>
              </a>
            </li>
          </ul>
        </li>
      @endif

      <!-- MISC -->
      <li class="nav-header">MISC</li>
      <!-- Downloadable forms -->
      <li class="nav-item">
        <a href="/download-forms" class="nav-link">
          <i class="fa fa-file-excel nav-icon"></i>
          <p>Download Forms</p>
        </a>
      </li>
      <!-- policy -->
      <li class="nav-item">
        <a href="/hr-policy" class="nav-link">
        <i class="fa fa-file-pdf nav-icon"></i>
          <p>HR Policy</p>
        </a>
      </li>

      <!-- DEFAULT -->
    </ul>
  </nav>