<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="BID">
        <title>
            Register
        </title>
        <link rel="shortcut icon" type="image/x-icon" href="/img/icon/phone.svg">
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
        <style>

            .card-registration .select-input.form-control[readonly]:not([disabled]) {
                font-size: 1rem;
                line-height: 2.15;
                padding-left: 0.75em;
                padding-right: 0.75em;
                padding-bottom: 0.100em;
            }
            .card-registration .select-arrow {
                top: 13px;
            }
        </style>
    </head>
    <body>
        <section class="vh-100 gradient-custom mb-5">
            <div class="container py-5 h-100">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="col-12 col-lg-9 col-xl-7">
                        <div
                            class="card shadow-2-strong card-registration"
                            style="border-radius: 15px;">
                            <div class="card-body p-4 p-md-5">
                                <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
                                <form action="add_user.php" method="post">

                                    <div class="row">
                                        <div class="col-md-12 mb-4">

                                            <div class="form-outline">
                                                <input
                                                    type="text"
                                                    id="username"
                                                    class="form-control form-control-lg"
                                                    name="username"/>
                                                <label class="form-label" for="username">Username</label>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 mb-4">

                                            <div class="form-outline">
                                                <input
                                                    type="password"
                                                    id="password"
                                                    class="form-control form-control-lg"
                                                    name="password"/>
                                                <label class="form-label" for="password">Password</label>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4 d-flex align-items-center">

                                            <div class="form-outline datepicker w-100">
                                                <input
                                                    type="text"
                                                    class="form-control form-control-lg"
                                                    id="birth_date"
                                                    name="birth_date"
                                                    placeholder="01 January 2000"/>
                                                <label for="birth_date" class="form-label">Birthday</label>
                                            </div>

                                        </div>
                                        <div class="col-md-6 mb-4">

                                            <div class="form-outline datepicker w-100">
                                                <input
                                                    type="text"
                                                    class="form-control form-control-lg"
                                                    id="gender"
                                                    name="gender"
                                                    placeholder="Male/Female"/>
                                                <label for="gender" class="form-label">Gender</label>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4 pb-2">

                                            <div class="form-outline">
                                                <input
                                                    type="email"
                                                    id="email"
                                                    name="email"
                                                    class="form-control form-control-lg"/>
                                                <label class="form-label" for="email">Email</label>
                                            </div>

                                        </div>
                                        <div class="col-md-6 mb-4 pb-2">

                                            <div class="form-outline">
                                                <input
                                                    type="tel"
                                                    id="no_phone"
                                                    name="no_phone"
                                                    class="form-control form-control-lg"/>
                                                <label class="form-label" for="no_phone">Phone Number</label>
                                            </div>

                                        </div>
                                    </div>

                                    <p class="text-center text-muted mt-5 mb-0">Already have account? <a
                                        href="login.php" class="fw-bold text-body"><u>Login</u></a></p>
                                    <div class="mt-4 pt-2">
                                        <input class="btn btn-primary btn-lg" type="submit" value="Submit"/>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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