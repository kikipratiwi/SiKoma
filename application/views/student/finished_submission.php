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
                                            <th>#</th>
                                            <th>Proposal</th>
                                            <th>Tahun</th>
                                            <th>Status</th>
                                            <th>Preview</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                for ($no = 1; $no <= 4; $no++){
                                                    $proposal_status='accepted';?>
                                                <tr>
                                                    <td><?php echo $no ?></td>
                                                    <!-- GET name competition -->
                                                    <td>Gemastik</td>
                                                    <!-- GET year of competition -->
                                                    <td>2019</td>
                                                    <!-- GET status proposal -->
                                                    <td><?php 
                                                        if($proposal_status==='accepted'){?>
                                                            <div class="label-main">
                                                                <label class="label label-success">disetujui</label>
                                                            </div>
                                                        <?php } else if($proposal_status==='rejected') {
                                                            ?>
                                                            <div class="label-main">
                                                                <label class="label bg-warning">ditolak</label>
                                                            </div>
                                                        <?php } ?>
                                                    </td>
                                                    <!-- GET status proposal -->
                                                    <td>
                                                        <!-- <div class="row"> -->
                                                            <!-- <div class="col-sm-12"> -->
                                                                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#view-Modal-Preview-Proposal">
                                                                    Preview
                                                                </a>
                                                            <!-- </div> -->
                                                        <!-- </div> -->
                                                    </td>
                                                </tr>
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

<!-- MODAL PREVIEW PROPOSAL -->
<div class="modal fade modal-flex" id="view-Modal-Preview-Proposal" tabindex="-1" role="dialog">
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
                        <iframe class="word" src="https://docs.google.com/gview?url=http://writing.engr.psu.edu/workbooks/formal_report_template.doc&embedded=true" frameborder="0"></iframe>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="teamMembers" class="form-control-label">Anggota Tim</label>
                            <!-- GET Team Member-->
                            <select multiple class="form-control multiple-select" size="10" id="teamMembers">
                                <option>Ketua</option>
                                <option>Anggota Tim 1</option>
                                <option>Anggota Tim 2</option>
                                <option>Anggota Tim 3</option>
                                <option>Anggota Tim 4</option>
                            </select>
                        </div>
                        <div class="md-input-wrapper">
                            <textarea class="md-form-control md-static" cols="2" rows="1" readonly></textarea>
                            <label>Jumlah dana yang disetujui</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <!-- download proposal -->
                        <button type="button" class="btn btn-primary waves-effect waves-light">Download</button>
                </div>
                
            </div>
        </div>
    </div>
</div>



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

		<!-- custom js -->
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/main.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/pages/advance-form.js"></script>
		<script src="<?php echo base_url();?>assets/js/menu.min.js"></script>
		
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>


<script> 
    $(document).ready( function () {
        $('#finishedSubmissionTable').DataTable();
    } );
</script>


</body>
</html>