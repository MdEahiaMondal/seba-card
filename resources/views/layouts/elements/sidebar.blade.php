<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <img alt="image" class="rounded-circle"
                         style="width: 48px; height: 48px"
                         @if(auth()->user())
                            src="{{ asset('uploads/users/'.auth()->user()->image) }}"
                         @endif
                         />
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="block m-t-xs font-bold">{{ auth()->user()->name ?? '' }}</span>
                        <span class="text-muted text-xs block">{{ auth()->user()->email ?? '' }}<b class="caret"></b></span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a class="dropdown-item" href="{{ route('profiles.index') }}">Profile</a></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out"></i> প্রস্থান
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>

            {{--our sidebar menu--}}
            <li class="{{ request()->routeIs('/') ? 'active' : ''  }}">
                <a href="{{ route('/') }}"><i class="fa fa-dashboard"></i> <span class="nav-label">ড্যাশবোর্ড</span></a>
            </li>

            <li class="{{ request()->routeIs('sliders.*') ? 'active' : ''  }}">
                <a href="{{ route('sliders.index') }}"><i class="fa fa-image"></i> <span class="nav-label">স্লাইডার</span></a>
            </li>

            <li class="{{ request()->routeIs('applications.list.*') ? 'active' : ''  }}">
                <a href="{{ route('applications.lists') }}"><i class="fa fa-image"></i> <span class="nav-label">আবেদনের তালিকা </span></a>
            </li>

            <li class="{{ request()->routeIs('active.application.search') ? 'active' : ''  }}">
                <a href="{{ route('active.application.search') }}"><i class="fa fa-image"></i> <span class="nav-label">এক্টিভ তালিকা</span></a>
            </li>



            {{--<li class="{{ request()->routeIs('contacts.*') ? 'active' : ''  }}">
                <a href="{{ route('contacts.index')  }}"><i class="fa fa-contao"></i> <span class="nav-label">যোগাযোগ</span></a>
            </li>
--}}

        </ul>
    </div>
</nav>
