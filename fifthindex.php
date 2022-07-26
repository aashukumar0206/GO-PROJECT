<?php
session_start();


if(isset($_SESSION['USERNAME'])) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fifthpr</title>
    <link rel="stylesheet" href="fifthstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>

<body>

    <!-- ============ header section is here PLEASE FOCUS ============ -->

    <header class="class-header">
        <div class="class-head">
            <p class="p1"><i class="bi bi-clock"></i> Mon - Fri</p>
            <p class="p1"><i class="bi bi-telephone"></i> 090-080-0000</p>
        </div>

        <div class="class-head">
            <ul class="class-ul">
                <li class="class-list" id="id-list1"><i class="bi bi-meta"></i></li>
                <li class="class-list" id="id-list2"><i class="bi bi-linkedin"></i></li>
                <li class="class-list" id="id-list3"><i class="bi bi-twitter"></i></li>
                <li class="class-list" id="id-list4"><i class="bi bi-envelope-fill"></i></li>
            </ul>
        </div>
    </header>

    <!-- ==================== NAVBAR SECTION IS HERE PLEASE FOCUS ============== -->

    <nav class="class-navbar">
        <div class="nav list-nav">
            <h4 class="class-h4"><span> <span> <?php echo  $_SESSION['USERNAME'] ?></span></h4>
        </div>

        <div class="nav">
            <ul class="class-nav" id="nav">
                <li class="class-list hill " id="id-list1"><a href="#financialBusiness">HOME</a> </li>
                <li class="class-list hill" id="id-list2"><a href="#footer">ABOUT</a> </li>
                <li class="class-list hill" id="id-list3"><a href="#guide">SERVICES</a> </li>
                <li class="class-list hill" id="id-list4"><a href="#contactus">CONTACT</a> </li>
            </ul>
        </div>
        <div class="burger">
            <div class="burger-menu"></div>
            <div class="burger-menu"></div>
            <div class="burger-menu"></div>
        </div>

    <!-- ==================== HOME SECTION IS HERE PLEASE FOCUS ============== -->

    <section class="class-home" id="financialBusiness">
            <div class="class-financial">
                <h3>FINANCIAL <span> BUSINESS!</span> </h3>
                <H2> FINANCIAL ANALYSIS AND CONSULTIG</H2>
                <P>Lorem ipsum, dolor sit amet consectetur adipisicing elit. In voluptate expedita vero est quasi
                    ducimus Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam sapiente beatae ex? </P>
                <div class="button">
                    <button class="class-btn" id="id-btn4">CONTACT</button>
                    <button class="class-btn" id="id-btn3"> <a href="logout.php"> LOG OUT </a> </button>
                </div>
            </div>
        </section>
    </nav>

    <section class="class-sec">
        <div class="div-sec">
            <h3>You can call for any time and any where! Don't be loose more time call us right now?</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, ex!</p>
        </div>
        <div class="div-sec">
            <button class="class-btn" id="id-btn4">CONTACT US</button>
        </div>
    </section>

        <!-- ==================== IMAGES SECTION IS HERE PLEASE FOCUS ============== -->


    <section class="class-img">
        <div class="class-heading">
            <h2>Financial <SPAN> Business!</SPAN></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et mollitia perspiciatis inventore aperiam
                explicabo impedit.</p>
        </div>


        <div class="section-images">
            <div class="images">
                <img src="image/office123.jpg" alt="">
                <h5>Services</h5>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi est exercitationem, harum
                    perspiciatis
                    tenetur deserunt!</P>
                <button class="class-btn" id="id-btn4">CONTACT US</button>
            </div>
            <div class="images">
                <img src="image/office9.jpg" alt="">
                <h5>About us</h5>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi est exercitationem, harum
                    perspiciatis
                    tenetur deserunt!</P>
                <button class="class-btn" id="id-btn4">CONTACT US</button>

            </div>

            <div class="images">
                <img src="image/office6.jpg" alt="">
                <h5>Social Media</h5>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi est exercitationem, harum
                    perspiciatis
                    tenetur deserunt!</P>
                <button class="class-btn" id="id-btn4">CONTACT US</button>

            </div>

        </div>

    </section>

        <!-- ==================== CONTACT SECTION IS HERE PLEASE FOCUS ============== -->

    <div class="form" id="contactus">
        <h2>Contact us for <span> Financial Business!</span> </h2>
        <p>Let's be ready for new journey</p>
    </div>


    <section class="class-form">
        <form action="" name="myform" onsubmit="return validateform()">
            <div class="classform">
                <input type="text" placeholder="Enter Your Full Name" id="fullName">
                <input type="email" placeholder="Enter Your E-mail" id="email">
                <input type="password" name="" id="password" placeholder="Enter Your Password">
            </div>

            <div class="classform">
                <textarea name="" id="" placeholder="Message"></textarea>
            </div>
            <label>You have any type of query you can tell us through message,<span>Thank You!</span> </label>
            <div class="classform">
                <button class="submit" onclick="clickfunc()">Submit</button>
                <button class="submit">Reset</button>

            </div>
        </form>

    </section>


    <section class="class-guide" id="guide">
        <div class="social">
            <div class="class-need1">
                <h1>Need guidance?</h1>
                <h2>We<span>'</span>d love to help you. <span>Thank You</span></h2>
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


    <div id="business">

        <h6> Financial <span>Business!</span> </h6>
        <h2> One app for everything Financial <span>Business!</span> </h2>
        <h4>A super app packed with all the Financial <span>Business!</span> and services or exciting offers.</h4>
        <button class="business"> <i class="bi bi-bootstrap-fill"></i> &nbsp;Get tha app</button>
    </div>

    <!-- ==================== ACCORDION SECTION IS HERE PLEASE FOCUS ============== -->


    <div class="accordion" id="accordionPanelsStayOpenExample accordion" >
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                    aria-controls="panelsStayOpen-collapseOne">
                    # COMPANY EMPLOYEES
                </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">
                    <strong>HELLO THIS IS THE JOURNEY OF LIFE AND WELCOME IN THISN JOURNEY </strong> Lorem ipsum dolor
                    sit amet consectetur adipisicing elit.
                    Fugit tenetur quaerat ab asperiores hic, aliquid cupiditate porro corporis! Nemo blanditiis aliquam
                    placeat maiores similique saepe Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel error
                    similique quis iste animi libero eos est laborum harum, modi laboriosam impedit, ad aut. Quisquam. ?
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseTwo">
                    # OUR SOCIETY
                </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                aria-labelledby="panelsStayOpen-headingTwo">
                <div class="accordion-body">
                    <strong>Impotant thing is that</strong>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis obcaecati, nulla optio, ullam atque
                    animi dolorem exercitationem nostrum quam voluptate placeat eligendi recusandae consequuntur
                    necessitatibus beatae quibusdam quod modi Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Quia iure facere nobis eum hic in totam cupiditate iste sed, repudiandae explicabo corrupti
                    deserunt!. Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis dolorum inventore vel
                    itaque fugiat magni consequuntur quis veniam laborum! Nostrum, iure nobis quidem dolores recusandae
                    nulla nihil voluptatibus excepturi iste magnam aliquid sint dolorum quos sunt, accusamus dignissimos
                    est ipsam aliquam quia magni delectus, exercitationem necessitatibus adipisci! Suscipit, rerum
                    quisquam.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseThree">
                    # OUR MEMBERS

                </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                aria-labelledby="panelsStayOpen-headingThree">
                <div class="accordion-body">
                    <strong>WE ARE WELCOME TO OUR NEW MEMBERS IN OUR COMPANY</strong> It is hidden by default, until the
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, quis esse nemo quas non nobis
                    molestiae. Provident delectus numquam ea impedit modi assumenda exercitationem dolor aliquam
                    dignissimos. Soluta, harum Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum sit
                    voluptas sapiente similique exercitationem natus ipsam inventore ex asperiores? Accusamus temporibus
                    tempore debitis obcaecati hic maiores consequatur, at voluptatibus in? <laboriosam class="25">
                    </laboriosam>
                </div>
            </div>
        </div>
    </div>

        <!-- ==================== FOOTER SECTION IS HERE PLEASE FOCUS ============== -->


    <footer class="class-footer" id="footer">
        <div class="class-foot">
            <h3> Financial <span>Business!</span>
            </h3>
            <h2>Annual Statement you can check on this <a href="">link..</a> </h2>
        </div>



        <div class="class-foot">
            <h5>Finance <span>Business!</span></h5>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat error unde ipsam aut! Qui eum tempora
                quae non libero neque.</p>
            <ul class="unorder">
                <li><i class="bi bi-linkedin"></i></li>
                <li><i class="bi bi-twitter"></i></li>
                <li><i class="bi bi-meta"></i></li>
                <li><i class="bi bi-instagram"></i></li>
            </ul>
        </div>
        <div class="class-foot">
            <h5>Additional Pages</h5>
            <ul class="unorder-list">
                <li><a href="#financialBusiness">HOME</a> </li>
                <li><a href="#footer">ABOUT</a></i></li>
                <li><a href="#guide">SERVICES</a> </li>
                <li><a href="#contactus">CONTACT</a></i></li>
            </ul>

        </div>

        <div class="class-foot">
            <h5> Links </h5>
            <p>Got to our website</p>
            <p> We provide annual tour </p>
            <p>Go to FAQ section</p>
            <p>Additional <a href="">Information..</a></p>

        </div>
        <div class="class-foot">
            <h5>contact us</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, nobis! Dicta, praesentium! </p>
            <p>India</p>
            <p><i class="bi bi-geo-alt-fill"></i>Address</p>
            <p><iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30711292.110871688!2d64.43748693609942!3d20.01115759964804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1655881155858!5m2!1sen!2sin"
                    style='height: 100%;' width="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe></p>

        </div>

    </footer>


    <script src="ifithindex.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</body>

</html>


<?php
}else{
    header("location:login.php");
}

?>