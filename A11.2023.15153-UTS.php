<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Valorant Website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="shortcut icon" href="https://wallpaperaccess.com/full/6192238.jpg" type="image/x-icon" />
</head>

<body>
    <!-- Navbar -->
    <nav id="navBg" class="navbar navbar-expand-lg bg-dark sticky-top">
        <div class="container">
            <h1 id="navLink" class="fw-bold display-4 text-sm-start text-danger fst-italic">Valorant</h1>
            <button class="navbar-toggler text-light" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span id="mobilebtn"><i class="bi bi-list h1"></i></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#article">Maps</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#schedule">schedule</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#aboutme">about me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="login.php">login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="logout.php">logout</a>
                    </li>
                    <li class="nav-item">
                        <button id="darkTheme" class="btn">
                            <i id="DTB" class="DTB nav-link bi bi-moon-fill rounded-circle text-light"></i>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button id="lightTheme" class="btn">
                            <i id="LTB" class="LTB nav-link bi bi-brightness-high-fill rounded-circle text-dark"></i>
                        </button>
                </ul>
            </div>
        </div>
    </nav>
    <!--  -->
    <!-- Hero Secttion -->
    <section id="hero" class="isi text-center p-5 bg-danger-subtle">
        <div class="container">
            <div class="d-sm-flex flex-sm-row-reverse align-items-center">
                <img src="https://wallpaperaccess.com/full/6192238.jpg" alt="default" class="img-fluid" width="600" />
                <div class="p-2">
                    <h6 class="text-sm-start">
                        <span id="tanggal"></span>
                        <span id="jam"></span>
                    </h6>
                    <h1 class="fw-bold display-4 text-sm-start fst-italic">Welcome to Valorant map list</h1>
                    <h4 class="lead display-6 text-sm-start fw-light">
                        List map yang ada di game Valorant
                    </h4>
                </div>
            </div>
        </div>
    </section>
    <!--  -->
    <!-- Article Secttion -->
    <!-- article begin -->

<!-- article end -->
                <!-- Card 2 -->
                <div class="col">
                    <div class="isiCard card h-100">
                        <img src="https://codigoesports.com/wp-content/uploads/2022/06/split-valorant-mapa-fecha.jpg"
                            class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Split</h5>
                            <p class="card-text">
                                If you want to go far, you’ll have to go up. A pair of sites split by an elevated center
                                allows for rapid movement using two rope ascenders. Each site is built with a looming
                                tower vital for control. Remember to watch above before it all blows sky-high.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col">
                    <div class="isiCard card h-100">
                        <img src="https://valorantinfo.gg/wp-content/uploads/2021/09/valorant-bind-map-loading-screen.jpg"
                            class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Bind</h5>
                            <p class="card-text">
                                Two sites. No middle. Gotta pick left or right. Whats it going to be then? Both offer
                                direct paths for attackers and a pair of one-way teleporters make it easier to flank.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col">
                    <div class="isiCard card h-100">
                        <img src="https://fineboosting.com/wp-content/uploads/2021/05/icebox-map.jpg"
                            class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Icebox</h5>
                            <p class="card-text">
                                Your next battleground is a secret Kingdom excavation site overtaken by the arctic. The
                                two plant sites protected by snow and metal require some horizontal finesse. Take
                                advantage of the ziplines and they ll never see you coming.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="col">
                    <div class="isiCard card h-100">
                        <img src="https://valorantinfo.gg/wp-content/uploads/2021/09/valorant-ascent-map-loading-screen.jpg"
                            class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Ascent</h5>
                            <p class="card-text">
                                An open playground for small wars of position and attrition divide two sites on Ascent.
                                Each site can be fortified by irreversible bomb doors; once they’re down, you’ll have to
                                destroy them or find another way. Yield as little territory as possible.
                            </p>
                        </div>

                    </div>
                </div>
                <!-- End of Card -->
            </div>
        </div>
    </section>
    <!--  -->
    <!-- Gallery Secttion -->
    <section id="gallery" class="isi text-center p-5 bg-danger-subtle">
        <div class="container">
            <h1 class="fw-bold display-4 pb-3">Gallery</h1>
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://wallpaperaccess.com/full/6192305.jpg" class="d-block w-100" alt="..." />
                    </div>
                    <div class="carousel-item">
                        <img src="https://wallpapercave.com/wp/wp8730532.jpg" class="d-block w-100" alt="..." />
                    </div>
                    <div class="carousel-item">
                        <img src="https://wallpaperaccess.com/full/6192298.jpg" class="d-block w-100" alt="..." />
                    </div>
                    <div class="carousel-item">
                        <img src="https://i.pinimg.com/originals/71/5c/26/715c26b9824fd92c4fd9c8fe070b149d.jpg"
                            class="d-block w-100" alt="..." />
                    </div>
                    <div class="carousel-item">
                        <img src="https://i.pinimg.com/originals/56/0c/ac/560cac504922c2ca81b51ef2dd05e92e.jpg"
                            class="d-block w-100" alt="..." />
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>
    </section>
    <section id="schedule" class="text-center">
        <div class="container p-5">
            <h1 class="navlink fw-bold display-6 pb-3">schedule</h1>
            <div class="row row-cols-1 row-cols-md-4 g-3 justify-content-center">
                <div class="col">
                    <div class="card h-100">
                        <div class="card-header bg-danger">
                            <h5 class="card-title text-white">SENIN</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                Etika profesi
                                <p>16.20-18.00 | H.4.4</p>
                            </li>
                            <li class="list-group-item">
                                sistem operasi
                                <p>18.30-21.00| H.4.8</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <div class="card-header bg-danger">
                            <h5 class="card-title text-white">SELASA</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                Pendidikan Kewarganegaraan
                                <p>12.30 - 13.10 | kulino</p>
                            </li>
                            <li class="list-group-item">
                                probabilitas dan statistik
                                <p>15.30-18.00 | h.4.9</p>
                            </li>
                            <li class="list-group-item">
                                kecerdasan buatan
                                <p>18.30-21.00 | H.4.11</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <div class="card-header bg-danger">
                            <h5 class="card-title text-white">RABU</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                management proyek teknologi informasi
                                <p>15.30-18.00 | H.4.6</p>
                            </li>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <div class="card-header bg-danger">
                            <h5 class="card-title text-white">KAMIS</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                Bahasa Indonesia
                                <p>12.30-14.10 |kulino </p>
                            </li>
                            <li class="list-group-item">
                                Pendidikan agama islam
                                <p>16.20-18.00 | kulino</p>
                            </li>
                            <li class="list-group-item">
                                penambangan data
                                <p>18.30-21.00 | H.4.9</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <div class="card-header bg-danger">
                            <h5 class="card-title text-white">JUMAT</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                Pemograman web lanjut
                                <p>10.20-12.00 |D.2.K </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <div class="card-header bg-danger">
                            <h5 class="card-title text-white">SABTU</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Free</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="aboutme" class="isi text-center p-5 bg-danger-subtle">
        <div class="container">
            <div class="d-lg-flex flex-md-row align-items-center justify-content-evenly">
                <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/9b3e97f2-7e29-44fe-80a9-cd068e923cc7/dduxd55-c9d14592-a876-45ef-b3df-5494462865b8.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzliM2U5N2YyLTdlMjktNDRmZS04MGE5LWNkMDY4ZTkyM2NjN1wvZGR1eGQ1NS1jOWQxNDU5Mi1hODc2LTQ1ZWYtYjNkZi01NDk0NDYyODY1YjgucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.J3igBWFcAFPoHl74B-ENo2GrhOpJxvDprPuNtTnz60Y"
                    alt="default" class="img-fluid rounded-circle" width="300" />
                <div class="p-2">
                    <p class="text-md-start">A11.2023.15153</p>
                    <h1 class="fw-bold display-4 text-md-start">Deni Anjas Rori Rilawan</h1>
                    <h5 class="lead text-md-start">Program Studi Teknik Informatika</h5>
                    <a href="https://dinus.ac.id/" class="text-md-start text-decoration-none text-black">
                        <h4 class="navlink">Universitas Dian Nuswantoro</h4>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
    <footer id="footer" class="text-center p-5 bg-body">
        <div>
            <a href="https://www.instagram.com/VALORANT/"><i class="bi bi-instagram h2 p-2 text-danger-subtle"></i></a>
            <a href="https://www.youtube.com/PlayValorant"><i class="bi bi-youtube h2 p-2 text-danger"></i></a>
        </div>
        <div>by : Deni anjas rori rilawan</div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script type="text/javascript">
        window.setTimeout("showTime()", 1000);

        function showTime() {
            var time = new Date();
            var month = time.getMonth() + 1;

            setTimeout("showTime()", 1000);
            document.getElementById("tanggal").innerHTML =
                time.getDate() + "/" + month + "/" + time.getFullYear();
            document.getElementById("jam").innerHTML =
                time.getHours() + ":" + time.getMinutes() + ":" + time.getSeconds();
        }
    </script>
    <script type="text/javascript">
        document.getElementById("darkTheme").onclick = function () {
            document.body.classList.add("bg-dark");

            document.getElementById("darkTheme").classList.remove("btn-dark");
            document.getElementById("DTB").classList.remove("text-light");
            document.getElementById("DTB").classList.add("text-dark");
            document.getElementById("LTB").classList.add("text-light");
            document.getElementById("LTB").classList.remove("text-dark");


            document.getElementById("mobilebtn").classList.add("text-light");

            const navLinka = document.getElementsByClassName("navlink");
            for (let i = 0; i < navLinka.length; i++) {
                navLinka[i].classList.remove("text-dark");
                navLinka[i].classList.add("text-light");
            }

            const collection = document.getElementsByClassName("isi");
            for (let i = 0; i < collection.length; i++) {
                collection[i].classList.remove("bg-danger");
                collection[i].classList.add("bg-dark");
                collection[i].classList.add("border-body-secondary");
                collection[i].classList.add("text-light");
                
            }

            const cardcolor = document.getElementsByClassName("isiCard");
            for (let i = 0; i < cardcolor.length; i++) {
                cardcolor[i].classList.remove("bg-body");
                cardcolor[i].classList.add("bg-secondary");
                cardcolor[i].classList.add("border-body-secondary");
                cardcolor[i].classList.add("text-light");

            }
            const aboutme = document.getElementsByClassName("isi1");
            for (let i = 0; i < collection.length; i++) {
                collection[i].classList.remove("bg-danger-subtle");
                collection[i].classList.add("bg-dark");
                collection[i].classList.add("border-body-secondary");
                collection[i].classList.add("text-light");
            }
        };
    </script>
    <script type="text/javascript">
        document.getElementById("lightTheme").onclick = function () {
            document.body.classList.remove("bg-dark");

            document.getElementById("darkTheme").classList.add("btn-dark");
            document.getElementById("DTB").classList.add("text-light");
            document.getElementById("DTB").classList.remove("text-dark");
            document.getElementById("LTB").classList.remove("text-light");
            document.getElementById("LTB").classList.add("text-dark");



            document.getElementById("mobilebtn").classList.remove("text-light");

            const navLinka = document.getElementsByClassName("navlink");
            for (let i = 0; i < navLinka.length; i++) {
                navLinka[i].classList.remove("text-light");
                navLinka[i].classList.add("text-dark");
            }

            const collection = document.getElementsByClassName("isi");
            for (let i = 0; i < collection.length; i++) {
                collection[i].classList.remove("bg-dark");
                collection[i].classList.remove("border-body-secondary");
                collection[i].classList.remove("text-light");
                collection[i].classList.add("bg-danger");
                
            }

            const cardcolor = document.getElementsByClassName("isiCard");
            for (let i = 0; i < cardcolor.length; i++) {
                cardcolor[i].classList.remove("border-body-secondary");
                cardcolor[i].classList.remove("text-light");
                cardcolor[i].classList.add("text-black");
                cardcolor[i].classList.add("bg-body");
            }
            const aboutme = document.getElementsByClassName("isi1");
            for (let i = 0; i < collection.length; i++) {
                collection[i].classList.remove("bg-dark");
                collection[i].classList.remove("border-body-secondary");
                collection[i].classList.remove("text-light");
                collection[i].classList.add("bg-danger-subtle");
                
            }
        };
    </script>



</body>

</html>