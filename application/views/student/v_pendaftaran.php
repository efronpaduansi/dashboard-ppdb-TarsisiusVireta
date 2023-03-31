<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Formulir Pendaftaran</h1>
            <small class="text-muted">Silahkan isi data diri anda dibawah ini dengan benar!</small>
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
                <form action="<?=base_url('siswa/send-pendaftaran') ?>" method="POST">
                    <div class="form-group">
                        <label for="jurusan_id">Pilih Jurusan</label>
                        <select name="jurusan_id" class="form-control" required>
                            <option value="">-- Pilih Jurusan --</option>
                            <?php foreach($jurusan as $j): ?>
                                <option value="<?=$j->id ?>"><?=$j->nama_jurusan ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" class="form-control" autofocus required>
                    </div>
                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="tgl_lahir">Tgl Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" required>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="agama">Agama</label>
                        <select name="agama" class="form-control" required>
                            <option value="Islam">Islam</option>
                            <option value="Khatolik">Khatolik</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="no_hp">No HP/WA</label>
                        <input type="number" name="no_hp" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Aktif</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" cols="30" rows="2" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="nm_ibu">Nama Ibu Kandung</label>
                        <input type="text" name="nm_ibu" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="pekerjaan_orangtua">Pekerjaan Orangtua</label>
                        <select name="pekerjaan_orangtua" class="form-control" required>
                            <option value="Buruh">Buruh</option>
                            <option value="Karyawan Swasta">Karyawan Swasta</option>
                            <option value="PNS">PNS</option>
                            <option value="Petani">Petani</option>
                            <option value="Nelayan">Nelayan</option>
                            <option value="TNI/POLRI">TNI/POLRI</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sekolah_asal">Sekolah Asal</label>
                        <input type="text" name="sekolah_asal" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="thn_lulus">Tahun Lulus</label>
                        <input type="nunber" name="thn_lulus" class="form-control" required>
                    </div>
                    <div class="tombol">
                        <button type="submit" class="btn btn-block btn-primary">Kirim</button>
                    </div>
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

  