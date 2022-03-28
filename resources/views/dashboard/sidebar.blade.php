
 <!-- Sidebar -->
 <div class="sidebar">

    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{ asset('dashboard/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            {{-- <a href="#" class="d-block">{{auth()->user()->name}}</a> --}}
            <a href="{{route('dashboard')}}" class="d-block">{{ auth()->user()->name }} </a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->


            <li class="nav-item menu-open">
                <a href="{{route('dashboard')}}" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard

                    </p>
                </a>

            </li>


                <li class="nav-header">Roles & Permissions </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-user-tag"></i>
                        <p>
                            Roles
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">


                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-plus-square"></i>
                                <p>create</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-list-ul"></i>
                                <p>Index</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-key"></i>
                        <p>
                            Permissions
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-list-ul"></i>
                                <p>Index</p>
                            </a>
                        </li>

                    </ul>
                </li>




                    <li class="nav-header">Human Resources</li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-user-tie"></i>
                                <p>
                                    Admins
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview" style="display: none;">

                                    <li class="nav-item">
                                        <a href="{{route('admins.create')}}" class="nav-link">
                                            <i class="far fa-plus-square"></i>
                                            <p>create</p>
                                        </a>
                                    </li>

                                <li class="nav-item">
                                    <a href="{{route('admins.index')}}" class="nav-link">
                                        <i class="fas fa-list-ul"></i>
                                        <p>Index</p>
                                    </a>
                                </li>

                            </ul>
                        </li>


                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-user-tie"></i>
                            <p>
                                Users
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: none;">

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-plus-square"></i>
                                        <p>create</p>
                                    </a>
                                </li>


                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fas fa-list-ul"></i>
                                    <p>Index</p>
                                </a>
                            </li>

                        </ul>
                    </li>





            <li class="nav-header">Content Management</li>
            <li class="nav-item">

                <a href="#" class="nav-link">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>
                        Cities
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>

                <ul class="nav nav-treeview" style="display: none;">

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-plus-square"></i>
                                <p>create</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-list-ul"></i>
                                <p>Index</p>
                            </a>
                        </li>

                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-layer-group"></i>
                    <p>
                        Categories
                        <i class="fas fa-angle-left right"></i>

                    </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-plus-square"></i>
                                <p>create</p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-list-ul"></i>

                                <p>Index</p>
                            </a>
                        </li>

                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-layer-group"></i>
                    <p>
                        Sections
                        <i class="fas fa-angle-left right"></i>

                    </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">

                        <li class="nav-item">
                            <a href="{{route('sections.create')}}" class="nav-link">
                                <i class="far fa-plus-square"></i>
                                <p>create</p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="{{route('sections.index')}}" class="nav-link">
                                <i class="fas fa-list-ul"></i>

                                <p>Index</p>
                            </a>
                        </li>

                </ul>
            </li>


                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-tasks"></i>
                        <p>
                            Tasks
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-plus-square"></i>
                                    <p>create</p>
                                </a>
                            </li>




                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-list-ul"></i>
                                <p>Index</p>
                            </a>
                        </li>



                </ul>

            </li>

            <li class="nav-header">Settings</li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-edit"></i>
                    <p>
                        Edit Profile
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-lock"></i>
                    <p>
                        Change Password
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link">
                    <i class="fas fa-sign-out-alt"></i>
                    <p>
                        Logout
                    </p>
                </a>
            </li>





        </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->

