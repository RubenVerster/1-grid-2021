<link rel="stylesheet" type="text/css" href="css/navbar-mobile.css" media="screen" />
<!-- mobile sidenavbar -->
<div id="mySidenav" class="sidenav d-lg-none">
    <div class="d-flex justify-content-between p-3 border-bottom">
        <img width="100" height="42" src="<?php echo '/media/1-grid-logo.png' ?>" alt="1-grid logo">
        <i class="d-flex fas closebtn fa-times mr-3 align-self-center" onclick="closeNav()" id="mySidenavBtn" onclick="openNav()"></i>
    </a>
    </div>

    <div class="p-2 ">
        <div class="d-flex menu-item justify-items-center">
            <i class="item-icon fas fa-briefcase mr-3"></i>
            <div>Company Registration</div>
        </div>
        <div class="d-flex menu-item justify-items-center">
            <i class="item-icon fas fa-envelope mr-3"></i>
            <div>Business Email</div>
        </div>
        <div  onclick="openDomainNav()" class="d-flex menu-item justify-items-center">
            <i class="item-icon fas fa-globe mr-3"></i>
            <div>Domains</div>
            <i class="ml-auto mr-3 item-icon fas fa-angle-right sub-menu-link"></i>
        </div>
        
    </div>
</div>

<!-- submenu for domains -->
<div id="internalDomainsSidenav" class="sidenav" style="z-index: 999999">
    <div class="d-flex justify-content-between p-3 border-bottom">
        <img width="100" height="42" src="<?php echo '/media/1-grid-logo.png' ?>" alt="1-grid logo">
        
    </div>

    <div class="p-2 ">
        <div class="d-flex menu-item justify-items-center"  onclick="closeDomainsNav()">
            <i class="d-flex fas closebtn fa-angle-left mr-3 align-self-center sub-menu-link" id="internalDomainsSidenavBtn"></i>
            <span class="sub-menu-link">Back</span>
        </div>
        <div class="d-flex menu-item justify-items-center ml-4">
            <span>Register</span>
        </div>
        <div class="d-flex menu-item justify-items-center ml-4">
            <span>Transfer</span>
        </div>
        <div class="d-flex menu-item justify-items-center ml-4">
            <span>Whois</span>
        </div>
        <div class="d-flex menu-item justify-items-center ml-4">
            <span>Migrations</span>
        </div>
        
    </div>
</div>


<nav class="d-lg-none top-header p-2 pt-4 w-100 d-flex justify-content-between align-items-center align-self-center">
    <div class="icon-group">
        <i class="fas fa-bars small-icon sidenav-btn mr-2" id="mySidenavBtn" onclick="openNav()"></i>
        <img width="80" height="33" src="<?php echo '/media/1-grid-logo.png' ?>" alt="1-grid logo">
    </div>
    <div>
        <i class="fas fa-phone-alt small-icon"></i>
        <i class="fas fa-question-circle small-icon"></i>
        <i class="fas fa-shopping-cart small-icon"></i>
    </div>
</nav>


<div class="page-container">

  