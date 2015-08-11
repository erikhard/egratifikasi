<table border="0" class="tablesorter" cellspacing="0">
	<thead>
		<tr>
			<th>NO</th>	
			<th>JENIS DOKUMEN</th>	
			<th>OPTION</th>	
		</tr>
	</thead> 
	<tbody>
	<?php
	
	foreach ( $datatamps as $datatamp) {
		echo "
			<tr>
				<td>1</td>
				<td> $datatamp[NM_BERKAS] </td>
				<td>Hapus</td>
			</tr>
		";															  
	} 
	?>
	 </tbody>
</table>
																		  