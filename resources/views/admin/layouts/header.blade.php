<aside id="layout-menu" class="layout-menu-horizontal menu-horizontal menu bg-menu-theme flex-grow-0">
    <div class="container-xxl d-flex h-100">
      <ul class="menu-inner">
        <!-- Dashboards -->
        <li class="menu-item {{ (request()->is('admin_panel/udg/sliders*') || request()->is('admin_panel/udg/latest_project')) ? 'active' : '' }}">
            <a href="#" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-collection"></i>
              <div data-i18n="HOME">HOME</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item {{ request()->is('admin_panel/udg/sliders*') ? 'active' : '' }}">
                <a href="{{ route('udg.sliders') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-cog"></i>
                  <div data-i18n="Sliders">Sliders</div>
                </a>
              </li>
              <li class="menu-item {{ request()->is('admin_panel/udg/latest_project') ? 'active' : '' }}">
                <a href="{{ route('udg.latest_project') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-cog"></i>
                  <div data-i18n="Latest Project">Latest Project</div>
                </a>
              </li>
            </ul>
        </li>
        <li class="menu-item {{ (request()->is('admin_panel/udg/details') || request()->is('admin_panel/udg/why_choose_us*')
        || request()->is('admin_panel/udg/team*') || request()->is('admin_panel/udg/partners*')) ? 'active' : '' }}">
          <a href="#" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-collection"></i>
            <div data-i18n="About Us">About Us</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item {{ request()->is('admin_panel/udg/details') ? 'active' : '' }}">
              <a href="{{ route('udg.details') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div data-i18n="Details">Details</div>
              </a>
            </li>
            <li class="menu-item {{ request()->is('admin_panel/udg/why_choose_us*') ? 'active' : '' }}">
              <a href="{{ route('udg.why_choose_us') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div data-i18n="Why Choose Us">Why Choose Us</div>
              </a>
            </li>
            <li class="menu-item {{ request()->is('admin_panel/udg/team*') ? 'active' : '' }}">
              <a href="{{ route('udg.team') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div data-i18n="Team">Team</div>
              </a>
            </li>
            <li class="menu-item {{ request()->is('admin_panel/udg/partners*') ? 'active' : '' }}">
              <a href="{{ route('udg.partners') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div data-i18n="Partners">Partners</div>
              </a>
            </li>
          </ul>
        </li>
        <li class="menu-item {{ request()->is('admin_panel/udg/projects*') ? 'active' : '' }}">
          <a href="{{ route('udg.projects') }}" class="menu-link">
              <i class="menu-icon tf-icons bx bx-collection"></i>
              <div data-i18n="Projects">Projects</div>
          </a>
        </li>
        <li class="menu-item {{ request()->is('admin_panel/udg/events*') ? 'active' : '' }}">
          <a href="{{ route('udg.events') }}" class="menu-link">
              <i class="menu-icon tf-icons bx bx-collection"></i>
              <div data-i18n="Events">Events</div>
          </a>
        </li>
        <li class="menu-item {{ request()->is('admin_panel/udg/exhibitions*') ? 'active' : '' }}">
          <a href="{{ route('udg.exhibitions') }}" class="menu-link">
              <i class="menu-icon tf-icons bx bx-collection"></i>
              <div data-i18n="Exhibitions">Exhibitions</div>
          </a>
        </li>
        <li class="menu-item {{ request()->is('admin_panel/udg/news*') ? 'active' : '' }}">
          <a href="{{ route('udg.news') }}" class="menu-link">
              <i class="menu-icon tf-icons bx bx-collection"></i>
              <div data-i18n="News">News</div>
          </a>
        </li>
        <li class="menu-item {{ request()->is('admin_panel/udg/careers*') ? 'active' : '' }}">
          <a href="{{ route('udg.careers') }}" class="menu-link">
              <i class="menu-icon tf-icons bx bx-collection"></i>
              <div data-i18n="Careers">Careers</div>
          </a>
        </li>
        <li class="menu-item {{ (request()->is('admin_panel/udg/contact_us') || request()->is('admin_panel/udg/contact_us_requests*')) ? 'active' : '' }}">
          <a href="#" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-collection"></i>
            <div data-i18n="Contact Us">Contact Us</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item {{ request()->is('admin_panel/udg/contact_us') ? 'active' : '' }}">
              <a href="{{ route('udg.contact_us') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div data-i18n="Details">Details</div>
              </a>
            </li>
            <li class="menu-item {{ request()->is('admin_panel/udg/contact_us_requests*') ? 'active' : '' }}">
              <a href="{{ route('udg.contact_us_requests') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div data-i18n="Requests">Requests</div>
              </a>
            </li>
          </ul>
        </li>
        <!-- Pages -->
        <li class="menu-item {{ (request()->is('admin_panel/e_tower/sliders') || request()->is('admin_panel/e_tower/page_details') || request()->is('admin_panel/e_tower/facilities') || request()->is('admin_panel/e_tower/messages')) ? 'active' : '' }}">
          <a href="#" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-collection"></i>
            <div data-i18n="LANDING PAGE">LANDING PAGE</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item {{ request()->is('admin_panel/e_tower/sliders') ? 'active' : '' }}">
              <a href="{{ route('e-tower.sliders') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-slideshow"></i>
                <div data-i18n="Sliders">Sliders</div>
              </a>
            </li>
            <li class="menu-item {{ request()->is('admin_panel/e_tower/page_details') ? 'active' : '' }}">
              <a href="{{ route('e-tower.page_details') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Page Details">Page Details</div>
              </a>
            </li>
            <li class="menu-item {{ request()->is('admin_panel/e_tower/facilities') ? 'active' : '' }}">
              <a href="{{ route('e-tower.facilities') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-shield-alt-2"></i>
                <div data-i18n="Facilities">Facilities</div>
              </a>
            </li>
            <li class="menu-item {{ request()->is('admin_panel/e_tower/messages') ? 'active' : '' }}">
              <a href="{{ route('e-tower.messages') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-message-dots"></i>
                <div data-i18n="Messages">Messages</div>
              </a>
            </li>
            <li class="menu-item {{ request()->is('admin_panel/e_tower/settings') ? 'active' : '' }}">
              <a href="{{ route('e-tower.settings') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div data-i18n="Settings">Settings</div>
              </a>
            </li>
          </ul>
        </li>

      </ul>
    </div>
  </aside>