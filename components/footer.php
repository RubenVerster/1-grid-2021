<link rel="stylesheet" type="text/css" href="css/footer.css" media="screen" />

<footer class="bg-dark text-light p-3 d-flex flex-column flex-lg-row justify-content-lg-center">
    <div class="col-lg-4">
        <div class="mb-5">
            <div class="text-uppercase font-weight-bold mb-2">
                Company
            </div>
            <div class="mt-2">
                <i class="fas fa-chevron-right mr-2 text-info"></i><span><a class="text-light" aria-label="about us"
                        href="/about-us/>About Us">About Us</a></span>
            </div>
            <div class="mt-2">
                <i class="fas fa-chevron-right mr-2 text-info"></i><span><a class="text-light" aria-label="FAQ"
                        href="/faq/">FAQ</a></span>
            </div>
            <div class="mt-2">
                <i class="fas fa-chevron-right mr-2 text-info"></i><span><a class="text-light" aria-label="testimonials"
                        href="/testimonials/">Testimonials</a></span>
            </div>
            <div class="mt-2">
                <i class="fas fa-chevron-right mr-2 text-info"></i><span><a class="text-light" aria-label="newsroom"
                        href="/newsroom/" target="_blank">Newsroom</a></span>
            </div>
            <div class="mt-2">
                <i class="fas fa-chevron-right mr-2 text-info"></i><span><a class="text-light" aria-label="blog"
                        href="https://1-grid.com/blogs/">Blog</a></span>
            </div>
            <div class="mt-2">
                <i class="fas fa-chevron-right mr-2 text-info"></i><span><a class="text-light"
                        href="/contact-us/">Contact</a></span>
            </div>
            <div class="mt-2">
                <i class="fas fa-chevron-right mr-2 text-info"></i><span><a class="text-light"
                        href="/affiliate-program/">Affiliate Program</a></span>
            </div>
        </div>
    </div>
    <div class="col-lg-4">

        <div class="mb-3">
            <div class="text-uppercase font-weight-bold mb-2">
                Support
            </div>
            <div>
                <i class="far fa-envelope mr-2 text-info"></i><span><a class="lnkSupportEmail text-light"
                        aria-label="support email"
                        href="mailto:support@1-grid.com">
                        support@1-grid.com</a></span>
            </div>
            <div>
                <i class="far fa-comment-alt mr-2 text-info"></i> <span><a data-role="open-live-chat-popup"
                        class="lnkLiveChatStandalone text-light" href="#">Live chat</a></span>
            </div>
        </div>

        <div class="mb-3">
            <div>Network Services and Monitoring</div>
            <div>24/7/365</div>
        </div>



        <div class="mb-3">
            <div class="text-uppercase font-weight-bold mb-2">
                Connect On Social Media
            </div>
            <a class="mr-3" rel="noopener noreferrer" aria-label="facebook link"
                href="https://www.facebook.com/1grid.co.za/" target="_blank"><i
                    class="fab fa-facebook text-info fa-2x"></i></a>
            <a class="mr-3" rel="noopener noreferrer" aria-label="twitter link" href="https://twitter.com/1grid_hosting"
                target="_blank"><i class="fab fa-twitter text-info fa-2x"></i></a>
            <a class="mr-3" rel="noopener noreferrer" aria-label="linkedin link"
                href="https://za.linkedin.com/company/1-grid" target="_blank"><i
                    class="fab fa-linkedin text-info fa-2x"></i></a>
            <a rel="noopener noreferrer" aria-label="instagram link" href="https://www.instagram.com/1grid_hosting/"
                target="_blank"></i><i class="fab fa-instagram text-info fa-2x"></i></a>
        </div>

        <div class="mb-3">
            <div class="text-uppercase font-weight-bold mb-2">
                Get The App
            </div>
            <a href="https://apps.apple.com/us/app/1-grid-com/id1512923545" class="mr-5"
                rel="noopener noreferrer nofollow" target="_blank">
                <i class="fab fa-google-play fa-2x text-info"></i>
            </a>
            <a href="https://play.google.com/store/apps/details?id=com.onegrid.hosting"
                rel="noopener noreferrer nofollow" target="_blank">
                <i class="fab fa-apple fa-2x text-info"></i>
            </a>
        </div>
    </div>


</footer>


</div>
<div class="border-top bg-dark p-3 d-flex justify-content-between">
    <img width="100" height="55"
        src="/img/1-grid-logo-white.png"
        alt="1-grid logo">
    <div class="text-right">
        <div class="text-light">Copyright 2021</div>
        <div class="text-grey">All rights reserved</div>

    </div>
</div>



<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "1-grid",
        "legalName": "1 grid (Pty) Ltd",
        "url": "https://1-grid.com/",
        "logo": "https://1-grid.com/media/1-grid-logo.png",
        "foundingDate": "2013",
        "founders": [{
            "@type": "Person",
            "name": "Thomas Vollrath"
        }],
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "360 Business Park, 8 Wessex Rd, Paarden Eiland",
            "addressLocality": "",
            "addressRegion": "Cape Town",
            "postalCode": "7925"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "contactType": "customer support",
            "email": "support@1-grid.com"
        },
        "sameAs": [
            "https://www.facebook.com/1grid.co.za/",
            "https://twitter.com/1grid_hosting",
            "https://za.linkedin.com/company/1-grid"
        ]
    }
</script>

<script>
    var loadDeferredStyles = function() {
            var a = document.getElementById("deferred-styles"),
                b = document.createElement("div");
            b.innerHTML = a.textContent;
            document.body.appendChild(b);
            a.parentElement.removeChild(a)
        },
        raf = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame ||
        window.msRequestAnimationFrame;
    raf ? raf(function() {
        window.setTimeout(loadDeferredStyles, 0)
    }) : window.addEventListener("load", loadDeferredStyles);
</script>

<!--Page specific JS-->
<?php if (isset($pageScriptIncludes)) {
    echo $pageScriptIncludes;
} ?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>