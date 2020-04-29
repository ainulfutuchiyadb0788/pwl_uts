<div class="content-wrapper">
	<section class="content">
		<?php foreach ($anggota as $agt) { ?>
		<form action="<?php echo base_url().'index.php/anggota/update'; ?>" method="post"> 

			<div class="form-group">
				<label>ID Anggota</label>
				<input type="hidden" name="id_anggota" class="form-control" value="<?php echo $agt->id_anggota ?>">
				<input type="text" name="id_anggota" class="form-control" value="<?php echo $agt->id_anggota ?>">
			</div>

			<div class="form-group">
				<label>Nama Anggota</label>
				<input type="text" name="nama_anggota" class="form-control" value="<?php echo $agt->nama_anggota ?>">
			</div>
			
			<div class="form-group">
				<label>Alamat</label>
				<input type="text" name="alamat" class="form-control" value="<?php echo $agt->alamat ?>">
			</div>

			<div class="form-group">
				<label>No Telepon</label>
				<input type="text" name="no_telepon" class="form-control" value="<?php echo $agt->no_telepon ?>">
			</div>

			<div class="form-group">
				<label>Program Studi</label>
				<select class="form-control" name="prodi" value="<?php echo $agt->prodi ?>">
                        <option> Teknik Informatika </option>
                        <option> Teknik Sipil </option>
                        <option> Teknik Industri </option>
                        <option> Teknik Elektro </option>
                        <option> Sistem Informasi </option>
                        <option> Desain Komunikasi Visual </option>
                        <option> Desain Produk </option>
                        <option> Budidaya Perairan </option>
                    </select>
			</div>

			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" class="form-control" value="<?php echo $agt->email ?>">
			</div>

			<button type="reset" class="btn btn-danger">Reset </button>
			<button type="submit" class="btn btn-primary">Save</button>


		</form>
		<?php } ?>       
	</section>
	
</div>