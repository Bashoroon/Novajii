<div class="sidebar">
    <div class="sidebar-header">
      <a href="../" class="sidebar-logo">Novajii</a>
    </div><!-- sidebar-header -->
    <div id="sidebarMenu" class="sidebar-body">
      <div class="nav-group show">
        <a href="#" class="nav-label">Dashboard</a>
        <ul class="nav nav-sidebar">
          <li class="nav-item">
            <a href="/dashboard" class="nav-link active"><i class="ri-pie-chart-2-fill"></i> <span>Home</span></a>
          </li>
          <li class="nav-item">
            <a href="/products" class="nav-link "><i class="ri-pie-chart-2-fill"></i> <span>All products</span></a>
          </li>
        </ul>
       
    
   
    </div><!-- sidebar-body -->
    <div class="sidebar-footer">
      <div class="sidebar-footer-top">
        <div class="sidebar-footer-thumb">
          <img src="https://via.placeholder.com/500/4c5366/fff" alt="">
        </div><!-- sidebar-footer-thumb -->
        <div class="sidebar-footer-body">
          <h6><a href="../pages/profile.html">Lawal Sherif</a></h6>
          <p>Web Developer</p>
        </div><!-- sidebar-footer-body -->
        <a id="sidebarFooterMenu" href="" class="dropdown-link"><i class="ri-arrow-down-s-line"></i></a>
      </div><!-- sidebar-footer-top -->
      <div class="sidebar-footer-menu">
        <nav class="nav">
          <a href=""><i class="ri-edit-2-line"></i> Edit Profile</a>
          <a href=""><i class="ri-profile-line"></i> View Profile</a>
        </nav>
        <hr>
        <nav class="nav">
          <a href=""><i class="ri-question-line"></i> Help Center</a>
          <a href=""><i class="ri-lock-line"></i> Privacy Settings</a>
          <a href=""><i class="ri-user-settings-line"></i> Account Settings</a>
          <form method="POST" action="{{ route('logout') }}">
            @csrf
         
            <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-dropdown-link> 
        </form>
         
        </nav>
      </div><!-- sidebar-footer-menu -->
    </div><!-- sidebar-footer -->
  </div>

  