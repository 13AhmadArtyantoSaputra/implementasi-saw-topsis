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

if($_REQUEST[kdruko]!='')
{
	$q = "select * from ruko where kdruko='".$_REQUEST[kdruko]."'";
	$r = $jp->sql($q);
	$o = $jp->fetch($r);
	$disabled = " readonly='true' ";
	$kode = $o[kdruko];
}
else
{
$q1= "SELECT max(RIGHT(kdruko,4))+1 as maks from ruko ";
	$r1 = $jp->sql($q1);
	$o1 = $jp->fetch($r1);
	
	if (strlen($o1[maks])<=0) {
	 $kode= 'H0001';
	 }
	else if (strlen($o1[maks])==1) {
	 $kode= 'H000'.$o1[maks];
	 }
	else if (strlen($o1[maks])==2) {
	 $kode= 'H00'.$o1[maks];
	 } 
	 else if (strlen($o1[maks])==3) {
	 $kode= 'H0'.$o1[maks];
	 } 
	 else if (strlen($o1[maks])==4) {
	 $kode= 'H'.$o1[maks];
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


function ConfirmDel(kdruko){
	if(confirm('Hapus..?')){
		window.location="proses.php?page=ruko&action=delete&kdruko="+kdruko;
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
<form action="proses.php?page=ruko&action=input" method="post" enctype="multipart/form-data" name="Formruko" id="Formruko" >
<input name="id_edit" type="hidden" value="<?=$o[kdruko]?>">
<table width="738" border="0" align="center" cellpadding="2" cellspacing="0">
  
  <tr>
    <td width="172"><span class="style19">Kode Ruko</span> </td>
    <td width="11" align="center"><span class="style19">:</span></td>
	<td width="180"><input name="kdruko" type="text" id="kdruko" value="<?=$kode?>" size="5" maxlength="5"></td>
 </tr>
 <tr>
       <td width="172"><span class="style19">Daerah Ruko</span> </td>
    <td width="11" align="center"><span class="style19">:</span></td>
      <td width="180" ><select name="kdtype" id="kdtype" >
      <option value="">---</option>
      <?php
		$r = $jp->sql("select * from wilayah_ruko order by wilayah_ruko");
		while ($oKel = $jp->fetch($r)){
		$isSelKel = (($oKel[kdtype]==$o[kdtype])?"selected":"");
		?>
      <option value="<?=$oKel[kdtype]?>" <?=$isSelKel?>>
        <?=$oKel[wilayah_ruko]?>
        </option>
      <?php } ?>
    </select></td>
    </tr>
    <tr>
    <td width="172"><span class="style19">Tempat Ruko</span> </td>
    <td width="11" align="center"><span class="style19">:</span></td>
	
    <td width="180">
	
	<input name="tempat" type="text" id="tempat" value="<?=$o[tempat]?>" size="30" maxlength="50" >	

	  </td>
		
  </tr>
   
     <tr>
       <td width="172"><span class="style19">Kode Wilayah Ruko</span> </td>
    <td width="11" align="center"><span class="style19">:</span></td>
      <td width="180" ><select name="kddaerah" id="kddaerah" >
      <option value="">---</option>
      <?php
		$r = $jp->sql("select * from daerah_ruko order by kddaerah");
		while ($oKel = $jp->fetch($r)){
		$isSelKel = (($oKel[kddaerah]==$o[kddaerah])?"selected":"");
		?>
      <option value="<?=$oKel[kddaerah]?>" <?=$isSelKel?>>
        <?=$oKel[kddaerah]?>
        </option>
      <?php } ?>
    </select></td>
    </tr>



       <tr>
       <td width="172"><span class="style19">Harga</span> </td>
    <td width="11" align="center"><span class="style19">:</span></td>
      <td width="180" ><input name="harga" type="text" id="harga" value="<?=$o[harga]?>" size="20" maxlength="20"  onKeyPress="return numbersonly(event);" ></td>
    </tr>
    
      <tr>
       <td width="172"><span class="style19">Luas Ruko</span> </td>
    <td width="11" align="center"><span class="style19">:</span></td>
      <td width="180" ><input name="luas_ruko" type="text" id="luas_ruko" value="<?=$o[luas_ruko]?>" size="5" maxlength="5"  onKeyPress="return numbersonly(event);" > <span class="style19"> M2  </span></td>
    </tr>
    <tr>
       <td width="172"><span class="style19">Akses Jalan</span> </td>
    <td width="11" align="center"><span class="style19">:</span></td>
      <td width="180" ><input name="akses_jalan" type="text" id="akses_jalan" value="<?=$o[akses_jalan]?>" size="5" maxlength="5" onKeyPress="return numbersonly(event);"> <span class="style19"> Meter </span></td>
    </tr>
     <tr>
       <td width="172"><span class="style19">Strategis Ruko</span> </td>
    <td width="11" align="center"><span class="style19">:</span></td>
      <td width="180" ><input name="strategis_ruko" type="text" id="strategis_ruko" value="<?=$o[strategis_ruko]?>" size="5" maxlength="5"   > <span class="style19">Pilih dari 1 sampai 3 </span></td>
    </tr>
     
    <tr>
       <td width="172"><span class="style19">Deskripsi</span> </td>
    <td width="11" align="center"><span class="style19">:</span></td>
      <td width="180" ><textarea name="deskripsi" cols="50" rows="5" id="deskripsi"><?=$o[deskripsi]?>
      </textarea></td>
    </tr>

    <tr>
       <td width="172"><span class="style19">Fasilitas</span> </td>
    <td width="11" align="center"><span class="style19">:</span></td>
      <td width="180" ><input name="fasilitas" type="text" id="fasilitas" value="<?=$o[fasilitas]?>" size="5" maxlength="5" onKeyPress="return numbersonly(event);"> <span class="style19">Pilih dari 1 sampai 9 </span></td>
    </tr>

    <tr>
    <td width="172"><span class="style19">Kontak</span> </td>
    <td width="11" align="center"><span class="style19">:</span></td>	
    <td width="180"><input name="kontak" type="text" id="kontak" value="<?=$o[kontak]?>" size="15" maxlength="30" >	

	  </td>
		
  </tr>




<tr>
    <td width="172"><span class="style19">Status Ruko</span> </td>
    <td width="11" align="center"><span class="style19">:</span></td>
	
    <td width="180">
	
	<input name="statusruko" type="text" id="statusruko" value="<?=$o[statusruko]?>" size="8" maxlength="30" >	

	  </td>		
  </tr>



	
    
     
      <tr>
       <td width="172"><span class="style19">Foto</span> </td>
    <td width="11" align="center"><span class="style19">:</span></td>
      <td width="180" ><?php 
		if(file_exists("../upload/small_med_".$o[kdruko].".jpg")){ 
			$filename= "../upload/small_med_".$o[kdruko].".jpg"; ?>
			   <img src="<?=$filename?>" border="0"> 
		<?php }	?>
         
			<input type="file" name="file"></td>
    </tr>
    
	
   <tr>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td colspan="2"><input type="submit" name="Submit" class="btn btn-primary" value="Simpan" onClick="return doSubmit()">        
      <input type="reset" name="Submit2" class="btn btn-success" value="Batal" onclick="window.location='index.php?page=ruko'"></td><td width="86">&nbsp;</td>
  </tr>
</table>

</form>

<?php 


		
		 $q="select * from ruko a inner join wilayah_ruko b on a.kdtype=b.kdtype inner join daerah_ruko c on a.kddaerah=c.kddaerah ";
		
		
		$result=$jp->sql($q);
		
		?>
<table id="example1" class="table table-bordered table-striped" width="100%">
 <thead>
  <tr bgcolor="#008000">
    <th align="center" valign="middle"><span class="style14">No.</span></th>
   <th  valign="middle"><span class="style14">Kode Ruko</span></th>
     <th valign="middle"><span class="style14">Daerah Ruko</span></th>

<th valign="middle"><span class="style14">Tempat Ruko</span></th>
 
<th valign="middle"><span class="style14">Harga &nbsp</span></th>
   <th valign="middle"><span class="style14">Luas Ruko</span></th>
   <th valign="middle"><span class="style14">Akses Jalan</span></th>
   <th valign="middle"><span class="style14">Strategis &nbsp</span></th>
   <th valign="middle"><span class="style14">Fasilitas &nbsp</span></th>
   <th valign="middle"><span class="style14">Kontak &nbsp</span></th>
   <th valign="middle"><span class="style14">Status Ruko</span></th>
    <th >	<span class="style14">Proses &nbsp</span>	</th>
  </tr>
  </thead>
   <?php $n = 0;while($row = $jp->fetch($result)){ $n++; 
 
   ?>
  <tr>
    <td align="center" valign="top"><span class="style12"><?=$n?>.</span></td>
  <td valign="top" align="center"><span class="style12"><b> <?=$row[kdruko]?></b></span></td>
  

  
      <td valign="top" align="justify"><span class="style12"><?=$row[wilayah_ruko]?></span></td>
      
<td valign="top" align="center"><span class="style12"><?=$row[tempat]?></span></td>

     <td valign="top" align="right"><span class="style12"><?=$jp->pt($row[harga])?></span></td>
      <td valign="top" align="center"><span class="style12"><?=$row[luas_ruko]?></span></td>
      <td valign="top" align="center"><span class="style12"><?=($row[akses_jalan])?></span></td>
      <td valign="top" align="center"><span class="style12"><?=$row[strategis_ruko]?></span></td>
      <td valign="top" align="center"><span class="style12"><?=($row[fasilitas])?></span></td>
	<td valign="top" align="center"><span class="style12"><?=($row[kontak])?></span></td>
	<td valign="top" align="center"><span class="style12"><?=($row[statusruko])?></span></td>
        <td align="center" valign="top"><a href="index.php?page=ruko&kdruko=<?=$row[kdruko]?>"><img src="images/mengedit.png" width="32" height="32" border="0" title="Edit" /></a><a href="#" onclick="return ConfirmDel('<?=$row[kdruko]?>')">	 <img src="images/del.png" width="32" height="32" border="0" title="Hapus" /> </a></td>
  </tr>
  <?php } ?>
</table>
<?=$linkHalaman?>
	
<script>
function doSubmit(){
    var v = new Validator("Formruko");
	v.addValidation("kdruko","req","Kode Ruko tidak boleh kosong");
	v.addValidation("tempat","req","Tempat tidak boleh kosong");
	v.addValidation("kdtype","req","Nama Ruko tidak boleh kosong");
	v.addValidation("kddaerah","req"," Nama mdl tidak boleh kosong");

	
	}
</script>
</body>
</html>