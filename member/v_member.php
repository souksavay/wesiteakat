    <!-- ##### Welcome Area Start ##### -->
    <div class="breadcumb-area">
        <!-- breadcumb content -->
        <div class="breadcumb-content">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <nav aria-label="breadcrumb" class="breadcumb--con text-center">
                            <h2 class="w-text title wow fadeInUp" data-wow-delay="0.2s">Team Member</h2>
                            <ol class="breadcrumb justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Team Member</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Welcome Area End ##### -->

     <!-- ##### About Us Area Start ##### -->
     <section class="special section-padding-100-70 clearfix" id="about">
        
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 offset-lg-0 col-md-12 no-padding-left">
                    <div class="welcome-meter wow fadeInUp mb-30" data-wow-delay="0.7s">
                        <img src="<?=$memImg ?>"  alt="">
                    </div>
                </div>
                
                <div class="col-12 col-lg-6 offset-lg-0">
                    <div class="who-we-contant">
                        <div class="dream-dots text-left fadeInUp" data-wow-delay="0.2s" >
                            <span class="gradient-text blue"><?=$memFullName?></span>
                        </div>
                        <h4 class="fadeInUp" data-wow-delay="0.3s"><?=$memPosition?></h4>
                        <p class="fadeInUp" data-wow-delay="0.4s"><?=$memDescript?></p>
                        <div class="list-wrap align-items-center mb-20">
                            <div class="row">
                                <?php 
                                if ($result_tt = $mysqli->query($qr_tt)) {
                                    while ($row_tt = $result_tt->fetch_row()) {
                                ?>
                                <div class="col-md-6">
                                    <div class="side-feature-list-item">
                                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                                        <div class="foot-c-info">&nbsp;&nbsp;<?=$row_tt[2]?></div>
                                    </div>
                                </div>
                                <?php                    
                                    }
                                    $result_tt->close();
                                }  
                                ?>  
                            </div>
                        </div>
                        <br>
                        <div class="dream-dots text-left fadeInUp" data-wow-delay="0.2s" >
                            <span class="gradient-text blue">Contact</span>
                        </div>                      
                        <div class="list-wrap align-items-center mb-20">
                            <div class="row">
                                 <div class="col-md-6">
                                    <div class="side-feature-list-item">
                                        <i class="fa fa-facebook-square" aria-hidden="true"></i>
                                        <a href="<?=$memFacebook?>"><div class="foot-c-info">&nbsp;&nbsp;<?=$memFacebook?></div></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                 <div class="col-md-6">
                                    <div class="side-feature-list-item">
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                        <a href="<?='http://api.whatsapp.com/send?phone='.$memWhatsapp?>"><div class="foot-c-info">&nbsp;&nbsp;<?=$memWhatsapp?></div></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                 <div class="col-md-6">
                                    <div class="side-feature-list-item">
                                        <i class="fa fa-mobile" aria-hidden="true"></i>
                                        <div class="foot-c-info">&nbsp;&nbsp;<?=$memTel?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->
    <?php if (file_exists("modules/contact.php")) { include_once("modules/contact.php"); } ?>
 <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area bg-img">

        <!-- ##### team Area Start ##### -->
        <div class="striples-bg">
            <!-- ##### Team Area Start ##### -->
            <?php if (file_exists("modules/create_team.php")) { include_once("modules/create_team.php"); } ?>  
            <!-- ##### Team Area End ##### -->           
        </div>
        <!-- ##### team Area End ##### -->
            