<div class="dashboard__sidebar bg-white scroll-bar-1">
    <div class="sidebar -dashboard">
      <div class="sidebar__item">
        <div class="sidebar__button {{ request()->is('dashboard*') ? '-is-active' : '' }}">
          <a href="{{ route('agent-dashboard') }}" class="d-flex items-center text-15 lh-1 fw-500">
            <i class="fas fa-border-all mr-15"></i>
            
            Dashboard
          </a>
        </div>
      </div>
      <div class="sidebar__item">
        <div class="sidebar__button {{ request()->is('book-tickets*') ? '-is-active' : '' }}">
          <a href="{{URL::to('agents/book-tickets')}}" class="d-flex items-center text-15 lh-1 fw-500">
          <i class="fas fa-ticket t mr-15"></i>
            Book Tickets
          </a>
        </div>
      </div>    
      
      <div class="sidebar__item ">
        <div class="accordion -db-sidebar js-accordion">
          <div class="accordion__item {{ request()->is('agents/book-tickets*') ? '-is-active' : '' }}">
            <div class="accordion__button">
              <div class="sidebar__button col-12 d-flex items-center justify-between">
                <div class="d-flex items-center text-15 lh-1 fw-500">
                  <i class="fas fa-ticket t mr-15"></i>
                  On Hold Bookings
                </div>
                <div class="icon-chevron-sm-down text-7"></div>
              </div>
            </div>

            <div class="accordion__content">
              <ul class="list-disc pb-5 pl-40">
                <li>
                  <a href="{{URL::to('agents/ksa-on-hold-bookings')}}" class="text-15">KSA Bookings</a>
                </li>
                <li>
                  <a href="{{URL::to('agents/uae-on-hold-bookings')}}" class="text-15">UAE Bookings</a>
                </li>
                <li>
                  <a href="{{URL::to('agents/umrah-on-hold-bookings')}}" class="text-15">Umrah Bookings</a>
                </li>
                <li>
                  <a href="{{URL::to('agents/all-on-hold-bookings')}}" class="text-15">All Bookings</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>


      <div class="sidebar__item ">
        <div class="accordion -db-sidebar js-accordion">
          <div class="accordion__item {{ request()->is('agents/book-tickets*') ? '-is-active' : '' }}">
            <div class="accordion__button">
              <div class="sidebar__button col-12 d-flex items-center justify-between">
                <div class="d-flex items-center text-15 lh-1 fw-500">
                  <i class="fas fa-ticket t mr-15"></i>
                  Confirmed Bookings
                </div>
                <div class="icon-chevron-sm-down text-7"></div>
              </div>
            </div>

            <div class="accordion__content">
              <ul class="list-disc pb-5 pl-40">
                <li>
                  <a href="{{URL::to('agents/ksa-confirmed-bookings')}}" class="text-15">KSA Bookings</a>
                </li>
                <li>
                  <a href="{{URL::to('agents/uae-confirmed-bookings')}}" class="text-15">UAE Bookings</a>
                </li>
                <li>
                  <a href="{{URL::to('agents/umrah-confirmed-bookings')}}" class="text-15">Umrah Bookings</a>
                </li>
                <li>
                  <a href="{{URL::to('agents/all-confirmed-bookings')}}" class="text-15">All Bookings</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="sidebar__item">
        <div class="sidebar__button {{ request()->is('notification_agent*') ? '-is-active' : '' }}">
          <a href="{{URL::to('/notification_agent')}}" class="d-flex items-center text-15 lh-1 fw-500">
            <i class="fas fa-bell mr-15"></i>
            Notifications
          </a>
        </div>
      </div>     
      <div class="sidebar__item">
          <div class="sidebar__button {{ request()->is('frontpage*') ? '-is-active' : '' }}">
            <a href="{{route('frontpage.index')}}" class="d-flex items-center text-15 lh-1 fw-500">
              <i class="fas fa-globe mr-15"></i>
              Front page
            </a>
          </div>
        </div>
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
   