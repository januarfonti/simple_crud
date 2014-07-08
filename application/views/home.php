<table border="1">
<tr>
	<th>No</th>
	<th>Nama</th>
	<th>Harga</th>
	<th>Stok</th>
	<th>Update</th>
	<th>Delete</th>
</tr>
<?php $nomer=1; ?>
<?php foreach ($barang as $row) { ?>
<tr>
	<td><?php echo $nomer; ?></td>
	<td><?php echo $row->nama; ?></td>
	<td><?php echo $row->harga; ?></td>
	<td><?php echo $row->stok; ?></td>
	<td><a href="<?php echo base_url(); ?>index.php/home/update/<?php echo $row->id; ?>">Update</a></td>
	<td><a href="<?php echo base_url(); ?>index.php/home/delete/<?php echo $row->id; ?>">Delete</a></td>
</tr>
<?php $nomer++; } ?>
</table>
<a href="<?php echo base_url('index.php/home/insert'); ?>">Tambah Barang</a>