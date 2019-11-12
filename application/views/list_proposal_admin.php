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
                                                    <a class="nav-link" data-toggle="tab" href="#list-accepted" role="tab"><i class="icofont icofont-file-document "></i>Pencairan</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#proposal-review" role="tab"><i class="icofont icofont-file-document "></i>Revisi</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#list-proposal" role="tab"><i class="icofont icofont-file-document "></i>Proposal</a>
                                                    <div class="slide"></div>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <!-- Tab panes for href="#list-accepted" -->
                                                <div class="tab-pane active" id="list-accepted" role="tabpanel">
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
                                                                    <th>Sumber Dana</th>
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
                                                                        <!-- GET leader -->
                                                                        <td>Nussa</td>
                                                                        <!-- GET departement -->
                                                                        <td>Komputer</td>
                                                                        <td>
                                                                            <div class="label-main">
                                                                                <label class="label bg-success">Accepted</label>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="row">
                                                                                <div class="col-sm-12">
                                                                                    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#view-Modal-Accepted">
                                                                                        Detail
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <?php
                                                                };?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- Tabel Proposal end -->
                                                </div>
                                                <!-- Tab panes for href="#list-accepted End -->
                                                                                                
                                                <!-- Tab panes for href="#proposal-review" -->
                                                <div class="tab-pane" id="proposal-review" role="tabpanel">
                                                <!-- Proposal Document inputs starts -->
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

                                                    <!-- Review Revision -->
                                                    <div class="col-sm-12 table-responsive">
                                                        <table class="table table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Proposal</th>
                                                                    <th>Ketua Tim</th>
                                                                    <th>Jurusan</th>
                                                                    <th>Deadline</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                    for ($no = 1; $no <= 4; $no++){
                                                                        $due_date=NULL;?>
                                                                    <tr>
                                                                        <td><?php echo $no ?></td>
                                                                        <!-- GET name competition -->
                                                                        <td>Gemastik</td>
                                                                        <!-- GET leader -->
                                                                        <td>Nussa</td>
                                                                        <!-- GET departement -->
                                                                        <td>Komputer</td>
                                                                        <!-- GET DUE DATE
                                                                        $date1 = date_create($revision_note['due_date']); -->
                                                                        <td><?php 
                                                                            if($due_date===NULL ){?>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#view-Modal-Revision">
                                                                                            Input Deadline
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            <?php } else { ?>
                                                                                <div class="label-main">
                                                                                    <label class="label bg-danger">
                                                                                    <!-- php echo date_format($date1,"d M Y"); -->
                                                                                    Due Date : 20 Oct 2019
                                                                                    </label>
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
                                                <!-- Tab panes for href="#proposal-review" End -->

                                                <!-- Tab panes for href="#list-proposal" -->
                                                <div class="tab-pane" id="list-proposal" role="tabpanel">
                                                <!-- Proposal Document inputs starts -->
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

                                                    <!-- Review Revision -->
                                                    <div class="col-sm-12 table-responsive">
                                                        <table class="table table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Proposal</th>
                                                                    <th>Ketua Tim</th>
                                                                    <th>Jurusan</th>
                                                                    <th>Status</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                    for ($no = 1; $no <= 4; $no++){
                                                                        $proposal_status='revisi';?>
                                                                    <tr>
                                                                        <td><?php echo $no ?></td>
                                                                        <!-- GET name competition -->
                                                                        <td>Gemastik</td>
                                                                        <!-- GET leader -->
                                                                        <td>Nussa</td>
                                                                        <!-- GET departement -->
                                                                        <td>Komputer</td>
                                                                        <!-- GET status proposal  -->
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
                                                                    </tr>
                                                                    <?php
                                                                };?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <!-- Tab panes for href="#list-proposal" End -->
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


<!-- MODAL INPUT DEADLINE REVISION -->
<div class="modal fade modal-flex" id="view-Modal-Revision" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title">Deadline Revisi Proposal</h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="form-group">
                                <div class='input-group date' id='datetimepicker1'>
                                    <input type='text' class="form-control"/>
                                        <span class="input-group-addon bg-primary">
                                            <span class="icofont icofont-ui-calendar"></span>
                                        </span>
                                </div>
                                <!-- <div class="form-control-wrapper">
                                    <input type="text" id="date" class="form-control floating-label" placeholder="Date">
                                </div> -->
                            </div>
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
                <div class="row" style="padding-top: 3pt">
                    <div class="col-sm-12 text-center">
                        <button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

<!-- MODAL PROPOSAL ACCEPTED -->
<div class="modal fade modal-flex" id="view-Modal-Accepted" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title">Rincian Anggaran Kompetisi</h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    detail dana
                </div>
                <div class="row" style="padding-top: 3pt">
                    <div class="col-sm-12 text-center">
                        <button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>