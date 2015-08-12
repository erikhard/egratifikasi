<script type="text/javascript" src="../../../ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?php echo site_url(); ?>assets_bs/js/prototype/prototype.js"></script>
<script type="text/javascript" src="<?php echo site_url(); ?>assets_bs/js/prototype/validation.js"></script>
<script type="text/javascript" src="<?php echo site_url(); ?>assets_bs/js/scriptaculous/effects.js"></script>
<script type="text/javascript" src="<?php echo site_url(); ?>assets_bs/js/varien/form.js"></script>
<form action="<?=base_url()?>index.php/c_slide/update/<?php echo $a['ID_SLIDE'] ?>" method="post" role="form" enctype="multipart/form-data">
<div class="modal fade" id="acc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i> </button>
        <h4 class="modal-title" id="myModalLabel">Tambah Data</h4>
      </div>
      <div class="modal-body">

            <div class="form-group">
              <label for=""> <h2><strong> Pada edit data, diharuskan mengisi semua form.<p>Untuk file gambar ukuran 280 X 326 pixel</p></strong></h2></label>
            </div>
            <div class="form-group">
              <label for="">ID SLIDE</label>
              <input type="text" name="id_berita" value="<?php echo $a['ID_SLIDE'] ?>" class="form-control" placeholder="Input field" >
            </div>
            <div class="form-group">
              <label for="">NAMA</label>
              <input type="text" name="judul" value="<?php echo $a['NAMA'] ?>" class="form-control" id="" placeholder="Input field">
            </div>
            <div class="form-group">
              <label for="">GAMBAR</label>
              <input type="file" name="pic" value="<?php echo $a['GAMBAR'] ?>" class="form-control" id="" placeholder="Input Gambar">
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
      <div class="modal-footer">
             <input type="submit" name="btn_dft" value="Masukkan" class="btn btn-success">
             <button type="button" name="submit" class="btn btn-danger" data-dismiss="modal" aria-label="Close">Batal</button>
      </div>
    </div>
  </div>
</div>
</form>
 <script type="text/javascript">
            //<![CDATA[
              var dataForm = new VarienForm('form-validate', true);
                //]]>
            </script>
					