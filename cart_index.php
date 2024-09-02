<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta
            name="author"
            content="Firmbee.com - Free Project Management Platform for remote teams">
        <title>Cart</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link
            rel="preconnect"
            href="https://fonts.gstatic.com"
            crossorigin="crossorigin">
        <link
            href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Open+Sans&display=swap"
            rel="stylesheet">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
            crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/0e035b9984.js" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/0e035b9984.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.typekit.net/rrg4put.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <div class="main container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-post">
                        <h1>Product in Cart</h1>
                        <div class="row">
                            <div class="col-2">
                                <a href="logout.php" class="btn btn-success" tabindex="-1" role="button">Check Out</a>
                            </div>
                            <div class="col-10">
                                <a href="logout.php" class="btn btn-danger" tabindex="-1" role="button">Logout</a>
                            </div>
                        </div>
                        <?= 
                          include 'koneksi.php';
                          $id = $_GET['id'];
                          $data = mysqli_query($koneksi, "select * from cart_items where id_user=$id");
                          $items = mysqli_fetch_array($data);
                          while($items = mysqli_fetch_array($data)) {
                        ?>
                        <div class="post-contant">
                            <h3><?= $items['name']; ?></h3>
                            <p>Qty x <?= $items['quantity']; ?></p>
                            <h6><?= "Rp " . number_format($items['price'], 0, ",", "."); ?></h6>
                            <?php } ?>
                            <h4>Total =
                            </h4>
                            <!-- Footer -->
                            <footer id="footer">
                                <div class="container text-center text-md-start">
                                    <div class="footer-wrap">
                                        <div class="about">
                                            <img src="img/icon/logo.svg" alt="" style="width: 50px;">
                                            <p class="fw-bold">GadgetBID</p>
                                            <div class="social-media mt-3">
                                                <a href="" class="me-2 text-reset"><img src="img/icon/instagram-icon.svg" alt=""></a>
                                                <a href="" class="me-2 text-reset"><img src="img/icon/facebook-icon.svg" alt=""></a>
                                                <a href="" class="me-2 text-reset"><img src="img/icon/twitter-icon.svg" alt=""></a>
                                                <a href="" class="me-2 text-reset"><img src="img/icon/linkedin-icon.svg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="company">
                                            <p class="fw-bold">Company</p>
                                            <p>
                                                <a href="">About us</a>
                                            </p>
                                            <p>
                                                <a href="">Services</a>
                                            </p>
                                            <p>
                                                <a href="">Team</a>
                                            </p>
                                            <p>
                                                <a href="">Pricing</a>
                                            </p>
                                            <p>
                                                <a href="">Project</a>
                                            </p>
                                            <p>
                                                <a href="">Careers</a>
                                            </p>
                                            <p>
                                                <a href="">Blog</a>
                                            </p>
                                            <p>
                                                <a href="">Login</a>
                                            </p>
                                        </div>
                                        <div class="useful-links">
                                            <p class="fw-bold">Useful links</p>
                                            <p>
                                                <a href="">Terms of
                                                </a>
                                            </p>
                                            <p>
                                                <a href="">Services</a>
                                            </p>
                                            <p>
                                                <a href="">Privacy Policy</a>
                                            </p>
                                            <p>
                                                <a href="">Documentation</a>
                                            </p>
                                            <p>
                                                <a href="">Changelog</a>
                                            </p>
                                            <p>
                                                <a href="">Components</a>
                                            </p>
                                        </div>
                                        <div class="newsletter">
                                            <p class="fw-bold">Newsletter</p>
                                            <p class="text-muted">Sign up and receive the latest tips via email.</p>
                                            <form id="subscribe" action="">
                                                <label for="email">Youre e-mail:</label>
                                                <input type="email" placeholder="e-mail:" name="email" required="required">
                                                <button type="submit" class="main-btn">Subscribe</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="copyright">
                                        <p>&copy; 2022 GadgetBID.com | Created by
                                            <a
                                                href="http://www.instagram.com/davidalfrzky_"
                                                title="creator"
                                                target="_blank">Bayu Iqbal David</a>
                                        </p>
                                    </div>
                                </div>
                            </footer>
                            <div class="fb2022-copy">GadgetBID 2022 copyright</div>
                            <script
                                src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
                                integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
                                crossorigin="anonymous"></script>
                            <script src="./js/nav-bg.js"></script>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                            <script src="./js/script.js"></script>
                        </body>
                    </html>