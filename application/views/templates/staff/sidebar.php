    <!-- Side-Nav-->
    <aside class="main-sidebar hidden-print " >
        <section class="sidebar" id="sidebar-scroll">
            <div class="user-panel">
                <div class="f-left image"><img src="<?php echo base_url();?>assets/images/avatar-1.png" alt="User Image" class="img-circle"></div>
                <div class="f-left info">
                    <p>User</p>
                    <p class="designation">Staff</p>
                </div>
            </div>
            <!-- Sidebar Menu-->
            <ul class="sidebar-menu">
                <li class=" <?php if(current_url() === base_url().'index.php/Staff'){
                                echo 'active';}?> treeview">
                    <a class="waves-effect waves-dark" href="<?php echo base_url();?>index.php/staff">
                        <i class="icon-speedometer"></i><span> Dashboard</span>
                    </a>                
                </li>
                <li class="nav-level">Proposal</li>
                <li class=" <?php if(current_url() === base_url().'index.php/staff/list_proposal'){
                                    echo 'active';}?> treeview">
                    <a class="waves-effect waves-dark" href="<?php echo base_url();?>index.php/staff/list_proposal">
                        <i class="icon-docs"></i><span> Pengajuan Baru</span>
                    </a>                
                </li>
                <li class=" <?php if(current_url() === base_url().'index.php/staff/list_revisi_proposal'){
                                echo 'active';}?> treeview">
                    <a class="waves-effect waves-dark" href="<?php echo base_url();?>index.php/staff/list_revisi_proposal">
                        <i class="icon-note"></i><span> Revisi </span>
                    </a>                
                </li>
                <li class=" <?php if(current_url() === base_url().'index.php/staff/list_fund_submission'){
                                echo 'active';}?> treeview">
                    <a class="waves-effect waves-dark" href="<?php echo base_url();?>index.php/staff/list_fund_submission">
                        <i class="icon-badge"></i><span> Proses Pendanaan</span>
                    </a>                
                </li>
                <li class=" <?php if(current_url() === base_url().'index.php/staff/report'){
                                echo 'active';}?> treeview">
                    <a class="waves-effect waves-dark" href="<?php echo base_url();?>index.php/staff/report">
                        <i class="icon-wallet"></i><span> Telah Didanai</span>
                    </a>                
                </li>
                <li class=" <?php if(current_url() === base_url().'index.php/staff/finished'){
                                echo 'active';}?> treeview">
                    <a class="waves-effect waves-dark" href="<?php echo base_url();?>index.php/staff/finished">
                        <i class="icon-flag"></i><span> Telah Selesai</span>
                    </a>                
                </li>
                <li class=" <?php if(current_url() === base_url().'index.php/staff/rejected'){
                                echo 'active';}?> treeview">
                    <a class="waves-effect waves-dark" href="<?php echo base_url();?>index.php/staff/rejected">
                        <i class="icon-ban"></i><span> Tidak Disetujui</span>
                    </a>                
                </li>
                <li class=" <?php if(current_url() === base_url().'index.php/staff/edit_deadline'){
                                echo 'active';}?> treeview">
                    <a class="waves-effect waves-dark" href="<?php echo base_url();?>index.php/staff/edit_deadline">
                        <i class="icon-key"></i><span>Edit Deadline</span>
                    </a>                
                </li>
                <li class="nav-level">Laporan</li>
                <li class=" <?php if(current_url() === base_url().'index.php/staff/print_report'){
                                echo 'active';}?> treeview">
                    <a class="waves-effect waves-dark" href="<?php echo base_url();?>index.php/staff/print_report">
                        <i class="icon-printer"></i><span> Cetak Laporan</span>
                    </a>                
                </li>
                
            </ul>
        </section>
    </aside>