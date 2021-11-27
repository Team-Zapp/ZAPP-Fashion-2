<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link rel="shortcut icon" href="Logo 2.png" type="image/x-icon" />

  <script src="jquery.js"></script>
  <script src="script.js" defer></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css"
    />
    <script src="https://use.fontawesome.com/9108902538.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  <title>Zapp Fashion</title>
</head>

<body>
  <!-- zayar -->
  <script>
    let UserID = <?php echo $_GET["id"] ?>
  </script>
  <!-- zayar -->

  <div class="header">
    <div class="bg-white py-3 head">
      <img src="LogoSample_ByTailorBrands.png" alt="" class="logo" href="#"/>
      <div class="titles">
        <span class="name homebtn">HOME</span>
        <span class="name manbtn">MEN</span>
        <span class="name womanbtn">WOMEN</span>
        <span class="name kidbtn">KID</span>
        
 
        <button class="btn btn-outline-warning user" type="submit" id="feedback">
          <a href="" id="feedbackform">
            <p class="User">FeedBack</p>
          </a>
        </button>
      </div>
    </div>
    
    <!--FixedBar Start-->
    <div class="FixedBar">
      <nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark ulclass">
        <div class="container topmenu2">
          <a class="navbar-brand tag" href="#">HOME</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="main_nav">
            <ul class="navbar-nav mx-auto">
              <a class="nav-link mx-5 h-atuo fs-4" href="#scrollspyHeading1" id="shirt">
                Shirt
              </a>
              <a class="nav-link mx-5 h-atuo fs-4" href="#scrollspyHeading2" id="pants">
                Pants
              </a>
              <a class="nav-link mx-5 h-atuo fs-4" href="#scrollspyHeading3" id="shoe">
                Shoes
              </a>
            </ul>
          </div>
          <div id="cart-alert-parent" class="container d-flex justify-content-center">
              <div id="cart-alert" class="alert alert-success addtocart" role="alert">
                Add to Your Cart!
              </div>
            </div>
            <ul class="navbar-nav" >
              <li class="nav-item">
                <div id="cart-button" class="nav-link" data-toggle="modal" data-target="#exampleModal">
                          <button class="btn btn-outline-warning cart" type="submit">
                        <ion-icon name="cart-outline" class="Cart"></ion-icon>
                        <span id="cart-total-page" class="badge badge-pill badge-danger">0</span></button>
                </div>
              </li>
            </ul>
    
            <button class="btn btn-outline-warning profile" type="submit" >
        <ion-icon name="person-outline" class="User1"></ion-icon>
        </button>
        <div class="userprofile">

            <img src="userprofile.png" alt="" class="userpic" id="userpic">
            <p class="usernames" id="profilenames"></p>
            <p class="usernames" id="profileemailaddress"></p>
            <button class="logout" id="logout"><a href="../Admin/LoginForm/login.php" class="logout1">Logout</a></button>

        </div>
          <!-- navbar-collapse.// -->
        </div>
        <!-- container-fluid.// -->
      </nav>
    </div>
    <!--FixedBar END-->
  </div>

  <!-- Home Start -->
  <div class="Home">
            <div class="slider homeslide" id="scrollspyHeadinghome">
                <div class="homemainslide homeslide">
                    <!-- slider start -->
                    <div class="fnc-slider example-slider">
                        <div class="fnc-slider__slides">
                            <!-- slide start -->
                            <div class="fnc-slide m--blend-green m--active-slide">
                                <div class="fnc-slide__inner">
                                    <div class="fnc-slide__mask">
                                        <div class="fnc-slide__mask-inner"></div>
                                    </div>
                                    <div class="fnc-slide__content">
                                        <h2 class="fnc-slide__heading">
                                            <div class="fnc-slide__heading-line">
                                                <span>New </span>
                                            </div>
                                            <div class="fnc-slide__heading-line">
                                                <span>Normal</span>
                                            </div>
                                        </h2>
                                        <button type="button" class="fnc-slide__action-btn">
                                            <a href="#aboutuswords">About Us

                                                <span data-text="About Us">About Us</span></a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- slide end -->
                            <!-- slide start -->
                            <div class="fnc-slide m--blend-dark">
                                <div class="fnc-slide__inner">
                                    <div class="fnc-slide__mask">
                                        <div class="fnc-slide__mask-inner"></div>
                                    </div>
                                    <div class="fnc-slide__content">
                                        <h2 class="fnc-slide__heading">
                                            <div class="fnc-slide__heading-line">
                                                <span>New</span>
                                            </div>
                                            <div class="fnc-slide__heading-line">
                                                <span>Designs</span>
                                            </div>
                                        </h2>
                                        <button type="button" class="fnc-slide__action-btn">
                                            <a href="#aboutuswords">About Us

                                                <span data-text="About Us">About Us</span></a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- slide end -->
                            <!-- slide start -->
                            <div class="fnc-slide m--blend-red">
                                <div class="fnc-slide__inner">
                                    <div class="fnc-slide__mask">
                                        <div class="fnc-slide__mask-inner"></div>
                                    </div>
                                    <div class="fnc-slide__content">
                                        <h2 class="fnc-slide__heading">
                                            <div class="fnc-slide__heading-line">
                                                <span>Fresh</span>
                                            </div>
                                            <div class="fnc-slide__heading-line">
                                                <span>Night Out</span>
                                            </div>
                                        </h2>
                                        <button type="button" class="fnc-slide__action-btn">
                                            <a href="#aboutuswords">About Us

                                                <span data-text="About Us">About Us</span></a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- slide end -->
                            <!-- slide start -->
                            <div class="fnc-slide m--blend-blue">
                                <div class="fnc-slide__inner">
                                    <div class="fnc-slide__mask">
                                        <div class="fnc-slide__mask-inner"></div>
                                    </div>
                                    <div class="fnc-slide__content">
                                        <h2 class="fnc-slide__heading">
                                            <div class="fnc-slide__heading-line">
                                                <span>Not Only</span>
                                            </div>
                                            <div class="fnc-slide__heading-line">
                                                <span>Adault</span>
                                            </div>
                                        </h2>
                                        <button type="button" class="fnc-slide__action-btn"><a
                                                href="#aboutuswords">About Us

                                                <span data-text="About Us">About Us</span></a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- slide end -->
                        </div>
                        <nav class="fnc-nav">
                            <div class="fnc-nav__bgs">
                                <div class="fnc-nav__bg m--navbg-green m--active-nav-bg"></div>
                                <div class="fnc-nav__bg m--navbg-dark"></div>
                                <div class="fnc-nav__bg m--navbg-red"></div>
                                <div class="fnc-nav__bg m--navbg-blue"></div>
                            </div>
                            <div class="fnc-nav__controls">
                                <button class="fnc-nav__control">
                                    New Normal
                                    <span class="fnc-nav__control-progress"></span>
                                </button>
                                <button class="fnc-nav__control">
                                    New Designs
                                    <span class="fnc-nav__control-progress"></span>
                                </button>
                                <button class="fnc-nav__control">
                                    Fresh Night Out
                                    <span class="fnc-nav__control-progress"></span>
                                </button>
                                <button class="fnc-nav__control">
                                    Not only Adault
                                    <span class="fnc-nav__control-progress"></span>
                                </button>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- home words -->
            <div class="homewords" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                <h3 class="homehead">Clothing & Shoes</h3>
                <p class="homep">As a creator, you look for ways to excel and express yourself when and where you
                    can, from
                    reaching for that last rep to evolving your streetwear style. Log miles or tear down the
                    baseline in
                    shoes with responsive cushioning. Rep an athletic style off the field in lifestyle apparel born
                    of sport
                    heritage. From athletes to streetwear enthusiasts, zapp clothing and shoes exist to let you go
                    harder,
                    dig deeper, and get the most out of yourself, from the pitch to the street to the road less
                    traveled.
                </p>
            </div>
            <!-- Home slider -->
            <div class=" hmslider1">
                <div class="card hmcard2" style="width: 30vw;" data-aos="fade-right" data-aos-easing="linear"
                    data-aos-duration="700">
                    <img src="dave-goudreau-rsphsaAROz0-unsplash.jpg" class="card-img-top" alt="...">
                    <div class="card-body hmslide1body">
                        <a href="#" class="btn btn-primary hmslidebt" id="hmbtn1">Shop Now</a>
                    </div>
                </div>
                <div class="homeslider1_text" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                    <p>What you wear is how you present yourself to the world, especially today, when human contacts
                        are so quick. Fashion is instant language.</p>
                    <p class="quotewr1">—Miuccia Prada</p>
                </div>
            </div>

            <div class=" hmslider2">
                <div class="homeslider2_text" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                    <p>Whoever said that money can't buy happiness, simply didn't know where to go shopping.</p>
                    <p class="quotewr2">—Bo Derek</p>
                </div>
                <div class="card hmcard2" style="width: 30vw;" data-aos="fade-left" data-aos-easing="linear"
                    data-aos-duration="700">
                    <img src="homeslide2.jpg" class="card-img-top hmcard2" alt="...">
                    <div class="card-body hmslide2body">
                        <a href="#" class="btn btn-primary hmslidebt" id="hmbtn2">Shop Now</a>
                    </div>
                </div>
            </div>

            <div class="aboutuswords" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000"
                id="aboutuswords">
                <h3 class="homehead">About Us</h3>
                <p class="homep">
                    Welcome to <b>ZAPP</b>, your number one source for all Shirts, Pants & Shoes.
                    We're dedicated to giving you the very best of products, with a focus on three characteristics,
                    dependability, customer service and uniqueness.
                    Founded in [2021] by Zar,Zay,Phuu & Zaw. <b>ZAPP</b> has come a long way from its beginnings in a
                    Yanong home office. When we first started out,
                    we passion for providing the
                    best trending equipment for all customers. We now
                    serve customers all over the Myanmar area, and are thrilled to be a part
                    of the eco-friendly wing of the fashion industry.
                </p>
                <p class="homep">
                    We hope you enjoy our products as much as we enjoy offering them to you. If you have any questions
                    or
                    comments, please don't hesitate to contact us.
                </p>
            </div>
        </div>
  <!--Home End -->
  <div class="Men">
    <div class="feature">
      <h2 class="fs-2 fw-bold fst-italic">Feature</h2>
    </div>
    <div class="cards1">
      <!-- Card start-->
      <div class="trending">
        <h2 class="mb-3 fs-2 fw-bold fst-italic">Trending</h2>
      </div>
      <div class="slider">
      <div class="container">
        <!--Expanding Card start-->
        <div class="panel active" style="
              background-image: url('men slider 5.jpg');
            ">
          <h3>Explore the World</h3>
        </div>
        <div class="panel" style="
              background-image: url('men slider 4.jpg');
            ">
          <h3>Get Paid</h3>
        </div>
        <div class="panel" style="
              background-image: url('men slider 3.jpg');
            ">
          <h3>Workout</h3>
        </div>
        <div class="panel" style="
              background-image: url('men slider1.jpg');
            ">
          <h3>Be Better</h3>
        </div>
        <div class="panel" style="
              background-image: url('men slider 2.jpg');
            ">
          <h3>Care</h3>
        </div>
      </div>
      <!--Expanding Card End-->
    </div>
    </div>
    <!-- Card End-->
    <!-- Nslidercard 1 start-->
    <div class="nslidecard mshirt">
      <section class="pt-5 pb-5">
        <div class="container">
          <div class="row">
            <div class="col-6 " data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
              <h3 class="mb-3 fs-2 fw-bold fst-italic" id="scrollspyHeading1">Shirts</h3>
            </div>
            <div class="col-6 text-right d-flex justify-content-end mshirtbtn">
              <div class="p-2">
                <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-bs-slide="prev">
                  <i class="fa fa-arrow-left"></i>
                </a>
              </div>
              <div class="p-2">
                <a class="btn btn-primary mb-3" href="#carouselExampleIndicators2" role="button" data-bs-slide="next">
                  <i class="fa fa-arrow-right"></i>
                </a>
              </div>
            </div>
            <div class="col-12">
              <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" id="MenShirt">
            
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- Parallx Card End-->
    <!-- Nslidecard 2 Start -->
    <div class="nslidecard mpant">
      <section class="pt-5 pb-5">
        <div class="container">
          <div class="row">
            <div class="col-6 " data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
              <h3 class="mb-3 fs-2 fw-bold fst-italic" id="scrollspyHeading2">Pants</h3>
            </div>
            <div class="col-6 text-right d-flex justify-content-end mpantbtn">
              <div class="p-2">
                <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators4" role="button" data-bs-slide="prev">
                  <i class="fa fa-arrow-left"></i>
                </a>
              </div>
              <div class="p-2">
                <a class="btn btn-primary mb-3" href="#carouselExampleIndicators4" role="button" data-bs-slide="next">
                  <i class="fa fa-arrow-right"></i>
                </a>
              </div>
            </div>
            <div class="col-12">
              <div id="carouselExampleIndicators4" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" id="MenPant">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- Parallx Card 2 End -->
    <!-- Parallx Card 3 Start -->
    <div class="nslidecard mshoe">
      <section class="pt-5 pb-5">
        <div class="container slcontainer">
          <div class="row">
            <div class="col-6 " data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
              <h3 class="mb-3 fs-2 fw-bold fst-italic" id="scrollspyHeading3">Shoes</h3>
            </div>
            <div class="col-6 text-right d-flex justify-content-end mshoebtn">
              <div class="p-2">
                <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators5" role="button" data-bs-slide="prev">
                  <i class="fa fa-arrow-left"></i>
                </a>
              </div>
              <div class="p-2">
                <a class="btn btn-primary mb-3" href="#carouselExampleIndicators5" role="button" data-bs-slide="next">
                  <i class="fa fa-arrow-right"></i>
                </a>
              </div>
            </div>
            <div class="col-12">
              <div id="carouselExampleIndicators5" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" id="MenShoe">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- Parallx Card 3 End -->
  </div>
  <!-- Women Start -->
  <div class="Women">
    <div class="feature">
      <h2 class="fs-2 fw-bold fst-italic">Feature</h2>
    </div>
    <div class="cards1">
      <!-- Card start-->
      <div class="trending">
        <h2 class="fs-2 fw-bold fst-italic">Trending</h2>
      </div>
      <div class="slider">
      <div class="container">
        <!--Expanding Card start-->
        <div class="panel active" style="
              background-image: url('burgess-milner-OYYE4g-I5ZQ-unsplash.jpg');
            ">
          <h3>Explore the World</h3>
        </div>
        <div class="panel" style="
              background-image: url('women slider 1.jpg');
            ">
          <h3>Get Paid</h3>
        </div>
        <div class="panel" style="
              background-image: url('women slider 2.jpg');
            ">
          <h3>Workout</h3>
        </div>
        <div class="panel" style="
              background-image: url('women slider 3.jpg');
            ">
          <h3>Be Better</h3>
        </div>
        <div class="panel" style="
              background-image: url('women slider 4.jpg');
            ">
          <h3>Care</h3>
        </div>
      </div>
      <!--Expanding Card End-->
    </div>
    </div>
    <!-- Card End-->
    <!-- Wshirt Card start-->
    <div class="nslidecard wshirt">
      <section class="pt-5 pb-5">
        <div class="container">
          <div class="row">
            <div class="col-6 " data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
              <h3 class="mb-3 fs-2 fw-bold fst-italic" id="scrollspyHeading4">Shirts</h3>
            </div>
            <div class="col-6 text-right d-flex justify-content-end wshirtbtn">
              <div class="p-2">
                <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators6" role="button" data-bs-slide="prev">
                  <i class="fa fa-arrow-left"></i>
                </a>
              </div>
              <div class="p-2">
                <a class="btn btn-primary mb-3" href="#carouselExampleIndicators6" role="button" data-bs-slide="next">
                  <i class="fa fa-arrow-right"></i>
                </a>
              </div>
            </div>
            <div class="col-12">
              <div id="carouselExampleIndicators6" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" id="WomenShirt">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- Wshirt Card End-->
    <!-- Parallx Card 2 Start -->
    <div class="nslidecard wpant">
      <section class="pt-5 pb-5">
        <div class="container">
          <div class="row">
            <div class="col-6 " data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
              <h3 class="mb-3 fs-2 fw-bold fst-italic" id="scrollspyHeading5">Pants</h3>
            </div>
            <div class="col-6 text-right d-flex justify-content-end wpantbtn">
              <div class="p-2">
                <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators7" role="button" data-bs-slide="prev">
                  <i class="fa fa-arrow-left"></i>
                </a>
              </div>
              <div class="p-2">
                <a class="btn btn-primary mb-3" href="#carouselExampleIndicators7" role="button" data-bs-slide="next">
                  <i class="fa fa-arrow-right"></i>
                </a>
              </div>
            </div>
            <div class="col-12">
              <div id="carouselExampleIndicators7" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" id="WomenPant">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- Parallx Card 2 End -->
    <!-- Parallx Card 3 Start -->
    <div class="nslidecard wshoe">
      <section class="pt-5 pb-5">
        <div class="container">
          <div class="row">
            <div class="col-6 " data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
              <h3 class="mb-3 fs-2 fw-bold fst-italic" id="scrollspyHeading6">Shoes</h3>
            </div>
            <div class="col-6 text-right d-flex justify-content-end wshoebtn">
              <div class="p-2">
                <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators8" role="button" data-bs-slide="prev">
                  <i class="fa fa-arrow-left"></i>
                </a>
              </div>
              <div class="p-2">
                <a class="btn btn-primary mb-3" href="#carouselExampleIndicators8" role="button" data-bs-slide="next">
                  <i class="fa fa-arrow-right"></i>
                </a>
              </div>
            </div>
            <div class="col-12">
              <div id="carouselExampleIndicators8" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" id="WomenShoe">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- Parallx Card 3 End -->
  </div>
  <!-- Kid Start -->
  <div class="Kid">
    <div class="feature">
      <h2 class="fs-2 fw-bold fst-italic">Feature</h2>
    </div>
    <div class="cards1">
      <!-- Card start-->
      <div class="trending">
        <h2 class="fs-2 fw-bold fst-italic">Trending</h2>
      </div>
      <div class="slider">
      <div class="container">
        <!--Expanding Card start-->
        <div class="panel active" style="
              background-image: url('burgess-milner-OYYE4g-I5ZQ-unsplash.jpg');
            ">
          <h3>Explore the World</h3>
        </div>
        <div class="panel" style="
              background-image: url('women slider 1.jpg');
            ">
          <h3>Get Paid</h3>
        </div>
        <div class="panel" style="
              background-image: url('women slider 2.jpg');
            ">
          <h3>Workout</h3>
        </div>
        <div class="panel" style="
              background-image: url('women slider 3.jpg');
            ">
          <h3>Be Better</h3>
        </div>
        <div class="panel" style="
              background-image: url('women slider 4.jpg');
            ">
          <h3>Care</h3>
        </div>
      </div>
      <!--Expanding Card End-->
    </div>
    </div>
    <!-- Card End-->
    <!-- Parallx Card start-->
    <div class="nslidecard kshirt">
      <section class="pt-5 pb-5">
        <div class="container">
          <div class="row">
            <div class="col-6 " data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
              <h3 class="mb-3 fs-2 fw-bold fst-italic" id="scrollspyHeading7">Shirts</h3>
            </div>
            <div class="col-6 text-right d-flex justify-content-end kshirtbtn">
              <div class="p-2">
                <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators9" role="button" data-bs-slide="prev">
                  <i class="fa fa-arrow-left"></i>
                </a>
              </div>
              <div class="p-2">
                <a class="btn btn-primary mb-3" href="#carouselExampleIndicators9" role="button" data-bs-slide="next">
                  <i class="fa fa-arrow-right"></i>
                </a>
              </div>
            </div>
            <div class="col-12">
              <div id="carouselExampleIndicators9" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" id="Kidshirt">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- Parallx Card End-->
    <!-- Parallx Card 2 Start -->
    <div class="nslidecard kpant" >
      <section class="pt-5 pb-5">
        <div class="container">
          <div class="row">
            <div class="col-6 " data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
              <h3 class="mb-3 fs-2 fw-bold fst-italic" id="scrollspyHeading8">Pants</h3>
            </div>
            <div class="col-6 text-right d-flex justify-content-end kpantbtn">
              <div class="p-2">
                <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators11" role="button" data-bs-slide="prev">
                  <i class="fa fa-arrow-left"></i>
                </a>
              </div>
              <div class="p-2">
                <a class="btn btn-primary mb-3" href="#carouselExampleIndicators11" role="button" data-bs-slide="next">
                  <i class="fa fa-arrow-right"></i>
                </a>
              </div>
            </div>
            <div class="col-12">
              <div id="carouselExampleIndicators11" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" id="Kidpant">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- Parallx Card 2 End -->
    <!-- Parallx Card 3 Start -->
    <div class="nslidecard kshoe">
      <section class="pt-5 pb-5">
        <div class="container ">
          <div class="row">
            <div class="col-6" data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
              <h3 class="mb-3 fs-2 fw-bold fst-italic" id="scrollspyHeading9">Shoes</h3>
            </div>
            <div class="col-6 text-right d-flex justify-content-end kshoebtn">
              <div class="p-2">
                <a class="btn btn-primary mb-3 mr-1 " href="#carouselExampleIndicators12" role="button" data-bs-slide="prev">
                  <i class="fa fa-arrow-left"></i>
                </a>
              </div>
              <div class="p-2">
                <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators12" role="button" data-bs-slide="next">
                  <i class="fa fa-arrow-right"></i>
                </a>
              </div>
            </div>
            <div class="col-12">
              <div id="carouselExampleIndicators12" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" id="Kidshoe">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- Parallx Card 3 End -->
  </div>

  <!-- Footer Div -->
  <div class="footer">
    <div class="mardiv">
      <marquee behavior="" direction="right" height="40px" class=" text-danger fs-2" width="100%">
        <div class="mar">Thank You For Coming To Our Shop</div>
      </marquee>
    </div>
    <div class="bigroom">
    <div class="room">
    <h3 class="footerheadtext">Developed By</h3>
      <div class="pic1">
        <span class="admin1"><img src="zaw.png" alt="" class="admin"></span><span class="admin1"><img src="zayar1.jpg" alt="" class="admin2"></span>
      </div>
      <div class="adminname1">
        <span class="zaw">Zaw</span><span class="zay">Zay</span>
      </div>
      <div class="pic2">
      <span class="admin1"><img src="phuu.png" alt="" class="admin"></span><span class="admin1"><img src="Zarni.jpg" alt="" class="admin"></span>
      </div>
      <div class="adminname1">
        <span class="phu">Phuu</span><span class="zar">Zarni</span>
      </div>
    </div>
    <div class="room">
    <h3 class="footerheadtext">Contact Us</h3>
      <p class="footerinnertext">FAQ</p>
      <p class="footerinnertext">TERMS & CONDITIONS</p>
      <p class="footerinnertext">PRIVACY POLICY</p>
      <p class="footerinnertext">TOO LAZY TO ADD</p>
    </div>
    <div class="room2">
    <h3 class="footerheadtext">Connect With Us</h3>
    <div class="iconrow">
      <span class="icons"><ion-icon name="logo-facebook" class="socialicon"></ion-icon></span>
      <span class="icons"><ion-icon name="logo-instagram" class="socialicon"> </ion-icon></span>
      <span class="icons"><ion-icon name="logo-twitter" class="socialicon"></ion-icon></span>
      <span class="icons"><ion-icon name="logo-google" class="socialicon"></ion-icon></span>
      </div>
      <div class="mail"><ion-icon name="mail-outline" class="picon"></ion-icon><span class="footerinnertext1"><a href="mailto: ZAPP-Fashion@example.com" class="gmail">ZAPP-Fashion@gmail.com</a> </span></div>
      <div class="phone"><ion-icon name="call-outline" class="picon"></ion-icon><span class="footerinnertext1">+9545623423</span></div>
    </div>
    </div>
    <hr class="underline">
    <p class="copyright">
    Copyright © 2021 ZAPP-Fashion
    </p>
  </div>
  <!-- start of cart -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <div class="container d-flex text-center h5containerhh">
            <h5 class="row   modal-title">
              Your Shopping Cart
            </h5>
          </div>
          <button type="button" id="close" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div id="cart" class="modal-body">
          <!-- <div class="cart-item d-flex justify-content-between text-capitalize my-3">
            <img src="https://www.aalforum.eu/wp-content/uploads/2016/04/profile-placeholder.png" class="img-fluid rounded-circle" id="item-img" alt="">
            <div class="item-text">
              <p id="cart-item-title" class="font-weight-bold mb-0">Product</p>
              <span class="text-muted">NSN</span>
              <span id="cart-item-NSN" class="cart-item-NSN text-muted" class="mb-0">0000.00.0000.00</span>
            </div>
            <a class="cart-item-remove nav-link">
              X
            </a>
          </div> -->
           <!--end of  cart item -->
        </div>
        <!-- cart total -->
        <div class="
            cart-total-container
            d-flex
            justify-content-around
            text-capitalize
            mt-1
          ">
          <h5>
            <i class="fa fa-shopping-cart fa-2x"></i>
            <strong id="cart-total" class="badge badge-pill badge-danger">0</strong>
          </h5>
        </div>
        <div class="
            cart-total-container
            d-flex
            justify-content-center
            text-capitalize
            grandtotaldiv
          ">Grand Total : <span id="grandtotal" class="grandtotal">0$</span></div>
        <!--end cart total -->
        <div class="flex-contianer">
          <div class="d-flex align-items-start flex-column">
            <button type="button" id="btnContinue" class="btn btn-outline-secondary">CONTINUE
              SHOPPING</button>
          </div>
          
          <div class="d-flex align-items-end flex-column">
            <a href="#checkout"><button type="button" id="btnCheckout" class="btn btn-dark" disabled>Your Cart Is Empty</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end of cart -->
  <script>
    AOS.init();
  </script>
</body>

</html>