
<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="#">Pelaporan</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="<?php echo base_url().'index.php/terima'; ?>">Penerimaan</a></li>
</ul>
<a href=".<?php  base_url(); ?>./index.php/terima/add" class='btn btn-success'>Tambah Laporan Penerimaan</a>
<br>
<br>

<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white gift"></i><span class="break"></span>Laporan Penerimaan</h2>
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
