  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">

    <section class="sidebar">

      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url('assets/img/avatar.png')?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->usuario; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <ul class="sidebar-menu" data-widget="tree">
        <!-- ACCESS ADMIN- -->
        <?php if($this->session->userdata('level')==='1'):?>

        <li >
          <a href="<?=base_url('home')?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Usuarios</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('usuario');?>"><i class="fa fa-circle-o"></i> Administrar</a></li>
          </ul>
        </li>
        <?php endif;?>

        <!-- CERRAR SESION -->
        <li><a href="<?=base_url('login/logout')?>"><i class="fa fa-book"></i> <span>Cerrar Sesión</span></a></li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->