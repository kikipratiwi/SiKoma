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
                                    <table class="table table-hover" id="reportTable">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Proposal</th>
                                            <th>Ketua Tim</th>
                                            <th>Organisasi</th>
                                            <th>SPJ</th>
                                            <th>LPJ</th>
                                            <th>Pengesahan</th>
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
                                                        <?php if ($pr->financial_report == 1) {
                                                            ?>
                                                          <p>DONE</p>  
                                                        <?php } else { ?>
                                                            <a href="" id="" class="open-view-Modal-Preview btn btn-primary" data-toggle="modal" data-target="#view-modal-spj<?php echo $pr->id ?>">
                                                                Update
                                                            </a>
                                                        <?php } ?>
                                                    </td> 
                                                    <td>
                                                        <?php if ($pr->accountability_report == 1) {
                                                            ?>
                                                          <p>DONE</p>  
                                                        <?php } else { ?>
                                                        <a href="" id="previewProposal" class="open-view-Modal-Preview btn btn-primary" data-toggle="modal" data-target="#view-modal-lpj<?php echo $pr->id ?>">
                                                            Update
                                                        </a>
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                        <?php if ($pr->legalization != null) {
                                                            ?>
                                                          <p>DONE</p>  
                                                        <?php } else { ?>
                                                        <a href="" id="" class="open-view-Modal-Preview btn btn-primary" data-toggle="modal" data-target="#view-modal-pengesahan<?php echo $pr->id ?>">
                                                            Upload
                                                        </a>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                
                                                <!-- MODAL LPJ Pencairan -->
                                                <div class="modal fade modal-flex" id="view-modal-lpj<?php echo $pr->id ?>" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog modal-sm" role="document" >
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                <h5 class="modal-title">Jumlah dana yang digunakan</h5>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" action="<?php echo base_url().'index.php/Staff/updateReport'; ?>">
                                                                    <div class="form-group col-md-12">
                                                                        <label for="lecturertName" class="block form-control-label">Dana yang telah cair</label>
                                                                        <label for="lecturertName" class="block form-control-label"><?php echo rupiah($pr->approved_budget)?></label>
                                                                        
                                                                    </div>

                                                                    <div class="form-group col-md-12">
                                                                        <label for="lecturertName" class="block form-control-label">Dana yang digunakan</label>
                                                                        <input type="hidden" class="form-control" name="id" value=<?php echo $pr->id?> >
                                                                        <input type="number" class="form-control" name="budget" max=<?php echo $pr->realisazion_budget?> required>
                                                                    </div>
                                                            </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-success">SUBMIT</button>
                                                                    </div>
                                                                </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END MODAL LPJ Pencairan -->

                                                <!-- MODAL SPJ Pencairan -->
                                                <div class="modal fade modal-flex" id="view-modal-spj<?php echo $pr->id ?>" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog modal-sm" role="document" >
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                <h5 class="modal-title">Penyerahan SPJ</h5>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" action="<?php echo base_url().'index.php/Staff/updateFinancial'; ?>">
                                                                    <label class="bold">Status</label>
                                                                    <div class="form-radio">
                                                                        <div class="radio radio-inline">
                                                                            <label>
                                                                                <input class="js-incomplete" type="radio" name="radio" value="0">
                                                                                    <i class="helper"></i>Lengkapi SPJ
                                                                            </label>
                                                                        </div>
                                                                        <div class="radio radio-inline">
                                                                            <label>
                                                                                <input class="js-complete" type="radio" name="radio" value="1">
                                                                                    <i class="helper"></i>Selesai
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <input type="hidden" class="form-control" name="id" value=<?php echo $pr->id?> >
                                                                    <div class="md-input-wrapper">
                                                                        <textarea class="js-spj md-form-control md-static" cols="2" rows="4" name="note" disabled></textarea>
                                                                        <label>Catatan SPJ</label>
                                                                    </div>                                                                    
                                                            </div>
                                                                    <div class="modal-footer">
                                                                        <button type="submit" class="btn btn-success">Submit</button>
                                                                    </div>
                                                                </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END MODAL SPJ Pencairan -->
                                                
                                                <!-- MODAL Pengesahan -->
                                                <div class="modal fade modal-flex" id="view-modal-pengesahan<?php echo $pr->id ?>" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog modal-sm" role="document" >
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                <h5 class="modal-title">Upload Pengesahan</h5>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form enctype="multipart/form-data" method="POST" action="<?php echo base_url().'index.php/Staff/updateLegalization'; ?>">
                                                                <div class="md-group-add-on">
                                                                    <span class="md-add-on-file">
                                                                        <button class="btn btn-success waves-effect waves-light">File</button>
                                                                    </span>
                                                                    <input type="hidden" class="form-control" name="id" value=<?php echo $pr->id?> >
                                                                    <div class="md-input-file">
                                                                        <input type="file" class="" name="legalization"/>
                                                                        <input type="text" class="md-form-control md-form-file">
                                                                        <label class="md-label-file">Upload File</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                                    <div class="modal-footer">
                                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                                    </div>
                                                                </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END MODAL Pengesahan -->

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
        $('#reportTable').DataTable();
    });

    $(".js-incomplete").click(function(){
        $(".js-spj").prop('required', true);
        $(".js-spj").prop('disabled', false);
    });

    $(".js-complete").click(function(){
        $(".js-spj").prop('required', false);
        $(".js-spj").prop('disabled', true);
    });
</script>


</body>
</html>