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
                            <li class="breadcrumb-item"><a href="basic-table.html">List Proposal Pengajuan Baru</a>
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
                            <h5 class="card-header-text">List Proposal pengajuan baru</h5>
                        </div>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-sm-12 table-responsive">
                                    <table class="table table-hover" id="previewNewProposal">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Proposal</th>
                                            <th>Tanggal Upload</th>
                                            <th>Ketua Tim</th>
                                            <th>Organisasi</th>                                            
                                            <th>Review</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                                <?php   
                                                    $this->load->helpers('money_format');
                                                    $index = 1;
                                                    foreach($proposal as $key => $pr) : 
                                                ?>
                                                <tr>
                                                    <td><?php echo $index ?></td>
                                                    <!-- GET name competition -->
                                                    <td><?php echo $pr->competition->name ?></td>

                                                    <!-- GET date upload -->
                                                    <td>
                                                        <?php                                                                                                
                                                            $time = strtotime($pr->created_at);
                                                            $myFormatForView = date("d M Y", $time);
                                                            echo $myFormatForView;
                                                            
                                                        ?>
                                                    </td>

                                                    <!-- GET leader -->
                                                    <td><?php echo $pr->team[0] ?></td>

                                                    <!-- GET departement -->
                                                    <td><?php echo $pr->organization->name ?></td>
                                                    <td>
                                                        <a href="" id="previewPorposal" class="open-view-Modal-Preview btn btn-primary" data-toggle="modal" data-target="#view-Modal<?php echo $pr->id ?>">
                                                            Review
                                                        </a>
                                                    </td>
                                                </tr>
                                                
                                                <!-- MODAL REVIEW REVISION -->
                                                <div class="modal fade modal-flex" id="view-Modal<?php echo $pr->id ?>" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog modal-lg" role="document" >
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
                                                                    <div class="form-group">
                                                                            <label for="teamMembers" class="form-control-label">Dana Yang diajukan</label>
                                                                                <br><?php  echo rupiah($pr->draft_budget); ?>                                        
                                                                                    
                                                                        </div>
                                                                        <form enctype="multipart/form-data" method="POST" action="<?php echo base_url().'index.php/Reviewer/review_proposal_submission'; ?>">   
                                                                            <input type="hidden" id="proposal" name="proposal" value="<?php echo $pr->id ?>">
                                                                            <label class="bold">Status</label>
                                                                            <div class="form-radio">
                                                                                <div class="radio radio-inline">
                                                                                    <label>
                                                                                        <input class="js-accept" type="radio" name="radio" value="WAITFUND">
                                                                                            <i class="helper"></i>Diterima
                                                                                    </label>
                                                                                </div>
                                                                                <div class="radio radio-inline">
                                                                                    <label>
                                                                                        <input class="js-revision" type="radio" name="radio" value="REVISION">
                                                                                            <i class="helper"></i>Revisi
                                                                                    </label>
                                                                                </div>
                                                                                <div class="radio radio-inline">
                                                                                    <label>
                                                                                        <input class="js-reject" type="radio" name="radio" value="REJECTED">
                                                                                            <i class="helper"></i>Ditolak
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="md-input-wrapper">
                                                                                <textarea class="js-budgetNotes" class="md-form-control md-static" cols="2" rows="4" name="rab" disabled></textarea>
                                                                                <label>Catatan RAB</label>
                                                                                <p id="dana"></p>
                                                                            </div>
                                                                            <div class="md-input-wrapper">
                                                                                <textarea class="js-contentNotes"  class="md-form-control md-static" cols="2" rows="4" name="konten" disabled></textarea>
                                                                                <label>Catatan Konten</label>
                                                                                <p id="dana"></p>
                                                                            </div>
                                                                            <div class="md-input-wrapper">Jumlah Dana yang Disetujui<br>
                                                                                <input class="js-budget" type="number" name="budget" min=0 disabled>
                                                                            </div>
                                                                            <div class="md-input-wrapper">Sumber Dana<br>
                                                                                <input class="js-source" type="text" name="source" disabled>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <div class="row" style="padding-top: 3pt">
                                                                            <div class="col-sm-12 text-center">
                                                                                <!-- SET status proposal -->
                                                                                <button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </form>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END MODAL REVIEW REVISION -->

                                                <?php 
                                                    $index++;
                                                    endforeach;
                                                ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>                        
                        <!-- Tabel Proposal end -->
                    </div>
                </div>
            </div>
            <!-- Row end -->
        </div>
        <!-- Main content end -->
    </div>
    <!-- Container-fluid end -->
</div>


<!-- Required Jqurey -->
    <script src="<?php echo base_url();?>assets/plugins/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/tether/dist/js/tether.min.js"></script>

    <script src="<?php echo base_url();?>assets/js/2.1.3jquery.min.js"></script> 
    <script src="<?php echo base_url();?>assets/js/jquery.media.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.dataTables.js"></script>
	
<script>    
    $(document).ready( function () {
        $('#previewNewProposal').DataTable();
    });

    $(".js-revision").click(function(){
        $(".js-source").prop('required', false);
        $(".js-source").prop('disabled', true);
        $(".js-budget").prop('required', false);
        $(".js-budget").prop('disabled', true);
        $(".js-budgetNotes").prop('required', true);
        $(".js-budgetNotes").prop('disabled', false);
        $(".js-contentNotes").prop('required', true);
        $(".js-contentNotes").prop('disabled', false);
    });

    $(".js-accept").click(function(){
        $(".js-contentNotes").prop('required', false);
        $(".js-contentNotes").prop('disabled', true);
        $(".js-budgetNotes").prop('required', false);
        $(".js-budgetNotes").prop('disabled', true);
        $(".js-budget").prop('required', true);
        $(".js-budget").prop('disabled', false);
        $(".js-source").prop('required', true);
        $(".js-source").prop('disabled', false);
    });

    $(".js-reject").click(function(){
        $(".js-contentNotes").prop('disabled', true);
        $(".js-budgetNotes").prop('disabled', true);
        $(".js-budget").prop('disabled', true);
        $(".js-source").prop('disabled', true);
    });

</script>


</body>
</html>