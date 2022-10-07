<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" href="<?php echo base_url('administrasi/'); ?>"><?php echo $username;?></a>
    </div>

    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <ul class="nav navbar-nav navbar-left navbar-top-links">
        <li><a href="<?php echo base_url('admin/'); ?>"><i class="fa fa-dollar fa-fw"></i> </a></li>
    </ul>

    <ul class="nav navbar-right navbar-top-links">

        <li class="dropdown">
            <a href="<?php echo base_url('autentikasi/logout'); ?>">
                <b><i class="fa fa-sign-out"></i> Logout </b>
            </a>
        </li>
    </ul>

    <!-- /.navbar-top-links -->
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="<?php echo base_url('administrasi/siswa'); ?>" class="<?php echo isset($aktif['siswa'])?"active":"";?>">
                        <i class="fa fa-home fa-fw"></i> 
                        Siswa
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('administrasi/agama'); ?>" class="<?php echo isset($aktif['agama'])?"active":"";?>">
                        <i class="fa fa-inbox fa-fw"></i> 
                        Agama
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('administrasi/jeniskelamin'); ?>" class="<?php echo isset($aktif['jeniskelamin'])?"active":"";?>">
                        <i class="fa fa-send-o fa-fw"></i> 
                        Jenis Kelamin
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('administrasi/user'); ?>" class="<?php echo isset($aktif['user'])?"active":"";?>">
                        <i class="fa fa-edit fa-fw"></i> User
                    </a>
                </li>
                
            </ul>
        </div>
    </div>
</nav>