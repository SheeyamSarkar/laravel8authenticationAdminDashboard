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
                        <li><a href="ui-images.html">Images</a></li>
                        <li><a href="ui-alerts.html">Alerts</a></li>
                        <li><a href="ui-progressbars.html">Progress Bars</a></li>
                        <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                        <li><a href="ui-lightbox.html">Lightbox</a></li>
                        <li><a href="ui-navs.html">Navs</a></li>
                        <li><a href="ui-pagination.html">Pagination</a></li>
                        <li><a href="ui-popover-tooltips.html">Popover & Tooltips</a></li>
                        <li><a href="ui-badge.html">Badge</a></li>
                        <li><a href="ui-carousel.html">Carousel</a></li>
                        <li><a href="ui-video.html">Video</a></li>
                        <li><a href="ui-typography.html">Typography</a></li>
                        <li><a href="ui-sweet-alert.html">Sweet-Alert</a></li>
                        <li><a href="ui-grid.html">Grid</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-mail"></i> <span> Email <span class="float-right"><i class="mdi mdi-chevron-right"></i></span> </span> </a>
                    <ul class="list-unstyled">
                        <li><a href="email-inbox.html">Inbox</a></li>
                        <li><a href="email-read.html">Email Read</a></li>
                        <li><a href="email-compose.html">Email Compose</a></li>
                    </ul>
                </li>

                

            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>
<!-- Left Sidebar End -->