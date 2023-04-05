<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Formulir <?=$title; ?></h1>
            <small class="text-muted">Jawablah pertanyaan dibawah ini dengan baik dan benar!</small>
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
                <form action="<?=base_url('siswa/send-ujian') ?>" method="POST">
                    <div class="form-group">
                        <label for="etJawaban1">Soal pertama</label>
                        <textarea name="etJawaban1" id="etJawaban1" cols="30" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="etJawaban2">Soal Kedua</label>
                        <textarea name="etJawaban2" id="etJawaban2" cols="30" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="etJawaban2">Soal Ketiga</label>
                        <textarea name="etJawaban2" id="etJawaban2" cols="30" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="etJawaban2">Soal Keempat</label>
                        <textarea name="etJawaban2" id="etJawaban2" cols="30" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="etJawaban2">Soal Kelima</label>
                        <textarea name="etJawaban2" id="etJawaban2" cols="30" rows="3" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim Jawaban</button>
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

  