<?php
// Template Name: Blank Template
 get_header(); 

 esol_breadcrumbs(); ?>

<div class="clearfix"></div>
<div class="container ">
	<div class="row">	
		<div class="col-md-12">
			<div class="blog-area" data-aos="fade-up" data-aos-duration="1500" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php the_post(); ?>
				<figure class="blog_img" data-aos="zoom-in" data-aos-duration="1800">
					<?php $default_img = array('class' => "img-responsive");?>
					<?php if(has_post_thumbnail()) : ?>
							<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('',$default_img);?> </a>
							<?php endif; ?>
				</figure>
				 
				<div class="blog_text">
					<p><?php the_content(); ?></p>
				</div>
				
			</div>
		</div>	
	</div>
</div>		
<?php get_footer(); ?>