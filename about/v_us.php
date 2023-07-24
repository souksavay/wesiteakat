    <!-- ##### Welcome Area Start ##### -->
    <div class="breadcumb-area">
        <!-- breadcumb content -->
        <div class="breadcumb-content">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <nav aria-label="breadcrumb" class="breadcumb--con text-center">
                            <h2 class="w-text title wow fadeInUp" data-wow-delay="0.2s">About us</h2>
                            <ol class="breadcrumb justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Welcome Area End ##### -->

     <!-- ##### About Us Area Start ##### -->
    <?php if (file_exists("modules/work_cosely_togeather.php")) { include_once("modules/work_cosely_togeather.php"); } ?>
    <!-- ##### About Us Area End ##### -->
    <?php if (file_exists("modules/contact.php")) { include_once("modules/contact.php"); } ?>
 <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area bg-img">

        <!-- ##### team Area Start ##### -->
        <div class="striples-bg">
            <!-- ##### Team Area Start ##### -->
            <?php if (file_exists("modules/create_team.php")) { include_once("modules/create_team.php"); } ?>  
            <!-- ##### Team Area End ##### -->
            <?php if (file_exists("modules/partners.php")) { include_once("modules/partners.php"); } ?>
        </div>
        <!-- ##### team Area End ##### -->
            