<!-- Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Anda yakin keluar dari aplikasi?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-danger">Yakin</button>
      </div>
    </div>
  </div>
</div>

<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.1.0
    </div>
    <strong>Copyright &copy; <?=date('Y'); ?> <a href="<?=base_url('admin/dashboard'); ?>">e-PPDB SMA TARSISIUS VIRETA</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?=base_url('assets/'); ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url('assets/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?=base_url('assets/'); ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url('assets/'); ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?=base_url('assets/'); ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?=base_url('assets/'); ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?=base_url('assets/'); ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?=base_url('assets/'); ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?=base_url('assets/'); ?>plugins/jszip/jszip.min.js"></script>
<script src="<?=base_url('assets/'); ?>plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?=base_url('assets/'); ?>plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?=base_url('assets/'); ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?=base_url('assets/'); ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?=base_url('assets/'); ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url('assets/'); ?>dist/js/adminlte.min.js"></script>

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
</body>
</html>