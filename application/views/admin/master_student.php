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
                            <li class="breadcrumb-item"><a href="#">Mahasiswa</a>
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
                            <h5 class="card-header-text">Mahasiswa</h5>
                        </div>
                        <div class="card-block">
                            <button type="button" id="add-competition" class="btn btn-primary" 
                                    style="margin-left: 5px; margin-bottom: 15px;border-radius: .25rem;padding: .5rem .75rem;" 
                                    data-toggle="modal" data-target="#add-student-modal-form" >+ Mahasiswa
                            </button>
                            <button type="button" class="btn btn-primary" style="margin-left: 5px; margin-bottom: 15px;border-radius: .25rem;padding: .5rem .75rem;" >Import</button>
                            <div class="row">
                                <div class="col-sm-12 table-responsive">
                                    <table class="table table-hover" id="tbm_student">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>Program Studi</th>
                                            <th>Edit</th>
                                            <!-- <th>Delete</th> -->
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php   
                                              $index = 1;
                                              foreach($student as $key => $std) : 
                                            ?>
                                                <tr>
                                                    <td><?php echo $index ?></td>
                                                    <!-- GET NIM -->
                                                    <td><?php echo $std->nim ?></td>
                                                    <!-- GET Nama -->
                                                    <td><?php echo $std->name ?></td>
                                                    <!-- GET Departement -->
                                                    <td><?php echo $std->program->name ?></td>
                                                    <td>
                                                        <!-- if(ever_used === null){?> -->
                                                        <button type="button" id="add-student" class="btn btn-primary" 
                                                            style="margin-left: 5px; margin-bottom: 15px;border-radius: .25rem;padding: .5rem .75rem;" 
                                                            data-toggle="modal" data-target="#edit-student-modal-form<?php echo $std->id ?>" >Edit
                                                        </button>
                                                        <!-- }else{?> -->
                                                        <!-- <a href="" id="input_category" class="btn btn-disable disabled"> -->
                                                            <!-- Edit -->
                                                        <!-- </a> -->
                                                        <!-- }?> -->
                                                    </td>
                                                    <!-- <td> -->
                                                        <!-- if(ever_used === null){?> -->
                                                 <!--        <a href="<?php echo base_url();?>index.php/Admin/act_delete_student?id=<?php echo $std->id; ?>" id="input_category" class="open-view-cateogry btn btn-danger" action="">
                                                            Delete
                                                  -->       </a>
                                                        <!-- }else{?> -->
                                                        <!-- <a href="" id="input_category" class="btn btn-disable disabled">
                                                        Delete
                                                        </a> -->
                                                        <!-- }?> -->
                                                    <!-- </td> -->
                                                </tr>

                                                <!-- Edit Student Modal -->
                                                <div class="modal fade modal-flex" id="edit-student-modal-form<?php echo $std->id ?>" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            <h5 class="modal-title">Edit Data Mahasiswa</h5>
                                                        </div>

                                                        <form method="POST" action="<?php echo base_url();?>index.php/Admin/act_update_student">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="form-group col-md-12">
                                                                        <input type="hidden" class="form-control" name="id" value="<?php echo $std->id ?>">
                                                                        <label for="studentName" class="block form-control-label">Nama Lengkap</label>
                                                                        <input type="text" class="form-control" name="name" value="<?php echo $std->name ?>">
                                                                    </div>
                                                                    <div class="form-group col-md-12">
                                                                        <label for="studentNIM" class="block form-control-label">NIM</label>
                                                                        <input type="text" class="form-control" name="nim" value="<?php echo $std->nim ?>">
                                                                    </div>
                                                                    <div class="form-group col-md-12">
                                                                        <label for="studentNIM" class="block form-control-label">ANGKATAN</label>
                                                                        <input type="text" class="form-control" name="year" value="<?php echo $std->year ?>">
                                                                    </div>
                                                                    <div class="form-group col-md-12">
                                                                        <label for="studentNIM" class="block form-control-label">EMAIL</label>
                                                                        <input type="text" class="form-control" name="email" value="<?php echo $std->email ?>">
                                                                    </div>
                                                                    <div class="form-group col-md-12">
                                                                        <label for="studentDepartement" class="block form-control-label">Program Studi</label>
                                                                        <!-- // ! get departement from database // -->
                                                                        <select class="form-control" name="program" id="organization">
                                                                            <?php foreach($program as $key => $dep) : ?>
                                                                                <option value=<?php echo $dep->id ?>> <?php echo $dep->name ?></option>
                                                                            <?php endforeach; ?>
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
                                                <!-- End of Edit Student Modal -->

                                                <?php 
                                            $index++;
                                            endforeach;
                                         ?>
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

<!-- Add Student Modal -->
<div class="modal fade modal-flex" id="add-student-modal-form" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            <h5 class="modal-title">Input Data Mahasiswa</h5>
        </div>

        <form method="POST" action="<?php echo base_url();?>index.php/Admin/act_input_student">
            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="studentName" class="block form-control-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="name"  placeholder="contoh: Zharfan Ajda">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="studentNIM" class="block form-control-label">NIM</label>
                        <input type="text" class="form-control" name="nim" placeholder="contoh: 180012345">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="studentNIM" class="block form-control-label">ANGKATAN</label>
                        <input type="number" class="form-control" name="year" min=2016 placeholder="contoh: 2017">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="studentNIM" class="block form-control-label">EMAIL</label>
                        <input type="text" class="form-control" name="email" placeholder="contoh: user@polban.ac.id">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="studentDepartement" class="block form-control-label">Program Studi</label>
                        <!-- // ! get departement from database // -->
                        
                         <select class="form-control" name="program" id="organization">
                            <?php foreach($program as $key => $dep) : ?>
                                <option value=<?php echo $dep->id ?>> <?php echo $dep->name ?></option>
                            <?php endforeach; ?>
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
<!-- End of Add Student Modal

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
        $('#tbm_student').DataTable();
    });
</script>


</body>
</html>