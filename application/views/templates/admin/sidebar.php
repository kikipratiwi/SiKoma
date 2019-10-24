    <!-- Side-Nav-->
    <aside class="main-sidebar hidden-print " >
        <section class="sidebar" id="sidebar-scroll">
            <div class="user-panel">
                <div class="f-left image"><img src="<?php echo base_url();?>assets/images/avatar-1.png" alt="User Image" class="img-circle"></div>
                <div class="f-left info">
                    <p>User</p>
                    <p class="designation">Admin <i class="icofont icofont-caret-down m-l-5"></i></p>
                </div>
            </div>
            <!-- sidebar profile Menu-->
            <ul class="nav sidebar-menu extra-profile-list">
                <li>
                    <a class="waves-effect waves-dark" href="#">
                        <i class="icon-user"></i>
                        <span class="menu-text">View Profile</span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="javascript:void(0)">
                        <i class="icon-settings"></i>
                        <span class="menu-text">Settings</span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="javascript:void(0)">
                        <i class="icon-logout"></i>
                        <span class="menu-text">Logout</span>
                        <span class="selected"></span>
                    </a>
                </li>
            </ul>
            <!-- Sidebar Menu-->
            <ul class="sidebar-menu">
                <li class="active treeview">
                    <a class="waves-effect waves-dark" href="#!">
                        <i class="icon-speedometer"></i><span> Dashboard</span>
                    </a>                
                </li>
                <li class="nav-level">Proposal</li>
                <li class="treeview">
                    <a class="waves-effect waves-dark" href="<?php echo base_url();?>index.php/Admin/list_proposal">
                        <i class="icon-list"></i><span> List Proposal</span>
                    </a>                
                </li>
                <li class="nav-level">Kompetisi</li>
                <li class="treeview">
                    <a class="waves-effect waves-dark" href="<?php echo base_url();?>index.php/Admin/list_proposal">
                        <i class="icon-list"></i><span> List Kompetisi</span>
                    </a>                
                </li>
                <li class="treeview">
                    <a class="waves-effect waves-dark" href="<?php echo base_url();?>index.php/Admin/list_proposal">
                        <i class="icon-plus"></i><span> Input Kompetisi</span>
                    </a>                
                </li>
                <li class="nav-level">Laporan</li>
                <li class="treeview">
                    <a class="waves-effect waves-dark" href="<?php echo base_url();?>index.php/Admin/list_proposal">
                        <i class="icon-printer"></i><span> Cetak Laporan</span>
                    </a>                
                </li>
            </ul>
        </section>
    </aside>