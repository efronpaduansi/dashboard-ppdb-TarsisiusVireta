<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?=$title; ?></h1>
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
              <div class="card-header">
                <p>SOAL</p>
                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">
                  Tambah Soal
                </button>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Soal</th>
                    <th>Bobot</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1; ?>
                    <?php foreach($soals as $s): ?>
                    <tr>
                       <td><?=$no; ?></td>
                       <td><?=$s['soal']; ?></td>
                       <td><?=$s['bobot']; ?></td>
                       <td>
                        <a href="<?=base_url('soal/delete/' . $s['id']) ?>" class="text-danger" onclick="return confirm('Yakin menghapus data ini?')">Hapus</a>
                       </td>
                    </tr>
                    <?php $no++; ?>
                    <?php endforeach; ?>
                  </tbody>
                </table>
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

  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header navbar-orange navbar-light">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Soal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('soal'); ?>" method="POST" class="needs-validation" novalidate>
            <div class="form-group">
                <label for="etSoal">Soal <small class="text-danger">*</small></label>
                <textarea name="etSoal" id="etSoal" cols="30" rows="4" class="form-control" required></textarea>
                <div class="invalid-feedback">
                    Field ini wajib di isi!
                </div>
            </div>
            <div class="form-group">
              <label for="etBobot">Bobot <small class="text-danger">*</small></label>
              <input type="number" name="etBobot" id="etBobot" class="form-control" required>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>    
        </form>
      </div>
    </div>
  </div>
</div>
 
