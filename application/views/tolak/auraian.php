<?php									  
if ( $is_update != 0 ) {
		foreach ($single_data as $DATA)
		{
			$TMPT_TERIMA	= $DATA->TMPT_TERIMA;
			$WAKTU_TERIMA_TGL	= $DATA->WAKTU_TOLAK_TGL;
			$WAKTU_TERIMA_JAM	= $DATA->WAKTU_TOLAK_JAM;
			$WAKTU_TERIMA_HARI	= $DATA->WAKTU_TOLAK_HARI;
			$RANGKA_KEG		= $DATA->RANGKA_KEG;
			$URAIAN_KEG		= $DATA->URAIAN_KEG;
			$JNS_GRAT		= $DATA->JNS_GRAT;
			$BENTUK_GRAT	= $DATA->BENTUK_GRAT;
			$JML_GRAT		= $DATA->JML_GRAT;
			$NILAI_GRAT		= $DATA->NILAI_GRAT;
			$IS_AKOM_PELINDO	= $DATA->IS_AKOM_PELINDO;
			$KET_AKOM			= $DATA->KET_AKOM;
			$TMPT_TERIMA_ALAMAT	= $DATA->TMPT_TERIMA_ALAMAT;
			$TMPT_TERIMA_KOTA	= $DATA->TMPT_TERIMA_KOTA;
			$PEM_CORP			= $DATA->PEM_CORP;
			$ISI_RANGKA_KEG			= $DATA->ISI_RANGKA_KEG;
			$ISI_KET_AKOM			= $DATA->ISI_KET_AKOM;
		}
}	

if ( $RANGKA_KEG == 'PROMOSI' ) {
	$cekr1 = "checked='true'";
} else if ( $RANGKA_KEG == 'KEDINASAN' ) {
	$cekr2 = "checked='true'";
} else if ( $RANGKA_KEG == 'SEREMONIAL' ) {
	$cekr3 = "checked='true'";
}
else{
	$cekr4 = "checked='true'";
	$isicekr4 = $ISI_RANGKA_KEG;
}

 if ( $KET_AKOM == 'YA' ) {
	$cekket1 = "checked='true'";
	$isiket_akom = $ISI_KET_AKOM;
}
else{
	$cekket2 = "checked='true'";
	
}
								  
if ( $is_app != 0 )
{
	$reado = "readonly='readonly'";
	$app_ket = "
	 <div class='control-group' style='margin-right:3%'>
			 <label class='checkbox'>
					<div class='alert alert-block '>
						<h4 class='alert-heading'><b> Persetujuan  :</b></h4>
							<div class='controls'>
								<label class='radio'>
									<input type='radio' name='approval' id='approval' value='1' checked=''>
										Ya
								</label>
							<div style='clear:both'></div>
								<label class='radio'>
									<input type='radio' name='approval' id='approval'  value='2'>
										Tidak
								</label>
							</div>
							<b> Keterangan : </b>
							<br>
							<textarea  rows='4' style='width:100%' id='ket_approval' name='ket_approval'></textarea>
						</div>
						</label>
				</div>
										  
	
	";
}

?>


<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>URAIAN PENERIMAAN</h2>
				<div class="box-icon">
					<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
					<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
				</div>
		</div>
		<div class="box-content">
		
									<hr>
									<fieldset>
												<div class="control-group">
													<label class="control-label" for="focusedInput">Tempat Penerimaan</label>
													<div class="controls">
													  <input class="input-xlarge required"  style="width:90%" id="tmpt_terima" name="tmpt_terima" value="<?php echo $TMPT_TERIMA; ?>" type="text" <?php echo $reado; ?>  >
													</div>
												  </div>
												  <div class="control-group">
													<label class="control-label" for="focusedInput">Alamat Tempat Penerimaan</label>
													<div class="controls">
													  <input class="input-xlarge required" style="width:90%" id="tmpt_terima_alamat" name="tmpt_terima_alamat" value="<?php echo $TMPT_TERIMA_ALAMAT; ?>" type="text" <?php echo $reado; ?> >
													</div>
												  </div>
												  <div class="control-group">
													<label class="control-label" for="kota">Kota Tempat Penerimaan</label>
													<div class="controls">
														<input class="input-xlarge required" style="width:90%" id="tmpt_terima_kota" name="tmpt_terima_kota" value="<?php echo $TMPT_TERIMA_KOTA; ?>" type="text" <?php echo $reado; ?> >
														<!--
														  <select id="kota" name="kota" data-rel="chosen" >
															<option>Surabaya</option>
															<option>Sidoarjo</option>
															<option>Gresik</option>
															<option>Malang</option>
														  </select>
														  -->
													</div>
												  </div>
									 
												  <div class="control-group">
													<label class="control-label" >Waktu Penerimaan</label>
													<div class="controls">
													 <input type="text" style="width:90%" class="input-xlarge datepicker" name="waktu_terima_tgl" value="<?php echo $WAKTU_TERIMA_TGL; ?>" id="waktu_terima_tgl" <?php echo $reado; ?> >
													</div>
												  </div>
												  <div class="control-group">
													<label class="control-label">Pukul Waktu Penerimaan</label>
													<div class="controls">
														<!--<input type="text" style="width:90%" class="input-xlarge timepicker" name="waktu_terima_jam" id="waktu_terima_jam" value="<?php echo $WAKTU_TERIMA_JAM; ?>" <?php echo $reado; ?>>
														-->
														 <div class="input-append bootstrap-timepicker">
															<input id="timepicker1" type="text" class="input-small">
															<span class="add-on"><i class="icon-time"></i></span>
														</div>
													</div>
												  </div>
												  <div class="control-group">
													<label class="control-label" for="selectError">Dalam Kegiatan</label>
														<div class="controls">
														  <label class="radio">
															<input type="radio" name="rangka_keg" id="rangka_keg" value="PROMOSI" <?php echo $cekr1; ?>>
																Promosi
														  </label>
														 
														  <label class="radio">
															<input type="radio" name="rangka_keg" id="rangka_keg" value="KEDINASAN" <?php echo $cekr2; ?>>
																Kedinasan
														  </label>
														 
														  <label class="radio">
															<input type="radio" name="rangka_keg" id="rangka_keg" value="SEREMONIAL" <?php echo $cekr3; ?>>
																Seremonial
														  </label>
														  <div style="clear:both"></div>
														 
														  <label class="radio">
														  <input type="radio" name="rangka_keg" id="rangka_keg" value="LAIN" <?php echo $cekr4; ?>>
															LAIN
														  </label>
														  <input class="input-xlarge"  style="width:40%" id="isi_rangka_ket" name="isi_rangka_ket" value="<?php echo $isicekr4; ?>" type="text"  >
															
														</div>
												  </div>
												  <div class="control-group">
													<label class="control-label">Uraian Kegiatan</label>
													<div class="controls">
														<textarea <?php echo $reado; ?> id="uraian_keg" name="uraian_keg" style="width:90%"><?php echo $URAIAN_KEG; ?></textarea>
													</div>
												  </div>
												   <div class="control-group">
													<label class="control-label">Jenis Gratifikasi</label>
													<div class="controls">
													  <input class="input-xlarge required" style="width:90%" id="jns_grat" name="jns_grat" value="<?php echo $JNS_GRAT; ?>" type="text" <?php echo $reado; ?>>
													</div>
												  </div>
												  <div class="control-group">
													<label class="control-label">Bentuk Gratifikasi</label>
													<div class="controls">
													  <input class="input-xlarge required" style="width:90%" id="bentuk_grat" name="bentuk_grat" value="<?php echo $BENTUK_GRAT; ?>" type="text" <?php echo $reado; ?> >
													</div>
												  </div>
												  <div class="control-group">
													<label class="control-label" for="selectError">Jumlah / Kuantitas</label>
													<div class="controls">
													   <input class="input-xlarge required" style="width:90%" id="jml_grat" name="jml_grat" value="<?php echo $JML_GRAT; ?>" type="text" <?php echo $reado; ?>>
													</div>
												  </div>
												   <div class="control-group">
													<label class="control-label" for="selectError">Nilai Gratifikasi</label>
													<div class="controls">
													   <input class="input-xlarge required" style="width:90%" id="nilai_grat" name="nilai_grat" value="<?php echo $NILAI_GRAT; ?>" type="text" <?php echo $reado; ?>>
													</div>
												  </div>
												  
												   <div class="control-group">
													<label class="control-label" for="selectError">Kelengkapan Dokumen</label>
													<div class="controls">
														<div class="block ">
															<div>
																<!-- <label>JENIS DOKUMEN </label>:
																   <select id="dokumen_data" name="dokumen_data" style="width:250px" >
																	</select>  -->
																	<input class="input-xlarge" style="width:40%" id="dokumen_data" name="dokumen_data"  type="text" >
																	<input type="button" value="Simpan" id="simpan_dok">
															</div> 
															
															<div id="info"></div>
															 <!-- <div id="loading"><img src="loading.gif" /></div> -->
															  <div id="tampilkan"> 
																	<table id="tbldetail" class="table table-striped table-bordered bootstrap-datatable datatable" style="width:60%">
																		  <thead>
																			  <tr>
																				<th>JENIS DOKUMEN</th>	
																				<th>JENIS DOKUMEN</th>	
																				<th>NO</th>	
																				<th>OPTION</th>	
																				<th>OPTION</th>	
																			 </tr>
																		  </thead>   
																	</table>
															  </div>
														  </div>
														  <br>
													  
														 
													</div>
												  </div>
												  
												  <div class="control-group">
													<label class="control-label" for="selectError">Akomodasi dibiayai Pelindo III</label>
													<div class="controls">
													  <label class="radio">
														<input type="radio" name="ket_akom" id="ket_akom"  value="YA" <?php echo $cekket1; ?>>
															Ya
													  </label>
													  <input class="input-xlarge"  style="width:30%" id="isi_ket_akom" name="isi_ket_akom" value="<?php echo $isiket_akom; ?>" type="text"  >
													  <br/>
													  <label class="radio">
														<input type="radio" name="ket_akom" id="ket_akom" value="TIDAK" <?php echo $cekket2; ?>>
															Tidak
													  </label>
													  
													 <br/>
													  <b> *) Jika ya, Sebutkan anggaran/rekening yang dibebankan   </b>
													</div>
													
												  </div>
									</fieldset>	
						

	
		</div>
		<?php 
			echo $app_ket;
		?>
		<div class="modal-footer">
			
			<a href="#" class="btn" data-dismiss="modal">Batal</a>
			<input type="submit" name="submit" id="submit" value=" Simpan Data " class="btn btn-primary" />
		</div>
	</div>
</div>
	