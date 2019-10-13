<div class="content-wrapper">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <!-- Main content starts -->
            <div class="tab-list">
                <!-- Row Starts -->
                <div class="row">
                    <div class="col-lg-12 p-0">
                        <div class="main-header">
                            <h4>Pengajuan Proposal</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="student.html"><i class="icofont icofont-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Proposal</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Pengajuan</a>
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
                                    <div class="card-header"><h5 class="card-header-text">Form Pengajuan Proposal</h5></div>
                                    <div class="card-block tab-icon">
                                        <!-- Row start -->
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <!-- <h6 class="sub-title">Tab With Icon</h6> -->

                                                <!-- Nav tabs -->
                                                <ul class="nav nav-tabs md-tabs " role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="tab" href="#team-profile" role="tab"><i class="icofont icofont-ui-user"></i>Profil Tim</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#proposal-document" role="tab"><i class="icofont icofont-file-document "></i>Dokumen Proposal</a>
                                                        <div class="slide"></div>
                                                    </li>

                                                </ul>
                                                <!-- Tab panes -->
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="team-profile" role="tabpanel">
                                                        <!-- Team Profile inputs starts -->
                                                        <form>
                                                            <div class="form-group row">
                                                                <label for="coach" class="col-xs-2 col-form-label form-control-label">Pembimbing</label>
                                                                <div class="col-sm-10">
                                                                    <input class="form-control" type="text" name="coach" placeholder="NIDN Pembimbing" value="" id="coach">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="leader" class="col-xs-2 col-form-label form-control-label">Ketua Tim</label>
                                                                <div class="col-sm-10">
                                                                    <input class="form-control" type="text" name="leader" placeholder="NIM Ketua Tim" value="" id="leader">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="member-1" class="col-xs-2 col-form-label form-control-label">Anggota 1</label>
                                                                <div class="col-sm-10">
                                                                    <input class="form-control" type="text" name="member-1" placeholder="NIM Anggota 1" value="" id="member-1">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="member-2" class="col-xs-2 col-form-label form-control-label">Anggota 2</label>
                                                                <div class="col-sm-10">
                                                                    <input class="form-control" type="text" name="member-2" placeholder="NIM Anggota 2" value="" id="member-2">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="member31" class="col-xs-2 col-form-label form-control-label">Anggota 3</label>
                                                                <div class="col-sm-10">
                                                                    <input class="form-control" type="text" name="member-3" placeholder="NIM Anggota 3" value="" id="member-3">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="member-4" class="col-xs-2 col-form-label form-control-label">Anggota 4</label>
                                                                <div class="col-sm-10">
                                                                    <input class="form-control" type="text" name="member-4" placeholder="NIM Anggota 4" value="" id="member-4">
                                                                </div>
                                                            </div>
                                                            <button type="button" class="btn btn-primary waves-effect waves-light" name="next" id="next" >Berikutnya </button>
                                                        </form>
                                                        <!-- Team Profile inputs ends -->
                                                    </div>

                                                    <div class="tab-pane" id="proposal-document" role="tabpanel">
                                                        <!-- Proposal Document inputs starts -->
                                                        <form>
                                                            <div class="form-group row">
                                                                <label for="competition" class="col-xs-2 col-form-label form-control-label">Kompetisi</label>
                                                                <div class="col-sm-10">
                                                                    <input class="form-control" type="text" name="competition" placeholder="Nama Kompetisi" value="" id="competition">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="budget" class="col-xs-2 col-form-label form-control-label">Dana yang diajukan</label>
                                                                <div class="col-sm-10">
                                                                    <input class="form-control" type="number" name="budget" placeholder="Jumlah Dana" value="" id="budget">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="proposal" class="col-xs-2 col-form-label form-control-label">Proposal</label>
                                                                <div class="md-group-add-on">
                                                                    <span class="md-add-on-file">
                                                                        <button class="btn btn-primary" style="margin-left: 15px;border-radius: .25rem;padding: .5rem .75rem;">Browse</button>
                                                                    </span>
                                                                    <div class="md-input-file">
                                                                        <input type="file" class="" name="proposal" />
                                                                        <input type="text" class="md-form-control md-form-file" style="margin-right: 18px;float: right;width: 97%;">
                                                                        <label class="md-label-file" style="padding-left: 5px; color: rgb(155, 156, 169);">doc Proposal</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button type="button" class="btn btn-success waves-effect waves-light" name="submit" id="submit" >Submit</button>
                                                        </form>
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
</div>