<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>jurnal.tj</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wdth,wght@0,75..100,300..800;1,75..100,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary"></i>Журнали электронӣ</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="http://localhost/jurnal/index.php/asosi2" class="nav-item nav-link">Асосӣ</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Саҳифаи омӯзгор</a>
                            <div class="dropdown-menu m-0">
                                <a href="http://localhost/jurnal/index.php/davomot" class="dropdown-item">Варақаи давомот</a>
                                <a href="http://localhost/jurnal/index.php/baho" class="dropdown-item">Варақаи баҳо</a>
                                <a href="http://localhost/jurnal/index.php/q_mavzu" class="dropdown-item">Қайди мавзӯъ</a>
                                <a href="http://localhost/jurnal/index.php/m_xonanda" class="dropdown-item">Маълумоти хонандагон</a>
                                <a href="http://localhost/jurnal/index.php/b_jam" class="dropdown-item">Баҳоҳои ҷамъбастӣ</a>
                            </div>
                        </div>
                        <a href="http://localhost/jurnal/mtmu.php" class="nav-item nav-link">МТМУ</a>
                        <a href="http://localhost/jurnal/jurnal.php" class="nav-item nav-link">Журнал</a>
                        <a href="http://localhost/jurnal/suroga.php" class="nav-item nav-link">Суроға</a>
                    </div>
                    <div class="d-none d-xl-flex me-3">
                        <div class="d-flex flex-column pe-3 border-end border-primary">
                        <span class="text-body">Maorif.tj</span>
                            <a href="tel:+992-227-76-86"><span class="text-primary">Телефон: +992-227-76-86</span></a>
                  </div>
                    </div>
                    </div>
            </nav>

            <!-- Header Start -->
            <div class="container-fluid bg-breadcrumb">
                <div class="container text-center py-5" style="max-width: 900px;">
                    <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Журнал</h4>
                    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                        <li class="breadcrumb-item"><a href="index.html">Асосӣ</a></li>
                        <li class="breadcrumb-item active text-primary">Журнал</li>
                    </ol>    
                </div>
            </div>
            <!-- Header End -->
        </div>
        <!-- Navbar & Hero End -->

        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h4 class="modal-title mb-0" id="exampleModalLabel">Search by keyword</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text btn border p-3"><i class="fa fa-search text-white"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->

        <!-- Contact Start -->
        <div class="container-fluid about overflow-hidden py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="about-img rounded h-100">
                    <img src="img/jurnal.jpg" class="img-fluid rounded h-100 w-100" style="object-fit: cover;" alt="">
                    <div class="about-exp"><span>Maktab.tj</span></div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                <div class="about-item">
                    <h4 class="text-primary text-uppercase">Журнали электроний </h4>
                   
                    <h4 class="mb-4">Бо тараққиёти технологияи иттилоотӣ ва рушди интернет, 
                        муассисаҳои таълимӣ бештар ба истифодаи журналҳои электронӣ рӯй меоранд. 
                        Ин усул на танҳо барои осон кардани раванди идоракунии маълумот, 
                        балки барои беҳтар кардани равишҳои таълимӣ низ муҳим аст.<p>
                        Истифодаи журналҳои электронӣ дар муассисаҳои таълимӣ на танҳо раванди таълимро осон мекунад, 
                        балки инчунин дар сифати омӯзиш ва дастрасии маълумот таъсири амиқ мерасонад. 
                        Барои беҳбудии ин усул, муҳим аст, ки ба баъзе тадбирҳо диққат дода шавад.</p>

                    
                    

</h4>
                   
                    
            </div>
        </div>
    </div>
</div>
        <!-- Contact End -->

        
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-body"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-body">
                        Designed By <a class="border-bottom text-white" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom text-white" href="https://themewagon.com">ThemeWagon</a>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-secondary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>

</html>