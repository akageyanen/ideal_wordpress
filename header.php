<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
<?php wp_head(); ?>
<!--[if lt IE 9]>
	<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body <?php body_class(); ?>>
<header>
<nav class="navbar navbar-default brand-center bootsnav">

	<div class="container">      
		<!--ナビゲーション-->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
				<i class="fa fa-bars"></i>
			</button>
			<?php if ( get_the_logo_image_url() ) : ?>
			<a class="navbar-brand" href="<?php bloginfo('url'); ?>"><img src="<?php echo get_the_logo_image_url(); ?>" class="logo" alt=""></a>
			<?php else : ?>
			<?php endif; ?>
		</div>

		<?php wp_nav_menu( array ( 
		'theme_location' => 'header-navi',
		'container_class' => 'collapse navbar-collapse',
		'container_id' => 'navbar-menu',
		'menu_id' => '',
		'menu_class'=> 'nav navbar-nav' ) ); 
		?>

			<!--/ナビゲーション-->
	</div>   
</nav>
</header>