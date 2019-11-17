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
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <button type="button" id="add-competition" class="btn btn-primary" 
                                                                        style="margin-left: 15px;border-radius: .25rem;padding: .5rem .75rem;" 
                                                                        data-toggle="modal" data-target="#add-competition-modal-form" >+ Data Kompetisi</button>
                                            <!-- Tabel Proposal -->
                                            <div class="col-sm-12 table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Kompetisi</th>
                                                            <th>Lokasi</th>
                                                            <th>Registrasi</th>
                                                            <th>Event</th>
                                                            <th>Edit</th>
                                                            <th>Delete</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $no = 1; 
                                                            foreach($competitions as $competition){?>
                                                            <tr>
                                                                <td><?php echo $no ?></td>
                                                                <td><?php echo $competition['name']; ?></td>
                                                                <td><?php echo $competition['location']; ?></td>
                                                                <?php
                                                                    $date1 = date_create($competition['regist_opendate']);
                                                                    $date2 = date_create($competition['regist_closedate']);
                                                                ?>
                                                                <td><?php echo date_format($date1,"d M Y")." - ". date_format($date2,"d M Y"); ?></td>
                                                                <?php
                                                                    $date1 = date_create($competition['event_startdate']);
                                                                    $date2 = date_create($competition['event_enddate']);
                                                                ?>
                                                                <td><?php echo date_format($date1,"d M Y")." - ". date_format($date2,"d M Y");?></td>
                                                                <td>
                                                                    <button type="button" class="btn btn-primary waves-effect waves-light">Edit</button>
                                                                </td>
                                                                <td>
                                                                    <button type="button" class="btn btn-danger waves-effect waves-light">Delete</button>
                                                                </td>
                                                            </tr>
                                                            
                                                            <?php
                                                            $no++;
                                                            }; ?>
                                                    </tbody>
                                                </table>
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

<!-- Add Competition Modal -->
<div class="modal fade modal-flex" id="add-competition-modal-form" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            <h5 class="modal-title">Tambah Data Kompetisi</h5>
        </div>

        <form method="POST" action="<?php echo base_url().'index.php/Student/act_add_competition'; ?>">
            <div class="modal-body">
                    <div class="form-group col-md-12">
                        <label for="competitionName" class="block form-control-label">Nama Kompetisi</label>
                        <input type="text" class="form-control" name="name" placeholder="ex: Gemastik">
                    </div>
                    
                    <div class="form-group col-md-12">
                        <label for="institusion" class="block form-control-label">Institusi Penyelenggara</label>
                        <input type="text" class="form-control" name="institusion" placeholder="ex: Universitas Gajah Mada">
                    </div>
                
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="location" class="block form-control-label">Lokasi</label>
                            <input type="text" class="form-control" name="location" placeholder="Lokasi Kompetisi">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="level" class="block form-control-label">Level Kompetisi</label>
                            <select class="form-control " name="level">
                                <option value="4">Kota</option>
                                <option value="3">Provinsi</option>
                                <option value="2">Nasional</option>
                                <option value="1">Internasional</option>
                            </select>    
                        </div>
                    </div>
                
                    <div class="form-group col-md-12" style="margin-bottom: .1rem;">
                        <label for="registDate" class="block form-control-label">Tanggal Pendaftaran</label>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <div class="form-control-wrapper">
                                <input type="date" name="regist_opendate" id="regist-date-start" class="form-control floating-label" placeholder="Start Date">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-control-wrapper">
                                <input type="date" name="regist_closedate" id="regist-date-end" class="form-control floating-label" placeholder="End Date">
                            </div>
                        </div>
                    </div>
                
                    <div class="form-group col-md-12" style="margin-bottom: .1rem;">
                        <label for="eventDate" class="block form-control-label">Tanggal Pelaksanaan Kompetisi</label>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <div class="form-control-wrapper">
                                <input type="date" name="event_startdate" id="event-date-start" class="form-control floating-label" placeholder="Start Date">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-control-wrapper">
                                <input type="date" name="event_closedate" id="event-date-end" class="form-control floating-label" placeholder="End Date">
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group row"> <div class="col-sm-10"> </div> </div>

            </div>
            <div class="modal-footer" style="padding-top: 3pt">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            </div>
        </form>
    </div>
</div>
<!-- End of Add Competition Modal -->
