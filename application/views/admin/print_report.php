<div class="content-wrapper">
    <!-- Container-fluid starts -->
    <div class="container-fluid">
        <!-- Main content starts -->
        <div class="tab-list">
            <!-- Row Starts -->
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="main-header">
                        <h4>Laporan</h4>
                        <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                            <li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/Admin"><i class="icofont icofont-home"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Cetak Laporan</a>
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
                                <div class="card-block tab-icon">
                                    <!-- Row start -->
                                    <b>Cetak Laporan</b>
                                    <form enctype="multipart/form-data" method="POST" action="<?php echo base_url().'index.php/Admin/export'; ?>">                                                       
                                        <!-- <div class="row"> -->
                                            <label class="block form-control-label">Rentang Tanggal</label>
                                            <div class="form-row">
                                                <div class="form-group col-md-3">
                                                    <div class="form-control-wrapper">
                                                        <input type="date" name="regist_opendate" id="regist-date-start" class="form-control floating-label" placeholder="Start Date">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <div class="form-control-wrapper">
                                                        <input type="date" name="regist_closedate" id="regist-date-end" class="form-control floating-label" placeholder="End Date">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                            
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Cetak</button>
                                        <!-- </div> -->
                                    </form>
                                </div>

                                <div class="row">
                                <div class="col-sm-12 table-responsive">
                                    <?php 
                                    $proposal = NULL;
                                    if($proposal !== NULL){?>
                                        <table class="table table-hover" id="printReport">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tahun</th>
                                                <th>Kompetisi</th>
                                                <th>Dana yang Diajukan</th>
                                                <th>Dana yang Disetujui</th>
                                                <th>Realisasi Dana</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                    <?php   
                                                        $index = 1;
                                                        foreach($proposal as $key => $pr) : 
                                                    ?>
                                                        
                                                    <tr>
                                                        <td><?php echo $index ?></td>
                                                        <!-- GET start year  -->
                                                        <td><?php echo "2019"; ?></td>
                                                        <!-- GET total competition name -->
                                                        <td><?php echo "Ideafuse"; ?></td>
                                                        <!-- GET total draft budget -->
                                                        <td><?php echo rupiah("29000000"); ?></td>
                                                        <!-- GET total approved budget -->
                                                        <td><?php echo rupiah("29000000"); ?></td>
                                                        <!-- GET total realization budget -->
                                                        <td><?php echo rupiah("29000000"); ?></td>
                                                    </tr>
                                                    <?php 
                                                        $index++;
                                                        endforeach;
                                                    ?>
                                                    
                                            </tbody>
                                        </table>
                                    <?php } else {
                                        ?> 
                                        <table class="table table-hover" id="printReport">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tahun</th>
                                                <th>Kompetisi</th>
                                                <th>Dana yang Diajukan</th>
                                                <th>Dana yang Disetujui</th>
                                                <th>Realisasi Dana</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        
                                        <?php
                                    }
                                    ?>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row end -->
                </div>
            </div>
            <!-- Row end -->
        </div>
        <!-- Main content end -->
    </div>
    <!-- Container-fluid end -->
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


    <!-- Scrollbar JS-->
    <script src="<?php echo base_url();?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

    <!-- Required Jqurey -->
    <script src="<?php echo base_url();?>assets/js/jquery.media.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.dataTables.js"></script>
	

<script> 
    $(document).ready( function () {
        $('#printReport').DataTable();
    } );
</script>