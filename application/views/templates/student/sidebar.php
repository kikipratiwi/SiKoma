    <!-- Side-Nav-->
    <aside class="main-sidebar hidden-print " >
        <section class="sidebar" id="sidebar-scroll">
            <div class="user-panel">
                <div class="f-left image"><img src="<?php echo base_url();?>assets/images/avatar-1.png" alt="User Image" class="img-circle"></div>
                <div class="f-left info">
                    <p>Kiki Pratiwi</p>
                    <p class="designation">171511046</p>
                </div>
            </div>
            <!-- Sidebar Menu-->
            <ul class="sidebar-menu">
                <li class="active treeview">
                    <a class="waves-effect waves-dark" href="#">
                        <i class="icon-speedometer"></i><span> Dashboard</span>
                    </a>                
                </li>
                <li class="nav-level">Proposal</li>
                <li class="treeview">
                    <a class="waves-effect waves-dark" href="<?php echo base_url();?>index.php/Student/proposal_submission">
                    <i class="fab fa-wpforms"></i><span> Ajukan Proposal</span>
                    </a> 
                </li>
                <li class="treeview">
                    <a class="waves-effect waves-dark" href="<?php echo base_url();?>index.php/Student/ongoing_submission">
                        <i class="icon-list"></i><span> Pengajuan (on going)</span>
                    </a>                  
                </li>
                <li class="treeview">
                    <a class="waves-effect waves-dark" href="<?php echo base_url();?>index.php/Student/finished_submission">
                        <i class="icon-list"></i><span> Pengajuan (finished)</span>
                    </a>                  
                </li>
            </ul>
        </section>
    </aside>