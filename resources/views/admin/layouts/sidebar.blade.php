
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
                            <span class="pcoded-micon"><i class="feather icon-users"></i></span>
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
                        <a href="">
                            <span class="pcoded-micon"><i class="feather icon-users"></i></span>
                            <span class="pcoded-mtext">Users</span>
                        </a>
                        {{-- <ul class="pcoded-submenu">
                            <li class="">
                                <a href="default/widget-statistic.html">
                                    <span class="">Statistic</span>
                                </a>
                            </li>
                            
                        </ul> --}}
                    </li>
                </ul>
                
            </div>
        </nav>
        
    