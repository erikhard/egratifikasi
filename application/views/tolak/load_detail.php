<table class="table table-striped table-bordered bootstrap-datatable" style="width:60%">
														  <thead>
															  <tr>
																  <th>NO.</th>
																  <th>JENIS DOKUMEN</th>
																  <th>OPTION</th>
																  
															  </tr>
														  </thead>   
														  <tbody>
															<tr>
																  <td>1</td>
																  <td>Surat Tugas/Surat Perintah Perjalanan Dinas</td>
																  <td>Hapus</td>
																 
															  </tr>
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
														  