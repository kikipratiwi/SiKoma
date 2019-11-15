<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mahasiswa | Sikoma</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="<?php echo base_url();?>assets/images/favicon.ico" type="image/x-icon">

	<!-- Google font https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800-->
	<link href="<?php echo base_url();?>assets/css/font-api.css" rel="stylesheet">

	<!-- Font Awesome https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/all.css" integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />
    <!-- Font Awesome https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/all.min.css" integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous" />

	<!-- iconfont -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/icon/icofont/css/icofont.css">

	<!-- simple line icon -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/icon/simple-line-icons/css/simple-line-icons.css">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap.min.css">
  
    <!-- Weather css -->
    <link href="<?php echo base_url();?>assets/css/svg-weather.css" rel="stylesheet">

    <!-- Echart js -->
    <script src="<?php echo base_url();?>assets/plugins/charts/echarts/js/echarts-all.js"></script>

	<!-- Date Picker css -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" />

	<!-- Bootstrap Date-Picker css -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap-datepicker/css/bootstrap-datetimepicker.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/bootstrap-daterangepicker/daterangepicker.css" />

	<!-- Select 2 css -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/select2/dist/css/select2.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/select2/css/s2-docs.css">

	<!-- Multi Select css -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap-multiselect/dist/css/bootstrap-multiselect.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/multiselect/css/multi-select.css" />

	<!-- Color Picker css -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/spectrum/spectrum.css" />

	<!-- Tags css -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" />

	<!-- bash syntaxhighlighter css -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/plugins/syntaxhighlighter/styles/shCoreDjango.css"/>

	<!-- Style.css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main.css">

  <!-- Responsive.css-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/responsive.css">

	<!--color css-->
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/color/color-1.min.css" id="color"/>


</head>

<body class="sidebar-mini fixed">
    <div class="loader-bg">
        <div class="loader-bar">
        </div>
    </div>

    <div class="wrapper">
    <!--   <div class="loader-bg">
    <div class="loader-bar">
    </div>
    </div> -->
    <!-- Navbar-->
    <header class="main-header-top hidden-print">
    <a href="#" class="logo"><img class="img-fluid able-logo" src="<?php echo base_url();?>assets/images/logo.png" alt="Theme-logo"></a>
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button--><a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>
        <!-- Navbar Right Menu-->
        <div class="navbar-custom-menu f-right">
            <ul class="top-nav">
                <!--Notification Menu-->
                <li class="dropdown pc-rheader-submenu message-notification search-toggle">
                    <a href="#!" id="morphsearch-search" class="drop icon-circle txt-white">
                        <i class="icofont icofont-search-alt-1"></i>
                    </a>
                </li>
                <li class="dropdown notification-menu">
                    <a href="#!" data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle">
                        <i class="icon-bell"></i>
                        <span class="badge badge-danger header-badge">1</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="bell-notification">
                            <a href="javascript:;" class="media">
                                <div class="media-body"><span class="block">Your Submission was <b>accepted!</b></span></div>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- window screen -->
                <li class="pc-rheader-submenu">
                    <a href="#!" class="drop icon-circle" onclick="javascript:toggleFullScreen()">
                        <i class="icon-size-fullscreen"></i>
                    </a>
                </li>
                <!-- User Menu-->
                <li class="dropdown">
                    <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
                        <span><img class="img-circle " src="<?php echo base_url();?>assets/images/avatar-1.png" style="width:40px;" alt="User Image"></span>
                        <span> User <b>Student</b> <i class=" icofont icofont-simple-down"></i></span>
                    </a>
                    <ul class="dropdown-menu settings-menu">
                        <li><a href="#!"><i class="icon-settings"></i> Settings</a></li>
                        <li><a href="#!"><i class="icon-logout"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    </header>