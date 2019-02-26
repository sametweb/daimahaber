<?php get_header(); ?>
<div id="icerik">
<div class="clear styled"></div>
<div id="sayfa-sol">
<?php if( have_posts() ) : ?>
<div class="kategori">
<div><?php wp_pagenavi(); ?></div>
<h2>"<?php single_cat_title(); ?>" Haberleri</h2>
<div class="clear"></div>
<div>
<div class="haberler yuvarla-alt-sag-ust post-bg">
<?php while( have_posts() ) : the_post(); ?>
<div class="haber">
<div class="thumb"><?php if(has_post_thumbnail()) { the_post_thumbnail("thumbnail"); } else { echo '<img src="'; bloginfo('wpurl'); echo '/resimyok.png" alt="Bu yazı için resim yok" />'; } ?></div>
<div class="yazi-baslik"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></div>
<div class="yazi-bilgisi"><?php the_time("j F Y, l, g:i"); ?> | <?php the_category(", "); ?> | <?php if(function_exists(the_views())) {the_views(); } ?> | <?php comments_popup_link("0 yorum", "1 yorum", "% yorum"); ?></div>
<div class="aciklama"><?php the_excerpt_rss(); ?></div>
<div class="clear"></div>
</div>
<?php endwhile; ?>
</div>
</div>
</div>
<?php endif; wp_reset_query(); ?>
</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>