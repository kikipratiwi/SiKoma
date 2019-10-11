
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pengajuan Proposal | Sikoma</title>

    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content="Phoenixcoded">
    <meta name="keywords"
          content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="Phoenixcoded">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href=<?php echo base_url()."../../assets/images/favicon.png"; ?> type="image/x-icon">
    <link rel="icon" href="../../assets/images/favicon.ico" type="image/x-icon">

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <!-- iconfont -->
    <link rel="stylesheet" type="text/css" href="../../assets/icon/icofont/css/icofont.css">

    <!-- simple line icon -->
    <link rel="stylesheet" type="text/css" href="../../assets/icon/simple-line-icons/css/simple-line-icons.css">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="../../assets/plugins/bootstrap/css/bootstrap.min.css">

    <!-- bash syntaxhighlighter css -->
    <link type="text/css" rel="stylesheet" href="../../assets/plugins/syntaxhighlighter/styles/shCoreDjango.css"/>

    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="../../assets/css/main.css">

    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/responsive.css">

    <!--color css-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/color/color-1.min.css" id="color"/>


</head>
<body class="sidebar-mini fixed">
<div class="wrapper">
    <div class="loader-bg">
    <div class="loader-bar">
    </div>
    </div>
    <!-- Navbar-->
    <header class="main-header-top hidden-print">
        <a href="#" class="logo"> <h1>SiKoma</h1></a>
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
                            <span><img class="img-circle " src="../assets/images/avatar-1.png" style="width:40px;" alt="User Image"></span>
                            <span> User <b>Student</b> <i class=" icofont icofont-simple-down"></i></span>
                        </a>
                        <ul class="dropdown-menu settings-menu">
                            <li><a href="#!"><i class="icon-settings"></i> Settings</a></li>
                            <li><a href="#"><i class="icon-user"></i> Profile</a></li>
                            <li><a href="#"><i class="icon-envelope-open"></i> My Messages</a></li>
                            <li class="p-0">
                                <div class="dropdown-divider m-0"></div>
                            </li>
                            <li><a href="#"><i class="icon-lock"></i> Lock Screen</a></li>
                            <li><a href="#!"><i class="icon-logout"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        </header>
    <!-- Side-Nav-->
    <aside class="main-sidebar hidden-print " >
            <section class="sidebar" id="sidebar-scroll">
                <div class="user-panel">
                    <div class="f-left image"><img src="../assets/images/avatar-1.png" alt="User Image" class="img-circle"></div>
                    <div class="f-left info">
                        <p>User</p>
                        <p class="designation">Student <i class="icofont icofont-caret-down m-l-5"></i></p>
                    </div>
                </div>
                <!-- sidebar profile Menu-->
                <ul class="nav sidebar-menu extra-profile-list">
                    <li>
                        <a class="waves-effect waves-dark" href="#">
                            <i class="icon-user"></i>
                            <span class="menu-text">View Profile</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li>
                        <a class="waves-effect waves-dark" href="javascript:void(0)">
                            <i class="icon-settings"></i>
                            <span class="menu-text">Settings</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li>
                        <a class="waves-effect waves-dark" href="javascript:void(0)">
                            <i class="icon-logout"></i>
                            <span class="menu-text">Logout</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                </ul>
                <!-- Sidebar Menu-->
                <ul class="sidebar-menu">
                    <li class="treeview">
                        <a class="waves-effect waves-dark" href="student.html">
                            <i class="icon-speedometer"></i><span> Dashboard</span>
                        </a>                
                    </li>
                    <li class="nav-level">Proposal</li>
                    <li class="active treeview">
                        <a class="waves-effect waves-dark" href="proposal-submission.html">
                            <i class="icon-book-open"></i><span> Submit Proposal</span>
                        </a>                
                    </li>
                </ul>
            </section>
        </aside>
    <div class="content-wrapper">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <!-- Main content starts -->
            <div class="tab-list">
                <!-- Row Starts -->
                <div class="row">
                    <div class="col-lg-12 p-0">
                        <div class="main-header">
                            <h4>Pengajuan Proposal</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="student.html"><i class="icofont icofont-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Proposal</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Pengajuan</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- Row end -->

                <!-- Row start -->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Row start -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <!-- Radio-Button start -->
                                    <div class="card-header"><h5 class="card-header-text">Form Pengajuan Proposal</h5></div>
                                    <div class="card-block tab-icon">
                                        <!-- Row start -->
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <!-- <h6 class="sub-title">Tab With Icon</h6> -->

                                                <!-- Nav tabs -->
                                                <ul class="nav nav-tabs md-tabs " role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="tab" href="#team-profile" role="tab"><i class="icofont icofont-ui-user"></i>Profil Tim</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#proposal-document" role="tab"><i class="icofont icofont-file-document "></i>Dokumen Proposal</a>
                                                        <div class="slide"></div>
                                                    </li>

                                                </ul>
                                                <!-- Tab panes -->
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="team-profile" role="tabpanel">
                                                        <!-- Team Profile inputs starts -->
                                                        <form>
                                                            <div class="form-group row">
                                                                <label for="coach" class="col-xs-2 col-form-label form-control-label">Pembimbing</label>
                                                                <div class="col-sm-10">
                                                                    <input class="form-control" type="text" name="coach" placeholder="NIDN Pembimbing" value="" id="coach">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="leader" class="col-xs-2 col-form-label form-control-label">Ketua Tim</label>
                                                                <div class="col-sm-10">
                                                                    <input class="form-control" type="text" name="leader" placeholder="NIM Ketua Tim" value="" id="leader">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="member-1" class="col-xs-2 col-form-label form-control-label">Anggota 1</label>
                                                                <div class="col-sm-10">
                                                                    <input class="form-control" type="text" name="member-1" placeholder="NIM Anggota 1" value="" id="member-1">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="member-2" class="col-xs-2 col-form-label form-control-label">Anggota 2</label>
                                                                <div class="col-sm-10">
                                                                    <input class="form-control" type="text" name="member-2" placeholder="NIM Anggota 2" value="" id="member-2">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="member31" class="col-xs-2 col-form-label form-control-label">Anggota 3</label>
                                                                <div class="col-sm-10">
                                                                    <input class="form-control" type="text" name="member-3" placeholder="NIM Anggota 3" value="" id="member-3">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="member-4" class="col-xs-2 col-form-label form-control-label">Anggota 4</label>
                                                                <div class="col-sm-10">
                                                                    <input class="form-control" type="text" name="member-4" placeholder="NIM Anggota 4" value="" id="member-4">
                                                                </div>
                                                            </div>
                                                            <button type="button" class="btn btn-primary waves-effect waves-light" name="next" id="next" >Berikutnya </button>
                                                        </form>
                                                        <!-- Team Profile inputs ends -->
                                                    </div>

                                                    <div class="tab-pane" id="proposal-document" role="tabpanel">
                                                        <!-- Proposal Document inputs starts -->
                                                        <form>
                                                            <div class="form-group row">
                                                                <label for="competition" class="col-xs-2 col-form-label form-control-label">Kompetisi</label>
                                                                <div class="col-sm-10">
                                                                    <input class="form-control" type="text" name="competition" placeholder="Nama Kompetisi" value="" id="competition">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="budget" class="col-xs-2 col-form-label form-control-label">Dana yang diajukan</label>
                                                                <div class="col-sm-10">
                                                                    <input class="form-control" type="number" name="budget" placeholder="Jumlah Dana" value="" id="budget">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="proposal" class="col-xs-2 col-form-label form-control-label">Proposal</label>
                                                                <div class="md-group-add-on">
                                                                    <span class="md-add-on-file">
                                                                        <button class="btn btn-primary" style="margin-left: 15px;border-radius: .25rem;padding: .5rem .75rem;">Browse</button>
                                                                    </span>
                                                                    <div class="md-input-file">
                                                                        <input type="file" class="" name="proposal" />
                                                                        <input type="text" class="md-form-control md-form-file" style="margin-right: 18px;float: right;width: 97%;">
                                                                        <label class="md-label-file" style="padding-left: 5px; color: rgb(155, 156, 169);">doc Proposal</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button type="button" class="btn btn-success waves-effect waves-light" name="submit" id="submit" >Submit</button>
                                                        </form>
                                                        <!-- Proposal Document inputs ends -->
                                                    </div>
                                                </div>
                                                <!-- Tab panes end -->
                                            </div>
                                        </div>
                                        <!-- Row end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Row end -->
                    </div>
                </div>
                <!-- loader ends -->
            </div>
            <!-- Row end -->

        </div>
        <!-- Container-fluid ends -->
    </div>
</div>



<!-- Warning Section Starts -->
<!-- Older IE warning message -->
<!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="../assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="../assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="../assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="../assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="../assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->

<!-- Required Jqurey -->
<script src="../assets/plugins/jquery/dist/jquery.min.js"></script>
<script src="../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="../assets/plugins/tether/dist/js/tether.min.js"></script>

<!-- Required Fremwork -->
<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- waves effects.js -->
<script src="../assets/plugins/Waves/waves.min.js"></script>

<!-- Scrollbar JS-->
<script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
<script src="../assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

<!--classic JS-->
<script src="../assets/plugins/classie/classie.js"></script>

<!-- notification -->
<script src="../assets/plugins/notification/js/bootstrap-growl.min.js"></script>

<!-- Highliter js -->
<script type="text/javascript" src="../assets/plugins/syntaxhighlighter/scripts/shCore.js"></script>
<script type="text/javascript" src="../assets/plugins/syntaxhighlighter/scripts/shBrushJScript.js"></script>
<script type="text/javascript" src="../assets/plugins/syntaxhighlighter/scripts/shBrushXml.js"></script>
<script type="text/javascript">SyntaxHighlighter.all();</script>

<!-- custom js -->
<script type="text/javascript" src="../assets/js/main.min.js"></script>
<script type="text/javascript" src="../assets/pages/elements.js"></script>
<script type="text/javascript" src="../assets/pages/elements-materialize.js"></script>
<script type="text/javascript" src="../assets/js/menu.min.js"></script>

</body>
</html>
