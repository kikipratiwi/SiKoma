    <!-- Side-Nav-->
    <aside class="main-sidebar hidden-print " >
        <section class="sidebar" id="sidebar-scroll">
            <div class="user-panel">
                <div class="f-left image"><img src="<?php echo base_url();?>assets/images/avatar-1.png" alt="User Image" class="img-circle"></div>
                <div class="f-left info">
                    <p><?php echo $user['name']?></p>
                    <p class="designation">Pembimbing</p>
                </div>
            </div>
            <!-- Sidebar Menu-->
            <ul class="sidebar-menu">
                <li class=" <?php if(current_url() === base_url().'index.php/Mentor'){
                                echo 'active';}?> treeview">
                    <a class="waves-effect waves-dark" href="<?php echo base_url();?>index.php/Mentor">
                        <i class="icon-speedometer"></i><span> Dashboard</span>
                    </a>                
                </li>
                <li class="nav-level">Pengajuan Proposal</li>
                <li class=" <?php if(current_url() === base_url().'index.php/Mentor/ongoing_submission'){
                                    echo 'active';}?> treeview">
                    <a class="waves-effect waves-dark" href="<?php echo base_url();?>index.php/Mentor/ongoing_submission">
                        <i class="icon-book-open"></i><span> Masih dalam Proses</span>
                    </a>                  
                </li>
                <li class=" <?php if(current_url() === base_url().'index.php/Mentor/finished_submission'){
                                    echo 'active';}?> treeview">
                    <a class="waves-effect waves-dark" href="<?php echo base_url();?>index.php/Mentor/finished_submission">
                        <i class="icon-list"></i><span> Selesai</span>
                    </a>                  
                </li>
            </ul>
        </section>
    </aside>