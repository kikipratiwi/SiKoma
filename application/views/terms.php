<!DOCTYPE html>
<html lang="en">

<head>
    <title>SiKoma</title>
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

    <!-- iconfont -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/icon/icofont/css/icofont.css">

    <!-- simple line icon -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/icon/simple-line-icons/css/simple-line-icons.css">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/main.css">

    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/responsive.css">

    <!--color css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/color/color-1.min.css" id="color"/>


    <style>
        ul {
            list-style-type: lower-alpha; /* a, b, */
            padding: 0;
            margin: 0;
        }

        li { 
            padding-left: 8px; 
            font-size: 13px;
            font-weight: 400;
            line-height: 2;
            color: #666;
            margin: 0;
            margin-left: 16px;
        }

        li::before {
            padding-right: 8px;
        }

        .bg-image {
            height: 100%;
            width: 100%;
            background-image: url(<?php echo base_url(); ?>/assets/images/authentication-bg.jpg);
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            background-attachment: fixed;
            position: fixed;
        }

        .mt-4 {
            margin-top: 4rem;
        }
            
    </style>


  </head>

  <body class="sidebar-mini fixed">
  <div class="bg-image">
	<!-- Container-fluid starts -->
	<div class="container-fluid">
		<div class="row mt-4">
                <div class="col-lg-2">
                </div>
                <!-- Single Open Accordion start -->
                <div class="col-lg-8">
                    <div class="card">
                    <div class="card-header">
                        <h5 class="card-header-text text-center">Informasi Seputar Pengajuan Proposal Kompetisi</h5>
                    </div>
                    <div class="card-block accordion-block">
                        <div class="accordion-box" id="sclae-accordion">
                            <a class="accordion-msg">Prosedur Pengajuan</a>
                            <div class="accordion-desc">
                                <ul>
                                    <li>	Pastikan jurusan anda telah menyerahkan langsung <b>SPJ dan LPJ</b> dari kompetisi sebelumnya ke bagian kemahasiswaan</li>
                                    <li>	Maksimal upload proposal adalah <b>H-7</b> tanggal penutupan pendaftaran kompetisi	</li>
                                    <li>	Pastikan proposal yang diupload telah sesuai dengan <b>template</b> dan disetujui oleh pembimbing	</li>
                                    <li>	Anda dapat mengunduh template proposal pada link berikut <a href="#">Template Proposal</a>	</li>
                                    <li>	Progress pengajuan proposal dapat dilihat pada menu <b>"List Proposal (ongoing)"</b>	</li>
                                    <li>	Setiap catatan revisi yang diberikan oleh reviewer memiliki <b>deadline</b>, pastikan menyelesaikan revisi sebelum deadline. Jika melebihi deadline maka proposal anda akan otomatis <b>ditolak</b>	</li>
                                    <li>	Jika proposal telah <b>"disetujui"</b>, serahkan hardcopy proposal ke bagian kemahasiswaan	</li>
                                    <li>	Anda dapat mengambil dana jika proposal yang Anda ajukan telah berstatus <b>"dana telah cair"</b>	</li></p>
                                    <li>	Jika data kompetisi yang akan anda ikuti belum terdaftar, maka lakukan penambahan data dengan mengisi form <b>"Tambah Data Kompetisi"</b>	</li>
                                </ul>
                            </div>
                            <a class="accordion-msg">Prosedur Akun</a>
                            <div class="accordion-desc">
                                <ul>
                                    <li>	Untuk akun yang pertama kali login, kata sandi adalah <b>123456</b>	</li>
                                    <li>	Setelah login pertama kali maka segera ganti kata sandi Anda demi keamanan	</li>
                                    <li>	Jika lupa kata sandi silahkan hubungi bagian kemahasiswaan	</li>
                                </ul>
                            </div>
                            <a class="accordion-msg">FAQ</a>
                            <div class="accordion-desc">
                                <ul>
                                    <li>	Bagaimana jika proposal yang saya ajukan ditolak karena terlambat mensubmit revisi? Silahkan lakukan pengajuan ulang	</li>
                                    <li>	Bagaimana jika saya akan mengajukan proposal ulang namun tanggal akhir penutupan pendaftaran sudah melebihi ketentuan tanggal pengajuan proposal? Silahkan hubungi bagian kemahasiswaan	</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Single Open Accordion ends -->
                <div class="col-lg-2">
                </div>
        </div>
		<!-- end of row -->
    </div>
	<!-- end of container-fluid -->
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
                    <img src="<?php echo base_url(); ?>assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="<?php echo base_url(); ?>assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="<?php echo base_url(); ?>assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="<?php echo base_url(); ?>assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="<?php echo base_url(); ?>assets/images/browser/ie.png" alt="">
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
<script src="<?php echo base_url(); ?>assets/plugins/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/tether/dist/js/tether.min.js"></script>

<!-- Required Fremwork -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- waves effects.js -->
<script src="<?php echo base_url(); ?>assets/plugins/Waves/waves.min.js"></script>

<!-- Scrollbar JS-->
<script src="<?php echo base_url(); ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

<!--classic JS-->
<script src="<?php echo base_url(); ?>assets/plugins/classie/classie.js"></script>

<!-- notification -->
<script src="<?php echo base_url(); ?>assets/plugins/notification/js/bootstrap-growl.min.js"></script>

<!-- custom js -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/main.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/pages/accordion.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/pages/elements.js"></script>
<script src="<?php echo base_url(); ?>assets/js/menu.min.js"></script>

</body>

</html>
