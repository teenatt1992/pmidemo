<?php print $doctype; ?>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf->version . $rdf->namespaces; ?>>
<head<?php print $rdf->profile; ?>>
 
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
		
		<div class="content-bottom"  >
			<div class="col-md-3 con-btm-left" style="background-color:white;"><br><br><br>




<nav id="menu1_box">

  <ul class="menu1">

    <li> <a href="#"><a href="http://localhost/pmidemo/?q=node/56">Current Events</a></a>

      

    </li>
    <li> <a href="#">Past Events</a>

     <ul>

        <li><?php if ($header_second21): ?>
  
    <?php print render($header_second21); ?>
 
<?php endif; ?></li>

        

      </ul>

    </li>

   
  </ul>

</nav>
<h4>Member Attendees</h4><br>
<?php if ($header_second23): ?>
  
    <?php print render($header_second23); ?>
 
<?php endif; ?>
			</div>
			<div class="col-md-9 con-btm-right" >
				
					<div class="shopping-chart">
<?php print render($content['field_traininghead']) ?>
					<ul>
						<li>
							<div class="shop-grids">
<div class="shop-price">
									<p><?php print render($content['field_eventimage']) ?></p>
<p><?php print render($content['field_regdate']) ?></p>
<p><?php print render($content['field_eventplace']) ?></p>

								</div>
								
								
								<div class="shop-info"><p><?php print render($content['title']) ?></p>
									<h4><?php print render($content['body']) ?></h4>
									<br>
					</div>
								
								<div class="clearfix"></div>
							</div>
						</li>
</ul>




					
					
				
				<table width="100%" border="0" cellspacing="5" cellpadding="0">
                <tr>
                  <td class="eventheadhome" ><strong>Participation</strong><br><br></td>
                </tr>
                 
                    
                   
               
                <tr>
                  <td class="eventcontent"><strong><pre>If you are a registered member, please <?php

print l(t('Register'),'node/'.$node->nid.'/register' );

?> to participate in this training program.</pre></strong>
                  </td>
                </tr>
                
                <tr>
                  <td class="eventcontent"><?php print render($content['field_guset_reg']) ?></td>
                </tr>
                
                
                
              </table>

<table width="100%" border="0" cellspacing="5" cellpadding="0">
                <tr>
                  <td class="eventheadhome" ><strong>Description</strong><br><br></td>
                </tr>
                 
                    
                   
               
                <tr>
                  <td class="eventcontent"><strong><td><?php print render($content['field_event_decription']) ?></td></strong>
                 
</td>
                </tr>
                
               
                
                
                
              </table>

<table width="100%" border="0" cellspacing="5" cellpadding="0">
                <tr>
                  <td class="eventheadhome" ><strong>Documents</strong><br><br></td>
                </tr>
                 
                    
                   
               
                <tr>
                  <td class="eventcontent"><strong><?php print render($content['field_eventdocuments']) ?></strong>
                  </td>
                </tr>
                
               
                
                
              </table>

<table width="100%" border="0" cellspacing="5" cellpadding="0">
                <tr>
                  <td class="eventheadhome" ><strong>Event Photos</strong><br><br></td>
                </tr>
                 
                    
                   
               
                <tr>
                  <td class="eventcontent"><strong><?php print render($content['field_eventpics']) ?></strong>
                  </td>
                </tr>
                
                
                
                
                
              </table>
			
			</div>	
			</div>
			<div class="clearfix"></div>

		</div>

		
	</div>
</div>
	
<!-- //content -->
</body>
</html>
