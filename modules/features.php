<?php if (file_exists("modules/m_features.php")) { include_once("modules/m_features.php"); } ?>  


<section class="section-padding-100-70 ico-about-bg relative clearfix" >
        <div class="container">
            
            <div class="section-heading text-center">
                
                <!-- <div class="dream-dots justify-content-center fadeInUp" data-wow-delay="0.2s">
                    <span class="gradient-text blue">OUR FEATURES</span>
                </div> -->
                <h2 class="fadeInUp" data-wow-delay="0.3s"><?=$featureTitle_h?></h2>
                <p class="fadeInUp" data-wow-delay="0.4s"><?=$featureDescript_h?></p>
            </div>

            <div class="row">
            <?php 
            if ($result_d = $mysqli->query($qr_featureD)) {
                while ($row_d = $result_d->fetch_row()) {
            ?>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="service_single_content text-left mb-100 fadeInUp" data-wow-delay="0.2s">               
                    <div class="service_icon">
                        <img src="<?=$row_d[4]?>" alt="">
                    </div>
                    <h6><?=$row_d[1]?></h6>
                    <p><?=$row_d[2]?></p>
                </div>
            </div>            
            <?php                    
                }
                $result_d->close();
            }  
            ?>                                        
            </div>
        </div>
    </section>