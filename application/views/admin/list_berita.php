
<table class="table table-hover" width="500px" height="50px">
<a href="<?=base_url()?>index.php/c_berita/insert_berita">Tambah data</a>
	<thead>
		<tr>
			<th>ID BERITA</th>
			<th>JUDUL</th>
			<th>BERITA</th>
			<th>PIC</th>
			<th>TGL</th>
			<th>KET</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($admnews as $key) { ?>
		<tr>
			<td><?php echo $key['ID_BERITA'] ?></td>
			<td><?php echo $key['JUDUL'] ?></td>
			<td><?php echo $key['BERITA'] ?></td>
			<td><?php echo $key['PIC'] ?></td>
			<td><?php echo $key['TGL'] ?></td>
			<td><?php echo $key['KET'] ?></td>
			<td><a href="<?=base_url()?>index.php/c_berita/update/<?=$key['ID_BERITA']?>">Edit</a></td>
			<td><a href="<?=base_url()?>index.php/c_berita/delete/<?=$key['ID_BERITA']?>">Delete</a></td>
		</tr>
		<?php		} ?>
	</tbody>
</table>