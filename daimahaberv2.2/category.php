<?php get_header(); ?>
<div id="icerik">
<div class="clear styled"></div>
<div id="sayfa-sol">
<?php
$this_category = get_category($cat);
$cat_ID = $this_category->cat_ID;
if($this_category->parent == 0) { ?>
<?php 
	$categories = get_categories('hide_empty=0&title_li=&child_of='.$cat_ID);
	if($categories) { ?>
<ul id="alt-kategoriler" class="yuvarla post-bg">
<?php
	foreach($categories as $cats) {
		echo '<li class="cat-item"><a href="'.get_category_link($cats->cat_ID).'" title="'.$cats->cat_name.'">'.$cats->cat_name.'</a></li>';
	} ?>
<li class="clear"></li>
</ul>
<div class="clear styled"></div>
<?php } ?>
<?php } ?>

<?php if( have_posts() ) : ?>
<div class="kategori">
<div class="wp-pagenavi">
<?php wp_pagenavi(); ?></div>
<h2><?php single_cat_title(); ?></h2>
<div class="clear"></div>
<div class="haberler">
<?php while( have_posts() ) : the_post(); ?>
<div class="haber">
<div class="thumb"><?php if(has_post_thumbnail()) { the_post_thumbnail("thumbnail"); } else { echo '<img src="'; bloginfo('wpurl'); echo '/resimyok.png" alt="Bu yazı için resim yok" />'; } ?></div>
<div class="yazi-baslik"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></div>
<div class="yazi-bilgisi"><?php the_time("j F Y, l, g:i"); ?></div>
<div class="aciklama"><?php the_excerpt_rss(); ?></div>
<div class="clear"></div>
</div>
<?php endwhile; ?>
</div>
</div>
<?php endif; wp_reset_query(); ?>
<div class="clear styled colored"></div>
</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>