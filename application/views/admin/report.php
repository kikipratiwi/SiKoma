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
                            <li class="breadcrumb-item"><a href="basic-table.html">LPJ</a>
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
                            <h5 class="card-header-text">LPJ</h5>
                            
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
                                            <th>LPJ</th>
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
                                                    <!-- GET leader -->
                                                    <td><?php echo $pr->team[0] ?></td>
                                                    <!-- GET Depatement -->
                                                    <td><?php echo $pr->organization->name ?></td>
                                                    <td>
                                                        <div class="label-main">
                                                            <label class="label bg-warning">Belum Menyerahkan LPJ</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <!-- <a type="button" href=" echo base_url();?>index.php/Admin/updateReport?id=echo $pr->id; ?>" class="btn btn-success waves-effect waves-light" >
                                                        Update
                                                        </a> -->
                                                        <a href="" id="previewPorposal" class="open-view-Modal-Preview btn btn-primary" data-toggle="modal" data-target="#view-Modal">
                                                            Update
                                                        </a>
                                                    </td>                                                    
                                                </tr>
                                                
                                                <!-- MODAL Pencairan -->
                                                <div class="modal fade modal-flex" id="view-Modal" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog modal-sm" role="document" >
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                <h5 class="modal-title">Jumlah dana yang digunakan</h5>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" action="<?php echo base_url().'index.php/Admin/updateReport'; ?>">
                                                                    <div class="form-group col-md-12">
                                                                        <label for="lecturertName" class="block form-control-label">Dana yang telah cair</label>
                                                                        <label for="lecturertName" class="block form-control-label"><?php echo rupiah($pr->approved_budget)?></label>
                                                                        
                                                                    </div>

                                                                    <div class="form-group col-md-12">
                                                                        <label for="lecturertName" class="block form-control-label">Dana yang digunakan</label>
                                                                        <input type="hidden" class="form-control" name="id" value=<?php echo $pr->id?> >
                                                                        <input type="number" class="form-control" name="budget" max=<?php echo $pr->realisazion_budget?> required>
                                                                    </div>
                                                                    <!-- <div class="label-main">
                                                                        <label class="label bg-warning">Dana yang akan dicairkan pada termin selanjutnya adalah <br><?php echo rupiah($pr->realisazion_budget - $pr->approved_budget)?></label>
                                                                    </div> -->
                                                                    <br><center>
                                                                    <button type="submit" class="btn btn-success">SUBMIT</button>
                                                                    </center>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END MODAL Pencairan -->


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
        $('#ongoingSubmissionTable').DataTable();
    });

    $(function () {
        $('.media').media({width: 950, height:430});
    });
</script>


</body>
</html>