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
                    <!-- Row start -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <!-- Radio-Button start -->
                                <div class="card-block tab-icon">
                                    <!-- Row start -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs md-tabs " role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#list-proposal" role="tab"><i class="icofont icofont-file-document "></i>Proposal</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#proposal-review" role="tab"><i class="icofont icofont-file-document "></i>Revisi</a>
                                                    <div class="slide"></div>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <!-- Tab panes for href="#list-proposal" -->
                                                <div class="tab-pane active" id="list-proposal" role="tabpanel">
                                                    <!-- List starts -->
                                                    <form class="form-inline">
                                                        <div class="form-group col-xs-3">
                                                            <label class="sr-only form-control-label" for="exampleInputEmail3">Search</label>
                                                                <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Search">
                                                        </div>        
                                                        <div class="form-check col-xs-2">
                                                            <label for="optionsRadios1" class="form-check-label">
                                                                <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" valu6="option1" checked>
                                                                Proposal
                                                            </label>
                                                        </div>
                                                        <div class="form-check col-xs-2">
                                                            <label for="optionsRadios1" class="form-check-label">
                                                                <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" valu6="option1" checked>
                                                                    Ketua Tim
                                                            </label>
                                                        </div>
                                                        <div class="form-check col-xs-2">
                                                            <label for="optionsRadios1" class="form-check-label">
                                                                <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" valu6="option1" checked>
                                                                    Jurusan
                                                            </label>
                                                        </div>
                                                    </form>
                                                    <br><br>
                                                    <!-- Tabel Proposal -->
                                                    <div class="col-sm-12 table-responsive">
                                                        <table class="table table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Proposal</th>
                                                                    <th>Ketua Tim</th>
                                                                    <th>Jurusan</th>
                                                                    <th>Status</th>
                                                                    <th>View</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                    for ($no = 1; $no <= 4; $no++){
                                                                        $proposal_status='revisi';?>
                                                                    <tr>
                                                                        <td><?php echo $no ?></td>
                                                                        <td>Gemastik</td>
                                                                        <td>Nussa</td>
                                                                        <td>Komputer</td>
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
                                                                        <td><?php 
                                                                            if($proposal_status==='accepted'){?>
                                                                                <button type="button" class="btn btn-disable disabled">Accepted</button>
                                                                            <?php } else { ?>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#view-Modal">
                                                                                            View
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
                                                    <!-- Tabel Proposal end -->
                                                </div>
                                                <!-- Tab panes for href="#list-proposal End -->
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row end -->
                </div>
            </div>
            <!-- Row end -->
        </div>
        <!-- Main content end -->
    </div>
    <!-- Container-fluid end -->
</div>


<!-- MODAL VIEW MENTOR -->
<div class="modal fade modal-flex" id="view-Modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title">Review Proposal yang Dibimbing</h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-9">
                        <!-- GET Link to review Proposal -->
                        <iframe class="word" src="https://docs.google.com/gview?url=http://writing.engr.psu.edu/workbooks/formal_report_template.doc&embedded=true" frameborder="0"></iframe>
                    </div>
                    <div class="col-sm-3">
                        <?php if($proposal_status==='revisi'){
                            
                            ?>
                            <div class="row">
                            <div class="col-sm-7 well well-sm">
                                <!-- GET DUE DATE
                                $date1 = date_create($revision_note['due_date']); -->
                                <div class="label-main">
                                    <label class="label bg-danger">Deadline : DD-MON-YEAR</label>
                                </div>
                            </div>
                        </div>
                            <?php
                            }?>
                        <div class="form-group">
                            <label for="teamMembers" class="form-control-label">Team Member</label>
                            <!-- GET Team Member -->
                            <select multiple class="form-control multiple-select" id="teamMembers">
                                <option>Ketua</option>
                                <option>Anggota Tim 1</option>
                                <option>Anggota Tim 2</option>
                                <option>Anggota Tim 3</option>
                                <option>Anggota Tim 4</option>
                            </select>
                        </div>
                        <div class="md-input-wrapper">
                            <label>Catatan RAB *get data*</label>
                            <!-- GET NOTES echo $proposal['notes']; -->
                            <textarea class="md-form-control md-static" cols="2" rows="4"></textarea>
                        </div>
                        <div class="md-input-wrapper">
                            <label>Catatan Konten *get data*</label>
                            <!-- GET NOTES echo $proposal['notes']; -->
                            <textarea class="md-form-control md-static" cols="2" rows="4"></textarea>
                        </div>
                    </div>
                </div>                    
            </div>
        </div>
    </div>
</div>
