<?php

/**
 * @file
 * Default theme implementation to display a forum which may contain forum
 * containers as well as forum topics.
 *
 * Variables available:
 * - $forum_links: An array of links that allow a user to post new forum topics.
 *   It may also contain a string telling a user they must log in in order
 *   to post. Empty if there are no topics on the page. (ie: forum overview)
 *   This is no longer printed in the template by default because it was moved
 *   to the topic list section. The variable is still available for customizations.
 * - $forums: The forums to display (as processed by forum-list.tpl.php)
 * - $topics: The topics to display (as processed by forum-topic-list.tpl.php)
 * - $forums_defined: A flag to indicate that the forums are configured.
 * - $forum_legend: Legend to go with the forum graphics.
 * - $topic_legend: Legend to go with the topic graphics.
 * - $forum_tools: Drop down menu for various forum actions.
 * - $forum_description: Description that goes with forum term. Not printed by default.
 *
 * @see template_preprocess_forums()
 * @see advanced_forum_preprocess_forums()
 */
?>
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
			
			<div class="navigation" >
				
								




<?php
$menu = menu_navigation_links('main-menu');
print theme('links__system_main_menu', array('links' => $menu));
?>
								<!-- script for menu -->
									<script> 
										$( "span.menu" ).click(function() {
										$( "ul.nav1" ).slideToggle( 300, function() {
										 // Animation complete.
										});
										});
									</script>
								<!-- //script for menu -->

			</div>
			
			<div class="clearfix"></div>
		</div>
		<div class="content-top">
			<table>
<tr><td><?php echo render($logos) ?><td><td style="background-color:gainsboro;"><?php echo render($user_first) ?></td></tr></table>

		</div>

		<div class="content-bottom" >
<?php if ($forums_defined): ?>
  <div id="forum">

    <?php print $forums; ?>

    <?php if (!empty($forum_tools)): ?>
      <div class="forum-tools"><?php print $forum_tools; ?></div>
    <?php endif; ?>

    <?php print $topics; ?>

    <?php if (!empty($topics)): ?>
      <?php print $topic_legend; ?>
    <?php endif; ?>

    <?php if (!empty($forum_legend)): ?>
      <?php print $forum_legend; ?>
    <?php endif; ?>

     <?php if (!empty($forum_statistics)): ?>
       <?php print $forum_statistics; ?>
     <?php endif; ?>
  </div>
<?php endif; ?>

</div>
		<div class="footer">
			<p>Copyright &copy; 2015 Blocky UI Kit. Template by <a href="http://w3layouts.com/"> W3layouts</a></p>

		</div>
	</div>
</div>
	
<!-- //content -->
</body>
</html>
