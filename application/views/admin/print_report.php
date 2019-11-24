<div class="content-wrapper">
    <!-- Container-fluid starts -->
    <div class="container-fluid">
        <!-- Main content starts -->
        <div class="tab-list">
            <!-- Row Starts -->
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="main-header">
                        <h4>List Kompetisi</h4>
                        <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                            <li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/Admin"><i class="icofont icofont-home"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Kompetisi</a>
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
                                    <b>Cetak Laporan</b>
                                    <br>
                                    <br>

                                    <form enctype="multipart/form-data" method="POST" action="<?php echo base_url().'index.php/Admin/export'; ?>">                                                       
                                        <div class="row">
                                            <div class="form-row">
                                                <div class="form-group col-md-3">
                                                    <div class="form-control-wrapper">
                                                        <input type="date" name="regist_opendate" id="regist-date-start" class="form-control floating-label" placeholder="Start Date">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <div class="form-control-wrapper">
                                                        <input type="date" name="regist_closedate" id="regist-date-end" class="form-control floating-label" placeholder="End Date">
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Cetak</button>
                                        </div>
                                    </form>
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