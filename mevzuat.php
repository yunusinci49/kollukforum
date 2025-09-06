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
</style>


 <?php include("ust.php") ?>
        <div class="breadcrumbs-area breadcrumbs-bg ptb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumbs-inner">
                            <h5 class="breadcrumbs-disc m-0">Kolluk Kuvvetleri</h5>
                            <h2 class="breadcrumbs-title text-black m-0">MEVZUATLAR </h2>
                            <ul class="top-page">
                                <li><a href="index.html">Anasayfa</a></li>
                                <li>></li>
                                <li>Mevzuatlar</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        <!-- End Breadcrumbs Area -->
        
        <a href="mevzuat.php">
       <div class="icerik"><div class="ustKisim">SIFIRLA</div></div> 
        </a>
        
            <!-- Start My Account -->
            <div class="my-account-page section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="procced-checkout">
                                
                                <p></p>
                            </div>
                        </div>
                    </div>
               
                    
                    
                    
                 

<ul id="menuFull">

                    <div class="row">
                        <div class="addresses-lists">
                            <div class="">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        
                                        
                                       


                                        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
                                   <input type="text" autocomplete="off" name="searchTags" id="searchTags" placeholder="ARA (BÜYÜK HARFLER KULLANIN)"/>     
                                        
                                      
                                        <?php include("kanunlar.php") ?>
                                        
                                         <?php include("yonetmelikler.php") ?>
                                      

                                        <?php include("diger_yayinlar.php") ?>
                                     
                                        
                                        
                                        


                                        
                                        
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                        </div>
                    </div>
                    
                    </ul>
 



                </div>
            </div>            
            
            <!-- End of My Account -->
            
            <script  src="search/script.js"></script>
         <?php include("footer.php") ?>