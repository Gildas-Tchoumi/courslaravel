<!DOCTYPE html>
<html lang="en" class="loading">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description"
    content="Convex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords"
    content="admin template, Convex admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="PIXINVENT">
  <title>eCommerce Dashboard - Convex bootstrap 4 admin dashboard template</title>
  <link rel="apple-touch-icon" sizes="60x60" href="../app-assets/img/ico/apple-icon-60.html">
  <link rel="apple-touch-icon" sizes="76x76" href="../app-assets/img/ico/apple-icon-76.html">
  <link rel="apple-touch-icon" sizes="120x120" href="../app-assets/img/ico/apple-icon-120.html">
  <link rel="apple-touch-icon" sizes="152x152" href="../app-assets/img/ico/apple-icon-152.html">
  <link rel="shortcut icon" type="image/x-icon"
    href="https://pixinvent.com/demo/convex-bootstrap-admin-dashboard-template/app-assets/img/ico/favicon.ico">
  <link rel="shortcut icon" type="image/png" href="../app-assets/img/ico/favicon-32.png">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-touch-fullscreen" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="default">
  <link
    href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900%7CMontserrat:300,400,500,600,700,800,900"
    rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../app-assets/fonts/feather/style.min.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/fonts/simple-line-icons/style.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/fonts/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/perfect-scrollbar.min.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/prism.min.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/chartist.min.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/css/app.css">

  @yield('styles')
</head>

<body data-col="2-columns" class=" 2-columns ">
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="wrapper">


    <div data-active-color="white" data-background-color="aqua-marine" data-image="../app-assets/img/sidebar-bg/02.jpg"
      class="app-sidebar">
      <div class="sidebar-header">
        <div class="logo clearfix"><a href="index.html" class="logo-text float-left">
            <div class="logo-img"><img src="../app-assets/img/logo.png" alt="Convex Logo" /></div><span
              class="text align-middle">CONVEX</span>
          </a><a id="sidebarToggle" href="javascript:;" class="nav-toggle d-none d-sm-none d-md-none d-lg-block"><i
              data-toggle="expanded" class="ft-disc toggle-icon"></i></a><a id="sidebarClose" href="javascript:;"
            class="nav-close d-block d-md-block d-lg-none d-xl-none"><i class="ft-circle"></i></a></div>
      </div>
      
      @include('layouts.sidebar')

      <div class="sidebar-background"></div>
    </div>


    <nav class="navbar navbar-expand-lg navbar-light bg-faded">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" class="navbar-toggle d-lg-none float-left"><span
              class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span
              class="icon-bar"></span></button><span class="d-lg-none navbar-right navbar-collapse-toggle"><a
              class="open-navbar-container"><i class="ft-more-vertical"></i></a></span><a id="navbar-fullscreen"
            href="javascript:;" class="mr-2 display-inline-block apptogglefullscreen"><i
              class="ft-maximize blue-grey darken-4 toggleClass"></i>
            <p class="d-none">fullscreen</p>
          </a><a class="ml-2 display-inline-block"><i class="ft-shopping-cart blue-grey darken-4"></i>
            <p class="d-none">cart</p>
          </a>
          <div class="dropdown ml-2 display-inline-block"><a id="apps" href="#" data-toggle="dropdown"
              class="nav-link position-relative dropdown-toggle"><i class="ft-edit blue-grey darken-4"></i><span
                class="mx-1 blue-grey darken-4 text-bold-400">Apps</span></a>
            <div class="apps dropdown-menu">
              <div class="arrow_box"><a href="chat.html" class="dropdown-item py-1"><span>Chat</span></a><a
                  href="taskboard.html" class="dropdown-item py-1"><span>TaskBoard</span></a><a href="calendar.html"
                  class="dropdown-item py-1"><span>Calendar</span></a></div>
            </div>
          </div>
        </div>
        <div class="navbar-container">
          <div id="navbarSupportedContent" class="collapse navbar-collapse">
            <ul class="navbar-nav">
              <li class="nav-item mt-1 navbar-search text-left dropdown"><a id="search" href="#" data-toggle="dropdown"
                  class="nav-link dropdown-toggle"><i class="ft-search blue-grey darken-4"></i></a>
                <div aria-labelledby="search" class="search dropdown-menu dropdown-menu-right">
                  <div class="arrow_box_right">
                    <form role="search" class="navbar-form navbar-right">
                      <div class="position-relative has-icon-right mb-0">
                        <input id="navbar-search" type="text" placeholder="Search" class="form-control" />
                        <div class="form-control-position navbar-search-close"><i class="ft-x"></i></div>
                      </div>
                    </form>
                  </div>
                </div>
              </li>
              <li class="dropdown nav-item mt-1"><a id="dropdownBasic" href="#" data-toggle="dropdown"
                  class="nav-link position-relative dropdown-toggle"><i class="ft-flag blue-grey darken-4"></i><span
                    class="selected-language d-none"></span></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="arrow_box_right"><a href="javascript:;" class="dropdown-item py-1"><img
                        src="../app-assets/img/flags/us.png" alt="English Flag" class="langimg" /><span>
                        English</span></a><a href="javascript:;" class="dropdown-item py-1"><img
                        src="../app-assets/img/flags/es.png" alt="Spanish Flag" class="langimg" /><span>
                        Spanish</span></a><a href="javascript:;" class="dropdown-item py-1"><img
                        src="../app-assets/img/flags/br.png" alt="Portuguese Flag" class="langimg" /><span>
                        Portuguese</span></a><a href="javascript:;" class="dropdown-item"><img
                        src="../app-assets/img/flags/de.png" alt="French Flag" class="langimg" /><span>
                        French</span></a></div>
                </div>
              </li>
              <li class="dropdown nav-item mt-1"><a id="dropdownBasic2" href="#" data-toggle="dropdown"
                  class="nav-link position-relative dropdown-toggle"><i class="ft-bell blue-grey darken-4"></i><span
                    class="notification badge badge-pill badge-danger">4</span>
                  <p class="d-none">Notifications</p>
                </a>
                <div class="notification-dropdown dropdown-menu dropdown-menu-right">
                  <div class="arrow_box_right">
                    <div class="noti-list"><a class="dropdown-item noti-container py-2"><i
                          class="ft-share info float-left d-block font-medium-4 mt-2 mr-2"></i><span
                          class="noti-wrapper"><span class="noti-title line-height-1 d-block text-bold-400 info">New
                            Order Received</span><span class="noti-text">Lorem ipsum dolor sit ametitaque in,
                            et!</span></span></a><a class="dropdown-item noti-container py-2"><i
                          class="ft-save warning float-left d-block font-medium-4 mt-2 mr-2"></i><span
                          class="noti-wrapper"><span class="noti-title line-height-1 d-block text-bold-400 warning">New
                            User Registered</span><span class="noti-text">Lorem ipsum dolor sit ametitaque in
                          </span></span></a><a class="dropdown-item noti-container py-2"><i
                          class="ft-repeat danger float-left d-block font-medium-4 mt-2 mr-2"></i><span
                          class="noti-wrapper"><span class="noti-title line-height-1 d-block text-bold-400 danger">New
                            Order Received</span><span class="noti-text">Lorem ipsum dolor sit
                            ametest?</span></span></a><a class="dropdown-item noti-container py-2"><i
                          class="ft-shopping-cart success float-left d-block font-medium-4 mt-2 mr-2"></i><span
                          class="noti-wrapper"><span class="noti-title line-height-1 d-block text-bold-400 success">New
                            Item In Your Cart</span><span class="noti-text">Lorem ipsum dolor sit ametnatus
                            aut.</span></span></a><a class="dropdown-item noti-container py-2"><i
                          class="ft-heart info float-left d-block font-medium-4 mt-2 mr-2"></i><span
                          class="noti-wrapper"><span class="noti-title line-height-1 d-block text-bold-400 info">New
                            Sale</span><span class="noti-text">Lorem ipsum dolor sit ametnatus aut.</span></span></a><a
                        class="dropdown-item noti-container py-2"><i
                          class="ft-box warning float-left d-block font-medium-4 mt-2 mr-2"></i><span
                          class="noti-wrapper"><span
                            class="noti-title line-height-1 d-block text-bold-400 warning">Order Delivered</span><span
                            class="noti-text">Lorem ipsum dolor sit ametnatus aut.</span></span></a></div><a
                      class="noti-footer primary text-center d-block border-top border-top-blue-grey border-top-lighten-4 text-bold-400 py-1">Read
                      All Notifications</a>
                  </div>
                </div>
              </li>
              <li class="nav-item mt-1 d-none d-lg-block"><a id="navbar-notification-sidebar" href="javascript:;"
                  class="nav-link position-relative notification-sidebar-toggle"><i
                    class="icon-equalizer blue-grey darken-4"></i>
                  <p class="d-none">Notifications Sidebar</p>
                </a></li>
              <li class="dropdown nav-item mr-0"><a id="dropdownBasic3" href="#" data-toggle="dropdown"
                  class="nav-link position-relative dropdown-user-link dropdown-toggle"><span
                    class="avatar avatar-online"><img id="navbar-avatar"
                      src="../app-assets/img/portrait/small/avatar-s-3.jpg" alt="avatar" /></span>
                  <p class="d-none">User Settings</p>
                </a>
                <div aria-labelledby="dropdownBasic3" class="dropdown-menu dropdown-menu-right">
                  <div class="arrow_box_right"><a href="user-profile-page.html" class="dropdown-item py-1"><i
                        class="ft-edit mr-2"></i><span>My Profile</span></a><a href="chat.html"
                      class="dropdown-item py-1"><i class="ft-message-circle mr-2"></i><span>My Chat</span></a><a
                      href="javascript:;" class="dropdown-item py-1"><i
                        class="ft-settings mr-2"></i><span>Settings</span></a>
                    <div class="dropdown-divider"></div><a href="javascript:;" class="dropdown-item"><i
                        class="ft-power mr-2"></i><span>Logout</span></a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <div class="main-panel">
      @yield('content')

      <footer class="footer footer-static footer-light">
        <p class="clearfix text-muted text-center px-2"><span>Copyright &copy; 2018 <a
              href="https://1.envato.market/pixinvent_portfolio" id="pixinventLink" target="_blank"
              class="text-bold-800 primary darken-2">PIXINVENT </a>, All rights reserved. </span></p>
      </footer>

    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->

  <aside id="notification-sidebar" class="notification-sidebar d-none d-sm-none d-md-block"><a
      class="notification-sidebar-close"><i class="ft-x font-medium-3"></i></a>
    <div class="side-nav notification-sidebar-content">
      <div class="row">
        <div class="col-12 mt-1">
          <ul class="nav nav-tabs">
            <li class="nav-item"><a id="base-tab1" data-toggle="tab" aria-controls="base-tab1" href="#activity-tab"
                aria-expanded="true" class="nav-link active"><strong>Activity</strong></a></li>
            <li class="nav-item"><a id="base-tab2" data-toggle="tab" aria-controls="base-tab2" href="#settings-tab"
                aria-expanded="false" class="nav-link"><strong>Settings</strong></a></li>
          </ul>
          <div class="tab-content">
            <div id="activity-tab" role="tabpanel" aria-expanded="true" aria-labelledby="base-tab1"
              class="tab-pane active">
              <div id="activity-timeline" class="col-12 timeline-left">
                <h6 class="mt-1 mb-3 text-bold-400">RECENT ACTIVITY</h6>
                <div class="timeline">
                  <ul class="list-unstyled base-timeline activity-timeline ml-0">
                    <li>
                      <div class="timeline-icon bg-danger"><i class="ft-shopping-cart"></i></div>
                      <div class="base-timeline-info"><a href="#" class="text-uppercase text-danger">Update</a><span
                          class="d-block">Jim Doe Purchased new equipments for zonal office.</span></div><small
                        class="text-muted">just now</small>
                    </li>
                    <li>
                      <div class="timeline-icon bg-primary"><i class="fa fa-plane"></i></div>
                      <div class="base-timeline-info"><a href="#" class="text-uppercase text-primary">Added</a><span
                          class="d-block">Your Next flight for USA will be on 15th August 2015.</span></div><small
                        class="text-muted">25 hours ago</small>
                    </li>
                    <li>
                      <div class="timeline-icon bg-dark"><i class="ft-mic"></i></div>
                      <div class="base-timeline-info"><a href="#" class="text-uppercase text-dark">Assined</a><span
                          class="d-block">Natalya Parker Send you a voice mail for next conference.</span></div><small
                        class="text-muted">15 days ago</small>
                    </li>
                    <li>
                      <div class="timeline-icon bg-warning"><i class="ft-map-pin"></i></div>
                      <div class="base-timeline-info"><a href="#" class="text-uppercase text-warning">New</a><span
                          class="d-block">Jessy Jay open a new store at S.G Road.</span></div><small
                        class="text-muted">20 days ago</small>
                    </li>
                    <li>
                      <div class="timeline-icon bg-primary"><i class="ft-inbox"></i></div>
                      <div class="base-timeline-info"><a href="#" class="text-uppercase text-primary">Added</a><span
                          class="d-block">voice mail for conference.</span></div><small class="text-muted">2 Week
                        Ago</small>
                    </li>
                    <li>
                      <div class="timeline-icon bg-danger"><i class="ft-mic"></i></div>
                      <div class="base-timeline-info"><a href="#" class="text-uppercase text-danger">Update</a><span
                          class="d-block">Natalya Parker Jessy Jay open a new store at S.G Road.</span></div><small
                        class="text-muted">1 Month Ago</small>
                    </li>
                    <li>
                      <div class="timeline-icon bg-dark"><i class="ft-inbox"></i></div>
                      <div class="base-timeline-info"><a href="#" class="text-uppercase text-dark">Assined</a><span
                          class="d-block">Natalya Parker Send you a voice mail for Updated conference.</span></div>
                      <small class="text-muted">1 Month ago</small>
                    </li>
                    <li>
                      <div class="timeline-icon bg-warning"><i class="ft-map-pin"></i></div>
                      <div class="base-timeline-info"><a href="#" class="text-uppercase text-warning">New</a><span
                          class="d-block">Started New project with Jessie Lee.</span></div><small class="text-muted">2
                        Month ago</small>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div id="settings-tab" aria-labelledby="base-tab2" class="tab-pane">
              <div id="settings" class="col-12">
                <h6 class="mt-1 mb-3 text-bold-400">GENERAL SETTINGS</h6>
                <ul class="list-unstyled">
                  <li>
                    <div class="togglebutton">
                      <div class="switch"><span class="text-bold-500">Notifications</span>
                        <div class="float-right">
                          <div class="form-group">
                            <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                              <input id="notifications1" checked="checked" type="checkbox" class="custom-control-input">
                              <label for="notifications1" class="custom-control-label"></label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <p>Use checkboxes when looking for yes or no answers.</p>
                  </li>
                  <li>
                    <div class="togglebutton">
                      <div class="switch"><span class="text-bold-500">Show recent activity</span>
                        <div class="float-right">
                          <div class="form-group">
                            <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                              <input id="recent-activity1" checked="checked" type="checkbox"
                                class="custom-control-input">
                              <label for="recent-activity1" class="custom-control-label"></label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                  </li>
                  <li>
                    <div class="togglebutton">
                      <div class="switch"><span class="text-bold-500">Notifications</span>
                        <div class="float-right">
                          <div class="form-group">
                            <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                              <input id="notifications2" type="checkbox" class="custom-control-input">
                              <label for="notifications2" class="custom-control-label"></label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <p>Use checkboxes when looking for yes or no answers.</p>
                  </li>
                  <li>
                    <div class="togglebutton">
                      <div class="switch"><span class="text-bold-500">Show recent activity</span>
                        <div class="float-right">
                          <div class="form-group">
                            <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                              <input id="recent-activity2" type="checkbox" class="custom-control-input">
                              <label for="recent-activity2" class="custom-control-label"></label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                  </li>
                  <li>
                    <div class="togglebutton">
                      <div class="switch"><span class="text-bold-500">Show your emails</span>
                        <div class="float-right">
                          <div class="form-group">
                            <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                              <input id="show-emails" type="checkbox" class="custom-control-input">
                              <label for="show-emails" class="custom-control-label"></label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <p>Use checkboxes when looking for yes or no answers.</p>
                  </li>
                  <li>
                    <div class="togglebutton">
                      <div class="switch"><span class="text-bold-500">Show Task statistics</span>
                        <div class="float-right">
                          <div class="form-group">
                            <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                              <input id="show-stats" checked="checked" type="checkbox" class="custom-control-input">
                              <label for="show-stats" class="custom-control-label"></label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </aside>
  <div class="customizer border-left-blue-grey border-left-lighten-4 d-none d-sm-none d-md-block"><a
      class="customizer-close"><i class="ft-x font-medium-3"></i></a><a id="customizer-toggle-icon"
      class="customizer-toggle bg-danger"><i class="ft-settings font-medium-4 fa fa-spin white align-middle"></i></a>
    <div data-ps-id="df6a5ce4-a175-9172-4402-dabd98fc9c0a" class="customizer-content p-3 ps-container ps-theme-dark">
      <h4 class="mb-0 text-bold-400">Theme Customizer</h4>
      <p>Customize &amp; Preview in Real Time</p>
      <hr>
      <h6 class="text-center text-bold-500 mb-3 text-uppercase">Sidebar Background Image</h6>
      <div class="cz-bg-image row">
        <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/01.jpg" width="50" height="100" alt="Bg image1"
            class="rounded box-shadow-2"></div>
        <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/02.jpg" width="50" height="100" alt="Bg image2"
            class="rounded box-shadow-2"></div>
        <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/03.jpg" width="50" height="100" alt="Bg image3"
            class="rounded box-shadow-2"></div>
        <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/04.jpg" width="50" height="100" alt="Bg image4"
            class="rounded box-shadow-2"></div>
        <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/05.jpg" width="50" height="100" alt="Bg image5"
            class="rounded box-shadow-2"></div>
        <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/06.jpg" width="50" height="100" alt="Bg image6"
            class="rounded box-shadow-2"></div>
        <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/07.jpg" width="50" height="100" alt="Bg image7"
            class="rounded box-shadow-2"></div>
        <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/08.jpg" width="50" height="100" alt="Bg image8"
            class="rounded box-shadow-2"></div>
      </div>
      <hr>
      <div class="togglebutton">
        <div class="switch"><span class="text-bold-400">Show / Hide Sidebar Bg Image</span>
          <div class="float-right">
            <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
              <input id="sidebar-bg-img" type="checkbox" checked="" class="custom-control-input cz-bg-image-display">
              <label for="sidebar-bg-img" class="custom-control-label"></label>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <h6 class="text-center text-bold-500 mb-3 text-uppercase">Sidebar Color Options</h6>
      <div class="cz-bg-color">
        <div class="row p-1">
          <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="aqua-marine"
              class="gradient-aqua-marine d-block rounded box-shadow-2"></span></div>
          <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="sublime-vivid"
              class="gradient-sublime-vivid d-block rounded box-shadow-2"></span></div>
          <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="crystal-clear"
              class="gradient-crystal-clear d-block rounded box-shadow-2"></span></div>
          <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="timber"
              class="gradient-timber d-block rounded box-shadow-2"></span></div>
        </div>
        <div class="row p-1">
          <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="black"
              class="bg-black d-block rounded box-shadow-2"></span></div>
          <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="white"
              class="bg-white d-block rounded box-shadow-2"></span></div>
          <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="primary"
              class="bg-primary d-block rounded box-shadow-2"></span></div>
          <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="danger"
              class="bg-danger d-block rounded box-shadow-2"></span></div>
        </div>
      </div>
      <hr>
      <div class="togglebutton">
        <div class="switch"><span class="text-bold-400">Compact Menu</span>
          <div class="float-right">
            <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
              <input id="cz-compact-menu" type="checkbox" class="custom-control-input cz-compact-menu">
              <label for="cz-compact-menu" class="custom-control-label"></label>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div>
        <label for="cz-sidebar-width" class="text-bold-400">Sidebar Width</label>
        <select id="cz-sidebar-width" class="custom-select cz-sidebar-width float-right">
          <option value="small">Small</option>
          <option value="medium" selected="">Medium</option>
          <option value="large">Large</option>
        </select>
      </div>
    </div>
  </div>
  <!-- BEGIN VENDOR JS-->
  <script src="../app-assets/vendors/js/core/jquery-3.3.1.min.js"></script>
  <script src="../app-assets/vendors/js/core/popper.min.js"></script>
  <script src="../app-assets/vendors/js/core/bootstrap.min.js"></script>
  <script src="../app-assets/vendors/js/perfect-scrollbar.jquery.min.js"></script>
  <script src="../app-assets/vendors/js/prism.min.js"></script>
  <script src="../app-assets/vendors/js/jquery.matchHeight-min.js"></script>
  <script src="../app-assets/vendors/js/screenfull.min.js"></script>
  <script src="../app-assets/vendors/js/pace/pace.min.js"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="../app-assets/vendors/js/chartist.min.js"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN CONVEX JS-->
  <script src="../app-assets/js/app-sidebar.js"></script>
  <script src="../app-assets/js/notification-sidebar.js"></script>
  <script src="../app-assets/js/customizer.js"></script>
  <!-- END CONVEX JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="../app-assets/js/dashboard-ecommerce.js"></script>
  <!-- END PAGE LEVEL JS-->
</body>

<!-- Mirrored from pixinvent.com/demo/convex-bootstrap-admin-dashboard-template/demo-3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Jan 2022 15:37:02 GMT -->

</html>