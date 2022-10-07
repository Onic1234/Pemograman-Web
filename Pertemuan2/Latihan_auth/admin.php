<?php
session_start();
if(!isset($_SESSION['username'])){
    header('Location:login_page.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Admin Page</title>
</head>
<body>
<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#home" class="nav-link px-2 text-secondary">Home</a></li>
                <li><a href="#product" class="nav-link px-2 text-white">Product</a></li>
                <li><a href="#contact" class="nav-link px-2 text-white">Contact</a></li>
            </ul>

            <div class="logo" style="display: block; margin: auto;">
              <img src="img/logo.webp" style="width: 50px; height: 50px;">
            </div>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <input type="search" class="form-control form-control-dark" placeholder="Search..."
                    aria-label="Search">
            </form>
            <div class="text-end">
                <button type="button" class="btn btn-outline-light me-2">
                    <a href="logout.php" class="nav-link px-2 text-white">Log Out</a>
                </button>
            </div>
        </div>
    </div>
</header>
<div id="home">
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false" >
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item">
      <img src="img/slide1.jpeg" class="d-block w-100" weidth="1000px" height="700px">
      <div class="carousel-caption d-none d-md-block">
        <h5>Handphone</h5>
        <p>Penjualan Handphone Gaming terbaik ada di sini</p>
      </div>
    </div>
    <div class="carousel-item active">
      <img src="img/slide2.jpeg" class="d-block w-100" weidth="1000px" height="700px">
      <div class="carousel-caption d-none d-md-block">
        <h5>Attribut Handphone</h5>
        <p>Attribut Handphone terbaik ada di sini</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/slide3.jpeg" class="d-block w-100" weidth="1000px" height="700px">
      <div class="carousel-caption d-none d-md-block">
        <h5>Dapatkan Diskon Besan-besaran</h5>
        <p>Ayo buruan belanja dapatkan Diskon besar-besaran</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

<section class="py-5" id="product">
  <div class="container px-4 px-lg-5 mt-5">
      <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
          <div class="col mb-5">
              <div class="card h-100">
                  <!-- Sale badge-->
                  <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale
                  </div>
                  <!-- Product image-->
                  <img src="img/content1.jpg"
                      alt="...">
                  <!-- Product details-->
                  <div class="card-body p-4">
                      <div class="text-center">
                          <!-- Product name-->
                          <h5 class="fw-bolder">Skechers Go Run Elevate Ultimate Valor Men's Running Shoes - NAVY/BLUE</h5>
                          <!-- Product price-->
                          Rp899.000
                      </div>
                  </div>
                  <!-- Product actions-->
                  <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                      <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Beli</a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col mb-5">
              <div class="card h-100">
                  <!-- Sale badge-->
                  <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale
                  </div>
                  <!-- Product image-->
                  <img src="img/content2.jpg"
                      alt="...">
                  <!-- Product details-->
                  <div class="card-body p-4">
                      <div class="text-center">
                          <!-- Product name-->
                          <h5 class="fw-bolder">Skechers GOrun Elevate - Accelerate Men's Running Shoes - BLACK/GREY</h5>
                          <!-- Product reviews-->
                          <div class="d-flex justify-content-center small text-warning mb-2">
                              <div class="bi-star-fill"></div>
                              <div class="bi-star-fill"></div>
                              <div class="bi-star-fill"></div>
                              <div class="bi-star-fill"></div>
                              <div class="bi-star-fill"></div>
                          </div>
                          <!-- Product price-->
                          <span class="text-muted text-decoration-line-through"></span>
                          Rp899.000
                      </div>
                  </div>
                  <!-- Product actions-->
                  <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                      <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Beli</a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col mb-5">
              <div class="card h-100">
                  <!-- Sale badge-->
                  <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale
                  </div>
                  <!-- Product image-->
                  <img src="img/content3.webp"
                      alt="...">
                  <!-- Product details-->
                  <div class="card-body p-4">
                      <div class="text-center">
                          <!-- Product name-->
                          <h5 class="fw-bolder">SKECHERS SKECH-AIR ENVOY MEN'S FITNESS SHOES - BLACK</h5>
                          <!-- Product price-->
                          <span class="text-muted text-decoration-line-through"></span>
                          Rp1.299.000
                      </div>
                  </div>
                  <!-- Product actions-->
                  <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                      <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Beli</a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col mb-5">
              <div class="card h-100">
                  <!-- Sale badge-->
                  <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale
                  </div>
                  <!-- Product image-->
                  <img src="img/content4.webp"
                      alt="...">
                  <!-- Product details-->
                  <div class="card-body p-4">
                      <div class="text-center">
                          <!-- Product name-->
                          <h5 class="fw-bolder">SKECHERS GLIDE-STEP TRAIL MEN'S SNEAKERS SHOES - BLACK</h5>
                          <!-- Product reviews-->
                          <div class="d-flex justify-content-center small text-warning mb-2">
                              <div class="bi-star-fill"></div>
                              <div class="bi-star-fill"></div>
                              <div class="bi-star-fill"></div>
                              <div class="bi-star-fill"></div>
                              <div class="bi-star-fill"></div>
                          </div>
                          <!-- Product price-->
                          Rp1.299.000
                      </div>
                  </div>
                  <!-- Product actions-->
                  <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                      <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Beli</a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col mb-5">
            <div class="card h-100">
                <!-- Sale badge-->
                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale
                </div>
                <!-- Product image-->
                <img src="img/content5.webp"
                    alt="...">
                <!-- Product details-->
                <div class="card-body p-4">
                    <div class="text-center">
                        <!-- Product name-->
                        <h5 class="fw-bolder">Skechers Uno Women's Sneakers - White</h5>
                        <!-- Product price-->
                        <span class="text-muted text-decoration-line-through">Rp1.300.000</span>
                        Rp1.199.000
                    </div>
                </div>
                <!-- Product actions-->
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Beli</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mb-5">
            <div class="card h-100">
                <!-- Sale badge-->
                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale
                </div>
                <!-- Product image-->
                <img src="img/content6.webp"
                    alt="...">
                <!-- Product details-->
                <div class="card-body p-4">
                    <div class="text-center">
                        <!-- Product name-->
                        <h5 class="fw-bolder">Skechers ARCH FIT Women's Sneakers - Black</h5>
                        <!-- Product price-->
                        Rp1.199.000
                    </div>
                </div>
                <!-- Product actions-->
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Beli</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mb-5">
            <div class="card h-100">
                <!-- Sale badge-->
                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale
                </div>
                <!-- Product image-->
                <img src="img/content7.webp"
                    alt="...">
                <!-- Product details-->
                <div class="card-body p-4">
                    <div class="text-center">
                        <!-- Product name-->
                        <h5 class="fw-bolder">Skechers D'Lux Walker Women's Sneakers Shoes - NATURAL/PINK</h5>
                        <!-- Product reviews-->
                        <div class="d-flex justify-content-center small text-warning mb-2">
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                        </div>
                        <!-- Product price-->
                        <span class="text-muted text-decoration-line-through">Rp1.100.000</span>
                        Rp999.000
                    </div>
                </div>
                <!-- Product actions-->
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Beli</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mb-5">
            <div class="card h-100">
                <!-- Sale badge-->
                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale
                </div>
                <!-- Product image-->
                <img src="img/content8.webp"
                    alt="...">
                <!-- Product details-->
                <div class="card-body p-4">
                    <div class="text-center">
                        <!-- Product name-->
                        <h5 class="fw-bolder">Skechers GOrun Elevate - Quick Stride Women's Running Shoes - Mauve</h5>
                        <!-- Product reviews-->
                        <div class="d-flex justify-content-center small text-warning mb-2">
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                        </div>
                        <!-- Product price-->
                        Rp899.000
                    </div>
                </div>
                <!-- Product actions-->
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Beli</a>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <footer class="text-center text-lg-start bg-white text-muted">
                <!-- Section: Social media -->
                <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom" id="footer">
                    <!-- Left -->
                    <div class="me-5 d-none d-lg-block">
                        <span>Get connected with us on social networks:</span>
                    </div>
                    <!-- Left -->

                    <!-- Right -->
                    <div>
                        <a href="" class="me-4 link-secondary">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="" class="me-4 link-secondary">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="" class="me-4 link-secondary">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="" class="me-4 link-secondary">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="" class="me-4 link-secondary">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="" class="me-4 link-secondary">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                    <!-- Right -->
                </section>
                <!-- Section: Social media -->

                <!-- Section: Links  -->
                <section class="">
                    <div class="container text-center text-md-start mt-5">
                        <!-- Grid row -->
                        <div class="row mt-3">
                            <!-- Grid column -->
                            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                                <!-- Content -->
                                <h6 class="text-uppercase fw-bold mb-4">
                                    <i class="fas fa-gem me-3 text-secondary"></i>Company name
                                </h6>
                                <p>
                                    Here you can use rows and columns to organize your footer content. Lorem ipsum
                                    dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold mb-4">
                                    Products
                                </h6>
                                <p>
                                    <a href="#!" class="text-reset">Sepatu</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-reset">Murah</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-reset">Meriah</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-reset">Hehehe</a>
                                </p>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold mb-4">
                                    Useful links
                                </h6>
                                <p>
                                    <a href="#!" class="text-reset">Pricing</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-reset">Settings</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-reset">Orders</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-reset">Help</a>
                                </p>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                                <p><i class="fas fa-home me-3 text-secondary"></i> Bekonang, INA</p>
                                <p>
                                    <i class="fas fa-envelope me-3 text-secondary"></i>
                                    onicagustino@gmail.com
                                </p>
                                <p><i class="fas fa-phone me-3 text-secondary"></i> +62 8909 6789 5678</p>
                                <p><i class="fas fa-print me-3 text-secondary"></i> +62 8567 2123 4567</p>
                            </div>
                            <!-- Grid column -->
                        </div>
                        <!-- Grid row -->
                    </div>
                </section>
                <!-- Section: Links  -->

                <!-- Copyright -->
                <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
                    © 2022 Copyright:
                    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Onic Agustino</a>
                </div>
                <!-- Copyright -->
            </footer>
            <!-- Footer -->

  </div>

</section>
</body>
</html>