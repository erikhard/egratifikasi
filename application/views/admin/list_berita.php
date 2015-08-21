
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
                        	
                        	<a href="<?=base_url()?>index.php/c_berita/insert_berita" class="btn btn-primary" role="button">Tambah Berita</a>
                        	<p><br></p>
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
										<th>ID BERITA</th>
										<th>JUDUL</th>
										<th>BERITA</th>
										<th>PIC</th>
										<th>TGL</th>
										<th>KET</th>
									</tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($admnews as $key) { ?>
										<tr>
											<td><?php echo $key['ID_BERITA'] ?></td>
											<td><?php echo $key['JUDUL'] ?></td>
											<td><?php echo substr($key['BERITA'], 0, 100) ?></td>
											<td><?php echo $key['PIC'] ?></td>
											<td><?php echo $key['TGL'] ?></td>
											<td><?php echo $key['KET'] ?></td>
											<td><a href="<?=base_url()?>index.php/c_berita/update/<?=$key['ID_BERITA']?>"><i class="fa fa-pencil-square-o"></i>
</a></td>
                                            <td><a href="<?=base_url()?>index.php/c_berita/delete/<?=$key['ID_BERITA']?>"><i class="fa fa-times"></i>
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