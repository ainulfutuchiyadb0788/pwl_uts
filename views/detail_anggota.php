<div class="content-wrapper">
	<section class="content">
		<h4><strong>Detail Data Anggota Mahasiswa</strong></h4>

		<table class="table">
			<tr>
				<th>ID Anggota</th>
				<td><?php echo $detail_anggota->id_anggota ?></td>
			</tr>
			<tr>
				<th>Nama Anggota</th>
				<td><?php echo $detail_anggota->nama_anggota ?></td>
			</tr>
			<tr>
				<th>Alamat</th>
				<td><?php echo $detail_anggota->alamat ?></td>
			</tr>
			<tr>
				<th>No Telepon</th>
				<td><?php echo $detail_anggota->no_telepon ?></td>
			</tr>
			<tr>
				<th>Program Studi</th>
				<td><?php echo $detail_anggota->prodi ?></td>
			</tr>
			<tr>
				<th>Email</th> 
				<td><?php echo $detail_anggota->email ?></td>
			</tr>
		
		</table>
		
	</section>
	
</div>