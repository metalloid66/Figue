<?php
require_once "products.php";
require_once "stripeIPN.php";

?>

<!DOCTYPE html>
<html lang="en">


<!--HEAD SECTION-->

<head>
    <meta name="description"
        content="Figue.pl is a small team of artists customizing products like skateboard griptapes and pottery, or even entire walls.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg" href="logo_vol2\favicon_vol2.svg" />
    <link rel="stylesheet" type="text/css" href="vendors\css\Grid.css">
    <link rel="stylesheet" type="text/css" href="vendors\css\normalize.css">
    <link rel="stylesheet" type="text/css" href="resources\CSS\style.css">
    <link rel="stylesheet" type="text/css" href="resources\CSS\queries.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400;1,500&display=swap"
        rel="stylesheet">
    <meta charset="UTF-8">
    <title>Figue</title>
    <script src="https://js.stripe.com/v3/"></script>
    <!-- Primary Meta Tags -->
    <title>Figue.pl — Turn items into art</title>
    <meta name="title" content="Figue.pl — Turn items into art">
    <meta name="description"
        content="Figue.pl is a small team of artists customizing products like skateboard griptapes and pottery, or even entire walls.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://figue1.herokuapp.com/">
    <meta property="og:title" content="Figue.pl — Turn items into art">
    <meta property="og:description"
        content="Figue.pl is a small team of artists customizing products like skateboard griptapes and pottery, or even entire walls.">
    <meta property="og:image" content="https://figue1.herokuapp.com/metapic.png">

</head>

<body>



    <!-- HEADER SECTION-->



    <header>
        <div class="background-text-box">
            <div class="background-text-box-text">
                <h1>Turning your walls, skateboards, clothes and pots into custom art.</h1>

                <a class="btn btn-full" href="#section-skateboards">Products</a>
                <a class="btn btn-ghost" href="#section-form">Customize</a>
            </div>
        </div>
        <div class="category">
            <a href="#">
                <div class="column col1">
                    <h2 class="text-on-col">Murals</h2>
                    <h1 class="comingSoon">COMING SOON </h1>
                </div>
            </a>
            <a href="#section-skateboards">
                <div class="column col2">
                    <h2 class="text-on-col">Skateboards</h2>
                </div>
            </a>
            <a href="#">
                <div class="column col3">
                    <h2 class="text-on-col">Pottery</h2>
                    <h1 class="comingSoon">COMING SOON </h1>
                </div>
            </a>
            <a href="#">
                <div class="column col4">
                    <h2 class="text-on-col">Clothing</h2>
                    <h1 class="comingSoon">COMING SOON </h1>
                </div>
            </a>
        </div>
    </header>



    <!-- FEATURES SECTION-->

    <section class="section-features">
        <div class="row"> <img src="logo_vol2/figue_title_vol2.svg" class="figue__img"> </div>
        <div class="row">
            <h2>Turn your items into art <br> Or have us create them! </h2>
            <p class="long-copy">Our team of artists is ready to
                custizme your items and turn them into art pieces for an afforadble price.
                <!-- Or you can just browse and order an item from the list of products that we handmade. -->
            </p>
        </div>
        <div class="row clearfix">
            <div class="col span-1-of-4 box">
                <img class="category-icon" src="resources/icons/spray.svg" alt="spray icon for murals">
                <h3 class="category__h3">Murals</h3>
                <p>Hire our professional graphite artist to turn your dull walls into murals, of all different sizes and
                    colors.
                    <!-- Contact our artist providing all the neceesary information - Dimensions of the wall, what do you
                    want drawn - and we will contact you
                    in less than 24h and tell you about the details. -->
                </p>
            </div>
            <div class="col span-1-of-4 box">
                <img class="category-icon" src="resources/icons/skateboard.svg" alt="skateboard icon for skateboards">
                <h3 class="category__h3">Skateboards</h3>
                <p>Thinking about a unique custom griptape? With a little help of
                    acrylic paint we can decorate your board with just about any design you can dream of.
                    <!-- Browse the
                    list of pre-made griptapes or fill the contact form below to have control over the whole process. -->
                </p>
            </div>
            <div class="col span-1-of-4 box">
                <img class="category-icon" src="resources/icons/pot.svg" alt="pot icon for pottery">
                <h3 class="category__h3">Pottery</h3>
                <p>Browse the list of handmade handmade pots crafied by our own certified sculators, or contact us
                    and tell us what you have in mind.
                </p>
            </div>
            <div class="col span-1-of-4 box">
                <img class="category-icon" src="resources/icons/dress.svg" alt="dress icon for clothing">
                <h3 class="category__h3">Clothes</h3>
                <p>
                    Want to add some life to your clothing? Hit us up with your idea and our designers will bring it to
                    life. From a simple sticker
                    to a fully customized outfit.
                </p>
            </div>
        </div>
    </section>


    <!--HOW IT WORKS section-->

    <section class="how">
        <div class="row">
            <h2>HOW IT WORKS </h2>
        </div>
        <div class="row__how">
            <a href="#col__content1">
                <div class="col__how">
                    <img src="resources\icons\idea.svg" class="col__how__image">
                    <p>Submit an idea</p>
                </div>
            </a>


            <a href="#col__content2">
                <div class="col__how">
                    <img src="resources\icons\contact.svg" class="col__how__image">
                    <p>Send your details</p>

                </div>
            </a>


            <a href="#col__content3">
                <div class="col__how">
                    <img src="resources\icons\artist.svg" class="col__how__image">
                    <p>Recivie your piece</p>

                </div>
            </a>
        </div>
        <div class="col__content" id="col__content1">
            <h3>Submit an idea</h3>
            <p>It all starts with your idea. Using the custom order form below, tell us your idea in detail,
                along with any images/photos that will help artists understand your project.
                <br><br>
                You can get started in seconds!
            </p>
            <img src="resources\icons\blueprint.svg">
        </div>
        <div class="col__content" id="col__content2">
            <h3>Send your details</h3>
            <p>Using the same form, provide us with your contact details and address. Using this information, we will be
                able to contact you back
                with the estimated price and payment method.
                <br><br>
                We will make sure to give you the most affordable price!
            </p>
            <img src="resources\icons\blog.svg">
        </div>
        <div class="col__content" id="col__content3">
            <h3>Recivie your work</h3>
            <p>Your work here is done. After having confirmed your order, one of our artists will start
                working on your project according to their queue of orders.

                <br><br>
                Once completed you will then receive your custom order!
            </p>
            <img src="resources\icons\painting.svg">
        </div>
    </section>


    <!-- SKATEBOARDS SECTION-->



    <section class="section-skateboards " id="section-skateboards">

        <div class="row clearfix">
            <h2>SKATEBOARD GRIPTAPES</h2>
        </div>
        <?php
        $colNum = 1;
     foreach ($products_row1 as $productID => $attributes) {
         if ($colNum == 1) {
             echo '<div class="row clearfix">';
         }
         $product = \Stripe\Product::create([
            'name' => "$attributes[title]",
            'images'=>["https://figue1.herokuapp.com/resources/img/griptapes/resized/griptape$attributes[productNum].jpg"],
            'description' =>"$attributes[caption]",

          ]);
          $price = \Stripe\Price::create([
            'product' => "$product->id",
            'unit_amount' =>"$attributes[price]",
            'currency' => 'pln',
          ]);

         $session = \Stripe\Checkout\Session::create([
            'shipping_address_collection' => [
                'allowed_countries' => ['PL'],
            ],
            'payment_method_types' => ['card'],
            'line_items' => [[
              'price' =>"$price->id",
              'quantity' => 1,
              ]
        ],
            'mode' => 'payment',
            'success_url' => 'https://figue1.herokuapp.com/index.php',
            'cancel_url' => 'https://figue1.herokuapp.com/index.php',
          
          ]);

         echo 
         "    
             <div class=\"col span-1-of-3\">
             <figure class=\"griptape-photo\">
                 $attributes[image]
                 <figcaption class=\"griptape-caption\">$attributes[caption] 
                    </figcaption>
                    <p class='price__tag'> <strong>". ($attributes['price']/100).",00zl </strong></p>
                    <button id=\"btn-buy-$attributes[btnNum]\">ORDER</button>
             </figure>
             <script>
             var stripe = Stripe(
                 'pk_test_51H5yU6KH71TdaZu6IwYG6RbGcPsXLdRsUn3oW5PQMbCl9W3fD8nzCUm0fKtIo9r8GUkUEI3uC7cpJqEfmKGvfqeu00NqamBIHM'
             );
             var checkoutButton = document.getElementById('btn-buy-$attributes[btnNum]');
             checkoutButton.addEventListener('click', function() {
                 stripe.redirectToCheckout({
                     sessionId: '$session->id'
     
                 }).then(function(result) {
                     // If `redirectToCheckout` fails due to a browser or network
                     // error, display the localized error message to your customer
                     // using `result.error.message`.
                 });
             });
             </script>
         </div> ";
         if ($colNum == 3) {
             echo '</div>';
             $colNum = 0;
         } else {
             $colNum++;
         }

     }
    ?>

        <?php
        $colNum = 1;
     foreach ($products_row2 as $productID => $attributes) {
         if ($colNum == 1) {
             echo '<div class="row clearfix">';
         }
         $product = \Stripe\Product::create([
            'name' => "$attributes[title]",
            'images'=>["https://figue1.herokuapp.com/resources/img/griptapes/resized/griptape$attributes[btnNum].jpg"],
            'description' =>"$attributes[caption]",

          ]);
          $price = \Stripe\Price::create([
            'product' => "$product->id",
            'unit_amount' => 5000,
            'currency' => 'pln',
          ]);

         $session = \Stripe\Checkout\Session::create([
            'shipping_address_collection' => [
                'allowed_countries' => ['PL'],
            ],
            'payment_method_types' => ['card'],
            'line_items' => [[
              'price' =>"$price->id",
              'quantity' => 1,
              ]
        ],
            'mode' => 'payment',
            'success_url' => 'https://figue1.herokuapp.com/index.php',
            'cancel_url' => 'https://figue1.herokuapp.comindex.php',
          
          ]);

         echo 
         "    
             <div class=\"col span-1-of-3\">
             <figure class=\"griptape-photo\">
                 $attributes[image]
                 <figcaption class=\"griptape-caption\">$attributes[caption] 
                     </figcaption>
                    <p class='price__tag'> <strong>". ($attributes['price']/100).",00zl </strong></p>
                    <button id=\"btn-buy-$attributes[btnNum]\">ORDER</button>
             </figure>
             <script>
             var stripe = Stripe(
                 'pk_test_51H5yU6KH71TdaZu6IwYG6RbGcPsXLdRsUn3oW5PQMbCl9W3fD8nzCUm0fKtIo9r8GUkUEI3uC7cpJqEfmKGvfqeu00NqamBIHM'
             );
             var checkoutButton = document.getElementById('btn-buy-$attributes[btnNum]');
             checkoutButton.addEventListener('click', function() {
                 stripe.redirectToCheckout({
                     sessionId: '$session->id'
     
                 }).then(function(result) {
                     // If `redirectToCheckout` fails due to a browser or network
                     // error, display the localized error message to your customer
                     // using `result.error.message`.
                 });
             });
             </script>
         </div> ";
         if ($colNum == 3) {
             echo '</div>';
             $colNum = 0;
         } else {
             $colNum++;
         }

     }
    ?>


        <div class="last">
            <div class="row">
                <h3 class="custom-board-h3">CUSTOMIZE YOUR BOARD</h3>
            </div>
            <div class="row clearfix">
                <div class="col span-1-of-3">

                    <figure class="griptape-photo">
                        <a href="#section-form"><img src="resources/img/griptapes/resized/custom-popsicle.jpg"
                                onmouseover="this.src='resources/img/griptapes/resized/custom-popsicle-hover2.jpg'"
                                onmouseout="this.src='resources/img/griptapes/resized/custom-popsicle.jpg'"
                                alt="custom popsicle"> </a>
                        <figcaption class="griptape-caption-custom"><strong>Custom Popsicle Griptape</strong><br>Price
                            includes
                            griptape + InPost shipping + Work <br>
                            <strong>25,00zl + 15,00zl + 50,00zl -- 150,00zl</strong>
                        </figcaption>
                    </figure>

                </div>
                <div class="col span-1-of-3">
                    <figure class="griptape-photo">
                        <a href="#section-form"><img src="resources/img/griptapes/resized/custom-cruiser.jpg"
                                onmouseover="this.src='resources/img/griptapes/resized/custom-cruiser-hover2.jpg'"
                                onmouseout="this.src='resources/img/griptapes/resized/custom-cruiser.jpg'"
                                alt="custom cruiser"> </a>
                        <figcaption class="griptape-caption-custom"><strong>Custom Cruiser Griptape</strong><br>Price
                            includes
                            griptape + InPost shipping + Work <br>
                            <strong>25,00zl + 15,00zl + 50,00zl -- 150,00zl</strong>
                        </figcaption>
                    </figure>
                </div>
                <div class="col span-1-of-3">

                    <figure class="griptape-photo">
                        <a href="#section-form"><img src="resources/img/griptapes/resized/custom-longboard.jpg"
                                onmouseover="this.src='resources/img/griptapes/resized/custom-longboard-hover2.jpg'"
                                onmouseout="this.src='resources/img/griptapes/resized/custom-longboard.jpg'"
                                alt="custom longboard"> </a>
                        <figcaption class="griptape-caption-custom"><strong>Custom Longboard Griptape</strong><br>Price
                            includes
                            griptape + InPost shipping + Work <br>
                            <strong>25,00zl + 15,00zl + 60,00zl -- 170,00zl</strong>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>


    <!--THE CONTACT FROM-->

    <section class="section-form" id="section-form">
        <div class="row">
            <h2>Get your own custome piece!</h2>
        </div>

        <div class="row">
            <form method="post" action="mailer3.php" class="contact-form" id="form" enctype="multipart/form-data">
                <div class="row">
                    <?php
                
                    if ($_GET['success']==1) {
                        echo "<div class=\"form-messages success\">
                        Your custome order is received!!
                    </div>";
                    }
                    if ($_GET['success']==-1) {
                        echo "<div class=\"form-messages error\">
                        Please recheck the form.
                    </div>";
                    }
                        ?>
                </div>

                <div class="box-of-input">
                    <div class="row">


                        <div class="col span-1-of-3">
                            <label for="name">Name</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="name" id="name" placeholder="Your name" required>
                        </div>
                    </div>
                </div>

                <div class="box-of-input">
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="phoneNum">Phone</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="tel" name="phoneNum" id="phoneNum" placeholder="Your phone number" required
                                class="phoneNum">
                        </div>
                    </div>
                </div>

                <div class="box-of-input">
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="shippingAddress">Address</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="shippingAddress" id="shippingAddress"
                                placeholder="Your shipping address" required>
                        </div>
                    </div>
                </div>

                <div class="box-of-input">
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="email">Email</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="email" name="email" id="email" placeholder="Your email" required>
                        </div>
                    </div>
                </div>

                <div class="box-of-input">
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="type-product">Select Custom Item</label>
                        </div>
                        <div class="col span-2-of-3">

                            <select name="type-product" id="type-product">

                                <option value="popsicle">Griptape Popsicle</option>
                                <option value="cruiser">Griptape Cruiser</option>
                                <option value="longboard">Griptape Longboard</option>
                                <option value="other">Griptape Other</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="box-of-input">
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Describe The Item </label>
                        </div>
                        <div class="col span-2-of-3">
                            <textarea name="message"
                                placeholder="i.e The size and Dimensions of the item (i.e skateboard 80cm*30cm board) or If you want the art drawn on a specific location etc"></textarea>
                        </div>
                    </div>
                </div>

                <div class="box-of-input">
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Upload File</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="file" name="file-upload" id="file-upload" required>
                        </div>
                    </div>
                </div>

                <div class="box-of-input">
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>&nbsp;</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="submit" value="Send">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- TEAM SECTION -->


    <section id="section-team">
        <div class="row">
            <h2>MEET THE FIGUE.PL TEAM!</h2>
        </div>
        <div class="row">

            <div class="col span-1-of-2-team box-team">
                <a href="#hovered-artist1"><img src="resources/img/team/hanna.jpg" class="team-photo"
                        alt="first artist photo"></a>
                <h3 class="h3-team">Hanna Kolodziejczyk</h3>
                <div class="facebook-link">
                    <img src="resources/icons/facebook.svg" class="team-icons" alt="facebook icon">
                    <a href="https://www.facebook.com/metalloid66/">Facebook</a>
                </div>
                <div class="instagram-link">
                    <img src="resources/icons/instagram.svg" class="team-icons" alt="instagram icon">
                    <a href="https://www.instagram.com/nobel_._/">Instagram</a>
                </div>

            </div>

            <div class="col span-1-of-2-team box-team">
                <a href="#hovered-artist2"><img src="resources/img/team/nabeel.jpg" class="team-photo"
                        alt="second artist photo"></a>
                <h3 class="h3-team">M Nabeel Al-Mufti</h3>
                <div class="facebook-link">
                    <img src="resources/icons/facebook.svg" class="team-icons" alt="facebook icon">
                    <a href="https://www.facebook.com/metalloid66/">Facebook</a>
                </div>
                <div class="instagram-link">
                    <img src="resources/icons/instagram.svg" class="team-icons" alt="instagram icon">
                    <a href="https://www.instagram.com/nobel_._/">Instagram</a>
                </div>

            </div>

        </div>


        <div id="hovered-artist1">
            <div class="row">
                <div class="col span-1-of-2 box-team-hovered">
                    <img src="resources/img/team/hanna-squat.jpg" class="team-photo-hovered" alt="first artist hovered">
                </div>
                <div class="col span-1-of-2 box-team-hovered">
                    <div class="hovered-photo-text">
                        <p>A painter with the hands of a sculptor. Hanna is the one responsible for bringing
                            your custom griptape ideas to life. Here are some of her works - which you can purchase from
                            our store -
                        </p>
                    </div>
                    <div class="slidershow">
                        <div class="slides">
                            <input type="radio" name="r" id="r1">
                            <input type="radio" name="r" id="r2">
                            <input type="radio" name="r" id="r3">
                            <input type="radio" name="r" id="r4">
                            <div class="slide s1">
                                <img src="resources/img/team/nabeel-work/griptape1.jpg" alt="first work of artist">
                            </div>
                            <div class="slide ">
                                <img src="resources/img/team/nabeel-work/griptape3.jpg" alt="second work of artist">
                            </div>
                            <div class="slide">
                                <img src="resources/img/team/nabeel-work/griptape4.jpg" alt="third work of artist">
                            </div>
                            <div class="slide">
                                <img src="resources/img/team/nabeel-work/griptape5.jpg" alt="forth work of artist">
                            </div>
                        </div>
                        <div class="navigation">
                            <label for="r1" class="bar"></label>
                            <label for="r2" class="bar"></label>
                            <label for="r3" class="bar"></label>
                            <label for="r4" class="bar"></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- THE FOOTER!-->

    <footer id="footer">
        <div class="row">
            <div class="col span-1-of-2">
                <ul class="footer-nav">
                    <li><a href="#popup__about">About us</a></li>
                    <li><a href="#popup__feedback">Feedback</a></li>
                    <li><a href="https://www.facebook.com/metalloid66/" target="_blank">Get a similar site</a></li>
                </ul>
            </div>
            <div class="col span-1-of-2">
                <ul class="social-links">
                    <li><a href="#footer" id="fb-social-link"><img src="resources/icons/facebook.svg"
                                alt="facebook icon footer"></a></li>
                    <li><a href="#footer" id="insta-social-link"><img src="resources/icons/instagram.svg"
                                alt="instagram icon footer"></a></li>
                    <li><a href="#footer" id="twitter-social-link"><img src="resources/icons/twitter.svg"
                                alt="twitter icon footer"></a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <p>Yo this page is &copy; 2020 copyrighted by Figue.pl All rights reserved</p>
        </div>

    </footer>

    <!-- THE FOOTER'S POPUPS !-->


    <div class="popup__about" id="popup__about">
        <div class="popup__about__content">
            <a href="#footer" class="popup__close">&times;</a>
            <h2>About us</h2>
            <h3>A team of 2 artists</h3>
            <p class="popup__about__text">
                We're a small team of 2 artists located in Warsaw customizing products like skateboard griptapes and
                pottery,
                or even entire walls. We started figue.pl
                as a small project to learn about web development and business management,
                and after a couple of positive reviews, we decdied it's too good to let go!
                <br>
                You can have a little chat with us on our listed social media accounts, so you get to know us better.
            </p>
        </div>
    </div>

    <div class="popup__feedback" id="popup__feedback">
        <div class="popup__feedback__content">
            <a href="#footer" class="popup__close">&times;</a>
            <h2>Help us imrpove!</h2>
            <form method="post" action="mailer__feedback.php" id="popup__feedback__form" enctype="multipart/form-data">
                <textarea name="feedback" class="popup__feedback__textarea" id="feedback" placeholder="Your feedback"
                    required></textarea>
                <input type="submit" value="Send">
            </form>
        </div>
    </div>
</body>

</html>