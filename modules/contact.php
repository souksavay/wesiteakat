<?php  if (file_exists("modules/m_contact.php")) { include_once("modules/m_contact.php"); } ?>  
    <section class="about-us-area hero-bg section-padding-100 clearfix">
        <div class="container">
            <div class="row align-items-center">
                
                <div class="col-12 col-lg-6 col-sm-12">
                    <div class="who-we-contant">
                        <div class="dream-dots text-left fadeInUp" data-wow-delay="0.2s" >
                            <span class="gradient-text cyan"><?=$contactTitle1 ?></span>
                        </div>
                        <h4 class="w-text bold fadeInUp" data-wow-delay="0.3s"><?=$contactTitle2 ?></h4>
                        <p class="g-text fadeInUp" data-wow-delay="0.5s"><?=$contactDiscript ?></p>
                        <div class="subscribe-section has-shadow mt-30">
                            <div class="input-wrapper">
                                <i class="fa fa-home"></i>
                                <input type="email" placeholder="<?=$contactInputEmail ?>">
                            </div>
                            <button class="btn more-btn orange mt-sm-15 ml-15"><?=$contactButton ?></button>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>