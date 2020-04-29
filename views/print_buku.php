<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table>
		<tr>
			<th>No</th>
    		<th>ID Buku</th>
    		<th>Nama Judul Buku</th>
    		<th>ID Penerbit</th>
    		<th>ID Pengarang</th>
    		<th>Tahun Buku</th>
    		<th>Jumlah Buku</th>
    		<th>Tanggal Penggadaan Buku</th>
		</tr>


		<?php
		$no=1;
		foreach ($buku as $bk): ?>

		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $bk->id_buku ?></td>
			<td><?php echo $bk->judul_buku ?></td>
			<td><?php echo $bk->id_penerbit ?></td>
			<td><?php echo $bk->id_pengarang ?></td>
			<td><?php echo $bk->tahun_buku ?></td>
			<td><?php echo $bk->jumlah_buku ?></td>
			<td><?php echo $bk->tanggal_pengadaan ?></td>
		</tr>

	<?php endforeach; ?>
	</table>

	<script type="text/javascript">
		window.print();
	</script>

</body>
</html>