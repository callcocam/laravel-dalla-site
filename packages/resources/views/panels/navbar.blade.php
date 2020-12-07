<nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
    <div class="navbar-wrapper">
      <div class="navbar-container content">
        <div class="navbar-collapse" id="navbar-mobile">
          <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav">
              <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
                  href="#"><i class="ficon feather icon-menu"></i></a></li>
            </ul>
            <ul class="nav navbar-nav bookmark-icons">
              <li class="nav-item d-none d-lg-block"><a class="nav-link" href="sk-layout-2-columns"
                  data-toggle="tooltip" data-placement="top" title="2-Columns"><i
                    class="ficon feather icon-sidebar"></i></a></li>
            </ul>
            <ul class="nav navbar-nav">
              <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i
                    class="ficon feather icon-star warning"></i></a>
                <div class="bookmark-input search-input">
                  <div class="bookmark-input-icon"><i class="feather icon-search primary"></i></div>
                  <input class="form-control input" type="text" placeholder="Explore Vuexy..." tabindex="0"
                    data-search="laravel-starter-list" />
                  <ul class="search-list search-list-bookmark"></ul>
                </div>
                <!-- select.bookmark-select-->
                <!--   option 1-Column-->
                <!--   option 2-Column-->
                <!--   option Static Layout-->
              </li>
            </ul>
          </div>
          <ul class="nav navbar-nav float-right">
            <li class="dropdown dropdown-language nav-item">
              <a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="flag-icon flag-icon-us"></i>
                <span class="selected-language">English</span>
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                <a class="dropdown-item" href="{{url('lang/en')}}" data-language="en">
                  <i class="flag-icon flag-icon-us"></i> English
                </a>
                <a class="dropdown-item" href="{{url('lang/fr')}}" data-language="fr">
                  <i class="flag-icon flag-icon-fr"></i> French
                </a>
                <a class="dropdown-item" href="{{url('lang/de')}}" data-language="de">
                  <i class="flag-icon flag-icon-de"></i> German
                </a>
                <a class="dropdown-item" href="{{url('lang/pt')}}" data-language="pt">
                  <i class="flag-icon flag-icon-pt"></i> Portuguese
                </a>
              </div>
            </li>
            <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i
                  class="ficon feather icon-maximize"></i></a></li>
            <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i
                  class="ficon feather icon-search"></i></a>
              <div class="search-input">
                <div class="search-input-icon"><i class="feather icon-search primary"></i></div>
                <input class="input" type="text" placeholder="Explore Vuexy..." tabindex="-1"
                  data-search="starter-list" />
                <div class="search-input-close"><i class="feather icon-x"></i></div>
                <ul class="search-list search-list-main"></ul>
              </div>
            </li>

            <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#"
                data-toggle="dropdown">
                <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">John
                    Doe</span><span class="user-status">Available</span></div><span><img class="round"
                    src="{{asset('_dis/admin/images/portrait/small/avatar-s-11.jpg') }}" alt="avatar" height="40"
                    width="40" /></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="javascript:void(0)"><i class="feather icon-user"></i> Edit Profile</a>
                  <a class="dropdown-item" href="javascript:void(0)"><i class="feather icon-mail"></i> My Inbox</a>
                  <a class="dropdown-item" href="javascript:void(0)"><i class="feather icon-check-square"></i> Task</a>
                  <a class="dropdown-item" href="javascript:void(0)"><i class="feather icon-message-square"></i> Chats</a>
                <div class="dropdown-divider">
                </div>
                <a class="dropdown-item" href="javascript:void(0)"><i class="feather icon-power"></i> Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  {{-- Search Start Here --}}
  <ul class="main-search-list-defaultlist d-none">
    <li class="d-flex align-items-center">
      <a class="pb-25" href="#">
        <h6 class="text-primary mb-0">Files</h6>
      </a>
    </li>
  </ul>
  <ul class="main-search-list-defaultlist-other-list d-none">
    <li class="auto-suggestion d-flex align-items-center justify-content-between cursor-pointer">
      <a class="d-flex align-items-center justify-content-between w-100 py-50">
        <div class="d-flex justify-content-start"><span class="mr-75 feather icon-alert-circle"></span><span>No results found.</span></div>
      </a>
    </li>
  </ul>
  {{-- Search Ends --}}
  <!-- END: Header-->
