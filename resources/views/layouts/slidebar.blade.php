<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">HRIS APP</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('dashboard') }}">
                {{-- <img class="d-inline-block" width="32px" height="30.61px" src="{{  }}" alt=""> --}}
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link"><i
                        class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            {{-- @auth
          @role('Admin') --}}
            <li class="menu-header">Master Data</li>
            <li class="nav-item">
                <a href="{{ route('users.index') }}" class="nav-link"><i
                        class="fas fa-database"></i><span>User</span></a>
            </li>
            <li class="nav-item">
                <a href="{{ route('pegawai.index') }}" class="nav-link"><i
                        class="fas fa-user"></i><span>Pegawai</span></a>
            </li>
            <li class="nav-item">
                <a href="{{ route('cuti.index') }}" class="nav-link"><i
                        class="fas fa-user"></i><span>Cuti</span></a>
            </li>
            {{-- @endrole
            @endauth --}}

        </ul>
    </aside>
</div>
{{-- <header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="{{ route('home.index') }}" class="nav-link px-2 text-white">Home</a></li>
          @auth
            @role('Admin')
            <li><a href="{{ route('users.index') }}" class="nav-link px-2 text-white">Users</a></li>
            <li><a href="{{ route('roles.index') }}" class="nav-link px-2 text-white">Roles</a></li>
            @endrole
            <li><a href="{{ route('posts.index') }}" class="nav-link px-2 text-white">Posts</a></li>
          @endauth
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>

        @auth
          {{auth()->user()->name}}&nbsp;
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger"
                onclick="event.preventDefault();this.closest('form').submit();">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </form>
        @endauth

        @guest
          <div class="text-end">
            <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Login</a>
            <a href="{{ route('register.perform') }}" class="btn btn-warning">Sign-up</a>
          </div>
        @endguest
      </div>
    </div>
  </header> --}}
