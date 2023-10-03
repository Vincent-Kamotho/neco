
        <nav class="pcoded-navbar">
            <div class="pcoded-inner-navbar main-menu">
                <div class="pcoded-navigatio-lavel">Admin</div>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="active ">
                        <a href="{{url('admin/home')}}">
                            <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                            <span class="pcoded-mtext">Dashboard</span>
                        </a>
                    </li>
                    <li class="pcoded-hasmenu">
                        <a href="javascript:void(0)">
                            <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                            <span class="pcoded-mtext">Appointments</span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class="">
                                <a href="{{url('admin/appointments')}}">
                                    <span class="">Requests</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class>
                        <a href="{{url('admin/schedule')}}">
                            <span class="pcoded-micon"><i class="feather icon-calendar"></i></span>
                            <span class="pcoded-mtext">Schedule</span>
                        </a>
                    </li>
                    <li class="pcoded-hasmenu">
                        <a href="javascript:void(0)">
                            <span class="pcoded-micon"><i class="feather icon-user-plus"></i></span>
                            <span class="pcoded-mtext">Team</span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class="">
                                <a href="{{url('admin/team/counsellors')}}">
                                    <span class="">Counsellors</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{url('admin/team/staff')}}">
                                    <span class="">Staff</span>
                                </a>
                            </li>
                            
                        </ul>
                        
                    </li>
                    <li class="pcoded-hasmenu">
                        <a href="javascript:void(0)">
                            <span class="pcoded-micon"><i class="feather icon-users"></i></span>
                            <span>Users</span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class="">
                                <a href="{{url('admin/users/list')}}">
                                    <span class="">List</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{url('admin/users/create-user')}}">
                                    <span class="">Add</span>
                                </a>
                            </li> 
                        </ul>
                    </li>
                    <li class="pcoded-hasmenu">
                        <a href="javascript:void(0)">
                            <span class="pcoded-micon"><i class="feather icon-activity"></i></span>
                            <span>Configurations</span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class="">
                                <a href="{{url('admin/events/list')}}">
                                    <span class="">Events</span>
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                    <li class="">
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <span class="pcoded-micon"><i class="feather icon-circle"></i></span>
                            <span class="pcoded-mtext">Logout</span>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        
                    </li>
                </ul>
                
            </div>
        </nav>
        
    