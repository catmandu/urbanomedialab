<?php get_header(); ?>
	
<div id="main" class="main">
	<div class="container">		
		<section id="content" class="content">
			<?php do_action('cpotheme_before_content'); ?>
			<?php $description = term_description(); ?>
			<?php if($description != ''): ?>
			<div class="page-content">
				<?php echo $description; ?>
			</div>
			<?php endif; ?>
			
			<?php if(have_posts()): ?>
			<?php if(is_author()) cpotheme_author(); ?>
			<?php cpotheme_grid(null, 'element', 'blog', cpotheme_get_option('blog_columns'), array('class' => 'column-narrow')); ?>
			<?php cpotheme_numbered_pagination(); ?>
			<?php endif; ?>
			
			<?php do_action('cpotheme_after_content'); ?>
		</section>
		<?php get_sidebar(); ?>
		<div class="clear"></div>
	</div>
</div>

<?php get_footer(); ?>