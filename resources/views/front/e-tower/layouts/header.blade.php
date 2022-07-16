<aside id="layout-menu" class="layout-menu-horizontal menu-horizontal menu bg-menu-theme flex-grow-0">
    <div class="container-xxl d-flex h-100">
      <ul class="menu-inner">
        <!-- Dashboards -->
        <li class="menu-item active">
          <a href="{{ route('settings') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div data-i18n="Settings">Settings</div>
          </a>
        </li>

        <!-- Pages -->
        <li class="menu-item">
          <a href="#" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-collection"></i>
            <div data-i18n="Landing Page">Landing Page</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item">
              <a href="{{ route('sliders') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user-circle"></i>
                <div data-i18n="Sliders">Sliders</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="{{ route('page_details') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div data-i18n="Page Details">Page Details</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="{{ route('messages') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-buoy"></i>
                <div data-i18n="Messages">Messages</div>
              </a>
            </li>
          </ul>
        </li>

      </ul>
    </div>
  </aside>