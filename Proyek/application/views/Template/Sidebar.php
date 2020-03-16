

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('Admin/index') ?>">
      <div class="sidebar-brand-icon rotate-n-15">
      <i class="fa fa-home" aria-hidden="true"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Rumah</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
<br>
    <div class="sidebar-heading">
      Kategori
    </div>
   
    <!-- Nav Item - Tables -->
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('kategori/sofa') ?>">
        <i class="fas fa-couch"></i>
        <span>Sofa</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('kategori/kursi') ?>">
        <i class="fas fa-chair"></i>
        <span>Kursi</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('kategori/meja') ?>">
        <i class="fas fa-fw fa-table"></i>
        <span>Meja</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>
  <!-- End of Sidebar -->

  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

      <!-- Topbar -->
      <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
          <i class="fa fa-bars"></i>
        </button>

        <!-- Topbar Search -->
        <?php echo form_open('admin/search') ?>
          <form method="post" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
              <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" name="keyword" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>
          <?php echo form_close() ?>

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">



          <div class="topbar-divider d-none d-sm-block"></div>

          <div class="navbar">
            <ul class="nav navbar-nav navbar-right ">
              <li>
                <?php 
                  $keranjang = ' <i class="fa fa-shopping-cart fa-lg" aria-hidden="true"></i> ' .$this->cart->total_items()
                ?>
                <?php echo anchor('Admin/detail_keranjang', $keranjang)  ?>
              </li>
            </ul>
          </div>

          <div class="topbar-divider d-none d-sm-block"></div>
          <div class="navbar">
            <ul class="nav navbar-nav navbar-right ">
              <li>
                <a class="nav-link" href="<?php echo base_url('History/index') ?>">
                <i class="fas fa-user"></i></a>
              </li>
            </ul>
          </div>

          
          <div class="topbar-divider d-none d-sm-block"></div>

          <!-- Nav Item - User Information -->
          <ul class="na navbar-nav navbar-right">
            <?php  if($this->session->userdata('username')) { ?>
              <li><div><?php echo $this->session->userdata(' username ') ?></div></li>
              <li><?php echo anchor('auth/logout','<div class="btn btn-sm btn-danger">Logout</div>'); ?></li>
            <?php } else { ?>
              <li><?php echo anchor('auth/logout', ' <div class="btn btn-sm btn-success">Login</div>');?></li>
            <?php  } ?>
          </ul>
        </ul>
 

      </nav>
      <!-- End of Topbar -->