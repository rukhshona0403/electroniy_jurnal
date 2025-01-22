
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
                    <h1 class="text-primary">Журнали электронӣ</h1>
                    <a href="<?=base_url()?> <img src="img/logo.png" alt="Logo"> 
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="http://localhost/jurnal/index.php/asosi2" class="nav-item nav-link">Асосӣ</a>
                        <div class="nav-item dropdown active">
                            <a href="" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Саҳифаи омӯзгор</a>
                            <div class="dropdown-menu m-0">
                                <a href="http://localhost/jurnal/index.php/davomot" class="dropdown-item">Варақаи давомот</a>
                                <a href="http://localhost/jurnal/index.php/baho" class="dropdown-item">Варақаи баҳо</a>
                                <a href="http://localhost/jurnal/index.php/q_mavzu" class="dropdown-item">Қайди мавзӯъ</a>
                                <a href="http://localhost/jurnal/index.php/m_xonanda" class="dropdown-item">Маълумот хонандагон</a>
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
                    <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Саҳифаи омӯзгор</h4>
                    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                        <li class="breadcrumb-item"><a href="http://localhost/jurnal">Асосӣ</a></li>
                        <li class="breadcrumb-item"><a href="#">Саҳифаи омӯзгор</a></li>
                       
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
