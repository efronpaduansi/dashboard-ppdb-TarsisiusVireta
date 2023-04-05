 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>My Profile</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?=base_url('assets/'); ?>dist/img/user4-128x128.jpg"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">
                  <?php echo $user['name']; ?>
                </h3>

                <p class="text-muted text-center">
                  <?php echo $user['level']; ?>
                </p>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab"><i class="fas fa-key"></i> Ubah Kata Sandi</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="settings">
                    <form class="form-horizontal" action="<?=base_url('my-profile/pass-changer') ?>" method="POST">
                      <div class="form-group row">
                        <label for="oldPass" class="col-sm-3 col-form-label">Password Lama</label>
                        <div class="col-sm-9">
                          <input type="password" class="form-control" id="oldPass" name="oldPass" placeholder="*****" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="newPass" class="col-sm-3 col-form-label">Password Baru</label>
                        <div class="col-sm-9">
                          <input type="password" class="form-control" id="newPass" name="newPass" placeholder="*****" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="newPassConf" class="col-sm-3 col-form-label">Konfirmasi Password Baru</label>
                        <div class="col-sm-9">
                          <input type="password" class="form-control" id="newPassConf" name="newPassConf" placeholder="*****" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-3 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper --