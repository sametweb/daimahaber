<?php get_header(); ?>
<div id="icerik">
<div class="clear styled"></div>
<div id="sayfa-sol">
<div class="yazi">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h1><?php the_title(); ?></h1>
<?php the_content(); ?>
<div class="etiketler"><?php the_tags("<span>Anahtar Kelimeler:</span> ", ", ", ""); ?></div>                
<?php endwhile; endif; ?>
</div>
</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>