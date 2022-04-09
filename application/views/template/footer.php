<footer class="footer bg-white shadow align-self-end py-3 px-xl-5 w-100">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 text-center text-md-left text-primary">
                <p class="mb-2 mb-md-0">Perpustakaan Online</p>
              </div>
              <div class="col-md-6 text-center text-md-right text-gray-400">
                <p class="mb-0">Design by <a href="https://bootstrapious.com/admin-templates" class="external text-gray-400">Bootstrapious</a></p>
                <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="<?= base_url()?>assets/bubbly/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url()?>assets/bubbly/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="<?= base_url()?>assets/bubbly/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url()?>assets/bubbly/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="<?= base_url()?>assets/bubbly/vendor/chart.js/Chart.min.js"></script>
    <script src="<?= base_url()?>assets/bubbly/https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <script src="<?= base_url()?>assets/bubbly/js/charts-home.js"></script>
    <script src="<?= base_url()?>assets/bubbly/js/front.js"></script>
    <script src="<?= base_url()?>assets/bubbly/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url()?>assets/bubbly/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugins -->
    <script src="<?= base_url()?>assets/bubbly/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url()?>assets/bubbly/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script>
    $(function () {
    $("#example1").table_users({
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
  </body>
</html>