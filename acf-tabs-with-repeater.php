<div class="block-tabs-repeater">
​
	<div class="tabs tabs-desktop">
​
		<ul class="nav nav-tabs">
			<li><a href="#tab1"><?php the_field( 'title_a' ); ?></a></li>
			<li><a href="#tab2"><?php the_field( 'title_b' ); ?></a></li>
			<li><a href="#tab3"><?php the_field( 'title_c' ); ?></a></li>
		</ul>
​
​
		<div class="tab-info">
​
			<ul>
			<li class="tab-content" id="tab1">
			<?php if ( have_rows( 'a' ) ) : ?>
			<?php while ( have_rows( 'a' ) ) : the_row(); ?>
			<?php the_sub_field( 'event_title' ); ?>
			<?php the_sub_field( 'event_description' ); ?>
		<?php endwhile; ?>
	<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>
</li>
​
			<li class="tab-content hide" id="tab2">
<?php if ( have_rows( 'b' ) ) : ?>
	<?php while ( have_rows( 'b' ) ) : the_row(); ?>
	<?php the_sub_field( 'event_title' ); ?>
	<?php the_sub_field( 'event_description' ); ?>
<?php endwhile; ?>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>
</li>
​
			<li class="tab-content hide" id="tab3">
<?php if ( have_rows( 'c' ) ) : ?>
	<?php while ( have_rows( 'c' ) ) : the_row(); ?>
	<?php the_sub_field( 'event_title' ); ?>
	<?php the_sub_field( 'event_description' ); ?>
<?php endwhile; ?>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>
</li>
</ul>
​
</div>
</div>
​
​
​
<div class="dining-tabs mobile-tabs">
	<div class="tab-container">
​
		<div class="tab-navigation">              
			<select id="select-box">
				<option value="1"><?php the_field( 'title_a' ); ?></option>
				<option value="2"><?php the_field( 'title_b' ); ?></option>
				<option value="3"><?php the_field( 'title_c' ); ?></option>
			</select>
		</div>
​
		<div id="tab-1" class="tab_content">
			<?php if ( have_rows( 'a' ) ) : ?>
			<?php while ( have_rows( 'a' ) ) : the_row(); ?>
			<?php the_sub_field( 'event_title' ); ?>
			<?php the_sub_field( 'event_description' ); ?>
		<?php endwhile; ?>
	<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>
</div>
​
​
<div id="tab-2" class="tab_content">
	<?php if ( have_rows( 'b' ) ) : ?>
	<?php while ( have_rows( 'b' ) ) : the_row(); ?>
	<?php the_sub_field( 'event_title' ); ?>
	<?php the_sub_field( 'event_description' ); ?>
<?php endwhile; ?>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>
​
</div>
​
​
<div id="tab-3" class="tab_content">
	<?php if ( have_rows( 'c' ) ) : ?>
	<?php while ( have_rows( 'c' ) ) : the_row(); ?>
	<?php the_sub_field( 'event_title' ); ?>
	<?php the_sub_field( 'event_description' ); ?>
<?php endwhile; ?>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>
​
</div>
​
</div>
</div>
​
</div>

<script>
	
//Tab Functionality
$(document).ready(function() {

    $('.nav-tabs li:first-child, .tab-content:first-child').addClass('active');
    $('.tab-content:first-child').removeClass('hide');

    $('.nav-tabs > li > a').click(function(event){
    event.preventDefault();//stop browser

    //get displaying tab content
    var active_tab_selector = $('.nav-tabs > li.active > a').attr('href');          

    //find actived navigation and remove 'active' css
    var actived_nav = $('.nav-tabs > li.active');
    actived_nav.removeClass('active');

    //add 'active' css into clicked navigation
    $(this).parents('li').addClass('active');

    //hide displaying tab content
    $(active_tab_selector).removeClass('active');
    $(active_tab_selector).addClass('hide');

    //show target tab content
    var target_tab_selector = $(this).attr('href');
    $(target_tab_selector).removeClass('hide');
    $(target_tab_selector).addClass('active');
});
});

</script>



