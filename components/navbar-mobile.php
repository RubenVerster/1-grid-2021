<link rel="stylesheet" type="text/css" href="css/navbar-mobile.css" media="screen" />
<script src="/js/navbar-mobile.js"></script>
<!-- mobile sidenavbar -->
<div id="mySidenav" class="sidenav d-lg-none">
    <div class="d-flex justify-content-between p-3 border-bottom">
        <img width="100" height="42" src="<?php echo '/img/1-grid-logo.png' ?>" alt="1-grid logo">
        
        <i class="d-flex fas closebtn fa-times mr-3 align-self-center" onclick="closeNav()" id="mySidenavBtn" onclick="openNav()"></i>
    </a>
    </div>

    <div class="p-2 ">
        <div class="d-flex justify-items-center">
            <a href="https://1-grid.com/company-registration-south-africa/" class="nav-link">
                <i class="item-icon fas fa-briefcase"></i><span class="ms-2">Company Registration</span>
            </a>
        </div>
        <div class="d-flex justify-items-center">
            <a href="https://1-grid.com/vpn/" class="nav-link">
                <i class="item-icon fas fa-shield-alt"></i><span class="ms-2">VPN</span>
            </a>
        </div>
        <div class="d-flex justify-items-center">
            <a href="https://1-grid.com/email-for-business/" class="nav-link">
                <i class="item-icon fas fa-envelope "></i><span class="ms-2">Business Email</span>
            </a>
        </div>

        <div  onclick="openDomainNav()" class="d-flex justify-items-center nav-link">
            <i class="item-icon fas fa-globe "></i><span class="ms-2">Domains</span>
            <i class="ms-2 item-icon fas fa-angle-right sub-menu-link"></i>    
        </div>

            <!-- submenu for domains -->
            <div id="internalDomainsSidenav" class="sidenav" style="z-index: 999999">
                <div class="d-flex justify-content-between p-3 border-bottom">
                    <img width="100" height="42" src="<?php echo 'img/1-grid-logo.png' ?>" alt="1-grid logo">
                </div>

                <div class="p-2 ">
                    <div class="d-flex justify-items-center mb-3"  onclick="closeDomainsNav()">
                        <i class="d-flex fas closebtn fa-angle-left mr-3 align-self-center sub-menu-link" id="internalDomainsSidenavBtn"></i>
                        <span class="sub-menu-link ms-2">Back</span>
                    </div>
                    <div class="d-flex justify-items-center ms-3 mt-3">
                        <span><a href="https://1-grid.com/domain-name-registration-south-africa/">Register</a></span>
                    </div>
                    <div class="d-flex justify-items-center ms-3 mt-3">
                        <span><a href="https://1-grid.com/transfer-your-domain/">Transfer</a></span>
                    </div>
                    <div class="d-flex justify-items-center ms-3 mt-3">
                        <span><a href="https://1-grid.com/whois/">WHOIS</a></span>
                    </div>
                    <div class="d-flex justify-items-center ms-3 mt-3">
                        <span><a href="https://1-grid.com/switch-to-1-grid/">Migrations</a></span>
                    </div>
                </div>
            </div>

        <div  onclick="openWBNav()" class="d-flex justify-items-center nav-link">
            <i class="item-icon fas fa-hammer "></i><span class="ms-2">DIY Web
              Builder</span>
            <i class="ms-2 item-icon fas fa-angle-right sub-menu-link"></i>    
        </div>

        <!-- submenu for DIY WB -->
        <div id="internalWBSidenav" class="sidenav" style="z-index: 999999">
                <div class="d-flex justify-content-between p-3 border-bottom">
                    <img width="100" height="42" src="<?php echo 'img/1-grid-logo.png' ?>" alt="1-grid logo">
                </div>

                <div class="p-2 ">
                    <div class="d-flex justify-items-center mb-3"  onclick="closeWBNav()">
                        <i class="d-flex fas closebtn fa-angle-left mr-3 align-self-center sub-menu-link" id="internalDomainsSidenavBtn"></i>
                        <span class="sub-menu-link ms-2">Back</span>
                    </div>
                    <div class="d-flex justify-items-center ms-3 mt-3">
                        <span><a href="https://1-grid.com/website-builder/">Website Builder</a></span>
                    </div>
                    <div class="d-flex justify-items-center ms-3 mt-3">
                        <span><a href="https://1-grid.com/online-store-builder/">Medium Online Store</a></span>
                    </div>
                    <div class="d-flex justify-items-center ms-3 mt-3">
                        <span><a href="https://1-grid.com/website-builder-large/">Large Online Store</a></span>
                    </div>
                </div>
            </div>

        <div  onclick="openHostingNav()" class="d-flex justify-items-center nav-link">
            <i class="item-icon fas fa-laptop-house "></i><span class="ms-2">Web Hosting</span>
            <i class="ms-2 item-icon fas fa-angle-right sub-menu-link"></i>    
        </div>

            <!-- submenu Hosting -->
            <div id="internalHostingSidenav" class="sidenav" style="z-index: 999999">
                <div class="d-flex justify-content-between p-3 border-bottom">
                    <img width="100" height="42" src="<?php echo 'img/1-grid-logo.png' ?>" alt="1-grid logo">
                </div>

                <div class="p-2 ">
                    <div class="d-flex justify-items-center mb-3"  onclick="closeHostingNav()">
                        <i class="d-flex fas closebtn fa-angle-left mr-3 align-self-center sub-menu-link" id="internalDomainsSidenavBtn"></i>
                        <span class="sub-menu-link ms-2">Back</span>
                    </div>
                    <div class="d-flex justify-items-center ms-3 mt-3">
                        <span><a href="https://1-grid.com/web-hosting/">Shared Hosting</a></span>
                    </div>
                    <div class="d-flex justify-items-center ms-3 mt-3">
                        <span><a href="https://1-grid.com/dot-net-hosting/">.NET Hosting </a></span>
                    </div>
                    <div class="d-flex justify-items-center ms-3 mt-3">
                        <span><a href="https://1-grid.com/reseller-linux-hosting/">Reseller Linux Hosting</a></span>
                    </div>
                    <div class="d-flex justify-items-center ms-3 mt-3">
                        <span><a href="https://1-grid.com/reseller-windows-hosting/">Reseller Windows Hosting</a></span>
                    </div>
                    <div class="d-flex justify-items-center ms-3 mt-3">
                        <span><a href="https://1-grid.com/switch-to-1-grid/">Move to 1-grid</a></span>
                    </div>
                </div>
            </div>

        <div class="d-flex justify-items-center">
            <a href="https://1-grid.com/website-design/" class="nav-link">
                <i class="item-icon fas fa-palette "></i><span class="ms-2">Web Design</span>
            </a>
        </div>

        <div  onclick="openServerNav()" class="d-flex justify-items-center nav-link">
            <i class="item-icon fas fa-server "></i><span class="ms-2">Servers</span>
            <i class="ms-2 item-icon fas fa-angle-right sub-menu-link"></i>    
        </div>

            <!-- submenu Server -->
            <div id="internalServerSidenav" class="sidenav" style="z-index: 999999">
                <div class="d-flex justify-content-between p-3 border-bottom">
                    <img width="100" height="42" src="<?php echo 'img/1-grid-logo.png' ?>" alt="1-grid logo">
                </div>

                <div class="p-2 ">
                    <div class="d-flex justify-items-center mb-3"  onclick="closeServerNav()">
                        <i class="d-flex fas closebtn fa-angle-left mr-3 align-self-center sub-menu-link" id="internalDomainsSidenavBtn"></i>
                        <span class="sub-menu-link ms-2">Back</span>
                    </div>
                    <div class="d-flex justify-items-center ms-3 mt-3">
                        <span><a href="https://1-grid.com/enterprise-server-south-africa/">Enterprise Servers</a></span>
                    </div>
                    <div class="d-flex justify-items-center ms-3 mt-3">
                        <span><a href="https://1-grid.com/dedicated-servers-south-africa/">Dedicated Servers </a></span>
                    </div>
                    <div class="d-flex justify-items-center ms-3 mt-3">
                        <span><a href="https://1-grid.com/vps-hosting/">VPS hosting</a></span>
                    </div>
                    <div class="d-flex justify-items-center ms-3 mt-3">
                        <span><a href="https://1-grid.com/managed-vps-hosting/">VPS Hosting with cPanel</a></span>
                    </div>
                    <div class="d-flex justify-items-center ms-3 mt-3">
                        <span><a href="https://1-grid.com/server-backup/">Server Backup</a></span>
                    </div>
                    <div class="d-flex justify-items-center ms-3 mt-3">
                        <span><a href="https://1-grid.com/switch-to-1-grid/">Move to 1-grid</a></span>
                    </div>
                </div>
            </div>
        <div  onclick="openDiscoverNav()" class="d-flex justify-items-center nav-link">
            <i class="item-icon fas fa-map "></i><span class="ms-2">Discover</span>
            <i class="ms-2 item-icon fas fa-angle-right sub-menu-link"></i>    
        </div>

            <!-- submenu Discover -->
            <div id="internalDiscoverSidenav" class="sidenav" style="z-index: 999999">
                <div class="d-flex justify-content-between p-3 border-bottom">
                    <img width="100" height="42" src="<?php echo 'img/1-grid-logo.png' ?>" alt="1-grid logo">
                </div>

                <div class="p-2 ">
                    <div class="d-flex justify-items-center mb-3"  onclick="closeDiscoverNav()">
                        <i class="d-flex fas closebtn fa-angle-left mr-3 align-self-center sub-menu-link" id="internalDomainsSidenavBtn"></i>
                        <span class="sub-menu-link ms-2">Back</span>
                    </div>
                    <div class="d-flex justify-items-center ms-3 mt-3">
                        <span><a href="https://1-grid.com/blogs/">Blog</a></span>
                    </div>
                    <div class="d-flex justify-items-center ms-3 mt-3">
                        <span><a href="https://1-grid.com/newsroom/">News </a></span>
                    </div>
                  
                </div>
            </div>
    </div>
</div>

<nav class="d-lg-none top-header p-2 pt-4 w-100 d-flex justify-content-between align-items-center align-self-center">
    <div class="icon-group">
        <i class="fas fa-bars small-icon sidenav-btn mr-2" id="mySidenavBtn" onclick="openNav()"></i>
        <img width="80" id="mobile-logo" height="33" src="<?php echo '/img/1-grid-logo-white.png' ?>" alt="1-grid logo">
    </div>
    <div>
        <i class="fas fa-phone-alt small-icon"></i>
        <i class="fas fa-question-circle small-icon"></i>
        <i class="fas fa-shopping-cart small-icon"></i>
    </div>
</nav>