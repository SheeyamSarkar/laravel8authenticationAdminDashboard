<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">

    <!-- LOGO -->
    <div class="topbar-left">
        <div class="">
            <!--<a href="index.html" class="logo text-center">Fonik</a>-->
            {{-- <a href="{{ route('dashboard') }}" class="logo"><img src="{{ asset('backend/assets/images/anto-logo-black.png') }}" height="100" alt="logo"></a> --}}
            @if (Auth::user()->image == null)
                <img src="{{ asset('images/default.png') }}" class="left_sidebar_image"
                    alt="user-profle" style="max-width:100px; height:auto">
            @else
                <img class="d-flex mr-2 rounded-circle "
                    src="{{ asset('images/' . Auth::user()->image) }}"
                    alt="Generic placeholder image" style="max-width:100px; height:auto">
            @endif
        </div>
    </div>

    <div class="sidebar-inner slimscrollleft">
        <div id="sidebar-menu">
            <ul>

                {{-- <li class="menu-title">Main</li> --}}

                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect"><i class="dripicons-device-desktop"></i><span> Dashboard </span></a>
                </li>
                <li>
                    <a href="{{ route('add_user') }}" class="waves-effect"><i class="ion-person-add"></i><span> Add User </span></a>
                </li>
                {{-- 1ST menu --}}
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-suitcase"></i><span>
                            User Interface <span class="float-right"><i
                                    class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="list-unstyled">

                        <li class="has_multi_sub">
                            <a href="javascript:void(0);" class="waves-effect">
                                <span>
                                    Email <span class="float-right"><i class="mdi mdi-chevron-right"></i></span>
                                </span>
                            </a>
                            <ul class="list-unstyledMulti">
                                <li><a href="email-inbox.html">Inbox</a></li>
                                <li><a href="email-read.html">Email Read</a></li>
                                <li><a href="email-compose.html">Email Compose</a></li>
                            </ul>
                        </li>


                        <li class="has_multi_sub">
                            <a href="javascript:void(0);" class="waves-effect">
                                <span>
                                    Email <span class="float-right"><i class="mdi mdi-chevron-right"></i></span>
                                </span>
                            </a>
                            <ul class="list-unstyledMulti">
                                <li><a href="email-inbox.html">Inbox</a></li>
                                <li><a href="email-read.html">Email Read</a></li>
                                <li><a href="email-compose.html">Email Compose</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                {{-- 1ST menu --}}

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-suitcase"></i><span> User Interface <span class="float-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="list-unstyled">
                        <li><a href="ui-buttons.html">Buttons</a></li>
                        <li><a href="ui-cards.html">Cards</a></li>
                        <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                        <li><a href="ui-modals.html">Modals</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>
<!-- Left Sidebar End -->