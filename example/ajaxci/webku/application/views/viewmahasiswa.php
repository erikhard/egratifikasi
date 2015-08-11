<!DOCTYPE>
<html>
<head>
    <title><?php echo $judul ?></title>
    <link href="<?php echo base_url()?>css/style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="<?php echo base_url()?>js/jquery.js"></script>
	
	<script type="text/javascript" >
        $().ready(function(){
            $("#tombolTambah").click(function(){
                $.ajax({
                    url : "<?php base_url() ?>index.php/conmahasiswa/tambah",
                    beforeSend: function(){
                                        $("#data").html("Loading...");
                                    },
                    success:    function(html){
                                    $("#data").html(html);
                                    $("#btnSimpan").show();
                                    $("#tombolTambah").hide();

                                }                
                });            
            }); 
            
            $("#btnSimpan").click(function(){
   
   			var nim = $("#nim").val();
   			var nama = $("#nama").val();
   			var jurusan = $("#jurusan").val();
  		 	var angkatan = $("#angkatan").val();
  		 	var ipk = $("#ipk").val();             
 		  	$.ajax({
          		url :"<?php echo base_url() ?>index.php/conmahasiswa/tambah",
          		type:"post",
          		beforeSend: function(){
                      $("#data").html("Loading...");
                                    },
          		data: "nim="+nim+"&nama="+nama+"&jurusan="+jurusan+"&angkatan="+angkatan+"&ipk="+ipk,
          		success: function(html){                   
                   $("#notifikasi").html('Data berhasil disimpan');
                   $("#data").load("index.php/conmahasiswa/index #data");
                   $("#notifikasi").fadeIn(2500);
                   $("#notifikasi").fadeOut(2500);  
                   $("#btnSimpan").hide();
                   $("#tombolTambah").show();
                   }                      
        });            
   		});         
        });
        
      	
    </script>
<head>
<body>
    <div id="notifikasi" style="display:none"></div>
    <div id="wraper">
    
        <div id="header">
            <h2>CRUD Dengang CodeIgniter + Ajax + JQuery</h2>
        </div>
        
        
        <div id="content">
            <div id="paneltombol">
                <input type="button"  class="tombol" id="btnSimpan" value="Simpan" style="display:none">
                <input type="button" class="tombol" id="tombolTambah" name="tombolTambah" value="Tambah Data">
            </div>
            
            <div id="data">                
                <table border="0" width="100%" cellspacing="0" >
                <tr>
                    <th>Nim</th>
                    <th>Nama</th>
                    <th>Jurusan</th> 
                    <th>Angkatan</th>
                    <th>IPK</th>
                </tr>
                <?php foreach($mahasiswa as $baris):?>
                <tr>
                    <td><?php echo $baris->nim ?></td>
                    <td><?php echo $baris->nama ?></td>
                    <td><?php echo $baris->jurusan ?></td>
                    <td><?php echo $baris->angkatan ?></td>
                    <td><?php echo $baris->ipk ?></td>
                </tr>
                <?php endforeach ?>
                </table>
            </div>
                    
        </div>    
    </div>
</body>
</html>
