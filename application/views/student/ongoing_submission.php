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
                                            <th>Preview</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                for ($no = 1; $no <= 4; $no++){
                                                    $proposal_status='revision';?>
                                                <tr>
                                                    <td><?php echo $no ?></td>
                                                    <!-- GET name competition -->
                                                    <td>Gemastik</td>
                                                    <!-- GET status proposal -->
                                                    <?php 
                                                        if($proposal_status==='REVISION'){?>
                                                            <td>
                                                                <div class="label-main">
                                                                    <label class="label label-warning">revisi</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <!-- echo date_format($date1,"d M Y") -->
                                                                <label class="label bg-danger">10 Oct 2019</label>
                                                            </td>
                                                        <?php } else if($proposal_status==='PENDING') { ?>
                                                            <td>
                                                                <div class="label-main">
                                                                    <label class="label bg-secondary">pending</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <p>-</p>
                                                            </td>
                                                        <?php } ?>
                                                    <!-- GET status proposal -->
                                                    <td>
                                                        <a href="" id="previewPorposal" class="open-view-Modal-Preview btn btn-primary" data-toggle="modal" data-target="#view-Modal-Preview-Proposal">
                                                            Preview
                                                        </a>
                                                    </td>
                                                </tr>
                                                
                                                <!-- MODAL PREVIEW PROPOSAL -->
                                                <div class="modal fade modal-flex" id="view-Modal-Preview-Proposal" tabindex="-1" role="dialog">
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
                                                                        <a class="media" href="<?php echo base_url();?>assets/1.pdf"></a>
                                                                        <!-- <iframe class="word" id="linkProposal" src="https://docs.google.com/gview?url=http://writing.engr.psu.edu/workbooks/formal_report_template.doc&embedded=true" frameborder="0"></iframe> -->
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <div class="form-group">
                                                                            <label for="teamMembers" class="form-control-label">Anggota Tim</label>
                                                                            <!-- GET Team Member-->
                                                                            <p id="leaderTeam">
                                                                                <?php  ?>
                                                                            </p>
                                                                            <p id="member1">
                                                                                <?php  ?>
                                                                            </p>
                                                                            <p id="member2">
                                                                                <?php  ?>
                                                                            </p>
                                                                            <p id="member3">
                                                                                <?php  ?>
                                                                            </p>
                                                                            <p id="member4">
                                                                                <?php  ?>
                                                                            </p>
                                                                        </div>
                                                                        <div class="md-input-wrapper">
                                                                            <?php  ?>
                                                                            <textarea id="budgetNotes" class="md-form-control md-static" cols="2" rows="4" readonly></textarea>
                                                                            <label>Catatan RAB</label>
                                                                        </div>
                                                                        <div class="md-input-wrapper">
                                                                            <?php  ?>
                                                                            <textarea id="contentNotes" class="md-form-control md-static" cols="2" rows="4" readonly></textarea>
                                                                            <label>Catatan Konten</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <!-- download proposal -->
                                                                        <button type="button" class="btn btn-primary waves-effect waves-light">Download Proposal</button>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <?php
                                            };?>
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
        $('#ongoingSubmissionTable').DataTable();
    });

    $(function () {
        $('.media').media({width: 950, height:430});
    });
</script>


</body>
</html>