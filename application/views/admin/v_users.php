<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Users</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Button trigger modal -->
        <!-- <button type="button" class="btn btn-primary my-2" data-toggle="modal" data-target="#exampleModal">
            Tambah baru
        </button>    -->
        <div class="row">
          <div class="col-12">
            <?=$this->session->flashdata('pesan'); ?>
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>AKSI</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                        $no = 1;
                        foreach($users as $u) :
                      ?>
                    <tr>

                      <th><?=$no; ?></th>
                      <td><?=$u->name; ?></td>
                      <td><?=$u->email; ?></td>
                      <td>
                          <a href="<?=base_url('admin/users/destroy/') . $u->id; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin menghapus data ini?')">Delete</a>
                      </td>
                    </tr>

                    <?php $no++;

                      endforeach;

                     ?>
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
            <h5 class="modal-title" id="exampleModalLabel">Tambah jurusan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="<?=base_url('admin/jurusan/store'); ?>" method="POST" class="needs-validation" novalidate>
                <div class="form-group">
                    <label for="nm_jurusan">Jurusan <small class="text-danger">*</small></label>
                    <input type="text" class="form-control" name="nm_jurusan" id="nm_jurusan" required>
                    <div class="invalid-feedback">
                        Field ini wajib di isi!
                    </div>
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
 
