<form id="respond" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post">
<div class="kategori">
<div class="tumunugor"><?php comments_popup_link("Toplam 0 yorum &raquo;", "Toplam 1 yorum &raquo;", "Toplam % yorum &raquo;"); ?></div>
<h2>YORUM YAZ</h2>
<div class="clear"></div>
<div class="yorumyaz">
<?php if (get_option('comment_registration') && !$user_ID ) : ?>
<p id="comments-blocked">Yorum yazabilmek için <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">giriş</a> yapmalısınız.</p>
<?php else : ?>
<?php if (comments_open()) : ?>
<?php if ($user_ID) : ?>
<p><a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a> olarak giriş yapıldı. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Çıkış &raquo;</a></p>
<?php else : ?>
<div class="text">
<label for="author">Adınız, Soyadınız<br />
<input type="text" class="author" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" /></label><br />
<label for="email">E-Posta Adresiniz<br />
<input type="text" class="email" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" /></label>
</div>
<?php endif; ?>
<div class="textarea">
<label for="comment">Görüşleriniz<br />
<textarea name="comment" id="comment" class="comment" rows="8"></textarea></label>
</div>
<div class="submit"><button type="submit" name="submit" id="sub" class="sub" value="Yorumu Gönder">Yorumu Gönder</button>
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
<?php do_action('comment_form', $post->ID); ?>
</div>
<?php else : echo "<li>Bu yazı yorumlara kapatılmıştır.</li>"; endif; ?>
<?php endif; ?>
</div>
</div>
</form>
<div class="clear styled colored"></div>
<div id="comments" class="yorumlar">
<?php $i = 0; foreach ($comments as $comment) : ?>
<div class="tek-yorum yuvarla">
<div class="yorum-tarih"><?php comment_date('j F Y l, H:i') ?></div>
<div class="yorum-yazar"><?php comment_author_link() ?></div>

<div class="yorum-metin"><?php if ($comment->comment_approved == '0') : ?><p class="bekliyor">Yorumunuz yönetici onayı bekliyor.</p><?php endif; ?><?php comment_text() ?>
</div>
</div>
<?php $i++; endforeach; if($i==0) : echo "Henüz yorum yapılmamış."; endif; ?>
</div>
<div class="clear styled colored"></div>