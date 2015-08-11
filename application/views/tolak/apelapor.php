<?php 

if ( $is_update == '0' ) {
	$EMP_NIP		= $_SESSION['iduser'];
	$EMP_NAMA		= $_SESSION['nama_user'];
	$EMP_CABANG		= $_SESSION['cabang'];
	$EMP_JAB		= $_SESSION['nama_user'];
	$EMP_TELP		= $_SESSION['hp'];
	$EMP_EMAIL		= $_SESSION['email'];
} 
if ( $is_update != 0 ) {
		$reado = "readonly='readonly'";
		
		foreach ($single_data as $DATA)
		{
			$ID_TOLAK		= $DATA->ID_TOLAK;
			$EMP_NIP		= $DATA->EMP_NIP;
			$EMP_NAMA		= $DATA->EMP_NAMA;
			$EMP_CABANG		= $DATA->EMP_CABANG;
			$EMP_JAB		= $DATA->EMP_JAB;
			$EMP_TELP		= $DATA->EMP_TELP;
			$EMP_EMAIL		= $DATA->EMP_EMAIL;
		}
}
 
?>	
	
<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>DATA PELAPOR</h2>
				<div class="box-icon">
					<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
					<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
				</div>
		</div>
		<div class="box-content">
			
												  <div class="control-group">
													<label class="control-label" for="focusedInput">Pelapor/Penerima</label>
													<div class="controls">
													  <input class="form-control required" style="width:90%" id="emp_nama" name="emp_nama" value="<?php echo $EMP_NAMA; ?>" type="text" <?php echo $reado; ?>  >
													  <input class="input-xlarge" id="ID_TOLAK" name="ID_TOLAK" value="<?php echo $ID_TOLAK; ?>" type="hidden" >
													</div>
												  </div>
												  <div class="control-group">
													<label class="control-label">Jabatan</label>
													<div class="controls">
													  <input class="input-xlarge required" style="width:90%" id="emp_jab" name="emp_jab" value="<?php echo $EMP_JAB; ?>" type="text" <?php echo $reado; ?>>
													</div>
												  </div>
												   <div class="control-group">
													<label class="control-label">Cabang</label>
													<div class="controls">
													  <input class="input-xlarge required" style="width:90%" id="emp_cabang" name="emp_cabang" value="<?php echo $EMP_CABANG; ?>" type="text" <?php echo $reado; ?>>
													</div>
												  </div>
												  <div class="control-group">
													<label class="control-label">No. Induk Pegawai</label>
													<div class="controls">
													  <input class="input-xlarge required" style="width:90%" id="emp_nip" name="emp_nip" value="<?php echo $EMP_NIP; ?>" type="text" <?php echo $reado; ?>>
													</div>
												  </div>
												  <div class="control-group">
													<label class="control-label">No. Telp / HP</label>
													<div class="controls">
													  <input class="input-xlarge" style="width:90%" id="emp_telp" name="emp_telp" value="<?php echo $EMP_TELP; ?>" type="text" <?php echo $reado; ?>>
													</div>
												  </div>
												  <div class="control-group">
													<label class="control-label">Email</label>
													<div class="controls">
													  <input class="input-xlarge" style="width:90%" id="emp_email" name="emp_email" value="<?php echo $EMP_EMAIL; ?>" type="text" <?php echo $reado; ?>>
													</div>
												  </div>
												  
									</fieldset>
									
		</div>
	</div>
</div>