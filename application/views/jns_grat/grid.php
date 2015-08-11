
<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Master</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Jenis Gratifikasi</a></li>
</ul>
<button class="btn btn-success" href="#" data-toggle='modal' data-target='#mod_jns'>
	Tambah Jenis Gratifikasi 
</button>
									
<!-- <a href=".<?php  base_url(); ?>./jns_grat/add" class='btn btn-success'>Tambah Jenis Gratifikasi</a> -->
<br>
<br>

<div class="row-fluid sortable">		
				<div class="box span12">
					
					
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white comments"></i><span class="break"></span>Jenis Gratifikasi</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
							<?php 
								echo $this->table->generate(); 
							?>
					</div>
				</div>
			
</div>

<!--
Modal Input edit
-->

<div class="modal fade" id="mod_jns" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">	
		<form name="frm_jns" action="jns_grat/add_process" method="POST" target="_blank" enctype="multipart/form-data">
					
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
			<h4 class="modal-title" id="myModalLabel" align="center">
				<i class="fa fa-print"></i> <b> Input Data Jenis Gratifikasi</b> 
			</h4>
		  </div>
		  <div class="modal-body">
				
				<div class="control-group">
					<label class="control-label">Jenis Gratifikasi</label>
						<div class="controls">
							<input type="text" class="input-xlarge" name="jns_grat" id="jns_grat">
						</div>
				</div>
				<div class="control-group">
					<label class="control-label">Keterangan</label>
						<div class="controls">
							<textarea id="ket_grat" name="ket_grat"></textarea>
						</div>
				</div>
					
					
					
				
		  </div>
		  <div class="modal-footer">
			 <div class="pull-left">
					<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
				 
			</div>
			<div class="pull-right">
				 <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan </button>
				<!-- <input type="submit" name="submit" id="submit" value=" Simpan Data " class="btn btn-primary" /> -->
			</div>
										
			</div>
		</div>
		
		</form>
		
	  </div>
</div>
