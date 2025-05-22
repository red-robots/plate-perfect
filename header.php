<?php
/**
 * The header for theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Open+Sans" rel="stylesheet">
<script src="https://use.fontawesome.com/762c66dd2b.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131407606-1"></script>
<link rel='stylesheet' id='colorbox-css'  href='<?php bloginfo('template_url'); ?>/colorbox.css?ver=5.4.2' type='text/css' media='all' />
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-131407606-1');
</script>
<?php 

wp_head(); 

$online_ordering = get_field('online_ordering', 'option');
// echo 'tush';
// echo '<pre>';
// print_r($online_ordering);
// echo '</pre>';

?>
</head>

<body <?php body_class(); ?>>
	

<a name="top"></a>
<div id="page" class="site">
	<?php $image = get_field("header_image");?>
	<div class="header-wrapper row-1" >
		<div class="overlay clear-bottom row-1 <?php echo $image? "image-present":"image-absent";?> no-background">
			<div class="background-image" <?php if($image):?>style="background-image: url(<?php echo $image['sizes']['large'];?>);"<?php endif;?>></div><!--.background-image-->
			<div class="row-1">
				<h1 class="logo">
					<a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo('name');?>"></a>
					<a class="hidden" href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo2.png" alt="<?php bloginfo('name');?>"></a>
				</h1>
			</div><!--.row-1-->
			<div class="row-2">
				<div class="bars"><i class="fa fa-bars"></i></div><!--.bars-->
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</div><!--.row-2-->


			<?php $online_ordering = get_field('online_ordering', 'option');
			// echo '<pre>';
			// print_r($online_ordering);
			// echo '</pre>';
			if ($online_ordering) { ?>
			<div class="online_ordering">
		      <div class="topmenu">
		        <div class="links">
		          <!-- <a href="javascript:void(0)" id="reservationsBtn" class="green"><?php echo $reservation_title ?></a> -->
		          
		          <?php if ($online_ordering) { ?>
		            <a href="#" id="orderOption" class="orange">Online Ordering</a>
		            <div class="order-options">
		              <?php foreach ($online_ordering as $o) {
		    //           	echo '<pre>';
						// print_r($o);
						// echo '</pre>';
		                $o_link = $o['link']['url'];
		                $o_text = $o['link']['title'];
		                $target = $o['link']['target']; ?>
		                <?php if ($o_link) { ?>
		                  <div class="orderlink">
		                    <a href="<?php echo $o_link ?>" target="<?php echo $target ?>">
		                      
		                      <?php if ($o_text) { ?>
		                      <span class="text"><?php echo $o_text ?></span>
		                      <?php } ?>
		                    </a>
		                  </div>
		                <?php } ?>
		              <?php } ?>
		              <div id="closeOrder" class="closediv clear"><span id="close-order">Close</span></div>
		            </div>
		          <?php } ?>
		        </div>
		      </div>
		      </div>
		      <?php } ?>


			
		</div><!--.overlay-->
		<?php if($image):?>
			<div class="row-2">
				<img src="<?php echo $image['sizes']['large'];?>" alt="<?php echo $image['alt'];?>">
			</div><!--.row-2-->
		<?php endif;?>


	</div><!--.header-wrapper-->

	<div id="content" class="site-content wrapper">
