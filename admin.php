<?php 
//memulai session yang disimpan pada browser
session_start();

//cek apakah sesuai status sudah login? kalau belum akan kembali ke form login
if($_SESSION['status']!="sudah_login"){
//melakukan pengalihan
header("location:login.php");
} 
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <!--========== BOX ICONS ==========-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
        <link rel="icon" href="img/home.svg">
        <link rel="stylesheet" href="style2.css">
        <link rel="stylesheet" href="admin.css">
        <title>Admin Home</title>
    </head>
    <body class="body-home">
        <!--========== HEADER ==========-->
        <header class="header-home">
            <div class="header-home__container">
                <img src="img/logopt.png" alt="" class="header__img">

                <a href="#" class="header__logo">Welcome, <?php echo $_SESSION['username']; ?></a>
    
                <div class="header__search">
                    <input type="search" placeholder="Search" class="header__input">
                    <i class='bx bx-search header__icon'></i>
                </div>
                <div class="header__toggle">
                    <i class='bx bx-menu' id="header-toggle"></i>
                </div>
            </div>
        </header>

        <!--========== NAV ==========-->
        <div class="nav-home" id="navbar">
            <nav class="nav-home__container">
                <div>
                    <a href="#" class="nav-home__link nav-home__logo">
                        <i class='bx bxl-stripe nav__icon' ></i>
                        <span class="nav__logo-name">PTSawitBahagia</span>
                    </a>
    
                    <div class="nav-home__list">
                        <div class="nav-home__items">
                            <h3 class="nav__subtitle">Profile</h3>
    
                            <a href="admin.php" class="nav-home__link active-home">
                                <i class='bx bx-home nav__icon' ></i>
                                <span class="nav__name">Home</span>
                            </a>                    
                        </div>
    
                        <div class="nav-home__items">
                            <h3 class="nav__subtitle">Menu</h3>
    
                            <div class="nav__dropdown">
                                <a href="#" class="nav-home__link">
                                    <i class='bx bx-data nav__icon' ></i>
                                    <span class="nav__name">Employee Data</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="employee.php" class="nav__dropdown-item">Employee Data</a> 
                                    </div>
                                </div>
                            </div>
                            <div class="nav-home__items">
                                <div class="nav-home__link">
                                    <i class='bx bx-moon nav__icon' id="theme-button"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="logout.php" class="nav-home__link nav__logout">
                    <i class='bx bx-log-out nav__icon' ></i>
                    <span class="nav__name">Log Out</span>
                </a>
            </nav>
        </div>
        
         <!--========== CONTENTS ==========-->
            <!--========== SCROLL TOP ==========-->
            <a href="#" class="scrolltop" id="scroll-top">
                    <i class='bx bx-chevron-up scrolltop__icon'></i>
            </a>

            <main class="l-main">
            <section class="home" id="home">
                <div class="home__container bd-container bd-grid">
                    <div class="home__data">
                        <h1 class="home__title">PT Sawit Bahagia</h1>
                        <h2 class="home__subtitle">We are a company engaged in  <br> website programming.</h2>
                    </div>
    
                    <img src="img/logo.png" alt="" class="home-admin__img">
                </div>
            </section>
            </main>
                <!--========== FOOTER ==========-->
                <footer class="footer section bd-container">
                    <div class="footer__container bd-grid">
                        <div class="footer__content">
                            <a href="#" class="footer__logo">Company</a>
                            <span class="footer__description">PT Sawit Bahagia</span>
                            <div>
                                <a href="#" class="footer__social"><i class='bx bxl-facebook'></i></a>
                                <a href="#" class="footer__social"><i class='bx bxl-instagram'></i></a>
                                <a href="#" class="footer__social"><i class='bx bxl-twitter'></i></a>
                                <a href="#" class="footer__social"><i class='bx bxl-whatsapp'></i></a>
                            </div>
                        </div>

                        <div class="footer__content">
                            <h3 class="footer__title">Information</h3>
                            <ul>
                                <li><a href="#" class="footer__link">Job Application</a></li>
                                <li><a href="#" class="footer__link">Contact us</a></li>
                                <li><a href="#" class="footer__link">Privacy policy</a></li>
                                <li><a href="#" class="footer__link">Terms of services</a></li>
                            </ul>
                        </div>

                        <div class="footer__content">
                            <h3 class="footer__title">Adress</h3>
                            <ul>
                                <li>Kalimantan</li>
                                <li>Jln Cinderawasih</li>
                                <li>081789071672</li>
                                <li>ptsawitbahagia@email.com</li>
                            </ul>
                        </div>
                    </div>

                    <p class="footer__copy">&#169; 2021 BIMA HAYU NUGRAHA. All Right Reserved</p>
                </footer>

        <!--========== JS ==========-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://unpkg.com/scrollreveal"></script>
        <script src="home.js"></script>

        <script>
        $(document).ready(function() {
            $('#tabelKaryawan').DataTable();
        } );
         </script>

    </body>
</html>
