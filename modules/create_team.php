 <?php if (file_exists("modules/m_create_team.php")) { include_once("modules/m_create_team.php"); } ?> 
<section class="our_team_area section-padding-100-70 clearfix" id="team">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-heading text-center">                                
                                <!-- <div class="dream-dots justify-content-center fadeInUp" data-wow-delay="0.2s">
                                    <span>Our Creative Team</span>
                                </div> -->
                                <h2 class="fadeInUp" data-wow-delay="0.3s"><?=$teamTitle?></h2>
                                <p class="fadeInUp" data-wow-delay="0.4s"><?=$teamDescript?></p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                       <?php 
                        if ($result_mmb = $mysqli->query($qr_mmb)) {
                            while ($row_mmb = $result_mmb->fetch_row()) {
                                if ($row_mmb[5]!='') {
                                    if (file_exists($row_mmb[5])) {
                                        $memberImg = $row_mmb[5];
                                    } else {
                                        $memberImg = "img/team-img/member1.png";
                                    }
                                } else {
                                    $memberImg = "img/team-img/member1.png";
                                }
                        ?>
                        <div class="col-12 col-sm-6 col-lg-3">
                           <div class="our-team ico-team">
                                <div class="team_img">
                                    <img src="<?=$memberImg?>" class="mt-30 width-80" alt="chef-1">
                                    <ul class="social">
                                        <li><a href="<?=$row_mmb[7]?>"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="<?='http://api.whatsapp.com/send?phone='.$row_mmb[8]?>"><i class="fa fa-whatsapp"></i></a></li>
                                        <li><a href="index.php?d=member/member&mem=<?=$row_mmb[0]?>"><i class="fa fa-mobile"></i></a></li>
                                    </ul>
                                </div>
                                <a href="index.php?d=member/member&mem=<?=$row_mmb[0]?>"><div class="team-content">
                                    <h4 class="title"><?=$row_mmb[3]?></h4>
                                    <span class="post"><?=$row_mmb[6]?></span>
                                </div></a>
                            </div>
                        </div>
                        <?php                    
                            }
                            $result_mmb->close();
                        }  
                        ?>  
                    </div>
                </div>
            </section>