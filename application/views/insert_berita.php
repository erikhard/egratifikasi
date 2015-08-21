 <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Statistics & Report</small>
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
                    <script type="text/javascript" src="../../ckeditor/ckeditor.js"></script>
                    <form action="<?=base_url()?>index.php/c_berita/insert_berita" method="post" role="form" enctype="multipart/form-data">
                    
                            <h4 class="modal-title" id="myModalLabel">Tambah Data</h4>
                          
                          <div class="modal-body">

                                <div class="form-group">
                                  <label for="">ID BERITA</label>
                                  <input type="text" name="id_berita"  class="form-control" placeholder="Input field" >
                                  
                                </div>
                                <div class="form-group">
                                  <label for="">JUDUL</label>
                                  <input type="text" name="judul" class="form-control" id="" placeholder="Input field">
                                  
                                </div>
                                <div class="form-group">
                                  <label for="">GAMBAR</label>
                                  <input type="file" name="pic" class="form-control" id="" placeholder="Input Gambar"> 
                                  <p class="help-block">*File gambar harus  280 X 326 px</p>
                                </div>
                                <div class="form-group">
                                  <label for="">BERITA</label>
                                  <textarea name="berita" class="ckeditor"></textarea> 
                                </div>
                                <div class="form-group">
                                  <label for="">TANGGAL</label>
                                  <input type="text" name="tgl" class="form_datetime" id="" placeholder="Input field" value="<?php echo date('d-m-Y') ?>">
                                </div>
                                              
                                <div class="form-group">
                                  <label for="">KETERANGAN</label>
                                  <input type="text" name="ket" class="form-control" id="" placeholder="Input field">
                                </div>
                          
                          
                          </div>
                          <div class="modal-footer">
                                 <input type="submit" name="btn_dft" value="Masukkan" class="btn btn-success">
                                 <button type="button" name="submit" class="btn btn-danger" data-dismiss="modal" aria-label="Close">Batal</button>
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

   

