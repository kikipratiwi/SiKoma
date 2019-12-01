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
                                            <th>Deadline</th>
                                            <th>Preview</th>
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
                                                    <td><?php echo $pr->profile->name ?></td>
                                                    <!-- GET departement -->
                                                    <td><?php echo $pr->organization->name ?></td>
                                                    <!-- GET deadline proposal -->
                                                    <td> <?php 
                                                            $revisi =  sizeof($pr->revision);
                                                            if( $pr->revision != null){
                                                                    
                                                                $time = strtotime($pr->revision[$revisi-1]->due_date);
                                                                $myFormatForView = date("d M Y", $time);
                                                                echo $myFormatForView;
                                                            }
                                                         ?>
                                                    </td>
                                                    <td>
                                                        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#view-Modal-Deadline">
                                                            Preview
                                                        </a>
                                                    </td>
                                                    
                                                </tr>

                                                <!-- MODAL REVIEW REVISION -->
                                                <div class="modal fade modal-flex" id="view-Modal-Deadline" tabindex="-1" role="dialog">
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
                                                                        <object id="pdf" height="500px" width="100%" type="application/pdf" data="<?php echo base_url();?>data/proposals/<?php echo $pr->proposal; ?>">
                                                                            <span>PDF is not found or PDF plugin is not available</span>
                                                                        </object>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                    <?php 
                                                                     $revisi =  sizeof($pr->revision);
                                                                        
                                                                        if($pr->revision[$revisi-1]->due_date===NULL ){?>
                                                                            <div class="form-group col-md-8" style="margin-bottom: .1rem;">
                                                                                <label for="registDate" class="block form-control-label">Input Deadline</label>
                                                                            </div>
                                                                        <?php } else { ?>
                                                                            <div class="label-main">
                                                                                <label class="label bg-danger">
                                                                                <!-- php echo date_format($date1,"d M Y"); -->
                                                                               <?php echo $pr->revision[$revisi-1]->due_date ?>
                                                                                </label>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <form enctype="multipart/form-data" method="POST" action="<?php echo base_url().'index.php/Admin/addDeadline'; ?>">  

                                                                        <input type="hidden" id="proposal" name="proposal" value="<?php echo $pr->id ?>">

                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-12">
                                                                                <div class="form-control-wrapper">
                                                                                    <input type="date" name="deadline" id="regist-date-start" class="form-control floating-label" placeholder="Start Date">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group col-md-12">
                                                                            <div class="md-input-wrapper">
                                                                                <label>Catatan RAB</label>
                                                                                <!-- GET NOTES echo $proposal['notes']; -->
                                                                                <textarea class="md-form-control md-static" cols="2" rows="4">
                                                                                    <?php echo $pr->revision[$revisi-1]->budget_notes ?>
                                                                                </textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group col-md-12">
                                                                            <div class="md-input-wrapper">
                                                                                <label>Catatan Konten</label>
                                                                                <!-- GET NOTES echo $proposal['notes']; -->
                                                                                <textarea class="md-form-control md-static" cols="2" rows="4">
                                                                                    <?php echo $pr->revision[$revisi-1]->content_notes ?>
                                                                                </textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <div class="row" style="padding-top: 3px margin-bottom: 3px">
                                                                        <div class="col-sm-12 text-center" style="padding-top: 3px margin-bottom: 3px">
                                                                            <!-- SET status proposal -->
                                                                            <button type="submit" style="padding-top: 3px margin-bottom: 3px" class="btn btn-success waves-effect waves-light">Submit</button>
                                                                        </div>
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

    <!-- Scrollbar JS-->
    <script src="<?php echo base_url();?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

    <script src="<?php echo base_url();?>assets/js/jquery.media.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.dataTables.js"></script>


<script> 
    $(document).ready( function () {
        $('#ongoingSubmissionTable').DataTable();
    });
</script>


</body>
</html>