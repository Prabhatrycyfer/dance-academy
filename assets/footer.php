<!--start-footer-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="logo-box">
                    <img src="images/logo.png">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </p>
                    <h4>FOLLOW ON</h4>
                    <ul>
                        <li><a href="#"><img src="images/insta.png"></a></li>
                        <li><a href="#"><img src="images/face.png"></a></li>
                        <li><a href="#"><img src="images/link.png"></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3">
                <div class="sec-box">
                    <h3>MENUS</h3>
                    <ul>
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">ABOUT US</a></li>
                        <li><a href="#">SERVICES</a></li>
                        <li><a href="#">CONTACT US</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3">
                <div class="trd-box">
                    <h3>GALLERY</h3>
                    <ul>
                        <li><a href="#"><img src="images/foot-img-1.png"></a></li>
                        <li><a href="#"><img src="images/foot-img-2.png"></a></li>
                        <li><a href="#"><img src="images/foot-img-3.png"></a></li>
                        <li><a href="#"><img src="images/foot-img-4.png"></a></li>
                        <li><a href="#"><img src="images/foot-img-5.png"></a></li>
                        <li><a href="#"><img src="images/foot-img-6.png"></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3">
                <div class="for-box">
                    <h3>NEWSLETTER SIGNUP</h3>
                    <form class="d-flex hf">
                        <input type="text" class="form-control" placeholder="Email-Address" required>
                        <button type="submit" class="btn-ae"><i class="fa fa-bell-o" aria-hidden="true"></i></button>
                    </form>
                    <p>Stay up to date with recent news, advice and weekly offers</p>
                </div>
            </div>

        </div>
        </divv>
</footer>
<!--end-footer-->


<div class="copyright">
    <div class="container">
        <p class="m-0">Copyright © 2022 All rights reserved. A+ Dance studio</p>
    </div>
</div>



<!-- Bootstrap JavaScript Libraries -->

<!-- <script src="js/bootstrap.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.3.js"></script>

<script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>


<script>
    $(document).ready(function () {
        $("#testimonial-slider").owlCarousel({
            items: 4,
            itemsDesktop: [1000, 3],
            itemsDesktopSmall: [979, 2],
            itemsTablet: [768, 1],
            pagination: true,
            autoPlay: true
        });
    });
</script>


<!-- Tabs JS -->
<script>
    function openTab(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    document.getElementById("defaultOpen").click();
</script>
<!-- Tabs JS Ends -->

<!-- testimonial jquery start-->

<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

<script>
    $(document).ready(function () {
        $("#testimonial-slider").owlCarousel({
            items: 3,
            itemsDesktop: [1024, 2],
            itemsDesktopSmall: [979, 2],
            itemsTablet: [768, 1],
            pagination: false,
            navigation: true,
            navigationText: ["", ""],
            autoPlay: true
        });
    });
</script>

<!-- testimonial jquery end-->

<!-- table tabs jquery start -->

<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->

<script>
    $(document).ready(function () {

        $('ul.tabs li').click(function () {
            var tab_id = $(this).attr('data-tab');

            $('ul.tabs li').removeClass('current');
            $('.tab-content').removeClass('current');

            $(this).addClass('current');
            $("#" + tab_id).addClass('current');
        })

    })
</script>

<!-- table tabs jquery end -->

<!-- table progress bar jquery start -->

<script>
    $(".animated-progress span").each(function () {
        $(this).animate({
            width: $(this).attr("data-progress") + "%",
        },
            1000
        );
        $(this).text($(this).attr("data-progress") + "%");
    });
</script>

<!-- table progress bar jquery end -->

<!-- video js start -->

<script>
    const video = document.getElementById("video");
    const circlePlayButton = document.getElementById("circle-play-b");

    function togglePlay() {
        if (video.paused || video.ended) {
            video.play();
        } else {
            video.pause();
        }
    }

    circlePlayButton.addEventListener("click", togglePlay);
    video.addEventListener("playing", function () {
        circlePlayButton.style.opacity = 0;
        video.setAttribute("controls", "true");
    });
    video.addEventListener("pause", function () {
        circlePlayButton.style.opacity = 1;
        video.removeAttribute("controls");
    });
</script>

<!-- video js end -->


<!-- service card js start -->

<script>
    $('.carousel .carousel-item').each(function () {
        var minPerSlide = 4;
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        for (var i = 0; i < minPerSlide; i++) {
            next = next.next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }

            next.children(':first-child').clone().appendTo($(this));
        }
    });
</script>

<!-- service card js end -->
</body>

</html>