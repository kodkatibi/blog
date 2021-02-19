<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">
        <div class="">
            <div class="main-menu-header">
                <img class="img-40 img-radius" src="http://www.mobillium.com/assets/images/favicon.png"
                     alt="User-Profile-Image">
                <div class="user-details">
                    <span>{{\Illuminate\Support\Facades\Auth::user()->name}}</span>
                    <span id="more-details">{{\Illuminate\Support\Facades\Auth::user()->role}}<i
                            class="ti-angle-down"></i></span>
                </div>
            </div>

            <div class="main-menu-content">
                <ul>
                    <li class="more-details">
                        <a href="{{route('logout')}}"><i class="ti-layout-sidebar-left"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Dashboard</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="active">
                <a href="{{route('manage.index')}}">
                    <span class="pcoded-micon"><i class="ti-home"></i><b></b></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-text"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Articles</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="{{route('manage.article.index')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext"
                                  data-i18n="nav.basic-components.alert">All Articles</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="{{route('manage.myarticles')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext"
                                  data-i18n="nav.basic-components.alert">My Articles</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="{{route('manage.article.add')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext"
                                  data-i18n="nav.basic-components.alert">Write Article</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                </ul>
            </li>
        </ul>

    </div>
</nav>
