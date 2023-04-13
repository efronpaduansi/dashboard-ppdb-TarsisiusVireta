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
                        <label for="jawaban"><?=$soal['soal'] ?></label>
                        <input type="hidden" name="soal_id" value="<?=$soal['id'] ?>">
                        <textarea name="jawaban" id="jawaban" cols="30" rows="3" class="form-control" placeholder="Jawaban Anda"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Lanjutkan</button>
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

  