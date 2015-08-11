
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Form Laporan</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Penerimaan Gratifikasi</a>
						<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Form Penerimaan Gratifikasi</a>
				</li>
				
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white file"></i><span class="break"></span><b>Form Pelapoaran Penerimaan Gratifikasi</B></h2>
						<div class="box-icon">
							
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal">
							<b> DATA PELAPOR </b>
							<hr>
								<fieldset>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Pelapor/Penerima</label>
												<div class="controls">
												  <input class="input-xlarge" id="emp_nama" type="text" >
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label">Unit Kerja/Jabatan</label>
												<div class="controls">
												  <input class="input-xlarge" id="emp_jab" type="text" >
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label">No. Induk Pegawai</label>
												<div class="controls">
												  <input class="input-xlarge" id="emp_nip" type="text" >
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label">No. Telp / HP</label>
												<div class="controls">
												  <input class="input-xlarge" id="emp_telp" type="text" >
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label">Email</label>
												<div class="controls">
												  <input class="input-xlarge" id="emp_email" type="text" >
												</div>
											  </div>
											  
								</fieldset>
						
							<b> DATA PEMBERI </b>
							<hr>
								<fieldset>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Nama Pemberi</label>
												<div class="controls">
												  <input class="input-xlarge" id="pem_nama" type="text" >
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label">Unit Kerja/Jabatan</label>
												<div class="controls">
												  <input class="input-xlarge" id="pem_jab" type="text" >
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label">Alamat</label>
												<div class="controls">
												  <input class="input-xlarge" id="pem_alamat" type="text" >
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label">Kontak Telp. / HP</label>
												<div class="controls">
												  <input class="input-xlarge" id="pem_telp" type="text" >
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label">Email</label>
												<div class="controls">
												  <input class="input-xlarge" id="pem_email" type="text" >
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="selectError">Hubungan dengan PELINDO III</label>
												<div class="controls">
												  <select id="selectError" data-rel="chosen">
													<option>Mitra Kerja</option>
													<option>Anak Perusahaan</option>
													<option>Penyedia Barang dan Jasa</option>
													<option>Lainnya</option>
												  </select>
												   <input class="input-xlarge" id="hub_pelindo" type="text" >
												</div>
											  </div>
								</fieldset>
								<b> URAIAN PENERIMAAN </b>
								<hr>
								<fieldset>
											<div class="control-group">
												<label class="control-label" for="focusedInput">Tempat Penerimaan</label>
												<div class="controls">
												  <input class="input-xlarge" id="tmpt_terima" type="text" >
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="focusedInput">Alamat Tempat Penerimaan</label>
												<div class="controls">
												  <input class="input-xlarge" id="tmpt_terima_alamat" type="text" >
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="kota">Kota Tempat Penerimaan</label>
												<div class="controls">
													  <select id="kota" data-rel="chosen">
														<option>Surabaya</option>
														<option>Sidoarjo</option>
														<option>Gresik</option>
														<option>Malang</option>
													  </select>
												</div>
											  </div>
								 
											  <div class="control-group">
												<label class="control-label">Waktu Penerimaan</label>
												<div class="controls">
												 <input type="text" class="input-xlarge clockpicker" id="waktu_terima_tgl">
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label">Pukul Waktu Penerimaan</label>
												<div class="controls">
													<input type="text" class="input-xlarge timepicker" id="waktu_terima_jam">
												  
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label">Uraian Kegiatan</label>
												<div class="controls">
													<textarea id="txtkeg"></textarea>
												</div>
											  </div>
											   <div class="control-group">
												<label class="control-label">Jenis Gratifikasi</label>
												<div class="controls">
												  <input class="input-xlarge" id="jns_grat" type="text" >
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label">Bentuk Gratifikasi</label>
												<div class="controls">
												  <input class="input-xlarge" id="bentuk_grat" type="text" >
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="selectError">Jumlah / Kuantitas</label>
												<div class="controls">
												   <input class="input-xlarge" id="nilai_grat" type="text" >
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
													<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
													Ya
												  </label>
												  <div style="clear:both"></div>
												  <label class="radio">
													<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
													Tidak
												  </label>
												</div>
											  </div>
								</fieldset>
								<hr>
								<p>
									  <div class="control-group">
										
										
										  <label class="checkbox">
											<input type="checkbox" id="optionsCheckbox2" value="option1">
												<b> Term of Condition </b>
												<br> 
												Dengan ini pelapor bersedia untuk menyerahkan obyek penerimaan yang dilaporkan dalam lembar ini kepada Unit Pengendalian Gratifikasi selambat-lambatnya 7 (tujuh) hari kerja terhitung sejak tanggal penetapan obyek penerimaan tersebut menjadi milik Pelindo III / lainnya
										  </label>
										
									  </div>
							  
									
								</p>
							
						</form>   

					</div>
					<div class="modal-footer">
						<a href="#" class="btn" data-dismiss="modal">Tutup</a>
						<a href="#" class="btn btn-primary">Simpan Data</a>
					</div>
				</div><!--/span-->

			</div><!--/row-->