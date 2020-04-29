<div class="content-wrapper">
	<section class="content">
		<?php foreach ($penerbit as $pnb) { ?>
		<form action="<?php echo base_url().'index.php/penerbit/update'; ?>" method="post"> 

			<div class="form-group">
				<label>ID Penerbit</label>
				<input type="hidden" name="id_penerbit" class="form-control" value="<?php echo $pnb->id_penerbit ?>">
				<input type="text" name="id_penerbit" class="form-control" value="<?php echo $pnb->id_penerbit ?>">
			</div>

			<div class="form-group">
				<label>Nama Penerbit</label>
				<input type="text" name="nama_penerbit" class="form-control" value="<?php echo $pnb->nama_penerbit ?>">
			</div>
			
			<div class="form-group">
				<label>Alamat</label>
				<input type="text" name="alamat" class="form-control" value="<?php echo $pnb->alamat ?>">
			</div>

			<div class="form-group">
				<label>No Telepon</label>
				<input type="text" name="no_telepon" class="form-control" value="<?php echo $pnb->no_telepon ?>">
			</div>

			<button type="reset" class="btn btn-danger">Reset </button>
			<button type="submit" class="btn btn-primary">Save</button>


		</form>
		<?php } ?>       
	</section>
	
</div>