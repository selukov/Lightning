<div class="media">
	<div class="media-left postList__thumbnail">
	<a href="<?php the_permalink(); ?>">
	<?php the_post_thumbnail('thumbnail'); ?>
	</a>
	</div>
	<div class="media-body">
	<h4 class="media-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
	<div><i class="fa fa-calendar"></i>&nbsp;<?php echo get_the_date(); ?></div>          
	</div>
</div>