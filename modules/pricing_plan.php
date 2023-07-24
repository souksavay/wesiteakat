 <?php if (file_exists("modules/m_pricing_plan.php")) { include_once("modules/m_pricing_plan.php"); } ?>  
<section class="pricing section-padding-100-70" style="background: #edf6fd" id="pricing">        
        <div class="container">
            <div class="section-heading text-center">
                
                <!-- <div class="dream-dots justify-content-center fadeInUp" data-wow-delay="0.2s">
                    <span class="gradient-text blue">PRICING PLANS</span>
                </div> -->
                <h2 class="fadeInUp" data-wow-delay="0.3s"><?=$priceTitle?></h2>
                <p class="fadeInUp" data-wow-delay="0.4s"><?=$priceDescript?></p>
            </div>
            <div class="row no-gutters">
                <!-- Single Table -->
                <?php 
                if ($result_priceD = $mysqli->query($qr_priceD)) {
                    $i=2;
                    while ($row_priced = $result_priceD->fetch_row()) {
                        if ( fmod($i, 2) != 0) {
                            $activeddd = "active";                        
                        } else {
                            $activeddd = "";
                        }
                        $get_priceID = $row_priced[0];
                ?>
                <div class="col-lg-4 col-md-6">
                    <div class="single_price_table_content <?=$activeddd?> text-center wow fadeInUp" data-wow-delay="0.<?=$i?>s" >
                        <div class="price_table_text">
                            <h5><?=$row_priced[1]?></h5>
                            <h1><?=$row_priced[5]?></h1>
                            <p><?=$row_priced[6]?></p>
                        </div>
                        <?php 
                            $qr_item ="SELECT * FROM tb_price_detail WHERE status_id = 1 and langID = '$langID' and priceID = '$get_priceID' ORDER BY pdID ASC ";
                            if ($result_item = $mysqli->query($qr_item)) {                   
                                while ($row_item = $result_item->fetch_row()) {                                    
                        ?>
                        <div class="table_text_details">
                            <p><?=$row_item[2]?></p>                           
                        </div>
                        <?php                                    
                            }
                            $result_item->close();
                        }  
                        ?>  
                        <div class="table_btn mt-50">
                            <a href="#" class="btn more-btn">Start</a>
                        </div>
                    </div>
                </div> 
                <?php    
                    $i++;                
                    }
                    $result_priceD->close();
                }  
                ?>           
            </div>
        </div>        
    </section>