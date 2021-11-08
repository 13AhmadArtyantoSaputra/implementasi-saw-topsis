 
<link href="plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
   <script src="plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
   
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
 <br />   
  
<?php
$jp->sql("delete from hasil");
$jp->sql("delete from bobot");
$menu = array();




if ($_POST[luas_ruko]!='')
{$menu[0] = 'luas_ruko = '."'".$_POST[luas_ruko]."'";}

if ($_POST[kddaerah]!='')
{$menu[1] = 'kddaerah = '."'".$_POST[kddaerah]."'";}

if ($_POST[harga]!='')
{$menu[2] = $_POST[harga];}

if ($_POST[strategis_ruko]!='')
{$menu[3] = 'strategis_ruko = '."'".$_POST[strategis_ruko]."'";}

if ($_POST[fasilitas]!='')
{$menu[4] = 'fasilitas = '."'".$_POST[fasilitas]."'";}
if ($_POST[akses_jalan]!='')
{$menu[5] = 'akses_jalan = '."'".$_POST[akses_jalan]."'";}
if ($_POST[kdtype]!='')
{$menu[6] = 'kdtype = '."'".$_POST[kdtype]."'" ;}
if ($_POST[kontak]!='')
{$menu[7] = 'kontak = '."'".$_POST[kontak]."'";}
if ($_POST[statusruko]!='')
{$menu[8] = 'statusruko = '."'".$_POST[statusruko]."'";}



$aray="".join(" and ",$menu)."";

if ($aray!='') 
{ 
 $a=$jp->fetch($jp->sql("SELECT MIN(harga) as harga1,MAX(luas_ruko) as luas_ruko1, MAX(strategis_ruko) as strategis_ruko1, MAX(fasilitas) as fasilitas1, MAX(akses_jalan) as akses_jalan1 from ruko where $aray"));
 $nil=$jp->sql("SELECT * FROM ruko where $aray");
}
else
{
 $a=$jp->fetch($jp->sql("SELECT MIN(harga) as harga1,MAX(luas_ruko) as luas_ruko1, MAX(strategis_ruko) as strategis_ruko1, MAX(fasilitas) as fasilitas1, MAX(akses_jalan) as akses_jalan1 from ruko"));
 $nil=$jp->sql("SELECT * FROM ruko");
}
//proses SAW
while($hp = $jp->fetch($nil)) {
$nil1=$jp->fetch($jp->sql("SELECT (".$hp[luas_ruko]."/".$a[luas_ruko1].") * 0.43 as luas_ruko2,(".$a[harga1]."/".$hp[harga].") * 0.12 as harga2,(".$hp[strategis_ruko]."/".$a[strategis_ruko1].") * 0.24 as strategis_ruko2,(".$hp[fasilitas]."/".$a[fasilitas1].") * 0.15 as fasilitas2,(".$hp[akses_jalan]."/".$a[akses_jalan1].") * 0.06 as akses_jalan2 FROM ruko where kdruko='".$hp[kdruko]."'"));
$jp->sql("replace into bobot set kdruko='".$hp[kdruko]."',kriteria='LUAS RUKO',nilai=".$nil1[luas_ruko2]." ");
$jp->sql("replace into bobot set kdruko='".$hp[kdruko]."',kriteria='HARGA',nilai=".$nil1[harga2]." ");
$jp->sql("replace into bobot set kdruko='".$hp[kdruko]."',kriteria='STRATEGIS RUKO',nilai=".$nil1[strategis_ruko2]."");
$jp->sql("replace into bobot set kdruko='".$hp[kdruko]."',kriteria='FASILITAS',nilai=".$nil1[fasilitas2]." ");
$jp->sql("replace into bobot set kdruko='".$hp[kdruko]."',kriteria='AKSES JALAN',nilai=".$nil1[akses_jalan2]." ");
}

//proses TOPSIS
$k=$jp->sql("SELECT kriteria,MAX(nilai) as maks, MIN(nilai) as min FROM bobot GROUP BY kriteria ORDER BY kriteria");
	$stringmaks="";$stringmin="";while($bobot = $jp->fetch($k)){ 
			$jp->sql("update bobot set maks='".$bobot[maks]."',min='".$bobot[min]."' where kriteria='".$bobot[kriteria]."'");
			$stringmaks = $stringmaks.";".$bobot[maks];
			$stringmin = $stringmin.";".$bobot[min];
	    	}
		$akhir = $jp->sql("SELECT kdruko,SQRT(SUM(POW((nilai-maks),2))) AS plus,SQRT(SUM(POW((nilai-MIN),2))) AS min1 FROM bobot GROUP BY kdruko");	
$n=0;while($hasil = $jp->fetch($akhir)){$n++; 
$simpan=$jp->sql("replace into hasil set kdruko='".$hasil[kdruko]."',vi=".$hasil[min1]."/(".$hasil[plus]."+".$hasil[min1].")");
}
?>

  <h2 align="center">Hasil Rekomendasi Pemilihan Ruko </h2>   
<table id="example1" class="table table-bordered table-striped" >
<thead>

  <tr bgcolor="#008000">
    <th align="center" valign="middle"><span class="style22">No. &nbsp</span></th>
	<th valign="middle"><span class="style22"> Area Ruko </span></th>
  <th valign="middle"><span class="style22">Tempat Ruko</span></th>
  <th valign="middle"><span class="style22">Luas Ruko</span></th>
  <th valign="middle"><span class="style22"> Harga &nbsp</span></th>
    
    <th valign="middle"><span class="style22"> Strategis Ruko </span></th>
    <th valign="middle"><span class="style22"> Fasilitas &nbsp</span></th>
    <th valign="middle"><span class="style22"> Akses jalan &nbsp</span></th>


   	<th valign="middle"><span class="style22"> Nilai &nbsp</span></th>
	<th valign="middle"><span class="style22"> Detail &nbsp</span></th>	
  </tr>
  </thead>
  
   <?php $n =0;
   //perangkingan
  $result = $jp->sql("select * from ruko a inner join wilayah_ruko b on a.kdtype=b.kdtype inner join daerah_ruko c on a.kddaerah=c.kddaerah inner join hasil z on a.kdruko=z.kdruko order by vi desc, luas_ruko desc, harga, strategis_ruko desc, fasilitas desc, akses_jalan desc");
	
   while($row = $jp->fetch($result)){ $n++; 
	
   ?>
   
   <tr>
 <td align="center"> <?=$n?> </td>
 <td align="center">  <?=($row[wilayah_ruko])?> </td>
 <td align="center">  <?=($row[tempat])?> </td>
 <td align="center">  <?=($row[luas_ruko])?></td>
 <td align="center">  <?=$jp->pt($row[harga])?></td>
 
 <td align="center">  <?=($row[strategis_ruko])?></td>
  <td align="center">  <?=($row[fasilitas])?></td>
  <td align="center">  <?=($row[akses_jalan])?></td>  
 <td align="center">  <?=($row[vi])?></td>
 
 <td align="center">  <a href="index.php?page=detail&kdruko=<?=$row[kdruko]?> " title="Lihat Detail" target="_blank" ><img src="images/logo.png" width="32" height="32" /> </a></td>

 
 </tr>
   
 
  <?php } ?>
</table>



</body>
</html>