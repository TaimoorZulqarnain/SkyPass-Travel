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
        <!-- @if(auth()->user()->can('SidebarAirlines')) -->
        <div class="sidebar__item">
          <div class="sidebar__button">
            <a href="{{URL::to('admin/airline')}}" class="d-flex items-center text-15 lh-1 fw-500">
              <i class="fas fa-flag  mr-15"></i>
              Manage Airline
            </a>
          </div>
        </div>
        <!-- @endif -->
        <!-- @if(auth()->user()->can('SidebarAgents')) -->
        <div class="sidebar__item">
          <div class="sidebar__button">
            <a href="{{ route('agents.index') }}" class="d-flex items-center text-15 lh-1 fw-500">
              <i class="fas fa-map-marker-alt mr-15"></i>
              Manage Agents
            </a>
          </div>
        </div>
        <!-- @endif -->
        <!-- @if(auth()->user()->can('SidebarTickets')) -->
        <div class="sidebar__item ">
          <div class="accordion -db-sidebar js-accordion">
            <div class="accordion__item">
              <div class="accordion__button">
                <div class="sidebar__button col-12 d-flex items-center justify-between">
                  <div class="d-flex items-center text-15 lh-1 fw-500">
                    <i class="fas fa-book t mr-15"></i>
                    Manage Ticket
                  </div>
                  <div class="icon-chevron-sm-down text-7"></div>
                </div>
              </div>


              <div class="accordion__content">
                <ul class="list-disc pb-5 pl-40">

                  <li>
                    <a href="{{URL::to('admin/ticket')}}" class="text-15">All Ticket</a>
                  </li>

                  <li>
                    <a href="{{URL::to('admin/create_ticket')}}" class="text-15">Add Ticket</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- @endif    -->
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

        <!-- @if(auth()->user()->can('SidebarUsers')) -->
        <div class="sidebar__item">
          <div class="sidebar__button">
            <a href="{{URL::to('admin/user')}}" class="d-flex items-center text-15 lh-1 fw-500">
              <i class="fas fa-user-cog mr-15"></i>
              Sub-Admin
            </a>
          </div>
        </div>
        <!-- @endif -->
       
        <!-- @if(auth()->user()->can('SidebarRoles')) -->
        <div class="sidebar__item">
          <div class="sidebar__button">
            <a href="{{Url::to('/role')}}" class="d-flex items-center text-15 lh-1 fw-500">
              <i class="fas fa-bus-alt mr-15"></i>
              Roles
            </a>
          </div>
        </div>
        <!-- @endif -->
       
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