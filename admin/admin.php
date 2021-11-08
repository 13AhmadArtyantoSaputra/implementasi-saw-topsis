
<link href="../plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
<script src="../plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="../plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
   
    <!-- page script -->
    <script type="text/javascript">
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
  <?php 

if($_REQUEST[username]!='')
{
	$q = "select * from admin where username='".$_REQUEST[username]."'";
	$r = $jp->sql($q);
	$o = $jp->fetch($r);
	$disabled = " readonly='true' ";	
}
?>
	
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>::: <?=$title?> :::</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script src="js/advviewer.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script>
//==============================SCRIPT TAMBAHAN UNTUK FILTER KEYBOARD======================================================
function numbersonly(e) {
    var unicode = e.charCode ? e.charCode : e.keyCode
    if ((unicode != 8) && (unicode != 13) && (unicode != 37) && (unicode != 39) && (unicode != 9)) { //if the key isn't the backspace key (which we should allow)
        if (unicode < 48 || unicode > 57) //if not a number
            return false //disable key press
    }
}
//===========================================================================================

function ConfirmDel(username){
	if(confirm('Hapus..?')){
		window.location="proses.php?page=admin&action=delete&username="+username;
	}
}
</script>
<link href="css/sites1.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style12 {font-family: Georgia, "Times New Roman", Times, serif; font-size: 12px; color: #000000; }
.style14 {font-size: 16px; font-family: "Courier New", Courier, mono; color: #FFFFFF;  }
.style19 {font-size: 16px; font-family: "Courier New", Courier, mono; color: #008000; }
-->
</style>
</head>
<body>
<script src="js/gen_validatorv31.js" language="javascript"></script>
<form action="proses.php?page=admin&action=input" method="post" enctype="multipart/form-data" name="Formusername" id="Formusername" >
<input name="id_edit" type="hidden" value="<?=$o[username]?>">
<table width="738" border="0" align="center" cellpadding="2" cellspacing="0">
 
  <tr>
    <td width="172"><span class="style19">Username</span> </td>
    <td width="11" align="center"><span class="style19">:</span></td>
	<td width="180"><input name="username" type="text" id="username" value="<?=$o[username]?>" size="30" maxlength="30" <?=$disabled?>>
  </td>
 </tr>

   <tr>
       <td width="172"><span class="style19">Password</span> </td>
    <td width="11" align="center"><span class="style19">:</span></td>
      <td width="180" ><input name="password" type="password" id="password" size="20" maxlength="20" value="<?=$o[password]?>" ></td>
    </tr>
 	
   <tr>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td colspan="2"><input type="submit" name="Submit" class="btn btn-primary" value="Simpan" onClick="return doSubmit()">        
      <input type="reset" name="Submit2" class="btn btn-success" value="Batal" onclick="window.location='index.php?page=admin'"></td><td width="86">&nbsp;</td>
  </tr>
</table>
</form>
<?php 
		
		 $q="select * from admin ";		
		$result=$jp->sql($q);		
		?>
<table id="example1" class="table table-bordered table-striped" width="60%">
 <thead>
  <tr bgcolor="#008000">
    <th align="center" valign="middle"><span class="style14">No.</span></th>
	 <th  valign="middle"><span class="style14">Username</span></th>
     <th valign="middle"><span class="style14">Password</span></th>
   
    <th >	<span class="style14">Proses</span>	</th>
  </tr>
  </thead>
   <?php $n = 0;while($row = $jp->fetch($result)){ $n++;  
   ?>
  <tr>
    <td  align="right" valign="top"><span class="style12"><?=$n?>.</span></td>
	<td  valign="top" align="center"><span class="style12"><?=$row[username]?></span></td>
      <td  valign="top" align="justify"><span class="style12"><?=$row[password]?></span></td>

    <td width="149" align="center" valign="top"><a href="index.php?page=admin&username=<?=$row[username]?>"><img src="images/edit.png" width="32" height="32" border="0" title="Edit" /></a>
    <a href="#" onclick="return ConfirmDel('<?=$row[username]?>')">	 
<img src="images/del.png" width="32" height="32" border="0" title="Hapus" /> </a></td>
  </tr>
  <?php } ?>
</table>
<script>
function doSubmit(){
    var v = new Validator("Formadmin");
	v.addValidation("username","req","Kode admin tidak boleh kosong");
	v.addValidation("nmadmin","req","Nama admin tidak boleh kosong");
	}
</script>
</body>
</html>