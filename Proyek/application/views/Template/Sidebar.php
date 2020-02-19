

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

  <!-- Sidebar -->

  <!-- End of Sidebar -->

  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

      <!-- Topbar -->
      <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('Admin') ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fa fa-home fa-lg" aria-hidden="true"></i>
        </div>
        <div class="sidebar-brand-text mx-3"><h4>Rumah</h4></div>
      </a>

        <!-- Topbar Search -->
      


        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

          <!-- Nav Item - Search Dropdown (Visible Only XS) -->
          <li class="nav-item dropdown no-arrow d-sm-none">
            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-search fa-fw"></i>
            </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
              <form class="form-inline mr-auto w-100 navbar-search">
                <div class="input-group">
                  <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                      <i class="fas fa-search fa-sm"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </li>

          <div class="navbar">
            <ul class="nav navbar-nav navbar-right ">
              <li>
                <?php 
                  $keranjang = ' <i class="fa fa-shopping-cart fa-lg" aria-hidden="true"></i> ' .$this->cart->total_items().
                  'items'
                ?>
                <?php echo anchor('Admin/detail_keranjang', $keranjang)  ?>
              </li>
              <li>
                 
              </a>
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