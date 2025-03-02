

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Home Page</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ asset('assetss/css/bootstrap.min.css') }}">
      <!-- style css -->
      <link rel="stylesheet" href="{{ asset('assetss/css/style.css') }}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('assetss/css/responsive.css') }}">
      <!-- fevicon -->
      <link rel="icon" href="{{ asset('assetss/images/fevicon.png') }}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset('assetss/css/jquery.mCustomScrollbar.min.css') }}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="{{ asset('assetss/https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css') }}">
      <link rel="stylesheet" href="{{ asset('assetss/https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css') }}" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{ asset('assetss/images/loading.gif') }}" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="{{ asset('assetss/images/aplo3.png')}}" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 @if (Route::has('login'))
                                 @auth
                                 <a class="nav-link" href="/">{{ Auth::user()->name}}</a>
                                 @else
                                 <li class="nav-item d_none">
                                 <a class="nav-link" href="/login">Login</a>
                                 @if (Route::has('register'))
                                 <li class="nav-item d_none">
                                 <a class="nav-link" href="/register">Register</a>
                                 @endif
                              </li>
                              @endauth
                                 @endif
                              </li>
                              <li class="nav-item d_none">
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div id="banner1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <span>Selamat Datang</span>
                                 <h1>Aplikasi Lelang Online</h1>
                                 <p>There are so many items that we will be auctioning off! Don't miss out!!!</p>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure><img src="{{ asset('assetss/images/pct.png') }}" alt="#"/></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
            </a>
            <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </a>
         </div>
      </section>
      <!-- end banner -->
      <!-- three_box -->
      <div class="three_box">
         
      </div>
      <!-- three_box -->
      <!-- products -->
      <div  class="products">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our Products</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="our_products">
                     <div class="row">
                        <div class="col-md-4 margin_bottom1">
                           <div class="product_box">
                              <figure><img src="{{ asset('assetss/images/laptop.png') }}" alt="#"/></figure>
                              <h3>Electronic</h3>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="product_box">
                              <figure><img src="{{ asset('assetss/images/heels.png')}}" alt="#"/></figure>
                              <h3>Fashion</h3>
                           </div>
                        </div>
                        <div class="col-md-4 margin_bottom1">
                           <div class="product_box">
                              <figure><img src="{{ asset('assetss/images/rumah.jpg')}}" alt="#"/></figure>
                              <h3>House</h3>
                           </div>
                        </div>
                        <div class="col-md-4 margin_bottom1">
                           <div class="product_box">
                              <figure><img src="{{ asset('assetss/images/parfum.png')}}" alt="#"/></figure>
                              <h3>Beauty</h3>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="product_box">
                              <figure><img src="{{ asset('assetss/images/motor.png')}}" alt="#"/></figure>
                              <h3>Transpor</h3>
                           </div>
                        </div>
                        <div class="col-md-4 margin_bottom1">
                           <div class="product_box">
                              <figure><img src="{{ asset('assetss/images/doll.png') }}" alt="#"/></figure>
                              <h3>Lainnya</h3>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <a class="read_more" href="#">See More</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end products -->

      
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <img class="logo1" src="{{ asset('assetss/images/aplo3.png') }}" alt="#"/>
                     <ul class="social_icon">
                        <!-- <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li> -->
                        <!-- <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li> -->
                        <li><a href="https://www.linkedin.com/in/yesica-putri-purba-538513252"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                        <li><a href="https://instagram.com/yesicaputr18?igshid=YmJhNjkzNzY="><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <h3>About Us</h3>
                     <ul class="about_us">
                        <li>SMKN 1 Karawang<br> Rekayasa Perangkat Lunak <br>3 <br> Yesica Putri Purba</li>
                     </ul>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <h3>Contact Us</h3>
                     <ul class="conta">
                        <li>Jl. Pangkal Perjuangan, RT.05/RW.04,  <br> Tanjungpura, Kec. Karawang Barat, <br>Kab. Karawang, Jawa Barat<br></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2019 All Rights Reserved. Design by<a href="https://html.design/"> Free Html Templates</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="{{ asset('assetss/js/jquery.min.js') }}"></script>
      <script src="{{ asset('assetss/js/popper.min.js') }}"></script>
      <script src="{{ asset('assetss/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('assetss/js/jquery-3.0.0.min.js') }}"></script>
      <!-- sidebar -->
      <script src="{{ asset('assetss/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="{{ asset('assetss/js/custom.js') }}"></script>
   </body>
</html>

