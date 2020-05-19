<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('public/assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('public/assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          @if($user->role==1)
        <a href="#" class="d-block">Admin</a>
          @elseif($user->role==2)
        <a href="#" class="d-block">User</a>
          @elseif($user->role==3)
          <a href="#" class="d-block">Member</a>
          @endif
        </div>
          
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
          
         @if($user->role==1)
           <li class="nav-item has-treeview menu-open">
            <a href="{{route('dashbord')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           
          </li>
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Manage User
                <i class="fas fa-angle-left right"></i>
                {{-- <span class="badge badge-info right">6</span> --}}
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('user/')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Users</p>
                </a>
              </li>
            
            </ul>
          </li>
         
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Manage Faq
                    <i class="fas fa-angle-left right"></i>
                    {{-- <span class="badge badge-info right">6</span> --}}
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                <a href="{{url('admin/faq/')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Faq</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/faq/add')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
            
            </ul>
              
          </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">

                  <i class="nav-icon fas fa-question-circle"></i>
                  <p>
                    Manage Questions
                    <i class="fas fa-angle-left right"></i>
                    {{-- <span class="badge badge-info right">6</span> --}}
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                <a href="{{url('admin/question')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Questions</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/question/add')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/question/assign')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Assign</p>
                </a>
              </li>
            
            </ul>
              
          </li>
          @endif

          @if($user->role==2)
                <li class="nav-item has-treeview menu-open">
                     <a href="{{url('dashbord/user')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           
          </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">

                  <i class="nav-icon fas fa-question-circle"></i>
                  <p>
                    Manage Members
                    <i class="fas fa-angle-left right"></i>
                    {{-- <span class="badge badge-info right">6</span> --}}
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                <a href="{{url('member/add')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Member</p>
                </a>
              </li>
            
            </ul>
              
          </li>
     
          @endif

            @if($user->role==3)
                <li class="nav-item has-treeview menu-open">
                     <a href="{{url('dashbord/member')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           
           <li class="nav-item has-treeview">
                <a href="#" class="nav-link">

                  <i class="nav-icon fas fa-question-circle"></i>
                  <p>
                    My Question
                    <i class="fas fa-angle-left right"></i>
                    {{-- <span class="badge badge-info right">6</span> --}}
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                <a href="{{url('myquestion/')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Question</p>
                </a>
              </li>
            
            </ul>
              
          </li>
         <!--  </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">

                  <i class="nav-icon fas fa-question-circle"></i>
                  <p>
                    Manage Members
                    <i class="fas fa-angle-left right"></i>
                    {{-- <span class="badge badge-info right">6</span> --}}
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                <a href="{{url('member/add')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Member</p>
                </a>
              </li>
            
            </ul> -->
              
          </li>
     
          @endif
          <!-- start -->
        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>