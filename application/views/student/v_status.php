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
                <table class="table table-bordered table-responsive{-sm|-md|-lg|-xl}">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Email</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th><?=$pendaftaran['no_pendaftaran'] ?></th>
                            <td><?=$pendaftaran['nama_lengkap'] ?></td>
                            <td><?=$pendaftaran['email'] ?></td>
                            <td><?=$pendaftaran['nama_jurusan'] ?></td>
                            <td><?=$pendaftaran['status'] ?></td>
                        </tr>
                    </tbody>
                </table>
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

  