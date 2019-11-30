<div class="content-wrapper">
        <!-- Container-fluid starts -->
        <div class="container-fluid">

            <!-- Header Starts -->
            <div class="row">
                <div class="col-sm-12 p-0">
                    <div class="main-header">
                        <h4>Serapan Dana</h4>
                        <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <i class="icofont icofont-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Data Pendanaan</a>
                            </li>
                            <li class="breadcrumb-item"><a href="basic-table.html">Serapan Dana</a>
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
                            <h5 class="card-header-text">Serapan Dana</h5>
                        </div>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-sm-12 table-responsive">
                                    <table class="table table-hover" id="realizationBudgetTable">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tahun</th>
                                            <th>Total Serapan Dana</th>                                            
                                            <th>Detail Serapan</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                                <?php 
                                                    $this->load->helpers('money_format');  
                                                    $index = 1;
                                                    foreach($proposal as $key => $pr) : 
                                                ?>
                                                    
                                                <tr>
                                                    <td><?php echo $index ?></td>
                                                    <!-- GET start year  -->
                                                    <td><?php echo "2019"; ?></td>
                                                    <!-- GET total realization budget per year -->
                                                    <td><?php echo rupiah("29000000"); ?></td>
                                                    <td>
                                                        <a href="" id="detailRealization" class="btn btn-primary" data-toggle="modal" data-target="#view-Modal-Finished-Proposal<?php echo $pr->id ?> ">
                                                            Detail
                                                        </a>
                                                    </td>
                                                </tr>
                                             
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

    <!-- Required Jqurey -->
    <script src="<?php echo base_url();?>assets/js/2.1.3jquery.min.js"></script> 
    <script src="<?php echo base_url();?>assets/js/jquery.media.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.dataTables.js"></script>

<script> 
    $(document).ready( function () {
        $('#realizationBudgetTable').DataTable();
        $('#realizationBudgetDetailTable').DataTable();
    } );

    $(function () {
        $('.media').media({width: 950, height:430});
    });

    function test() {

    }

</script>

</body>
</html>