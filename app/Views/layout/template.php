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
    <title>Piala Menpora 2021</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="/images/logo.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="/images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header-top">
            <div class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                            <div class="full">
                                <div class="center-desk">
                                    <div class="logo">
                                        <a href="/" style="font-size: 11pt;"><img src="/images/logo.png" width="100px" height="100px" alt="#" />Piala Menpora 2021</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                            <div class="menu-area">
                                <div class="limit-box">
                                    <nav class="main-menu">
                                        <ul class="menu-area-main">
                                            <li class="active"> <a href="/">Home</a> </li>
                                            <li> <a href="#news">News</a> </li>
                                            <li> <a href="#games">Gallery</a> </li>
                                            <li> <a href="#ourteam">Team</a> </li>
                                            <li> <a href="#contacus">Contact us</a> </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end header inner -->
            <!-- end header -->
            <section class="slider_section">
                <div id="myCarousel" class="carousel slide banner_main" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">

                            <div class="container">
                                <div class="carousel-caption">
                                    <div class="row d_flex">
                                        <div class="col-md-4">
                                            <div class="text-bg">
                                                <h1>Persija Juara</h1>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="text-img">
                                                <figure><img src="/images/img.png" width="300px" /></figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">

                            <div class="container">
                                <div class="carousel-caption">
                                    <div class="row d_flex">
                                        <div class="col-md-4">
                                            <div class="text-bg">
                                                <h1>Pemain Terbaik</h1>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="text-img">
                                                <figure><img src="/images/img2.png" width="433px" /></figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">

                            <div class="container">
                                <div class="carousel-caption">
                                    <div class="row d_flex">
                                        <div class="col-md-4">
                                            <div class="text-bg">
                                                <h1>Liga 1</h1>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="text-img">
                                                <figure><img src="/images/img3.png" width="510px" /></figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </section>
        </div>
    </header>

    <?= $this->renderSection('content'); ?>

    <!--  footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>© 2021 All Rights Reserved. <a href="https://instagram.com/reza_pradito">ZNV</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/jquery-3.0.0.min.js"></script>
    <script src="/js/plugin.js"></script>
    <!-- sidebar -->
    <script src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/js/custom.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

</body>

</html>