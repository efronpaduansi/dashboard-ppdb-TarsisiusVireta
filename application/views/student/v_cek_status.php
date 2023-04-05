<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cek Status Pendaftaran</h1>
            <small class="text-muted">Silahkan masukan nomor pendaftaran anda!</small>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <?=$this->session->flashdata('pesan'); ?>
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <form action="<?=base_url('siswa/status-check') ?>" method="POST">
                    <div class="form-group">
                        <label for="etNomor">Nomor Pendaftaran</label>
                        <input type="number" class="form-control" name="etNomor" placeholder="No. Pendaftaran" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Cek Status</button>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  