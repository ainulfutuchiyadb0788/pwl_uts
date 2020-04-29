<div class="content-wrapper">
	<section class="content">
		<h4><strong>Detail Data Anggota Peminjaman Buku Mahasiswa</strong></h4>

		<table class="table">
			<tr>
				<th>Kode Transaksi</th>
				<td><?php echo $detail_peminjaman->kode_transaksi ?></td>
			</tr>
			<tr>
				<th>ID Anggota</th>
				<td><?php echo $detail_peminjaman->id_anggota ?></td>
			</tr>
			<tr>
				<th>ID Buku</th>
				<td><?php echo $detail_peminjaman->id_buku ?></td>
			</tr>
			<tr>
				<th>Tanggal Peminjaman Buku</th>
				<td><?php echo $detail_peminjaman->tanggal_pinjam ?></td>
			</tr>
			<tr>
				<th>Tanggal Pengembalian Buku</th>
				<td><?php echo $detail_peminjaman->tanggal_kembali ?></td>
			</tr>
			<tr>
				<th>Denda</th> 
				<td><?php echo $detail_peminjaman->denda ?></td>
			</tr>
		
		</table>
		
	</section>
	
</div>