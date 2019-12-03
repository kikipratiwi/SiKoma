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
                            <li class="breadcrumb-item"><a href="#">Jurusan</a>
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
                            <h5 class="card-header-text">Jurusan</h5>
                        </div>
                        <div class="card-block">
                            <button type="button" id="add-competition" class="btn btn-primary" 
                                    style="margin-left: 5px; margin-bottom: 15px;border-radius: .25rem;padding: .5rem .75rem;" 
                                    data-toggle="modal" data-target="#add-departement-modal-form" >+ Jurusan
                            </button>
                            <div class="row">
                                <div class="col-sm-12 table-responsive">
                                    <table class="table table-hover" id="tbm_departement">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Jurusan</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php   
                                              $index = 1;
                                              foreach($department as $key => $dpt) : 
                                            ?>
                                            <tr>
                                                <td><?php echo $index; ?></td>
                                                <td> <?php echo $dpt->name; ?><td>
                                                        <!-- if(ever_used === null){?> -->
                                                        <button type="button" id="add-departement" class="btn btn-primary" 
                                                            style="margin-left: 5px; margin-bottom: 15px;border-radius: .25rem;padding: .5rem .75rem;" 
                                                            data-toggle="modal" data-target="#edit-departement-modal-form<?php echo $dpt->id ?>" >Edit
                                                        </button>
                                                        
                                                    </td>
                                                    <td>
                                                        <!-- if(ever_used === null){?> -->
                                                        <a href="<?php echo base_url();?>index.php/Admin/act_delete_department?id=<?php echo $dpt->id; ?>" id="input_category" class="open-view-cateogry btn btn-danger" >
                                                            Delete
                                                        </a>
                                                        
                                                    </td>
                                                </tr>

                                                <!-- Edit Department Modal -->
                                                <div class="modal fade modal-flex" id="edit-departement-modal-form<?php echo $dpt->id ?>" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            <h5 class="modal-title">Edit Data Jurusan</h5>
                                                        </div>

                                                        <form method="POST" action="<?php echo base_url();?>index.php/Admin/act_update_department">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="form-group col-md-12">
                                                                        <label for="departmentName" class="block form-control-label">Jurusan</label>
                                                                        <input type="hidden" class="form-control" name="id" value ="<?php echo $dpt->id ?>">
                                                                        <input type="text" class="form-control" name="name" value ="<?php echo $dpt->name ?>">
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
                                                <!-- End of Edit Departement Modal -->

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

<!-- Add Department Modal -->
<div class="modal fade modal-flex" id="add-departement-modal-form" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            <h5 class="modal-title">Input Data Jurusan</h5>
        </div>

        <form method="POST" action="<?php echo base_url();?>index.php/Admin/act_input_department">
            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="departmentName" class="block form-control-label">Jurusan</label>
                        <input type="text" class="form-control" name="name"  placeholder="contoh: Teknik Informatika">
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
<!-- End of Add Department Modal -->

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
        $('#tbm_departement').DataTable();
    });
</script>


</body>
</html>