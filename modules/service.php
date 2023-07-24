<?php if (file_exists("modules/m_service.php")) { include_once("modules/m_service.php"); } ?>  
<section class=" fuel-features features section-padding-100 clearfix">        
        <div class="container has-shadow">
            <div class="section-heading text-center">                            
                <h2 class="wow fadeInUp" data-wow-delay="0.3s" ><?=$serviceTitle_h?></h2>
            </div>
            <div class="row align-items-center">
                <?php 
                    if ($result_sd = $mysqli->query($qr_sD)) {
                        while ($row_sd = $result_sd->fetch_row()) {
                            
                            if (strlen($row_sd[2]) > 670) {
                                $mini_descript = substr($row_sd[2], 0, 670);
                            } else {
                                $mini_descript = $row_sd[2];
                            }
                ?>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-md-30">
                    <div class="services-block-four v2">
                        <div class="inner-box">
                            <div class="icon-img-box">
                                <img src="<?=$row_sd[4]?>" alt="">
                            </div>
                            <h3><a href="index.php?d=product/detail&product=<?=$row_sd[0]?>&pn=<?=$row_sd[1]?>"><?=$row_sd[1]?></a></h3>
                            <div class="text"><?=$mini_descript?></div>
                        </div>
                        <a href="index.php?d=product/detail&product=<?=$row_sd[0]?>&pn=<?=$row_sd[1]?>" class="icon_foot">
                            <i class="fa fa-long-arrow-right"></i>
                        </a>
                    </div>                                        
                </div>
                <?php                    
                    }
                    $result_sd->close();
                }  
                ?>                                                         
            </div>            
        </div>
</section>

  