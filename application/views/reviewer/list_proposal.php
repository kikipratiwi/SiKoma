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
                                            <th>Jurusan</th>
                                            <th>Review</th>
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
                                                    <!-- GET date upload -->
                                                    <?php
                                                        // $date1 = date_create($competition['regist_opendate']);
                                                        // $date2 = date_create($competition['regist_closedate']);
                                                        ?>
                                                    <!-- <td>echo date_format($date1,"d M Y")</td> -->
                                                    <td>20 November 2019</td>

                                                    <!-- GET leader -->
                                                    <td>Nussa</td>

                                                    <!-- GET departement -->
                                                    <td>Komputer</td>
                                                    
                                                    <!-- GET status proposal -->
                                                    <td>
                                                        <a href="" id="previewPorposal" class="open-view-Modal-Preview btn btn-primary" data-toggle="modal" data-target="#view-Modal-Preview-Proposal">
                                                            Review
                                                        </a>
                                                    </td>
                                                </tr>
                                                
                                                <!-- MODAL REVIEW NEW SUBMISSION -->
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
                                                                        <a class="media" id="propose" href="<?php echo base_url();?>data/<?php?>">
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <div class="form-group">
                                                                                <label for="teamMembers" class="form-control-label">Anggota Tim</label>
                                                                                <!-- GET Team member -->
                                                                                <p id="leaderTeam">
                                                                                    <?php  ?>
                                                                                </p>
                                                                                <p id="member1">
                                                                                    <?php  ?>
                                                                                </p>
                                                                                <p id="member2">
                                                                                    <?php ?>
                                                                                </p>
                                                                                <p id="member3">
                                                                                    <?php  ?>
                                                                                </p>
                                                                                <p id="member4">
                                                                                    <?php ?>
                                                                                </p>
                                                                            </div>
                                                                            <div class="md-input-wrapper">
                                                                                <textarea id="leaderTeam" class="md-form-control md-static" cols="2" rows="4"></textarea>
                                                                                <label>Catatan RAB</label>
                                                                            </div>
                                                                            <div class="md-input-wrapper">
                                                                                <textarea id="contentNotes"  class="md-form-control md-static" cols="2" rows="4"></textarea>
                                                                                <label>Catatan Konten</label>
                                                                            </div>
                                                                            <label class="bold">Status</label>
                                                                            <div class="form-radio">
                                                                                <form method="POST">
                                                                                    <div class="radio radio-inline">
                                                                                        <label>
                                                                                            <input type="radio" name="radio">
                                                                                                <i class="helper"></i>diterima
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="radio radio-inline">
                                                                                        <label>
                                                                                            <input type="radio" name="radio">
                                                                                                <i class="helper"></i>revisi
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="radio radio-inline">
                                                                                        <label>
                                                                                            <input type="radio" name="radio">
                                                                                                <i class="helper"></i>ditolak
                                                                                        </label>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row" style="padding-top: 3pt">
                                                                    <div class="col-sm-12 text-center">
                                                                        <!-- SET status proposal -->
                                                                        <button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
                                                                    </div>
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
        $('#previewNewProposal').DataTable();
    });

    $(function () {
        $('.media').media({width: 950, height:430});
    });
</script>


</body>
</html>