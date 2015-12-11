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
<tr><td style="width:10%;"><?php echo render($logos) ?></td><td style="background-color:gainsboro;width:90%;"><?php print render($user_first); ?></td></tr></table>

		</div>

		<div class="content-bottom"  style="background-color:white;">
			
			<div class="col-md-71 con-btm-right" style="background-color:white;">
				
					<div class="shopping-chart" style="background-color:white;">
					<?php echo render($header_second10) ?>
					
					
				</div>
				
				
			</div>
<div class="col-md-51 con-btm-left" style="background-color:white;margin-left:130px;">
						<div class="con-btm-r">
						<div style="background-color:white;text-align:center;margin-left:9px;">
							<?php echo render($preface_second) ?>
						</div>
						<div class="sap_tabs"style="background-color:white;text-align:center;margin-left:9px;">	
                                                      <?php echo render($postscript_first) ?>
                                                </div>							
                                                <div class="sap_tabs"style="background-color:white;text-align:center;margin-left:9px;">	
                                                      <?php echo render($postscript_second) ?>
                                                </div>
<div class="sap_tabs"style="background-color:white;text-align:center;margin-left:9px;">	
                                                      <?php echo render($header_second) ?><br><br><br><br><br><br> <?php echo render($header_second1) ?><br><br><br><br><br><?php echo render($header_second2) ?><br><br><br>
                                                </div>
					</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="footer">
			<p>Copyright &copy; 2015 Blocky UI Kit. Template by <a href="http://w3layouts.com/"> W3layouts</a></p>

		</div>
	</div>
</div>
	
<!-- //content -->
</body>
</html>
