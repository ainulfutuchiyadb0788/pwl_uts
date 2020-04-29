<div class="content-wrapper">
	<section class="content">
		<?php foreach ($peminjaman as $pjm) { ?>
		<form action="<?php echo base_url().'index.php/peminjaman/update'; ?>" method="post"> 

			<div class="form-group">
				<label>Kode Transaksi</label>
				<input type="hidden" name="kode_transaksi" class="form-control" value="<?php echo $pjm->kode_transaksi ?>">
				<input type="text" name="kode_transaksi" class="form-control" value="<?php echo $pjm->kode_transaksi ?>">
			</div>

			<div class="form-group">
				<label>ID Anggota</label>
				<input type="text" name="id_anggota" class="form-control" value="<?php echo $pjm->id_anggota ?>">
			</div>
			
			<div class="form-group">
				<label>ID Buku</label>
				<input type="text" name="id_buku" class="form-control" value="<?php echo $pjm->id_buku ?>">
			</div>

			<div class="form-group">
				<label>Tanggal Peminjaman Buku</label>
				<input type="text" name="tanggal_pinjam" class="form-control" value="<?php echo $pjm->tanggal_pinjam ?>">
			</div>

			<div class="form-group">
				<label>Tanggal Pengembalian Buku</label>
				<input type="text" name="tanggal_kembali" class="form-control" value="<?php echo $pjm->tanggal_kembali ?>">
			</div>

			<div class="form-group">
				<label>Denda</label>
				<input type="text" name="denda" class="form-control" value="<?php echo $pjm->denda ?>">
			</div>

			<button type="reset" class="btn btn-danger">Reset </button>
			<button type="submit" class="btn btn-primary">Save</button>


		</form>
		<?php } ?>       
	</section>
	
</div>