<?php session_start() ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jio registerpage</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>
    

    <div class="contact-info">

        <div class="information">
            </div>
            
            <form action="verify.php" method="post" name="myform" onsubmit="return validateform()">
            <h5>Only for Financial Business**** </h5>

                <h1> Log in :-</h1>
                <i class="bi bi-person"></i><input type="text" id="fullName" name="name" placeholder="Enter your name">
                <i class="bi bi-envelope"></i><input type="email" id="email" name="email" placeholder="Enter your email">
                <i class="bi bi-key-fill"></i><input type="password" id="password" name="password" placeholder="password">
               <div class="buttons">
                    <input type="submit" id="submit" name="submit" placeholder="submit">
                    <input type="reset" id="reset" name="reset" placeholder="reset"><br>
                    create your account ? <a href="registration.php"> click here</a>

                </div>
            </form>
        </div>
    </div>

    <section id="notice">

    <p>
        <a href="login.php"> Terms and Conditions </a> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere labore praesentium vel dolor! Quia, consequuntur exercitationem facilis pariatur eum veniam provident quidem delectus ex, quaerat, architecto veritatis iusto sequi voluptates fugit. Obcaecati unde atque aut maiores molestiae distinctio tempora ducimus eligendi sed quos aspernatur, 
        sint quibusdam officia molestias veniam quia incidunt. Eveniet, voluptatum possimus ducimus et porro iusto asperiores incidunt alias magnam doloremque nam ea id fuga saepe molestias nesciunt! Odit fugiat aspernatur assumenda suscipit, nobis reprehenderit quasi architecto, quia necessitatibus esse non cum ea quos, inventore eum corporis ut sit veniam maiores animi. Modi pariatur vitae, sunt aspernatur, odit nostrum expedita voluptates, error itaque esse nesciunt deleniti iusto reiciendis quibusdam quis. Dignissimos, saepe?
         Qui, commodi veritatis eos molestias sit necessitatibus pariatur aut quasi, nihil error minima alias voluptatem ipsum consectetur facilis tempora deserunt quibusdam. Autem mollitia eum provident quod omnis in blanditiis magni. 
         Quidem dolore eos alias consequatur, neque delectus! Iste rerum architecto facere sed odit atque accusamus vitae molestiae. Officia eum eaque id repellat laborum officiis iusto dolorem quo aperiam, delectus fugiat ipsa asperiores pariatur 
         sit possimus ea neque? Ab, excepturi. Voluptatem aliquid ullam recusandae velit mollitia ut nulla quaerat laudantium consequuntur harum!
          Voluptas corporis minima sed animi consectetur aliquam voluptatem incidunt in nostrum nam magni, optio dignissimos fuga recusandae, veniam dolor quod asperiores maiores praesentium. Modi, debitis. Deleniti, at nobis error ad nulla eos quisquam dolores voluptate modi dolorem ipsum ipsa magni. Voluptate vero mollitia ducimus blanditiis quidem iste hic eveniet modi ipsa quibusdam perferendis velit laboriosam aspernatur adipisci quia, qui exercitationem nobis veritatis? Aliquam eum dolorum id quibusdam consectetur quaerat, repellat magni explicabo non unde provident illo. Velit ut minus sapiente amet commodi placeat a repudiandae.
           Officia, doloremque quaerat numquam reprehenderit sapiente aperiam dignissimos eaque deserunt ex quasi quisquam corporis molestiae nemo porro temporibus. 

          Tempore nobis ex placeat, facilis repellat assumenda totam quos unde neque qui rerum eveniet veritatis iure laborum quisquam saepe numquam sint nostrum ullam sequi dicta amet recusandae.
         Sit quia est, vitae sequi ipsum, molestias doloribus recusandae facere sapiente magnam quo tempore asperiores aliquam quam soluta blanditiis consectetur! Autem ipsum tempora libero voluptates placeat exercitationem praesentium beatae commodi assumenda excepturi quia mollitia maiores minus quis cumque ipsa dolore alias, perferendis recusandae, asperiores in esse. Corporis accusamus impedit atque molestiae. Expedita distinctio aliquid neque magnam sit officiis similique consequuntur, necessitatibus quam placeat qui repellat culpa architecto incidunt fugiat officia molestias, repudiandae ipsa, quos iste tempore asperiores reprehenderit. Excepturi a saepe quam illo, sit temporibus magnam? Sed architecto sit non iure praesentium rerum sapiente incidunt quia molestiae, necessitatibus fugiat nesciunt alias. Ea, cumque placeat aut reprehenderit odit maxime modi vel esse labore ullam nulla est reiciendis, error optio rerum tempora asperiores quis deserunt, molestiae praesentium qui magni laudantium? Voluptatem deleniti autem pariatur sed aliquid, quae dolore corrupti? Eveniet error architecto dolorem esse fugit, quos iste quod perferendis, quibusdam ab neque? Animi corrupti quisquam beatae nisi ducimus ratione? Quod quis esse voluptates nobis, rerum aliquam mollitia et, debitis totam enim earum similique dolore nostrum quam placeat!
  
<span> Thank You !</span>
        </p>

    </section>

<!--     
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
                <h2>Download MyJio</h2>
                <p> <span><i class="bi bi-google-play"></i>&nbsp;&nbsp; Google Play Store</span>&nbsp;&nbsp;  <span><i
                            class="bi bi-google-play"></i>&nbsp;&nbsp; App store</span></p>
                <hr>
            </div>

            <div class="footer">
                <img src="image/jio.png" alt="">
                <p> copy <i class="bi bi-c-circle"></i> 2022 JIo Infocom Ltd. All rights reserved. </p>
                <p> Press release | Regularitory |Policie |Term & conditions </p>
            </div>
        </footer>

    </section> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
    <script src="javascript.js"></script>
</body>

