<?php

$langID = $_SESSION['EDPOSV1AKAT_langID'];
if ($langID == "" || $langID == "0" || $langID == "1") { $langID = "1"; }

$mh_1001_t;
$mh_1001_l;
$mh_1002_t;
$mh_1002_l;
$mh_1003_t;
$mh_1003_l;
$mh_1004_t;
$mh_1004_l;
$mh_1005_t;
$mh_1005_l;
$mh_1006_t;
$mh_1006_l;
$mh_1007_t;
$mh_1007_l;
$mh_1008_t;
$mh_1008_l;
$mh_1009_t;
$mh_1009_l;
$mh_1010_t;
$mh_1010_l;
$mh_1011_l;

$qr_menu_header ="SELECT * FROM tb_menu WHERE status_id = 1 and langID = '$langID'";
 
if ($result = $mysqli->query($qr_menu_header)) {
    /* fetch object array */
    while ($row = $result->fetch_row()) {
        //printf ("%s (%s)\n", $row[0], $row[1]);
        if ( $row[1] == '1001') { $mh_1001_t = $row[3]; $mh_1001_l = $row[4];}
        if ( $row[1] == '1002') { $mh_1002_t = $row[3]; $mh_1002_l = $row[4];}
        if ( $row[1] == '1003') { $mh_1003_t = $row[3]; $mh_1003_l = $row[4];}
        if ( $row[1] == '1004') { $mh_1004_t = $row[3]; $mh_1004_l = $row[4];}
        if ( $row[1] == '1005') { $mh_1005_t = $row[3]; $mh_1005_l = $row[4];}
        if ( $row[1] == '1006') { $mh_1006_t = $row[3]; $mh_1006_l = $row[4];}
        if ( $row[1] == '1007') { $mh_1007_t = $row[3]; $mh_1007_l = $row[4];}
        if ( $row[1] == '1008') { $mh_1008_t = $row[3]; $mh_1008_l = $row[4];}
        if ( $row[1] == '1009') { $mh_1009_t = $row[3]; $mh_1009_l = $row[4];}
        if ( $row[1] == '1010') { $mh_1010_t = $row[3]; $mh_1010_l = $row[4];}
        if ( $row[1] == '1011') { $mh_1011_t = $row[3]; $mh_1011_l = $row[4];}
    }

    /* free result set */
    $result->close();
}

?>

<!-- ##### Header Area Start ##### -->
    <nav class="navbar navbar-expand-lg navbar-white fixed-top" id="banner">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand" href="index.php?d=<?=$mh_1001_l?>"><span><img src="img/core-img/logo.png" alt="logo"></span> </a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">                     
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?d=<?=$mh_1001_l?>"><?=$mh_1001_t?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?d=<?=$mh_1002_l?>"><?=$mh_1002_t?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?d=<?=$mh_1003_l?>"><?=$mh_1003_t?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?d=<?=$mh_1004_l?>"><?=$mh_1004_t?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?d=<?=$mh_1005_l?>"><?=$mh_1005_t?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?d=<?=$mh_1006_l?>"><?=$mh_1006_t?></a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="index.php?d=<?=$mh_1011_l?>"><?=$mh_1011_t?></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <?=$mh_1007_t?>
                            </a>
                            <!-- Dropdown menu -->
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" onclick="SelLang('1');"><img src="img/core-img/la-flag.png" height="30" alt="" loading="lazy" />&nbsp;<?=$mh_1008_t?></a>
                              <a class="dropdown-item" onclick="SelLang('2');"><img src="img/core-img/en-flag.png" height="30" alt="" loading="lazy" />&nbsp;<?=$mh_1009_t?></a>
                            </div>
                        </li>
                        <!-- <li class="lh-55px"><a href="javascript:void()" class="btn login-btn ml-50"><?=$mh_1010_t?></a></li> -->
                     
                </ul>
            </div>
        </div>
    </nav>
    <!-- ##### Header Area End ##### -->