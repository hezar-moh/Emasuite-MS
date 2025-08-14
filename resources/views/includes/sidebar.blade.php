  <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
          <div class="brand-logo d-flex align-items-center justify-content-between">
              <a href="{{ route('system.index') }}" class="text-nowrap logo-img">
                  <img src="{{ asset('assets/images/logos/ema.jpeg') }}" alt="" width="100" height="30" />
              </a>
              <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                  <i class="ti ti-x fs-6"></i>
              </div>
          </div>
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
              <ul id="sidebarnav">
                  <li class="nav-small-cap">
                      <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
                      <span class="hide-menu">Home</span>
                  </li>
                  <li class="sidebar-item">
                      <a class="sidebar-link" href="{{ route('dashboard-index') }}" aria-expanded="false">
                          <i class="ti ti-atom"></i>
                          <span class="hide-menu">Dashboard</span>
                      </a>
                  </li>
                  <!-- ---------------------------------- -->
                  <!-- Dashboard -->
                  <!-- ---------------------------------- -->
                  <li class="sidebar-item">
                      <a class="sidebar-link justify-content-between" href="{{ route('system.index') }}"
                          aria-expanded="false">
                          <div class="d-flex align-items-center gap-3">
                              <span class="d-flex">
                                  <i class="ti ti-aperture"></i>
                              </span>
                              <span class="hide-menu">Systems</span>
                          </div>

                      </a>
                  </li>
                  <li class="sidebar-item">
                      <a class="sidebar-link justify-content-between" href="#" aria-expanded="false">
                          <div class="d-flex align-items-center gap-3">
                              <span class="d-flex">
                                  <i class="ti ti-aperture"></i>
                              </span>
                              <span class="hide-menu">Categories</span>
                          </div>

                      </a>
                  </li>

              </ul>
          </nav>
          <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
  </aside>

  <div class="body-wrapper">

      <header class="app-header ">
  
      </header>
