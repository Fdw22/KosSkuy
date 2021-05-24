<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li id="dashboardMainMenu">
          <a href="<?php echo base_url('dashboard') ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li id="dashboardMainMenu">
          <a href="<?php echo base_url('front') ?>" target="_blank">
            <i class="fa fa-dashboard"></i> <span>Front</span>
          </a>
        </li>
        <?php if($user_permission): ?>
          <?php if(in_array('createUser', $user_permission) || in_array('updateUser', $user_permission) || in_array('viewUser', $user_permission) || in_array('deleteUser', $user_permission) || in_array('createGroup', $user_permission) || 
          in_array('updateGroup', $user_permission) || in_array('viewGroup', $user_permission) || in_array('deleteGroup', $user_permission)): ?>
            <li class="treeview" id="mainUserNav">
            <a href="#">
              <i class="fa fa-users"></i>
              <span>Pengguna</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <?php if(in_array('createUser', $user_permission)): ?>
              <li id="createUserNav"><a href="<?php echo base_url('users/create') ?>"><i class="fa fa-circle-o"></i>+ Pengguna</a></li>
              <?php endif; ?>

              <?php if(in_array('updateUser', $user_permission) || in_array('viewUser', $user_permission) || in_array('deleteUser', $user_permission)): ?>
              <li id="manageUserNav"><a href="<?php echo base_url('users') ?>"><i class="fa fa-circle-o"></i>Daftar pengguna</a></li>
              <?php endif; ?>

              <?php if(in_array('createGroup', $user_permission)): ?>
                  <li id="addGroupNav"><a href="<?php echo base_url('groups/create') ?>"><i class="fa fa-circle-o"></i>
                  + Grup pengguna</a></li>
                <?php endif; ?>
                <?php if(in_array('updateGroup', $user_permission) || in_array('viewGroup', $user_permission) || in_array('deleteGroup', $user_permission)): ?>
                <li id="manageGroupNav"><a href="<?php echo base_url('groups') ?>"><i class="fa fa-circle-o"></i>
                Daftar grup pengguna</a></li>
              <?php endif; ?>



            </ul>
          </li>
          <?php endif; ?>

<!-- ************************************************************************* -->


          <?php if(in_array('create_kategori', $user_permission) || in_array('view_kategori', $user_permission) || 
                    in_array('update_kategori', $user_permission) || in_array('delete_kategori', $user_permission) ): ?>
          <li><a href="<?php echo base_url('kategori/') ?>">
            <i class="glyphicon glyphicon-tags"></i><span>Kategori Kamar</span></a>
          </li>

          <?php endif; ?>

          <?php if(in_array('create_kamar', $user_permission) || in_array('view_kamar', $user_permission) || 
                    in_array('update_kamar', $user_permission) || in_array('delete_kamar', $user_permission) ): ?>
            <li class="treeview" id="mainKamarNav">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Kamar</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <?php if(in_array('create_kamar', $user_permission) || in_array('update_kamar', $user_permission) || in_array('view_kamar', $user_permission) || in_array('delete_kamar', $user_permission)): ?>
                  <li id="kamarNav">
                    <a href="<?php echo base_url('kamar/') ?>">
                      <i class="glyphicon glyphicon-tags"></i> <span>Daftar Kamar</span>
                    </a>
                  </li>
                <?php endif; ?>

              </ul>
            </li>
          <?php endif; ?>

<!-- ************************************* -->

        <?php endif; ?>
        <!-- user permission info -->
        <?php if(in_array('create_transaksi', $user_permission) || in_array('view_transaksi', $user_permission) || 
                    in_array('update_transaksi', $user_permission) || in_array('delete_transaksi', $user_permission) ): ?>
        <li><a href="<?php echo base_url('transaksi/') ?>"><i class="fa fa-wrench"></i> <span>Transaksi</span></a></li>
        <?php endif; ?>
        <li><a href="<?php echo base_url('users/setting/') ?>"><i class="fa fa-wrench"></i> <span>Ubah Profile</span></a></li>
        <li><a href="<?php echo base_url('auth/logout') ?>"><i class="glyphicon glyphicon-log-out"></i> <span>Logout</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>