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
                            <li class="breadcrumb-item"><a href="#">Organisasi Mahasiswa</a>
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
                            <h5 class="card-header-text">Organisasi Mahasiswa (Ormawa)</h5>
                        </div>
                        <div class="card-block">
                            <button type="button" id="add-student-organization" class="btn btn-primary" 
                                    style="margin-left: 5px; margin-bottom: 15px;border-radius: .25rem;padding: .5rem .75rem;" 
                                    data-toggle="modal" data-target="#add-student-organization-modal-form" >+ Ormawa
                            </button>
                            <div class="row">
                                <div class="col-sm-12 table-responsive">
                                    <table class="table table-hover" id="tbm_student_organization">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Akronim</th>
                                            <th>Organisasi Mahasiswa</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php   
                                                $index = 1;
                                                foreach($ormawa as $key => $org) : 
                                            ?>
                                                <tr>
                                                    <td><?php echo $index; ?></td>
                                                    <!-- GET akronim -->
                                                    <td><?php echo $org->acronym; ?></td>
                                                    <!-- GET ormawa -->
                                                    <td><?php echo $org->name; ?></td>
                                                    <td>
                                                        <!-- if(ever_used === null){?> -->
                                                        <button type="button" id="edit-student-organization" class="btn btn-primary" 
                                                            style="margin-left: 5px; margin-bottom: 15px;border-radius: .25rem;padding: .5rem .75rem;" 
                                                            data-toggle="modal" data-target="#edit-student-organization-modal-form<?php echo $org->id ?>" >Edit
                                                        </button>
                                                        <!-- }else{?> -->
                                                        <!-- <a href="" id="input_category" class="btn btn-disable disabled"> -->
                                                            <!-- Edit -->
                                                        <!-- </a> -->
                                                        <!-- }?> -->
                                                    </td>
                                                    <td>
                                                        <!-- if(ever_used === null){?> -->
                                                        <a href="<?php echo base_url();?>index.php/Admin/act_delete_ormawa?id=<?php echo $org->id; ?>" id="input_category" class="open-view-cateogry btn btn-danger" action="">
                                                            Delete
                                                        </a>
                                                        <!-- }else{?> -->
                                                        <!-- <a href="" id="input_category" class="btn btn-disable disabled">
                                                        Delete
                                                        </a> -->
                                                        <!-- }?> -->
                                                    </td>
                                                </tr>

                                                <!-- Edit Student Organization Modal -->
                                                <div class="modal fade modal-flex" id="edit-student-organization-modal-form<?php echo $org->id ?>" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            <h5 class="modal-title">Edit Data Ormawa</h5>
                                                        </div>

                                                        <form method="POST" action="<?php echo base_url();?>index.php/Admin/act_update_ormawa">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="form-group col-md-12">
                                                                        <label for="studentOrganizatioName" class="block form-control-label">Ormawa</label>
                                                                        <input type="hidden" class="form-control" name="id" value="<?php echo $org->id?>">
                                                                        <input type="text" class="form-control" name="name" value="<?php echo $org->name ?>">
                                                                    </div>
                                                                    <div class="form-group col-md-12">
                                                                        <label for="studentOrganizatioAcronym" class="block form-control-label">Akronim</label>
                                                                        <input type="text" class="form-control" name="acr" value="<?php echo $org->acronym ?>">
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
                                                <!-- End of Edit Student Organization Modal -->

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

<!-- Add Student Organization Modal -->
<div class="modal fade modal-flex" id="add-student-organization-modal-form" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            <h5 class="modal-title">Input Data Ormawa</h5>
        </div>

        <form method="POST" action="<?php echo base_url();?>index.php/Admin/act_input_ormawa">
            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="studentOrganizatioName" class="block form-control-label">Ormawa</label>
                        <input type="text" class="form-control" name="name" placeholder="contoh: Himpunan Mahasiswa" required=""> 
                    </div>
                    <div class="form-group col-md-12">
                        <label for="studentOrganizatioAcronym" class="block form-control-label">Akronim</label>
                        <input type="text" class="form-control" name="acr" placeholder="contoh: HM" required>
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
<!-- End of Add Student Organization Modal -->

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
        $('#tbm_student_organization').DataTable();
    });
</script>


</body>
</html>