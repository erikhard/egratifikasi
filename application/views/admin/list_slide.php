
<table class="table table-hover" width="500px" height="50px">
<a href="<?=base_url()?>index.php/c_slide/insert_slide">Tambah data</a>
	<thead>
		<tr>
			<th>ID SLIDE</th>
			<th>NAMA</th>
			<th>GAMBAR</th>
			<th>TGL</th>
			<th>KET</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($admsli as $key) { ?>
		<tr>
			<td><?php echo $key['ID_SLIDE'] ?></td>
			<td><?php echo $key['NAMA'] ?></td>
			<td><?php echo $key['GAMBAR'] ?></td>
			<td><?php echo $key['TGL'] ?></td>
			<td><?php echo $key['KET'] ?></td>
			<td><a href="<?=base_url()?>index.php/c_slide/update/<?=$key['ID_SLIDE']?>">Edit</a></td>
			<td><a href="<?=base_url()?>index.php/c_slide/delete/<?=$key['ID_SLIDE']?>">Delete</a></td>
		</tr>
		<?php		} ?>
	</tbody>
</table>