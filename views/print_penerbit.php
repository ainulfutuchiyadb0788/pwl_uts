print_penerbit<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table>
		<tr>
			<th>No</th>
    		<th>ID Penerbit</th>
    		<th>Nama Penerbit</th>
    		<th>Alamat</th>
    		<th>No Telepon</th>
		</tr>


		<?php
		$no=1;
		foreach ($penerbit as $pnb): ?>

		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $pnb->id_penerbit ?></td>
			<td><?php echo $pnb->nama_penerbit ?></td>
			<td><?php echo $pnb->alamat ?></td>
			<td><?php echo $pnb->no_telepon ?></td>
		</tr>

	<?php endforeach; ?>
	</table>

	<script type="text/javascript">
		window.print();
	</script>

</body>
</html>