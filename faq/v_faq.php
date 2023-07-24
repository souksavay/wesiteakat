    <!-- ##### Welcome Area Start ##### -->
    <div class="breadcumb-area">
        <!-- breadcumb content -->
        <div class="breadcumb-content">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <nav aria-label="breadcrumb" class="breadcumb--con text-center">
                            <h2 class="w-text title wow fadeInUp" data-wow-delay="0.2s">FAQ Questions</h2>
                            <ol class="breadcrumb justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">FAQ</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Welcome Area End ##### -->

    <!-- ##### FAQ & Timeline Area Start ##### -->
     <?php if (file_exists("modules/faq.php")) { include_once("modules/faq.php"); } ?>
    <!-- ##### FAQ & Timeline Area End ##### -->
    <br>

    <?php if (file_exists("modules/special.php")) { include_once("modules/special.php"); } ?>

    <?php if (file_exists("modules/features.php")) { include_once("modules/features.php"); } ?>