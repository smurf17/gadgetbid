<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="BID">
        <title>
            Profile
        </title>
        <link
            rel="shortcut icon"
            type="image/x-icon"
            href="/img/icon/phone.svg">
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
    <section class="vh-100 bg-image m-5">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Profile</h2>
                                <?php 
                                include 'koneksi.php';
                                $get = str_replace("'", "", $_GET['username']);
                                $data_user = mysqli_query($koneksi,"select * from user where username='$get'");
                                $data = mysqli_fetch_assoc($data_user);
                                ?>
                                <form action="update_profile.php" method="post">
                                    <div class="form-outline mb-4">
                                        <input
                                            type="text"
                                            id="username"
                                            class="form-control form-control-lg"
                                            name="username"
                                            value="<?= $data['username'] ?>"
                                            />
                                        <label class="form-label" for="form3Example1cg">Username</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input
                                            type="password"
                                            id="password"
                                            class="form-control form-control-lg"
                                            name="password"
                                            value="<?= $data['password'] ?>"
                                            />
                                        <label class="form-label" for="form3Example1cg">Password</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input
                                            type="text"
                                            id="birth_date"
                                            class="form-control form-control-lg"
                                            name="birth_date"
                                            value="<?= $data['birth_date'] ?>"
                                            />
                                        <label class="form-label" for="form3Example1cg">Birth Date</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input
                                            type="text"
                                            id="gender"
                                            class="form-control form-control-lg"
                                            name="gender"
                                            value="<?= $data['gender'] ?>"
                                            />
                                        <label class="form-label" for="form3Example1cg">Gender</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input
                                            type="email"
                                            id="email"
                                            class="form-control form-control-lg"
                                            name="email"
                                            value="<?= $data['email'] ?>"
                                            />
                                        <label class="form-label" for="form3Example1cg">Email</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input
                                            type="text"
                                            id="no_phone"
                                            class="form-control form-control-lg"
                                            name="no_phone"
                                            value="<?= $data['no_phone'] ?>"
                                            />
                                        <label class="form-label" for="form3Example1cg">Phone Number</label>
                                    </div>
                                    <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                    <div class="d-flex justify-content-center">
                                        <button
                                            type="submit"
                                            class="btn btn-primary btn-block btn-lg gradient-custom-4 text-body mb-3">Save Changes</button>
                                        </div>
                                        <center><u><a class="fw-bold text-body" href="index.php?username=<?= $data['username'] ?>">Kembali</a></u></center>
                                </form>                            
                            </div>
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