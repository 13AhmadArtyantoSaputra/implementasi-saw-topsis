	
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>::: <?=$title?> :::</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">


<link href="admin/css/sites1.css" rel="stylesheet" type="text/css" />
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
<form action="index.php?page=hasil" method="post" enctype="multipart/form-data" name="Formrekomendasi" id="Formrekomendasi" >
<div><table width="738"  border="0" align="center" cellpadding="2" cellspacing="0">
  <tr>
       <td width="172"><span class="style19"><h4><b>Tempat Ruko</b></h4></span> </td>
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
    <td width="172"><span class="style19"><h4><b>Luas Ruko</b></h4></span></td>
    <td width="11" align="center"><span class="style19">:</span></td>
      <td width="180" ><select name="luas_ruko" id="luas_ruko" >
      <option value="">---</option>
      <?php
		$r = $jp->sql("select * from ruko group by luas_ruko order by luas_ruko");
		while ($oKel = $jp->fetch($r)){
		$isSelKel = (($oKel[luas_ruko]==$o[luas_ruko])?"selected":"");
		?>
      <option value="<?=$oKel[luas_ruko]?>" <?=$isSelKel?>>
        <?=$oKel[luas_ruko]?>
        </option>
      <?php } ?>
    </select> M2</td>
</tr>

<tr>
<td>&nbsp</td>
</tr>
<tr>

<td width="172" align="center"><span class="style19"></span></td>
      <td width="180" ><select name="strategis_ruko" id="strategis_ruko"><option value="">---</option>

      <?php
		$r = $jp->sql("select * from ruko group by strategis_ruko order by strategis_ruko");
		while ($oKel = $jp->fetch($r)){
		$isSelKel = (($oKel[strategis_ruko]==$o[strategis_ruko])?"selected":"");
		?>

<option value="<?=$oKel[strategis_ruko]?>" <?=$isSelKel?>>
        <?=$oKel[strategis_ruko]?>
      <?php } ?>
    </select> Pilihan Strategis Dibawah</td>
</tr>


   <tr>
       <td width="172"><span class="style19"><br><br>
         <b>Strategis 1</b>
         <p>	Dekat Jalan Utama<br>
	Dekat Wisata<br>
       	Dekat Bandara A.Yani<br>
	Dekat Kawasan Industri<br>
	Dekat Rumah Sakit<br>
	Dekat Kawasan Perumahan<br>
	Dekat Sekolahan<br>
	Dekat Kampus<br>
	Dekat Pasar<br></a><br>
	</td>
<td width="172"><span class="style19">
  <p><b>Strategis 2</b>  </p>
  <p>	Dekat Jalan Utama<br>
	Dekat Rumah Sakit<br>
	Dekat Kawasan Industri<br>
	Dekat Kawasan Perumahan<br>
	Dekat Sekolahan<br>
	Dekat Kampus<br>
	Dekat Pasar<br>
&nbsp<br></a><br></td>
	<td width="172"><span class="style19">
	<H4><b>Strategis 3</b></H4>
<p>	Dekat Jalan Utama<br>
	Dekat Kawasan Industri<br>
	Dekat Kawasan Perumahan<br>
	Dekat Sekolahan<br>
	Dekat Pasar<br>
&nbsp<br>
&nbsp<br>
&nbsp<br></a><br></td>
       
    
    </tr>

<tr>
<td></td>
</tr><br><br>
	<tr>
       <td width="172"><span class="style19"><h4><b>Harga</b></h4></span> </td>
    <td width="11" align="center"><span class="style19">:</span></td>
      <td width="180" ><select name="harga" id="harga">
           <option value="">---</option>
          <option value="harga < 17500000">< Kurang dari Rp.17.500.000</option>
          <option value="harga BETWEEN 17500000 AND 8700000000"> Rp.17.500.000-8.700.000.000</option>
          <option value="harga > 8700000000">>Lebih dari Rp.8.700.000.000</option>
        </select></td>
    </tr>
<tr>
<td>&nbsp</td>
</tr>

<tr>

<td width="11" align="center"><span class="style19"></span></td> 
      <td width="180" ><select name="fasilitas" id="fasilitas" >
      <option value="">---</option>
      <?php
		$r = $jp->sql("select * from ruko group by fasilitas order by fasilitas");
		while ($oKel = $jp->fetch($r)){
		$isSelKel = (($oKel[fasilitas]==$o[fasilitas])?"selected":"");
		?>
      <option value="<?=$oKel[fasilitas]?>" <?=$isSelKel?>>
        <?=$oKel[fasilitas]?>
        </option>
      <?php } ?>
    </select> Pilihan dari 1 sampai 9</td>

</tr>
    <tr>
       <td width="172"><span class="style19">
	
	<br><H4><b>Fasilitas 1</b></H4>
<p>	Listrik 11000 watt<br>
	Air PDAM<br>
       	Tempat Parkir<br>
	Kamar Mandi 3<br>
	Kamar Tidur 2<br>
	Dapur<br></a></td><br>
	
<td width="172"><span class="style19">
	<br><br><H4>&nbsp;</H4>
	<H4><b>Fasilitas 2</b></H4>
	<p>	Listrik 2200 watt<br>
	Air PDAM<br>
	Tempat Parkir<br>
       	AC<br>
	Kamar Mandi <br>
	Kamar Tidur <br>
	Dapur<br></a></td><br>
	
<td width="172"><span class="style19">
	<H4><b>Fasilitas 3</b></H4>
<p>	Listrik 5500 watt<br>
	Air PDAM<br>
       	Tempat Parkir<br>
	Kamar Mandi<br>
	Dapur<br></a></td><br>
	
<tr>
<td width="172"><span class="style19">
	<H4><b>Fasilitas 4</b></H4>
<p>	Listrik 4400 watt<br>
	Air PDAM<br>
       	Tempat Parkir<br>
	Kamar Mandi 2<br>
	Dapur<br></a></td><br>

<td width="172"><span class="style19">
	<H4><b>Fasilitas 5</b></H4>
<p>	Listrik 2300 watt<br>
	Air Artetis<br>
       	Tempat Parkir<br>
	Dapur<br></a></td><br>

<td width="172"><span class="style19">
	<H4><b>Fasilitas 6</b></H4>
<p>	Listrik 2200 watt<br>
	Air PDAM<br>
       	Tempat Parkir<br>
	Kamar Mandi 2<br>
	Dapur<br></a></td><br>
<tr>
<td width="172"><span class="style19">
	<H4><b>Fasilitas 7</b></H4>
<p>	Listrik 2200 watt<br>
	Air PDAM<br>
       	Tempat Parkir<br>
	Kamar Mandi <br>
	Dapur<br></a></td><br>

<td width="172"><span class="style19">
	<H4><b>Fasilitas 8</b></H4>
<p>	Listrik 2200 watt<br>
	Air Artetis<br>
       	Tempat Parkir<br>
	Kamar Mandi<br>
	Dapur<br></a></td><br>

<td width="172"><span class="style19">
	<H4>&nbsp;</H4>
	<H4><b>Fasilitas 9</b></H4>
	<p>	Listrik 1300 watt<br>
	Air PDAM<br>
       	Tempat Parkir<br>
	Kamar Mandi <br>
	Dapur<br></a><br>

       
       </span> </td>
    
    </tr>
    
     <tr>
       <td width="172"><span class="style19"><h4><b>Akses Jalan</b></h4></span> </td>
    <td width="11" align="center"><span class="style19">:</span></td>
      <td width="180" ><select name="akses_jalan" id="akses_jalan" >
      <option value="">---</option>
      <?php
		$r = $jp->sql("select * from ruko group by akses_jalan order by akses_jalan");
		while ($oKel = $jp->fetch($r)){
		$isSelKel = (($oKel[akses_jalan]==$o[akses_jalan])?"selected":"");
		?>
      <option value="<?=$oKel[akses_jalan]?>" <?=$isSelKel?>>
        <?=$oKel[akses_jalan]?>
        </option>
      <?php } ?>
    </select> Meter </td>
    </tr>
    
    
    
   <tr>
  
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td><tr>
    <td colspan="2"><input type="submit" name="Submit" class="btn btn-primary" value="Proses" onClick="return doSubmit()">        
      <input type="reset" name="Submit2" class="btn btn-success" value="Batal" onclick="window.location='index.php?page=rekomendasi'"></td><td width="86">&nbsp;</td>
  </tr>
</table></div>

</form>


</body>
</html>