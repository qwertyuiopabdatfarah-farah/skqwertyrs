<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template">
    <title>Human Resource</title>
    <link rel="icon" href="config/gambar_tampilan/favicon/favicon-32x32.png" sizes="32x32">
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <link rel="apple-touch-icon-precomposed" href="config/gambar_tampilan/favicon/apple-touch-icon-152x152.png">
    <link href="assets/css/materialize.css" type="text/css" rel="stylesheet">
    <link href="assets/css/style.css" type="text/css" rel="stylesheet">
    <link href="assets/css/custom.css" type="text/css" rel="stylesheet">
    <link href="assets/css/perfect-scrollbar.css" type="text/css" rel="stylesheet">
    <link href="assets/css/jquery-jvectormap.css" type="text/css" rel="stylesheet">
    <link href="assets/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet">    
  </head>
  <body>
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->
    <!-- START HEADER -->
    <header id="header" class="page-topbar">
      <!-- start header nav-->
      <div class="navbar-fixed">
        <nav class="navbar-color gradient-45deg-purple-deep-orange gradient-shadow">
          <div class="nav-wrapper">
            <ul class="right hide-on-med-and-down">
            <li>
                <a href="javascript:void(0);" class="waves-effect waves-block waves-light profile-button" data-activates="profile-dropdown">
                  <span class="avatar-status avatar-online">
                    <img src="assets/images/avatar/avatar-7.png" alt="avatar">
                    <i></i>
                  </span>
                </a>
              </li>
            </ul>
            <!-- profile-dropdown -->
            <ul id="profile-dropdown" class="dropdown-content">
              <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">face</i> Profile</a>
              </li>
              <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">settings</i> Settings</a>
              </li>
              <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">live_help</i> Help</a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">lock_outline</i> Lock</a>
              </li>
              <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">keyboard_tab</i> Logout</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- END HEADER -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START MAIN -->
    <div id="main">
      <!-- START WRAPPER -->
      <div class="wrapper">
        <!-- START LEFT SIDEBAR NAV-->
        <aside id="left-sidebar-nav" class="nav-expanded nav-lock nav-collapsible">
          <div class="brand-sidebar">
            <h1 class="logo-wrapper">
              <a href="index.html" class="brand-logo darken-1">
                <img src="assets/images/logo/materialize-logo.png" alt="materialize logo">
                <span class="logo-text hide-on-med-and-down">Materialize</span>
              </a>
              <a href="#" class="navbar-toggler">
                <i class="material-icons">radio_button_checked</i>
              </a>
            </h1>
          </div>
          <ul id="slide-out" class="side-nav fixed leftside-navigation">
            <li class="no-padding">
              <ul class="collapsible" data-collapsible="accordion">
                <li class="bold">
                  <a class="collapsible-header waves-effect waves-cyan">
                    <i class="material-icons">dashboard</i>
                    <span class="nav-text">Dashboard</span>
                  </a>
                  <div class="collapsible-body">
                    <ul>
                      <li>
                        <a href="index.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>eCommerce</span>
                        </a>
                      </li>
                      <li>
                        <a href="dashboard-analytics.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Analytics</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="bold">
                  <a class="collapsible-header waves-effect waves-cyan">
                    <i class="material-icons">dvr</i>
                    <span class="nav-text">Templates</span>
                  </a>
                  <div class="collapsible-body">
                    <ul>
                      <li>
                        <a href="../collapsible-menu/">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span> Collapsible Menu</span>
                        </a>
                      </li>
                      <li>
                        <a href="../semi-dark-menu/">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span> Semi Dark Menu</span>
                        </a>
                      </li>
                      <li>
                        <a href="../fixed-menu/">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span> Fixed Menu</span>
                        </a>
                      </li>
                      <li>
                        <a href="../overlay-menu/">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span> Overlay Menu</span>
                        </a>
                      </li>
                      <li>
                        <a href="../horizontal-menu/">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Horizontal Menu</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="bold">
                  <a class="collapsible-header waves-effect waves-cyan">
                    <i class="material-icons">web</i>
                    <span class="nav-text">Layouts</span>
                  </a>
                  <div class="collapsible-body">
                    <ul>
                      <li>
                        <a href="layout-light.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Light Layout</span>
                        </a>
                      </li>
                      <li>
                        <a href="layout-dark.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Dark Layout</span>
                        </a>
                      </li>
                      <li>
                        <a href="layout-semi-dark.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Semi Dark Layout</span>
                        </a>
                      </li>
                      <li>
                        <a href="layout-fixed-footer.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Fixed Footer</span>
                        </a>
                      </li>
                      <li>
                        <a href="layout-menu-native-scroll.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Menu Native Scroll</span>
                        </a>
                      </li>
                      <li>
                        <a href="layout-menu-collapsed.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Menu Collapsed</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="bold">
                  <a class="collapsible-header waves-effect waves-cyan">
                    <i class="material-icons">cast</i>
                    <span class="nav-text">Cards</span>
                  </a>
                  <div class="collapsible-body">
                    <ul>
                      <li>
                        <a href="cards-basic.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span> Basic</span>
                        </a>
                      </li>
                      <li>
                        <a href="cards-advance.html" class="waves-effect waves-cyan">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span class="nav-text">Advance</span>
                        </a>
                      </li>
                      <li>
                        <a href="cards-extended.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Extended</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="bold">
                  <a href="app-email.html" class="waves-effect waves-cyan">
                    <i class="material-icons">mail_outline</i>
                    <span class="nav-text">Mailbox</span>
                  </a>
                </li>
                <li class="bold">
                  <a href="app-calendar.html" class="waves-effect waves-cyan">
                    <i class="material-icons">today</i>
                    <span class="nav-text">Calender</span>
                  </a>
                </li>
                <li class="bold">
                  <a class="collapsible-header waves-effect waves-cyan">
                    <i class="material-icons">invert_colors</i>
                    <span class="nav-text">CSS</span>
                  </a>
                  <div class="collapsible-body">
                    <ul>
                      <li>
                        <a href="css-typography.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Typography</span>
                        </a>
                      </li>
                      <li>
                        <a href="css-color.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span class="nav-text">Color</span>
                        </a>
                      </li>
                      <li>
                        <a href="css-grid.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span class="nav-text">Grid</span>
                        </a>
                      </li>
                      <li>
                        <a href="css-helpers.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span class="nav-text">Helpers</span>
                        </a>
                      </li>
                      <li>
                        <a href="css-media.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Media</span>
                        </a>
                      </li>
                      <li>
                        <a href="css-pulse.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Pulse</span>
                        </a>
                      </li>
                      <li>
                        <a href="css-sass.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Sass</span>
                        </a>
                      </li>
                      <li>
                        <a href="css-shadow.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Shadow</span>
                        </a>
                      </li>
                      <li>
                        <a href="css-animations.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Animations</span>
                        </a>
                      </li>
                      <li>
                        <a href="css-transitions.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Transition</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="bold">
                  <a class="collapsible-header  waves-effect waves-cyan">
                    <i class="material-icons">photo_filter</i>
                    <span class="nav-text">Basic UI</span>
                  </a>
                  <div class="collapsible-body">
                    <ul class="collapsible" data-collapsible="accordion">
                      <li class="bold">
                        <a class="collapsible-header  waves-effect waves-cyan">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span class="nav-text">Buttons</span>
                        </a>
                        <div class="collapsible-body">
                          <ul class="collapsible" data-collapsible="accordion">
                            <li>
                              <a href="ui-basic-buttons.html">
                                <i class="material-icons">keyboard_arrow_right</i>
                                <span>Basic</span>
                              </a>
                            </li>
                            <li>
                              <a href="ui-extended-buttons.html">
                                <i class="material-icons">keyboard_arrow_right</i>
                                <span>Extended</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </li>
                      <li>
                        <a href="ui-icons.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Icons</span>
                        </a>
                      </li>
                      <li>
                        <a href="ui-alerts.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Alerts</span>
                        </a>
                      </li>
                      <li>
                        <a href="ui-badges.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Badges</span>
                        </a>
                      </li>
                      <li>
                        <a href="ui-breadcrumbs.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Breadcrumbs</span>
                        </a>
                      </li>
                      <li>
                        <a href="ui-chips.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Chips</span>
                        </a>
                      </li>
                      <li>
                        <a href="ui-collections.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Collections</span>
                        </a>
                      </li>
                      <li>
                        <a href="ui-navbar.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Navbar</span>
                        </a>
                      </li>
                      <li>
                        <a href="ui-pagination.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Pagination</span>
                        </a>
                      </li>
                      <li>
                        <a href="ui-preloader.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Preloader</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="bold">
                  <a class="collapsible-header waves-effect waves-cyan">
                    <i class="material-icons">library_add</i>
                    <span class="nav-text">Advanced UI</span>
                  </a>
                  <div class="collapsible-body">
                    <ul>
                      <li>
                        <a href="advance-ui-carousel.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Carousel</span>
                        </a>
                      </li>
                      <li>
                        <a href="advance-ui-collapsibles.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Collapsible</span>
                        </a>
                      </li>
                      <li>
                        <a href="advance-ui-toasts.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Toasts</span>
                        </a>
                      </li>
                      <li>
                        <a href="advance-ui-tooltip.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Tooltip</span>
                        </a>
                      </li>
                      <li>
                        <a href="advance-ui-dropdown.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Dropdown</span>
                        </a>
                      </li>
                      <li>
                        <a href="advance-ui-feature-discovery.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Feature Discovery</span>
                        </a>
                      </li>
                      <li>
                        <a href="advanced-ui-media.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Media</span>
                        </a>
                      </li>
                      <li>
                        <a href="advanced-ui-modals.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Modals</span>
                        </a>
                      </li>
                      <li>
                        <a href="advance-ui-scrollfire.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>ScrollFire</span>
                        </a>
                      </li>
                      <li>
                        <a href="advance-ui-scrollspy.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Scrollspy</span>
                        </a>
                      </li>
                      <li>
                        <a href="advance-ui-tabs.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Tabs</span>
                        </a>
                      </li>
                      <li>
                        <a href="advance-ui-transitions.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Transitions</span>
                        </a>
                      </li>
                      <li>
                        <a href="advance-ui-waves.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Waves</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="bold">
                  <a class="collapsible-header waves-effect waves-cyan">
                    <i class="material-icons">add_to_queue</i>
                    <span class="nav-text">Extra Components</span>
                  </a>
                  <div class="collapsible-body">
                    <ul>
                      <li>
                        <a href="extra-components-range-slider.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Range Slider</span>
                        </a>
                      </li>
                      <li>
                        <a href="extra-components-sweetalert.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>SweetAlert</span>
                        </a>
                      </li>
                      <li>
                        <a href="extra-components-nestable.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Shortable & Nestable</span>
                        </a>
                      </li>
                      <li>
                        <a href="extra-components-translation.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Language Translation</span>
                        </a>
                      </li>
                      <li>
                        <a href="extra-components-highlight.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Highlight</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="bold">
                  <a class="collapsible-header  waves-effect waves-cyan">
                    <i class="material-icons">border_all</i>
                    <span class="nav-text">Tables</span>
                  </a>
                  <div class="collapsible-body">
                    <ul>
                      <li>
                        <a href="table-basic.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Basic Tables</span>
                        </a>
                      </li>
                      <li>
                        <a href="table-data.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Data Tables</span>
                        </a>
                      </li>
                      <li>
                        <a href="table-jsgrid.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>jsGrid</span>
                        </a>
                      </li>
                      <li>
                        <a href="table-editable.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Editable Table</span>
                        </a>
                      </li>
                      <li>
                        <a href="table-floatThead.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>FloatThead</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="bold">
                  <a class="collapsible-header  waves-effect waves-cyan active">
                    <i class="material-icons">chrome_reader_mode</i>
                    <span class="nav-text">Forms</span>
                  </a>
                  <div class="collapsible-body">
                    <ul>
                      <li>
                        <a href="form-elements.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Form Elements</span>
                        </a>
                      </li>
                      <li class="active">
                        <a href="form-layouts.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Form Layouts</span>
                        </a>
                      </li>
                      <li>
                        <a href="form-validation.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Form Validations</span>
                        </a>
                      </li>
                      <li>
                        <a href="form-masks.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Form Masks</span>
                        </a>
                      </li>
                      <li>
                        <a href="form-file-uploads.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>File Uploads</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="bold">
                  <a class="collapsible-header  waves-effect waves-cyan">
                    <i class="material-icons">pages</i>
                    <span class="nav-text">Pages</span>
                  </a>
                  <div class="collapsible-body">
                    <ul>
                      <li>
                        <a href="page-contact.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Contact Page</span>
                        </a>
                      </li>
                      <li>
                        <a href="page-todo.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>ToDos</span>
                        </a>
                      </li>
                      <li>
                        <a href="page-blog-1.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Blog Type 1</span>
                        </a>
                      </li>
                      <li>
                        <a href="page-blog-2.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Blog Type 2</span>
                        </a>
                      </li>
                      <li>
                        <a href="page-404.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>404</span>
                        </a>
                      </li>
                      <li>
                        <a href="page-500.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>500</span>
                        </a>
                      </li>
                      <li>
                        <a href="page-blank.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Blank</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="bold">
                  <a class="collapsible-header  waves-effect waves-cyan">
                    <i class="material-icons">add_shopping_cart</i>
                    <span class="nav-text">eCommers</span>
                  </a>
                  <div class="collapsible-body">
                    <ul>
                      <li>
                        <a href="eCommerce-products-page.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Products Page</span>
                        </a>
                      </li>
                      <li>
                        <a href="eCommerce-pricing.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Pricing Table</span>
                        </a>
                      </li>
                      <li>
                        <a href="eCommerce-invoice.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Invoice</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="bold">
                  <a class="collapsible-header  waves-effect waves-cyan">
                    <i class="material-icons">perm_media</i>
                    <span class="nav-text">Medias</span>
                  </a>
                  <div class="collapsible-body">
                    <ul>
                      <li>
                        <a href="media-gallary-page.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Gallery Page</span>
                        </a>
                      </li>
                      <li>
                        <a href="media-hover-effects.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Image Hover Effects</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="bold">
                  <a class="collapsible-header  waves-effect waves-cyan">
                    <i class="material-icons">account_circle</i>
                    <span class="nav-text">User</span>
                  </a>
                  <div class="collapsible-body">
                    <ul>
                      <li>
                        <a href="user-profile-page.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>User Profile</span>
                        </a>
                      </li>
                      <li>
                        <a href="user-login.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Login</span>
                        </a>
                      </li>
                      <li>
                        <a href="user-register.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Register</span>
                        </a>
                      </li>
                      <li>
                        <a href="user-forgot-password.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Forgot Password</span>
                        </a>
                      </li>
                      <li>
                        <a href="user-lock-screen.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Lock Screen</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="bold">
                  <a class="collapsible-header waves-effect waves-cyan">
                    <i class="material-icons">pie_chart_outlined</i>
                    <span class="nav-text">Charts</span>
                  </a>
                  <div class="collapsible-body">
                    <ul>
                      <li>
                        <a href="charts-chartjs.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Chart JS</span>
                        </a>
                      </li>
                      <li>
                        <a href="charts-chartist.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Chartist</span>
                        </a>
                      </li>
                      <li>
                        <a href="charts-morris.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Morris Charts</span>
                        </a>
                      </li>
                      <li>
                        <a href="charts-xcharts.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>xCharts</span>
                        </a>
                      </li>
                      <li>
                        <a href="charts-flotcharts.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Flot Charts</span>
                        </a>
                      </li>
                      <li>
                        <a href="charts-sparklines.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Sparkline Charts</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </li>
            <li class="li-hover">
              <p class="ultra-small margin more-text">MORE</p>
            </li>
            <li>
              <a href="angular-ui.html">
                <i class="material-icons">verified_user</i>
                <span class="nav-text">Angular UI</span>
              </a>
            </li>
            <li class="no-padding">
              <ul class="collapsible" data-collapsible="accordion">
                <li class="bold">
                  <a class="collapsible-header  waves-effect waves-cyan">
                    <i class="material-icons">photo_filter</i>
                    <span class="nav-text">Menu Levels</span>
                  </a>
                  <div class="collapsible-body">
                    <ul class="collapsible" data-collapsible="accordion">
                      <li>
                        <a href="ui-basic-buttons.html">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Second level</span>
                        </a>
                      </li>
                      <li class="bold">
                        <a class="collapsible-header  waves-effect waves-cyan">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span class="nav-text">Second level child</span>
                        </a>
                        <div class="collapsible-body">
                          <ul class="collapsible" data-collapsible="accordion">
                            <li>
                              <a href="ui-basic-buttons.html">
                                <i class="material-icons">keyboard_arrow_right</i>
                                <span>Third level</span>
                              </a>
                            </li>
                            <li class="bold">
                              <a class="collapsible-header  waves-effect waves-cyan">
                                <i class="material-icons">keyboard_arrow_right</i>
                                <span class="nav-text">Third level child</span>
                              </a>
                              <div class="collapsible-body">
                                <ul class="collapsible" data-collapsible="accordion">
                                  <li>
                                    <a href="ui-basic-buttons.html">
                                      <i class="material-icons">keyboard_arrow_right</i>
                                      <span>Forth level</span>
                                    </a>
                                  </li>
                                  <li>
                                    <a href="ui-extended-buttons.html">
                                      <i class="material-icons">keyboard_arrow_right</i>
                                      <span>Forth level</span>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </li>
            <li>
              <a href="changelogs.html">
                <i class="material-icons">track_changes</i>
                <span class="nav-text">Changelogs</span>
              </a>
            </li>
            <li>
              <a href="../documentation" target="_blank">
                <i class="material-icons">import_contacts</i>
                <span class="nav-text">Documentation</span>
              </a>
            </li>
            <li>
              <a href="https://pixinvent.ticksy.com" target="_blank">
                <i class="material-icons">help_outline</i>
                <span class="nav-text">Support</span>
              </a>
            </li>
          </ul>
          <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only gradient-45deg-light-blue-cyan gradient-shadow">
            <i class="material-icons">menu</i>
          </a>
        </aside>
        <!-- END LEFT SIDEBAR NAV-->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!-- START CONTENT -->
        <section id="content">
          
          <!--start container-->
          <div class="container">
            <div class="section">
              <div class="divider"></div>
              <!--DataTables example-->
              <div id="table-datatables">
                <h4 class="header">DataTables example</h4>
                <div class="row">
                  <div class="col s12">
                    <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Position</th>
                          <th>Office</th>
                          <th>Age</th>
                          <th>Start date</th>
                          <th>Salary</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>Name</th>
                          <th>Position</th>
                          <th>Office</th>
                          <th>Age</th>
                          <th>Start date</th>
                          <th>Salary</th>
                        </tr>
                      </tfoot>
                      <tbody>
                        <tr>
                          <td>Tiger Nixon</td>
                          <td>System Architect</td>
                          <td>Edinburgh</td>
                          <td>61</td>
                          <td>2011/04/25</td>
                          <td>$320,800</td>
                        </tr>
                        <tr>
                          <td>Garrett Winters</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>63</td>
                          <td>2011/07/25</td>
                          <td>$170,750</td>
                        </tr>
                        <tr>
                          <td>Ashton Cox</td>
                          <td>Junior Technical Author</td>
                          <td>San Francisco</td>
                          <td>66</td>
                          <td>2009/01/12</td>
                          <td>$86,000</td>
                        </tr>
                        <tr>
                          <td>Cedric Kelly</td>
                          <td>Senior Javascript Developer</td>
                          <td>Edinburgh</td>
                          <td>22</td>
                          <td>2012/03/29</td>
                          <td>$433,060</td>
                        </tr>
                        <tr>
                          <td>Airi Satou</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>33</td>
                          <td>2008/11/28</td>
                          <td>$162,700</td>
                        </tr>
                        <tr>
                          <td>Brielle Williamson</td>
                          <td>Integration Specialist</td>
                          <td>New York</td>
                          <td>61</td>
                          <td>2012/12/02</td>
                          <td>$372,000</td>
                        </tr>
                        <tr>
                          <td>Herrod Chandler</td>
                          <td>Sales Assistant</td>
                          <td>San Francisco</td>
                          <td>59</td>
                          <td>2012/08/06</td>
                          <td>$137,500</td>
                        </tr>
                        <tr>
                          <td>Rhona Davidson</td>
                          <td>Integration Specialist</td>
                          <td>Tokyo</td>
                          <td>55</td>
                          <td>2010/10/14</td>
                          <td>$327,900</td>
                        </tr>
                        <tr>
                          <td>Colleen Hurst</td>
                          <td>Javascript Developer</td>
                          <td>San Francisco</td>
                          <td>39</td>
                          <td>2009/09/15</td>
                          <td>$205,500</td>
                        </tr>
                        <tr>
                          <td>Sonya Frost</td>
                          <td>Software Engineer</td>
                          <td>Edinburgh</td>
                          <td>23</td>
                          <td>2008/12/13</td>
                          <td>$103,600</td>
                        </tr>
                        <tr>
                          <td>Jena Gaines</td>
                          <td>Office Manager</td>
                          <td>London</td>
                          <td>30</td>
                          <td>2008/12/19</td>
                          <td>$90,560</td>
                        </tr>
                        <tr>
                          <td>Quinn Flynn</td>
                          <td>Support Lead</td>
                          <td>Edinburgh</td>
                          <td>22</td>
                          <td>2013/03/03</td>
                          <td>$342,000</td>
                        </tr>
                        <tr>
                          <td>Charde Marshall</td>
                          <td>Regional Director</td>
                          <td>San Francisco</td>
                          <td>36</td>
                          <td>2008/10/16</td>
                          <td>$470,600</td>
                        </tr>
                        <tr>
                          <td>Haley Kennedy</td>
                          <td>Senior Marketing Designer</td>
                          <td>London</td>
                          <td>43</td>
                          <td>2012/12/18</td>
                          <td>$313,500</td>
                        </tr>
                        <tr>
                          <td>Tatyana Fitzpatrick</td>
                          <td>Regional Director</td>
                          <td>London</td>
                          <td>19</td>
                          <td>2010/03/17</td>
                          <td>$385,750</td>
                        </tr>
                        <tr>
                          <td>Michael Silva</td>
                          <td>Marketing Designer</td>
                          <td>London</td>
                          <td>66</td>
                          <td>2012/11/27</td>
                          <td>$198,500</td>
                        </tr>
                        <tr>
                          <td>Paul Byrd</td>
                          <td>Chief Financial Officer (CFO)</td>
                          <td>New York</td>
                          <td>64</td>
                          <td>2010/06/09</td>
                          <td>$725,000</td>
                        </tr>
                        <tr>
                          <td>Gloria Little</td>
                          <td>Systems Administrator</td>
                          <td>New York</td>
                          <td>59</td>
                          <td>2009/04/10</td>
                          <td>$237,500</td>
                        </tr>
                        <tr>
                          <td>Bradley Greer</td>
                          <td>Software Engineer</td>
                          <td>London</td>
                          <td>41</td>
                          <td>2012/10/13</td>
                          <td>$132,000</td>
                        </tr>
                        <tr>
                          <td>Dai Rios</td>
                          <td>Personnel Lead</td>
                          <td>Edinburgh</td>
                          <td>35</td>
                          <td>2012/09/26</td>
                          <td>$217,500</td>
                        </tr>
                        <tr>
                          <td>Jenette Caldwell</td>
                          <td>Development Lead</td>
                          <td>New York</td>
                          <td>30</td>
                          <td>2011/09/03</td>
                          <td>$345,000</td>
                        </tr>
                        <tr>
                          <td>Yuri Berry</td>
                          <td>Chief Marketing Officer (CMO)</td>
                          <td>New York</td>
                          <td>40</td>
                          <td>2009/06/25</td>
                          <td>$675,000</td>
                        </tr>
                        <tr>
                          <td>Caesar Vance</td>
                          <td>Pre-Sales Support</td>
                          <td>New York</td>
                          <td>21</td>
                          <td>2011/12/12</td>
                          <td>$106,450</td>
                        </tr>
                        <tr>
                          <td>Doris Wilder</td>
                          <td>Sales Assistant</td>
                          <td>Sidney</td>
                          <td>23</td>
                          <td>2010/09/20</td>
                          <td>$85,600</td>
                        </tr>
                        <tr>
                          <td>Angelica Ramos</td>
                          <td>Chief Executive Officer (CEO)</td>
                          <td>London</td>
                          <td>47</td>
                          <td>2009/10/09</td>
                          <td>$1,200,000</td>
                        </tr>
                        <tr>
                          <td>Gavin Joyce</td>
                          <td>Developer</td>
                          <td>Edinburgh</td>
                          <td>42</td>
                          <td>2010/12/22</td>
                          <td>$92,575</td>
                        </tr>
                        <tr>
                          <td>Jennifer Chang</td>
                          <td>Regional Director</td>
                          <td>Singapore</td>
                          <td>28</td>
                          <td>2010/11/14</td>
                          <td>$357,650</td>
                        </tr>
                        <tr>
                          <td>Brenden Wagner</td>
                          <td>Software Engineer</td>
                          <td>San Francisco</td>
                          <td>28</td>
                          <td>2011/06/07</td>
                          <td>$206,850</td>
                        </tr>
                        <tr>
                          <td>Fiona Green</td>
                          <td>Chief Operating Officer (COO)</td>
                          <td>San Francisco</td>
                          <td>48</td>
                          <td>2010/03/11</td>
                          <td>$850,000</td>
                        </tr>
                        <tr>
                          <td>Shou Itou</td>
                          <td>Regional Marketing</td>
                          <td>Tokyo</td>
                          <td>20</td>
                          <td>2011/08/14</td>
                          <td>$163,000</td>
                        </tr>
                        <tr>
                          <td>Michelle House</td>
                          <td>Integration Specialist</td>
                          <td>Sidney</td>
                          <td>37</td>
                          <td>2011/06/02</td>
                          <td>$95,400</td>
                        </tr>
                        <tr>
                          <td>Suki Burks</td>
                          <td>Developer</td>
                          <td>London</td>
                          <td>53</td>
                          <td>2009/10/22</td>
                          <td>$114,500</td>
                        </tr>
                        <tr>
                          <td>Prescott Bartlett</td>
                          <td>Technical Author</td>
                          <td>London</td>
                          <td>27</td>
                          <td>2011/05/07</td>
                          <td>$145,000</td>
                        </tr>
                        <tr>
                          <td>Gavin Cortez</td>
                          <td>Team Leader</td>
                          <td>San Francisco</td>
                          <td>22</td>
                          <td>2008/10/26</td>
                          <td>$235,500</td>
                        </tr>
                        <tr>
                          <td>Martena Mccray</td>
                          <td>Post-Sales support</td>
                          <td>Edinburgh</td>
                          <td>46</td>
                          <td>2011/03/09</td>
                          <td>$324,050</td>
                        </tr>
                        <tr>
                          <td>Unity Butler</td>
                          <td>Marketing Designer</td>
                          <td>San Francisco</td>
                          <td>47</td>
                          <td>2009/12/09</td>
                          <td>$85,675</td>
                        </tr>
                        <tr>
                          <td>Howard Hatfield</td>
                          <td>Office Manager</td>
                          <td>San Francisco</td>
                          <td>51</td>
                          <td>2008/12/16</td>
                          <td>$164,500</td>
                        </tr>
                        <tr>
                          <td>Hope Fuentes</td>
                          <td>Secretary</td>
                          <td>San Francisco</td>
                          <td>41</td>
                          <td>2010/02/12</td>
                          <td>$109,850</td>
                        </tr>
                        <tr>
                          <td>Vivian Harrell</td>
                          <td>Financial Controller</td>
                          <td>San Francisco</td>
                          <td>62</td>
                          <td>2009/02/14</td>
                          <td>$452,500</td>
                        </tr>
                        <tr>
                          <td>Timothy Mooney</td>
                          <td>Office Manager</td>
                          <td>London</td>
                          <td>37</td>
                          <td>2008/12/11</td>
                          <td>$136,200</td>
                        </tr>
                        <tr>
                          <td>Jackson Bradshaw</td>
                          <td>Director</td>
                          <td>New York</td>
                          <td>65</td>
                          <td>2008/09/26</td>
                          <td>$645,750</td>
                        </tr>
                        <tr>
                          <td>Olivia Liang</td>
                          <td>Support Engineer</td>
                          <td>Singapore</td>
                          <td>64</td>
                          <td>2011/02/03</td>
                          <td>$234,500</td>
                        </tr>
                        <tr>
                          <td>Bruno Nash</td>
                          <td>Software Engineer</td>
                          <td>London</td>
                          <td>38</td>
                          <td>2011/05/03</td>
                          <td>$163,500</td>
                        </tr>
                        <tr>
                          <td>Sakura Yamamoto</td>
                          <td>Support Engineer</td>
                          <td>Tokyo</td>
                          <td>37</td>
                          <td>2009/08/19</td>
                          <td>$139,575</td>
                        </tr>
                        <tr>
                          <td>Thor Walton</td>
                          <td>Developer</td>
                          <td>New York</td>
                          <td>61</td>
                          <td>2013/08/11</td>
                          <td>$98,540</td>
                        </tr>
                        <tr>
                          <td>Finn Camacho</td>
                          <td>Support Engineer</td>
                          <td>San Francisco</td>
                          <td>47</td>
                          <td>2009/07/07</td>
                          <td>$87,500</td>
                        </tr>
                        <tr>
                          <td>Serge Baldwin</td>
                          <td>Data Coordinator</td>
                          <td>Singapore</td>
                          <td>64</td>
                          <td>2012/04/09</td>
                          <td>$138,575</td>
                        </tr>
                        <tr>
                          <td>Zenaida Frank</td>
                          <td>Software Engineer</td>
                          <td>New York</td>
                          <td>63</td>
                          <td>2010/01/04</td>
                          <td>$125,250</td>
                        </tr>
                        <tr>
                          <td>Zorita Serrano</td>
                          <td>Software Engineer</td>
                          <td>San Francisco</td>
                          <td>56</td>
                          <td>2012/06/01</td>
                          <td>$115,000</td>
                        </tr>
                        <tr>
                          <td>Jennifer Acosta</td>
                          <td>Junior Javascript Developer</td>
                          <td>Edinburgh</td>
                          <td>43</td>
                          <td>2013/02/01</td>
                          <td>$75,650</td>
                        </tr>
                        <tr>
                          <td>Cara Stevens</td>
                          <td>Sales Assistant</td>
                          <td>New York</td>
                          <td>46</td>
                          <td>2011/12/06</td>
                          <td>$145,600</td>
                        </tr>
                        <tr>
                          <td>Hermione Butler</td>
                          <td>Regional Director</td>
                          <td>London</td>
                          <td>47</td>
                          <td>2011/03/21</td>
                          <td>$356,250</td>
                        </tr>
                        <tr>
                          <td>Lael Greer</td>
                          <td>Systems Administrator</td>
                          <td>London</td>
                          <td>21</td>
                          <td>2009/02/27</td>
                          <td>$103,500</td>
                        </tr>
                        <tr>
                          <td>Jonas Alexander</td>
                          <td>Developer</td>
                          <td>San Francisco</td>
                          <td>30</td>
                          <td>2010/07/14</td>
                          <td>$86,500</td>
                        </tr>
                        <tr>
                          <td>Shad Decker</td>
                          <td>Regional Director</td>
                          <td>Edinburgh</td>
                          <td>51</td>
                          <td>2008/11/13</td>
                          <td>$183,000</td>
                        </tr>
                        <tr>
                          <td>Michael Bruce</td>
                          <td>Javascript Developer</td>
                          <td>Singapore</td>
                          <td>29</td>
                          <td>2011/06/27</td>
                          <td>$183,000</td>
                        </tr>
                        <tr>
                          <td>Donna Snider</td>
                          <td>Customer Support</td>
                          <td>New York</td>
                          <td>27</td>
                          <td>2011/01/25</td>
                          <td>$112,000</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <br>
              <div class="divider"></div>
             
            </div>
            <!-- Floating Action Button -->
            <!-- <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
              <a class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow">
                <i class="material-icons">add</i>
              </a>
              <ul>
                <li>
                  <a href="css-helpers.html" class="btn-floating blue">
                    <i class="material-icons">help_outline</i>
                  </a>
                </li>
                <li>
                  <a href="cards-extended.html" class="btn-floating green">
                    <i class="material-icons">widgets</i>
                  </a>
                </li>
                <li>
                  <a href="app-calendar.html" class="btn-floating amber">
                    <i class="material-icons">today</i>
                  </a>
                </li>
                <li>
                  <a href="app-email.html" class="btn-floating red">
                    <i class="material-icons">mail_outline</i>
                  </a>
                </li>
              </ul>
            </div>
             Floating Action Button --> 
          </div>
          <!--end container-->
        </section>
        <!-- END CONTENT -->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!-- START RIGHT SIDEBAR NAV-->
        <aside id="right-sidebar-nav">
          <ul id="chat-out" class="side-nav rightside-navigation">
            <li class="li-hover">
              <div class="row">
                <div class="col s12 border-bottom-1 mt-5">
                  <ul class="tabs">
                    <li class="tab col s4">
                      <a href="#activity" class="active">
                        <span class="material-icons">graphic_eq</span>
                      </a>
                    </li>
                    <li class="tab col s4">
                      <a href="#chatapp">
                        <span class="material-icons">face</span>
                      </a>
                    </li>
                    <li class="tab col s4">
                      <a href="#settings">
                        <span class="material-icons">settings</span>
                      </a>
                    </li>
                  </ul>
                </div>
                <div id="settings" class="col s12">
                  <h6 class="mt-5 mb-3 ml-3">GENERAL SETTINGS</h6>
                  <ul class="collection border-none">
                    <li class="collection-item border-none">
                      <div class="m-0">
                        <span class="font-weight-600">Notifications</span>
                        <div class="switch right">
                          <label>
                            <input checked type="checkbox">
                            <span class="lever"></span>
                          </label>
                        </div>
                      </div>
                      <p>Use checkboxes when looking for yes or no answers.</p>
                    </li>
                    <li class="collection-item border-none">
                      <div class="m-0">
                        <span class="font-weight-600">Show recent activity</span>
                        <div class="switch right">
                          <label>
                            <input checked type="checkbox">
                            <span class="lever"></span>
                          </label>
                        </div>
                      </div>
                      <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                    </li>
                    <li class="collection-item border-none">
                      <div class="m-0">
                        <span class="font-weight-600">Notifications</span>
                        <div class="switch right">
                          <label>
                            <input type="checkbox">
                            <span class="lever"></span>
                          </label>
                        </div>
                      </div>
                      <p>Use checkboxes when looking for yes or no answers.</p>
                    </li>
                    <li class="collection-item border-none">
                      <div class="m-0">
                        <span class="font-weight-600">Show recent activity</span>
                        <div class="switch right">
                          <label>
                            <input type="checkbox">
                            <span class="lever"></span>
                          </label>
                        </div>
                      </div>
                      <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                    </li>
                    <li class="collection-item border-none">
                      <div class="m-0">
                        <span class="font-weight-600">Show your emails</span>
                        <div class="switch right">
                          <label>
                            <input type="checkbox">
                            <span class="lever"></span>
                          </label>
                        </div>
                      </div>
                      <p>Use checkboxes when looking for yes or no answers.</p>
                    </li>
                    <li class="collection-item border-none">
                      <div class="m-0">
                        <span class="font-weight-600">Show Task statistics</span>
                        <div class="switch right">
                          <label>
                            <input type="checkbox">
                            <span class="lever"></span>
                          </label>
                        </div>
                      </div>
                      <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                    </li>
                  </ul>
                </div>
                <div id="activity" class="col s12">
                  <h6 class="mt-5 mb-3 ml-3">RECENT ACTIVITY</h6>
                  <div class="activity">
                    <div class="col s3 mt-2 center-align recent-activity-list-icon">
                      <i class="material-icons white-text icon-bg-color deep-purple lighten-2">add_shopping_cart</i>
                    </div>
                    <div class="col s9 recent-activity-list-text">
                      <a href="#" class="deep-purple-text medium-small">just now</a>
                      <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jim Doe Purchased new equipments for zonal office.</p>
                    </div>
                    <div class="recent-activity-list chat-out-list row mb-0">
                      <div class="col s3 mt-2 center-align recent-activity-list-icon">
                        <i class="material-icons white-text icon-bg-color cyan lighten-2">airplanemode_active</i>
                      </div>
                      <div class="col s9 recent-activity-list-text">
                        <a href="#" class="cyan-text medium-small">Yesterday</a>
                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Your Next flight for USA will be on 15th August 2015.</p>
                      </div>
                    </div>
                    <div class="recent-activity-list chat-out-list row mb-0">
                      <div class="col s3 mt-2 center-align recent-activity-list-icon medium-small">
                        <i class="material-icons white-text icon-bg-color green lighten-2">settings_voice</i>
                      </div>
                      <div class="col s9 recent-activity-list-text">
                        <a href="#" class="green-text medium-small">5 Days Ago</a>
                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Natalya Parker Send you a voice mail for next conference.</p>
                      </div>
                    </div>
                    <div class="recent-activity-list chat-out-list row mb-0">
                      <div class="col s3 mt-2 center-align recent-activity-list-icon">
                        <i class="material-icons white-text icon-bg-color amber lighten-2">store</i>
                      </div>
                      <div class="col s9 recent-activity-list-text">
                        <a href="#" class="amber-text medium-small">1 Week Ago</a>
                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jessy Jay open a new store at S.G Road.</p>
                      </div>
                    </div>
                    <div class="recent-activity-list row">
                      <div class="col s3 mt-2 center-align recent-activity-list-icon">
                        <i class="material-icons white-text icon-bg-color deep-orange lighten-2">settings_voice</i>
                      </div>
                      <div class="col s9 recent-activity-list-text">
                        <a href="#" class="deep-orange-text medium-small">2 Week Ago</a>
                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">voice mail for conference.</p>
                      </div>
                    </div>
                    <div class="recent-activity-list chat-out-list row mb-0">
                      <div class="col s3 mt-2 center-align recent-activity-list-icon medium-small">
                        <i class="material-icons white-text icon-bg-color brown lighten-2">settings_voice</i>
                      </div>
                      <div class="col s9 recent-activity-list-text">
                        <a href="#" class="brown-text medium-small">1 Month Ago</a>
                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Natalya Parker Send you a voice mail for next conference.</p>
                      </div>
                    </div>
                    <div class="recent-activity-list chat-out-list row mb-0">
                      <div class="col s3 mt-2 center-align recent-activity-list-icon">
                        <i class="material-icons white-text icon-bg-color deep-purple lighten-2">store</i>
                      </div>
                      <div class="col s9 recent-activity-list-text">
                        <a href="#" class="deep-purple-text medium-small">3 Month Ago</a>
                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jessy Jay open a new store at S.G Road.</p>
                      </div>
                    </div>
                    <div class="recent-activity-list row">
                      <div class="col s3 mt-2 center-align recent-activity-list-icon">
                        <i class="material-icons white-text icon-bg-color grey lighten-2">settings_voice</i>
                      </div>
                      <div class="col s9 recent-activity-list-text">
                        <a href="#" class="grey-text medium-small">1 Year Ago</a>
                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">voice mail for conference.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </aside>
        <!-- END RIGHT SIDEBAR NAV-->
      </div>
      <!-- END WRAPPER -->
    </div>
    <!-- END MAIN -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START FOOTER -->
    <footer class="page-footer gradient-45deg-purple-deep-orange">
      <div class="footer-copyright">
        <div class="container">
          <span>Copyright ©
            <script type="text/javascript">
              document.write(new Date().getFullYear());
            </script> <a class="grey-text text-lighten-4" href="http://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT</a> All rights reserved.</span>
          <span class="right hide-on-small-only"> Design and Developed by <a class="grey-text text-lighten-4" href="https://pixinvent.com/">PIXINVENT</a></span>
        </div>
      </div>
    </footer>
      <!-- jQuery Library -->
      <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
      <!--materialize js-->
      <script type="text/javascript" src="assets/js/materialize.min.js"></script>
      <!--prism-->
      <script type="text/javascript" src="assets/js/prism.js"></script>
      <!--scrollbar-->
      <script type="text/javascript" src="assets/js/perfect-scrollbar.min.js"></script>
    <!-- data-tables -->
    <script type="text/javascript" src="assets/js/jquery.dataTables.min.js"></script>
    <!--data-tables.js - Page Specific JS codes -->
    <script type="text/javascript" src="assets/js/data-tables.js"></script>
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="assets/js/plugins.js"></script>
    <script type="text/javascript" src="assets/js/custom-script.js"></script>
  </body>
</html>