
<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Log</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Transaksi Data</a></li>
</ul>


<div class="row-fluid sortable">		
				<div class="box span12">
					
					
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white check"></i><span class="break"></span>Transaksi Data</h2>
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
