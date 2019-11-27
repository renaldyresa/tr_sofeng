<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul>
                <li class="menu-title">Navigation</li>

                <li class="has_sub">
                    <a href="<?php echo base_url() ?>admin/dashboard" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Dashboard </span> </a>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Posts </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="<?php echo base_url() ?>admin/add_post">Add Posts</a></li>
                        <li><a href="<?php echo base_url() ?>admin/manage_post">Manage Posts</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(1);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Users </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="<?php echo base_url() ?>admin/user">Manage Users</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(2);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Admin </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="<?php echo base_url() ?>admin/admin">Add Admin</a></li>
                        <li><a href="<?php echo base_url() ?>admin/admin/manage">Manage Admin</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Comments </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="unapprove-comment.php">Waiting for Approval </a></li>
                        <li><a href="manage-comments.php">Approved Comments</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->

    </div>
    <!-- Sidebar -left -->

</div>