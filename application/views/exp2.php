<?php
include "../../config/koneksi.php";
include "../../config/tgl.php";
include "../../config/ambil_setting.php";
include "generate_id.php";


session_start();
$sid = session_id();
 if (empty($_SESSION['usern']) AND empty($_SESSION['passw'])){
header("location:../index.php");
}

else{
if ($_POST['aksi']=='tampil'){
	
	  ?>
  <div class="tab_container">
   <table border="0" class="tablesorter" cellspacing="0">
   <thead>
                       <tr class="odd2">
                         <th width="5%"><div align="center">No.</div></th>
                         <th width="20%"><div align="center">NIP </div></th>
						  <th width="25%"><div align="center">Nama Penguji</div></th>
                          <th width="20%"><div align="center">Status</div></th>
                         <th width="5%"><div align="center">Option</div></th>
                       </tr>
     </thead>
     <?php
  //$tampil=mysql_query('select * from tbl_pesan order by id_pesan desc');
  
  //while($r=mysql_fetch_array($tampil)){
   
        
		
    $tampil = mysql_query("SELECT
							a.id_skripsi_d as kode,
							a.id_session,
							a.nip_penguji,a.status,
							b.nama
							FROM
							surat_skripsi_detail_tamp_rev AS a
							Inner Join dosen AS b ON a.nip_penguji = b.nip
							WHERE a.id_session='$sid'
							ORDER BY a.status ASC");
		$no = 1;
		$ketemu=mysql_num_rows($tampil);
		if($ketemu <= 0){
		 echo "<tr class='odd gradeX'>
		 				<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
			</tr>";
		}
		else
		{
			while($r=mysql_fetch_array($tampil))
			{
			
			  echo "<tr class='odd gradeX'><td><div align='center'>$no</div></td>
						<td><div align='center'>$r[nip_penguji]</div></td>
						<td><div align='center'>$r[nama]</div></td>
						<td><div align='center'>$r[status]</div></td>
						<td><div align='center'><a class='hapus_skripsi_tamp' href='#' id='$r[kode]'>Delete</a></div></td>
						</tr>";
			  $no++;
			}
			
		}
	?>
    </tbody>
                       
     </table>
                     
  </div>
  <?php
  }

elseif ($_POST['aksi']=='tambah'){
$nip  = $_POST['nip'];
$penguji = $_POST['penguji'];

$input=mysql_query("insert into surat_skripsi_detail_tamp_rev(id_session,nip_penguji,status) values('$sid','$nip','$penguji')");

	if ($input){
	  echo 'Data berhasil disimpan ...';
	}
	else{
	  echo 'Data gagal disimpan ...';
	}
}

elseif ($_POST['aksi']=='hapus'){
 $kode=$_POST['kode'];
 echo $kode;
$input=mysql_query("delete surat_skripsi_detail_tamp_rev where id_skripsi_d = '$kode'");
echo $input;
	
	
 
 }
 
}
?>
