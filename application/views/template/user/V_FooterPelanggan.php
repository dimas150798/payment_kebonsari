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

<!-- Loading Infly -->
<script src="<?php echo base_url(); ?>assets/js/loadingInfly.js"></script>

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

<!-- Alert Tambah Data Pelanggan -->
<script>
	<?php if ($this->session->flashdata('Tambah_icon')) { ?>
		var toastMixin = Swal.mixin({
			toast: true,
			icon: '<?php echo $this->session->flashdata('Tambah_icon') ?>',
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
			title: '<?php echo $this->session->flashdata('Tambah_title') ?>'
		});

	<?php } ?>
</script>

<!-- Alert Tambah Data Termiasi-->
<script>
	<?php if ($this->session->flashdata('Terminasi_icon')) { ?>
		var toastMixin = Swal.mixin({
			toast: true,
			icon: '<?php echo $this->session->flashdata('Terminasi_icon') ?>',
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
			title: '<?php echo $this->session->flashdata('Terminasi_title') ?>'
		});

	<?php } ?>
</script>

<!-- Alert Edit Data -->
<script>
	<?php if ($this->session->flashdata('Edit_icon')) { ?>
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
			title: '<?php echo $this->session->flashdata('Edit_title') ?>'
		});

	<?php } ?>
</script>

<!-- Alert Delete Data -->
<script>
	<?php if ($this->session->flashdata('Delete_icon')) { ?>
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
			title: '<?php echo $this->session->flashdata('Delete_title') ?>'
		});

	<?php } ?>
</script>

<!-- Alert Duplicate Name (Tambah Data) -->
<script>
	<?php if ($this->session->flashdata('DuplicateName_icon')) { ?>
		Swal.fire(
			"<?php echo $this->session->flashdata('DuplicateName_title') ?>",
			"<?php echo $this->session->flashdata('DuplicateName_text') ?>",
			"<?php echo $this->session->flashdata('DuplicateName_icon') ?>");
	<?php } ?>
</script>

<!-- Ajax Show Data Pelanggan -->
<script>
	$(document).ready(function() {
		$('#mytable').DataTable({
			"autoFill": true,
			"pagingType": 'numbers',
			"searching": true,
			"paging": true,
			"stateSave": true,
			"processing": true,
			"serverside": true,
			"ajax": {
				"url": "<?= base_url('user/DataArea/C_DP_Pelanggan/GetDataAjax'); ?>",
			},
		})
	})
</script>

<!-- Delete Data DP Pelanggan -->
<script>
	function DeleteDPPelanggan(parameter_id) {
		Swal.fire({
			title: 'Yakin Melakukan Delete Data ?',
			text: "Data yang dihapus tidak akan kembali",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Ya, Hapus Data!'
		}).then((result) => {
			if (result.isConfirmed) {
				window.location.href = "<?php echo site_url('admin/DataPelanggan/C_DeletePelanggan/DeletePelanggan') ?>/" + parameter_id;
			}
		})
	}
</script>

<!-- Edit Data DP Pelanggan -->
<script>
	function EditDataDPPelanggan(parameter_id) {
		Swal.fire({
			title: 'Yakin Melakukan Edit Data ?',
			text: "Data yang diedit tidak akan kembali",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Ya, Edit Data!'
		}).then((result) => {
			if (result.isConfirmed) {
				window.location.href = "<?php echo site_url('user/DataArea/C_Edit_Pelanggan/EditPelanggan') ?>/" + parameter_id;
			}
		})
	}
</script>

<!-- Terminated Data Pelanggan -->
<script>
	function TerminatedPelanggan(parameter_id) {
		Swal.fire({
			title: 'Yakin Melakukan Terminated Pelanggan ?',
			text: "Apabila Yakin Tekan Button Ya",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Ya, Terminated!'
		}).then((result) => {
			if (result.isConfirmed) {
				window.location.href = "<?php echo site_url('admin/DataPelanggan/C_TambahTerminated/TerminatedPelanggan') ?>/" + parameter_id;
			}
		})
	}
</script>

<!-- Alert Insert Data Excel Berhasil -->
<script>
	<?php if ($this->session->flashdata('ExcelSuccess_icon')) { ?>
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
			title: '<?php echo $this->session->flashdata('ExcelSuccess_title') ?>'
		});

	<?php } ?>
</script>

<!-- Alert Insert Data Excel Gagal -->
<script>
	<?php if ($this->session->flashdata('ExcelGagal_icon')) { ?>
		var toastMixin = Swal.mixin({
			toast: true,
			icon: 'warning',
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
			title: '<?php echo $this->session->flashdata('ExcelGagal_title') ?>'
		});

	<?php } ?>
</script>

<script>
	$(document).ready(function() {

		// Home 10 Select Kecamatan
		$('#kotaHome10').on('change', function() {
			var id_kota = $(this).val();

			if (id_kota == '') {
				$('#kecamatanHome10').prop('disabled', true);
			} else {
				$('#kecamatanHome10').prop('disabled', false);
				$.ajax({
					url: "<?php echo base_url('C_Home_10/getKecamatan') ?>",
					type: "POST",
					data: {
						'id_kota': id_kota
					},
					dataType: 'json',
					success: function(data) {
						$('#kecamatanHome10').html(data);
					},
					error: function() {
						alert('Error..');
					}

				});
			}
		});
	});
</script>

</body>

</html>