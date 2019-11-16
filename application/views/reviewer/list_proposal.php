<div class="content-wrapper">
    <!-- Container-fluid starts -->
    <div class="container-fluid">
        <!-- Main content starts -->
        <div class="tab-list">
            <!-- Row Starts -->
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="main-header">
                        <h4>List Proposal</h4>
                        <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                            <li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/Reviewer/dashboard"><i class="icofont icofont-home"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Proposal</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- Row end -->

            <!-- Row start -->
            <div class="row">
                <div class="col-lg-12">
                <!-- Hover effect table starts -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-header-text">List Proposal Pengajuan Baru </h5>
                        </div>
                        <!-- Tabel Proposal -->
                        <div class="card-block">
                            <div class="row">
                                <div class="col-sm-12 table-responsive">
                                    <table class="table table-hover" id="reviewProposal">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Proposal</th>
                                            <th>Tanggal Upload</th>
                                            <th>Ketua Tim</th>
                                            <th>Jurusan</th>
                                            <th>Status</th>
                                            <th>Review</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                for ($no = 1; $no <= 4; $no++){
                                                    $proposal_status='pending';?>
                                                <tr>
                                                    <td><?php echo $no ?></td>
                                                    <!-- GET name competition -->
                                                    <td>Gemastik</td>

                                                    <!-- GET date upload -->
                                                    <td>20 November 2019</td>

                                                    <!-- GET leader -->
                                                    <td>Nussa</td>
                                                    <!-- GET departement -->
                                                    <td>Komputer</td>
                                                    <!-- GET status proposal -->
                                                    <td><?php 
                                                        if($proposal_status==='pending'){?>
                                                            <div class="label-main">
                                                                <label class="label label-default">Pending</label>
                                                            </div>
                                                        <?php } else if($proposal_status==='revisi') {
                                                            ?>
                                                            <div class="label-main">
                                                                <label class="label bg-warning">Revisi</label>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="label-main">
                                                                <label class="label bg-success">Accepted</label>
                                                            </div>
                                                        <?php } ?>
                                                    </td>
                                                    <!-- GET status proposal -->
                                                    <td><?php 
                                                        if($proposal_status==='accepted' || $proposal_status==='revisi'){?>
                                                            <button type="button" class="btn btn-disable disabled">Reviewed</button>
                                                        <?php } else { ?>
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <!-- data-id HERE -->
                                                                    <a href=""  id="proposalNew" class="open-view-Modal btn btn-primary"  
                                                                    data-proposal='{"id":"10","leader":"leader","member1":"member1","member2":"member2","member3":"member3","member4":"member4",
                                                                    "linkProposal":"linkProposal"}' 
                                                                    data-toggle="modal" data-target="#view-Modal">
                                                                        Review
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <?php
                                            };?>
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
<div class="modal fade modal-flex" id="view-Modal" tabindex="-1" role="dialog">
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
                    <!-- get ID -->
                    <!-- <input type="text" name="proposalId" id="idProposal" value=""/>
                    <input type="text" name="proposalId" id="leaderProposal" value=""/> -->
                    <!-- get ID -->
                    <div class="col-sm-9">
                        <!-- GET Link to review Proposal -->
                        <iframe class="word" id="linkProposal" src="https://docs.google.com/gview?url=http://writing.engr.psu.edu/workbooks/formal_report_template.doc&embedded=true" frameborder="0"></iframe>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                            <label for="teamMembers" class="form-control-label">Anggota Tim</label>
                            <!-- GET Team member -->
                            <p id="leaderTeam">
                                <script>
                                    document.write($('#proposalNew').data('proposal').leader);
                                </script>
                            </p>
                            <p id="member1">
                                <script>
                                    document.write($('#proposalNew').data('proposal').member1);
                                </script>
                            </p>
                            <p id="member2">
                                <script>
                                    document.write($('#proposalNew').data('proposal').member2);
                                </script>
                            </p>
                            <p id="member3">
                                <script>
                                    document.write($('#proposalNew').data('proposal').member3);
                                </script>
                            </p>
                            <p id="member4">
                                <script>
                                    document.write($('#proposalNew').data('proposal').member4);
                                </script>
                            </p>

                            <!-- <select multiple class="form-control multiple-select" id="teamMembers">
                                <option>Ketua</option>
                                <option>Anggota Tim 1</option>
                                <option>Anggota Tim 2</option>
                                <option>Anggota Tim 3</option>
                                <option>Anggota Tim 4</option>
                            </select> -->
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
                            <form>
                                <div class="radio radio-inline">
                                    <label>
                                        <input type="radio" name="radio">
                                            <i class="helper"></i>Diterima
                                    </label>
                                </div>
                                <div class="radio radio-inline">
                                    <label>
                                        <input type="radio" name="radio">
                                            <i class="helper"></i>Revisi
                                    </label>
                                </div>
                                <div class="radio radio-inline">
                                    <label>
                                        <input type="radio" name="radio">
                                            <i class="helper"></i>Ditolak
                                    </label>
                                </div>
                            </form>
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


<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>

<script>
    $(document).ready( function () {
        $('#reviewProposal').DataTable();
    });

    $(document).on("click", ".open-view-Modal", function () {
        var idProposal = $('#proposalNew').data('proposal').id;
        $(".modal-body #idProposal").val( idProposal );
        var leaderTeam = $('#proposalNew').data('proposal').leader;
        $(".modal-body #leaderTeam").val( leaderTeam );
        var member1 = $('#proposalNew').data('proposal').member1;
        $(".modal-body #member1").val( member1 );
        var member2 = $('#proposalNew').data('proposal').member2;
        $(".modal-body #member2").val( member2 );
        var member3 = $('#proposalNew').data('proposal').member3;
        $(".modal-body #member3").val( member3 );
        var member4 = $('#proposalNew').data('proposal').member4;
        $(".modal-body #member4").val( member4 );

        $('#view-Modal').modal('show');
    });

</script>