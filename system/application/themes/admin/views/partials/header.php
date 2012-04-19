<div class="navbar-inner">
    <div class="container-fluid">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <a class="brand" href="<?php echo site_url('admin'); ?>"><?php echo $this->config->item('site_title', 'ion_auth'); ?></a>
        <div class="nav-collapse">
            <ul class="nav">
                <li><a href="<?php echo site_url('admin'); ?>">Dashboard</a></li>
                <li class="dropdown" id="menu-development">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#menu-development">Development <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo site_url('admin/module'); ?>">Module Manager</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav pull-right">
                <li class="dropdown" id="menu-account">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#menu-account"><?php echo $this->session->userdata('username'); ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo site_url('logout'); ?>">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>
