<?php get_header(); ?>

<div class="container">
    <h2><?php the_title(); ?></h2>
<p><?php the_content() ; ?></p>
<?php the_post_thumbnail(  ); ?>

</div>

<?php get_footer(); ?>