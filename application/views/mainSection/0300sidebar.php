  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo site_url();?>" class="brand-link">
      <img src="<?php echo base_url();?>assets/adminlte302/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">สพท.สร.1 Bigdata</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url();?>assets/images/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">ชื่อผู้ดูแลระบบ</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <ul class="nav nav-treeview">

            <li class="nav-item">
                <a href="<?php echo site_url();?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>หน้าแรก</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo site_url([ "network", "index"]);?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>เครือข่าย</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo site_url([ "school", "index"]);?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>สถานศึกษา</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="<?php echo site_url([ "educationlevel", "index"]);?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ระดับการศึกษา</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo site_url(["personel", "index"]);?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i> 
                  <p>บุคลากร</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="<?php echo site_url(["academic_level", "index"]);?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i> 
                  <p>วิทยฐานะ</p>
                </a>
              </li>

            </ul>
          </li>
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
