 <?php if (file_exists("modules/m_client.php")) { include_once("modules/m_client.php"); } ?>  
    <section class="clients_testimonials_area bg-img section-padding-0-0" id="test">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading text-center">
                            <!-- <div class="dream-dots justify-content-center fadeInUp" data-wow-delay="0.2s">
                                <span class="gradient-text blue">OUR TESTIMONIALS</span>
                            </div> -->
                            <h2 class="bl-text wow fadeInUp" data-wow-delay="0.3s"><?=$clientTitle?></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s"><?=$clientDescript?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cotainer-fluid">
                <div class="row justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                    <div class="col-12 col-md-10 col-xs-10 offset-xs-1">
                        <div class="client_slides owl-carousel">
                            <?php 
                                if ($result_d = $mysqli->query($qr_clientD)) {
                                    while ($row_d = $result_d->fetch_row()) {
                                        if ($row[6]!='') {
                                            if (file_exists($row[6])) {
                                                $memImg = $row[6];
                                            } else {
                                                $memImg = "img/test-img/1.jpg";
                                            }
                                        } else {
                                            $memImg = "img/test-img/1.jpg";
                                        }
                            ?>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                <!-- Testimonial Image -->
                                <div class="testimonial_image">
                                    <img src="<?=$memImg ?>" alt="">
                                </div>
                                <!-- Testimonial Feedback Text -->
                                <div class="testimonial-description">
                                    <div class="testimonial_text">
                                        <p><?=$row_d[3] ?></p>
                                    </div>

                                    <!-- Admin Text -->
                                    <div class="admin_text">
                                        <h5><?=$row_d[4] ?></h5>
                                        <p><?=$row_d[5] ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php                    
                                }
                                $result_d->close();
                            }  
                            ?>   
                        </div>
                    </div>
                </div>
            </div>
        </section>