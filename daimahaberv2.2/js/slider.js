$(document).ready( function() {  // Sayfamız hazır olduğu zaman aşağıdaki kodların uygulanacağını söylüyoruz.
var i = 0;  // Hangi sayfada/slaytta [0, 1, 2, 3, 4] olduğumuzu atayacağımız değişken.
var tumgenislik = 0;  // Bu değişkende kaçıncı sayfada/slaytta ise o ve ondan önceki slaytların genişliklerinin toplamı yer alacak. Başlangıç değeri olarak 0 atıyoruz.
var genislik = $('#slider div').width();  // Ola ki slider 'ın genişliğini değiştirmek istersek hem css hem .js dosyamızda değişiklik yapmamak için '#slider div' etiketinin genişliğini bu değişkene atıyoruz.
function animasyon(px){  // Slider 'ımızın geçiş animasyonu için animasyon adında fonksiyon oluşturuyoruz.
$('#slider').stop(false, false).animate({  // #slider 'a animasyon tanımlıyoruz. Slider 'da gördüğümüz sayfaların hepsi #slider 'ın içinde bulunmakta.
left: -px  // Fonksiyona girilen px değişkeni kadar sola kaymasını sağlıyoruz.
}, 0);  // Buradaki değer animasyonun gerçekleşeceği milisaniyeyi belirtiyor.
}
 
 $('#sayfalama li').hover(function(){  // #slider 'ın sol alt köşesinde belirlediğimiz 5 adet linke tıklanınca yapılacak işlem için fonksiyon oluşturuyoruz.
var index = $(this).index();  // Linke tıklanınca kaçıncı link olduğunu index() ile alıyoruz. İlk link 1 değil 0 değerini vermektedir.
pozisyon = index * genislik;  // #slider 'ımızı ne kadar sola kaydıracağımızı belirten değişken. Örneğin ikinci linke tıklayınca 1*500 değerini alacaktır.
animasyon(pozisyon);  // Bir önceki satırda belirlediğimiz pozisyon değişkeni kadar #slider 'ımızın sola gitmesi için gerekli fonksiyonu çalıştırıyoruz.
if(index == 14){  // #sliderımız son sayfaya/slayta geldiğinde sayfalarımız bitmiş olacağı için #slider 'ı en başa götürmemize yarıyan şart cümleciği.
i = 0;  // Şart cümlediğimiz true dönerse i değişkenine 0 değerini atayıp #slider 'ımızı en başa götürüyoruz.
}else{
i = index + 1;  // Şart cümleciğimiz false dönerse i değişkenine bir sonraki sayfanın kaçıncı sayfa olduğunu belirtiyoruz.
}
return false;  // Fonksiyonunun daha işlem yapmasına gerek kalmadığını belirtiyoruz.
 });
 
var zamanlayici = setInterval(function() {  // zamanlayici adında bir zamanlayıcı/timer belirliyoruz.
tumgenislik = i * genislik;  // tumgenislik değişkenini 3. satırda açıklamıştık. Hangi sayfada isek o ve ondan önceki sayfaların/divlerin genişliklerinin toplamını alıyor.
if(i==13){  // #slider 'ımızı son sayfaya geldiğini kontrol eden şart cümleciği
i = -1;  // Normalde ilk sayfamız için 0 değeri verilmesi gerek. Fakat alt satırda animasyon fonksiyonu çalışıp #slider sola doğru kayacağı için -1 değerini veriyoruz.
}
animasyon(tumgenislik);   // #slider 'ımızın vakti gelince uygulayacağı animasyon fonksiyonu. #slider 'ı tumgenislik değişkeninin değeri kadar sola kaydırıyor.
i++;  // Zamanlayıcı her çalıştığında bir sonraki sayfaya/dive geçmesi için i değişkenini her seferinde 1 arttırıyoruz.
}, 4000);  // Buradaki değer ise zamanlayıcımızın kaç milisaniyede bir çalışması gerektiğini belirtiyor.
}
);



$(document).ready( function() {  // Sayfamız hazır olduğu zaman aşağıdaki kodların uygulanacağını söylüyoruz.
var i_side = 0;  // Hangi sayfada/slaytta [0, 1, 2, 3, 4] olduğumuzu atayacağımız değişken.
var tumgenislik_side = 0;  // Bu değişkende kaçıncı sayfada/slaytta ise o ve ondan önceki slaytların genişliklerinin toplamı yer alacak. Başlangıç değeri olarak 0 atıyoruz.
var genislik_side = $('#slider-side div').width();  // Ola ki slider 'ın genişliğini değiştirmek istersek hem css hem .js dosyamızda değişiklik yapmamak için '#slider div' etiketinin genişliğini bu değişkene atıyoruz.
function animasyon_side(px){  // Slider 'ımızın geçiş animasyonu için animasyon adında fonksiyon oluşturuyoruz.
$('#slider-side').stop(false, false).animate({  // #slider 'a animasyon tanımlıyoruz. Slider 'da gördüğümüz sayfaların hepsi #slider 'ın içinde bulunmakta.
left: -px  // Fonksiyona girilen px değişkeni kadar sola kaymasını sağlıyoruz.
}, 250);  // Buradaki değer animasyonun gerçekleşeceği milisaniyeyi belirtiyor.
}
 
 $('#sidebar-sayfalama .no').hover(function(){  // #slider 'ın sol alt köşesinde belirlediğimiz 5 adet linke tıklanınca yapılacak işlem için fonksiyon oluşturuyoruz.
var index = $(this).index();  // Linke tıklanınca kaçıncı link olduğunu index() ile alıyoruz. İlk link 1 değil 0 değerini vermektedir.
pozisyon_side = index * genislik_side;  // #slider 'ımızı ne kadar sola kaydıracağımızı belirten değişken. Örneğin ikinci linke tıklayınca 1*500 değerini alacaktır.
animasyon_side(pozisyon_side);  // Bir önceki satırda belirlediğimiz pozisyon değişkeni kadar #slider 'ımızın sola gitmesi için gerekli fonksiyonu çalıştırıyoruz.
if(index == 4){  // #sliderımız son sayfaya/slayta geldiğinde sayfalarımız bitmiş olacağı için #slider 'ı en başa götürmemize yarıyan şart cümleciği.
i_side = 0;  // Şart cümlediğimiz true dönerse i değişkenine 0 değerini atayıp #slider 'ımızı en başa götürüyoruz.
}else{
i = index + 1;  // Şart cümleciğimiz false dönerse i değişkenine bir sonraki sayfanın kaçıncı sayfa olduğunu belirtiyoruz.
}
return false;  // Fonksiyonunun daha işlem yapmasına gerek kalmadığını belirtiyoruz.
 });
 
var zamanlayici_side = setInterval(function() {  // zamanlayici adında bir zamanlayıcı/timer belirliyoruz.
tumgenislik_side = i_side * genislik_side;  // tumgenislik değişkenini 3. satırda açıklamıştık. Hangi sayfada isek o ve ondan önceki sayfaların/divlerin genişliklerinin toplamını alıyor.
if(i_side==3){  // #slider 'ımızı son sayfaya geldiğini kontrol eden şart cümleciği
i_side = -1;  // Normalde ilk sayfamız için 0 değeri verilmesi gerek. Fakat alt satırda animasyon fonksiyonu çalışıp #slider sola doğru kayacağı için -1 değerini veriyoruz.
}
animasyon_side(tumgenislik_side);   // #slider 'ımızın vakti gelince uygulayacağı animasyon fonksiyonu. #slider 'ı tumgenislik değişkeninin değeri kadar sola kaydırıyor.
i_side++;  // Zamanlayıcı her çalıştığında bir sonraki sayfaya/dive geçmesi için i değişkenini her seferinde 1 arttırıyoruz.
}, 4000);  // Buradaki değer ise zamanlayıcımızın kaç milisaniyede bir çalışması gerektiğini belirtiyor.
}
);





$(document).ready( function() {  // Sayfamız hazır olduğu zaman aşağıdaki kodların uygulanacağını söylüyoruz.
var i_up = 0;  // Hangi sayfada/slaytta [0, 1, 2, 3, 4] olduğumuzu atayacağımız değişken.
var tumgenislik_up = 0;  // Bu değişkende kaçıncı sayfada/slaytta ise o ve ondan önceki slaytların genişliklerinin toplamı yer alacak. Başlangıç değeri olarak 0 atıyoruz.
var genislik_up = $('#son-dakika .kayan_haberler .haber').height();  // Ola ki slider 'ın genişliğini değiştirmek istersek hem css hem .js dosyamızda değişiklik yapmamak için '#slider div' etiketinin genişliğini bu değişkene atıyoruz.
function animasyon_up(px){  // Slider 'ımızın geçiş animasyonu için animasyon adında fonksiyon oluşturuyoruz.
$('.kayan_haberler ').stop(false, false).animate({  // #slider 'a animasyon tanımlıyoruz. Slider 'da gördüğümüz sayfaların hepsi #slider 'ın içinde bulunmakta.
top: -px  // Fonksiyona girilen px değişkeni kadar sola kaymasını sağlıyoruz.
}, 500);  // Buradaki değer animasyonun gerçekleşeceği milisaniyeyi belirtiyor.
}
 
 $('#son-dakika .degistir').click(function(){  // #slider 'ın sol alt köşesinde belirlediğimiz 5 adet linke tıklanınca yapılacak işlem için fonksiyon oluşturuyoruz.
var index = $(this).index();  // Linke tıklanınca kaçıncı link olduğunu index() ile alıyoruz. İlk link 1 değil 0 değerini vermektedir.
pozisyon_up = index * genislik_up;  // #slider 'ımızı ne kadar sola kaydıracağımızı belirten değişken. Örneğin ikinci linke tıklayınca 1*500 değerini alacaktır.
animasyon_up(pozisyon_up);  // Bir önceki satırda belirlediğimiz pozisyon değişkeni kadar #slider 'ımızın sola gitmesi için gerekli fonksiyonu çalıştırıyoruz.
if(index == 9){  // #sliderımız son sayfaya/slayta geldiğinde sayfalarımız bitmiş olacağı için #slider 'ı en başa götürmemize yarıyan şart cümleciği.
i_up = 0;  // Şart cümlediğimiz true dönerse i değişkenine 0 değerini atayıp #slider 'ımızı en başa götürüyoruz.
}else{
i_up = index + 1;  // Şart cümleciğimiz false dönerse i değişkenine bir sonraki sayfanın kaçıncı sayfa olduğunu belirtiyoruz.
}
return false;  // Fonksiyonunun daha işlem yapmasına gerek kalmadığını belirtiyoruz.
 });
 
var zamanlayici_up = setInterval(function() {  // zamanlayici adında bir zamanlayıcı/timer belirliyoruz.
tumgenislik_up = i_up * genislik_up;  // tumgenislik değişkenini 3. satırda açıklamıştık. Hangi sayfada isek o ve ondan önceki sayfaların/divlerin genişliklerinin toplamını alıyor.
if(i_up==8){  // #slider 'ımızı son sayfaya geldiğini kontrol eden şart cümleciği
i_up = -1;  // Normalde ilk sayfamız için 0 değeri verilmesi gerek. Fakat alt satırda animasyon fonksiyonu çalışıp #slider sola doğru kayacağı için -1 değerini veriyoruz.
}
animasyon_up(tumgenislik_up);   // #slider 'ımızın vakti gelince uygulayacağı animasyon fonksiyonu. #slider 'ı tumgenislik değişkeninin değeri kadar sola kaydırıyor.
i_up++;  // Zamanlayıcı her çalıştığında bir sonraki sayfaya/dive geçmesi için i değişkenini her seferinde 1 arttırıyoruz.
}, 4000);  // Buradaki değer ise zamanlayıcımızın kaç milisaniyede bir çalışması gerektiğini belirtiyor.
}
);
