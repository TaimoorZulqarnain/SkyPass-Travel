<style>
      .heading-line {
        position: relative;
        padding-bottom: 5px;
        padding-left: 5px;
      }
      .btn-block {
        display: block;
        width: 100%;
        background: #235d85;
      }
      .btn-block {
        display: block;
        width: 100%;
        background: #235d85;
      }
      .btn:hover {
        color: var(--bs-btn-hover-color);
        background-color: #235d85;
        border-color: #235d85;
      }
      .heading-line:after {
        content: "";
        height: 4px;
        width: 75px;
        background-color: #235d85;
        position: absolute;
        bottom: 0;
        left: 8px;
        transition: width 0.6s ease-in-out;
      }
      .heading-line:hover:after {
        width: 100px; 
      }
      .icon-notification:before {
        content: "\e94c";
        margin: 6px;
      }
      .dropdown-menu {
        width: 420px;
        overflow-y: auto;
      }
      .dropdown-toggle::after {
        display: none;
      }

      .notification-ui_dd-content {
        margin-bottom: 30px;
      }
      .unread-notification {
        display: inline-block;
        height: 7px;
        width: 7px;
        border-radius: 7px;
        background-color: #66bb6a;
        position: absolute;
        top: 2px;
        left: 24px;
      }
      .notification-list {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        padding: 20px;
        margin-bottom: 7px;

        background: #fff;
        -webkit-box-shadow: 0 3px 10px rgba(0, 0, 0, 0.06);
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.06);
      }
      .notification-list--unread {
        border-left: 2px solid #235d85;
      }
      .notification-list .notification-list_content {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
      }
      .dropdown::after {
        content: "";
        position: absolute;
        top: -30px;
        left: calc(50% - 7px);
        border-top: 15px solid transparent;
        border-right: 15px solid transparent;
        border-bottom: 15px solid #fff;
        border-left: 15px solid transparent;
      }
      .notification-list
        .notification-list_content
        .notification-list_img
        img {
        height: 48px;
        width: 48px;
        border-radius: 50px;
        margin-right: 30px;
      }
      .notification-list
        .notification-list_content
        .notification-list_detail
        p {
        margin-bottom: 5px;
        line-height: 1.2;
      }
      .notification-list .notification-list_feature-img img {
        height: 48px;
        width: 48px;
        border-radius: 5px;
        margin-left: 10px;
      }
      @keyframes fadeIn {
        from {
          opacity: 0;
          transform: translateY(
            -10px
          ); 
        }
        to {
          opacity: 1;
          transform: translateY(
            0
          ); 
        }
      }
      .notification-list {
        display: flex;
        justify-content: space-between;
        padding: 20px;
        margin-bottom: 7px;
        background: #fff;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.06);
        animation: fadeIn 0.3s ease-in-out; 
      }
      .notification-list_feature-img {
        animation: fadeIn 0.5s ease-in-out;
      }
    
@keyframes moveVertically {
  0% {
    transform: translateY(-10px); 
    opacity: 0;
  }
  100% {
    transform: translateY(0);
    opacity: 1;
  }
}

.notification-list_detail {
  animation: moveVertically 0.5s ease-in-out; 
}

    </style>
<header data-add-bg="" class="header -dashboard bg-white js-header" data-x="header" data-x-toggle="is-menu-opened">
    <div data-anim="fade" class="header__container px-30 sm:px-20">
      <div class="-left-side">
        <a href="#!" class="header-logo" data-x="header-logo" data-x-toggle="is-logo-dark">

        
          <img src="{{asset('/assets/img/logo_black.png')}}" alt="logo icon">
          <img src="{{asset('/assets/img/logo_black.png')}}" alt="logo icon">
        </a>
      </div>

      <div class="row justify-between items-center pl-40 lg:pl-20">
        <div class="col-auto">
          <div class="d-flex items-center">
            <button data-x-click="dashboard">
              <i class="icon-menu-2 text-20"></i>
            </button>

            
          </div>
        </div>

        <div class="col-auto">
          <div class="d-flex items-center">
            <div class="row items-center x-gap-5 y-gap-20 pl-20 lg:d-none">
              <div class="col-auto">
                <button class="button -blue-1-05 size-50 rounded-22 flex-center">
                  <i class="icon-email-2 text-20"></i>
                </button>
              </div>

              <!-- <div class="col-auto">
                <button class="button -blue-1-05 size-50 rounded-22 flex-center">
                  <i class="icon-notification text-20"></i>
                </button>
              </div> -->
              <div class="col-auto">
                  <div class="dropdown">
                    <div
                      class="dropdown-toggle"
                      id="dropdownMenuButton1"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      <i class="icon-notification text-20"></i>
                      <span class="unread-notification"></span>
                    </div>
                    <ul
                      class="dropdown-menu"
                      aria-labelledby="dropdownMenuButton1"
                    >
                      <h5 class="m-40 px-25 heading-line">
                        Notifications<i class="icon-notification text-20"></i>
                      </h5>
                      <li>
                        <div
                          class="notification-list notification-list--unread"
                        >
                          <div class="notification-list_content">
                            <div class="notification-list_img">
                              <img src="{{asset('/admin-assets/img/avatars/add-2.png')}}" alt="user" />
                             
                            </div>
                            <div class="notification-list_detail">
                              <p><b>John Doe</b> reacted to your post</p>
                              <p class="text-muted">
                                Lorem ipsum dolor sit amet consectetur,
                               
                              </p>
                              <p class="text-muted">
                                <small>10 mins ago</small>
                              </p>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div
                          class="notification-list notification-list--unread"
                        >
                          <div class="notification-list_content">
                            <div class="notification-list_img">
                              <img src="{{asset('/admin-assets/img/avatars/add-2.png')}}" alt="user" />
                            </div>
                            <div class="notification-list_detail">
                              <p><b>John Doe</b> reacted to your post</p>
                              <p class="text-muted">
                                Lorem ipsum dolor sit amet consectetur,
                              </p>
                              <p class="text-muted">
                                <small>10 mins ago</small>
                              </p>
                            </div>
                          </div>
                        </div>
                      </li>
                      <div class="notification-ui_dd-footer">
                        <a href="#!" class="btn btn-success btn-block"
                          >View All</a
                        >
                      </div>
                    </ul>
                  </div>
                </div>
              
            </div>

            <div class="pl-15">
           
              <img src="{{asset('/admin-assets/img/avatars/3.png')}}" alt="image" class="size-50 rounded-100 object-cover">
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>