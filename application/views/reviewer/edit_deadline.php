<div class="content-wrapper">
    <!-- Container-fluid starts -->
    <div class="container-fluid">
        <!-- Main content starts -->
        <div class="tab-list">
            <!-- Row Starts -->
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="main-header">
                        <h4>Proposal</h4>
                        <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                            <li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/Admin"><i class="icofont icofont-home"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Edit Deadline</a>
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
                                <div class="card-header">
                                    <h5 class="card-header-text">Edit Deadline Pengajuan Proposal</h5>
                                </div>
                                <div class="card-block">
                                    <form enctype="multipart/form-data" method="POST" action="">
                                        <div class="form-group row">
                                            <div class="col-md-2 col-xs-6">
                                                <label for="ormawa" class="form-control-label">Organisasi Mahasiswa</label>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-6">
                                                <select class="form-control " name="ormawa">
                                                    <option value=""></option>
                                                    <option value="0">HIMAKOM</option>
                                                    <option value="1">HMJTK</option>
                                                    <option value="2">HMM</option>
                                                    <option value="3">HMAK</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-2">
                                                <label for="deadline" class="form-control-label">Deadline Submit Proposal (H-?)</label>
                                            </div>
                                            <div class="col-md-2 col-sm-6">
                                                <select class="form-control " name="deadline">
                                                    <option value=""></option>
                                                    <option value="0">H-0</option>
                                                    <option value="1">H-1</option>
                                                    <option value="2">H-2</option>
                                                    <option value="3">H-3</option>
                                                    <option value="4">H-4</option>
                                                    <option value="5">H-5</option>
                                                    <option value="6">H-6</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- <div class="form-group row">
                                            <div class="col-md-2 col-sm-3 col-xs-6">
                                                <label for="limit-lpj" class="form-control-label">Jumlah Proposal</label>
                                            </div>
                                            <div class="col-md-1 col-sm-6 col-xs-6">
                                                <select class="form-control " name="limit-lpj">
                                                    <option value=""></option>
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </div>
                                        </div> -->
                                </div>
                                <div class="card-footer">
                                    <div class="form-group col-md-4 col-sm-6">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                    </div>
                                </div>
                                    </form>
                                
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
        src="<?php echo base_url();?>assets/js/jquery-3.444.1.slim.min.js"
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