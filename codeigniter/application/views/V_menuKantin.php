<!DOCTYPE html>
<html>
<head>
	<title>Menu Kantin</title>
</head>
<body>
	<h1><?php echo $judul; ?></h1>
	<table border="1">
		<thead>
			<tr>
				<td>Nama Warung</td>
				<td>Menu</td>
				<td>Harga</td>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($menu as $key): ?>
				<tr>
					<td><?php echo $key->nama_warung;?></td>
					<td><?php echo $key->menu;?></td>
					<td><?php echo $key->harga;?></td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</body>
</html>