 <?php if (file_exists("modules/m_faq.php")) { include_once("modules/m_faq.php"); } ?>  
 <div class="faq-timeline-area section-padding-100-85" id="faq">
        <div class="container">
          <div class="section-heading text-center">
              
              <!-- <div class="dream-dots justify-content-center fadeInUp" data-wow-delay="0.2s">
                  <span class="gradient-text blue">REPEATED QUESTIONS</span>
              </div> -->
              <h2 class="fadeInUp" data-wow-delay="0.3s">  <?=$faqTitle_h?></h2>
              <p class="fadeInUp" data-wow-delay="0.4s"><?=$faqDescript_h?></p>
          </div>
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 offset-lg-0 col-md-8 offset-md-2 col-sm-12">
                    <img src="<?=$faqImg_h?>" alt="" class="center-block img-responsive">
                </div>
                <div class="col-12 col-lg-6 col-md-12">
                    <div class="dream-faq-area mt-s ">
                        <dl style="margin-bottom:0">
                            <!-- Single FAQ Area -->
                            <?php 
                                if ($result_qt = $mysqli->query($qr_faqD)) {
                                    $i=2;
                                    while ($row_qt = $result_qt->fetch_row()) {                                                                            
                                        if ($i == 1) {
                            ?>
                            <dt class="v2 wave fadeInUp" data-wow-delay="0.<?=$i?>s"><?=$row_qt[1]?></dt>
                            <dd class="fadeInUp" data-wow-delay="0.3s">
                                <p><?=$row_qt[2]?></p>
                            </dd>
                            <?php } else {?>

                            <!-- Single FAQ Area -->
                            <dt class="v2 wave fadeInUp" data-wow-delay="0.<?=$i?>s"><?=$row_qt[1]?></dt>
                            <dd>
                                <p><?=$row_qt[2]?></p>
                            </dd>

                            <?php      
                                }
                                $i++;              
                                }
                                $result_qt->close();
                            }  
                            ?>
                             
                        </dl>
                    </div>
                </div>
                
            </div>
        </div>
    </div>