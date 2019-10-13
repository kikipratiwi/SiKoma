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
    <link rel="shortcut icon" href="../../assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="../../assets/images/favicon.ico" type="image/x-icon">

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <!-- iconfont -->
    <link rel="stylesheet" type="text/css" href="../../assets/icon/icofont/css/icofont.css">

    <!-- simple line icon -->
    <link rel="stylesheet" type="text/css" href="../../assets/icon/simple-line-icons/css/simple-line-icons.css">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="../../assets/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Weather css -->
    <link href="../../assets/css/svg-weather.css" rel="stylesheet">

    <!-- Echart js -->
    <script src="../assets/plugins/charts/echarts/js/echarts-all.js"></script>

    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="../../assets/css/main.css">

    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/responsive.css">

    <!--color css-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/color/color-1.min.css" id="color"/>
    
    <!-- own style css -->
    <link rel="stylesheet" href="../../assets/css/style.css"/>
</head>

<body class="sidebar-mini fixed">
    <section class="">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                        <div class="row">
                            <div class="col-sm-12">
                                <button type="button" class="btn btn-inverse-primary waves-effect waves-light text-uppercase m-r-30">
                                    <a href="" data-toggle="modal" data-target="#view-Modal">
                                        View
                                    </a>
                                </button>
                                <div class="modal fade modal-flex" id="view-Modal" tabindex="-1" role="dialog">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h5 class="modal-title">Review Proposal</h5>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="teamMembers" class="form-control-label">Anggota Tim</label>
                                                            <select multiple class="form-control multiple-select" id="teamMembers">
                                                                <option>Ketua Tim</option>
                                                                <option>Anggota Tim 1</option>
                                                                <option>Anggota Tim 2</option>
                                                                <option>Anggota Tim 3</option>
                                                                <option>Anggota Tim 4</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <!-- <div class="md-input-wrapper"> -->
                                                            <label>Preview Proposal</label>
                                                            <textarea class="form-control" cols="2" rows="10"></textarea>
                                                        <!-- </div> -->
                                                        <div class="text-center">
                                                            <button type="button" class="btn btn-inverse-primary waves-effect waves-light text-uppercase m-r-30">
                                                                Download
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="md-input-wrapper">
                                                            <textarea class="md-form-control md-static" cols="2" rows="4"></textarea>
                                                            <label>Note</label>
                                                        </div>
                                                        <div class="form-radio">
                                                            <form>
                                                                <div class="radio radio-inline">
                                                                    <label>
                                                                        <input type="radio" name="radio">
                                                                            <i class="helper"></i>Accepted
                                                                    </label>
                                                                </div>
                                                                <div class="radio radio-inline">
                                                                    <label>
                                                                        <input type="radio" name="radio">
                                                                            <i class="helper"></i>Revision
                                                                    </label>
                                                                </div>
                                                                <div class="radio radio-inline">
                                                                    <label>
                                                                        <input type="radio" name="radio" checked="checked">
                                                                            <i class="helper"></i>Pending
                                                                    </label>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 text-center">
                                                        <button type="button" class="btn btn-inverse-info txt-primary waves-effect waves-light text-uppercase m-r-30">
                                                            SUBMIT
                                                        </button>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>

        </div>
    </section>


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
<script src="../assets/js/menu.min.js"></script>



</body>

</html>
