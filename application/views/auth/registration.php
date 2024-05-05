
<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-col-lg-7 col-md-4">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">registrasi page</h1>
                            </div>
      <form class="user" method="post" action="<?=base_url('auth/Registration'); ?>">
        <div class="input-group mb-3">
          <input type="text" class="form-control user" id="name" name="name" placeholder="full name" value="<?= set_value('name'); ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <?= form_error('name','<small class="text-danger pl-3">', '</small>'); ?>
        <div class="input-group mb-3">
        <input type="text" class="form-control" name="email" id="email" placeholder="email addres" value="<?= set_value ('email');?> ">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <?= form_error('email','<small class="text-danger pl-3">', '</small>'); ?>
        <div class="input-group mb-3">
          <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <?= form_error('password1','<small class="text-danger pl-3">', '</small>'); ?>
        <div class="input-group mb-3">
          <input type="password" class="form-control" id="password2" name="password2" placeholder="Retype password" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-sm">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
