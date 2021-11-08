<?php
error_reporting(0);
session_start();
include '../includes/lib.inc.php';
include APP_ROOT."/includes/class.inc.php";
include APP_ROOT."/includes/auth.inc.php";
$jp = new jcore();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SPK Pemilihan Ruko</title>
<meta name="keywords" content="" />
<meta name="description" content="" />

<link href="tooplate_style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" language="javascript" src="js/jquery.min11.js"></script>
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>
<script type="text/javascript">
var $j = jQuery.noConflict();
$j(window).load(function() {
	$j('#slider').nivoSlider({
		effect:'random',
		slices:10,
		animSpeed:500,
		pauseTime:3200,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false,
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.8, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>


<script src="../plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
<script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />   



</head>
<body class="homepage">

<div id="tooplate_wrapper">
	    
    <div id="tooplate_menu">
        
        <ul>
            <li><a href="index.php" >Kelurahan Ruko</a></li>
             <li><a href="index.php?page=daerah_ruko">Daerah Ruko </a></li>
            <li><a href="index.php?page=ruko">Ruko </a></li>
            <li><a href="index.php?page=admin">Admin </a></li>
            <li><a href="logout.php">Logout</a></li>
</ul>        
		
        <div class="cleaner"></div>
    </div> <!-- end of tooplate_menu -->
    
    <div id="tooplate_middle">
    
      <div id="slider">
            <a href="#"><img src="images/slideshow/ruko12.jpg" alt="" title="Sistem Pendukung Keputusan" /></a>
            <a href="#"><img src="images/slideshow/ruko13.jpg" alt="" title="Pemilihan Ruko" /></a>
            <a href="#"><img src="images/slideshow/ruko14.jpg" alt="" title="Metode Hybrid" /></a>
             <a href="#"><img src="images/slideshow/ruko15.jpg" alt="" title="SAW & TOPSIS" /></a>
           
        </div>
	</div>
        
    <div id="tooplate_main1">
    	
        <div class="col_w960">
        	
			<?php if (($_REQUEST[page]=='')||($_REQUEST[page]=='wilayah_ruko')) { ?>			
			
			<h2>Kelurahan Ruko</h2>
			<?php } else if ($_REQUEST[page]=='ruko') {?>
			<h2>Data Ruko</h2>
            	<?php } else if ($_REQUEST[page]=='daerah_ruko') {?>
			<h2>Ruko</h2>
      
			<?php } else if ($_REQUEST[page]=='admin') {?>
			<h2>Data Admin</h2>
                   
			<?php } 
		
		switch($_REQUEST[page]){
		
		
		case "admin":
		include "admin.php";
		break;
		case "ruko":
		include "ruko.php";
		break;
		case "daerah_ruko":
		include "daerah_ruko.php";
		break;
			
		default:
		include('wilayah_ruko.php');
		break;
	
	}
	?>
            
			
			
			
            <div class="cleaner"></div>
           
		</div>
    
    	
        
        <div class="cleaner"></div>
    </div> <!-- end of main -->
        
</div> <!-- end of wrapper -->

<div id="tooplate_cr_wrapper">
	<div id="tooplate_cr">
    	
        Copyright © 2021 <a href="#">Ahmad Artyanto Saputra</a> 
        
    </div> <!-- end of footer wrapper -->
</div> <!-- end of footer -->

</body>
</html>