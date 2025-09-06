  <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>

<style type="text/css">
.ustKisim {
  position: fixed;
  background: gray;
  height: 50px;
  width: 70px;
  top: 400px;
  margin-left: 0px;
  border-bottom-right-radius: 10px;
  border-top-right-radius: 10px;
  color:#FFF;
   padding-top: 15px;
}

.icerik {
  width: 200px;
  text-align:center;
}






#summary p.collapse:not(.show) {
    height: 2px !important;
    overflow: hidden;
  
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical; 
		margin-top: -15px; 
}

#summary p.collapsing {
    min-height: 42px !important;
}

#summary a.collapsed:after  {
    content: '+ İşlem Basamakları';
}

#summary a:not(.collapsed):after {
    content: '- Kapat';
}








/*----------------genealogy-scroll----------*/

.genealogy-scroll::-webkit-scrollbar {
    width: 5px;
    height: 8px;
}
.genealogy-scroll::-webkit-scrollbar-track {
    border-radius: 10px;
    background-color: #e4e4e4;
}
.genealogy-scroll::-webkit-scrollbar-thumb {
    background: #212121;
    border-radius: 10px;
    transition: 0.5s;
}
.genealogy-scroll::-webkit-scrollbar-thumb:hover {
    background: #d5b14c;
    transition: 0.5s;
}


/*----------------genealogy-tree----------*/
.genealogy-body{
    white-space: nowrap;
    overflow-y: hidden;
    padding: 50px;
    min-height: 500px;
    padding-top: 10px;
    text-align: center;
}
.genealogy-tree{
  display: inline-block;
}
.genealogy-tree ul {
    padding-top: 20px; 
    position: relative;
    padding-left: 0px;
    display: flex;
    justify-content: center;
}
.genealogy-tree li {
    float: left; text-align: center;
    list-style-type: none;
    position: relative;
    padding: 20px 10px 0 5px;
}
.genealogy-tree li::before, .genealogy-tree li::after{
    content: '';
    position: absolute; 
  top: 0; 
  right: 50%;
    border-top: 2px solid #ccc;
    width: 50%; 
  height: 18px;
}
.genealogy-tree li::after{
    right: auto; left: 50%;
    border-left: 2px solid #ccc;
}
.genealogy-tree li:only-child::after, .genealogy-tree li:only-child::before {
    display: none;
}
.genealogy-tree li:only-child{ 
    padding-top: 0;
}
.genealogy-tree li:first-child::before, .genealogy-tree li:last-child::after{
    border: 0 none;
}
.genealogy-tree li:last-child::before{
    border-right: 2px solid #ccc;
    border-radius: 0 5px 0 0;
    -webkit-border-radius: 0 5px 0 0;
    -moz-border-radius: 0 5px 0 0;
}
.genealogy-tree li:first-child::after{
    border-radius: 5px 0 0 0;
    -webkit-border-radius: 5px 0 0 0;
    -moz-border-radius: 5px 0 0 0;
}
.genealogy-tree ul ul::before{
    content: '';
    position: absolute; top: 0; left: 50%;
    border-left: 2px solid #ccc;
    width: 0; height: 20px;
}
.genealogy-tree li a{
    text-decoration: none;
    color:#000;
    font-family: arial, verdana, tahoma;
    font-size: 11px;
    display: inline-block;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
	background-color:#CCC;
}

.genealogy-tree li a:hover+ul li::after, 
.genealogy-tree li a:hover+ul li::before, 
.genealogy-tree li a:hover+ul::before, 
.genealogy-tree li a:hover+ul ul::before{
    border-color:  #fbba00;
}

/*--------------memeber-card-design----------*/
.member-view-box{
    padding:0px 20px;
    text-align: center;
    border-radius: 4px;
    position: relative;
}
.member-image{
    width: 60px;
    position: relative;
}
.member-image img{
    width: 60px;
    height: 60px;
    border-radius: 6px;
  z-index: 1;
}






h1 {
  text-align: center;
  font-family: "Trebuchet MS", Tahoma, Arial, sans-serif;
  color: #333;
  text-shadow: 0 1px 0 #fff;
  margin: 50px 0;
}

#wrapper {
  width: 100px;
  margin: 0 auto;
  background: #fff;
  padding: 20px;
  border: 10px solid #aaa;
  border-radius: 15px;
  background-clip: padding-box;
  text-align: center;
}

.button {
  font-family: Helvetica, Arial, sans-serif;
  font-size: 13px;
  padding: 5px 10px;
  border: 1px solid #aaa;
  background-color: #eee;
  background-image: linear-gradient(top, #fff, #f0f0f0);
  border-radius: 2px;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15);
  color: #666;
  text-decoration: none;
  text-shadow: 0 1px 0 #fff;
  cursor: pointer;
  transition: all 0.2s ease-out;
}
.button:hover {
  border-color: #999;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.25);
}
.button:active {
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.25) inset;
  z-index:999;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.5);
  transition: opacity 200ms;
  visibility: hidden;
  opacity: 0;
  z-index:999;
}
.overlay.light {
  background: rgba(255, 255, 255, 0.5);
}
.overlay .cancel {
  position: absolute;
  width: 100%;
  height: 100%;
  cursor: default;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 75px auto;
  padding: 20px;
  background: #fff;
  border: 1px solid #666;
  width: 900px;
  box-shadow: 0 0 50px rgba(0, 0, 0, 0.5);
  position: relative;
  z-index:999;
}
.light .popup {
  border-color: #aaa;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.25);
  z-index:999;
}
.popup h2 {
  margin-top: 0;
  color: #666;
  font-family: "Trebuchet MS", Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  width: 20px;
  height: 20px;
  top: 20px;
  right: 20px;
  opacity: 0.8;
  transition: all 200ms;
  font-size: 24px;
  font-weight: bold;
  text-decoration: none;
  color: #666;
}
.popup .close:hover {
  opacity: 1;
}
.popup .content {
  max-height: 400px;
  overflow: auto;
}
.popup p {
  margin: 0 0 1em;
  line-height: 200%;
}

.popup p:last-child {
  margin: 0;
}




</style>


 <?php include("ust_tablo.php") ?>
        <div class="breadcrumbs-area breadcrumbs-bg ptb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumbs-inner">
                            <h5 class="breadcrumbs-disc m-0">Kolluk Kuvvetleri</h5>
                            <h2 class="breadcrumbs-title text-black m-0">BAZI İŞLEM BASAMAKLARI </h2>
                            <ul class="top-page">
                                <li><a href="index.html">Anasayfa</a></li>
                                <li>></li>
                                <li>Bazı İşlem Basamakları</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        <!-- End Breadcrumbs Area -->
        
        <a href="islem_basamaklari.php">
       <div class="icerik"><div class="ustKisim">SIFIRLA</div></div> 
        </a>
        
            <!-- Start My Account -->
            <div class="my-account-page section-padding">

               
                   

	



<div id="popup1" class="overlay light">
	<a class="cancel" href="#"></a>
	<div class="popup">
		<h4><strong>YAKALAMALI ŞAHISLAR</strong></h4>
		<div class="content">
      <p><i class="fa fa-chevron-right" aria-hidden="true"></i> JABS Üzerinden Yakalandı Bilgisi Gir<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Bilgi Notu Hazırlanır(Teşkilat İçi)<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Üst Yazı İle Birlikte;<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Yakalama Tutanağı<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Sevk Serbest Tutanağı<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Sanık Hakları Formu<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Uyap Arama Çıktısı<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Adli Makamlar Aranarak Talimatı Alınır<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Adli Makamlardan Sevk Talimatı Alınmışsa Adliyeye Sevk Edilir</p>
		</div>
	</div>
</div>
<div id="popup2" class="overlay light">
	<a class="cancel" href="#"></a>
	<div class="popup">
		<h4><strong>GÖZALTI</strong></h4>
		<div class="content">
      <p><i class="fa fa-chevron-right" aria-hidden="true"></i> Gözaltına Alma Formu Hazırlanır<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Nezarethaneye Girişte Hastaneden Darp Cebir Raporu Alınır<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Eğer Uyuşturucudan Yakalanmışsa İdrar Tahlili Yaptırılır<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Sanık Hakları Formu<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Yakınlarına Haber Verilir<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Nezarethane Alınanlar Kayıt Defterinin Giriş Kısmını Doldurulur<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Şahsın Üzerindeki Emanetler İyice Aranarak Alınır ve Emanetler Nezarethane Defterine Kayıt Edilir<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Gözaltı Giriş Formu Çekilir(Teşkilat İçi)<br><br>
                    Ertesi Gün;<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Nezarethane Alınanlar Kayıt Defterinin Çıkış Kısmını Doldurulur<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Şahsın Emanetleri Geri Verilir<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Gözaltı Çıkış Formu Çekilir(Teşkilat İçi)<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Adli Makamların Kararı Sonrası Bilgi Notu ve Vukuat Raporu Çekilir</p>
		</div>
	</div>
</div>

<div id="popup2" class="overlay light">
	<a class="cancel" href="#"></a>
	<div class="popup">
		<h4><strong>GÖZALTI</strong></h4>
		<div class="content">
      <p><i class="fa fa-chevron-right" aria-hidden="true"></i> Gözaltına Alma Formu Hazırlanır<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Nezarethaneye Girişte Hastaneden Darp Cebir Raporu Alınır<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Eğer Uyuşturucudan Yakalanmışsa İdrar Tahlili Yaptırılır<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Sanık Hakları Formu<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Yakınlarına Haber Verilir<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Nezarethane Alınanlar Kayıt Defterinin Giriş Kısmını Doldurulur<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Şahsın Üzerindeki Emanetler İyice Aranarak Alınır ve Emanetler Nezarethane Defterine Kayıt Edilir<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Gözaltı Giriş Formu Çekilir(Teşkilat İçi)<br><br>
                    Ertesi Gün;<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Nezarethane Alınanlar Kayıt Defterinin Çıkış Kısmını Doldurulur<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Şahsın Emanetleri Geri Verilir<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Gözaltı Çıkış Formu Çekilir(Teşkilat İçi)<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Adli Makamların Kararı Sonrası Bilgi Notu ve Vukuat Raporu Çekilir</p>
		</div>
	</div>
</div>

<div id="popup3" class="overlay light">
	<a class="cancel" href="#"></a>
	<div class="popup">
		<h4><strong>TUTUKLAMA</strong></h4>
		<div class="content">
      <p><i class="fa fa-chevron-right" aria-hidden="true"></i> Yakalanan Şahıs Adli Makamlar Tarafından Tutuklama Kararı Verilmişse;<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Adli Makamdan Cezaevine Sevk Dosyası Alınır<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Bilgi Notu ve Vukuat Raporu Çekilir(Teşkilat İçi)<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Hastaneden Covid Testi ve Darp Cebir Raporu Alınır<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> KİHBİ'den Yurtiçi Giriş ve Çıkış Çıktıları Alınır<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Şahıs Evraklarıyla Birlikte Cezaevine Teslim Tutanağı İle Teslim Edilir </p>
		</div>
	</div>
</div>

<div id="popup4" class="overlay light">
	<a class="cancel" href="#"></a>
	<div class="popup">
		<h4><strong>YOKLAMA KAÇAĞI(ASAL)</strong></h4>
		<div class="content">
      <p><i class="fa fa-chevron-right" aria-hidden="true"></i> JABS Üzerinden Yakalandı  Bilgisi Girilir<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Şahsa Yoklama Kaçağı Tebliğ-Tebellüğ Tutanağı 2 Suret Tanzim Edilip  1 Sureti Şahsa Verilir <br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Bilgi Notu ve Vukuat Raporu Çekilir(Teşkilat İçi)<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Tebliğ-Tebellüğ Tutanağının 1 Suretini Şahsın Askerlik Şubesine Üst Yazı İle Gönderilir </p>
		</div>
	</div>
</div> 

<div id="popup5" class="overlay light">
	<a class="cancel" href="#"></a>
	<div class="popup">
		<h4><strong>EV ARAMA FAALİYETLERİ</strong></h4>
		<div class="content">
<p><i class="fa fa-chevron-right" aria-hidden="true"></i> Arama konusunda savcıya bilgi verildilten sonra;<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Gecikmesinde Sakınca Hal Kapsamında "Arama ve El Koyma İçin Yazılı Emir" tanzim edilir <a class="test-popup-link banner-img"  href="ornekler/tutanaklar/resimler/arama_ve_el_koyma_icin_yazılı_emir.jpg">(Örnek İçin Tıkla)</a><br>

<i class="fa fa-chevron-right" aria-hidden="true"></i> İhbar Tutanağı Tanzim Edilir<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> İhbar Tutanağı ile Birlikte "Arama ve El Koyma İçin Yazılı Emir" savcıya imzaya sunulur <br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Savcının imzasının akabinde arama faaliyetine başlanır;<br><br>
                    
<i class="fa fa-chevron-right" aria-hidden="true"></i> Arama Faaliyetine İşlem Tanıkları olarak Muhtar, Muhtar Azası, komşular, yeteri kadar kuvvet, eldiven ve bone ile gidilir,<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> "Arama ve El Koyma İçin Yazılı Emir" kapsamında olarak süre ve aranacak yerler gözetilerek gerçekleştirilir, <br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Arama sırasında bulunan suç ve suç unsuru gibi bulgular savcının talimatı gereği el koyulur, rızaen teslim alınır, yakalamalı şahıslar varsa yakalanır,<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Tutanak tanzim edilir. Tutanağın Başlığına Rızaen alınan unsurları gerektirecek şeylerde(ruhsatlı silah gibi) "Rızaen Teslim Alma", zorla el konulan unsurlarda "El Koyma"(ruhsatsız silah gibi), yakalamalı bir durum varsa "Yakalama" hepsi varsa hepsi birden başlığa yazılarak "EV ARAMA,  EL KOYMA, RIZAEN TESLİM ALMA VE YAKALAMA TUTANAĞI" şeklinde tanzim edilir.<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Ele geçirilen delillerin <strong>Onaması</strong> için Arama ve El Koyma İçin Yazılı Emir, Tanzim edilen Arama Tutanağı, varsa başkaca arama kararı ile üst yazı ile savcının katibine <strong>Gecikesinde sakınca bulunan süre bitmeden</strong> sunulur.(Hakim onayına sunmak için) <br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Savcının talimatı gereği incelenmesi gereken unsurlar Uyuşturucu maddeler ve Alkol gibi unsurlar İlçe Tarım'a, Silah ve türevleri, Belge incelemesi(sahte belgeler vb.) gibi unsurlar Kriminal Dairelere, Teknolojik ürünler gibi unsurlar incelenmek üzere Siber Suçlar birimlerine gönderilir. Gönderirken tanzim edilecek begeler; İnceleme İstek Formu(Savcı onaylı), Koli kapama tutanağı ve Üst yazı ile gönderilecek Suç unsuru ile birlikte gönderilir. Birimlerden gelecek uzmanlık raporları tahkikata eklenir<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Uyuşturuculu aramalarda savcının talimatı ile şahıs idrar testine götürülür.<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Savcının talimatı gereği hangi sıfatla ifadesi alınacaksa şahsın ifadesi alınır(Şüpheli, müşteki..vb)<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Gözaltı talimatı alınmışsa, gözaltı işlemleri uygulanır. <a href="#popup2">+ Gözaltı İşlem Basamakları</a><br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Bilgi Notu ve Vukuat Raporu Çekilir(Teşkilat İçi)<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Hazırlanan Tahkikat evrakları ikmalen gönderilir.<br></p>
		</div>
	</div>
</div> 

<div id="popup6" class="overlay light">
	<a class="cancel" href="#"></a>
	<div class="popup">
    
   
	
    	<h4><strong>AİLE İÇİ ŞİDDET</strong> <font size="-3"><a href=mevzuat.php?link=6284 target="_blank">  6284 AİLENİN KORUNMASI VE KADINA KARŞI ŞİDDETİN ÖNLENMESİNE DAİR KANUN</a></font></h4>   
		<div class="content">
      <p><i class="fa fa-chevron-right" aria-hidden="true"></i><u> Mağdur Koruyucu Tedbir Kararı İstiyorsa;</u><br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> UYAP Üzerinden Kontrol Edilir Daha Önce Tedbir Kararı Almışmı,<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Karşı Tarafın Silahı Varsa El Koyulur, Silah Ruhsat Talebi Olursa Reddedilir.<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> <u>Üst Yazı İle Birlikte Tanzim Edilecek Evraklar;</u><br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Gecikmesinde Sakınca Bulunan Hal Kapsamında Önleyici Tedbir Karar Formu Tanzim Edilir,<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Mağdur ŞÖNİM(Şiddet Önleme Merkezi)'e Sığınmak İstiyormu? İsteyip İstemediğine Dair Tutanak Tutulur(Aydınlatılmış Rıza Tutanağı),<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Mağdura KADES Programı Tebliğ Edilip, Tebliğ edildiğine dair Tutanak Tutulur,<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> JAPS Üzerinden Aile İçi Şiddet Olayları Formu Doldurulup Şahsın İmzası İle 4 Nüsha(1'i A.İçi.Şid.Ks.A.liğine, 1'i Tahkikat Dosyasına, 1'i İlçe A.İçi.Şid.Ks.Şb., 1'i Kendi Arşivimize) Yazdırılır,  <br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Tedbir Kararı Mağdura ve Karşı Tarafa Tutanak İle Tebliğ Edilir,<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Tarafların İfadeleri Alınır,<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Bilgi Notu ve Vukuat Raporu Çekilir(Teşkilat İçi),<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Mağdur Koruyucu Tedbir Süresince Haftada 1 Kez Tutanak İle Kontrol Edilir,<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Kontrol Süresi Bitince Tutanaklar Aile Mahkemesine Gönderilir.</p>
		</div>
	</div>
</div> 
           
                    
<div id="popup7" class="overlay light">
	<a class="cancel" href="#"></a>
	<div class="popup">
		<h4><strong>İDARİ YAPTIRIM <font size="-3"><a href="idari_yaptirimlar.php" target="_blank">Güncel İdari Yaptırımlar</a></font></strong></h4>
		<div class="content">
      <p><i class="fa fa-chevron-right" aria-hidden="true"></i>Kabahati vb.. anlatan Tuttanak Tutulacak,<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> İdari Yaptırım Makbuzu Tanzim Edilecek,<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Bilgi Notu ve Vukuat Raporu Çekilir(Teşkilat İçi),<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> İdari Yaptırım Defteri Doldurulur,<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> İdari Yaptırım Makbuzu Mülki Amire İmzalattırılır,<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> İdari Yaptırım Mülki Amir tarafından Onaylandıktan Sonra Şahsa Tebliğ Yapılır,<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Tebliğ Sonrası Makbuz Tutanak ile Birlikte Tahsil Edilmek Üzere Vergi Dairesine Üst Yazı İle Gönderilir. </p>
		</div>
	</div>
</div>                  


                   
                                   
                                   
                                   


<div class="body genealogy-body genealogy-scroll">
    <div class="genealogy-tree">
        <ul>
            <li>
                <a href="javascript:void(0);">
                    <div class="member-view-box">
                        <div class="member-image">
                          <div class="member-details">
                                <br><h5><strong>GENEL</strong></h5> 
                            </div>
                        </div>
                    </div>
                </a> 
                <ul class="active">
                    

                    
		<li>	
                        <a href="javascript:void(0);">
                            <div class="member-view-box"><br><h6><strong>YAKALAMALI ŞAHISLAR</strong></h6><font color="#FF0000">* Gözaltı talimatı veya Tutuklama talimatı<br>&nbsp;&nbsp; verilmişse bu kutucuğa tıklayın.</font><br><br>
                                <div class="member-image">
                                  <div class="member-details">
                                          
                                  </div>
                                </div>
                            </div>
                        </a> <br><a href="#popup1">+ İşlem Basamakları</a>
                        
                        
				<ul >
                        
                            <li>
                                <a href="javascript:void(0);">
                            <div class="member-view-box"><br><h6><strong>GÖZALTI</strong></h6>
                                <div class="member-image">
                                  <div class="member-details">
                                          
                                  </div>
                                </div>
                            </div>
                        </a> <br><a href="#popup2">+ İşlem Basamakları</a>
                            </li>
                            
                            
                            <li>
                                <a href="javascript:void(0);">
                            <div class="member-view-box"><br><h6><strong>TUTUKLAMA</strong></h6>
                                <div class="member-image">
                                  <div class="member-details">
                                          
                                  </div>
                                </div>
                            </div>
                        </a> <br><a href="#popup3">+ İşlem Basamakları</a>
                            </li>
                            
                            <li>
                                <a href="javascript:void(0);">
                            <div class="member-view-box"><br><h6><strong>YOKLAMA KAÇAĞI</strong></h6>
                                <div class="member-image">
                                  <div class="member-details">
                                          
                                  </div>
                                </div>
                            </div>
                        </a> <br><a href="#popup4">+ İşlem Basamakları</a>
                            </li>
                                
				</ul>
		</li>
                    
                    



                    <li>	
                        <a href="javascript:void(0);">
                            <div class="member-view-box"><br><h6><strong>EV ARAMA FAALİTLERİ</strong></h6>
                                <div class="member-image">
                                  <div class="member-details">
                                          
                                  </div>
                                </div>
                            </div>
                        </a> <br><a href="#popup5">+ İşlem Basamakları</a>           
					</li>                    
                    

                    
                    
                    
                    <li>	
                        <a href="javascript:void(0);">
                            <div class="member-view-box"><br><h6><strong>AİLE İÇİ ŞİDDET</strong></h6>
                                <div class="member-image">
                                  <div class="member-details">
                                          
                                  </div>
                                </div>
                            </div>
                        </a> <br><a href="#popup6">+ İşlem Basamakları</a>           
					</li>
        
        
                    <li>	
                        <a href="javascript:void(0);">
                            <div class="member-view-box"><br><h6><strong>İDARİ YAPTIRIM</strong></h6>
                                <div class="member-image">
                                  <div class="member-details">
                                          
                                  </div>
                                </div>
                            </div>
                        </a> <br><a href="#popup7">+ İşlem Basamakları</a>           
					</li>         
        
        
                </ul>
            </li>
        </ul>
    </div>
</div> 
<!-- partial -->
  <script  src="js/islembasamak.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
  
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/js/bootstrap.js'></script>      
                                        
                
                
                
            </div>            
            
            <!-- End of My Account -->
            

         <?php include("footer.php") ?>