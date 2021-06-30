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
