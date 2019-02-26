<?php get_header(); ?>
<div id="icerik">
<div class="clear styled colored"></div>
<div id="sayfa-sol">
<div class="yazi">
<?php if ( have_posts() ) : ?>
<ul class="breadcrumbs"><li class="front-page"><?php the_time("j F Y"); /* if(!is_attachment()) { include("breadcrumb.php"); ?>
<div class="clear styled"></div>
<?php } */ ?></li></ul>

<?php while ( have_posts() ) : the_post(); ?>
<h1><?php the_title(); ?></h1>
<div class="first"><?php the_content(); ?></div>
<div class="clear"></div>
<div class="yazi-bilgisi"><?php the_category(" "); ?></div>
<div class="etiketler"><?php the_tags("<span>Anahtar Kelimeler:</span> ", ", ", ""); ?></div>                
<?php endwhile; ?>
</div>
<div class="clear styled colored"></div>
<!-- Related Posts Start !-->
<div class="relatedposts">
<h3>Benzer Haberler</h3>
<?php
  $orig_post = $post;
  global $post;
  $tags = wp_get_post_tags($post->ID);
   
  if ($tags) {
  $tag_ids = array();
  foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
  $args=array(
  'tag__in' => $tag_ids,
  'post__not_in' => array($post->ID),
  'posts_per_page'=>4, // Number of related posts to display.
  'caller_get_posts'=>1
  );
   
  $my_query = new wp_query( $args );
 
  while( $my_query->have_posts() ) {
  $my_query->the_post();
  ?>
   
  <div class="relatedthumb">
    <a rel="external" href="<? the_permalink()?>"><?php the_post_thumbnail("thumb"); ?><br />
    <?php the_title(); ?>
    </a>
  </div>
   
  <? }
  }
  $post = $orig_post;
  wp_reset_query();
  ?>
</div>
<div class="clear styled colored"></div>
<!-- Related Posts End !-->
<?php if(get_option("er_sidebar_comments")=="Hayır") { ?>
<?php comments_template(); ?>
<?php } ?>
<?php endif; ?>
</div>
<?php if(get_option("er_sidebar_comments")=="Evet") { ?>
<div id="sidebar">
<?php comments_template(); ?>
</div>
<?php } else { ?>
<?php get_sidebar(); ?>
<?php } ?>
</div>
<?php get_footer(); ?>