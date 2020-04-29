<div class="content-wrapper">
	<section class="content">
		<?php foreach ($buku as $bk) { ?>
		<form action="<?php echo base_url().'index.php/buku/update'; ?>" method="post"> 

			<div class="form-group">
				<label>ID Buku</label>
				<input type="hidden" name="id_buku" class="form-control" value="<?php echo $bk->id_buku ?>">
				<input type="text" name="id_buku" class="form-control" value="<?php echo $bk->id_buku ?>">
			</div>

			<div class="form-group">
				<label>Nama Judul Buku</label>
				<input type="text" name="judul_buku" class="form-control" value="<?php echo $bk->judul_buku ?>">
			</div>
			
			<div class="form-group">
				<label>ID Penerbit</label>
				<input type="text" name="id_penerbit" class="form-control" value="<?php echo $bk->id_penerbit ?>">
			</div>

			<div class="form-group">
				<label>ID Pengarang</label>
				<input type="text" name="id_pengarang" class="form-control" value="<?php echo $bk->id_pengarang ?>">
			</div>

			<div class="form-group">
				<label>Tahun Buku</label>
				<input type="text" name="tahun_buku" class="form-control" value="<?php echo $bk->tahun_buku ?>">
			</div>

			<div class="form-group">
				<label>Jumlah Buku</label>
				<input type="text" name="jumlah_buku" class="form-control" value="<?php echo $bk->jumlah_buku ?>">
			</div>


			<div class="form-group">
				<label>Tanggal Penggadaan Buku</label>
				<input type="text" name="tanggal_pengadaan" class="form-control" value="<?php echo $bk->tanggal_pengadaan ?>">
			</div>

			<button type="reset" class="btn btn-danger">Reset </button>
			<button type="submit" class="btn btn-primary">Save</button>


		</form>
		<?php } ?>       
	</section>
	
</div>