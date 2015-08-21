 
 <script type="text/javascript" src="../../../ckeditor/ckeditor.js"></script>
 <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            UPdate <small>Berita</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>
                                <a href="#">Home</a>    
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a href="#">Dashboard</a>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- /.row -->

                <div class="row">
                    

                    <form action="<?=base_url()?>index.php/c_berita/update/<?php echo $a['ID_BERITA'] ?>" method="post" role="form" enctype="multipart/form-data">

                          <div class="modal-body">

                                <div class="form-group">
                                  <label for=""> <h2><strong> Pada edit data, diharuskan mengisi semua form.<p>Untuk file gambar ukuran 280 X 326 pixel</p></strong></h2></label>
                                </div>
                                <div class="form-group">
                                  <label for="">ID BERITA</label>
                                  <input type="text" name="id_berita" value="<?php echo $a['ID_BERITA'] ?>" class="form-control" placeholder="Input field" >
                                </div>
                                <div class="form-group">
                                  <label for="">JUDUL</label>
                                  <input type="text" name="judul" value="<?php echo $a['JUDUL'] ?>" class="form-control" id="" placeholder="Input field">
                                </div>
                                <div class="form-group">
                                  <label for="">GAMBAR</label>
                                  <input type="file" name="pic" value="<?php echo $a['PIC'] ?>" class="form-control" id="" placeholder="Input Gambar">
                                </div>
                                <div class="form-group">
                                  <label for="">BERITA</label>
                                  <textarea name="berita" value="<?php echo $a['BERITA'] ?>" class="ckeditor" value=""></textarea> 
                                </div>
                                <div class="form-group">
                                  <label for="">TANGGAL</label>
                                  <input type="text" name="tgl" visible="true" value="<?php echo $a['TGL'] ?>" class="form_datetime" id="" placeholder="Input field">
                                </div>
                                              
                                <div class="form-group">
                                  <label for="">KETERANGAN</label>
                                  <input type="text" name="ket" value="<?php echo $a['KET'] ?>" class="form-control" id="" placeholder="Input field">
                                </div>
                          
                          
                          </div>
                        
                        
                    </form>
 
          
                </script>
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

   


