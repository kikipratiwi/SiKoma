<!DOCTYPE html>
<html lang="en">

<head>
<title>Ormawa | Sikoma</title>
	<!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="Phoenixcoded">
	<meta name="keywords" content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
	<meta name="author" content="Phoenixcoded">

	<!-- Favicon icon -->
	<link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.png" type="image/x-icon">
	<link rel="icon" href="<?php echo base_url();?>assets/images/favicon.ico" type="image/x-icon">

	<!-- Google font https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800-->
	<link href="<?php echo base_url();?>assets/css/font-api.css" rel="stylesheet">

	<!-- Font Awesome -->
	<link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- iconfont -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/icon/icofont/css/icofont.css">

	<!-- simple line icon -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/icon/simple-line-icons/css/simple-line-icons.css">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap.min.css">

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

    <!-- terms.css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/terms.css" id="color"/>

    <!--data table https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/jquery.dataTables.css">
    
    <!-- select2 -->
    <link href="<?php echo base_url();?>assets/css/select2.min.css" rel="stylesheet" />

    <style>
    .select2-results .select2-disabled,  .select2-results__option[aria-disabled=true] { 
    display: none;
    }
  </style>

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
                            <span><b>Ormawa</b> <i class=" icofont icofont-simple-down"></i></span>
                        </a>
                        <ul class="dropdown-menu settings-menu">
                            <li><a href="<?php echo base_url(); ?>index.php/Authentication/change_password?id=<?php echo $user_id['id']?>"><i class="icon-settings"></i> Change Password</a></li>
                            <li><a href="<?php echo base_url().'index.php/Authentication/logout'; ?>"><i class="icon-logout"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>