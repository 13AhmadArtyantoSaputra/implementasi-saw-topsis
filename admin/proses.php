<?php
error_reporting(0);
session_start();
$hari = date("y");
include '../includes/lib.inc.php';
include APP_ROOT."/includes/class.inc.php";
include APP_ROOT."/includes/auth.inc.php";
include INCLUDES_DIR."/class.paging.php";
$jp = new jcore();
		
switch($_REQUEST[page]){
	
	case "wilayah_ruko":
		switch($_REQUEST[action]){
		case "input":
		 $r = $jp->sql("select count(*) as j from wilayah_ruko WHERE wilayah_ruko='".$_REQUEST['wilayah_ruko']."' ");
		 $o=$jp->fetch($r);
		 $kata = $_POST['id_edit'];
		 $jumlah = strlen($kata);
		 
			if(($o['j']>0) && ($jumlah<=0)){
			  $jp->alert('Data Nama Ruko Sudah Dimasukan...');
			  $jp->gotox("index.php?page=wilayah_ruko");
			  }
				  
				  else if($jumlah>0){
				  
				  $q = "update wilayah_ruko set "
			." wilayah_ruko=\"".$_POST[wilayah_ruko]."\" WHERE kdtype='".$kata."' ";
			//echo $q;
   		    $jp->sql($q);
			
			$jp->alert('Data Nama Ruko\nTelah Diubah...');
			$jp->gotox("index.php?page=wilayah_ruko");
				  
				  }
				  
				  
			 else { 
			
			$q = "replace into wilayah_ruko set "
			." kdtype='".$_POST[kdtype]."',wilayah_ruko=\"".$_POST[wilayah_ruko]."\" ";
						
   		    $jp->sql($q);
			$jp->alert('Data Nama Ruko\nTelah Tersimpan...');
			$jp->gotox("index.php?page=wilayah_ruko");
			}
		break;
		case "delete":
			$r = $jp->sql("delete from wilayah_ruko where kdtype=\"".$_REQUEST[kdtype]."\"");
			$jp->alert('Data Nama Ruko\nTelah Terhapus...');
			$jp->gotox("index.php?page=wilayah_ruko");			
		break;
		default:
			$jp->gotox("index.php?page=wilayah_ruko");		
		break;
		}
	break;
	
	case "daerah_ruko":
		switch($_REQUEST[action]){
		case "input":
		 $r = $jp->sql("select count(*) as j from daerah_ruko WHERE daerah_ruko='".$_REQUEST['daerah_ruko']."' ");
		 $o=$jp->fetch($r);
		 $kata = $_POST['id_edit'];
		 $jumlah = strlen($kata);
		 
			if(($o['j']>0) && ($jumlah<=0)){
			  $jp->alert('Data Sistem Operasi Sudah Dimasukan...');
			  $jp->gotox("index.php?page=daerah_ruko");
			  }
				  
				  else if($jumlah>0){
				  
				  $q = "update daerah_ruko set "
			." daerah_ruko=\"".$_POST[daerah_ruko]."\" WHERE kddaerah='".$kata."' ";
			//echo $q;
   		    $jp->sql($q);
			
			$jp->alert('Data Sistem Operasi\nTelah Diubah...');
			$jp->gotox("index.php?page=daerah_ruko");
				  
				  }
				  
				  
			 else { 
			
			$q = "replace into daerah_ruko set "
			." kddaerah='".$_POST[kddaerah]."',daerah_ruko=\"".$_POST[daerah_ruko]."\" ";
						
   		    $jp->sql($q);
			$jp->alert('Data Sistem Operasi\nTelah Tersimpan...');
			$jp->gotox("index.php?page=daerah_ruko");
			}
		break;
		case "delete":
			$r = $jp->sql("delete from daerah_ruko where kddaerah=\"".$_REQUEST[kddaerah]."\"");
			$jp->alert('Data Sistem Operasi\nTelah Terhapus...');
			$jp->gotox("index.php?page=daerah_ruko");			
		break;
		default:
			$jp->gotox("index.php?page=daerah_ruko");		
		break;
		}
	break;
	
	case "admin":
		switch($_REQUEST[action]){
		case "input":
		 $r = $jp->sql("select count(*) as j from admin WHERE username='".$_REQUEST['username']."' ");
		 $o=$jp->fetch($r);
		 $kata = $_POST['id_edit'];
		 $jumlah = strlen($kata);
		 
			if(($o['j']>0) && ($jumlah<=0)){
			  $jp->alert('Data Admin Sudah Dimasukan...');
			  $jp->gotox("index.php?page=admin");
			  }
				  
				  else if($jumlah>0){
				  
				  $q = "update admin set "
			." password=\"".$_POST[password]."\" WHERE username='".$kata."' ";
			//echo $q;
   		    $jp->sql($q);
			
			$jp->alert('Data Admin\nTelah Diubah...');
			$jp->gotox("index.php?page=admin");
				  
				  }
				  
				  
			 else { 
			
			$q = "replace into admin set "
			." username='".$_POST[username]."',password=\"".$_POST[password]."\" ";
						
   		    $jp->sql($q);
			$jp->alert('Data Admin\nTelah Tersimpan...');
			$jp->gotox("index.php?page=admin");
			}
		break;
		case "delete":
			$r = $jp->sql("delete from admin where username=\"".$_REQUEST[username]."\"");
			$jp->alert('Data Admin\nTelah Terhapus...');
			$jp->gotox("index.php?page=admin");			
		break;
		default:
			$jp->gotox("index.php?page=admin");		
		break;
		}
	break;
	
	case "ruko":
		
		switch($_REQUEST[action]){
				
		case "input":
			
		
		 $r = $jp->sql("select count(*) as j from ruko WHERE kdruko='".$_REQUEST['kdruko']."' ");
		 $o=$jp->fetch($r);
		 $kata = $_POST['id_edit'];
		 $jumlah = strlen($kata);
		 
			if(($o['j']>0) && ($jumlah<=0)){
			  $jp->alert('Data Ruko Sudah Dimasukan...');
			  $jp->gotox("index.php?page=ruko");
			  }
				  
				  else if($jumlah>0){
				  
				 $q = "update ruko set tempat=\"".$_POST[tempat]."\",kdtype=\"".$_POST[kdtype]."\",kddaerah=\"".$_POST[kddaerah]."\",harga='".$_POST[harga]."',luas_ruko='".$_POST[luas_ruko]."',strategis_ruko='".$_POST[strategis_ruko]."',akses_jalan='".$_POST[akses_jalan]."',statusruko='".$_POST[statusruko]."',kontak='".$_POST[kontak]."',fasilitas='".$_POST[fasilitas]."',deskripsi=\"".$_POST[deskripsi]."\" where kdruko='".$kata."' ";
			
			if($_FILES['file']['name']!=''){
			$jp->UploadImage($kata.".jpg",APP_ROOT."/upload/","file");
			}
			//echo $q;
   		    $jp->sql($q);
			
			$jp->alert('Data Ruko\nTelah Diubah...');
			$jp->gotox("index.php?page=ruko");
				  
				  }
				  
				  
			 else { 
			
			$q = "replace into ruko set kdruko='".$_POST[kdruko]."',tempat=\"".$_POST[tempat]."\",kdtype=\"".$_POST[kdtype]."\",kddaerah=\"".$_POST[kddaerah]."\",harga='".$_POST[harga]."',luas_ruko='".$_POST[luas_ruko]."',strategis_ruko='".$_POST[strategis_ruko]."',akses_jalan='".$_POST[akses_jalan]."',kontak='".$_POST[kontak]."',statusruko='".$_POST[statusruko]."',fasilitas='".$_POST[fasilitas]."',deskripsi=\"".$_POST[deskripsi]."\"   ";
			//echo $q;
			if($_FILES['file']['name']!=''){
			$jp->UploadImage($_POST['kdruko'].".jpg",APP_ROOT."/upload/","file");
			}
   		    $jp->sql($q);
			$jp->alert('Data Ruko\nTelah Tersimpan...');
			$jp->gotox("index.php?page=ruko");
			}
		break;
		case "delete":
			$r = $jp->sql("delete from ruko where kdruko=\"".$_REQUEST[kdruko]."\"");
			$jp->alert('Data ruko\nTelah Terhapus...');
			$jp->gotox("index.php?page=ruko");			
		break;
		default:
			$jp->gotox("index.php?page=ruko");		
		break;
		}
	break;
	
	
	
}
?>

 