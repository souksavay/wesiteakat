    <!-- ##### Welcome Area Start ##### -->
    <div class="breadcumb-area">
        <!-- breadcumb content -->
        <div class="breadcumb-content">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <nav aria-label="breadcrumb" class="breadcumb--con text-center">
                            <h2 class="w-text title wow fadeInUp" data-wow-delay="0.2s">Pricing</h2>
                            <ol class="breadcrumb justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Pricing</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Welcome Area End ##### -->

     <?php if (file_exists("modules/pricing_plan.php")) { include_once("modules/pricing_plan.php"); } ?>    
    <!-- ##### Pricing Area End ##### -->
    <br><br>
     <!-- ##### Testimonial Area Start ##### -->
        <?php if (file_exists("modules/client.php")) { include_once("modules/client.php"); } ?>
        <!-- ##### Testimonial Area End ##### -->
    <br><br>

       