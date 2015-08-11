<script type="text/javascript">
  $(".form_datetime").datetimepicker({
    format:"dd MM yyyy"
  });
</script>
<script type="text/javascript" src="../../ckeditor/ckeditor.js"></script>
<form action="<?=base_url()?>index.php/c_slide/insert_slide" method="post" role="form" enctype="multipart/form-data">
<div class="modal fade" id="acc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i> </button>
        <h4 class="modal-title" id="myModalLabel">Tambah Data</h4>
      </div>
      <div class="modal-body">

            <div class="form-group">
              <label for="">ID SLIDE</label>
              <input type="text" name="id_slide" class="form-control" placeholder="Input field" >
            </div>
            <div class="form-group">
              <label for="">NAMA</label>
              <input type="text" name="nama" class="form-control" id="" placeholder="Input field">
            </div>
            <div class="form-group">
              <label for="">GAMBAR</label>
              <input type="file" name="pic" class="form-control" id="" placeholder="Input Gambar">
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
    </div>
  </div>
</div>
</form>
					