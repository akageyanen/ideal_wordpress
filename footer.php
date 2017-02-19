	</div>
</div>
<footer>
	<p class="id-copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
</footer>

<!--CSS・JS記述-->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootsnav.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/navstyle.css">
<link href="<?php echo get_template_directory_uri(); ?>/css/animate.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fonts/icomoon/style.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
<script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/js/bootsnav.js"></script>
<script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/js/jquery.matchHeight.js"></script>
<script>
$(function(){
　　$('.matchHeight').matchHeight();
});
</script>

<!--/CSS・JS記述-->
<script type="text/javascript">
	$('.bs-component [data-toggle="popover"]').popover();
	$('.bs-component [data-toggle="tooltip"]').tooltip();
</script>
<?php wp_footer(); ?>
</body>
</html>