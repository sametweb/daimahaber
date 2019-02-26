<?php get_header(); ?>
<div id="icerik">
<div class="clear styled"></div>
<div id="sayfa-sol">
<div class="arsivler yuvarla post-bg">
<ul><?php wp_get_archives('type=monthly'); ?>
</ul>
<div class="clear"></div>
</div>
<div class="clear styled"></div>
<?php if( have_posts() ) : ?>
<div class="kategori">
<div class="wp-pagenavi">
<?php wp_pagenavi(); ?></div>
<h2>Arşivler</h2>
<div style="clear:left;"></div>
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
<?php endif; wp_reset_query(); ?>
</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>