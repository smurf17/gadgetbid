<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="BID">
        <title>
            Admin
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
        <div class="container m-5">
            <div class="row">
                <div class="col-6"></div>
            </div>
            <!-- Tombol tambah data -->
            <div class="row mb-3">
                <div class="col-2">
                    <button
                        type="button"
                        class="btn btn-primary"
                        data-bs-toggle="modal"
                        data-bs-target="#addModal">
                        Add Product
                    </button>
                </div>
                <div class="col-6">
                    <a href="logout.php" class="btn btn-danger" tabindex="-1" role="button">Logout</a>
                </div>
            </div>
            <!-- logout -->
            <div class="row mb-3">
                
            </div>    

            <!-- Menampilkan semua data awal maupun hasil search -->
            <h3 class="mb-4">List Product</h3>
            <ul class="list-group">
                <?php
                    include 'koneksi.php';
                    $data = mysqli_query($koneksi, "select * from product");
                    $no = 1;
                    while($product = mysqli_fetch_array($data)) {
                ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?= $product['name']; ?>
                    <div class="btn-group" role="group" aria-label="Basic example">
                            <button 
                                class="badge bg-primary rounded-pill"
                                id="updateModal"
                                type="button"
                                data-bs-toggle="modal"
                                data-bs-target="#updateModal<?=$no?>">Edit
                            </button>
                        <span class="badge bg-danger rounded-pill">
                            <a
                                href="delete_product.php?id=<?= $product['id']; ?>"
                                onclick="return confirm('delete?');">Hapus
                            </a>
                        </span>
                    </div>
                </li>                
            </ul>
        </div>
        <!-- Modal Update Product -->
        <div
            class="modal fade"
            id="updateModal<?=$no?>"
            tabindex="-1"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Product</h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="update_product.php" method="post">
                            <input type="hidden" id="id" name="id">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input
                                    value="<?= $product['name']; ?>"
                                    type="text"
                                    class="form-control"
                                    id="name"
                                    name="name"
                                    autocomplete="off"
                                    value=""
                                    aria-describedby="namaHelp">
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input
                                    value="img/<?= $product['image']; ?>"
                                    type="file"
                                    class="form-control"
                                    id="image"
                                    name="image"
                                    autocomplete="off"
                                    aria-describedby="imageHelp">
                            </div>
                            <div class="form-group">
                                <label for="stock">Stock</label>
                                <input
                                    value="<?= $product['stock']; ?>"
                                    type="text"
                                    class="form-control"
                                    id="stock"
                                    name="stock"
                                    autocomplete="off"
                                    aria-describedby="stockHelp">
                            </div>
                            <div class="form-group">
                                <label for="desc">Description</label>
                                <input
                                    value="<?= $product['description'] ?>"
                                    type="textarea"
                                    class="form-control"
                                    id="desc"
                                    name="desc"
                                    autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input
                                    value="<?= "Rp " . number_format($product['price'], 0, ",", "."); ?>"
                                    type="text"
                                    class="form-control"
                                    id="price"
                                    name="price"
                                    autocomplete="off">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button id="Close" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <?php $no++; } ?>

        <!-- Modal Add Product -->
        <div
            class="modal fade"
            id="addModal"
            tabindex="-1"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Input Product</h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="add_product.php" method="post">

                            <input type="hidden" id="id" name="id">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="name"
                                    name="name"
                                    autocomplete="off"
                                    aria-describedby="namaHelp">
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input
                                    type="file"
                                    class="form-control"
                                    id="image"
                                    name="image"
                                    autocomplete="off"
                                    aria-describedby="imageHelp">
                            </div>
                            <div class="form-group">
                                <label for="stock">Stock</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="stock"
                                    name="stock"
                                    autocomplete="off"
                                    aria-describedby="stockHelp">
                            </div>
                            <div class="form-group">
                                <label for="desc">Description</label>
                                <input
                                    type="textarea"
                                    class="form-control"
                                    id="desc"
                                    name="desc"
                                    autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="price"
                                    name="price"
                                    autocomplete="off">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button id="Close" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>

        

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
    <script>
        $(document).on('click','#updateModal',function(){
         $('#updateModal').modal("show"); // open the modal
      });

      $(document).on('click','#Close',function(){
          window.location = "admin.php";
      });
    </script>
</html>