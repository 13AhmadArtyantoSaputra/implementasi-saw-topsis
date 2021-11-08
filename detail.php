<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	font-weight: bold;
	color: #000000;
}
.style3 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 18px;
	color: #000000;
}
-->
</style></head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="2">
  <!--DWLayoutTable-->
   
  
	<?php
	$rd = $jp->sql("select *,c.daerah_ruko as nm from ruko a inner join wilayah_ruko b on a.kdtype=b.kdtype inner join daerah_ruko c on a.kddaerah=c.kddaerah inner join fasilitas on fasilitas=id_fasilitas  where kdruko='".$_REQUEST[kdruko]."'");
	
	$od = $jp->fetch($rd);
	?>
	
   	 <tr>
         <td width="279" height="24" rowspan="11"  valign="top" class="style3"><?php 
		if(file_exists("upload/small_front_".$od[kdruko].".jpg")){ 
			$filename= "upload/small_front_".$od[kdruko].".jpg";?>
			 <img src="<?=$filename?>" border="0"  width="300"  />
<?php		}
		?>     </td>
          
        </tr>
         <tr>
         <td width="15" height="24"  valign="top" class="style3">&nbsp;    </td>
          <td width="219" height="24"  valign="top" class="style3"> Nama Ruko    </td>
          <td width="13" height="24"  valign="top" class="style3"> :</td>
          <td width="536" height="24"  valign="top"class="style3"> <?=$od[wilayah_ruko]?></td>
        </tr>
        <tr>
         <td width="15" height="24"  valign="top" class="style3">&nbsp;    </td>
          <td width="219" height="24"  valign="top" class="style3"> Tipe    </td>
          <td width="13" height="24"  valign="top" class="style3"> :</td>
          <td width="536" height="24"  valign="top"class="style3"> <?=$od[tempat]?></td>
        </tr>

	<tr>
         <td width="15" height="24"  valign="top" class="style3">&nbsp;    </td>
          <td width="219" height="24"  valign="top" class="style3"> Luas Ruko  </td>
          <td width="13" height="24"  valign="top" class="style3"> :</td>
          <td width="536" height="24"  valign="top"class="style3"> <?=$od[luas_ruko]?> M2</td>
        </tr>

	<tr>
       <td width="15" height="24"  valign="top" class="style3">&nbsp;    </td>
          <td height="24"  valign="top" class="style3"> Strategis  </td>
          <td height="24"  valign="top" class="style3"> :</td>
          <td width="536" height="24"  valign="top"class="style3" align="justify"> <?=$od[deskripsi]?></td>
        </tr>
         
          <tr>
       <td width="15" height="24"  valign="top" class="style3">&nbsp;    </td>
          <td height="24"  valign="top" class="style3"> Harga    </td>
          <td height="24"  valign="top" class="style3"> :</td>
          <td width="536" height="24" valign="top"class="style3"> <?=$jp->pt($od[harga])?></td>
        </tr>



	<tr>
       <td width="15" height="24"  valign="top" class="style3">&nbsp;    </td>
          <td height="24"  valign="top" class="style3"> Fasilitas  </td>
          <td height="24"  valign="top" class="style3"> :</td>
          <td width="536" height="24"  valign="top"class="style3" align="justify"><input type="hidden"<?=$od[fasilitas]?>/>&nbsp<?=$od[keterangan]?></td>
        </tr>
       
          <tr>
        <td width="15" height="24"  valign="top" class="style3">&nbsp;    </td>
          <td height="24"  valign="top" class="style3"> Akses jalan </td>
          <td height="24"  valign="top" class="style3"> :</td>
          <td width="536" height="24"  valign="top"class="style3"> <?=$od[akses_jalan]?> Meter</td>
        </tr>

	<tr>
       <td width="15" height="24"  valign="top" class="style3">&nbsp;    </td>
          <td height="24"  valign="top" class="style3"> Kontak  </td>
          <td height="24"  valign="top" class="style3"> :</td>
          <td width="536" height="24"  valign="top"class="style3" align="justify"> <?=$od[kontak]?></td>
        </tr>

	<tr>
       <td width="15" height="24"  valign="top" class="style3">&nbsp;    </td>
          <td height="24"  valign="top" class="style3"> Status Ruko  </td>
          <td height="24"  valign="top" class="style3"> :</td>
          <td width="536" height="24"  valign="top"class="style3" align="justify"> <?=$od[statusruko]?></td>
        </tr>
        
</table>
</body>
</html>
