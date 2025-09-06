
<!-- Video Skript Css başlangıcı -->
<style type="text/css">
video {
border: 1px solid black;
padding: 0;
margin: 0;
background-color: black;
margin: auto;
display: block;
}
#buttons {
text-align: center;
}
button{
font-family: Helvetica Neue, "Arial", Helvetica, Verdana, sans-serif;
}
.awesome{
background: #222;/* url(/images/alert-overlay.png) repeat-x;*/
display: inline-block;
padding: 5px 10px 6px;
color: #fff;
text-decoration: none;
font-weight: bold;
line-height: 1;
-moz-border-radius: 5px;
-webkit-border-radius: 5px;
-moz-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
text-shadow: 0 -1px 1px rgba(0,0,0,0.25);
border-bottom: 1px solid rgba(0,0,0,0.25);
position: relative;
cursor: pointer;
}
.awesome:hover {
background-color: #111;
color: #fff;
}
.large.awesome {
font-size: 14px;
padding: 8px 14px 9px;
}
.red.awesome {
background-color: #e33100;
}
.blue.awesome {
background-color: #2daebf;
}
.blue.awesome:hover {
background-color: #007d9a;
}
.red.awesome:hover {
background-color: #872300;
}













:root {
  font-family: sans-serif;
  font-size: 16px;
}

* {
  box-sizing: border-box;
}

.content {
  width: 100%;
  margin: auto;
}
@media (min-width: 40em) {
  .content {
    width: 40em;
  }
}
@media (min-width: 80em) {
  .content {
    width: 80em;
  }
}

.gallery {
  display: flex;
  flex-flow: row wrap;
  align-content: flex-start;
  align-items: stretch;
  width: 100%;
  margin: auto;
}
.gallery .galleryItem {
  flex: 1 1 auto;
  margin: 0.3em;
  border: 1px solid black;
  position: relative;
  width: 12em;
  height: 13em;
  overflow: hidden;
}
@media (min-width: 40em) {
  .gallery .galleryItem {
    width: 10em;
    height: 10em;
  }
}
@media (min-width: 80em) {
  .gallery .galleryItem {
    width: 17em;
    height: 17em;
  }
}
.gallery .galleryItem:hover img {
  transform: scale(1.2);
}
.gallery a {
  display: block;
  width: 100%;
  height: 100%;
}
.gallery img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: 0.2s;
}
.gallery figcaption {
  background-color: rgba(0, 0, 0, 0.4);
  color: #fff;
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  padding: 1em;
}

.lightBoxOverlay {
  display: block;
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background-color: rgba(0, 0, 0, 0.7);
}
.lightBoxOverlay .closeButton {
  position: absolute;
  top: 0.5em;
  right: 0.5em;
  color: #000;
  background-color: #fff;
  font-size: 1.5em;
  border-radius: 1em;
  padding: 0.44em 0.66em;
  height: 2em;
  width: 2em;
  cursor: pointer;
  transition: 0.2s;
}
.lightBoxOverlay .closeButton:hover {
  color: #fff;
  background-color: #000;
}
@media (min-width: 80em) {
  .lightBoxOverlay .closeButton {
    font-size: 2em;
    top: 1em;
    right: 1em;
    height: 2em;
    width: 2em;
  }
}
.lightBoxOverlay .container {
  margin: 0;
  display: flex;
  flex-flow: column nowrap;
  justify-content: center;
  align-content: center;
  align-items: center;
  width: 100%;
  height: 100%;
  padding: 1em;
}
@media (min-width: 40em) {
  .lightBoxOverlay .container {
    padding: 3em;
  }
}
@media (min-width: 80em) {
  .lightBoxOverlay .container {
    padding: 5em;
  }
}
.lightBoxOverlay img {
  max-width: 100%;
  max-height: 100%;
}
.lightBoxOverlay figcaption {
  margin-top: 1em;
  padding: 0.5em 1em;
  color: #fff;
  background: rgba(0, 0, 0, 0.7);
  border-radius: 5em;
}



</style>
<!-- Video Skript Css Sonu -->

 <?php include("ust.php") ?>
        <div class="breadcrumbs-area breadcrumbs-bg ptb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumbs-inner">
                            <h5 class="breadcrumbs-disc m-0">Kolluk Kuvvetleri</h5>
                            <h2 class="breadcrumbs-title text-black m-0">UYUŞTURUCU MADDELER </h2>
                            <ul class="top-page">
                                <li><a href="index.html">Anasayfa</a></li>
                                <li>></li>
                                <li>Uyuşturucu Maddeler</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        <!-- End Breadcrumbs Area -->
   
        <!-- Start page content -->
        <section id="page-content" class="page-wrapper pt-10">



            <!-- Start Shop Left Side Bar -->
            <div class="shop-left-side-area section-padding">
                <div class="container">
                    <div class="row rp-style-2">
                        <div class="col-xs-12 col-sm-9 col-sm-push-3 cp-style-2">

                            <!-- Start Product List -->
<? 
switch(true)
{

case  $_GET[link]=="giris"; include("ornekler/uyusturucu/giris.php"); break;
case  $_GET[link]=="kenevir"; include("ornekler/uyusturucu/kenevir.php"); break;
case  $_GET[link]=="afyon_turevleri"; include("ornekler/uyusturucu/afyon_turevleri.php"); break;
case  $_GET[link]=="koka_ve_kokain"; include("ornekler/uyusturucu/koka_ve_kokain.php"); break;
case  $_GET[link]=="halusinojenler"; include("ornekler/uyusturucu/halusinojenler.php"); break;
case  $_GET[link]=="uyaricilar"; include("ornekler/uyusturucu/uyaricilar.php"); break;
case  $_GET[link]=="diger"; include("ornekler/uyusturucu/diger.php"); break;
                            
}
?>                                        
       
                            
                            
                          
                            
                            
                            <!-- End Shop Left Side Bar -->

                        </div>
                        <div class="col-xs-12 col-sm-3 col-sm-pull-9 cp-style-2">
                            <div class="aside-list">
                                <aside class="single-aside mb-40">
                                    <h5 class="widget-title text-uppercase text-black pb-15"><strong></strong></h5>
                                    <ul class="widget-menu text-capitalize pb-10">
                          <li> <a href=uyusturucu_maddeler.php?link=giris>  <i class="fa fa-angle-right" aria-hidden="true"></i> Giriş</a></li>
                          <li> <a href=uyusturucu_maddeler.php?link=kenevir> <i class="fa fa-angle-right" aria-hidden="true"></i> Kenevir</a></li>
                          <li> <a href=uyusturucu_maddeler.php?link=afyon_turevleri> <i class="fa fa-angle-right" aria-hidden="true"></i> Afyon Türevleri</a></li>
                          <li> <a href=uyusturucu_maddeler.php?link=koka_ve_kokain> <i class="fa fa-angle-right" aria-hidden="true"></i> Koka ve Kokain</a></li>
                          <li> <a href=uyusturucu_maddeler.php?link=halusinojenler> <i class="fa fa-angle-right" aria-hidden="true"></i> Halüsinojenler</a></li>
                          <li> <a href=uyusturucu_maddeler.php?link=uyaricilar> <i class="fa fa-angle-right" aria-hidden="true"></i> Uyarıcılar</a></li>
                          <li> <a href=uyusturucu_maddeler.php?link=diger> <i class="fa fa-angle-right" aria-hidden="true"></i> Diğer</a></li>
 
                                    </ul>
                                </aside>
                            </div>
                        </div>
                        
                        
                        
                        
                        
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- End page content -->
     
     
     
      <!-- Video Skript başlangıcı -->
       <script  src="video/script.js"></script>
       <script  src="js/galeri.js"></script>
     <!-- Video Skript sonu -->
     
     
      <?php include("footer.php") ?>