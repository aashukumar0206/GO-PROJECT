<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> goin.com </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anek+Latin:wght@100&family=Blaka+Hollow&family=Dancing+Script&family=Lobster&family=PT+Serif&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>

    <!-- ============ header section is here PLEASE FOCUS ============ -->

    <header class="class-header">
        <nav>
            <ul class="display-flex">
                <div class="mini-header display-flex" id="mini">
                    <li class="list list1" onclick="menufunction()"><img src="image/menu.png" alt=""> </li>
                    <li class="list"> GO </li>
                </div>
                <div class="mini-header display-flex">
                    <li class="list" id="mini2"> <i class="bi bi-search"></i> <input type="search" value="search"> </li>
                    <li class="list" id="mini3"> <a href="login.php"> <i class="bi bi-person-circle"></i> </a> </li>
                </div>
            </ul>
        </nav>
    </header>


    <!-- ====================HOME SECTION IS HERE PLEASE FOCUS ============== -->

   <div class="accordionfirst">
    <div class="accordion accordion-flush " id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    <h6 >
                        MOBILE
                    </h6>
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body" class="lock"> <a href="login.php"  onclick="register()"> <code>Discover</code> <br> </a></div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    <h6 >
                        BUSINESS
                    </h6>   
                             </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body" class="lock"> <a href="login.php"> <code>Discover</code> <br> <code>quality</code> <br> <code>services</code> <br> <code>qurries</code> <br> <code>goto</code></a></div>
            </div>
        </div>
    </div>

   </div>
    <section class="class-sectiion">
        <div class="class-home">
            <img src="image/child.jpg" alt="">
            <div class="home">
                <h1>The best thing in life are Free</h1>
                <h4>Hight speed connectivity, digital delights and many priceless moments.</h4>
                <button class="buttonfirst">GOTOFIBRE</button>
                <button id="btn">Let's celebrate <i class="bi bi-play-circle-fill"></i> </button>
            </div>
        </div>
    </section>

    <!-- ==================  spotlight sectioin is here please focus ============= -->

    <section class="icons ">
        <ul>
            <li> <i class="bi bi-bootstrap-reboot"></i> <span>GOTOFIBRE</span> </li>
            <li> <i class="bi bi-currency-rupee"></i> <span>GOTOFIBRE </span></li>
            <li> <i class="bi bi-sim"></i> <span>GOTOFIBRE </span></li>
            <li><i class="bi bi-sim"></i> <span>GOTOFIBRE</span></li>
            <li> <i class="bi bi-wifi"></i> <span>GOTOFIBRE</span></li>
            <li> <i class="bi bi-question-circle-fill"></i> <span>Support</span> </li>
        </ul>
        <div class="text">
            <h1>In the spotlight</h1>
            <h5>The best deals new lauches, and top selling products right now.</h5>
        </div>
    </section>

    <div class="spotlight video-text">

        <!-- <video >
            </video> -->
        <img src="image/charlesdeluvio-jtmwD4i4v1U-unsplash.jpg" alt="" id="video">
        <div class="">
            <h1> say always " NAMASTEY " india's favourite selfie phone is here</h1>
            <h5><i class="bi bi-currency-rupee"></i> $4499. </h5>
            <button class="buttonfirst">Explore Now</button>
        </div>


    </div>

    <div class="mart">

        <div class="boxes">
            <div class="mini-box">
                <img src="image/logos.jpg" alt=""><br>
                <div class="fonts">
                    <button id="firstbtn">goto</button>
                    <h3>Buy groceries on the go </h3>
                    <h4> Lowest prices, free home delivery.</h4>
                    <button id="secondbtn"> Shop gotomart</button>

                </div>
            </div>
        </div>

        <div class="boxes">
            <div class="mini-box">
                <img src="image/annie-spratt-V705bwrTnQI-unsplash.jpg" alt=""><br>
                <div class="fonts">
                    <button id="firstbtn">goto</button>
                    <h3>Buy groceries on the go </h3>
                    <h4> Lowest prices, free home delivery.</h4>
                    <button id="secondbtn"> Lorem ipsumt.</button>

                </div>
            </div>
        </div>


        <div class="boxes">
            <div class="mini-box">
                <img src="image/louis-hansel-qoPAjwEiUmg-unsplash.jpg" alt=""><br>
                <div class="fonts">
                    <button id="firstbtn">goto mart</button>
                    <h3>Buy groceries on the go </h3>
                    <h4> Lowest prices, free home delivery.</h4>
                    <button id="secondbtn"> shoppinon new things</button>

                </div>
            </div>
        </div>

    </div>

    <div class="enrich discovery delights">
        <h1 class="">Enrich your digital life</h1>
        <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo commodi ut animi.</h4>
    </div>

    <section class="class-sectiion thundrer">
        <div class="architecture">


            <div class="class-home">
                <img src="image/annie-spratt-V705bwrTnQI-unsplash.jpg" alt="">
                <div class="home">
                    <button id="btn">fashion starts now</button>
                    <h1>Be on on top of your style</h1>
                    <h1>game with all things trendy</h1>
                    <button class="buttonfirst">Fashion now</button>
                </div>
            </div>
        </div>
    </section>

    <!--================ slidebar------------------------ -->
    <div class="bars">
        <div class="slidebar  bars2">

            <div class="heading  ">
                <h2>goto</h2>
                <p>Lorem, ipsum dolor sit amet , ipsum dolor sit amet</p>
                <button>Learn more</button>

            </div>

            <div class="heading  ">
            <img src="image/annie-spratt-V705bwrTnQI-unsplash.jpg" alt="">
            </div>
        </div>

        <div class="slidebar" bars2>

            <div class="heading">
                <h2>goto</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.Lorem, ipsum dolor sit amet</p>
                <button>Learn more</button>

            </div>

            <div class="heading">
            <img src="image/annie-spratt-V705bwrTnQI-unsplash.jpg" alt="">
            </div>
        </div>

        <div class="slidebar bars2">

            <div class="heading">
                <h2>goto</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.Lorem, ipsum dolor sit amet</p>
                <button>Learn more</button>

            </div>

            <div class="heading">
            <img src="image/annie-spratt-V705bwrTnQI-unsplash.jpg" alt="">
            </div>
        </div>

    </div>


    <!-- ===================discover================== -->

    <div class="discovery">
        <div class="discover">

            <h1>Discover new possibilites</h1>
            <h4>Planning a digital transformation for home, business, or personal experiences? You're just a step away.
            </h4>

        </div>
        <div class="new">
            <div class="stores">
                <h2><i class="bi bi-phone-fill"></i></h2>
                <h1>Mobile</h1>
                <h5>Free SIM, calls, and SMS with invalueable digital experiences.</h5>
                <button class="buttonfirst">Find out more</button>
            </div>

            <div class="stores">
                <h2><i class="bi bi-router-fill"></i></h2>

                <h1>goto</h1>
                <h5>Free SIM, calls, and SMS with invalueable digital experiences.</h5>
                <button class="buttonfirst">Find out more</button>
            </div>

            <div class="stores">
                <h2><i class="bi bi-bag-fill"></i></h2>
                <h1>business</h1>
                <h5>Free SIM, calls, and SMS with invalueable digital experiences.</h5>
                <button class="buttonfirst">Find out more</button>
            </div>
        </div>

    </div>

    <div class="discovery discover">

        <h1>Latest and trending divices </h1>
        <h4>Get the best deals on all the latest features and newthings . </h4>

    </div>

    <div class="new">
        <div class="accessories discover">
            <div class="new">

                <div class="stores">
                    <img src="image/mobile.jpg" alt="">
                    <h3> goto Next </h3>
                    <h5>At <i class="bi bi-currency-rupee"></i>4,499</h5>
                </div>

                <div class="stores">
                    <img src="image/watch.jpg" alt="">
                    <h3> goto Next </h3>
                    <h5>At <i class="bi bi-currency-rupee"></i>4,499</h5>
                </div>

                <div class="stores">
                    <img src="image/folder.jpg" alt="">
                    <h3> goto Next </h3>
                    <h5>At <i class="bi bi-currency-rupee"></i>4,499</h5>
                </div>
            </div>
        </div>

    </div>

    <section class="class-sectiion thundrer discovery5">
        <div class="architecture">

            <div class="class-home">
                <img src="image/shea-rouda-iBNvGauiRbo-unsplash.jpg" alt="">
                <div class="home">
                    <h1>supercharge your Business with us and grow more </h1>
                    <h4>End-to-end digital solutions to streamline porcesses and accelerate growth your career and opportunities.</h4>
                    <button id="btn">Explore GoBusiness</button>
                </div>
            </div>
        </div>
    </section>

    <div class="discovery">
        <div class="discover">
            <h1>Making a difference</h1>
            <h4>Here is a handful of the many success stories. </h4>
        </div>
        <div class="discovery2">
            <div class="kedar">
                <div class="kedar2">
                    <img src="image/peaceful.jpg" alt="">
                    <h4>Full on entertainment </h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit voluptatem cupiditate reiciendis, blanditiis quo magnam omnis ea inventore. Laborum illum nostrum nam nesciunt quis dolor.p>
                    <h3>find out more</h3>
                </div>
            </div>

            <div class="kedar">
                <div class="kedar2">
                    <img src="image/duck-img.jpg" alt="">
                    <h4>Journy of life </h4>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita delectus eaque, a quia facere unde exercitationem adipisci fugiat natus tempore vel dolore sint et deserunt? Unde deleniti ipsa illum quibusdam.</p>
                    <h3>find out more</h3>
                </div>
            </div>

            <div class="kedar">
                <div class="kedar2">
                    <img src="image/child.jpg" alt="">
                    <h4>LIVE darshan: all temples</h4>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus ipsam omnis soluta, quas dolores labore amet nam! Eos, consequuntur! Doloribus a magni vero et ex!</p>
                    <h3>find out more</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- ======================create your own opportunities====================== -->


    <div class="create discovery discover">
        <div class="covery">
            <div class="chance">
                <h1>Creae your own methods with us</h1>
                <h5> you can join in this our mission to digitally trnaform india.</h5>
                <button id="btn">openings</button>
            </div>
            <div class="image">
                <img src="image/annie-spratt-V705bwrTnQI-unsplash.jpg" alt="">
            </div>
        </div>

    </div>

    <!-- ==============one app for everything================= -->

    <div class="app discover discovery">
        <div class="oneapp">
            <ul>
            <img src="image/child.jpg" alt="">
                <li>
                    <h1> Go </h1>
                </li>
            </ul>
            <h1>One app for everthing is this Go  </h1>
            <h3>A Globalfor app packed with all th Go services</h3>
            <button class="firstbutton">Get Now</button>
        </div>

        <section class="class-guide" id="guide">
            <div class="social">
                <div class="class-need1">
                    <h1>Need guidance?</h1>
                    <h2>We'd love to help you. </h2>
                </div>

                <div class="class-need">
                    <button class="class-btn1"><i class="bi bi-chat-text"></i> &nbsp;Support</button>
                    <button class="class-btn2"><i class="bi bi-chat-dots"></i>&nbsp; Chat with us</button>
                    <button class="class-btn3"> <i class="bi bi-telephone-plus"></i> &nbsp;Call us</button>
                    <button class="class-btn4"> <i class="bi bi-shop"></i> &nbsp; Find a store</button>
                    <button class="class-btn5"> <i class="bi bi-share"></i> &nbsp;share us</button>
                </div>
            </div>
        </section>


    </div>

    <div class=" discovery3 ">

        <div class="accordion accordion-flush " id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Our Offerings
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate
                        the class. This is the first item's accordion body.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        support
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate
                        the class. This is the second item's accordion body. Let's imagine
                        this being filled with some actual content.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Our Company
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate
                        the class. This is the third item's accordion body. Nothing more
                        exciting happening here in terms of content, but just filling up the space to make it look, at
                        least at first glance, a bit more representative of how this would look in a real-world
                        application.</div>
                </div>
            </div>

          
        </div>

    </div>


    <section class="contact ">
        <footer class="footer-section">
            <div class="footer">
                <h2>Connect with us</h2>
                <ul>
                    <li> <i class="bi bi-facebook"></i></li>
                    <li> <i class="bi bi-instagram"></i></li>
                    <li> <i class="bi bi-twitter"></i></li>
                    <li> <i class="bi bi-linkedin"></i></li>
                    <li> <i class="bi bi-youtube"></i></li>

                </ul>
            </div>
            <div class="footer footer2">
                <h2>Download Go </h2>
                <p> <span><i class="bi bi-google-play"></i>&nbsp;&nbsp; Google Play Store</span>&nbsp;&nbsp;  <span><i
                            class="bi bi-google-play"></i>&nbsp;&nbsp; App store</span></p>
                <hr>
            </div>

            <div class="footer">
            <img src="image/child.jpg" alt="">
                <p> copy <i class="bi bi-c-circle"></i>GO has All rights reserved. </p>
                <p> Press release | Regularitory |Policie |Term & conditions </p>
            </div>
        </footer>

    </section>
<script src="javascript.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
</body>

</html>