<?php 
    session_start();
  require_once('indexCode.php');   
  $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; 
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->    
  <?php function htmltage($title){ ?>
  <title><?php echo $title; ?></title>
  <?php } ?>    
    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">    
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,900" rel="stylesheet">   
    <!-- for chat -->
 
    <!-- end chat --> 
    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/font-icons.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="css/responsive.css">
    <script language="javascript" type="text/javascript">
function getXMLHTTP() { //fuction to return the xml http object
        var xmlhttp=false;  
        try{
            xmlhttp=new XMLHttpRequest();
        }
        catch(e)    {       
            try{            
                xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
            }
            catch(e){
                try{
                xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
                }
                catch(e1){
                    xmlhttp=false;
                }
            }
        }
            
        return xmlhttp;
    }


    function SelLang(langID) {           
        var strURL="function/lang.php?langid="+langID;
        var req = getXMLHTTP();
        
        if (req) {
            
            req.onreadystatechange = function() {
                if (req.readyState == 4) {
                    // only if "OK"
                    if (req.status == 200) {                        
                       location.reload();                       
                    } else {
                        alert("Problem while using XMLHTTP (LANGUAGE):\n" + req.statusText);
                    }
                }               
            }           
            req.open("GET", strURL, true);
            req.send(null);
        }        
    }

</script>
</head>
<body class="light-version">
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="dream-load"></div>
        </div>
    </div>


    <div class="row">
        <?php
            if(isset($_SESSION['EDPOSAKAT_chat'])) {
        ?>
            <div class="chatbox chatbox22">
        <?php } else { ?>            
            <div class="chatbox chatbox22 chatbox--tray">
        <?php } ?>
    <div class="chatbox__title">
        <h5><a href="javascript:void()">Leave a message</a></h5>
        <!--<button class="chatbox__title__tray">
            <span></span>
        </button>-->
        <button class="chatbox__title__close">
            <span>
                <svg viewBox="0 0 12 12" width="12px" height="12px">
                    <line stroke="#FFFFFF" x1="11.75" y1="0.25" x2="0.25" y2="11.75"></line>
                    <line stroke="#FFFFFF" x1="11.75" y1="11.75" x2="0.25" y2="0.25"></line>
                </svg>
            </span>
        </button>
    </div>


    <div class="chatbox__body">
        <?php
            if(isset($_SESSION['EDPOSAKAT_chat'])) {
        ?>


        <div class="chatbox__body__message chatbox__body__message--left">        
            <div class="chatbox_timing">
                <ul>
                    <li><a href="#"><i class="fa fa-calendar"></i> 22/11/2018</a></li>
                    <li><a href="#"><i class="fa fa-clock-o"></i> 7:00 PM</a></a></li>
                </ul>
            </div>
            <img src="https://www.gstatic.com/webp/gallery/2.jpg" alt="Picture">
            <div class="clearfix"></div>
            <div class="ul_section_full">
                <ul class="ul_msg">
                    <li><strong>Person Name</strong></li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="ul_msg2">
                    <li><a href="#"><i class="fa fa-pencil"></i> </a></li>
                    <li><a href="#"><i class="fa fa-trash chat-trash"></i></a></li>
                </ul>
            </div>             
        </div>
        <div class="chatbox__body__message chatbox__body__message--right">        
            <div class="chatbox_timing">
                <ul>
                    <li><a href="#"><i class="fa fa-calendar"></i> 22/11/2018</a></li>
                    <li><a href="#"><i class="fa fa-clock-o"></i> 7:00 PM</a></a></li>
                </ul>
            </div>    
            <img src="https://www.gstatic.com/webp/gallery/2.jpg" alt="Picture">
            <div class="clearfix"></div>
            <div class="ul_section_full">
                <ul class="ul_msg">
                    <li><strong>Person Name</strong></li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="ul_msg2">
                    <li><a href="#"><i class="fa fa-pencil"></i> </a></li>
                    <li><a href="#"><i class="fa fa-trash chat-trash"></i></a></li>
                </ul>
            </div>            
        </div>             
    <?php } else { ?>

         
                <div class="register-box">
                    <div class="card">
                         <div class="card-body register-card-body">
                             <p class="login-box-msg">Chat</p>
                             <form action="<?=$actual_link?>" method="post">
                                 <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Full name">
          
                                 </div>
                                 <div class="input-group mb-3">
                                     <input type="email" class="form-control" placeholder="Email">
                                 </div>
                                 <div class="input-group mb-3">
                                     <input type="text" class="form-control" placeholder="Tel">
                                 </div>
                                 <div class="col-12 col-lg-6 col-md-12">
            <button type="submit" class="btn btn-primary btn-block">Chat</button>
          </div>
                             </form>

                         </div>

                    </div>                    
                </div>
                <div class="clearfix"></div>
            
            
    <?php } ?>

    </div>
    <div class="panel-footer">
        <?php
            if(isset($_SESSION['EDPOSAKAT_chat'])) {
        ?>
        <div class="input-group">
            <input id="btn-input" type="text" class="form-control input-sm chat_set_height" placeholder="Type your message here..." tabindex="0" dir="ltr" spellcheck="false" autocomplete="off" autocorrect="off" autocapitalize="off" contenteditable="true" />                       
            <span class="input-group-btn">
                <button class="btn bt_bg btn-sm" id="btn-chat">Send</button>
            </span>
        </div>
    <?php } ?>
    </div>
</div>
        
    </div>
     <!-- ##### Header Area Start ##### -->
    <?php if (file_exists("menu-header.php")) { include_once("menu-header.php"); } ?>
    <!-- ##### Header Area End ##### -->   
    <!-- ##### Welcome Area Start ##### -->
    <?php if (file_exists($vfilename)) include($vfilename); ?>
    <!-- ##### Pricing Area End ##### -->
    <!-- ##### Footer Area Start ##### -->
   <?php if (file_exists("footer.php")) { include_once("footer.php"); } ?>
    <!-- ##### Footer Area End ##### -->
    <!-- ########## All JS ########## -->
    <!-- jQuery js -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Parallax js -->    
    <script src="js/jquery.syotimer.min.js"></script>
    <!-- script js -->
    <script src="js/script.js"></script>

 

</body>
</html>
