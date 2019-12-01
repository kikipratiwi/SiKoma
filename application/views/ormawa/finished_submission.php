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
                            <li class="breadcrumb-item"><a href="basic-table.html">List Pengajuan (finished)</a>
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
                            <h5 class="card-header-text">List Pengajuan (finished)</h5>
                        </div>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-sm-12 table-responsive">
                                    <table class="table table-hover" id="finishedSubmissionTable">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Proposal</th>
                                            <th>Tahun</th>
                                            <th>Status</th>                                            
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
                                                    <!-- GET year of competition -->
                                                    <td><?php echo $pr->competition->year ?></td>
                                                    <!-- GET status proposal -->
                                                    <td><?php 
                                                        if($pr->status==='DONE'){?>
                                                            <div class="label-main">
                                                                <label class="label label-success">Selesai</label>
                                                            </div>
                                                        <?php } else if($pr->proposal->status==='REJECTED') {
                                                            ?>
                                                            <div class="label-main">
                                                                <label class="label bg-warning">Ditolak</label>
                                                            </div>
                                                        <?php } ?>
                                                    </td>
                                                    
                                                    <td>
                                                        <a href="" id="finishedPorposal" class="btn btn-primary" data-toggle="modal" data-target="#view-Modal-Finished-Proposal<?php echo $pr->id ?> ">
                                                            Preview
                                                        </a>
                                                    </td>
                                                </tr>
                                                <!-- MODAL PREVIEW PROPOSAL -->
                                                <div class="modal fade modal-flex" id="view-Modal-Finished-Proposal<?php echo $pr->id ?>" tabindex="-1" role="dialog">
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
                                                                        <!-- GET Link to review Proposal File -->
                                                                        <a class="media" id="propose" href="<?php echo base_url();?>data/proposals/<?php echo $pr->proposal ?>"></a>
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
                                                                            <!-- <p id="member1">
                                                                                <?php echo $pr->team[0]->member1_id ?>
                                                                            </p>
                                                                            <p id="member2">
                                                                                <?php echo $pr->team[0]->member2_id ?>
                                                                            </p>
                                                                            <p id="member3">
                                                                                <?php echo $pr->team[0]->member3_id ?>
                                                                            </p>
                                                                            <p id="member4">
                                                                                <?php echo $pr->team[0]->member4_id ?>
                                                                             --></p>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="dana" class="form-control-label">Jumlah dana yang disetujui</label>
                                                                            <!-- GET Team Member-->
                                                                            <p id="dana">
                                                                                <?php $this->load->helpers('money_format'); echo rupiah($pr->realisazion_budget); ?>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
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

    <!-- Required Jqurey -->
    <script src="<?php echo base_url();?>assets/js/2.1.3jquery.min.js"></script> 
    <script src="<?php echo base_url();?>assets/js/jquery.media.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.dataTables.js"></script>

<script> 
    $(document).ready( function () {
        $('#finishedSubmissionTable').DataTable();
    } );

    $(function () {
        $('.media').media({width: 950, height:430});
    });

    function test() {

    }

</script>

</body>
</html>