<?php
include "../../config/koneksi.php";
include "../../config/ambil_setting.php";
include "generate_id.php";


session_start();
$sid = session_id();
 if (empty($_SESSION['usern']) AND empty($_SESSION['passw'])){
header("location:../index.php");
}

else{
$modul="bendel_skr";
$id = $_REQUEST['id'];

?>
     <!--
<!DOCTYPE html>  
<html>  
<head>  

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
<meta name="keywords" content="jquery,ui,easy,easyui,web">  
<meta name="description" content="easyui help you build your web page easily!">  
<title></title>  

       <link rel="stylesheet" type="text/css" href="themes/default/easyui.css">  
        <link rel="stylesheet" type="text/css" href="themes/icon.css">  

       <link rel="stylesheet" type="text/css" href="demo/demo.css">  
     
         <script type="text/javascript" src="jquery-1.8.0.min.js"></script>  
         <script type="text/javascript" src="jquery.easyui.min.js"></script> 
       -->
		<link rel="stylesheet" href="css/style_auto.css" type="text/css"/>
		<script>    
        
        $(document).ready(function(){
        
            var loading = $("#loading_skripsi");
        
            var tampilkan = $("#tampilkan_skripsi");
        
          // membuat fungsi untuk menampilkan data
            function tampildata(){
             // membuat efek fading
             tampilkan.hide();
             loading.fadeIn();
        
           $.ajax({
            type:"POST",
            url:"surat/mod_srtSkripsi_rev/proses.php",   
            data: "aksi=tampil",
            success: function(data){                 
                    loading.fadeOut();
              tampilkan.html(data);
              tampilkan.fadeIn(2000);
            }  
           });
           
          }
          
         
          
        
          // jalankan fungsi tampil data
            tampildata();
            
        
          $("#simpan").click(function(){
            // ambil value data dari form
          //  var tindakan  = $("#tindakan").val(); 
            
            var g = $('#dosen').combogrid('grid');
            var r = g.datagrid('getSelected');
        //	$('#karyawan').val(r.NAMA);
             var nip = r.nip;	
			  var penguji = $('#penguji').val();
            // kirim dengan metode POST ke proses.php 
            $.ajax({
             type:"POST",
             url:"surat/mod_srtSkripsi_rev/proses.php",    
             data: "aksi=tambah&nip=" + nip + "&penguji=" + penguji ,
             success: function(data){                 
               $("#info").html(data);
               // setelah proses input data, tampilkan hasilnya
                 tampildata();
             }  
            });
          });
          
          $('.hapus_skripsi_tamp').live("click",function() {
                    var kode = $(this).attr("id");
                    //var dataString = 'aksi=hapus&kode_hapus='+ ID;
                
                  if(confirm("Apakah Anda yakin akan menghapus ini?")){
                    $.ajax({
                      type: "POST",
                      url: "surat/mod_srtSkripsi_rev/hapus.php",
                      data: "kode=" + kode ,
                      cache: false,
                      success: function(data){
                        $("#info").html(data);
                         tampildata();
                      }
                    });
                  }
                  return false;
                });	
          
        
        
        });
        </script>
		
		<script>
		
		//---------------------------------------------------------------------------
        
           function saveSurat_skripsi(){  
		   
			 
                $('#fm_<?php echo $modul; ?>').form('submit',{  
                    url: 'surat/mod_srtSkripsi_rev/aksi_proposal.php?aksi=add',  
                    onSubmit: function(){  
                        return $(this).form('validate');  
                    },  
                    success: function(result){  
                        var result = eval('('+result+')');  
                        if (result.errorMsg){  
                            $.messager.show({  
                                title: 'Error',  
                                msg: result.errorMsg  
                            });  
                        } else {  
                          	viewdata('surat/mod_srtSkripsi_rev/grid_proposal.php');  // close the dialog  
                            $('#grid_<?php echo $modul; ?>').datagrid('reload');    // reload the user data  
							//$('#grid_dosen').datagrid('reload');
                        }  
                    }  
                });  
            } 
			
	

        </script>
 

    <article class="module width_full">
     
      <div class="module_content">
        <form id="fm_<?php echo $modul; ?>" method="post" novalidate="novalidate">
          <table width="100%" border="0" align="center">
            <tr>
              <td width="19%">Nama / NIM</td>
              <td width="81%"><select id="mhs" name="mhs" class="easyui-combogrid" style="width:420px" disabled="disabled" >
              </select> <input type="hidden" name="id"  id="id" size="25" align="absmiddle"/></td>
              <script>
				 $('#mhs').combogrid({  
				delay: 10,  
				mode: 'remote',  
				url: 'surat/master/get_data_mahasiswa.php',  
				value: '<?php echo "$_SESSION[usern]"; ?>',
				idField: 'nim',  
				textField: 'nama',  
				columns: [[  
					{field:'nim',title:'NIM',width:180,sortable:true},  
					{field:'nama',title:'Nama',width:400,sortable:true}  
				]] ,
				
				
			
				}); 
				
			  </script>
            </tr>
            <tr>
              <td>Dosen Pembimbing</td>
              <td> <select id="namadosen2" name="namadosen2" class="easyui-combogrid" style="width:420px" >
              </select></td>
              <script>
				 $('#namadosen2').combogrid({  
				delay: 10,  
				mode: 'remote',  
				url: 'surat/master/get_data_dosen.php',  
				idField: 'nip',  
				textField: 'nama',  
				columns: [[  
					{field:'nip',title:'NIP',width:180,sortable:true},  
					{field:'nama',title:'Nama',width:400,sortable:true}  
				]] ,
				
				}); 
			  </script>
            </tr>
            <tr>
              <td>Judul</td>
              <td><textarea name="judul" cols="70" rows="3" class="easyui-validatebox" id="judul"></textarea></td>
            </tr>
            <tr>
              <td>Hari</td>
              <td><select name="hari" id="hari">
                <option value="Senin">Senin</option>
                  <option value="Selasa">Selasa</option>
                  <option value="Rabu">Rabu</option>
                  <option value="Kamis">Kamis</option>
                  <option value="Jumat">Jumat</option>
                  <option value="Sabtu">Sabtu</option>
</select></td>
            </tr>
            <tr>
              <td>Tanggal</td>
              <td><input name="tanggal" class="easyui-datebox" id="tanggal" data-options="formatter:myformatter,parser:myparser" />
                <em>*) Format : YYYY-MM-DD</em></td>
              <script type="text/javascript">
                    function myformatter(date){
                        var y = date.getFullYear();
                        var m = date.getMonth()+1;
                        var d = date.getDate();
                        return y+'-'+(m<10?('0'+m):m)+'-'+(d<10?('0'+d):d);
                    }
                    function myparser(s){
                        if (!s) return new Date();
                        var ss = s.split('-');
                        var y = parseInt(ss[0],10);
                        var m = parseInt(ss[1],10);
                        var d = parseInt(ss[2],10);
                        if (!isNaN(y) && !isNaN(m) && !isNaN(d)){
                            return new Date(y,m-1,d);
                        } else {
                            return new Date();
                        }
                    }
                </script>
            </tr>
            <tr>
              <td>Jam</td>
              <td><input name="jam" type="text" class="easyui-validatebox" id="jam" value="" size="15" />
                <em>*) Misal : 08.00</em></td>
            </tr>
            <tr>
              <td>Tempat Ujian</td>
              <td><input name="tempat" type="text" class="easyui-validatebox" id="tempat" value="" size="55" /></td>
            </tr>
            <tr>
              <td>Lampiran</td>
              <td><input name="lampiran" type="text" class="easyui-validatebox" id="lampiran" value="-" size="25" />
                <em>*) Kosongi saja jika tidak terdapat lampiran</em></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table>
        </form>
        
        <!-- tabelll ----------------------->
        <article class="module width_full">
          <header>
            <h3 class="tabs_involved"> ..: Dosen Penguji</h3>
            
          </header>
          <label>
          <blockquote>
            <p> Input Dosen Penguji 
              <select id="dosen" name="dosen" class="easyui-combogrid" style="width:420px" >
              </select>
              <select name="penguji" id="penguji">
              	  <option value="KETUA PENGUJI">KETUA PENGUJI</option>
                <option value="PENGUJI I">PENGUJI I</option>
                <option value="PENGUJI II">PENGUJI II</option>
              </select>
<script>
			          //---------------------------------------------------------------------------
					$('#dosen').combogrid({  
						delay: 10,  
						mode: 'remote',  
						url: 'surat/master/get_data_dosen.php',  
						idField: 'nip',  
						textField: 'nama',  
						columns: [[  
							{field:'nip',title:'NIP',width:180,sortable:true},  
							{field:'nama',title:'Nama',width:400,sortable:true}  
						]] ,
						
					
					}); 
					
					$('#dosen').combogrid({
						filter: function(q, row){
							var opts = $(this).combogrid('options');
							return row[opts.textField].indexOf(q) == 0;
						}
					});
			  </script>
              <input type="button" value="Simpan" id="simpan">
              <br />
            <em>*) Penguji II adalah Dosen Pembimbing (input kembali) </em></p>
          </blockquote>
          </label>
          <br />  
          
          <div id="loading_skripsi">
            <p>&nbsp;</p>
            <p>&nbsp;</p>
          </div>
          <div id="tampilkan_skripsi"></div>
          
          
          </p>
        </article>
        </td>
        </tr>
        
        </table>
        <br />
        
        <label>
          <input type="button" name="Submit" value="Simpan" class="alt_btn" id="simpandata" onClick="saveSurat_skripsi()" />
        </label>
        <label>
          <input type="button" name="kembali" value="Kembali" class="alt_btn" onClick="viewdata('surat/mod_srtSkripsi_rev/grid_proposal.php')" />
        </label>         
        
        
        
        
        
        </form>
      </div>
    </article>

<? } ?>