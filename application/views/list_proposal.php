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
                                                <!-- <h6 class="sub-title">Tab With Icon</h6> -->

                                                <!-- Nav tabs -->
                                                <ul class="nav nav-tabs md-tabs " role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#list-proposal" role="tab"><i class="icofont icofont-file-document "></i>List Proposal</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#proposal-review" role="tab"><i class="icofont icofont-file-document "></i>Review</a>
                                                        <div class="slide"></div>
                                                    </li>

                                                </ul>
                                                <!-- Tab panes -->
                                                <div class="tab-content">
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
    <br>
    <br>
    <!-- <div class="row"> -->
    <div class="col-sm-12 table-responsive">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Proposal</th>
                <th>Ketua Tim</th>
                <th>Jurusan</th>
                <th>Status</th>
                <th>Review</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>KMIPN</td>
                <td>Budi</td>
                <td>Komputer</td>
                <td>
                    <div class="label-main">
                        <label class="label label-default">Pending</label>
                    </div>
                </td>
                <td>
                    <div class="row">
                        <div class="col-sm-12">
                            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#view-Modal">
                                Review
                            </a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Compfest</td>
                <td>Antton</td>
                <td>Komputer</td>
                <td>
                    <div class="label-main">
                        <label class="label bg-warning">Revision</label>
                    </div>
                </td>
                <td>
                    <button type="button" class="btn btn-disable disabled">Reviewed</button>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Mobil Listrik</td>
                <td>Otto</td>
                <td>Elektro</td>
                <td>
                    <div class="label-main">
                        <label class="label bg-success">Accepted</label>
                    </div>
                </td>
                <td>
                    <button type="button" class="btn btn-disable disabled">Reviewed</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
        <!-- </div> -->
                                                        <!-- List ends -->
                                                    </div>

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
    <br>
    <br>
    <!-- <div class="row"> -->
    <!-- Review Revision -->
    <div class="col-sm-12 table-responsive">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Proposal</th>
                <th>Ketua Tim</th>
                <th>Jurusan</th>
                <th>Status</th>
                <th>Review</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>KMIPN</td>
                <td>Budi</td>
                <td>Komputer</td>
                <td>
                    <div class="label-main">
                        <label class="label bg-danger">Due Date : 10 Oct 2019</label>
                    </div>
                </td>
                <td>
                    <div class="row">
                        <div class="col-sm-12">
                            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#view-Modal-Revision">
                                Review
                            </a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Compfest</td>
                <td>Antton</td>
                <td>Komputer</td>
                <td>
                    <div class="label-main">
                        <label class="label bg-danger">Due Date : 20 Oct 2019</label>
                    </div>
                </td>
                <td>
                    <div class="row">
                        <div class="col-sm-12">
                            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#view-Modal-Revision">
                                Review
                            </a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Mobil Listrik</td>
                <td>Otto</td>
                <td>Elektro</td>
                <td>
                    <div class="label-main">
                        <label class="label bg-success">Accepted</label>
                    </div>
                </td>
                <td>
                    <button type="button" class="btn btn-disable disabled">Reviewed</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
                                                        <!-- Proposal Document inputs ends -->
                                                    </div>
                                                </div>
                                                <!-- Tab panes end -->
                                            </div>
                                        </div>
                                        <!-- Row end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Row end -->
                    </div>
                </div>
                <!-- loader ends -->
            </div>
            <!-- Row end -->

        </div>
        <!-- Container-fluid ends -->
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
                        <div class="col-sm-8">
                            <iframe class="word" src="https://docs.google.com/gview?url=http://ieee802.org/secmail/docIZSEwEqHFr.doc&embedded=true" frameborder="0"></iframe>
                            <!-- <div class="text-center well well-sm">
                                <button type="button" class="btn btn-inverse-primary waves-effect waves-light text-uppercase m-r-30">
                                    Download
                                </button>
                            </div> -->
                        </div>
                        <div class="col-sm-4">
                        <div class="form-group">
                                <label for="teamMembers" class="form-control-label">Team Member</label>
                                <select multiple class="form-control multiple-select" id="teamMembers">
                                    <option>Leader</option>
                                    <option>Team Member 1</option>
                                    <option>Team Member 2</option>
                                    <option>Team Member 3</option>
                                    <option>Team Member 4</option>
                                </select>
                            </div>
                            <div class="md-input-wrapper">
                                <textarea class="md-form-control md-static" cols="2" rows="4"></textarea>
                                <label>Budget notes</label>
                            </div>
                            <div class="md-input-wrapper">
                                <textarea class="md-form-control md-static" cols="2" rows="4"></textarea>
                                <label>Content notes</label>
                            </div>
                            <label class="bold">Status</label>
                            <div class="form-radio">
                                <form>
                                    <div class="radio radio-inline">
                                        <label>
                                            <input type="radio" name="radio">
                                                <i class="helper"></i>Accepted
                                        </label>
                                    </div>
                                    <div class="radio radio-inline">
                                        <label>
                                            <input type="radio" name="radio">
                                                <i class="helper"></i>Revision
                                        </label>
                                    </div>
                                    <div class="radio radio-inline">
                                        <label>
                                            <input type="radio" name="radio">
                                                <i class="helper"></i>Rejected
                                        </label>
                                    </div>
                                </form>
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

    <!-- MODAL REVIEW REVISION -->
    <div class="modal fade modal-flex" id="view-Modal-Revision" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="modal-title">Review Revisied Proposal</h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-9">
                            <iframe class="word" src="https://docs.google.com/gview?url=http://ieee802.org/secmail/docIZSEwEqHFr.doc&embedded=true" frameborder="0"></iframe>
                            <!-- <div class="text-center">
                                <button type="button" class="btn btn-inverse-primary waves-effect waves-light text-uppercase m-r-30">
                                    Download
                                </button>
                            </div> -->
                        </div>
                        <div class="col-sm-3">
                            <div class="row">
                                <div class="col-sm-7 well well-sm">
                                    <div class="label-main">
                                        <label class="label bg-danger">Due Date : 10 Oct 2019</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="teamMembers" class="form-control-label">Team Member</label>
                                <select multiple class="form-control multiple-select" id="teamMembers">
                                    <option>Leader</option>
                                    <option>Team Member 1</option>
                                    <option>Team Member 2</option>
                                    <option>Team Member 3</option>
                                    <option>Team Member 4</option>
                                </select>
                            </div>
                            <div class="md-input-wrapper">
                                <textarea class="md-form-control md-static" cols="2" rows="4"></textarea>
                                <label>Budget notes *get data*</label>
                            </div>
                            <div class="md-input-wrapper">
                                <textarea class="md-form-control md-static" cols="2" rows="4"></textarea>
                                <label>Content notes *get data*</label>
                            </div>
                            <label class="bold">Status</label>
                            <div class="form-radio">
                                <form>
                                    <div class="radio radio-inline">
                                        <label>
                                            <input type="radio" name="radio">
                                                <i class="helper"></i>Accepted
                                        </label>
                                    </div>
                                    <div class="radio radio-inline">
                                        <label>
                                            <input type="radio" name="radio">
                                                <i class="helper"></i>Rejected
                                        </label>
                                    </div>
                                </form>
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