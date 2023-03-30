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
      <?=$this->session->flashdata('pesan'); ?>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <!-- <h3 class="card-title">DataTable with default features</h3> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nama Lengkap</th>
                      <th>TTL</th>
                      <th>Jenis Kelamin</th>
                      <th>Agama</th>
                      <th>Handphone</th>
                      <th>Sekolah Asal</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($pendaftaran as $p) : ?>
                    <tr>
                      <td><?=$p['id'] ?></td>
                      <td><a href="#" data-toggle="modal" data-target="#showModal<?=$p['id'] ?>"><?=$p['nama_lengkap'] ?></a></td>
                      <!-- Modal -->
                        <div class="modal fade" id="showModal<?=$p['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">#<?=$p['id'] . "-" . $p['nama_lengkap'] ?></h5>
                                <h5 class="ml-auto text-danger">
                                  <form action="<?=base_url('data-pendaftaran/hapus') ?>" method="POST">
                                    <input type="hidden" name="id" value="<?=$p['id'] ?>">
                                    <button type="submit" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="bottom" title="Hapus peserta" onclick="return confirm('Anda yakin menghapus peserta ini?')"><i class="fas fa-trash"></i></button>
                                  </form>
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                  <p>Nama Lengkap : <span class="font-weight-bold"><?=$p['nama_lengkap'] ?></span></p>
                                  <p>Tempat Tgl Lahir : <span class="font-weight-bold"><?=$p['tempat_lahir'] . ", " . date('d M Y', strtotime($p['tgl_lahir'])) ?></span></p>
                                  <p>Jenis Kelamin : <span class="font-weight-bold"><?=$p['jenis_kelamin'] ?></span></p>
                                  <p>Agama : <span class="font-weight-bold"><?=$p['agama'] ?></span></p>
                                  <p>No. HP : <span class="font-weight-bold"><?=$p['no_hp'] ?></span></p>
                                  <p>Alamat : <span class="font-weight-bold"><?=$p['alamat'] ?></span></p>
                                  <p>Nama Ibu Kandung : <span class="font-weight-bold"><?=$p['nm_ibu'] ?></span></p>
                                  <p>Pekerjaan Orangtua : <span class="font-weight-bold"><?=$p['pekerjaan_orangtua'] ?></span></p>
                                  <p>Sekolah Asal : <span class="font-weight-bold"><?=$p['sekolah_asal'] ?></span></p>
                                  <p>Tahun Lulus : <span class="font-weight-bold"><?=$p['thn_lulus'] ?></span></p>
                              </div>
                              <div class="modal-footer">
                                <a href="<?=base_url('data-pendaftaran/tolak/') . $p['id'] ?>" class="btn btn-danger" onclick="return confirm('Tolak peserta ini?')">Tolak</a>
                                <a href="<?=base_url('data-pendaftaran/terima/') . $p['id'] ?>" class="btn btn-success" onclick="return confirm('Terima peserta ini?')">Terima</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      <td><?=$p['tempat_lahir'] . ", " . date('d M Y', strtotime($p['tgl_lahir'])) ?></td>
                      <td><?=$p['jenis_kelamin'] ?></td>
                      <td><?=$p['agama'] ?></td>
                      <td><?=$p['no_hp'] ?></td>
                      <td><?=$p['sekolah_asal'] ?></td>
                      <td>
                        <?php if($p['status'] == "Menunggu Verifikasi") : ?>
                            <span class="badge badge-warning"><?=$p['status'] ?></span>
                        <?php elseif($p['status'] == "Diterima") : ?>
                            <span class="badge badge-success"><?=$p['status'] ?></span>
                        <?php else : ?>
                            <span class="badge badge-danger"><?=$p['status'] ?></span>
                        <?php endif ?>
                      </td>
                    </tr>
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
 
