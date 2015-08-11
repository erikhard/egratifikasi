<table class="table table-hover">
<a href="<?=base_url()?>index.php/c_crud/insert">Tambah data</a>
	<thead>
		<tr>
			<th>Username</th>
			<th>Password</th>
			<th>Status</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($user as $key) { ?>
		<tr>
			<td><?php echo $key['USERNAME'] ?></td>
			<td><?php echo $key['PASSWORD'] ?></td>
			<td><?php echo $key['STATUS'] ?></td>
			<td><a href="<?=base_url()?>index.php/c_crud/update/<?=$key['USERNAME']?>">Edit</a></td>
		</tr>
		<?php		} ?>
	</tbody>
</table>