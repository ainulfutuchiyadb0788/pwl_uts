<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table>
		<tr>
			<th>No</th>
    		<th>Kode Transaksi</th>
    		<th>ID Anggota</th>
    		<th>ID Buku</th>
    		<th>Tanggal Peminjaman Buku</th>
    		<th>Tanggal pengembalain Buku</th>
    		<th>Denda</th>
		</tr>


		<?php
		$no=1;
		foreach ($peminjaman as $pjm): ?>

		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $pjm->kode_transaksi ?></td>
			<td><?php echo $pjm->id_anggota ?></td>
			<td><?php echo $pjm->id_buku ?></td>
			<td><?php echo $pjm->tanggal_pinjam ?></td>
			<td><?php echo $pjm->tanggal_kembali ?></td>
			<td><?php echo $pjm->denda ?></td>
		</tr>

	<?php endforeach; ?>
	</table>

	<script type="text/javascript">
		window.print();
	</script>

</body>
</html>