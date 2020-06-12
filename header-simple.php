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
<link rel='stylesheet' id='colorbox-css'  href='<?php bloginfo('template_url'); ?>/css/colorbox.css?ver=5.4.2' type='text/css' media='all' />
<script src="https://use.fontawesome.com/762c66dd2b.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131407606-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-131407606-1');
</script>
<?php wp_head(); ?>
</head>
<!-- simple -->
<style type="text/css">
	#inline_content {
		max-width: 250px;
		margin: 0 auto;
		padding: 50px 20px 20px 20px ;
	}
	@media screen and (min-width: 600px) {
		#inline_content {
			max-width: 500px;
			border: 5px solid #dd8919;
		}
	}
	@media screen and (min-width: 1000px) {
		#inline_content {
			max-width: 800px;
		}
	}
</style>
<body <?php body_class(); ?>>
	<?php 
$active = get_field('turn_on', 'option');
$cnt = get_field('content', 'option');
if( $active[0] == 'yes' && is_front_page() ) {

	 ?>
<div style='display:none'>
	<div id='inline_content' class="ajax popup">
		<?php echo $cnt; ?>
	</div>
</div>
<?php } ?>

<div id="page" class="site">
	<div id="content" class="site-content wrapper">
