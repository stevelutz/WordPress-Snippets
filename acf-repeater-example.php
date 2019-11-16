<?php if ( have_rows( 'info_boxes' ) ) : ?>
	<?php while ( have_rows( 'info_boxes' ) ) : the_row(); ?>
		
		<div class="icon--left">
			<?php $icon = get_sub_field( 'icon' ); ?>
		<?php if ( $icon ) { ?>
			<img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
		<?php } ?>
		</div>

		<div class="text--right">
		<h3><?php the_sub_field( 'title' ); ?></h3>
		<div class="desc"><?php the_sub_field( 'text' ); ?></div>
		</div>

	<?php endwhile; ?>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>
