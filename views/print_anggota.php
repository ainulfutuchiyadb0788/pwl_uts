<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table>
		<tr>
			<th>No</th>
    		<th>ID Anggota</th>
    		<th>Nama Anggota</th>
    		<th>Alamat</th>
    		<th>No Telepon</th>
    		<th>Program Studi</th>
    		<th>Email</th>
		</tr>


		<?php
		$no=1;
		foreach ($anggota as $agt): ?>

		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $agt->id_anggota ?></td>
			<td><?php echo $agt->nama_anggota ?></td>
			<td><?php echo $agt->alamat ?></td>
			<td><?php echo $agt->no_telepon ?></td>
			<td><?php echo $agt->prodi ?></td>
			<td><?php echo $agt->email ?></td>
		</tr>

	<?php endforeach; ?>
	</table>

	<script type="text/javascript">
		window.print();
	</script>

</body>
</html>