<?php 
error_reporting(0);
if ( $is_update != 0 )
{
		foreach ($single_data as $DATA)
		{ 
			$ID_TOLAK		= $DATA->ID_TOLAK;
			$EMP_NIP		= $DATA->EMP_NIP;
			$EMP_NAMA		= $DATA->EMP_NAMA;
			$EMP_CABANG		= $DATA->EMP_CABANG;
			$EMP_JAB		= $DATA->EMP_JAB;
			$EMP_TELP		= $DATA->EMP_TELP;
			$EMP_EMAIL		= $DATA->EMP_EMAIL;
			$PEM_NAMA		= $DATA->PEM_NAMA;
			$PEM_JAB		= $DATA->PEM_JAB;
			$PEM_ALAMAT		= $DATA->PEM_ALAMAT;
			$PEM_TELP		= $DATA->PEM_TELP;
			$PEM_EMAIL		= $DATA->PEM_EMAIL;
			$HUB_PELINDO	= $DATA->HUB_PELINDO;
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
		}
}

$app_ket = "
<div class='control-group'>
	 <label class='checkbox'>
			<div class='alert alert-block '>
				<h4 class='alert-heading'><b> 
					<input type='checkbox' id='status_app' name='status_app' value='option1' class='required'>
					Term of Condition </b></h4>
					<p>Demikian laporan penolakan penerimaan gratifikasi disampaikan dan dapat dipertanggung jawabkan</p>
			</div>
	</label>
</div>";
										  
										  
if ( $is_app != 0 )
{
	$reado = "readonly='readonly'";
	$app_ket = "
	 <div class='control-group'>
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

<style type="text/css">
		.labelfrm {
			display:block;
			font-size:small;
			margin-top:5px;
		}
		.error {
			font-size:small;
			color:red;
		}
</style>
<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Form Laporan</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Penolakan Gratifikasi</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Form Penolakan Gratifikasi</a>
				</li>
</ul>

<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white file"></i><span class="break"></span><b>Form Pelapoaran Penolakan Gratifikasi</B></h2>
						<div class="box-icon">
							
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<form id="form_tolak" name="form_tolak" class="form-horizontal" method="post" action="<?php echo $form_action; ?>" >
						<div class="box-content">
							
								<b> DATA PELAPOR </b>
								<hr>
									<fieldset>
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
							
								Dengan ini menyampaikan bahwa saya telah <u> <b> menolak penerimaan </b></u> Gratifikasi dari :
							<hr>
							
								<b> DATA PEMBERI </b>
								<hr>
									<fieldset>
												  <div class="control-group">
													<label class="control-label" for="focusedInput">Nama Pemberi</label>
													<div class="controls">
													  <input class="input-xlarge" id="pem_nama" name="pem_nama" value="<?php echo $PEM_NAMA; ?>" type="text" <?php echo $reado; ?>>
													</div>
												  </div>
												  <div class="control-group">
													<label class="control-label">Unit Kerja/Jabatan</label>
													<div class="controls">
													  <input class="input-xlarge" id="pem_jab" name="pem_jab" value="<?php echo $PEM_JAB; ?>" type="text" <?php echo $reado; ?>>
													</div>
												  </div>
												  <div class="control-group">
													<label class="control-label">Alamat</label>
													<div class="controls">
													  <input class="input-xlarge" id="pem_alamat" name="pem_alamat" value="<?php echo $PEM_ALAMAT; ?>" type="text" <?php echo $reado; ?> >
													</div>
												  </div>
												  <div class="control-group">
													<label class="control-label">Kontak Telp. / HP</label>
													<div class="controls">
													  <input class="input-xlarge" id="pem_telp" name="pem_telp" value="<?php echo $PEM_TELP; ?>" type="text" <?php echo $reado; ?> >
													</div>
												  </div>
												  <div class="control-group">
													<label class="control-label">Email</label>
													<div class="controls">
													  <input class="input-xlarge" id="pem_email" name="pem_email" value="<?php echo $PEM_EMAIL; ?>" type="text" <?php echo $reado; ?> >
													</div>
												  </div>
												  <div class="control-group">
													<label class="control-label" for="selectError">Hubungan dengan PELINDO III</label>
													<div class="controls">
													  <select id="selectError" name="selectError" data-rel="chosen" >
														<option>Mitra Kerja</option>
														<option>Anak Perusahaan</option>
														<option>Penyedia Barang dan Jasa</option>
														<option>Lainnya</option>
													  </select>
													   <input class="input-xlarge" id="hub_pelindo" name="hub_pelindo" value="<?php echo $HUB_PELINDO; ?>" type="text" <?php echo $reado; ?> >
													</div>
												  </div>
									</fieldset>
									<b> URAIAN PENERIMAAN </b>
									<hr>
									<fieldset>
												<div class="control-group">
													<label class="control-label" for="focusedInput">Tempat Penerimaan</label>
													<div class="controls">
													  <input class="input-xlarge required" id="tmpt_terima" name="tmpt_terima" value="<?php echo $TMPT_TERIMA; ?>" type="text" <?php echo $reado; ?>  >
													</div>
												  </div>
												  <div class="control-group">
													<label class="control-label" for="focusedInput">Alamat Tempat Penerimaan</label>
													<div class="controls">
													  <input class="input-xlarge required" id="tmpt_terima_alamat" name="tmpt_terima_alamat" value="<?php echo $TMPT_TERIMA_ALAMAT; ?>" type="text" <?php echo $reado; ?> >
													</div>
												  </div>
												  <div class="control-group">
													<label class="control-label" for="kota">Kota Tempat Penerimaan</label>
													<div class="controls">
														  <select id="kota" name="kota" data-rel="chosen" >
															<option>Surabaya</option>
															<option>Sidoarjo</option>
															<option>Gresik</option>
															<option>Malang</option>
														  </select>
													</div>
												  </div>
									 
												  <div class="control-group">
													<label class="control-label" >Waktu Penerimaan</label>
													<div class="controls">
													 <input type="text" class="input-xlarge clockpicker" name="waktu_terima_tgl" value="<?php echo $WAKTU_TERIMA_TGL; ?>" id="waktu_terima_tgl" <?php echo $reado; ?> >
													</div>
												  </div>
												  <div class="control-group">
													<label class="control-label">Pukul Waktu Penerimaan</label>
													<div class="controls">
														<input type="text" class="input-xlarge timepicker" name="waktu_terima_jam" id="waktu_terima_jam" value="<?php echo $WAKTU_TERIMA_JAM; ?>" <?php echo $reado; ?>>
													  
													</div>
												  </div>
												  <div class="control-group">
													<label class="control-label">Uraian Kegiatan</label>
													<div class="controls">
														<textarea <?php echo $reado; ?> id="uraian_keg" name="uraian_keg"><?php echo $URAIAN_KEG; ?></textarea>
													</div>
												  </div>
												   <div class="control-group">
													<label class="control-label">Jenis Gratifikasi</label>
													<div class="controls">
													  <input class="input-xlarge required" id="jns_grat" name="jns_grat" value="<?php echo $JNS_GRAT; ?>" type="text" <?php echo $reado; ?>>
													</div>
												  </div>
												  <div class="control-group">
													<label class="control-label">Bentuk Gratifikasi</label>
													<div class="controls">
													  <input class="input-xlarge required" id="bentuk_grat" name="bentuk_grat" value="<?php echo $BENTUK_GRAT; ?>" type="text" <?php echo $reado; ?> >
													</div>
												  </div>
												  <div class="control-group">
													<label class="control-label" for="selectError">Jumlah / Kuantitas</label>
													<div class="controls">
													   <input class="input-xlarge required" id="nilai_grat" name="nilai_grat" value="<?php echo $NILAI_GRAT; ?>" type="text" <?php echo $reado; ?>>
													</div>
												  </div>
												  
												   <div class="control-group">
													<label class="control-label" for="selectError">Kelengkapan Dokumen</label>
													<div class="controls">
													   <!-- tabel grid -->
													</div>
												  </div>
												  
												  <div class="control-group">
													<label class="control-label" for="selectError">Akomodasi dibiayai Pelindo III</label>
													<div class="controls">
													  <label class="radio">
														<input type="radio" name="optionsRadios" id="optionsRadios1" name="optionsRadios1" value="option1" checked="">
														Ya
													  </label>
													  <div style="clear:both"></div>
													  <label class="radio">
														<input type="radio" name="optionsRadios" id="optionsRadios2" name="optionsRadios2" value="option2">
														Tidak
													  </label>
													</div>
												  </div>
									</fieldset>
									<hr>
									<p>
										 <?php 
										 echo $app_ket;
										 
										 ?>
									</p>
									
							
							  

						</div>
					<div class="modal-footer">
						<a href="#" class="btn" data-dismiss="modal">Tutup</a>
						
						<input type="submit" name="submit" id="submit" value=" Simpan Data " class="btn btn-primary" />
					</div>
					</form> 
				</div><!--/span-->
		
</div><!--/row-->

		