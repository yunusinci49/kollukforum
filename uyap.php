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
                            <h2 class="breadcrumbs-title text-black m-0">UYAP İŞLEM BASAMAKLARI </h2>
                            <ul class="top-page">
                                <li><a href="index.html">Anasayfa</a></li>
                                <li>></li>
                                <li>Uyap İşlem Basamakları</li>
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
		<h4><strong>TAHKİKAT KAYIT ETME</strong></h4>
		<div class="content">
                 <p><i class="fa fa-chevron-right" aria-hidden="true"></i> Üst Menüden "Takikat İşlemleri/ Tahkikat Kayıt",<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Çıkan Ekranda Bilgileri Doldur,<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Yeni Tahkikat Dosyası Aç'a Tıkla<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Taraf İşlemleri(Taraf Ekle, Adres Ekle, Suç Ekle) Yapılır,<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Üst Menüden "Karar İşlemleri/ Fezleke"<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Ek Listesi(Tarama)Yapılır,<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Detaylar Kısmı Doldurulur,<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Onay Listesi Düzenlenir,<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Kaydet Butonuna Basılır,<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> Belge Düzenle Butonunundan Üst Yazısı Yazılır,<br>
<i class="fa fa-chevron-right" aria-hidden="true"></i> F7'ye Basarak Üst Yazı Kayıt Edilir ve Çıktı Alınır,</p>
		</div>
	</div>
</div>
<div id="popup2" class="overlay light">
	<a class="cancel" href="#"></a>
	<div class="popup">
		<h4><strong>KAYIT ETİKLERİNİ BUL/SİL/DÜZENLE</strong></h4>
		<div class="content">
                 <p><i class="fa fa-chevron-right" aria-hidden="true"></i> Üst Menüden "Gelen Evrak İşlemleri/Onay İşlemleri"<br>
                   <i class="fa fa-chevron-right" aria-hidden="true"></i> Açılan Pencerede "Evrak Listesi Getir"e Tıkla<br></p>
		</div>
	</div>
</div>

<div id="popup3" class="overlay light">
	<a class="cancel" href="#"></a>
	<div class="popup">
		<h4><strong>TAHKİKAT SORUŞTURMA NUMARASI BULMA</strong></h4>
		<div class="content">
                 <p><i class="fa fa-chevron-right" aria-hidden="true"></i> Üst Menüden "Tahkikat İşlemleri/ Tahkikat Sorgulama",<br>
                    <i class="fa fa-chevron-right" aria-hidden="true"></i> Çıkan Ekranda Fezleke Numarası  Türüne Göre Numarasını Yazıp Bulunabilir<br></p>
		</div>
	</div>
</div>



<div id="popup4" class="overlay light">
	<a class="cancel" href="#"></a>
	<div class="popup">
		<h4><strong>GELEN EVRAKLAR</strong></h4>
		<div class="content">
      <p>               </p>
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
                                <br><h5><strong>UYAP</strong></h5> 
                            </div>
                        </div>
                    </div>
                </a> 
                <ul class="active">
                    

                    
		<li>	
                        <a href="javascript:void(0);">
                            <div class="member-view-box"><br><h6><strong>GİDEN EVRAKLAR</strong></h6>
                                <div class="member-image">
                                  <div class="member-details">
                                          
                                  </div>
                                </div>
                            </div>
                        </a>
                        
                        
				<ul >
                        
                            <li>
                                <a href="javascript:void(0);">
                            <div class="member-view-box"><br><h6><strong>TAHKİKAT KAYIT ETME</strong></h6>
                                <div class="member-image">
                                  <div class="member-details">
                                          
                                  </div>
                                </div>
                            </div>
                        </a> <br><a href="#popup1">+ İşlem Basamakları</a>
                            </li>
                            
                            
                            <li>
                                <a href="javascript:void(0);">
                            <div class="member-view-box"><br><h6><strong>KAYIT EDİLENLERİ BUL/SİL/DÜZENLE</strong></h6>
                                <div class="member-image">
                                  <div class="member-details">
                                          
                                  </div>
                                </div>
                            </div>
                        </a> <br><a href="#popup2">+ İşlem Basamakları</a>
                            </li>
                            
                            <li>
                                <a href="javascript:void(0);">
                            <div class="member-view-box"><br><h6><strong>TAHKİKAT SORUŞTURMA NUMARASI BULMA</strong></h6>
                                <div class="member-image">
                                  <div class="member-details">
                                          
                                  </div>
                                </div>
                            </div>
                        </a> <br><a href="#popup3">+ İşlem Basamakları</a>
                            </li>
                                
				</ul>
		</li>
                    
                    



                    <li>	
                        <a href="javascript:void(0);">
                            <div class="member-view-box"><br><h6><strong>GELEN EVRAKLAR</strong></h6>
                                <div class="member-image">
                                  <div class="member-details">
                                          
                                  </div>
                                </div>
                            </div>
                        </a> <br><a href="#popup4">+ İşlem Basamakları</a>           
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