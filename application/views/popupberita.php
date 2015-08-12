<!DOCTYPE html>
<html lang="en">
<head>
<title>Katalog Buku</title>
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap CSS  -->
    <link rel="stylesheet" href="<?php echo base_url('assets_bs/asset/css/bootstrap.min.css')?>" type="text/css" media="screen">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets_bs/css/font-awesome.min.css')?>" type="text/css" media="screen">

    <!-- Margo CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets_bs/css/style.css')?>" media="screen">

    <!-- Responsive CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets_bs/css/responsive.css')?>" media="screen">

    <!-- Css3 Transitions Styles  -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets_bs/css/animate.css')?>" media="screen">

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets_bs/css/colors/red.css') ?>" title="red" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets_bs/css/colors/jade.css') ?>" title="jade" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets_bs/css/colors/green.css') ?>" title="green" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets_bs/css/colors/blue.css') ?>" title="blue" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets_bs/css/colors/beige.css') ?>" title="beige" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets_bs/css/colors/cyan.css') ?>" title="cyan" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets_bs/css/colors/orange.css') ?>" title="orange" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets_bs/css/colors/peach.css') ?>" title="peach" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets_bs/css/colors/pink.css') ?>" title="pink" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets_bs/css/colors/purple.css') ?>" title="purple" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets_bs/css/colors/sky-blue.css') ?>" title="sky-blue" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets_bs/css/colors/yellow.css') ?>" title="yellow" media="screen" />


    <!-- Margo JS  -->
    <script type="text/javascript" src="<?php echo base_url('assets_bs/js/jquery-2.1.1.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets_bs/js/jquery.migrate.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets_bs/js/modernizrr.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets_bs/asset/js/bootstrap.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets_bs/js/jquery.fitvids.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets_bs/js/owl.carousel.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets_bs/js/nivo-lightbox.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets_bs/js/jquery.isotope.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets_bs/js/jquery.appear.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets_bs/js/count-to.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets_bs/js/jquery.textillate.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets_bs/js/jquery.lettering.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets_bs/js/jquery.easypiechart.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets_bs/js/jquery.nicescroll.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets_bs/js/jquery.parallax.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets_bs/js/mediaelement-and-player.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets_bs/js/script.js')?>"></script>

</head>
<body>
<table width="500" border="1" align="center">
<!-- Baris ke1-untuk KOP-->
<tr height="50" align="center"><td><h2>KATALOG BERITA</h2></td></tr>

<!-- baris ke 2 : untuk body -->
<tr height="200"><td>
<!--Tabel anak untuk data buku-->
	<table width="90%" align="center">
	<tr><td width="140">Kode Buku</td><td>: <?php echo $popnews['ID_BERITA'];?></td><tr>
	<tr valign="center"><td>Judul Buku</td><td>: <?php echo $popnews['JUDUL'];?></td><tr>
	<tr><td>Pengarang</td><td>: <?php echo $popnews['BERITA'];?></td><tr>
	</table>
<!-- akhir tabel data buku-->
</td></tr>


<!-- baris ke 3 : untuk footer -->
<tr align="center"><td><i><small>Printed By SisoPustaka &copy; 2015</small><i></td></tr>
</table>
</body>
</html>