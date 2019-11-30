<div class="content-wrapper">
        <!-- Container-fluid starts -->
        <div class="container-fluid">

            <!-- Header Starts -->
            <div class="row">
                <div class="col-sm-12 p-0">
                    <div class="main-header">
                        <h4>List Kompetisi</h4>
                        <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                            <li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/Admin"><i class="icofont icofont-home"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Kompetisi</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- Header end -->

            <!-- Row start -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- Row start -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <!-- Radio-Button start -->
                                <div class="card-block tab-icon">
                                    <!-- Row start -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                        <button type="button" id="add-competition" class="btn btn-primary" 
                                            style="margin-left: 5px; margin-bottom: 15px;border-radius: .25rem;padding: .5rem .75rem;" 
                                            data-toggle="modal" data-target="#add-competition-modal-form" >+ Data Kompetisi
                                        </button>
                                            <!-- Tabel Proposal -->
                                            <div class="col-sm-12 table-responsive">
                                                <table class="table table-hover" id="competition">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Kompetisi</th>
                                                            <th>Lokasi</th>
                                                            <th>Registrasi</th>
                                                            <th>Event</th>
                                                            <th>Edit</th>
                                                            <th>Delete</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php   
                                                            $index = 1;
                                                            foreach($competition as $key => $cmpt) : 
                                                        ?>
                                                            <tr>
                                                                <td><?php echo $index ?></td>
                                                                <td><?php echo $cmpt->name; ?></td>
                                                                <td><?php echo $cmpt->location; ?></td>
                                                                <?php
                                                                    $date1 = date_create($cmpt->regist_opendate);
                                                                    $date2 = date_create($cmpt->regist_closedate);
                                                                ?>
                                                                <td><?php echo date_format($date1,"d M Y")." - ". date_format($date2,"d M Y"); ?></td>
                                                                <?php
                                                                    $date1 = date_create($cmpt->event_startdate);
                                                                    $date2 = date_create($cmpt->event_enddate);
                                                                ?>
                                                                <td><?php echo date_format($date1,"d M Y")." - ". date_format($date2,"d M Y");?></td>
                                                                <td>
                                                                    <!-- <button type="button" class="btn btn-primary waves-effect waves-light">Edit</button> -->
                                                                    <a href="" id="input_category" class="open-view-cateogry btn btn-primary" data-toggle="modal" data-target="#edit-competition-modal-form">
                                                                        Edit
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <button type="button" class="btn btn-danger waves-effect waves-light">Delete</button>
                                                                </td>
                                                            </tr>

                                                            <!-- MODAL REVIEW REVISION -->
                                                <div class="modal fade modal-flex" id="edit-competition-modal-form" tabindex="-1" role="dialog">
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
                                                                    <div class="col-sm-9">
                                                                        <!-- GET Link to review Proposal -->
                                                                        <a class="media" id="propose" href="<?php echo base_url();?>data/proposals/Proposal41574015633.pdf"></a>
                                                                        
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        
                                                                        <div class="form-group">
                                                                                <label for="teamMembers" class="form-control-label">Dana Yang diajukan *get data*</label>
                                                                                <!-- GET Team member -->
                                                                                <p id="leaderTeam">
                                                                                
                                                                                </p>                                                                                
                                                                            </div>
                                                                            <form enctype="multipart/form-data" method="POST" action="">   
                                                                            
                                                                            <input type="hidden" id="proposal" name="proposal" value="">
                                                                            <div class="md-input-wrapper">
                                                                                
                                                                            <textarea id="leaderTeam" class="md-form-control md-static" cols="2" rows="4" name="rab"></textarea>
                                                                                <label>Catatan RAB</label>
                                                                                
                                                                            </div>
                                                                            <div class="md-input-wrapper">                                                                                
                                                                                <textarea id="contentNotes"  class="md-form-control md-static" cols="2" rows="4" name="konten"></textarea>
                                                                                <label>Catatan Konten</label>
                                                                                <p id="dana">
                                                                                
                                                                            </p>

                                                                            </div>
                                                                            <label>Rincian Dana</label>
                                                                            <div class="md-input-wrapper">
                                                                                Jumlah Dana yang Disetujui<br>
                                                                                <input class="col-sm-9" type="number" name="budget" min=0>
                                                                            </div>
                                                                            <div class="md-input-wrapper">
                                                                                <br>Sumber Dana<br>
                                                                                <input class="col-sm-9" type="text" name="source">
                                                                            </div><br>                                                                     
                                                                            <!-- SET status proposal -->
                                                                            <label class="bold">Status</label>
                                                                            <div class="form-radio">
                                                                                <form method="POST">
                                                                                    <div class="radio radio-inline">
                                                                                        <label>
                                                                                            <input type="radio" name="radio" value="WAITFUND">
                                                                                                <i class="helper"></i>Diterima
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="radio radio-inline">
                                                                                        <label>
                                                                                            <input type="radio" name="radio" value="REVISION">
                                                                                                <i class="helper"></i>Revisi
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="radio radio-inline">
                                                                                        <label>
                                                                                            <input type="radio" name="radio" value="REJECTED">
                                                                                                <i class="helper"></i>Ditolak
                                                                                        </label>
                                                                                    </div>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row" style="padding-top: 3px margin-bottom: 3px">
                                                                    <div class="col-sm-12 text-center" style="padding-top: 3px margin-bottom: 3px">
                                                                        <button type="submit" style="padding-top: 3px margin-bottom: 13px" class="btn btn-success waves-effect waves-light">Submit</button>
                                                                    </div>
                                                                </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
                            </div>
                        </div>
                    </div>
                    <!-- Row end -->
                </div>
            </div>
            <!-- Row end -->
            <!-- Tables end -->
        </div>

        <!-- Container-fluid ends -->
    </div>
</div>


<!-- Add Competition Modal -->
<div class="modal fade modal-flex" id="add-competition-modal-form" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            <h5 class="modal-title">Tambah Data Kompetisi</h5>
        </div>

        <form method="POST" action="<?php echo base_url().'index.php/Admin/act_add_competition'; ?>">
            <div class="modal-body">
                    <div class="form-group col-md-12">
                        <label for="competitionName" class="block form-control-label">Nama Kompetisi</label>
                        <input type="text" class="form-control" name="name" placeholder="ex: Gemastik">
                    </div>
                    
                    <div class="form-group col-md-12">
                        <label for="institusion" class="block form-control-label">Institusi Penyelenggara</label>
                        <input type="text" class="form-control" name="institusion" placeholder="ex: Universitas Gajah Mada">
                    </div>
                
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="location" class="block form-control-label">Lokasi</label>
                            <input type="text" class="form-control" name="location" placeholder="Lokasi Kompetisi">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="level" class="block form-control-label">Level Kompetisi</label>
                            <select class="form-control " name="level">
                                <option value="4">Kota</option>
                                <option value="3">Provinsi</option>
                                <option value="2">Nasional</option>
                                <option value="1">Internasional</option>
                            </select>    
                        </div>
                    </div>
                
                    <div class="form-group col-md-12" style="margin-bottom: .1rem;">
                        <label for="registDate" class="block form-control-label">Tanggal Pendaftaran</label>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <div class="form-control-wrapper">
                                <input type="date" name="regist_opendate" id="regist-date-start" class="form-control floating-label" placeholder="Start Date">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-control-wrapper">
                                <input type="date" name="regist_closedate" id="regist-date-end" class="form-control floating-label" placeholder="End Date">
                            </div>
                        </div>
                    </div>
                
                    <div class="form-group col-md-12" style="margin-bottom: .1rem;">
                        <label for="eventDate" class="block form-control-label">Tanggal Pelaksanaan Kompetisi</label>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <div class="form-control-wrapper">
                                <input type="date" name="event_startdate" id="event-date-start" class="form-control floating-label" placeholder="Start Date">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-control-wrapper">
                                <input type="date" name="event_closedate" id="event-date-end" class="form-control floating-label" placeholder="End Date">
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group row"> <div class="col-sm-10"> </div> </div>

            </div>
            <div class="modal-footer" style="padding-top: 3pt">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            </div>
        </form>
    </div>
</div>
<!-- End of Add Competition Modal -->

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
		
    <script src="<?php echo base_url();?>assets/js/jquery.media.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.dataTables.js"></script>
	

<script> 
    $(document).ready( function () {
        $('#competition').DataTable();
    });

    $(function () {
        $('.media').media({width: 950, height:430});
    });
</script>


</body>
</html>