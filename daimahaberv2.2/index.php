<?php get_header(); ?>
<div class="clear styled colored"></div>
<?php if(get_option("er_surmanset")=="Evet") { // Sürmanşetin görünüp görünmeyeceğini ayarlıyoruz. ?>
<div id="surmanset">
<?php query_posts("showposts=5&tag=surmanset"); $i = 1; if(have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="haber<?php if($i==5) {echo " son"; } ?>">
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>"><?php if(has_post_thumbnail()) { the_post_thumbnail("medium"); } ?></a>
    <p><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></p>
</div>
<?php $i++; endwhile; endif; ?>
<div class="clear"></div>
</div>
<div class="clear styled colored"></div>
<?php } //Sürmanşet bitişi ?>
<div id="icerik">
<?php if(get_option("er_manset")=="Evet") { // Manşetin görünüp görünmeyeceğini ayarlıyoruz. ?>
<div id="tab-haber">
<?php $habercats = get_option("er_tabhaber"); ?>
<?php $habercat = explode(",", $habercats);  
		foreach($habercat as $key => $haber) { $newkey = $key+1; ?>
	<div class="baslik"><a href="#" rel="tab<?php echo $newkey; ?>"><?php echo get_cat_name($haber); ?></a></div>
<?php } ?>
    <div class="clear"></div>
    <div class="haberler">
    <?php $habercat = explode(",", $habercats); foreach($habercat as $key => $haber) { $newkey = $key+1; ?>
    <div id="tab<?php echo $newkey; ?>" class="tabcontent">
    <?php query_posts("cat=".$haber."&showposts=".get_option("er_tabhaber_showposts")); if (have_posts()) : while(have_posts()) : the_post(); ?>
    <div class="haber"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">&raquo; <?php the_title(); ?></a></div>
    <?php endwhile; endif; wp_reset_query(); ?>
    </div>
    <?php } ?>
    <script type="text/javascript">
	var haberler=new ddtabcontent("tab-haber")
	haberler.setpersist(true)
	haberler.setselectedClassTarget("link") //"link" or "linkparent"
	haberler.init(3000)
	</script>
    </div>
</div>
<div id="featured-slider">
<div id="slider">
<?php query_posts("tag=manset&showposts=15"); if( have_posts() ) : while( have_posts() ) : the_post(); ?>
<div><div class="manset-title"><?php the_title(); ?></div><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php if(has_post_thumbnail()) { the_post_thumbnail("manset"); } ?></a></div>
<?php endwhile; endif; wp_reset_query(); ?>
</div>
</div>
<div class="clear"></div>
<ul id="sayfalama">
<?php $i=1; query_posts("tag=manset&showposts=15"); if( have_posts() ) : while( have_posts() ) : the_post(); ?>
<li><a href="<?php the_permalink(); ?>" class="slider-a" title="<?php the_title(); ?>"><span><?php echo $i; ?></span></a></li>
<?php $i++; endwhile; endif; wp_reset_query(); ?>
</ul>
<div class="clear styled colored"></div>
<?php } // Manşet ayarlarının bitişi?>
<div id="sayfa-sol">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("index-page") ) : // Anasayfamız bileşenlerden ayarlanmış mı, onu kontrol ediyoruz. ?> 
<?php endif; // Anasayfa bileşenlerden ayarlanmış mı, bu kontrolun sonu burası. ?>
<?php if(get_option("er_sonhaberler") == "Evet") { /* Son Haberler Başlangıcı */ ?>
<?php if( have_posts() ) : ?>
<div class="kategori">
<div class="wp-pagenavi">
<?php wp_pagenavi(); ?></div>
<h2>Son Haberler</h2>
<div class="haberler">
<?php while( have_posts() ) : the_post(); ?>
<div class="haber">
<div class="thumb"><?php if(has_post_thumbnail()) { the_post_thumbnail("thumbnail"); } else { ?><img src="<?php bloginfo('wpurl'); ?>/resimyok.png" alt="Bu yazı için resim yok" /><?php } ?></div>
<div class="yazi-baslik"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></div>
<div class="aciklama"><?php the_excerpt_rss(); ?></div>
<div class="clear"></div>
</div>
<?php endwhile; ?>
</div>
<div style="clear"></div>
</div>
<div class="clear styled colored"></div>
<?php endif; wp_reset_query(); } /* Son Haberler Bitişi */ ?>
</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>