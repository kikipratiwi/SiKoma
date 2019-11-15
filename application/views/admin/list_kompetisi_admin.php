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