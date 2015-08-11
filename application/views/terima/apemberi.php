<?php
if ( $is_update != 0 ) {
		$reado = "readonly='readonly'";
		
		foreach ($single_data as $DATA)
		{
			$PEM_NAMA		= $DATA->PEM_NAMA;
			$PEM_JAB		= $DATA->PEM_JAB;
			$PEM_ALAMAT		= $DATA->PEM_ALAMAT;
			$PEM_TELP		= $DATA->PEM_TELP;
			$PEM_EMAIL		= $DATA->PEM_EMAIL;
			$HUB_PELINDO	= $DATA->HUB_PELINDO;
			$ISI_HUB_PELINDO	= $DATA->ISI_HUB_PELINDO;
		}
}

if ( $HUB_PELINDO == 'MITRA KERJA' ) {
	$cek1 = "checked='true'";
} else if ( $HUB_PELINDO == 'ANAK PERUSAHAAN' ) {
	$cek2 = "checked='true'";
} else if ( $HUB_PELINDO == 'PENYEDIA BARANG DAN JASA' ) {
	$cek3 = "checked='true'";
}
else{
	$cek4 = "checked='true'";
	$isicek4 = $ISI_HUB_PELINDO;
}
	
?>

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>DATA PEMBERI</h2>
				<div class="box-icon">
					<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
					<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
				</div>
		</div>
		<div class="box-content">
			
									<fieldset>
												  <div class="control-group">
													<label class="control-label" for="focusedInput">Nama Pemberi</label>
													<div class="controls">
													  <input class="input-xlarge"  style="width:90%" id="pem_nama" name="pem_nama" value="<?php echo $PEM_NAMA; ?>" type="text" <?php echo $reado; ?>>
													</div>
												  </div>
												  <div class="control-group">
													<label class="control-label">Unit Kerja/Jabatan</label>
													<div class="controls">
													  <input class="input-xlarge"  style="width:90%" id="pem_jab" name="pem_jab" value="<?php echo $PEM_JAB; ?>" type="text" <?php echo $reado; ?>>
													</div>
												  </div>
												  <div class="control-group">
													<label class="control-label">Alamat</label>
													<div class="controls">
													  <input class="input-xlarge"  style="width:90%" id="pem_alamat" name="pem_alamat" value="<?php echo $PEM_ALAMAT; ?>" type="text" <?php echo $reado; ?> >
													</div>
												  </div>
												  <div class="control-group">
													<label class="control-label">Kontak Telp. / HP</label>
													<div class="controls">
													  <input class="input-xlarge"  style="width:90%" id="pem_telp" name="pem_telp" value="<?php echo $PEM_TELP; ?>" type="text" <?php echo $reado; ?> >
													</div>
												  </div>
												  <div class="control-group">
													<label class="control-label">Email</label>
													<div class="controls">
													  <input class="input-xlarge"  style="width:90%" id="pem_email" name="pem_email" value="<?php echo $PEM_EMAIL; ?>" type="text" <?php echo $reado; ?> >
													</div>
												  </div>
												  <div class="control-group">
													<label class="control-label" for="selectError">Hubungan dengan PELINDO III</label>
													<div class="controls">
													  <label class="radio">
														<input type="radio" name="hub_pelindo" id="hub_pelindo" value="MITRA KERJA" <?php echo $cek1; ?>>
														Mitra Kerja
													  </label>
													 
													  <label class="radio">
														<input type="radio" name="hub_pelindo" id="hub_pelindo" value="ANAK PERUSAHAAN" <?php echo $cek2; ?>>
														Anak Perusahaan
													  </label>
													 
													  <label class="radio">
														<input type="radio" name="hub_pelindo" id="hub_pelindo" value="PENYEDIA BARANG DAN JASA" <?php echo $cek3; ?>>
														Penyedia Barang dan Jasa
													  </label>
													  <div style="clear:both"></div>
													  <label class="radio">
													  <input type="radio" name="hub_pelindo" id="hub_pelindo" value="LAIN" <?php echo $cek4; ?>>
														LAIN
													  </label>
													  <input class="input-xlarge"  style="width:40%" id="isi_hub_pelindo" name="isi_hub_pelindo" value="<?php echo $isicek4; ?>" type="text"  >
														
													</div>
													
													
													
												  </div>
									</fieldset>
									
		</div>
	</div>
</div>