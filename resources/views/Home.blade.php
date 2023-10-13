<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DialogDiri</title>
    <link rel="stylesheet" href="./CSS/Home.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        @font-face {
            font-family: "clarendon";
            src: {{ asset('fonts/CLARENDO.ttf') }}
        }

        .TMD {
            font-family: 'clarendon';

        }

        .inter {
            font-family: 'inter'
        }
    </style>

    @livewireStyles
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-secondary">
            <div class="container-fluid">
                <a class="navbar-brand ms-lg-5" href="#">
                    <img style="width: 80%;" src="{{ asset('img/logo.svg') }}" alt="Logo Dialog Diri">
                </a>

                <!-- Tombol untuk tampilan mobile -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Daftar menu -->
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav nav-fill nav-underline align-items-baseline mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active linkNav " aria-current="page" href="#">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a  class="nav-link linkNav  " href="{{ route('chatbot') }}">Chatbot</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link linkNav  " href="#services">Layanan</a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link linkNav  " href="#kontak">Kontak</a>
                        </li>
                        <li class="nav-item">

                            @guest
                                <a wire:navigate href="{{ route('login') }}" role="button" type="button"
                                    class="btn me-lg-5 "><img class="mx-lg-1 TMD " src="{{ asset('img/profile.png') }}"
                                        alt=""> Masuk</a>
                            @endguest

                            @auth
                                <div class="btn-group">
                                  <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                                    <img class="mx-1 TMD " src="{{ asset('img/profile.png') }}"
                                        alt="">
                                  </button>
                                  <ul class="dropdown-menu dropdown-menu-lg-end">
                                    <li><a class="dropdown-item" href="{{route('profile.index')}}">Profile</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="{{ route('logout') }}">Keluar</a></li>
                                  </ul>
                                </div>
                            @endauth
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
        <div class="container-fluid container-lg overflow-hidden" style="margin-bottom: 13rem;">
            <div class="row align-items-center ">
                <div class="col-lg-7 col-12 order-lg-1 order-0"> <!-- Tambahkan kelas col-lg-7 di sini -->
                    <img class="animationGmbr1" data-aos="fade-left" style="width: 100%; min-width: 40%;"
                        src="{{ asset('img/Home1.png') }}" alt="">
                </div>
                <div class="col-lg-5  order-lg-0 order-1 mt-lg-0 mt-3 text-center text-lg-start"> <!-- Tambahkan kelas col-lg-5 di sini -->
                    <div class="animationTeks1 " id="">
                        <h2 class="TMD text-center text-lg-start"><b>Berani Bicara,<br>Berani Berubah</b></h2>
                        <p class="text-center text-lg-start fs-5">
                            Berani berbicara dan terbuka terhadap permasalahan mental yang ada pada diri sendiri untuk
                            menerima dan memberikan kesempatan berkembang dan tumbuh secara pribadi yang lebih baik dan
                            positif.
                            <br><br>Mulailah bercerita tentang diri anda sekarang!<br>
                        </p>
                    </div>
                    <button type="button" class="btn rounded-5 btn-lg px-5 mt-lg-5 Buttonhover TMD"
                        style="background: #48904F; color: white;">Mulai</button>
                </div>
            </div>
        </div>


        <div  class="container-fluid rounded-top-5" style="background: #A3C7A7; ">
            <div id="News" class="d-flex flex-column flex-lg-row   justify-content-lg-evenly js-scroll fade-in " style="width: 100%">

                <div id="item" class="card rounded-4 "
                    style="border: none; background-color: #48904F;margin-top: -1rem;">
                    <div class="card-body">
                        <img class="cardimg" src="{{ asset('img/card1.png') }}" alt="">
                        <p class="card-text pb-4 ">Menurut Indonesia-National Adolescent Mental Health Survey 2022, 15,5
                            juta (34,9 persen) remaja mengalami masalah mental</p>
                    </div>
                </div>

                <div id="item" class="card rounded-4 my-5 my-lg-0 "
                    style="border: none; background-color: #48904F;">
                    <div class="card-body">
                        <img class="cardimg " src="{{ asset('img/card2.png') }}" alt="">
                        <p class="card-text pb-4 pb-lg-0">1 dari setiap 6 anak berusia
                            6–17 tahun mengalami gangguan kesehatan mental setiap tahun</p>
                    </div>
                </div>

                <div id="item" class="card rounded-4 "
                    style="border: none; background-color: #48904F;">
                    <div class="card-body">
                        <img class="cardimg" src="{{ asset('img/card3.png') }}" alt="">
                        <p class="card-text pb-4 pb-lg-0">Hanya 2,6 persen yang mengakses layanan konseling, baik emosi maupun perilaku.
                        </p>
                    </div>
                </div>
            </div>

            <div id='services' class="container-fluid d-flex justify-content-center py-5 mt-5">
                <div class="card text-center mb-3 rounded-4" style="width: 90vw; background-color: #FCF4F0;">
                    <div class="card-body ">
                        <h2 class="card-title fw-bolder mt-3 TMD ">Layanan Kami</h2>
                        <div class="d-flex flex-column flex-lg-row justify-content-lg-evenly ">

                            <div id="TestPsikology" >
                                <img style="width:50vw ;" src="{{ asset('img/Fitur1.png') }}" alt="">
                                <h5 class="fw-bolder TMD ">Tes Psikologi</h5>
                                <p class=""> <b>Tes Psikologi</b> adalah suatu alat yang digunakan untuk mengukur
                                    dan mengevaluasi berbagai aspek psikologis seseorang. Tes ini dirancang untuk
                                    memberikan gambaran tentang karakteristik, kepribadian, kemampuan kognitif, minat,
                                    dan perilaku individu.</p>
                            </div>

                            <div id="chatbot">
                                <img style="width:50vw ;" src="{{ asset('img/Fitur2.png') }}" alt="">
                                <h5 class="fw-bolder TMD ">Chatbot</h5>
                                <p class=""> <b>Chatbot</b> adalah suatu layanan yang disediakan untuk membantu
                                    pengguna untuk memberikan pertanyaan mengenai kesehatan mental, dengan adanya
                                    chatbot dapat memberikan jawaban yang cepat dan akurat.</p>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div id="Info2" class="container-fluid flex-column flex-lg-row d-flex justify-content-lg-evenly px-lg-5 pt-lg-5 p-5" style="background-color: #E3F2FF;">
            <img style="width: 25   %;" src="{{ asset('img/Home2.svg') }}" alt="">
            <div class="d-flex align-items-center ">
                <div class="text-lg-end" style="text-align: end;">
                    <h2 class="js-scroll slide-right TMD">Masalah kesehatan mental meningkat hingga 300 juta orang
                        seluruh dunia menderita gangguan kecemasan hingga depresi</h2>
                    <p class="js-scroll slide-right2 ">“Aku menemukan bahwa dengan depresi, salah satu hal terpenting
                        yang dapat kamu sadari adalah bahwa kamu tidak sendiri. Kamu bukan yang pertama melewatinya.
                        Kamu juga tidak akan menjadi yang terakhir melewatinya.”<br><i>Dwayne “The Rock” Johnson.</i>
                    </p>
                    <div style="text-align: center;" class="pt-3 pt-lg-5">
                        <a id="buttonstart2" href="{{ route('test') }}" type="button" class="btn rounded-5 Buttonhover TMD" style=" background: #48904F; color: white;">Mulai Test</a>
                    </div>
                </div>
            </div>
        </div>


        <div id="testi" class="container-fluid mt-5 overflow-hidden">
            <h3 class="mb-5 fw-bolder js-scroll slide-left TMD" style="">Kata Mereka Tentang Kami...
            </h3>
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- Content1 -->
                    <div class="carousel-item active">
                        <div class="d-flex justify-content-evenly p-3">

                            <div class="card w-25 rounded-4 py-3"
                                style="background-color: #FCF4F0;border: none; box-shadow: 0px 2px 10px 3px rgba(0,0,0,0.15);">
                                <div class="card-body d-flex justify-content-center align-items-center">
                                    <img style="width:50%;" src="{{ asset('img/profile.png') }}" alt="">
                                    <p class="card-text ps-4 ">"Produk yang sangat membantu dalam memudahkan hidup sehari-hari."</p>
                                </div>
                            </div>

                            <div class="card w-25 rounded-4 py-3"
                                style="background-color: #FCF4F0;border: none; box-shadow: 0px 2px 10px 3px rgba(0,0,0,0.15);">
                                <div class="card-body d-flex justify-content-center align-items-center">
                                    <img style="width:50%;" src="{{ asset('img/profile.png') }}" alt="">
                                    <p class="card-text ps-4 ">"Sangat puas dengan kualitas dan pelayanan yang diberikan."</p>
                                </div>
                            </div>

                            <div class="card w-25 rounded-4 py-3"
                                style="background-color: #FCF4F0;border: none; box-shadow: 0px 2px 10px 3px rgba(0,0,0,0.15);">
                                <div class="card-body d-flex justify-content-center align-items-center">
                                    <img style="width:50%;" src="{{ asset('img/profile.png') }}" alt="">
                                    <p class="card-text ps-4 ">“Menarik, Bagus, sangat membantu saya dalam mengenal
                                        diri sendiri”</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content2 -->
                    <div class="carousel-item">
                        <div class="d-flex justify-content-evenly p-3">
                            <div class="card w-25 rounded-4 py-3"
                                style="background-color: #FCF4F0;border: none; box-shadow: 0px 2px 10px 3px rgba(0,0,0,0.15);">
                                <div class="card-body d-flex justify-content-center align-items-center">
                                    <img style="width:50%;" src="{{ asset('img/profile.png') }}" alt="">
                                    <p class="card-text ps-4">"Rekomendasi bagi siapa saja yang mencari solusi terbaik."</p>
                                </div>
                            </div>

                            <div class="card w-25 rounded-4 py-3"
                                style="background-color: #FCF4F0;border: none; box-shadow: 0px 2px 10px 3px rgba(0,0,0,0.15);">
                                <div class="card-body d-flex justify-content-center align-items-center">
                                    <img style="width:50%;" src="{{ asset('img/profile.png') }}" alt="">
                                    <p class="card-text ps-4">"Pengalaman positif yang membuat saya ingin terus menggunakan produk ini."</p>
                                </div>
                            </div>

                            <div class="card w-25 rounded-4 py-3"
                                style="background-color: #FCF4F0;border: none; box-shadow: 0px 2px 10px 3px rgba(0,0,0,0.15);">
                                <div class="card-body d-flex justify-content-center align-items-center">
                                    <img style="width:50%;" src="{{ asset('img/profile.png') }}" alt="">
                                    <p class="card-text ps-4">"Produk inovatif dan sesuai dengan kebutuhan saya."</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- content3 -->
                    <div class="carousel-item">
                        <div class="d-flex justify-content-evenly p-3">
                            <div class="card w-25 rounded-4 py-3"
                                style="background-color: #FCF4F0;border: none; box-shadow: 0px 2px 10px 3px rgba(0,0,0,0.15);">
                                <div class="card-body d-flex justify-content-center align-items-center">
                                    <img style="width:50%;" src="{{ asset('img/profile.png') }}" alt="">
                                    <p class="card-text ps-4">“"Saya merasa lebih baik setelah menggunakan produk ini."</p>
                                </div>
                            </div>

                            <div class="card w-25 rounded-4 py-3"
                                style="background-color: #FCF4F0;border: none; box-shadow: 0px 2px 10px 3px rgba(0,0,0,0.15);">
                                <div class="card-body d-flex justify-content-center align-items-center">
                                    <img style="width:50%;" src="{{ asset('img/profile.png') }}" alt="">
                                    <p class="card-text ps-4">"Sumber inspirasi bagi saya untuk bangkit dari masa-masa sulit."</p>
                                </div>
                            </div>

                            <div class="card w-25 rounded-4 py-3"
                                style="background-color: #FCF4F0;border: none; box-shadow: 0px 2px 10px 3px rgba(0,0,0,0.15);">
                                <div class="card-body d-flex justify-content-center align-items-center">
                                    <img style="width:50%;" src="{{ asset('img/profile.png') }}" alt="">
                                    <p class="card-text ps-4">"Mental health website ini memberikan informasi yang sangat bermanfaat."</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div id="warning" class="mt-5 container-fluid bg-danger d-flex justify-content-center ">
            <p style="margin:0px;color: white;font-size: 12px " ><b>Peringatan</b><i> jika Anda sedang mengalami krisis psikologis yang
                    mengancam hidup Anda, layanan ini tidak direkomendasikan untuk Anda. Silahkan menghubungi 119</i>
            </p>
        </div>

        <div id='kontak' class="container-fluid d-flex flex-column flex-lg-row justify-content-lg-between py-4 pa-lg-5"
            style="background-color: #A3C7A7;">
            <div id="descfooter">
                <img class="mb-lg-3" src="{{ asset('img/logo.svg') }}" alt="">
                <p>DialogDiri adalah sebuah platform daring yang bertujuan untuk memberikan dukungan dan
                    bantuan bagi individu yang mengalami tantangan kesehatan mental. Platform ini dirancang untuk
                    menciptakan ruang aman bagi penggunanya untuk berbicara tentang perasaan, emosi, dan pengalaman yang
                    terkait dengan kesehatan mental mereka.
                </p>
            </div>
            <div style="width: 50vw;">
                <h3 class="mt-lg-5 my-3 fw-bolder">Sosial Media</h3>
                <div class="d-flex justify-content-start">
                    <a class="me-3" href=""><img src="{{ asset('img/Twitter.svg') }}" alt=""></a>
                </div>
            </div>
        </div>


        <script>
            const scrollElements = document.querySelectorAll(".js-scroll");
            const elementInView = (el, dividend = 1) => {
                const elementTop = el.getBoundingClientRect().top;

                return (
                    elementTop <=
                    (window.innerHeight || document.documentElement.clientHeight) / dividend
                );
            };

            const elementOutofView = (el) => {
                const elementTop = el.getBoundingClientRect().top;

                return (
                    elementTop > (window.innerHeight || document.documentElement.clientHeight)
                );
            };

            const displayScrollElement = (element) => {
                element.classList.add("scrolled");
            };

            const hideScrollElement = (element) => {
                element.classList.remove("scrolled");
            };

            const handleScrollAnimation = () => {
                scrollElements.forEach((el) => {
                    if (elementInView(el, 1.25)) {
                        displayScrollElement(el);
                    } else if (elementOutofView(el)) {
                        hideScrollElement(el)
                    }
                })
            }

            window.addEventListener("scroll", () => {
                handleScrollAnimation();
            });
        </script>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
        </script>

        @livewireScripts
</body>

</html>
