<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Form Laporan Penerimaan Gratifikasi</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	

  	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.min.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap-responsive.min.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style-responsive.css');?>">
	
	<!--
	<link id="bootstrap-style" href="http://localhost:8080/e-gratifikasi/css/bootstrap.min.css" rel="stylesheet">
	<link href="http://localhost:8080/e-gratifikasi/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="http://localhost:8080/e-gratifikasi/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="http://localhost:8080/e-gratifikasi/css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	-->
	
	<link rel="shortcut icon" href="img/favicon.ico">
	
	
		
		
		
</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<?php $this->load->view('masthead'); ?>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<?php $this->load->view('navigation'); ?>
			<!--
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="form_terima.html"><i class="icon-envelope"></i><span class="hidden-tablet"> Form Penerimaan </span></a></li>	
						<li><a href="form_tolak.html"><i class="icon-envelope"></i><span class="hidden-tablet"> Form Penolakan </span></a></li>
						
					</ul>
				</div>
			</div>
			-->
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10">
					<!-- isi data -->
					<?php $this->load->view($main_view); ?>
	
			</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	
	<div class="clearfix"></div>
	
	<footer>
		
		<?php $this->load->view('footer'); ?>
		
		

	</footer>
	
	<!-- start: JavaScript-->
		<?php $this->load->view('js'); ?>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" type="text/css" media="screen"/>

	
	<?php $this->load->view('js_dttabel'); ?>
	<?php $this->load->view('js_validation'); ?>
		<!-- end: JavaScript-->
	  <script type="text/javascript">
		$('#timepicker1').timepicker({
		minuteStep: 5,
		showInputs: false,
		disableFocus: true
		});
		</script>

<script type="text/javascript">



$(document).ready(function(){
	
		var loading = $("#info");
		var tampilkan = $("#tampilkan");
	
	function tampildata(){
             // membuat efek fading
             tampilkan.hide();
             loading.fadeIn();
        
           $.ajax({
            type:"POST",
            url:"tolak/loadtabel",   
            data: "aksi=tampil",
            success: function(data){                 
                    loading.fadeOut();
              tampilkan.html(data);
              tampilkan.fadeIn(2000);
            }  
           });
           
     }
		  
	
	function RefreshTable(tableId, urlData)
		{
		  $.getJSON(urlData, null, function( json )
		  {
			table = $(tableId).dataTable();
			oSettings = table.fnSettings();

			table.fnClearTable(this);

			for (var i=0; i<json.aaData.length; i++)
			{
			  table.oApi._fnAddData(oSettings, json.aaData[i]);
			}

			oSettings.aiDisplay = oSettings.aiDisplayMaster.slice();
			table.fnDraw();
		  });
		}

	$("#simpan_dok").click(function(){
		var dokumen_data = $("#dokumen_data").val();
		$.ajax({
			 type:"POST",
			 url:"simpantabel",    
			 data: "dokumen_data=" + dokumen_data,
			 success: function(data){                 
				RefreshTable('#tbldetail','<?php echo base_url(); ?>index.php/tolak/viewtabel');
			 }  
		});
	});

	$("#hapustabel").click(function(){
		var kode = $(this).attr("id");
		 
		$.ajax({
			type: "POST",
			url: "http://localhost:8080/e-gratifikasi/laporan/hapus.php",
			data: "kode=" + kode ,
			cache: false,
			success: function(data){
				RefreshTable('#tbldetail','<?php echo base_url(); ?>index.php/tolak/viewtabel');
			}
		});
					
		
	});
  
})	

</script>
		
</body>
</html>
