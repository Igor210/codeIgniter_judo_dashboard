<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="author" content="ThemeSelect">
    <title>Dashboard</title>
    <link rel="apple-touch-icon" href="<?php echo base_url('app-assets') ?>/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('app-assets') ?>/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets') ?>/vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets') ?>/vendors/animate-css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets') ?>/vendors/chartist-js/chartist.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets') ?>/vendors/chartist-js/chartist-plugin-tooltip.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets') ?>/vendors/data-tables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets') ?>/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets') ?>/vendors/data-tables/css/select.dataTables.min.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets') ?>/css/themes/vertical-modern-menu-template/materialize.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets') ?>/css/themes/vertical-modern-menu-template/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets') ?>/css/pages/dashboard-modern.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets') ?>/css/pages/intro.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets') ?>/css/pages/data-tables.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets') ?>/css/custom/custom.css">
    <!-- END: Custom CSS-->
  </head>
  <!-- END: Head-->
  <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns" ng-app="myApp" ng-controller="myCtrl">

    <!-- BEGIN: Header-->
    <header class="page-topbar" id="header">
      <div class="navbar navbar-fixed"> 
        <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-indigo-purple no-shadow">
          <div class="nav-wrapper">
            <ul class="navbar-list right">
              <li class="hide-on-med-and-down"><a class="waves-effect waves-block waves-light toggle-fullscreen" href="javascript:void(0);"><i class="material-icons">settings_overscan</i></a></li>
              <li class="hide-on-large-only search-input-wrapper"><a class="waves-effect waves-block waves-light search-button" href="javascript:void(0);"><i class="material-icons">search</i></a></li>
              <!-- <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);" data-target="profile-dropdown"><span class="avatar-status avatar-online"><img src="<?php echo base_url('app-assets') ?>/images/avatar/avatar-7.png" alt="avatar"><i></i></span></a></li> -->
            </ul>
            <!-- profile-dropdown-->
            <ul class="dropdown-content" id="profile-dropdown">
              <li><a class="grey-text text-darken-1" href="user-profile-page"><i class="material-icons">person_outline</i> Profile</a></li>
              <li class="divider"></li>
              <li><a class="grey-text text-darken-1" href="user-login"><i class="material-icons">keyboard_tab</i> Logout</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </header>



    <!-- BEGIN: SideNav-->
    <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
    		<div class="brand-sidebar">
    			     <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="#"><img class="hide-on-med-and-down" src="<?php echo base_url('app-assets') ?>/images/logo/materialize-logo-color.png" alt="materialize logo"/><img class="show-on-medium-and-down hide-on-med-and-up" src="<?php echo base_url('app-assets') ?>/images/logo/materialize-logo.png" alt="materialize logo"/><span class="logo-text hide-on-med-and-down">Judo estimate</span></a><a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
    		</div>
    		<ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
    			
      			<li class="bold active">
      				<a class="waves-effect waves-cyan <?php echo $pageaction=="dashboard"?'active':''; ?>" href="<?php echo base_url() ?>/dashboard">
      					<i class="material-icons">settings_input_svideo</i><span class="menu-title" data-i18n="Basic Dashboard">Dashboard</span>
      				</a>
      			</li>

            <li class="bold active">
              <a class="waves-effect waves-cyan <?php echo $pageaction=="systemOfJudging"?'active':''; ?>" href="<?php echo base_url() ?>/judging">
                <i class="material-icons">access_alarm</i><span class="menu-title" data-i18n="Basic Dashboard">System of judging</span>
              </a>
            </li>

      			<li class="navigation-header">
      				<a class="navigation-header-text">Estimate page </a><i class="navigation-header-icon material-icons">more_horiz</i>
      			</li>
      			<li class="bold active">
      				<a class="waves-effect waves-cyan <?php echo $pageaction=="mainpage"?'active':''; ?>" href="<?php echo base_url() ?>/home"><i class="material-icons">border_all</i><span class="menu-title" data-i18n="Basic Tables">Estimate List</span></a>
      			</li>


      			<li class="navigation-header">
      				<a class="navigation-header-text">Basic management </a><i class="navigation-header-icon material-icons">more_horiz</i>
      			</li>
      			<li class="bold active">
      				<a class="waves-effect waves-cyan <?php echo $pageaction=="estimator"?'active':''; ?>" href="<?php echo base_url() ?>/estimator">
      					<i class="material-icons">face</i><span class="menu-title" data-i18n="Basic User">Estimator</span>
      				</a>
      			</li>
      			<li class="bold active">
      				<a class="waves-effect waves-cyan <?php echo $pageaction=="CDP"?'active':''; ?>" href="<?php echo base_url() ?>/clubdptopais">
      					<i class="material-icons">group_work</i><span class="menu-title" data-i18n="Basic Club">Club/Dpto/Pais</span>
      				</a>
      			</li>
      			<li class="bold active">
      				<a class="waves-effect waves-cyan <?php echo $pageaction=="TU"?'active':''; ?>" href="<?php echo base_url() ?>/toriandUke">
      					<i class="material-icons">person_outline</i><span class="menu-title" data-i18n="Basic Tori">Tori and Uke</span>
      				</a>
      			</li>
      			<li class="bold active">
      				<a class="waves-effect waves-cyan <?php echo $pageaction=="category"?'active':''; ?>" href="<?php echo base_url() ?>/category">
      					<i class="material-icons">format_list_bulleted</i><span class="menu-title" data-i18n="Basic category">Category</span>
      				</a>
      			</li>

    		</ul>
    		<div class="navigation-background"></div>
        <a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
    </aside>
    <!-- END: SideNav-->
    <script type="text/javascript">
      var initialdata = [];
      var avgresult = '';
      var errorsAry = [];
    </script>
