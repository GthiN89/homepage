<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
          <div class="profile-image">
            <div class="dot-indicator bg-success"></div>
          </div>
          <div class="text-wrapper">
            <p class="profile-name">{{ Auth::user()->name }}</p>
          </div>
        </a>
      </li>
      <li class="nav-item nav-category">
        <span class="nav-link">Dashboard</span>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
          <span class="menu-title">Dashboard</span>
          <i class="icon-screen-desktop menu-icon"></i>
        </a>
      </li>
      <li class="nav-item nav-category"><span class="nav-link">Settings</span></li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#user" aria-expanded="false" aria-controls="user">
          <span class="menu-title">User</span>
          <i class="icon-user  menu-icon"></i>
        </a>
        <div class="collapse" id="user">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('user.profile') }}">Profile</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('messages') }}">Messages</a></li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <span class="menu-title">Content</span>
          <i class="icon-book-open menu-icon"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('settings.home') }}">Home</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('settings.about') }}">About</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('settings.experience') }}">Experience</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('settings.skills') }}">Skills</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('settings.portfolio') }}">Portfolio</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('settings.contact') }}">Contact Information</a></li>
          </ul>
        </div>
      </li>




    </ul>
  </nav>
