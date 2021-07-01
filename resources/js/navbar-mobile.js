function openNav() {
  document.getElementById('mySidenav').style.width = '300px'
  document.getElementById('mySidenav').style.maxWidth = '420px'
}

function closeNav() {
  document.getElementById('mySidenav').style.width = '0'
}
function openDomainNav() {
  document.getElementById('internalDomainsSidenav').style.width = '300px'
  document.getElementById('internalDomainsSidenav').style.maxWidth = '420px'
}

function closeDomainsNav() {
  document.getElementById('internalDomainsSidenav').style.width = '0'
}
function openWBNav() {
  document.getElementById('internalWBSidenav').style.width = '300px'
  document.getElementById('internalWBSidenav').style.maxWidth = '420px'
}

function closeWBNav() {
  document.getElementById('internalWBSidenav').style.width = '0'
}
function openHostingNav() {
  document.getElementById('internalHostingSidenav').style.width = '300px'
  document.getElementById('internalHostingSidenav').style.maxWidth = '420px'
}

function closeHostingNav() {
  document.getElementById('internalHostingSidenav').style.width = '0'
}
function openServerNav() {
  document.getElementById('internalServerSidenav').style.width = '300px'
  document.getElementById('internalServerSidenav').style.maxWidth = '420px'
}

function closeServerNav() {
  document.getElementById('internalServerSidenav').style.width = '0'
}
function openDiscoverNav() {
  document.getElementById('internalDiscoverSidenav').style.width = '300px'
  document.getElementById('internalDiscoverSidenav').style.maxWidth = '420px'
}

function closeDiscoverNav() {
  document.getElementById('internalDiscoverSidenav').style.width = '0'
}

//handles adding and removing classes when a user scrolls past the hero section
$(window).scroll(function () {
  if ($(this).scrollTop() > 250) {
    jQuery('.small-icon').addClass('text-secondary')
    jQuery('#mobile-logo').attr('src', 'img/1-grid-logo.png')
  } else {
    jQuery('.small-icon').removeClass('text-secondary')
    jQuery('#mobile-logo').attr('src', 'img/1-grid-logo-white.png')
  }
})
