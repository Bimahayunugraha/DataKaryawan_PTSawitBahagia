<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<link
			href="https://fonts.googleapis.com/css?family=Poppins:400,500&display=swap"
			rel="stylesheet"
		/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
		<link rel="stylesheet" href="style2.css">
        <link rel="icon" href="img/landing-page.svg">
		<title>Landing Page</title>
	</head>
	<body class="body-landing">
		<header class="l-header">
		    <nav class="nav-landing bd-grid">
                <div>
                    <a href="#" class="nav__logo">PT Sawit Bahagia</a>
                </div>
                
                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <div class="nav__close" id="nav-close">
                        <i class='bx bx-x'></i>
                    </div>

                    <ul class="nav-landing__list">
                        <li class="nav-landing__item"><a href="home" class="nav-landing__link active-landing">Home</a></li>
                        <li class="nav-landing__item"><a href="about" class="nav-landing__link">About</a></li>
                        <li class="nav-landing__item"><a href="login.php" class="nav-landing__link">Login</a></li>
                    </ul>
                </div>
            </nav>
		</header>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home" id="home">
                <div class="home__container bd-grid">
                    <div class="home__img">
                        <img src="img/logo.png" alt="" data-speed="-2" class="move">
                      
                    </div>

                    <div class="home__data">
                        <h1 class="home__title">PT Sawit Bahagia</h1>
                        <p class="home__description">Membuka job manager untuk programmer <br> perusahaan maju.</p>
                        <a href="login.php" class="home__button">Get Started</a>
                    </div>
                </div>
            </section>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
        <script src="landing.js"></script>
	</body>
</html>