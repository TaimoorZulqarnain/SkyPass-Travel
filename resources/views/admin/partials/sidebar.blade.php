<div class="dashboard__sidebar bg-white scroll-bar-1">
      <div class="sidebar -dashboard">
        <div class="sidebar__item">
          <div class="sidebar__button {{ request()->is('dashboard*') ? '-is-active' : '' }}">
            <a href="{{URL::to('/dashboard')}}" class="d-flex items-center text-15 lh-1 fw-500">
              <i class="fas fa-border-all mr-15"></i>
              Admin Dashboard
            </a>
          </div>
        </div>
        <div class="sidebar__item">
          <div class="sidebar__button">
            <a href="{{URL::to('admin/airline')}}" class="d-flex items-center text-15 lh-1 fw-500">
              <i class="fas fa-flag  mr-15"></i>
              Manage Airline
            </a>
          </div>
        </div>
        <div class="sidebar__item">
          <div class="sidebar__button">
            <a href="{{ route('agents.index') }}" class="d-flex items-center text-15 lh-1 fw-500">
              <i class="fa-solid fa-users mr-15"></i>
              Manage Agents
            </a>
          </div>
        </div>
        <div class="sidebar__item ">
          <div class="accordion -db-sidebar js-accordion">
            <div class="accordion__item">
              <div class="accordion__button">
                <div class="sidebar__button col-12 d-flex items-center justify-between">
                  <div class="d-flex items-center text-15 lh-1 fw-500">
                    <i class="fa-solid fa-ticket mr-15"></i>
                    Manage Groups
                  </div>
                  <div class="icon-chevron-sm-down text-7"></div>
                </div>
              </div>
              <div class="accordion__content">
                <ul class="list-disc pb-5 pl-40">

                  <li>
                    <a href="{{URL::to('admin/ticket')}}" class="text-15">All Groups</a>
                  </li>

                  <li>
                    <a href="{{URL::to('admin/create_ticket')}}" class="text-15">Add Group</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="sidebar__item">
          <div class="sidebar__button {{ request()->is('admin/settings*') ? '-is-active' : '' }}">
            <a href="{{route('settings.index')}}" class="d-flex items-center text-15 lh-1 fw-500">
              <i class="fas fa-cogs mr-15"></i>
                Settings
            </a>
          </div>
        </div> 
        
        <div class="sidebar__item">
          <div class="sidebar__button">
            <a href="{{URL::to('/notification')}}" class="d-flex items-center text-15 lh-1 fw-500">
              <i class="fas fa-folder mr-15"></i>
              Notifications
            </a>
          </div>
        </div>
        <div class="sidebar__item">
          <div class="sidebar__button">
            <a href="{{URL::to('admin/user')}}" class="d-flex items-center text-15 lh-1 fw-500">
              <i class="fas fa-user-cog mr-15"></i>
              Sub-Admin
            </a>
          </div>
        </div>
        
        <div class="sidebar__item">
          <div class="sidebar__button">
            <a href="{{URL::to('admin/frontpage')}}" class="d-flex items-center text-15 lh-1 fw-500">
              <i class="fas fa-globe mr-15"></i>
              Front page
            </a>
          </div>
        </div>
        <div class="sidebar__item ">
          <div class="accordion -db-sidebar js-accordion">
            <div class="accordion__item">
              <div class="accordion__button">
                <div class="sidebar__button col-12 d-flex items-center justify-between">
                  <div class="d-flex items-center text-15 lh-1 fw-500">
                  <i class="fas fa-globe mr-15"></i>
                    Front page
                  </div>
                  <div class="icon-chevron-sm-down text-7"></div>
                </div>
              </div>
              <div class="accordion__content">
                <ul class="list-disc pb-5 pl-40">

                  <li>
                    <a href="{{URL::to('admin/header')}}" class="text-15">Header</a>
                  </li>

                  <li>
                    <a href="{{URL::to('admin/banner')}}" class="text-15">Banner</a>
                  </li>

                  <li>
                    <a href="{{URL::to('admin/about')}}" class="text-15">About us</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="sidebar__item ">
          <div class="accordion -db-sidebar js-accordion">
            <div class="accordion__item">
              <div class="accordion__button">
                <div class="sidebar__button col-12 d-flex items-center justify-between">
                  <div class="d-flex items-center text-15 lh-1 fw-500">
                  <i class="fas fa-globe mr-15"></i>
                    Home page
                  </div>
                  <div class="icon-chevron-sm-down text-7"></div>
                </div>
              </div>
              <div class="accordion__content">
                <ul class="list-disc pb-5 pl-40">

                  <li>
                    <a href="{{URL::to('admin/header')}}" class="text-15">Header</a>
                  </li>

                  <li>
                    <a href="{{URL::to('admin/banner')}}" class="text-15">Banner</a>
                  </li>

                  <li>
                    <a href="{{URL::to('admin/about')}}" class="text-15">About us</a>
                  </li>
                  <li>
                    <a href="{{URL::to('admin/feature')}}" class="text-15">Other Sections</a>
                  </li>
                  <li>
                    <a href="{{URL::to('admin/partners')}}" class="text-15">Our Partners</a>
                  </li>
                  <li>
                    <a href="{{URL::to('admin/footer')}}" class="text-15">Footer</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="sidebar__item">
          <div class="sidebar__button">
            <a href="{{URL::to('admin/departure')}}" class="d-flex items-center text-15 lh-1 fw-500">
              <i class="fa-solid fa-plane-departure mr-15"></i>
              Departure
            </a>
          </div>
        </div>
        <!-- <div class="sidebar__item">
          <div class="sidebar__button">
            <a href="{{Url::to('/role')}}" class="d-flex items-center text-15 lh-1 fw-500">
              <i class="fas fa-bus-alt mr-15"></i>
              Roles
            </a>
          </div>
        </div> -->
       
        @if(auth()->user()->can('SidebarPermissions'))
        <div class="sidebar__item">
          <div class="sidebar__button">
            <a href="{{Url::to('/permissions')}}" class="d-flex items-center text-15 lh-1 fw-500">
              <i class="fas fa-star mr-15"></i>
              Premissions
            </a>
          </div>
        </div>
        @endif
        <div class="sidebar__item">
          <div class="sidebar__button ">
            <a href="{{ route('logout') }}" class="d-flex items-center text-15 lh-1 fw-500" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="fas fa-sign-out-alt mr-15"></i>
              {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </div>
        </div>
      </div>
    </div>