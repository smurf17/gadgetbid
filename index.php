<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="BID">
        <title>
            Home
        </title>
        <link rel="shortcut icon" type="image/x-icon" href="img/icon/phone.svg">
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
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#"><img class="w-50" src="img/icon/logo.svg" alt="">
                    <b>
                        GadgetBID</b>
                </a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav"
                    aria-controls="navbarNav"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-card-item">
                            <a class="nav-link" href="#footer">Contact</a>
                        </li>
                        <?php if(isset($_GET['username'])) : ?>
                        <li class="nav-card-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                id="account"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Account
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="account">
                                <li>
                                    <a class="dropdown-item" href="profile.php?username=<?= $_GET['username']; ?>">Profile</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="logout.php">Logout</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-card-item dropdown">
                            <a
                                class="nav-link"
                                href="cart.php?id='<?= $_GET['id']; ?>'"
                                id="cart"
                                role="button">
                                <img style="width:25px;" src="img/icon/cart.svg" alt="">
                            </a>
                            <?php else : ?>
                        <li >
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
        <main>
            <div class="intro-wrapper" style="background-img: url(img/gadget.png);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-xl-4 ms-auto mt-5">
                            <h1>Welcome to
                                <span class="yellow-stroke">GadgetBID</span>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <!-- Clients -->
                <div class="clients text-center">
                    <p class="text-muted text-uppercase pb-4">Some of our trusted partner</p>
                    <div class="client-logo">
                        <div><img src="img/icon/aws-icon.svg" alt=""></div>
                        <div><img src="img/icon/alibaba-icon.svg" alt=""></div>
                    </div>
                </div>
                <!-- Product -->
                <div class="latest-articles text-center">
                    <h1>Our latest
                        <span class="yellow-stroke">Product</span>
                    </h1>
                    <div class="latest-articles-wrapper">
                        <?php
                        include 'koneksi.php';
                        $data = mysqli_query($koneksi, "select * from product");
                        $no = 1;
                        while($product = mysqli_fetch_array($data)) {
                        ?>
                        <div class="article">
                            <img
                                src="img/<?= $product['image'] ?>"
                                alt=""
                                style="width:330px; height:300px;">
                            <p class="article-meta">
                                <span class="data
                                text-muted"><?= "Rp " . number_format($product['price'], 0, ",", "."); ?></span>
                            </p>
                                <h4 class="title"><?= $product['name'] ?></h4>
                            <button
                                type="button"
                                class="btn btn-primary"
                                data-bs-toggle="modal"
                                data-bs-target="#exampleModal<?=$no?>">Detail</button>
                        </div>
                        <div
                            class="modal fade"
                            id="exampleModal<?=$no?>"
                            tabindex="-1"
                            aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <form action="add_cart.php?username=<?= $_GET['username'] ?>" method="post">
                                        <h5 class="modal-title" id="exampleModalLabel"><?= $product['name']; ?></h5>
                                        <button
                                            type="button"
                                            class="btn-close"
                                            data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <input name="id" type="text" value="<?= $product['id']; ?>" hidden>
                                        <img
                                            name="image"
                                            src="img/<?= $product['image']; ?>"
                                            class="card-img-top"
                                            alt="...">
                                        <h6 class="card-subtitle mb-2 text-muted">
                                            <?= "Rp " . number_format($product['price'], 0, ",", "."); ?></h6>
                                        <p class="card-text" name="stock">Stock =
                                            <?= $product['stock']; ?></p>
                                        <p class="card-text" name="desc">Desc :
                                            <?= $product['description']; ?></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Add to Cart</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php $no++; } ?>
                    </div>
                </div>

            </div>

        </div>
    </main>
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