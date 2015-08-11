<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Form Laporan</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Penolakan Gratifikasi</a>
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
					
					<?php foreach ($single_data as $student): ?>
					<p>Edit Detail & Click Update Button</p>
					<form method="post" action="<?php echo base_url() . "index.php/update_ctrl/update_student_id1"?>">
						<label id="hide">Id :</label>
							<input type="text" id="hide" name="did" value="<?php echo $student->EMP_NAMA; ?>">
						<label>Name :</label>
							<input type="text" name="dname" value="<?php echo $student->EMP_JAB; ?>">
						<label>Email :</label>
							<input type="text" name="demail" value="<?php echo $student->EMP_NIP; ?>">
						<label>Mobile :</label>
							<input type="text" name="dmobile" value="<?php echo $student->EMP_TELP; ?>">
						<label>Address :</label>
							<input type="text" name="daddress" value="<?php echo $student->EMP_TELP; ?>">
						<input type="submit" id="submit" name="dsubmit" value="Update">
					</form>
					<?php endforeach; ?>

				</div><!--/span-->
		
</div><!--/row-->
