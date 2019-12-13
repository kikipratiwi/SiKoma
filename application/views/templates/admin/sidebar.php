    <!-- Side-Nav-->
    <aside class="main-sidebar hidden-print " >
        <section class="sidebar" id="sidebar-scroll">
            <div class="user-panel">
                <div class="f-left image"><img src="<?php echo base_url();?>assets/images/avatar-1.png" alt="User Image" class="img-circle"></div>
                <div class="f-left info">
                    <p>User</p>
                    <p class="designation">Admin</p>
                </div>
            </div>
            <!-- Sidebar Menu-->
            <ul class="sidebar-menu">
                <li class=" <?php if(current_url() === base_url().'index.php/Admin'){
                                echo 'active';}?> treeview">
                    <a class="waves-effect waves-dark" href="<?php echo base_url();?>index.php/Admin">
                        <i class="icon-speedometer"></i><span> Dashboard</span>
                    </a>                
                </li>
                <li class="nav-level">Proposal</li>
                <li class=" <?php if(current_url() === base_url().'index.php/Admin/list_proposal'){
                                    echo 'active';}?> treeview">
                    <a class="waves-effect waves-dark" href="<?php echo base_url();?>index.php/Admin/list_proposal">
                        <i class="icon-docs"></i><span> Pengajuan Baru</span>
                    </a>                
                </li>
                <li class=" <?php if(current_url() === base_url().'index.php/Admin/list_revisi_proposal'){
                                echo 'active';}?> treeview">
                    <a class="waves-effect waves-dark" href="<?php echo base_url();?>index.php/Admin/list_revisi_proposal">
                        <i class="icon-note"></i><span> Revisi </span>
                    </a>                
                </li>
                <li class=" <?php if(current_url() === base_url().'index.php/Admin/list_fund_submission'){
                                echo 'active';}?> treeview">
                    <a class="waves-effect waves-dark" href="<?php echo base_url();?>index.php/Admin/list_fund_submission">
                        <i class="icon-badge"></i><span> Proses Pendanaan</span>
                    </a>                
                </li>
                <li class=" <?php if(current_url() === base_url().'index.php/Admin/report'){
                                echo 'active';}?> treeview">
                    <a class="waves-effect waves-dark" href="<?php echo base_url();?>index.php/Admin/report">
                        <i class="icon-wallet"></i><span> Telah Didanai</span>
                    </a>                
                </li>
                <li class=" <?php if(current_url() === base_url().'index.php/Admin/finished'){
                                echo 'active';}?> treeview">
                    <a class="waves-effect waves-dark" href="<?php echo base_url();?>index.php/Admin/finished">
                        <i class="icon-flag"></i><span> Telah Selesai</span>
                    </a>                
                </li>
                <li class=" <?php if(current_url() === base_url().'index.php/Admin/rejected'){
                                echo 'active';}?> treeview">
                    <a class="waves-effect waves-dark" href="<?php echo base_url();?>index.php/Admin/rejected">
                        <i class="icon-ban"></i><span> Tidak Disetujui</span>
                    </a>                
                </li>
                <li class=" <?php if(current_url() === base_url().'index.php/staff/edit_limit'){
                                echo 'active';}?> treeview">
                    <a class="waves-effect waves-dark" href="<?php echo base_url();?>index.php/staff/edit_limit">
                        <i class="icon-key"></i><span>Edit Limit Pengajuan</span>
                    </a>                
                </li>
                <li class="nav-level">Reviewer</li>
                <li class=" <?php if(current_url() === base_url().'index.php/Admin/add_reviewer'){
                                echo 'active';}?> treeview">
                    <a class="waves-effect waves-dark" href="<?php echo base_url();?>index.php/Admin/add_reviewer">
                        <i class="fa fa-user"></i><span> Tambah Reviewer</span>
                    </a>                
                </li>
                <li class="nav-level">Kompetisi</li>
                <li class=" <?php if(current_url() === base_url().'index.php/Admin/list_kompetisi'){
                                echo 'active';}?> treeview">
                    <a class="waves-effect waves-dark" href="<?php echo base_url();?>index.php/Admin/list_kompetisi">
                        <i class="icon-list"></i><span> List Kompetisi</span>
                    </a>                
                </li>
                <li class=" <?php if(current_url() === base_url().'index.php/Admin/input_kategori'){
                                echo 'active';}?> treeview">
                    <a class="waves-effect waves-dark" href="<?php echo base_url();?>index.php/Admin/input_kategori">
                        <i class="fa fa-sticky-note"></i><span> Kategori</span>
                    </a>                
                </li>
                <li class="nav-level">Laporan</li>
                <li class=" <?php if(current_url() === base_url().'index.php/Admin/print_report'){
                                echo 'active';}?> treeview">
                    <a class="waves-effect waves-dark" href="<?php echo base_url();?>index.php/Admin/print_report">
                        <i class="icon-printer"></i><span> Cetak Laporan</span>
                    </a>                
                </li>
                <li class="nav-level">Mahasiswa</li>
                <li class=" <?php if(current_url() === base_url().'index.php/Admin/reset_password'){
                                echo 'active';}?> treeview">
                    <a class="waves-effect waves-dark" href="<?php echo base_url();?>index.php/Admin/reset_password">
                        <i class="icon-check"></i><span> Atur Ulang Kata Sandi</span>
                    </a>                
                </li>
                <li class="nav-level">Data Master</li>
                <li class=" <?php if(current_url() === base_url().'index.php/Admin/master_student'){
                                echo 'active';}?> treeview">
                    <a class="waves-effect waves-dark" href="<?php echo base_url();?>index.php/Admin/master_student">
                        <i class="fa fa-graduation-cap"></i><span> Mahasiswa</span>
                    </a>                
                </li>
                <li class=" <?php if(current_url() === base_url().'index.php/Admin/master_lecturer'){
                                echo 'active';}?> treeview">
                    <a class="waves-effect waves-dark" href="<?php echo base_url();?>index.php/Admin/master_lecturer">
                        <i class="icon-graduation"></i><span> Dosen</span>
                    </a>                
                </li>
                <li class=" <?php if(current_url() === base_url().'index.php/Admin/master_student_organizations'){
                                echo 'active';}?> treeview">
                    <a class="waves-effect waves-dark" href="<?php echo base_url();?>index.php/Admin/master_student_organizations">
                        <i class="fa fa-certificate"></i><span> Ormawa</span>
                    </a>                
                </li>
                <li class=" <?php if(current_url() === base_url().'index.php/Admin/master_departement'){
                                echo 'active';}?> treeview">
                    <a class="waves-effect waves-dark" href="<?php echo base_url();?>index.php/Admin/master_departement">
                        <i class="fa fa-building-o"></i><span> Jurusan</span>
                    </a>                
                </li>
                <li class=" <?php if(current_url() === base_url().'index.php/Admin/master_study_program'){
                                echo 'active';}?> treeview">
                    <a class="waves-effect waves-dark" href="<?php echo base_url();?>index.php/Admin/master_study_program">
                        <i class="fa fa-building"></i><span> Program Studi</span>
                    </a>                
                </li>
            </ul>
        </section>
    </aside>

    <!-- 
        echo $loaded_page;
    -->