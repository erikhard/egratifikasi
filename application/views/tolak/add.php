<?php 
error_reporting(0);
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

<form id="form_tolak" name="form_tolak" class="form-horizontal" method="post" action="<?php echo $form_action; ?>" >
	<?php $this->load->view('tolak/apelapor'); ?>
	Dengan ini menyampaikan bahwa saya telah <u> <b> menolak penerimaan </b></u> Gratifikasi dari :
	<?php $this->load->view('tolak/apemberi'); ?>						
	<?php $this->load->view('tolak/auraian'); ?>
</form> 
		

		