<?php echo form_open('home/proses_update'); ?>
<input name="id" type="hidden" value="<?php echo $barang->id; ?>">
Nama<input name="nama" value="<?php echo $barang->nama; ?>">
Harga<input name="harga" value="<?php echo $barang->harga; ?>">
Stok<input name="stok" value="<?php echo $barang->stok; ?>">
<button type="submit">Update</button>

<?php echo form_close(); ?>