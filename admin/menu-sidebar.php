<?php 
  $mn_dashboard="";
  $mn_Mmain="";
  $mn_Mmain1="";
  $mn_Mfearutes="";
  $mn_Mservice="";
  $mn_Mabout="";
  $mn_Mfaq="";
  $mn_Mprice="";
  $mn_Mteam="";
  $mn_Mpartner="";
  $mn_Mclient="";
  $mn_Pmain="";
  $mn_Pmain1="";
  $mn_Pindex="";
  $mn_Pabout="";
  $mn_Pservice="";
  $mn_Pfaq="";
  $mn_Pprice="";
  $mn_Pcontact="";
  $mn_Pdownload="";
  $mn_Fmain="";
  $mn_Fmain1="";
  $mn_Finfo="";
  $mn_Ftitle1="";
  $mn_Ftitle2="";
  $mn_Fcontact="";
  $mn_Rsubscribe="";
  $mn_Rprice="";
  $mn_Rdownload="";
  $mn_Rchat="";

  if ($_GET['d'] =='index') {
    $mn_dashboard="active";
  } else if ($_GET['d'] =='module/features') {
    $mn_Mmain="menu-open";
    $mn_Mmain1="active";
    $mn_Mfearutes="active";
  } else if ($_GET['d'] =='module/service' || $_GET['d'] =='module/service_detail') {
    $mn_Mmain="menu-open";
    $mn_Mmain1="active";
    $mn_Mservice="active";
  } else if ($_GET['d'] =='module/about') {
    $mn_Mmain="menu-open";
    $mn_Mmain1="active";
    $mn_Mabout="active";
  } else if ($_GET['d'] =='module/faq') {
    $mn_Mmain="menu-open";
    $mn_Mmain1="active";
    $mn_Mfaq="active";
  } else if ($_GET['d'] =='module/pricing-plans') {
    $mn_Mmain="menu-open";
    $mn_Mmain1="active";
    $mn_Mprice="active";
  } else if ($_GET['d'] =='module/team_member') {
    $mn_Mmain="menu-open";
    $mn_Mmain1="active";
    $mn_Mteam="active";
  } else if ($_GET['d'] =='module/partner') {
    $mn_Mmain="menu-open";
    $mn_Mmain1="active";
    $mn_Mpartner="active";
  } else if ($_GET['d'] =='module/clients') {
    $mn_Mmain="menu-open";
    $mn_Mmain1="active";
    $mn_Mclient="active";
  } else if ($_GET['d'] =='pages/index') {
    $mn_Pmain="menu-open";
    $mn_Pmain1="active";
    $mn_Pindex="active";
  } else if ($_GET['d'] =='pages/about') {
    $mn_Pmain="menu-open";
    $mn_Pmain1="active";
    $mn_Pabout="active";
  } else if ($_GET['d'] =='pages/service') {
    $mn_Pmain="menu-open";
    $mn_Pmain1="active";
    $mn_Pservice="active";
  } else if ($_GET['d'] =='pages/faq') {
    $mn_Pmain="menu-open";
    $mn_Pmain1="active";
    $mn_Pfaq="active";
  } else if ($_GET['d'] =='pages/price-plan') {
    $mn_Pmain="menu-open";
    $mn_Pmain1="active";
    $mn_Pprice="active";
  } else if ($_GET['d'] =='pages/contact') {
    $mn_Pmain="menu-open";
    $mn_Pmain1="active";
    $mn_Pcontact="active";
  } else if ($_GET['d'] =='pages/download') {
    $mn_Pmain="menu-open";
    $mn_Pmain1="active";
    $mn_Pdownload="active";
  } else if ($_GET['d'] =='footer/info') {
    $mn_Fmain="menu-open";
    $mn_Fmain1="active";
    $mn_Finfo="active";
  } else if ($_GET['d'] =='footer/title1') {
    $mn_Fmain="menu-open";
    $mn_Fmain1="active";
    $mn_Ftitle1="active";
  } else if ($_GET['d'] =='footer/title2') {
    $mn_Fmain="menu-open";
    $mn_Fmain1="active";
    $mn_Ftitle2="active";
  } else if ($_GET['d'] =='footer/contact') {
    $mn_Fmain="menu-open";
    $mn_Fmain1="active";
    $mn_Fcontact="active";
  } else if ($_GET['d'] =='report/subscribe') {
    $mn_Rsubscribe="active";
  } else if ($_GET['d'] =='report/price-view') {
    $mn_Rprice="active";
  } else if ($_GET['d'] =='report/download') {
    $mn_Rdownload="active";
  } else if ($_GET['d'] =='chat/history') {   
    $mn_Rchat="active";
  } 
?>
<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AKAT Admin Page</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?=""?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
 
          <li class="nav-item">
            <a href="index.php?d=index" class="nav-link <?=$mn_dashboard?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard               
              </p>
            </a>
          </li>  
          <li class="nav-item has-treeview <?=$mn_Mmain?>">
            <a href="#" class="nav-link <?=$mn_Mmain1?>">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Module
                <i class="fas fa-angle-left right"></i>                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?d=module/features" class="nav-link <?=$mn_Mfearutes?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ໜ້າຫຼັກ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?d=module/service" class="nav-link <?=$mn_Mservice?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ບໍລິການ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?d=module/about" class="nav-link <?=$mn_Mabout?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ກ່ຽວກັບພວກເຮົາ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?d=module/faq" class="nav-link <?=$mn_Mfaq?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ຖາມ-ຕອບ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?d=module/pricing-plans" class="nav-link <?=$mn_Mprice?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ລາຄາສິນຄ້າ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?d=module/team_member" class="nav-link <?=$mn_Mteam?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Team Member</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?d=module/partner" class="nav-link <?=$mn_Mpartner?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Partners</p>
                </a>
              </li>               
            </ul>
          </li>
 
          <!-- <li class="nav-item has-treeview <?=$mn_Pmain?>">
            <a href="#" class="nav-link <?=$mn_Pmain1?>">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?d=pages/index" class="nav-link <?=$mn_Pindex ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ໜ້າຫຼັກ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?d=pages/about" class="nav-link <?=$mn_Pabout ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ກ່ຽວກັບພວກເຮົາ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?d=pages/service" class="nav-link <?=$mn_Pservice ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ບໍລິການ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?d=pages/faq" class="nav-link <?=$mn_Pfaq ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ຖາມ-ຕອບ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?d=pages/price-plan" class="nav-link <?=$mn_Pprice ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ລາຄາສິນຄ້າ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?d=pages/contact" class="nav-link <?=$mn_Pcontact ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ຕິດຕໍ່ພວກເຮົາ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?d=pages/download" class="nav-link <?=$mn_Pdownload ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ດາວໂຫຼດ</p>
                </a>
              </li>
            </ul>
          </li> -->


         <!--  <li class="nav-item has-treeview <?=$mn_Fmain ?>">
            <a href="#" class="nav-link <?=$mn_Fmain1 ?>">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Footer
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?d=footer/info" class="nav-link <?=$mn_Finfo ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Footer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?d=footer/title1" class="nav-link <?=$mn_Ftitle1 ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Title 1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?d=footer/title2" class="nav-link <?=$mn_Ftitle2 ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Title 2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?d=footer/contact" class="nav-link <?=$mn_Fcontact ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact info</p>
                </a>
              </li>
            </ul>
          </li>
                          
          <li class="nav-header">Report</li>
          <li class="nav-item">
            <a href="index.php?d=report/subscribe" class="nav-link <?=$mn_Rsubscribe ?>">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Subscribe list
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?d=report/price-view" class="nav-link <?=$mn_Rprice ?>">
              <i class="nav-icon far fa-image"></i>
              <p>
                Pricing View
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?d=report/download" class="nav-link <?=$mn_Rdownload ?>">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Download               
              </p>
            </a>                         
          </li>
          <li class="nav-item">       
             <a href="index.php?d=chat/history" class="nav-link <?=$mn_Rchat ?>">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Chat history               
              </p>
            </a>            
          </li>      -->    
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>