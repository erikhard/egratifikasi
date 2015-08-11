<form action="<?=base_url()?>index.php/c_crud/insert" method="post" role="form">
<div class="modal fade" id="acc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i> </button>
        <h4 class="modal-title" id="myModalLabel">Tambah Data</h4>
      </div>
      <div class="modal-body">

            <div class="form-group">
              <label for="">USERNAME</label>
              <input type="text" name="user" class="form-control" placeholder="Input field" >
            </div>
            <div class="form-group">
              <label for="">PASSWORD</label>
              <input type="text" name="pass" class="form-control" id="" placeholder="Input field">
            </div>
            <div class="form-group">
              <label for="">STATUS</label>
              <input type="text" name="status" class="form-control" id="" placeholder="Input field">
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
					