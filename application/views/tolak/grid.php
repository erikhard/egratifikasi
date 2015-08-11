
<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="#">Pelaporan</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="<?php echo base_url().'index.php/tolak'; ?>">Penolakan</a></li>
</ul>
<a href=".<?php  base_url(); ?>./index.php/tolak/add" class='btn btn-success'>Tambah Laporan Penolakan</a>
<br>
<br>

<div class="row-fluid sortable">		
				<div class="box span12">
					
					
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white comments"></i><span class="break"></span>Laporan Penolakan</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<!--<table id="tbltolak" class="table table-bordered">-->
						<table id="tbltolak" class="table table-striped table-bordered bootstrap-datatable datatable">
							<thead>
								<tr>
									<th width="5%">NO.</th>
									<th width="15%">NIP</th>
									<th width="20%">NAMA</th>
									<th width="10%">TGL INPUT</th>
									<th width="10%">TGL TERIMA</th>
									<th width="10%">JNS GRATIFIKASI</th>
									<th width="10%">STATUS</th>
									<th width="15%">OPTION</th>
								</tr>
							</thead>
							<tbody>
								
								<?php
								$no = 1;
								 foreach ( $dttolaks as $dttolak )
								 { 
									$id = $dttolak['ID_TOLAK'];
									$status = $dttolak['APPROVAL'];
									$status = "<span class='label label-warning'>Proses</span>"; 
									if (  $dttolak['APPROVAL'] == '1' )
									{ $status = "<span class='label label-success'>Disetujui</span>"; }
									else if (  $dttolak['APPROVAL'] == '2' )
									{	$status = "<span class='label label-important'>Tidak disetujui</span>";  }
								
									 echo "
									<tr align='left'>
										<td>$no</td>
										<td>".$dttolak['EMP_NAMA']."</td>
										<td>".$dttolak['EMP_NIP']."</td>
										<td>".$dttolak['TGL_INPUT_1']."</td>
										<td>".$dttolak['WAKTU_TOLAK_TGL_1']."</td>
										<td>".$dttolak['JNS_GRAT']."</td>										
										<td class='center'>".$status."</td>										
										<td>
											<a class='btn btn-success' href='".base_url()."index.php/tolak/app/".$id."'>
												<i class='halflings-icon white ok'></i>  
											</a> 
											
											<a class='btn btn-info' href='".base_url()."index.php/tolak/edit/".$id."'>
												<i class='halflings-icon white edit'></i>  
											</a> 
											<a class='btn btn-danger' href='".base_url()."index.php/tolak/hapus/".$id."'>
												<i class='halflings-icon white trash'></i>  
											</a>
											
										</td>
									</tr> ";
									$no++;
								 }
								?>
							

							
							</tbody>
						</table>  
					</div>
				</div>
			
</div>
