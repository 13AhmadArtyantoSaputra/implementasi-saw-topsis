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

if($_REQUEST[kdtype]!='')
{
	$q = "select * from wilayah_ruko where kdtype='".$_REQUEST[kdtype]."'";
	$r = $jp->sql($q);
	$o = $jp->fetch($r);
	$disabled = " readonly='true' ";
	$kode = $o[kdtype];
}
else
{
$q1= "SELECT max(RIGHT(kdtype,2))+1 as maks from wilayah_ruko ";
	$r1 = $jp->sql($q1);
	$o1 = $jp->fetch($r1);
	
	if (strlen($o1[maks])<=0) {
	 $kode= 'R'.'01';
	 }
	else if (strlen($o1[maks])==1) {
	 $kode= 'R0'.$o1[maks];
	 }
	else if (strlen($o1[maks])==2) {
	 $kode= 'R'.$o1[maks];
	 } 	 
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


function ConfirmDel(kdtype){
	if(confirm('Hapus..?')){
		window.location="proses.php?page=wilayah_ruko&action=delete&kdtype="+kdtype;
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
<form action="proses.php?page=wilayah_ruko&action=input" method="post" enctype="multipart/form-data" name="Formkdtype" id="Formkdtype" >
<input name="id_edit" type="hidden" value="<?=$o[kdtype]?>">
<table width="738" border="0" align="center" cellpadding="2" cellspacing="0">
  
  <tr>
    <td width="172"><span class="style19">Kode Wilayah Ruko</span> </td>
    <td width="11" align="center"><span class="style19">:</span></td>
	<td width="180"><input name="kdtype" type="text" id="kdtype" value="<?=$kode?>" size="3" maxlength="3"  readonly>
  </td>
 </tr>

  <tr>
       <td width="172"><span class="style19">Wilayah Ruko</span> </td>
    <td width="11" align="center"><span class="style19">:</span></td>
      <td width="180" ><input name="wilayah_ruko" type="text" id="wilayah_ruko" size="30" maxlength="30" value="<?=$o[wilayah_ruko]?>" ></td>
  </tr>
  	
   <tr>
    	<td>&nbsp;</td>
    	<td align="center">&nbsp;</td>
    	<td colspan="2"><input type="submit" name="Submit" class="btn btn-primary" value="Simpan" onClick="return doSubmit()">        
      	<input type="reset" name="Submit2" class="btn btn-success" value="Batal" onclick="window.location='index.php?page=merk'"></td><td width="86">&nbsp;</td>
  </tr>
</table>
</form>

<?php 
		
		 $q="select * from wilayah_ruko ";	
		$result=$jp->sql($q);
		
		?>
<table id="example1" class="table table-bordered table-striped" width="60%">
 <thead>
  <tr bgcolor="#008000">
    <th width="52" align="center" valign="middle"><span class="style14">No. &nbsp &nbsp</span></th>
	 <th width="141"  valign="middle"><span class="style14">Kode Wilayah Ruko</span></th>
     <th width="287" valign="middle"><span class="style14">Wilayah Ruko &nbsp &nbsp &nbsp</span></th>
   
    <th >	<span class="style14">Proses &nbsp &nbsp</span>	</th>
  </tr>
  </thead>
   <?php $n = 0;while($row = $jp->fetch($result)){ $n++; 
 
   ?>
  <tr>
    <td  align="right" valign="top"><span class="style12"><?=$n?>.</span></td>
	<td  valign="top" align="center"><span class="style12"><?=$row[kdtype]?></span></td>
      <td  valign="top" align="justify"><span class="style12"><?=$row[wilayah_ruko]?></span></td>

    <td width="149" align="center" valign="top"><a href="index.php?page=wilayah_ruko&kdtype=<?=$row[kdtype]?>"><img src="images/mengedit.png" width="32" height="32" border="0" title="Edit" /></a>
    <a href="#" onclick="return ConfirmDel('<?=$row[kdtype]?>')">	 <img src="images/del.png" width="32" height="32" border="0" title="Hapus" /> </a></td>
  </tr>
  <?php } ?>
</table>
	
<script>
function doSubmit(){
    var v = new Validator("Formwilayah_ruko");
	v.addValidation("kdtype","req","Kode Nama Ruko tidak boleh kosong");
	v.addValidation("wilayah_ruko","req","Nama Ruko tidak boleh kosong");
	}
</script>
	</body>
	</html>