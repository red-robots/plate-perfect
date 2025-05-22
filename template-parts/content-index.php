<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-index"); ?>>
	<?php $slider = get_field("slider");?>
	<div class="header-wrapper row-1">
		<div class="overlay clear-bottom row-1 <?php echo $slider? "image-present":"image-absent";?> no-background">
			<div class="background-image" <?php if($slider && $slider[0]['image']):?>style="background-image: url(<?php echo $slider[0]['image']['sizes']['large'];?>);"<?php endif;?>></div><!--.background-image-->
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
		<?php if($slider):?>
			<div class="flexslider row-2">
				<ul class="slides">
					<?php foreach($slider as $row):?>
						<?php if($row['image']):?>
							<li class="slide">
								<img src="<?php echo $row['image']['sizes']['large'];?>" alt="<?php echo $row['image']['alt'];?>">
								<?php if($row['testimonial']):?>
									<div class="testimonial copy">
										<?php echo $row['testimonial'];
										if($row['author']):?>
											<div class="author">
												<?php echo $row['author'];?>
											</div><!--.author-->
										<?php endif;?>
									</div><!--.testimonial-->
								<?php endif;?>
							</li>
						<?php endif;?>
					<?php endforeach;?>
				</ul>
			</div><!--.row-2-->
		<?php endif;?>
	</div><!--.header-wrapper-->
	<?php $page_picker = get_field("page_picker");
	if($page_picker):?>
		<div class="row-2 clear-bottom">
			<div id="container">
				<?php foreach($page_picker as $row):?>
					<?php if($row['page']):
						$post = get_post($row['page']);
						setup_postdata( $post );
						$image = get_field("link_background_image");
						if($image):?>
							<a class="item" href="<?php echo get_the_permalink();?>">
								<div class="outer-inner-wrapper">
									<img src="<?php echo $image['sizes']['large'];?>">
									<div class="inner-wrapper" >
										<?php the_title();?>
									</div><!--.inner-wrapper-->
								</div><!--.outer-inner-wrapper-->
							</a>
						<?php endif;
						wp_reset_postdata();
					endif;?>
				<?php endforeach;?>
			</div><!--#container-->
		</div><!--.row-2-->
	<?php endif;?>
</article><!-- #post-## -->
