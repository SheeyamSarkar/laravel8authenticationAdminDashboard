<!-- Top Bar Start -->
<div class="topbar">

    <nav class="navbar-custom">
        <ul class="list-inline float-right mb-0">
            <li class="list-inline-item dropdown notification-list">
                <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                   aria-haspopup="false" aria-expanded="false">
                    {{-- <img src="{{ asset('backend/assets/images/users/avatar-1.jpg') }}" alt="user" class="rounded-circle"> --}}
                    @if (Auth::user()->image != null)
                    <img src="{{asset('images/'.Auth::user()->image)}}" alt="user" class="rounded-circle">
                    @else 
                    <img src="{{asset('images/default.jpg')}}" alt="user" class="rounded-circle">
                    @endif
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <a class="dropdown-item" href="{{ route('user.profile') }}"><i class="dripicons-user text-muted"></i> Profile</a>
                    {{-- <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted"></i> Change Password</a> --}}
                    <div class="dropdown-divider"></div>
                    {{-- <a class="dropdown-item" href="#"><i class="dripicons-exit text-muted"></i> Logout</a> --}}
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="dripicons-exit text-muted"></i> Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                </div>
            </li>
        </ul>

        <!-- Page title -->
        <ul class="list-inline menu-left mb-0">
            <li class="list-inline-item">
                <button type="button" class="button-menu-mobile open-left waves-effect">
                    <i class="ion-navicon"></i>
                </button>
            </li>
            <li class="hide-phone list-inline-item app-search">
                <h3 class="page-title">Dashboard</h3>
            </li>
        </ul>

        <div class="clearfix"></div>
    </nav>

</div>
<!-- Top Bar End -->