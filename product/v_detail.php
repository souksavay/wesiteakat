    <div class="breadcumb-area">
        <!-- breadcumb content -->
        <div class="breadcumb-content">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <nav aria-label="breadcrumb" class="breadcumb--con text-center">
                            <h2 class="w-text title wow fadeInUp" data-wow-delay="0.2s"><?=$_GET['pn']?></h2>
                            <ol class="breadcrumb justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">product detail</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>


     <!-- ##### About Us Area Start ##### -->
    <section class="special section-padding-100-70 clearfix" id="about">
        
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 offset-lg-0 col-md-12 no-padding-left">
                    <div class="welcome-meter wow fadeInUp mb-30" data-wow-delay="0.7s">
                        <img src="<?=$serviceImg ?>"  alt="">
                    </div>
                </div>
                
                <div class="col-12 col-lg-6 offset-lg-0">
                    <div class="who-we-contant">
                        <!-- <div class="dream-dots text-left fadeInUp" data-wow-delay="0.2s" >
                            <span class="gradient-text blue">product detail</span>
                        </div> -->
                        <h4 class="fadeInUp" data-wow-delay="0.3s"><?=$serviceTitle?></h4>
                        <p class="fadeInUp" data-wow-delay="0.4s"><?=$serviceDescript?></p>
                        <div class="list-wrap align-items-center mb-20">
                            <div class="row">
                                <?php 
                                if ($result_fn = $mysqli->query($qr_fn)) {
                                    while ($row_fn = $result_fn->fetch_row()) {
                                ?>
                                <div class="col-md-6">
                                    <div class="side-feature-list-item">
                                        <i class="fa fa-check-square-o check-mark-icon-font" aria-hidden="true"></i>
                                        <div class="foot-c-info"><?=$row_fn[2]?></div>
                                    </div>
                                </div>
                                <?php                    
                                    }
                                    $result_fn->close();
                                }  
                                ?>  
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->

     <!-- ##### About Us Area Start ##### -->
   <?php if (file_exists("modules/contact.php")) { include_once("modules/contact.php"); } ?>
   <br><br>