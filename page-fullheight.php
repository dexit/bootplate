<?php
/*
Template Name: Page: Full-Height
*/

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<header class="<?php echo header_classes(); ?>"<?php the_header_bgimg(get_the_id(), 'full'); ?>>
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<?php the_title( '<h1 class="display-3">', '</h1>' ); ?>
				<?php if(have_bootplate_subtitle()) { bootplate_subtitle(); } ?>
				
				<?php 
				if(have_bootplate_btns()) : 
					if(have_cta1() && have_cta2()) :
				?>
				<div class="row margin-top">
					<div class="col-sm-6">
						<?php the_cta(1); ?>
					</div>
					<div class="col-sm-6">
						<?php the_cta(2); ?>
					</div>
				</div>
				
				<?php 
					elseif(have_cta1() && !have_cta2()) :
				?>
				<div class="row margin-top">
					<div class="col-sm-12">
						<?php the_cta(1); ?>
					</div>
				</div>
				
				<?php
					endif; // end which buttons?
				endif; // end have_btns
				?>
			</div>
		</div><!--/row-->
		<div class="jumboscroll hidden-sm hidden-xs">
			<button type="button" class="btn btn-secondary-outline btn-circle btn-inverse"><span class="bp-down-open"></span></button>
		</div>
	</div><!--/.container-->
</header>

<section id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">
		<?php the_content(); ?>
	</div>
</section>
<?php endwhile; ?>

<?php get_footer(); ?>
