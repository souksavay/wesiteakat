 <?php if (file_exists("modules/m_work_cosely_togeather.php")) { include_once("modules/m_work_cosely_togeather.php"); } ?> 
 <section class="special section-padding-100-70 clearfix" id="about">        
        <div class="container">
            <?php 
                if ($result_ab = $mysqli->query($qr_ab)) {
                    while ($row = $result_ab->fetch_row()) {
                        $abTitle = $row[1];       
                        $abDescript = $row[2];        
                        $abImg = $row[4]; 
            ?>
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 offset-lg-0 col-md-12 no-padding-left">
                    <div class="welcome-meter wow fadeInUp mb-30" data-wow-delay="0.7s">
                        <img src="<?=$abImg?>"  alt="">
                    </div>
                </div>
                
                <div class="col-12 col-lg-6 offset-lg-0">
                    <div class="who-we-contant">
                        <!-- <div class="dream-dots text-left fadeInUp" data-wow-delay="0.2s" >
                            <span class="gradient-text blue"><?=$abTitle?></span>
                        </div> -->
                        <h4 class="fadeInUp" data-wow-delay="0.3s"><?=$abTitle?></h4>
                        <p class="fadeInUp" data-wow-delay="0.4s"><?=$abDescript?></p>                       
                    </div>
                </div>

            </div>
            <?php 
                }
                $result_ab->close();
            }
            ?>
        </div>
    </section>