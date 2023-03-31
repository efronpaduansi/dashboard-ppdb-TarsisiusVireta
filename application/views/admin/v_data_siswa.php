<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data <?=$title; ?></h1>
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
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama Lengkap</th>
                    <th>TTL</th>
                    <th>Jenis Kelamin</th>
                    <th>Telp.</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                        $no = 1;
                        foreach($siswas as $siswa) :
                      ?>
                    <tr>
                      <th><?=$no; ?></th>
                      <td><?=$siswa['nama_lengkap']?></td>
                      <td><?=$siswa['tempat_lahir'] . ", " . date('d M Y', strtotime($siswa['tgl_lahir']))?></td>
                      <td><?=$siswa['jenis_kelamin'] ?></td>
                      <td><?=$siswa['no_hp'] ?></td>
                      <td><?=$siswa['email'] ?></td>
                      <td><?=$siswa['alamat'] ?></td>
                      <td>
                        <span class="text-success">Aktif</span>
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

 
 
