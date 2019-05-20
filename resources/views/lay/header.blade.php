<header class="bg-white-only header header-md navbar navbar-fixed-top-xs">
    <div class="navbar-header aside bg-info nav-xs"> <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html"> <i class="icon-list"></i> </a> <a href="index.html" class="navbar-brand text-lt"> <i class="icon-earphones"></i> <img src="images/logo.png" alt="." class="hide"> <span class="hidden-nav-xs m-l-sm">Musik</span> </a> <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user"> <i class="icon-settings"></i> </a> </div>
    <ul class="nav navbar-nav hidden-xs">
        <li> <a href="#nav,.navbar-header" data-toggle="class:nav-xs,nav-xs" class="text-muted"> <i class="fa fa-indent text"></i> <i class="fa fa-dedent text-active"></i> </a> </li>
    </ul>
    <form class="navbar-form navbar-left input-s-lg m-t m-l-n-xs hidden-xs" role="search">
        <div class="form-group">
            <div class="input-group"> <span class="input-group-btn"> <button type="submit" class="btn btn-sm bg-white btn-icon rounded"><i class="fa fa-search"></i></button> </span> <input type="text" class="form-control input-sm no-border rounded" placeholder="{{ config('home.home_search') }}"> </div>
        </div>
    </form>
    <div class="navbar-right ">
        <ul class="nav navbar-nav m-n hidden-xs nav-user user">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle bg clear" data-toggle="dropdown"> <span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm"> <img src="images/a0.png" alt="..."> </span>{{ config('home.user.name') }}<b class="caret"></b> </a> 
                <ul class="dropdown-menu animated fadeInRight">
                <li> <span class="arrow top"></span> <a href="#">{{ trans('label.settings') }}</a> </li>
                <li> <a href="profile.html">{{ trans('label.profile') }}</a> </li>
                <li class="divider"></li>
                <li> <a href="modal.lockme.html" data-toggle="ajaxModal" >{{ trans('label.logout') }}</a> </li>
                </ul>
            </li>
        </ul>
    </div>
</header>
