  <?php 
		$q="select * from ruko a inner join wilayah_ruko b on a.kdtype=b.kdtype";
		$result=$jp->sql($q);
		?>
	
 <align="center">
  <div id="gallery">
   <?php $n = 0;
   while($oPromo = $jp->fetch($result))
  		{ 
  			$n++; 
  		?>
		<?php if(($n%1000)!=0) { ?> 
	<div class="gallery_box">
                	<h4><?=$oPromo[tempat]?>  </h4>
				  	<h3>Rp.<?=$jp->pt($oPromo[harga])?>  </h3>
	  <?php	if(file_exists("upload/small_front_".$oPromo[kdruko].".jpg"))
				{ 
					$filename= "upload/small_front_".$oPromo[kdruko].".jpg";
				}else
				{
					$filename= "upload/nophoto.jpg";
				}
				?>
       	<a class="lightbox" href=<?=$filename?> title=<?=$oPromo[daerah_ruko]?>>
       		<img src=<?=$filename?> alt="SPK" width="260" height="275" align="middle"/>		</a>
				
        <a href="index.php?page=detail&amp;kdruko=<?=$oPromo[kdruko]?>" class="more float_r">Deskripsi</a>	  </div>
				
				<?php } else { ?> 
								
				<div class="gallery_box">
                	<h4><?=$oPromo[tempat]?>  </h4>
				  	<h3>Rp.<?=$jp->pt($oPromo[harga])?>  </h3>
				<?php	if(file_exists("upload/small_front_".$oPromo[kdruko].".jpg"))
				{ 
					$filename= "upload/small
_front_".$oPromo[kdruko].".jpg";
				}else
				{
					$filename= "upload/nophoto.jpg";
				}
				?>
                	<a class="lightbox" href=<?=$filename?> title=<?=$oPromo[daerah_ruko]?>>
                		<img src=<?=$filename?> alt="SPK" width="265" height="275"/>
					</a>
				
                    <a href="index.php?page=detail&amp;kdruko=<?=$oPromo[kdruko]?>" class="more float_r">Detail</a>
					
				</div>
				<?php } ?>
				
								
				<?php } ?>
</div>






