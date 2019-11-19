
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title><?=$title?></title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendors.min.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/materialize.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/dashboard.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/custom.css">
    <!-- END: Custom CSS-->
  </head>
  <!-- END: Head-->
  <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu 2-columns  " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">
    <!-- BEGIN: Header-->
    <header class="page-topbar" id="header">
      <div class="navbar navbar-fixed"> 
        <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-indigo-purple no-shadow">
          <div class="nav-wrapper">
            <ul class="navbar-list right">
              <li class="hide-on-med-and-down"><a class="waves-effect waves-block waves-light translation-button" href="javascript:void(0);" data-target="translation-dropdown"><span class="flag-icon flag-icon-gb"></span></a></li>
              <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);" data-target="profile-dropdown"><span class="avatar-status avatar-online"><img src="<?=base_url()?>assets/img/avatar-7.png" alt="avatar"><i></i></span></a></li>
            </ul>
            <!-- translation-button-->
            <ul class="dropdown-content" id="translation-dropdown">
              <li><a class="grey-text text-darken-1" href="#!"><i class="flag-icon flag-icon-gb"></i> English</a></li>
              <li><a class="grey-text text-darken-1" href="#!"><i class="flag-icon flag-icon-fr"></i> French</a></li>
              <li><a class="grey-text text-darken-1" href="#!"><i class="flag-icon flag-icon-cn"></i> Chinese</a></li>
              <li><a class="grey-text text-darken-1" href="#!"><i class="flag-icon flag-icon-de"></i> German</a></li>
            </ul>
            <!-- profile-dropdown-->
            <ul class="dropdown-content" id="profile-dropdown">
              <li><a class="grey-text text-darken-1" href="<?=site_url('profile')?>"><i class="material-icons">person_outline</i> Profile</a></li>
              <li><a class="grey-text text-darken-1" href="<?=site_url('admin/logout')?>"><i class="material-icons">keyboard_tab</i> Logout</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- END: Header-->
    <!-- BEGIN: SideNav-->
    <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-dark sidenav-active-square">
      <div class="brand-sidebar">
        <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="<?=site_url('admin')?>"><img src="<?=base_url()?>assets/img/materialize-logo-color.png"/><span class="logo-text hide-on-med-and-down">Admin</span></a><a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
      </div>
      <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
      
      <li class="bold"><a class="waves-effect waves-cyan " href="<?=site_url('admin')?>"><i class="material-icons">dashboard</i><span class="menu-title" data-i18n="">Dashboard</span></a>
        </li>
        <li class="navigation-header"><a class="navigation-header-text">Admin Menu</a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="<?=site_url('admin/user')?>"><i class="material-icons">people</i><span class="menu-title" data-i18n="">Users</span></a>
        </li>
        <li class="navigation-header"><a class="navigation-header-text">Menu</a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="<?=site_url('profile')?>"><i class="material-icons">person_outline</i><span class="menu-title" data-i18n="">Edit Profile</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="<?=site_url('admin/logout')?>"><i class="material-icons">logout</i><span class="menu-title" data-i18n="">Logout</span></a>
        </li>
      </ul>
      <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
    </aside>
    <!-- END: SideNav-->

    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div class="col s12">
          <div class="container">
           
<?=$view?>


    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <script src="<?=base_url()?>assets/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="<?=base_url()?>assets/js/chart.min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="<?=base_url()?>assets/js/plugins.js" type="text/javascript"></script>
    <script src="<?=base_url()?>assets/js/custom/custom-script.js" type="text/javascript"></script>
    <script src="<?=base_url()?>assets/js/customizer.js" type="text/javascript"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="<?=base_url()?>assets/js/dashboard-ecommerce.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>