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
                            <li class="breadcrumb-item"><a href="basic-table.html">List Pengajuan (ongoing)</a>
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
                            <h5 class="card-header-text">List Pengajuan (ongoing)</h5>
                        </div>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-sm-12 table-responsive">
                                    <table class="table table-hover" id="ongoingSubmissionTable">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Proposal</th>
                                            <th>Status</th>
                                            <th>Deadline Revisi</th>
                                            <th>Dana yang disetujui</th>                                            
                                            
                                            <th>Dana yang belum cair</th>
                                            
                                            <th>Preview</th>
                                        </tr>
                                        </thead>
                                        <tbody>                                            
                                                 <?php   
                                                 $this->load->helpers('money_format');  
                                                    $index = 1;
                                                    foreach($proposal as $key => $pr) : 
                                                 ?>
                                                    <td><?php echo $index ?></td>
                                                    <!-- GET name competition -->
                                                    <td><?php echo $pr->competition->name ?></td>
                                                    <!-- GET status proposal -->
                                                    <?php 

                                                        if($pr->status==='REVISION'){?>

                                                            <td>
                                                                <div class="label-main">
                                                                    <label class="label label-warning">revisi</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                              <label class="label bg-danger">
                                                              <?php 
                                                                    $revisi =  sizeof($pr->revision);
                                                                    if( $pr->revision != null){
                                                                            
                                                                        $time = strtotime($pr->revision[$revisi-1]->due_date);
                                                                        $myFormatForView = date("d M Y", $time);
                                                                        echo $myFormatForView;
                                                                    }
                                                                ?>
                                                              </label>
                                                            </td>
                                                         <?php } else  {?>
                                                            <td>
                                                                <?php 
                                                                    if($pr->status==='PENDING'){?>
                                                                        <div class="label-main">
                                                                            <label class="label bg-warning">Pending</label>
                                                                        </div>
                                                                    <?php } else if($pr->status==='WAITFUND') {
                                                                        ?>
                                                                        <div class="label-main">
                                                                            <label class="label bg-warning">Proses Pencairan Dana</label>
                                                                        </div>
                                                                    <?php } else if($pr->status==='DISBURSEDFUND') {
                                                                        ?>
                                                                        <div class="label-main">
                                                                            <label class="label bg-warning">Dana Telah Cair</label>
                                                                        </div>
                                                                    <?php } else {?>
                                                                     <div class="label-main">
                                                                            <?php } if ("LPJ BELUM") {?>
                                                                                <label class="label bg-warning">Belum Menyerahkan LPJ</label> 
                                                                            <?php } if ("SPJ BELUM") {?>
                                                                                 <label class="label bg-warning">Belum Menyerahkan SPJ</label>
                                                                            <?php } ?>
                                                                    </div>
                                                                    <?php } ?>
                                                            </td>
                                                            <td>
                                                                <p>-</p>
                                                            </td>
                                                            </td>
                                                        <?php } ?>
                                                            <td><?php echo rupiah($pr->realisazion_budget) ?></td>                                                                          
                                                            <td><?php echo rupiah($pr->realisazion_budget -  $pr->approved_budget)?>
                                                    <!-- GET status proposal -->
                                                    <td>
                                                        
                                                                <a href="" id="previewPorposal" class=" btn btn-primary" data-toggle="modal" data-target="#view-Modal-Preview-Proposal<?php echo $pr->id ?> ">
                                                                    Preview
                                                                </a>
                                                            
                                                    </td>
                                                </tr>
<!-- MODAL PREVIEW PROPOSAL -->
<div class="modal fade modal-flex" id="view-Modal-Preview-Proposal<?php echo $pr->id ?>" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title">Preview Proposal</h5>
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
                        <div class="form-group">
                            <label for="teamMembers" class="form-control-label">Ketua Tim</label>
                            <!-- GET Team Member-->
                            <?php                                                                              
                                foreach($pr->team as $key => $team) : 
                            ?>

                                <p id="leaderTeam">
                                    <?php echo $team?>
                                </p>

                            <?php endforeach; ?>
                        </div>
                        <div class="form-group">
                            <label for="dana" class="form-control-label">Catatan RAB</label>
                            <!-- GET Team Member-->
                            <p id="dana">
                                <?php 
                                    $revisi =  sizeof($pr->revision);
                                    if( $pr->revision != null){
                                        echo $pr->revision[$revisi-1]->budget_notes;    
                                    }
                                ?>
                            </p>
                        </div>
                         <div class="form-group">
                            <label for="dana" class="form-control-label">Catatan Konten</label>
                            <!-- GET Team Member-->
                            <p id="dana">                                
                                <?php 
                                    $revisi =  sizeof($pr->revision);
                                    if( $pr->revision != null){
                                        echo $pr->revision[$revisi-1]->content_notes;
                                    }
                                ?>

                            </p>
                        </div>
                      
                    </div>
                </div>
                <div class="modal-footer">
                    <!-- ke form revisi proposal -->
                    <!-- if status proposal adalah revisi -->
                     <?php if($pr->status==='REVISION' && $pr->revision[$revisi-1]->due_date != null) { ?>
                        <a type="button" href="<?php echo base_url();?>index.php/Ormawa/revision_submission?id=<?php echo $pr->id; ?>" class="btn btn-success waves-effect waves-light" >ke form upload revisi</a>
                    <?php } ?>
                    <!-- end if -->
                    
                    <!-- download proposal -->
                    <a type="button" href="<?php echo base_url();?>data/proposals/<?php echo $pr->proposal?>" class="btn btn-primary waves-effect waves-light" >Download Proposal</a>
                </div>
                
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
<!-- MODAL PREVIEW -->

    <!-- Required Jqurey -->
    <script src="<?php echo base_url();?>assets/js/2.1.3jquery.min.js"></script> 
    <script src="<?php echo base_url();?>assets/js/jquery.media.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.dataTables.js"></script>

<script> 
    $(document).ready( function () {
        $('#ongoingSubmissionTable').DataTable();
    });
</script>


</body>
</html>