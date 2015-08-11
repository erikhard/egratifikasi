<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets_front/ico/favicon.png">

    <title>PELAPORAN GRATIFIKASI</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets_front/css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets_front/css/font-awesome.min.css'); ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets_front/css/main.css'); ?>" rel="stylesheet">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body style="background-color:#2d2d2d">

    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" style="margin-left:-100px">
			<img src="<?php echo base_url('assets_front/img/log_pp3.png');?>" /> PT PELABUHAN INDONESIA III (PERSERO)
		  </a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
         
           <li class="active"><a data-toggle="modal" data-target="#myModal" href="#myModal"><i class="fa fa-envelope-o"></i> Kontak </a></li>
           <li class="#"><a data-toggle="modal" data-target="#modallogin" href="#modallogin"><i class="fa fa-key"></i> Login </a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

	<div id="headerwrap">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-8 col-lg-offset-2">
				<h1>Cegah Tindakan <b>Gratifikasi</b></h1>
				<h2>pada Lingkungan PElINDO III</h2>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- headerwrap -->

	<!-- modal login -->
	
	<div class="modal fade" id="modallogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title" id="myModalLabel"><strong> LOGIN </strong></h4>
	      </div>
				<?php
					$attributes = array('name' => 'login_form', 'id' => 'login_form');
					
					echo form_open('home/process_login', $attributes);
				?>
				<div class="modal-body">
					<div class="row centered">
						<table width="100%" cellpadding="10" cellspacing"10">
							<tr>
									<td width="20%"><strong> Username </strong></td>
									<td width="5%">:</td>
									<td width="75%" align="left"> <input size="40" id="username" name="username"  type="text" placeholder="Username" ></td>
							</tr>
							<tr>
									<td><strong>  Password </strong></td>
									<td>:</td>
									<td align="left"> <input size="40" id="password" name="password"  type="password" placeholder="Password" ></td>
							</tr>
						</table>
					</div>
				</div>
			  <div class="modal-footer">
				 <!-- <button type="submit" class="btn btn-danger" data-dismiss="modal">Login</button>  -->
				<input type="submit" value="Submit"> 
			  </div>
			</form>
	    </div>		<!-- /.modal-content -->
	  </div>	<!-- /.modal-dialog -->
	</div>
	<!-- ------------------------ -->

	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title" id="myModalLabel">Hubungi Kami</h4>
	      </div>
	      <div class="modal-body">
		        <div class="row centered">
		        	<p><b> Kantor Pusat </b> </p>
		        	<p>
						Jl. Perak Timur No. 610 <br/>
						Surabaya 60165 - Indonesia <br/>
						Telp : (031) 3298631-37 <br/>
						Fax : (031) 3295204, 3295207 <br/>
						Email : humas@pp3.co.id 
		        	</p>
		        	<div id="mapwrap">
		<!--
		<iframe height="300" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.es/maps?t=m&amp;ie=UTF8&amp;ll=52.752693,22.791016&amp;spn=67.34552,156.972656&amp;z=2&amp;output=embed"></iframe>
		-->
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d989.5916327274434!2d112.73364799999999!3d-7.198955000000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xc95140f72b10dbb1!2sPelindo+3+Tanjung+Perak!5e0!3m2!1sid!2sid!4v1433313440861" height="300" width="100%" frameborder="0" style="border:0"></iframe>		
					
					
					</div>	
		        </div>
	      </div>
	     
	    </div>		<!-- /.modal-content -->
	  </div>	<!-- /.modal-dialog -->
	</div>	<!-- /.modal -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="<?php echo base_url('assets_front/js/bootstrap.min.js'); ?>"></script>
  </body>
</html>
