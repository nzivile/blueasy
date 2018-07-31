<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

<header>

    <div class="menu container flex-container">
        <div class="logo">
            <a href="#">
                <span>BLU<span class="blue">E</span>ASY</span>
            </a>
        </div>
        <nav class="navigation flex-container">
            <li>
                <a href="#" class="active">Home</a>
            </li>
            <li>
                <a href="#">Services</a>
            </li>
            <li>
                <a href="#">Features</a>
            </li>
            <li>
                <a href="#">Photo album</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
        </nav>
    </div>
</header>

<div class="header-photo">
    <div class="slider" id="slider">
        <div class="slide active" style="background-image: url(assets/images/slider_1.jpg);"></div>
        <div class="slide" style="background-image: url(assets/images/slider_2.jpg);"></div>
        <div class="slide" style="background-image: url(assets/images/slider_3.jpg);"></div>
        <div class="slide" style="background-image: url(assets/images/slider_4.jpg);"></div>
    </div>
    <div class="main-text flex-container">
        <h2>"I'M LOOKING FOR THE UNEXPECTED.</h2>
        <h2>I'M LOOKING FOR THINGS I'HAVE NEVER SEEN BEFORE"</h2>
    </div>
</div>

<main>

    <section class="services">
        <div class="container">
            <p class="services-title">Services</p>
            <div class="underline white"></div>
            <ul class="service-list flex-container">
                <li>
                    <div>
                        <img src="assets/icons/coffee.svg"/>
                        <span class="service-head">Coffee</span>
                        <p class="service-p">Apple pie icing sweet. Brownie jelly-o applicake applicake sweet roll
                            liquorice bear claw. Jujubes carrot cake cotton candy sweet tart brownie. Tiramisu applicake
                            jujubes.</p>
                    </div>
                </li>
                <li>
                    <div>
                        <img src="assets/icons/printer.svg"/>
                        <span class="service-head">Instant</span>
                        <p class="service-p">Apple pie icing sweet. Brownie jelly-o applicake applicake sweet roll
                            liquorice bear claw. Jujubes carrot cake cotton candy sweet tart brownie. Tiramisu applicake
                            jujubes.</p>
                    </div>
                </li>
                <li>
                    <div>
                        <img src="assets/icons/camera.svg"/>
                        <span class="service-head">Serious</span>
                        <p class="service-p">Apple pie icing sweet. Brownie jelly-o applicake applicake sweet roll
                            liquorice bear claw. Jujubes carrot cake cotton candy sweet tart brownie. Tiramisu applicake
                            jujubes.</p>
                    </div>
                </li>
                <li>
                    <div>
                        <img src="assets/icons/frame.svg"/>
                        <span class="service-head">Frame</span>
                        <p class="service-p">Apple pie icing sweet. Brownie jelly-o applicake applicake sweet roll
                            liquorice bear claw. Jujubes carrot cake cotton candy sweet tart brownie. Tiramisu applicake
                            jujubes.</p>
                    </div>
                </li>

            </ul>

        </div>
    </section>

    <section class="photo-album ">
        <div class="container flex-container">
            <div>
                <p class="photo-title">Photo Album</p>
                <div class="underline grey"></div>
            </div>
            <nav class="navigation grey flex-container">
                <li>
                    <a href="#" class="active" onclick="filterGallery('All', this); return false;">All</a>
                </li>
                <li>
                    <a href="#" onclick="filterGallery('Panoramas', this); return false;">Panoramas</a>
                </li>
                <li>
                    <a href="#" onclick="filterGallery('Portraits', this); return false;">Portraits</a>
                </li>
                <li>
                    <a href="#" onclick="filterGallery('Macro', this); return false;">Macro</a>
                </li>
                <li>
                    <a href="#" onclick="filterGallery('Journal', this); return false;">Journal</a>
                </li>
            </nav>
        </div>
    </section>

    <div class="gallery">
        <div>
            <ul id="gallery-list" class="gallery-list container flex-container">
                <?php for ($i = 1; $i <= 4; $i++) { ?>
                    <li class="photo-gallery" data-type="Panoramas">
                        <img src="assets/images/panorama_<?php echo $i; ?>.jpg"/>
                    </li>
                <?php } ?>
                <?php for ($i = 1; $i <= 4; $i++) { ?>
                    <li class="photo-gallery" data-type="Portraits">
                        <img src="assets/images/portrait_<?php echo $i; ?>.jpg"/>
                    </li>
                <?php } ?>
                <?php for ($i = 1; $i <= 4; $i++) { ?>
                    <li class="photo-gallery" data-type="Macro">
                        <img src="assets/images/macro_<?php echo $i; ?>.jpg"/>
                    </li>
                <?php } ?>
                <?php for ($i = 1; $i <= 4; $i++) { ?>
                    <li class="photo-gallery" data-type="Journal">
                        <img src="assets/images/journal_<?php echo $i; ?>.jpg"/>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>

    <section class="just-section">
        <div class="container flex-container">
            <div class="just-section-text">
                <p class="just">Just default section</p>
                <div class="underline white"></div>
                <div class="paragraph">
                    <p class="text">Muffin chupa chups jelly beans sweet pie applicake. Croissant chocolate cake I love
                        pudding. Ice cream I love powder pudding apple pie marshmallow. Cupcake marzipan oat cake bonbon
                        I love candy canes toffee</p>
                    <p class="text_no_margin">Bear claw marzipan bear claw applicake I love muffin. Lemon drops gummi
                        bears pastry gummi bears sesame snaps I love unerdwear.com. Soufflé cotton candy dessert candy
                        ice cream wafer gummies cheesecake brownie.</p>
                </div>
                <div>
                    <a class="visit-button">Visit me</a>
                </div>
            </div>
            <div class="video">
                <iframe src="https://player.vimeo.com/video/82777736" width="640" height="360" frameborder="0"
                        webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <section class="twitter">
        <div class="container flex-container">
            <div>
                <p class="just">Twitter</p>
                <div class="underline white"></div>
                <div class="twitter_icon"></div>

                <p class="twitter_text">
                    Unerdwear cookie liquorice. Cake donut cupcake lollipop soufflé candy. Chocolate oat cake <strong>@cheesecake</strong>
                    tootsie roll.
                </p>
            </div>
        </div>
    </section>

    <section class="who">
        <div class="container flex-container">
            <div class="who-section-text">
                <p class="just">Who is john doe?</p>
                <div class="underline white"></div>
                <div class="paragraph">
                    <p class="text">Bear claw marzipan bear claw applicake I love muffin. Lemon drops gummi bears pastry
                        gummi bears sesame snaps I love unerdwear.com. Soufflé cotton candy dessert candy ice cream
                        wafer gummies cheesecake brownie.</p>
                    <p class="text_no_margin">
                        Muffin chupa chups jelly beans sweet pie applicake. Croissant chocolate cake I love pudding. Ice
                        cream I love powder pudding apple pie marshmallow. Cupcake marzipan oat cake bonbon I love candy
                        canes toffee.</p>
                </div>
            </div>
            <div class="side-text">
                <div class="paragraph">
                    <p class="text">Pudding dessert jujubes tiramisu gingerbread croissant tiramisu applicake. Sesame
                        snaps sugar plum cotton candy chocolate bonbon lemon drops candy canes cotton candy. Cake toffee
                        pie bear claw pastry.</p>
                    <ul class="icons">
                        <li>
                            <img src="assets/icons/twitter.svg"/>
                        </li>
                        <li>
                            <img src="assets/icons/google_plus.svg"/>
                        </li>
                        <li>
                            <img src="assets/icons/dribbble-logo.svg"/>
                        </li>
                        <li>
                            <img src="assets/icons/coffee.svg"/>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <div class="container flex-container">
            <div>
                <p class="testi">Testimonials</p>
                <div class="underline grey"></div>
                <div class="testimonials_icon"></div>

                <p class="testimonials_text">
                    Applicake chocolate cake wafer toffee pie soufflé wafer. Tart marshmallow wafer macaroon cheesecake
                    jelly. Gingerbread cookie soufflé sweet roll sweet roll jelly-o.
                </p>
                <div class="testimonials_logo">
                    <strong>-Walter White</strong>
                </div>
            </div>
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <div>
                <p class="just">Contact</p>
                <div class="underline white"></div>
                <div class="contact_row">
                    <div class="inputs">
                        <div>
                            <p class="message"><strong>Full name</strong></p>
                            <input name="fullname" class="input"/>
                        </div>
                        <div>
                            <p class="message"><strong>Email</strong></p>
                            <input name="email" class="input"/>
                        </div>
                    </div>
                    <div class="right-side">
                        <p class="text">Jujubes bear claw croissant wafer sweet lemon drops brownie chocolate bar. Sweet
                            lollipop
                            halvah tootsie roll cake fruitcake. Chocolate cake chocolate bar gingerbread lollipop tart.
                            Jujubes bear claw donut chupa chups.</p>

                        <p class="text">Linda Newman<br/>
                            W325 State Road 123<br/>
                            Mondovi, WI(Wisconsin) 98746-54321<br/>
                            (715) 946 - 1234</p>
                    </div>
                </div>
                <div>
                    <p class="message"><strong>Message</strong></p>
                    <textarea name="message" class="input textarea"></textarea>
                </div>
                <div>
                    <button class="submit_button" type="submit">message</button>
                </div>
            </div>
        </div>

    </section>

</main>

<footer>
    <div class="container flex-container">
        <ul class="nav">
            <li>
                <div>home</div>
            </li>
            <li>
                <div>services</div>
            </li>
            <li>
                <div>portfolio</div>
            </li>
            <li>
                <div>contact</div>
            </li>
        </ul>
        <div class="copyright">
            2013 ©
        </div>
    </div>
</footer>


<script src="assets/scripts/custom.js"></script>

</body>
</html>