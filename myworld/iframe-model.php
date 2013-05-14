<?php
/*
Template Name: Iframe-model
*/
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">  
		<title>MW2015 Widget</title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/widget.css">
	</head>
	<body>
		<p id="base_directory" style="display:none"><?php echo  bloginfo('stylesheet_directory'); ?></p>
		
		
			<a href="http://myworld2015.org"><img src="<?php bloginfo('stylesheet_directory');?>/assets/img/logo.png" alt="" class="widget_logo" ></a>
			<br>
			<header class="vote-header-wrap" style="margin-bottom: 0;">
			<p id="vote-header"> </p>
			</header>


			<div class="accordion vote-form"></div>

			<div class="suggest-priority">
				<h4><span  class="box  plus-sign"></span><a id="priority-item-title" href="#"></a></h4>
					<article id="priority-item-content-wrap" style="display:none">
						<textarea id="priority-item-content" placeholder=""></textarea>
					</article>
			</div>

		
		





			<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
			<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
			<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/easyXDM.js"></script>
			<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/MW.js"></script>
			<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/accordion.js"></script>
			<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/widget.js"></script>
			
    </body>
</html>