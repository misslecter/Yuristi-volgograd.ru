<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->

<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter43428584 = new Ya.Metrika({ id:43428584, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/43428584" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->


<script src="js/bootstrap.min.js"></script>
<script src="js/inputs.js"></script>
<script src="js/form.js"></script>
<script src="js/navbar.js"></script>

<script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
<script src="//yastatic.net/share2/share.js"></script>

<!-- Hamburger to cross mobile menu -->
<script>
    $(document).ready(function(){
        $('#nav-icon').click(function(){
            $(this).toggleClass('open');
        });
    });
</script>

<!-- Hide mobile menu -->
<script>
    $(document).ready(function(){
        var link = $(".hide-menu");
        var menu = $("#mob-menu");
        var ham = $('#nav-icon');

        link.click(function(){
            menu.removeClass('in');
            ham.removeClass("open");
        });
    });
</script>

<script>
    $(document).ready(function () {
        var flag = true;
        var praktika = $('#o-kompanii');

        $(window).scroll(function () {
            var hT = praktika.offset().top,
                hH = praktika.outerHeight(),
                wH = $(window).height(),
                wS = $(this).scrollTop();

//            console.log(wS, (hT+hH-wH));

            if (wS > (hT+hH-wH)){
                if(flag){
                    $('.count').each(function () {
                        $(this).prop('Counter',0).animate({
                            Counter: $(this).text()
                        }, {
                            duration: 4000,
                            easing: 'swing',
                            step: function (now) {
                                $(this).text(Math.ceil(now));
                            }
                        });
                    });
                    $(".practice-item").each(function () {
                        $(this).css("opacity", 1)
                    });
                    flag = false;
                }
//                $(".item-1").fadeIn( 1000, function() {
//                    $( ".item-2" ).fadeIn( 1000, function() {
//                        $( ".item-3" ).fadeIn(1000);
//                    });
//                });
            }
        });

    });
</script>

<!-- Gallery -->
<script src="js/ekko-lightbox.js"></script>
<script type="text/javascript">
    $(document).ready(function ($) {

        // delegate calls to data-toggle="lightbox"
        $(document).delegate('*[data-toggle="lightbox"]:not([data-gallery="navigateTo"])', 'click', function(event) {
            event.preventDefault();
            return $(this).ekkoLightbox({
                onShown: function() {
                    if (window.console) {
                        return console.log('onShown event fired');
                    }
                },
                onContentLoaded: function() {
                    if (window.console) {
                        return console.log('onContentLoaded event fired');
                    }
                },
                onNavigate: function(direction, itemIndex) {
                    if (window.console) {
                        return console.log('Navigating '+direction+'. Current item: '+itemIndex);
                    }
                }
            });
        });

        //Programatically call
        $('#open-image').click(function (e) {
            e.preventDefault();
            $(this).ekkoLightbox();
        });

        $(document).delegate('*[data-gallery="navigateTo"]', 'click', function(event) {
            event.preventDefault();
            return $(this).ekkoLightbox({
                onShown: function() {
                    var lb = this;
                    $(lb.modal_content).on('click', '.modal-footer a#jumpit', function(e) {
                        e.preventDefault();
                        lb.navigateTo(2);
                    });
                    $(lb.modal_content).on('click', '.modal-footer a#closeit', function(e) {
                        e.preventDefault();
                        lb.close();
                    });
                }
            });
        });

    });
</script>

<!-- Smooth scroll -->
<script>
    jQuery(document).ready(function ($) {
        var navbar = $(".menu").height();
        $('a.scroll').on('click', function (e) {
            var href = $(this).attr('href');
            $('html, body').animate({
                scrollTop: $(href).offset().top - navbar + 1
            }, 'slow');
            e.preventDefault();
        });
    });
</script>

<!--Google Maps-->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDS2q3hycq7KiQaqIt2l5wPBdRebISAh_M&callback=myMap"
        type="text/javascript"></script>
<!--<script src="https://maps.googleapis.com/maps/api/js?callback=myMap?key=AIzaSyDS2q3hycq7KiQaqIt2l5wPBdRebISAh_M"></script>-->
<script>
    // Google Map

    function myMap() {
        var mapCanvas = document.getElementById("map");
        var myCenter = new google.maps.LatLng(48.709052, 44.525817);
        var mapOptions = {center: myCenter, zoom: 17, scrollwheel: false};
        var map = new google.maps.Map(mapCanvas,mapOptions);
        var marker = new google.maps.Marker({
            position: myCenter,
            animation: google.maps.Animation.BOUNCE
        });
        marker.setMap(map);
    }
</script>