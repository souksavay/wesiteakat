 <?php if (file_exists("modules/m_partners.php")) { include_once("modules/m_partners.php"); } ?>  
<section class="our-partners clearfix section-padding-0-70">
                <div class="container">
                    <div class="section-heading text-center">
                        
                        <!-- <div class="dream-dots justify-content-center fadeInUp" data-wow-delay="0.2s">
                            <span>Our Main Partners</span>
                        </div> -->
                        <h2 class="fadeInUp" data-wow-delay="0.3s"><?=$partnerTitle_h?></h2>
                        <p class="fadeInUp" data-wow-delay="0.4s"><?=$partnerDescript_h?></p>
                    </div>
                    <div class="row">
                        <?php 
                            if ($result_partnerD = $mysqli->query($qr_partnerD)) {                                
                                while ($row_pnd = $result_partnerD->fetch_row()) {                                   
                                    if ( $row_pnd[5] != "") {
                                        if (file_exists($row_pnd[5])) {
                        ?>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="team-member ">
                                <div class="team-img">
                                    <img class="img-responsive center-block " width="160" height="50" src="<?=$row_pnd[5]?>" alt="">
                                </div>
                            </div>
                        </div>
                        <?                      
                                        }                     
                                    }                                                         
                            }
                            $result_partnerD->close();
                        }  
                        ?>                           
                    </div>
                </div>
            </section>