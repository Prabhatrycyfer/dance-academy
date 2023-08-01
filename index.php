<?php include('assets/header.php'); ?>

<!--start-banner-->
<section class="bnr">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 p-0">
                <div class="banner">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1">01</button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                aria-label="Slide 2">02</button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                aria-label="Slide 3">03</button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/ind-bnr-1.png" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>Be in the </h3>
                                    <h1>dance class</h1>
                                    <div class="bnr-btns">
                                        <a href="services.php">
                                            <button type="submit" class="btn-os">
                                                Our Services
                                            </button>
                                        </a>
                                        <a href="contact.php">
                                            <button type="submit" class="btn-os">
                                                Contact Us
                                            </button>
                                        </a>
                                    </div>

                                </div>
                            </div>

                            <div class="carousel-item">
                                <img src="images/ind-bnr-2.png" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h1>Section 2</h1>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/ind-bnr-3.png" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h1>Section 3</h1>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end-banner-->

<!--   Appointment form -->
<section class="appo ">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <form action="#">
                    <label for="dance">Dance Class</label>
                    <select>
                        <option value="1">The Break Dance</option>
                        <option value="2">The Ballet Dance</option>
                        <option value="3">The Bhangra Dance</option>
                        <option value="4">The Contemprary Dance</option>
                    </select>
                </form>
            </div>
            <div class="col-lg-3 col-md-6">
                <form action="#">
                    <label for="name">Your Name</label>
                    <input type="text" class="form-control" placeholder="Your Name">
                </form>
            </div>
            <div class="col-lg-3 col-md-6">
                <form action="#">
                    <label for="name">Your Email</label>
                    <input type="email" class="form-control" placeholder="Your Email">
                </form>
            </div>
            <div class="col-lg-3 col-md-6">
                <button class="btn-btc bg-orange">Book This Class</button>
            </div>
        </div>
    </div>
</section>
<!--   Appointment form Ends-->

<!-- Images Section -->
<section class="img-sec p-90">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 p-0">
                <img src="./images/img-sec-1.jpg" class="img-fluid" alt="img-sec-1.png">
            </div>
            <div class="col-lg-4 p-0 c-img">
                <img src="./images/img-sec-2.png" class="img-fluid" alt="img-sec-2.png">
            </div>
            <div class="col-lg-4 p-0 l-img">
                <img src="./images/img-sec-3.png" class="img-fluid" alt="img-sec-3.png">
            </div>
        </div>
    </div>
</section>
<!-- Images Section Ends-->

<!-- Tabs Section -->
<section class="tabs-glry">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="hed-txt">
                    <label class="wlcm">Welcome to</label>
                    <h2 class="hading">OUR DANCE STUDIO</h2>
                </div>
                <div class="mt-3"></div>

                <div class="all-tabs">
                    <div class="tab">
                        <button class="tablinks" onclick="openTab(event, 'firstTab')" id="defaultOpen">
                            <label>20+ DIFFERENT</label>
                            <span>Dance Classes</span>
                        </button>
                        <button class="tablinks" onclick="openTab(event, 'secondTab')">
                            <label>FRIENDLY &</label>
                            <span>Talented instructors</span>
                        </button>
                        <button class="tablinks" onclick="openTab(event, 'thirdTab')">
                            <label>WIN WATCHES</label>
                            <span>Earn medals</span>
                        </button>
                        <button class="tablinks" onclick="openTab(event, 'forthTab')">
                            <label>EASY ONLINE</label>
                            <span>Booking</span>
                        </button>
                    </div>

                    <div id="firstTab" class="tabcontent">
                        <img class="img-fluid" src="images/tab-pic.jpg">
                    </div>

                    <div id="secondTab" class="tabcontent">
                        <img class="img-fluid" src="images/tab-2.jpg">
                    </div>

                    <div id="thirdTab" class="tabcontent">
                        <img class="img-fluid" src="images/tab-3.png">
                    </div>

                    <div id="forthTab" class="tabcontent">
                        <img class="img-fluid" src="images/tab-4.png">
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>
<!-- Tabs Section Ends-->

<!--start-sec-->
<section class="member-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="member-box">
                    <div class="dans">
                        <img src="images/das-1.svg" alt="das-1.svg">
                    </div>
                    <h4>Bhangra</h4>
                    <p>Facilis ipsum reprehenderit nemo
                        molestias. Aut cum mollitia repre
                        henderit.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="member-box">
                    <div class="dans">
                        <img src="images/das-2.svg" alt="das-2.svg">
                    </div>
                    <h4>Zumba</h4>
                    <p>Facilis ipsum reprehenderit nemo
                        molestias. Aut cum mollitia repre
                        henderit.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="member-box">
                    <div class="dans">
                        <img src="images/das-3.svg" alt="das-3.svg">
                    </div>
                    <h4>2331</h4>
                    <p>Facilis ipsum reprehenderit nemo
                        molestias. Aut cum mollitia repre
                        henderit.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="member-box">
                    <div class="dans">
                        <img src="images/das-4.svg" alt="das-4.svg">
                    </div>
                    <h4>1122</h4>
                    <p>Facilis ipsum reprehenderit nemo
                        molestias. Aut cum mollitia repre
                        henderit.</p>
                </div>
            </div>

        </div>
    </div>
</section>
<!--end-sec-->

<!--start-sec-->
<section class="class-sec p-90 pb-0">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="hed-txt">
                    <label class="wlcm">Dance classes for everyone</label>
                    <h2 class="hading">DANCE CLASSES</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div id="testimonial-slider" class="owl-carousel">
                    <div class="testimonial">
                        <div class="description">
                            <img class="img-fluid" src="images/clas-1.png">
                            <div class="over-txt">
                                <div class="inr-txt">
                                    <h4>Breakdance</h4>
                                    <p>Above 12</p>
                                </div>
                                <div class="eros">
                                    <img src="images/ero.png">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial">
                        <div class="description">
                            <img class="img-fluid" src="images/clas-2.png">
                            <div class="over-txt">
                                <div class="inr-txt">
                                    <h4>Breakdance</h4>
                                    <p>Above 12</p>
                                </div>
                                <div class="eros">
                                    <img src="images/ero.png">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial">
                        <div class="description">
                            <img class="img-fluid" src="images/clas-3.png">
                            <div class="over-txt">
                                <div class="inr-txt">
                                    <h4>Breakdance</h4>
                                    <p>Above 12</p>
                                </div>
                                <div class="eros">
                                    <img src="images/ero.png">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial">
                        <div class="description">
                            <img class="img-fluid" src="images/clas-4.png">
                            <div class="over-txt">
                                <div class="inr-txt">
                                    <h4>Breakdance</h4>
                                    <p>Above 12</p>
                                </div>
                                <div class="eros">
                                    <img src="images/ero.png">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial">
                        <div class="description">
                            <img class="img-fluid" src="images/clas-5.png">
                            <div class="over-txt">
                                <div class="inr-txt">
                                    <h4>Breakdance</h4>
                                    <p>Above 12</p>
                                </div>
                                <div class="eros">
                                    <img src="images/ero.png">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial">
                        <div class="description">
                            <img class="img-fluid" src="images/clas-6.png">
                            <div class="over-txt">
                                <div class="inr-txt">
                                    <h4>Breakdance</h4>
                                    <p>Above 12</p>
                                </div>
                                <div class="eros">
                                    <img src="images/ero.png">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial">
                        <div class="description">
                            <img class="img-fluid" src="images/clas-7.png">
                            <div class="over-txt">
                                <div class="inr-txt">
                                    <h4>Breakdance</h4>
                                    <p>Above 12</p>
                                </div>
                                <div class="eros">
                                    <img src="images/ero.png">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 
                        <div class="testimonial">
                            <div class="description">
                                <img class="img-fluid" src="images/clas-1.jpg">
                                <div class="over-txt">
                                    <div class="inr-txt">
                                        <h4>Breakdance</h4>
                                        <p>Above 12</p>
                                    </div>
                                    <div class="eros">
                                        <img src="images/ero.png">
                                    </div>
                                </div>
                            </div>
                        </div>
         
                        <div class="testimonial">
                            <div class="description">
                                <img class="img-fluid" src="images/clas-2.jpg">
                                <div class="over-txt">
                                    <div class="inr-txt">
                                        <h4>Breakdance</h4>
                                        <p>Above 12</p>
                                    </div>
                                    <div class="eros">
                                        <img src="images/ero.png">
                                    </div>
                                </div>
                            </div>
                        </div> -->

                </div>
            </div>
        </div>

    </div>
</section>
<!--end-sec-->

<!--start-sec-->
<section class="master-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="mst-pic">
                    <img class="img-fluid" src="images/master.jpg">
                </div>
            </div>
            <div class="col-md-7">
                <div class="mst-txt">
                    <div class="hed-txt">
                        <label class="wlcm">We make you want to dance...right now!</label>
                        <h2 class="hading">LEARN NUANCES FROM MASTERS</h2>
                    </div>

                    <p>Canvas metri essar. Incubator ramen viral product management drect mailing. such founders
                        gamification Effct. Branding funding incubator.
                        Release user experience beta. Backing monetization paradigm shift client</p>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mst-das">
                                <div class="mst-icon">
                                    <img src="images/mst-1.png">
                                </div>
                                <h3>Dance Masters</h3>
                                <p>Facilis ipsum reprehenderit nemo
                                    molestias. Aut cum mollitia repre henderit.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mst-das">
                                <div class="mst-icon">
                                    <img src="images/mst-2.png">
                                </div>
                                <h3>Skill Based Coaching</h3>
                                <p>Facilis ipsum reprehenderit nemo
                                    molestias. Aut cum mollitia repre henderit.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mst-das">
                                <div class="mst-icon">
                                    <img src="images/mst-3.png">
                                </div>
                                <h3>Music Lessons</h3>
                                <p>Facilis ipsum reprehenderit nemo
                                    molestias. Aut cum mollitia repre henderit.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mst-das">
                                <div class="mst-icon">
                                    <img src="images/mst-4.png">
                                </div>
                                <h3>Learn Karaoke</h3>
                                <p>Facilis ipsum reprehenderit nemo
                                    molestias. Aut cum mollitia repre henderit.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!--end-sec-->

<!-- Gallery Section -->
<section class="glry p-90">
    <div class="container">
        <div class="row">
            <div class="hed-txt">
                <h2 class="hading">Our Gallery</h2>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="glry-img">
                    <div class="inr-glry">
                        <img src="./images/glry-img-1.png" class="img-fluid" alt="glry-img-1.png">
                        <div class="glry-txt bg-gradient">
                            <span>gallery</span>
                            <span>+</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="glry-img">
                    <div class="inr-glry">
                        <img src="./images/glry-img-2.png" class="img-fluid" alt="glry-img-2.png">
                        <div class="glry-txt bg-gradient">
                            <span>gallery</span>
                            <span>+</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="glry-img">
                    <div class="inr-glry">
                        <img src="./images/glry-img-3.png" class="img-fluid" alt="glry-img-3.png">
                        <div class="glry-txt bg-gradient">
                            <span>gallery</span>
                            <span>+</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="glry-img">
                    <div class="inr-glry">
                        <img src="./images/glry-img-4.png" class="img-fluid" alt="glry-img-4.png">
                        <div class="glry-txt bg-gradient">
                            <span>gallery</span>
                            <span>+</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="glry-img">
                    <div class="inr-glry">
                        <img src="./images/glry-img-5.png" class="img-fluid" alt="glry-img-5.png">
                        <div class="glry-txt bg-gradient">
                            <span>gallery</span>
                            <span>+</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="glry-img">
                    <div class="inr-glry">
                        <img src="./images/glry-img-6.png" class="img-fluid" alt="glry-img-6.png">
                        <div class="glry-txt bg-gradient">
                            <span>gallery</span>
                            <span>+</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Gallery Section Ends-->

<!--start-sec-->
<section class="map-sec">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13722.89155957176!2d76.67737685!3d30.698071949999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1676029565153!5m2!1sen!2sin"
        width="100%" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<!--start-sec-->

<?php include('assets/footer.php'); ?>