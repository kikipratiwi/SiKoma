<div class="content-wrapper">
        <!-- Container-fluid starts -->
        <div class="container-fluid">

            <!-- Header Starts -->
            <div class="row">
                <div class="col-sm-12 p-0">
                    <div class="main-header">
                        <h4>Data Master</h4>
                        <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <i class="icofont icofont-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Data Master</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Dosen</a>
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
                            <h5 class="card-header-text">Dosen/Pembimbing</h5>
                        </div>
                        <div class="card-block">
                            <button type="button" id="add-lecturer" class="btn btn-primary" 
                                    style="margin-left: 5px; margin-bottom: 15px;border-radius: .25rem;padding: .5rem .75rem;" 
                                    data-toggle="modal" data-target="#add-lecturer-modal-form" >+ Dosen
                            </button>
                            <button type="button" class="btn btn-primary" style="margin-left: 5px; margin-bottom: 15px;border-radius: .25rem;padding: .5rem .75rem;" >Import</button>
                            <div class="row">
                                <div class="col-sm-12 table-responsive">
                                    <table class="table table-hover" id="tbm_lecturer">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIP</th>
                                            <!-- <th>NIDN</th> -->
                                            <th>Nama</th>
                                            <th>Jurusan</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                for ($no = 1; $no <= 4; $no++){
                                                    ?>
                                                <tr>
                                                    <td><?php echo $no ?></td>
                                                    <!-- GET NIM -->
                                                    <td>172411031</td>
                                                    <!-- GET Nama -->
                                                    <td>Nussa</td>
                                                    <!-- GET Departement -->
                                                    <td>Komputer</td>
                                                    <td>
                                                        <!-- if(ever_used === null){?> -->
                                                        <button type="button" id="edit-lecturer" class="btn btn-primary" 
                                                            style="margin-left: 5px; margin-bottom: 15px;border-radius: .25rem;padding: .5rem .75rem;" 
                                                            data-toggle="modal" data-target="#dit-lecturer-modal-form" >Edit
                                                        </button>
                                                        <!-- }else{?> -->
                                                        <!-- <a href="" id="input_category" class="btn btn-disable disabled"> -->
                                                            <!-- Edit -->
                                                        <!-- </a> -->
                                                        <!-- }?> -->
                                                    </td>
                                                    <td>
                                                        <!-- if(ever_used === null){?> -->
                                                        <a href="" id="input_category" class="btn btn-danger" action="">
                                                            Delete
                                                        </a>
                                                        <!-- }else{?> -->
                                                        <!-- <a href="" id="input_category" class="btn btn-disable disabled">
                                                        Delete
                                                        </a> -->
                                                        <!-- }?> -->
                                                    </td>
                                                </tr>

                                                <!-- Edit Lecturer Modal -->
                                                <div class="modal fade modal-flex" id="edit-lecturer-modal-form" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            <h5 class="modal-title">Edit Data Dosen</h5>
                                                        </div>

                                                        <form method="POST" action="">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="form-group col-md-12">
                                                                        <label for="lecturertName" class="block form-control-label">Nama Lengkap *get data</label>
                                                                        <input type="text" class="form-control" name="name">
                                                                    </div>
                                                                    <div class="form-group col-md-12">
                                                                        <label for="lecturerNIM" class="block form-control-label">NIP*get data<</label>
                                                                        <input type="text" class="form-control" name="nim">
                                                                    </div>
                                                                    <div class="form-group col-md-12">
                                                                        <label for="lecturerDepartement" class="block form-control-label">Jurusan*get data</label>
                                                                        <!-- // ! get departement from database //
                                                                        <select class="form-control" name="organization" id="organization">
                                                                        foreach($departement as $key => $dep) : ?>
                                                                            <option value="$dep->id?>"> $dep->name ?></option>
                                                                        endforeach;	?>
                                                                        </select>
                                                                        -->
                                                                        <select>
                                                                            <option value="0">Teknik Komputer dan Informatika</option>
                                                                            <option value="1">Teknik Kimia</option>
                                                                            <option value="2">Teknik Mesin</option>
                                                                            <option value="3">Akuntansi</option>
                                                                        </select> 
                                                                    </div>
                                                                </div>
                                                            </div>                                              
                                                            <div class="modal-footer" style="padding-top: 3pt">
                                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <!-- End of Edit Lecturer Modal -->

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

<!-- Add Lecturer Modal -->
<div class="modal fade modal-flex" id="add-lecturer-modal-form" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            <h5 class="modal-title">Input Data Jurusan</h5>
        </div>

        <form method="POST" action="">
            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="lecturerName" class="block form-control-label">Nama Lengkap *get data</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="lecturerNIM" class="block form-control-label">NIP*get data<</label>
                        <input type="text" class="form-control" name="nim">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="lecturerDepartement" class="block form-control-label">Jurusan*get data</label>
                        <!-- // ! get departement from database //
                        <select class="form-control" name="organization" id="organization">
                        foreach($departement as $key => $dep) : ?>
                            <option value="$dep->id?>"> $dep->name ?></option>
                        endforeach;	?>
                        </select>
                        -->
                        <select>
                            <option value="0">Teknik Komputer dan Informatika</option>
                            <option value="1">Teknik Kimia</option>
                            <option value="2">Teknik Mesin</option>
                            <option value="3">Akuntansi</option>
                        </select> 
                    </div>
                </div>
            </div>                                              
            <div class="modal-footer" style="padding-top: 3pt">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            </div>
        </form>
    </div>
</div>
<!-- End of Add Lecturer Modal -->

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


    <!-- Scrollbar JS-->
    <script src="<?php echo base_url();?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

    <!-- Required Jqurey -->
    <script src="<?php echo base_url();?>assets/js/jquery.media.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.dataTables.js"></script>
	

<script> 
    $(document).ready( function () {
        $('#tbm_lecturer').DataTable();
    });
</script>


</body>
</html>