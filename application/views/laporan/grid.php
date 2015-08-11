<?php
$thn = date('Y');
?>
<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Laporan</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Gratifikasi</a></li>
</ul>


<div class="row-fluid sortable">		
				<div class="box span12">
					
					
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white list"></i><span class="break"></span>Laporan Gratifikasi</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable">
						  <thead>
							  <tr>
								  <th>NO.</th>
								  <th>LAPORAN</th>
								  <th>OPTION</th>
							  </tr>
						  </thead>   
						  <tbody>
							<tr>
								<td COLSPAN="3"><B>PERBULAN</B></td>
							</tr>
							
							<tr>
								<td>1. </td>
								<td>REKAPITULIASI PELAPORAN PENERIMAAN GRATIFIKASI</td>
								<td class="center">
								<!--
								<button class="btn btn-success pull-left" data-toggle='modal' data-target='#mod_cetak_1'>
														<i class="fa fa-print"></i> 
														Cetak
													</button>-->
													
									<button class="btn btn-success" href="#" data-toggle='modal' data-target='#mod_cetak_1'>
										<i class="halflings-icon white zoom-in"></i>  
									</button>
								</td>
							</tr>
							<tr>
								<td>2. </td>
								<td>REKAPITULIASI PELAPORAN PENOLAKAN GRATIFIKASI </td>
								<td class="center">
										<button class="btn btn-success" href="#" data-toggle='modal' data-target='#mod_cetak_2'>
											<i class="halflings-icon white zoom-in"></i>  
										</button>	
								</td>
							</tr>
							<tr>
								<td COLSPAN="3"><B>TRIWULAN</B></td>
							</tr>
							<tr>
								<td>3. </td>
								<td>REKAPITULIASI PELAPORAN PENERIMAAN GRATIFIKASI (TRIWULAN)</td>
								<td class="center">
								<button class="btn btn-success" href="#" data-toggle='modal' data-target='#mod_cetak_3'>
										<i class="halflings-icon white zoom-in"></i>  
									</button>
								</td>
							</tr>
							<tr>
								<td>4. </td>
								<td>REKAPITULIASI PELAPORAN PENOLAKAN GRATIFIKASI (TRIWULAN) </td>
								<td class="center">
										<button class="btn btn-success" href="#" data-toggle='modal' data-target='#mod_cetak_4'>
											<i class="halflings-icon white zoom-in"></i>  
										</button>	
								</td>
							</tr>
							<tr>
								<td COLSPAN="3"><B>SEMESTER</B></td>
							</tr>
							<tr>
								<td>5. </td>
								<td>REKAPITULIASI PELAPORAN PENERIMAAN GRATIFIKASI (SEMESTER)</td>
								<td class="center">
								<button class="btn btn-success" href="#" data-toggle='modal' data-target='#mod_cetak_5'>
										<i class="halflings-icon white zoom-in"></i>  
									</button>
								</td>
							</tr>
							<tr>
								<td>6. </td>
								<td>REKAPITULIASI PELAPORAN PENOLAKAN GRATIFIKASI (SEMESTER) </td>
								<td class="center">
										<button class="btn btn-success" href="#" data-toggle='modal' data-target='#mod_cetak_6'>
											<i class="halflings-icon white zoom-in"></i>  
										</button>	
								</td>
							</tr>
							<tr>
								<td COLSPAN="3"><B>TAHUN</B></td>
							</tr>
							<tr>
								<td>7. </td>
								<td>REKAPITULIASI PELAPORAN PENERIMAAN GRATIFIKASI (TAHUN)</td>
								<td class="center">
								<button class="btn btn-success" href="#" data-toggle='modal' data-target='#mod_cetak_7'>
										<i class="halflings-icon white zoom-in"></i>  
									</button>
								</td>
							</tr>
							<tr>
								<td>8. </td>
								<td>REKAPITULIASI PELAPORAN PENOLAKAN GRATIFIKASI (TAHUN) </td>
								<td class="center">
										<button class="btn btn-success" href="#" data-toggle='modal' data-target='#mod_cetak_8'>
											<i class="halflings-icon white zoom-in"></i>  
										</button>	
								</td>
							</tr>
							
							<tr>
								<td COLSPAN="3"><B>GRAFIK</B></td>
							</tr>
							<tr>
								<td>9. </td>
								<td>GRAFIK GRATIFIKASI </td>
								<td class="center" >
									<a class="btn btn-success" href="#">
										<i class="halflings-icon white zoom-in"></i>  
									</a>
								</td>
							</tr>
						  </tbody>
					  </table>   
						  
					
					</div>
				</div>
			
</div>
<!-- Laporan Bulanan -->
<?php 
for ( $b=1;$b<=2;$b++)
{
	switch($b) {
		case '1' :
		{
			$namalap = "http://localhost:8080/e-gratifikasi/laporan/lap_terima.php" ;
			//$namalap = "avability.php" ;
			$titlelap = "REKAPITULIASI PELAPORAN PENERIMAAN GRATIFIKASI " ;
		}
		break;
		case '2' :
		{
			$namalap = "http://localhost:8080/e-gratifikasi/laporan/lap_tolak.php" ;
			$titlelap = "REKAPITULIASI PELAPORAN PENOLAKAN GRATIFIKASI " ;
		}
		break;
		
	} 
?>
	<div class="modal fade" id="mod_cetak_<?php echo $b; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">	
		<form name="frm_cek_<?php echo $b; ?>" action="<?php echo $namalap; ?>" method="POST" target="_blank" enctype="multipart/form-data">
					
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
			<h4 class="modal-title" id="myModalLabel" align="center">
				<i class="fa fa-print"></i> <b> <?php echo $titlelap; ?> </b> 
			</h4>
		  </div>
		  <div class="modal-body">
				
				 <strong> Bulan : </strong>
					<select class="form-control" name="bulan" id="bulan">
						<?php
						/* for ( $a=1;$a<=12;$a++)
						{
							echo "<option value='$a'> ".getBulan($a)." </option>";
						} */
						echo "<option value='01'> Januari </option>";
						echo "<option value='02'> Februari </option>";
						echo "<option value='03'> Maret </option>";
						echo "<option value='04'> April </option>";
						echo "<option value='05'> Meni </option>";
						echo "<option value='06'> Juni </option>";
						echo "<option value='07'> Juli </option>";
						echo "<option value='08'> Agustus </option>";
						echo "<option value='09'> September </option>";
						echo "<option value='10'> Oktober </option>";
						echo "<option value='11'> November </option>";
						echo "<option value='12'> Desember </option>";
						?>
					</select>
					<br>
					<!-- <input type="text" class="form-control" name="bulan" id="bulan" /> -->
				 <strong> Tahun : </strong>
					<select class="form-control" name="tahun" id="tahun">
						<?php
						for ( $a=2015;$a<=$thn;$a++)
						{
							echo "<option value='$a'> $a </option>";
						}
						?>
					</select>
					<!-- <input type="text" class="form-control" name="tahun" id="tahun" /> -->
					
				
		  </div>
		  <div class="modal-footer">
			 <div class="pull-left">
					<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
				 
			</div>
			<div class="pull-right">
				 <button type="submit" class="btn btn-primary"><i class="fa fa-print"></i> Cetak </button>
			</div>
										
			</div>
		</div>
		
		</form>
		
	  </div>
	</div>
<?php 
}
?>
<!-- akhir laporan bulanan -->


<!-- Laporan Triwulan -->
<?php 
for ( $b=3;$b<=4;$b++)
{
	switch($b) {
		case '3' :
		{
			$namalap = "http://localhost:8080/e-gratifikasi/laporan/laptw_terima.php" ;
			//$namalap = "avability.php" ;
			$titlelap = "REKAPITULIASI PELAPORAN PENERIMAAN GRATIFIKASI TRIWULAN" ;
		}
		break;
		case '4' :
		{
			$namalap = "http://localhost:8080/e-gratifikasi/laporan/laptw_tolak.php" ;
			$titlelap = "REKAPITULIASI PELAPORAN PENOLAKAN GRATIFIKASI TRIWULAN" ;
		}
		break;
		
	} 
?>
	<div class="modal fade" id="mod_cetak_<?php echo $b; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">	
		<form name="frm_cek_<?php echo $b; ?>" action="<?php echo $namalap; ?>" method="POST" target="_blank" enctype="multipart/form-data">
					
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
			<h4 class="modal-title" id="myModalLabel" align="center">
				<i class="fa fa-print"></i> <b> <?php echo $titlelap; ?> </b> 
			</h4>
		  </div>
		  <div class="modal-body">
				
				 <strong> TRIWULAN : </strong>
					<select class="form-control" name="triwulan" id="triwulan">
						<?php
						for ( $x=1;$x<=4;$x++)
						{
							echo "<option value='$x'> $x </option>";
						} 
						?>
					</select>
					<br>
					<!-- <input type="text" class="form-control" name="bulan" id="bulan" /> -->
				 <strong> Tahun : </strong>
					<select class="form-control" name="tahun" id="tahun">
						<?php
						for ( $a=2015;$a<=$thn;$a++)
						{
							echo "<option value='$a'> $a </option>";
						}
						?>
					</select>
					<!-- <input type="text" class="form-control" name="tahun" id="tahun" /> -->
					
				
		  </div>
		  <div class="modal-footer">
			 <div class="pull-left">
					<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
				 
			</div>
			<div class="pull-right">
				 <button type="submit" class="btn btn-primary"><i class="fa fa-print"></i> Cetak </button>
			</div>
										
			</div>
		</div>
		
		</form>
		
	  </div>
	</div>
<?php 
}
?>
<!-- akhir laporan triwuwlan -->


<!-- Laporan Semester -->
<?php 
for ( $b=5;$b<=6;$b++)
{
	switch($b) {
		case '5' :
		{
			$namalap = "http://localhost:8080/e-gratifikasi/laporan/lapsm_terima.php" ;
			//$namalap = "avability.php" ;
			$titlelap = "REKAPITULIASI PELAPORAN PENERIMAAN GRATIFIKASI SEMESTER" ;
		}
		break;
		case '6' :
		{
			$namalap = "http://localhost:8080/e-gratifikasi/laporan/lapsm_tolak.php" ;
			$titlelap = "REKAPITULIASI PELAPORAN PENOLAKAN GRATIFIKASI SEMESTER" ;
		}
		break;
		
	} 
?>
	<div class="modal fade" id="mod_cetak_<?php echo $b; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">	
		<form name="frm_cek_<?php echo $b; ?>" action="<?php echo $namalap; ?>" method="POST" target="_blank" enctype="multipart/form-data">
					
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
			<h4 class="modal-title" id="myModalLabel" align="center">
				<i class="fa fa-print"></i> <b> <?php echo $titlelap; ?> </b> 
			</h4>
		  </div>
		  <div class="modal-body">
				
				 <strong> SEMESTER : </strong>
					<select class="form-control" name="semester" id="semester">
						<?php
						for ( $x=1;$x<=2;$x++)
						{
							echo "<option value='$x'> $x </option>";
						} 
						?>
					</select>
					<br>
				<strong> TAHUN : </strong>
					<select class="form-control" name="tahun" id="tahun">
						<?php
						for ( $a=2015;$a<=$thn;$a++)
						{
							echo "<option value='$a'> $a </option>";
						}
						?>
					</select>
					<!-- <input type="text" class="form-control" name="tahun" id="tahun" /> -->
					
				
		  </div>
		  <div class="modal-footer">
			 <div class="pull-left">
					<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
				 
			</div>
			<div class="pull-right">
				 <button type="submit" class="btn btn-primary"><i class="fa fa-print"></i> Cetak </button>
			</div>
										
			</div>
		</div>
		
		</form>
		
	  </div>
	</div>
<?php 
}
?>
<!-- akhir laporan Semester -->


<!-- Laporan Tahun -->
<?php 
for ( $b=7;$b<=8;$b++)
{
	switch($b) {
		case '7' :
		{
			$namalap = "http://localhost:8080/e-gratifikasi/laporan/lapth_terima.php" ;
			$titlelap = "REKAPITULIASI PELAPORAN PENERIMAAN GRATIFIKASI SEMESTER" ;
		}
		break;
		case '8' :
		{
			$namalap = "http://localhost:8080/e-gratifikasi/laporan/lapth_tolak.php" ;
			$titlelap = "REKAPITULIASI PELAPORAN PENOLAKAN GRATIFIKASI SEMESTER" ;
		}
		break;
		
	} 
?>
	<div class="modal fade" id="mod_cetak_<?php echo $b; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">	
		<form name="frm_cek_<?php echo $b; ?>" action="<?php echo $namalap; ?>" method="POST" target="_blank" enctype="multipart/form-data">
					
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
			<h4 class="modal-title" id="myModalLabel" align="center">
				<i class="fa fa-print"></i> <b> <?php echo $titlelap; ?> </b> 
			</h4>
		  </div>
		  <div class="modal-body">
				
			
				<strong> TAHUN : </strong>
					<select class="form-control" name="tahun" id="tahun">
						<?php
						for ( $a=2015;$a<=$thn;$a++)
						{
							echo "<option value='$a'> $a </option>";
						}
						?>
					</select>
					<!-- <input type="text" class="form-control" name="tahun" id="tahun" /> -->
					
				
		  </div>
		  <div class="modal-footer">
			 <div class="pull-left">
					<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
				 
			</div>
			<div class="pull-right">
				 <button type="submit" class="btn btn-primary"><i class="fa fa-print"></i> Cetak </button>
			</div>
										
			</div>
		</div>
		
		</form>
		
	  </div>
	</div>
<?php 
}
?>
<!-- akhir laporan Tahun -->