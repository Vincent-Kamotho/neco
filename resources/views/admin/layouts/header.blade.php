<nav class="navbar header-navbar pcoded-header">
    <div class="navbar-wrapper">
        <div class="navbar-logo">
            <a class="mobile-menu" id="mobile-collapse" href="#">
                <i class="feather icon-menu"></i>
            </a>
            <a href="{{url('admin/home')}}">
                <img class="img-fluid" src="{{asset('assets/frontend/images/neco-logo.png')}}" style="height:50px; background:#eeeaea" />
            </a>
            <a class="mobile-options">
                <i class="feather icon-more-horizontal"></i>
            </a>
        </div>
        <div class="navbar-container">
            <ul class="nav-left">
                <li class="header-search">
                    <div class="main-search morphsearch-search">
                        <div class="input-group">
                            <span class="input-group-addon search-close"><i
                                    class="feather icon-x"></i></span>
                            <input type="text" class="form-control">
                            <span class="input-group-addon search-btn"><i
                                    class="feather icon-search"></i></span>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#!" onclick="javascript:toggleFullScreen()">
                        <i class="feather icon-maximize full-screen"></i>
                    </a>
                </li>
            </ul>
        </div> 
    </div>
</nav>