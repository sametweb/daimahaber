<div id="footer">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer") ) : /* Anasayfamız bileşenlerden ayarlanmış mı, onu kontrol ediyoruz. */ ?>
<div class="blok">
<div class="title">Haberler</div>
<ul>
<?php wp_list_categories("depth=1&title_li="); ?>
</ul>
<div class="clear styled"></div>
<div class="title">Etiketler</div>
<?php the_tags('<ul><li class="cat-item">','</li><li class="cat-item">','</li></ul>'); ?>
</div>
<div class="blok">
<div class="copyright">

<!-- Copyright Yazısı Başlangıcı !-->

<p>Sitemiz, hiçbir siteden direk olarak kopyala/yapıştır yöntemiyle haber almamaktadır. Tüm haberler, editörlerimiz tarafından yeniden yazılmaktadır.</p><br />
<p>Bu sitedeki haberlerin ve resimlerin izinsiz olarak kopyala/yapıştır yöntemiyle alınması ve başka sitelerde yayınlanması yasaktır. Aksi takdirde bunu yapan kişiler/siteler hakkında yasal işlem başlatılacaktır.</p><br />
<p>daimahaber &copy; 2011-2012</p>
<p style="font-size:11px;">All rights reserved</p>
<p style="font-size:11px;">Tasarım: <a href="http://www.samet.web.tr" title="Samet'in kişisel blogu">Samet Mütevellioğlu</a></p>
<p style="font-size:11px;"><a href="http://validator.w3.org/check/referer" title="Calid xHTML Checker Link">Valid xHTML</a></p><br />

<!-- Copyright Yazısı Bitişi!-->

</div>
</div>
<div class="blok">
<div class="title">Sosyal Medya'da Biz</div>

<!-- Facebook LikeBox Kodları Başlangıcı !-->

<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FFacebookTurkiye&amp;width&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:258px;" allowTransparency="true"></iframe>
<!-- Facebook LikeBox Kodları Bitişi !-->
</div>
<div class="clear"></div>
<?php endif;  ?>
<div class="clear styled"></div>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>
