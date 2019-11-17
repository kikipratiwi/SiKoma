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
                                                    <td>Nussa</td>

                                                    <!-- GET departement -->
                                                    <td><?php echo $pr->department->name ?></td>
                                                    <td>
                                                        <a href="" id="previewPorposal" class="open-view-Modal-Preview btn btn-primary" data-toggle="modal" data-target="#view-Modal-Preview-Proposal">
                                                            Review
                                                        </a>
                                                    </td>
                                                </tr>
                                                
                                                <!-- MODAL REVIEW REVISION -->
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
                                                                                <?php ?>
                                                                                <textarea id="leaderTeam" class="md-form-control md-static" cols="2" rows="4"></textarea>
                                                                                <label>Catatan RAB</label>
                                                                            </div>
                                                                            <div class="md-input-wrapper">
                                                                                <?php ?>
                                                                                <textarea id="contentNotes" class="md-form-control md-static" cols="2" rows="4"></textarea>
                                                                                <label>Catatan Konten</label>
                                                                            </div>
                                                                            <label>Rincian Dana</label>
                                                                            <div class="md-input-wrapper">
                                                                                Jumlah Dana<br>
                                                                                <input type="text" name="budget">
                                                                            </div>
                                                                            <div class="md-input-wrapper">
                                                                                Sumber Dana<br>
                                                                                <input type="text" name="budget">
                                                                            </div>
                                                                            <label class="bold">Status</label>
                                                                            <div class="form-radio">
                                                                                <form method="POST">
                                                                                    <div class="radio radio-inline">
                                                                                        <label>
                                                                                            <input type="radio" name="radio">
                                                                                                <i class="helper"></i>revisi
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="radio radio-inline">
                                                                                        <label>
                                                                                            <input type="radio" name="radio">
                                                                                                <i class="helper"></i>diterima
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
                                                                <div class="row" style="padding-top: 3px margin-bottom: 3px">
                                                                    <div class="col-sm-12 text-center" style="padding-top: 3px margin-bottom: 3px">
                                                                        <!-- SET status proposal -->
                                                                        <button type="submit" style="padding-top: 3px margin-bottom: 3px" class="btn btn-success waves-effect waves-light">Submit</button>
                                                                    </div>
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

<!-- MODAL REVIEW NEW SUBMISSION -->
<!-- MODAL REVIEW -->
<!-- Required Jqurey -->
    <script src="<?php echo base_url();?>assets/plugins/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/tether/dist/js/tether.min.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="http://malsup.github.com/jquery.media.js"></script>

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