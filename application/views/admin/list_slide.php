

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E-Gratifikasi | Sistem Pelaporan</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../../admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../../admin/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../../../admin/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../../admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                  
                   <img alt=""; style="padding : -1px " src="../../../admin/image/jajal1.png">
                   
                </a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Elik</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Kapan - kapan at 17:00 PM</p>
                                        <p>jalan - jalan...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Aila</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> mene at 4:32 PM</p>
                                        <p>makan - makan...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>son's</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> benjeng at 4:32 PM</p>
                                        <p>ayok olahraga cah...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src=”URL gambar” style=”float:left; margin:0 8px 4px 0;” /> Admin <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="#"; style="color:#808080"><i class="fa fa-fw fa-home fa-2x"></i> Dashboard</a>
                    </li>
                   
                    <li>
                        <a href="#"; style="color:#111"><i class="fa fa-fw fa-table fa-2x"></i> Laporan</a>
                    </li>
                    <!--
                    <li>
                        ini rencana akan ditaruh di dalam link laporan pada cetak "Grafik"
                        <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Grafik</a>
                        titip:
                        penerimaan href="forms.html"
                        penolakan href="forms.html"
                        laporan  href="tables.html"

                    </li>
                    -->
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"; style="color:#111"><i class="fa fa-fw fa-gear fa-2x"></i> Setting <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="<?=base_url()?>index.php/c_berita/"; style="color:#111"><i class="fa fa-support fa-1x"></i> Berita</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>index.php/c_slide/"; style="color:#111"; style="color:#111"><i class="fa fa-tasks fa-1x"></i> Slide</a>
                            </li>
                        </ul>
                    </li>
                    <!--
                    <li>
                        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                    </li>
                    -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Berita
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Berita
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->


                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        
                        <div class="table-responsive">
                        	<a href="<?=base_url()?>index.php/c_slide/insert_slide" class="btn btn-primary" role="button">Tambah Berita </a>
                        	<p><br></p>
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
										<th>ID SLIDE</th>
										<th>NAMA</th>
										<th>GAMBAR</th>
										<th>TGL</th>
										<th>KET</th>
									</tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($admsli as $key) { ?>
									<tr>
										<td><?php echo $key['ID_SLIDE'] ?></td>
										<td><?php echo $key['NAMA'] ?></td>
										<td><?php echo $key['GAMBAR'] ?></td>
										<td><?php echo $key['TGL'] ?></td>
										<td><?php echo $key['KET'] ?></td>
                                        <td><a href="<?=base_url()?>index.php/c_slide/update/<?=$key['ID_SLIDE']?>"><i class="fa fa-pencil-square-o">
</a></td>
                                            <td><a href="<?=base_url()?>index.php/c_slide/delete/<?=$key['ID_SLIDE']?>"><i class="fa fa-times"></i></i>
</a></td>
									</tr>
									<?php		} ?>
	
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
               
                <!-- /.row -->
                <marquee id="mynews">
                            Selamat datang !!! Jika Anda punya pertanyaan, kritik atau saran silahkan untuk menghubungi contact yang telah tersedia atau anda bisa langsung datang ke kantor kami. Terima kasih.
                </marquee>
                
        

                
                

                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../../../admin/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../../admin/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../../../admin/js/plugins/morris/raphael.min.js"></script>
    <script src="../../../admin/js/plugins/morris/morris.min.js"></script>
    <script src="../../../admin/js/plugins/morris/morris-data.js"></script>

</body>

</html>
