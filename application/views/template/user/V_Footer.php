<footer class="py-4 bg-light mt-auto" id="footer">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-center small">
            <div>Copyright &copy; My Infly Networks 2022</div>
        </div>
    </div>
</footer>
</div>
</div>

<!-- JS dataTables -->
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.13.1/af-2.5.1/r-2.4.0/datatables.min.js">
</script>

<!-- JS Website -->
<script src="<?php echo base_url(); ?>assets/js/select2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>

<!-- Sweet Alert -->
<script src="<?php echo base_url(); ?>vendor/SweetAlert2/sweetalert2.all.min.js"></script>

<!-- Button Pencarian -->
<script src="<?php echo base_url(); ?>assets/js/buttonPencarian.js"></script>

<!-- DataTables -->
<script src="<?php echo base_url(); ?>assets/js/desaignTables.js"></script>

<script>
    // Tambahkan fungsi JavaScript untuk mengosongkan pilihan
    function clearSelection() {
        document.getElementById('nama_dp').selectedIndex = 0; // Setel indeks pilihan ke 0 (kosong)
    }
</script>

<!-- Alert Login -->
<script>
    <?php if ($this->session->flashdata('LoginBerhasil_icon')) { ?>
        var toastMixin = Swal.mixin({
            toast: true,
            icon: 'success',
            title: 'General Title',
            animation: false,
            position: 'top-right',
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });

        toastMixin.fire({
            animation: true,
            title: '<?php echo $this->session->flashdata('LoginBerhasil_title') ?>'
        });

    <?php } ?>
</script>

<!-- Ajax Logout -->
<script>
    function LogOut() {
        Swal.fire({
            title: 'Yakin Anda Ingin Logout ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Logout!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "<?php echo site_url('C_FormLogin/logout') ?>";
            }
        })
    }
</script>

</body>

</html>