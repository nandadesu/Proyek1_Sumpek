

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-6 my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" method="post" action="<?php echo base_url('registrasi/index') ?>">
                <div class="form-group">
                  <input name="nama" type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Nama">
                    <?php echo form_error('nama','<div class="text-danger small ">','</div>') ?>
                </div>
                <div class="form-group">
                  <input  name="username" type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Username">
                  <?php echo form_error('username','<div class="text-danger small ">','</div>') ?>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input name="password_1" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                  </div>
                  <div class="col-sm-6">
                    <input name="password_2" type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">Register</button>
                <hr>
              <div class="text-center">
                <a class="small" href="<?php echo base_url('auth/login') ?>">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</body>

</html>
