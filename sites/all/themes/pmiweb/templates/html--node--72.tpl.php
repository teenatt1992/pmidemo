<?php print $doctype; ?>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf->version . $rdf->namespaces; ?>>
<head<?php print $rdf->profile; ?>>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>  
  <?php print $styles; ?>
  <?php print $scripts; ?>

<title>Blocky UI Kit a Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
	<!--fonts-->
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<!--//fonts-->
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- for-mobile-apps -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Blocky UI Kit Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //for-mobile-apps -->
	<!-- js -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
	<!-- js -->
	<!----Calender -------->
		  <link rel="stylesheet" href="css/clndr.css" type="text/css" />
		  <script src="js/underscore-min.js" type="text/javascript"></script>
		  <script src= "js/moment-2.2.1.js" type="text/javascript"></script>
		  <script src="js/clndr.js" type="text/javascript"></script>
		  <script src="js/site.js" type="text/javascript"></script>
	<!----End Calender -------->
	<!----graph -------->
	<script src="js/highcharts.js"></script>
	<script src="js/chart.js"></script>
	<!----//graph -------->
</head>
<body<?php print $attributes;?>>
<!-- content -->
<div class="content">
	<div class="container">
		<div class="header" >
			
			<nav id="ddmenu">
    <div class="menu-icon"></div>
   <?php
$menu = menu_navigation_links('main-menu');
print theme('links__system_main_menu', array('links' => $menu));
?>
</nav>
			
			<div class="clearfix"></div>
		</div>
		<div class="content-top">

			<table>
<tr><td style="width:10%" class="different"><?php echo render($logos) ?><td><td style="background-color:gainsboro;width:90%"><?php echo render($user_first) ?></td> </tr></table>

		</div>
		<div class="content-bottom"  style="background-color:white;">

				
					<div class="shopping-chart"  style="margin-left:25%;">
					<?php echo render($header_second24) ?>
					
					
				</div>
				
				
			

		
	</div>
</div>
	
<!-- //content -->
</body>
</html>
