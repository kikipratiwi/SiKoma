<div class="content-wrapper">
        <!-- Container-fluid starts -->
        <div class="container-fluid">

            <!-- Header Starts -->
            <div class="row">
                <div class="col-sm-12 p-0">
                    <div class="main-header">
                        <h4>List Proposal</h4>
                        <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <i class="icofont icofont-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Proposal</a>
                            </li>
                            <li class="breadcrumb-item"><a href="basic-table.html">List Proposal Revisi</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- Header end -->

            <!-- Tables start -->
            <!-- Row start -->
            <div class="row">
                <div class="col-sm-12">

                    <!-- Hover effect table starts -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-header-text">List Proposal Revisi</h5>
                        </div>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-sm-12 table-responsive">
                                    <table class="table table-hover" id="ongoingSubmissionTable">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Proposal</th>
                                            <th>Ketua Tim</th>
                                            <th>Organisasi</th>
                                            <th>Status</th>
                                            <th>Preview</th>
                                            <th>Update</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php   
                                                    $index = 1;
                                                    foreach($proposal as $key => $pr) : 
                                            ?>
                                                <tr>
                                                    <td><?php echo $index ?></td>
                                                    <!-- GET name competition -->
                                                   <td><?php echo $pr->competition->name ?></td>

                                                    <!-- GET date upload -->
                                                
                                                    <!-- GET leader -->
                                                    <td><?php echo $pr->profile->name ?></td>
                                                    <td><?php echo $pr->department->name ?></td>
                                                    <td><?php
                                                        if($pr->status==='WAITFUND'){?>
                                                            <div class="label-main">
                                                                <label class="label bg-warning"> Tunggu Pencairan Dana</label>
                                                            </div>
                                                        <?php } else if($pr->status==='DISBURSEDFUND'){  ?>
                                                            <div class="label-main">
                                                                <label class="label bg-success"> Dana Telah Cair</label>
                                                            </div>
                                                        <?php }?>
                                                    </td>
                                                    <td>
                                                        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#view-Modal-Preview">
                                                            Preview
                                                        </a>
                                                    </td>
                                                    <td><?php
                                                        if($pr->status==='WAITFUND'){?>
                                                         <!-- echo base_url();?>index.php/Admin/updatefund?id= echo $pr->id; ?> -->
                                                            <a href="" class="btn btn-success" data-toggle="modal" data-target="#view-Modal-Termin">
                                                                Cairkan dana
                                                            </a>
                                                        <?php } else if($pr->status==='DISBURSEDFUND'){  ?>
                                                            <a href="<?php echo base_url();?>index.php/Admin/updatedisfund?id=<?php echo $pr->id; ?>" class="btn btn-success">
                                                                Dana Diserahkan
                                                            </a>
                                                        <?php }?>
                                                    </td>
                                                    
                                                </tr>
                                                
                                                <!-- MODAL TERMIN -->
                                                <div class="modal fade modal-flex" id="view-Modal-Termin" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog modal-sm" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                <h5 class="modal-title">Pencairan Dana</h5>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group col-md-12" style="margin-bottom: .1rem;">
                                                                            <label for="registDate" class="block form-control-label">Jumlah Dana</label>
                                                                            <!-- < echo rupiah($pr->realisazion_budget);?> -->
                                                                            <input type="number" name="budget" min=0>
                                                                            <!-- < -->
                                                                                <!-- if($pr->realisazion_budget==='yang diinputkan') -->
                                                                            
                                                                            <!-- ?> -->
                                                                            <br><span>Sisa dana yang akan dicairkan pada termin 2 adalah </span>
                                                                            <!-- < -->
                                                                                <!-- echo rupiah($pr->realisazion_budget) dikurang yang diinputkan; -->
                                                                            <!-- ?> -->
                                                                        </div>
                                                                        <div class="form-group col-md-12" style="margin-bottom: .1rem;">
                                                                            <label for="registDate" class="block form-control-label">Sumber Dana</label>
                                                                            <!-- < $pr->budget_source ?> -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END MODAL TERMIN -->

                                                            

                                                <?php 
                                                    $index++;
                                                    endforeach;
                                                ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Hover effect table ends -->

                </div>
            </div>
            <!-- Row end -->
            <!-- Tables end -->
        </div>

        <!-- Container-fluid ends -->
    </div>
</div>

<!-- Required Jqurey -->
    <script
        src="<?php echo base_url();?>assets/js/jquery-3.4.1.slim.min.js"
        integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
        crossorigin="anonymous">
    </script>

    <script src="<?php echo base_url();?>assets/plugins/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/tether/dist/js/tether.min.js"></script>
    <!-- https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js -->
    <script src="<?php echo base_url();?>assets/js/2.1.3jquery.min.js"></script> 
    <!-- https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js -->
    <script src="<?php echo base_url();?>assets/js/3.0.0-alpha1jquery.min.js"></script>

    <!-- Required Fremwork -->
    <script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- waves effects.js -->
    <script src="<?php echo base_url();?>assets/plugins/Waves/waves.min.js"></script>

    <!-- Scrollbar JS-->
    <script src="<?php echo base_url();?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

    <!--classic JS-->
    <script src="<?php echo base_url();?>assets/plugins/classie/classie.js"></script>

    <!-- notification -->
    <script src="<?php echo base_url();?>assets/plugins/notification/js/bootstrap-growl.min.js"></script>


    <!-- Rickshaw Chart js -->
    <script src="<?php echo base_url();?>assets/plugins/d3/d3.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/rickshaw/rickshaw.js"></script>

    <!-- Sparkline charts -->
    <script src="<?php echo base_url();?>assets/plugins/jquery-sparkline/dist/jquery.sparkline.js"></script>

    <!-- Counter js  -->
    <script src="<?php echo base_url();?>assets/plugins/waypoints/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/countdown/js/jquery.counterup.js"></script>

    <!-- custom js -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/main.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/pages/dashboard.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/pages/elements.js"></script>
    <script src="<?php echo base_url();?>assets/js/menu.min.js"></script>
		


<!-- apache_response_headers -->

    <!-- Required Jqurey -->
    <script src="<?php echo base_url();?>assets/plugins/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/tether/dist/js/tether.min.js"></script>

    <!-- Required Fremwork -->
    <script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- waves effects.js -->
    <script src="<?php echo base_url();?>assets/plugins/Waves/waves.min.js"></script>

    <!-- Scrollbar JS-->
    <script src="<?php echo base_url();?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

    <!--classic JS-->
    <script src="<?php echo base_url();?>assets/plugins/classie/classie.js"></script>

    <!-- notification -->
    <script src="<?php echo base_url();?>assets/plugins/notification/js/bootstrap-growl.min.js"></script>

    <!-- Date picker.js -->
    <script src="<?php echo base_url();?>assets/plugins/datepicker/js/moment-with-locales.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Select 2 js -->
    <script src="<?php echo base_url();?>assets/plugins/select2/dist/js/select2.full.min.js"></script>

    <!-- Max-Length js -->
    <script src="<?php echo base_url();?>assets/plugins/bootstrap-maxlength/src/bootstrap-maxlength.js"></script>

    <!-- Multi Select js -->
    <script src="<?php echo base_url();?>assets/plugins/bootstrap-multiselect/dist/js/bootstrap-multiselect.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/multiselect/js/jquery.multi-select.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/multi-select/js/jquery.quicksearch.js"></script>

    <!-- Tags js -->
    <script src="<?php echo base_url();?>assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.js"></script>

    <!-- Bootstrap Datepicker js -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/bootstrap-datepicker/js/bootstrap-datetimepicker.min.js"></script>

    <!-- bootstrap range picker -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- color picker -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/spectrum/spectrum.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/jscolor/jscolor.js"></script>

    <!-- highlite js -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/syntaxhighlighter/scripts/shCore.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/syntaxhighlighter/scripts/shBrushJScript.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/syntaxhighlighter/scripts/shBrushXml.js"></script>
    <script type="text/javascript">SyntaxHighlighter.all();</script>

    <!-- custom js -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/main.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/pages/advance-form.js"></script>
    <script src="<?php echo base_url();?>assets/js/menu.min.js"></script>
		

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="http://malsup.github.com/jquery.media.js"></script>


<script> 
    $(document).ready( function () {
        $('#ongoingSubmissionTable').DataTable();
    });
</script>


</body>
</html>