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
                                                        if($proposal_status==='revision'){?>
                                                            <td>
                                                              <div class="label-main">
                                                                  <label class="label label-warning">revisi</label>
                                                              </div>
                                                            </td>
                                                            <td>
                                                              <label class="label bg-danger">10 Oct 2019</label>
                                                            </td>
                                                        <?php } else if($proposal_status==='pending') { ?>
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
                                                        <!-- <div class="row"> -->
                                                            <!-- <div class="col-sm-12"> -->
                                                                <a href="" id="previewPorposal" class="open-view-Modal-Preview btn btn-primary" data-toggle="modal" data-target="#view-Modal-Preview-Proposal"
                                                                data-proposal='{"id":"10","leader":"leader","member1":"member1","member2":"member2","member3":"member3","member4":"member4",
                                                                                "linkProposal":"linkProposal","budgetNotes":"budgetNotes","contentNotes":"contentNotes","deadline":"deadline"}'>
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
<div class="modal fade modal-flex openViewModalPreviewProposal" id="view-Modal-Preview-Proposal" tabindex="-1" role="dialog">
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
                        <iframe class="word" id="linkProposal" src="https://docs.google.com/gview?url=http://writing.engr.psu.edu/workbooks/formal_report_template.doc&embedded=true" frameborder="0"></iframe>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="teamMembers" class="form-control-label">Anggota Tim</label>
                            <!-- GET Team Member-->
                            <p id="leaderTeam">
                                <script>
                                    document.write($('#previewPorposal').data('proposal').leader);
                                </script>
                            </p>
                            <p id="member1">
                                <script>
                                    document.write($('#previewPorposal').data('proposal').member1);
                                </script>
                            </p>
                            <p id="member2">
                                <script>
                                    document.write($('#previewPorposal').data('proposal').member2);
                                </script>
                            </p>
                            <p id="member3">
                                <script>
                                    document.write($('#previewPorposal').data('proposal').member3);
                                </script>
                            </p>
                            <p id="member4">
                                <script>
                                    document.write($('#previewPorposal').data('proposal').member4);
                                </script>
                            </p>
                        </div>
                        <div class="md-input-wrapper">
                            <textarea id="budgetNotes" class="md-form-control md-static" cols="2" rows="4" readonly></textarea>
                            <label>Catatan RAB</label>
                        </div>
                        <div class="md-input-wrapper">
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


      <!-- Rickshaw Chart js -->
      <script src="<?php echo base_url();?>assets/plugins/d3/d3.js"></script>
      <script src="<?php echo base_url();?>assets/plugins/rickshaw/rickshaw.js"></script>

      <!-- Sparkline charts -->
      <script src="<?php echo base_url();?>assets/plugins/jquery-sparkline/dist/jquery.sparkline.js"></script>

      <!-- Counter js  -->
      <script src="<?php echo base_url();?>assets/plugins/waypoints/jquery.waypoints.min.js"></script>
      <script src="<?php echo base_url();?>assets/plugins/countdown/js/jquery.counterup.js"></script>

		<!-- custom js -->
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/main.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>assets/pages/dashboard.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>assets/pages/elements.js"></script>
		<script src="<?php echo base_url();?>assets/js/menu.min.js"></script>
		


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

		<!-- Date picker.js -->
		<script src="<?php echo base_url();?>assets/plugins/datepicker/js/moment-with-locales.min.js"></script>
		<script src="<?php echo base_url();?>assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

		<!-- Select 2 js -->
		<script src="<?php echo base_url();?>assets/plugins/select2/dist/js/select2.full.min.js"></script>

		<!-- Max-Length js -->
		<script src="<?php echo base_url();?>assets/plugins/bootstrap-maxlength/src/bootstrap-maxlength.js"></script>

		<!-- Multi Select js -->
		<script src="<?php echo base_url();?>assets/plugins/bootstrap-multiselect/dist/js/bootstrap-multiselect.js"></script>
		<script src="<?php echo base_url();?>assets/plugins/multiselect/js/jquery.multi-select.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/multi-select/js/jquery.quicksearch.js"></script>

		<!-- Tags js -->
		<script src="<?php echo base_url();?>assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.js"></script>

		<!-- Bootstrap Datepicker js -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/bootstrap-datepicker/js/bootstrap-datetimepicker.min.js"></script>

    <!-- bootstrap range picker -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

		<!-- color picker -->
		<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/spectrum/spectrum.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/jscolor/jscolor.js"></script>

		<!-- highlite js -->
		<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/syntaxhighlighter/scripts/shCore.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/syntaxhighlighter/scripts/shBrushJScript.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/syntaxhighlighter/scripts/shBrushXml.js"></script>
    <script type="text/javascript">SyntaxHighlighter.all();</script>

		<!-- custom js -->
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/main.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/pages/advance-form.js"></script>
		<script src="<?php echo base_url();?>assets/js/menu.min.js"></script>
		

  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>


<script> 
    $(document).ready( function () {
        $('#ongoingSubmissionTable').DataTable();
    });

    $(document).on("click", ".open-view-Modal-Preview", function () {
        var idProposal = $('#previewPorposal').data('proposal').id;
        $(".modal-body #idProposal").val( idProposal );
        var leaderTeam = $('#previewPorposal').data('proposal').leader;
        $(".modal-body #leaderTeam").val( leaderTeam );
        var member1 = $('#previewPorposal').data('proposal').member1;
        $(".modal-body #member1").val( member1 );
        var member2 = $('#previewPorposal').data('proposal').member2;
        $(".modal-body #member2").val( member2 );
        var member3 = $('#previewPorposal').data('proposal').member3;
        $(".modal-body #member3").val( member3 );
        var member4 = $('#previewPorposal').data('proposal').member4;
        $(".modal-body #member4").val( member4 );
        var linkProposal = $('#previewPorposal').data('proposal').linkProposal;
        $(".modal-body #linkProposal").val( linkProposal );
        var budgetNotes = $('#previewPorposal').data('proposal').budgetNotes;
        $(".modal-body #budgetNotes").val( budgetNotes );
        var contentNotes = $('#previewPorposal').data('proposal').contentNotes;
        $(".modal-body #contentNotes").val( contentNotes );
        var deadline = $('#previewPorposal').data('proposal').deadline;
        $(".modal-body #deadline").val( deadline );

        $('#view-Modal-Preview-Proposal').modal('show');
    });
</script>


</body>
</html>