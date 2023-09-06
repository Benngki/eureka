<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DialogDiri</title>
    <link rel="stylesheet" href="./CSS/Home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    @livewireStyles
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-secondary">
        <div class="container-fluid">
          <a class="navbar-brand ms-5" href="#">
            <img style="width: 80%;"  src="{{asset('img/logo.svg')}}" alt="Logo Dialog Diri">
          </a>
          
            <ul class="navbar-nav justify-content-end nav-fill nav-underline align-items-baseline">
              <li class="nav-item">
                <a class="nav-link active linkNav" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a wire:navigate class="nav-link linkNav" href="{{ route('chatbot') }}">Chatbot</a>
              </li>
              <li class="nav-item">
                <a class="nav-link linkNav" href="#">About Us</a>
              </li>
              <li class="nav-item me-5">
                <a class="nav-link linkNav" href="#">Contact</a>
              </li>
              <a wire:navigate href="{{ route('login') }}" role="button" type="button" class="btn me-5" ><img class="mx-1"  src="{{asset('img/profile.png')}}" alt="">Login</a>
            </ul>
        </div>
      </nav>

      <div class="container-fluid overflow-hidden" style="margin-bottom: 8rem;">
        <div class="d-flex justify-content-evenly align-items-center">
            <div style="width: 20vw;">
              <div class="animationTeks1">
                <h2><b>Berani Bicara,<br>Berani Berubah</b></h2>
                Berani berbicara dan terbuka terhadap permasalahan mental yang ada pada diri sendiri untuk menerima  dan memberikan kesempatan berkembang dan tumbuh secara pribadi yang lebih baik dan positif. 
                <br><br>Mulailah bercerita tentang diri anda sekarang!<br>
              </div>
                <button type="button" class="btn rounded-5 btn-lg px-5 mt-5 Buttonhover" style="background: #48904F; color: white;">Mulai</button>
            </div>
            <img class="animationGmbr1" data-aos="fade-left" style="min-width: 40%;"  src="{{asset('img/Home1.png')}}" alt="">
        </div>
      </div>

      <div class="container-fluid rounded-top-5  "  style="background: #A3C7A7; ">
        <div class="d-flex justify-content-evenly js-scroll fade-in">
          
          <div class="card rounded-4 " style="border: none; width: 20%; margin-top: -1rem; background-color: #48904F;color: white;">
              <div class="card-body">
                  <img class="cardimg"  src="{{asset('img/card1.png')}}" alt="">
                  <p class="card-text pb-4">Menurut Indonesia-National Adolescent Mental Health Survey 2022, 15,5 juta (34,9 persen) remaja mengalami masalah mental</p>
                 
              </div>
          </div>

            <div class="card rounded-4" style="border: none; width: 20%; margin-top: -1rem;background-color: #48904F;color: white">
                <div class="card-body">
                    <img class="cardimg "  src="{{asset('img/card2.png')}}" alt="">
                    <p class="card-text">1 dari setiap 6 anak berusia 
                      6–17 tahun mengalami gangguan kesehatan mental setiap tahun</p>
                </div>
            </div>

            <div class="card rounded-4" style="border: none; width: 20%; margin-top: -1rem;background-color: #48904F;color: white">
                <div class="card-body">
                    <img class="cardimg"  src="{{asset('img/card3.png')}}" alt="">
                    <p class="card-text">2,6 persen yang mengakses layanan konseling, baik emosi maupun perilaku.</p> 
                </div>
            </div>

        </div>

        <div class="container-fluid d-flex justify-content-center py-5 mt-5">
          <div class="card text-center mb-3 rounded-4" style="width: 90vw; background-color: #FCF4F0;">
            <div class="card-body ">
              <h2 class="card-title fw-bolder mt-3">Layanan Kami</h2>
              <div class="d-flex justify-content-evenly ">

                  <div style="width: 20vw;">
                    <img style="width:15vw ;"  src="{{asset('img/Fitur1.png')}}" alt="">
                    <h5 class="fw-bolder">Tes Psikologi</h5>
                    <p> <b>Tes Psikologi</b> adalah suatu alat yang digunakan untuk mengukur dan mengevaluasi berbagai aspek psikologis seseorang. Tes ini dirancang untuk memberikan gambaran tentang karakteristik, kepribadian, kemampuan kognitif, minat, dan perilaku individu.</p>
                  </div>

                  <div style="width: 20vw;">
                    <img style="width:15vw ;"  src="{{asset('img/Fitur2.png')}}" alt="">
                    <h5 class="fw-bolder">Chatbot</h5>
                    <p> <b>Chatbot</b> adalah suatu layanan yang disediakan untuk membantu pengguna untuk memberikan pertanyaan mengenai kesehatan mental, dengan adanya chatbot dapat memberikan jawaban yang cepat dan akurat.</p>
                  </div>

              </div>
             
            </div>
          </div>
        </div>
      </div>
     
      <div class="container-fluid d-flex justify-content-evenly px-5 pt-5" style="background-color: #E3F2FF;">
        <img style="width: 25%;"  src="{{asset('img/Home2.svg')}}" alt="">
        <div class="d-flex align-items-center w-50">
          <div style="text-align: end;">
            <h2 class="js-scroll slide-right" >Masalah kesehatan mental meningkat hingga 300 juta orang seluruh dunia menderita gangguan kecemasan hingga depresi</h2>
            <p class="js-scroll slide-right2" >“Aku menemukan bahwa dengan depresi, salah satu hal terpenting yang dapat kamu sadari adalah bahwa kamu tidak sendiri. Kamu bukan yang pertama melewatinya. Kamu juga tidak akan menjadi yang terakhir melewatinya.”<br><i>Dwayne “The Rock” Johnson.</i> </p>
            <div style="text-align: center;">
              <button type="button" class="btn rounded-5 Buttonhover" style="padding-left: 6rem;padding-right: 6rem; background: #48904F; color: white;">Mulai Test</button>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid mt-5 overflow-hidden">
        <h3 class="mb-5 fw-bolder js-scroll slide-left " style="margin-left: 6rem;">Kata Mereka Tentang Kami...</h3>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <!-- Content1 -->
            <div class="carousel-item active">
              <div class="d-flex justify-content-evenly p-3">

                <div class="card w-25 rounded-4 py-3" style="background-color: #FCF4F0;border: none; box-shadow: 0px 2px 10px 3px rgba(0,0,0,0.15);">
                  <div class="card-body d-flex justify-content-center align-items-center">
                    <img style="width:50%;"  src="{{asset('img/profile.png')}}" alt="">
                    <p class="card-text ps-4">“Menarik, Bagus, sangat membantu saya dalam mengenal diri sendiri”</p>
                  </div>
                </div>

                <div class="card w-25 rounded-4 py-3" style="background-color: #FCF4F0;border: none; box-shadow: 0px 2px 10px 3px rgba(0,0,0,0.15);">
                  <div class="card-body d-flex justify-content-center align-items-center">
                    <img style="width:50%;"   src="{{asset('img/profile.png')}}" alt="">
                    <p class="card-text ps-4">“Menarik, Bagus, sangat membantu saya dalam mengenal diri sendiri”</p>
                  </div>
                </div>

                <div class="card w-25 rounded-4 py-3" style="background-color: #FCF4F0;border: none; box-shadow: 0px 2px 10px 3px rgba(0,0,0,0.15);">
                  <div class="card-body d-flex justify-content-center align-items-center">
                    <img style="width:50%;"  src="{{asset('img/profile.png')}}" alt="">
                    <p class="card-text ps-4">“Menarik, Bagus, sangat membantu saya dalam mengenal diri sendiri”</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Content2 -->
            <div class="carousel-item">
              <div class="d-flex justify-content-evenly p-3">
                <div class="card w-25 rounded-4 py-3" style="background-color: #FCF4F0;border: none; box-shadow: 0px 2px 10px 3px rgba(0,0,0,0.15);">
                  <div class="card-body d-flex justify-content-center align-items-center">
                    <img style="width:50%;"  src="{{asset('img/profile.png')}}" alt="">
                    <p class="card-text ps-4">“Menarik, Bagus, sangat membantu saya dalam mengenal diri sendiri”</p>
                  </div>
                </div>

                <div class="card w-25 rounded-4 py-3" style="background-color: #FCF4F0;border: none; box-shadow: 0px 2px 10px 3px rgba(0,0,0,0.15);">
                  <div class="card-body d-flex justify-content-center align-items-center">
                    <img style="width:50%;"  src="{{asset('img/profile.png')}}" alt="">
                    <p class="card-text ps-4">“Menarik, Bagus, sangat membantu saya dalam mengenal diri sendiri”</p>
                  </div>
                </div>

                <div class="card w-25 rounded-4 py-3" style="background-color: #FCF4F0;border: none; box-shadow: 0px 2px 10px 3px rgba(0,0,0,0.15);">
                  <div class="card-body d-flex justify-content-center align-items-center">
                    <img style="width:50%;"  src="{{asset('img/profile.png')}}" alt="">
                    <p class="card-text ps-4">“Menarik, Bagus, sangat membantu saya dalam mengenal diri sendiri”</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- content3 -->
            <div class="carousel-item">
              <div class="d-flex justify-content-evenly p-3">
                <div class="card w-25 rounded-4 py-3" style="background-color: #FCF4F0;border: none; box-shadow: 0px 2px 10px 3px rgba(0,0,0,0.15);">
                  <div class="card-body d-flex justify-content-center align-items-center">
                    <img style="width:50%;"  src="{{asset('img/profile.png')}}" alt="">
                    <p class="card-text ps-4">“Menarik, Bagus, sangat membantu saya dalam mengenal diri sendiri”</p>
                  </div>
                </div>

                <div class="card w-25 rounded-4 py-3" style="background-color: #FCF4F0;border: none; box-shadow: 0px 2px 10px 3px rgba(0,0,0,0.15);">
                  <div class="card-body d-flex justify-content-center align-items-center">
                    <img style="width:50%;"  src="{{asset('img/profile.png')}}" alt="">
                    <p class="card-text ps-4">“Menarik, Bagus, sangat membantu saya dalam mengenal diri sendiri”</p>
                  </div>
                </div>

                <div class="card w-25 rounded-4 py-3" style="background-color: #FCF4F0;border: none; box-shadow: 0px 2px 10px 3px rgba(0,0,0,0.15);">
                  <div class="card-body d-flex justify-content-center align-items-center">
                    <img style="width:50%;"  src="{{asset('img/profile.png')}}" alt="">
                    <p class="card-text ps-4">“Menarik, Bagus, sangat membantu saya dalam mengenal diri sendiri”</p>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>
      </div>

      <div class="mt-5 container-fluid bg-danger d-flex justify-content-center"><p style="margin:0px;color: white; "><b>Peringatan</b><i> jika Anda sedang mengalami krisis psikologis yang mengancam hidup Anda, layanan ini tidak direkomendasikan untuk Anda. Silahkan menghubungi 119</i></p></div>

      <div class="container-fluid d-flex justify-content-between p-5" style="background-color: #A3C7A7;">
        <div style="width: 40vw;">
          <img class="mb-3"  src="{{asset('img/logo.svg')}}" alt="">
          <p>DialogDiri adalah sebuah platform daring yang bertujuan untuk memberikan dukungan dan bantuan bagi individu yang mengalami tantangan kesehatan mental. Platform ini dirancang untuk menciptakan ruang aman bagi penggunanya untuk berbicara tentang perasaan, emosi, dan pengalaman yang terkait dengan kesehatan mental mereka.</p>
        </div>
        <div style="width: 30vw;">
          <h3 class="mt-5 fw-bolder">Contact</h3>
          <div class="d-flex justify-content-start">
            <a class="me-3" href=""><img  src="{{asset('img/IG.svg')}}" alt=""></a>
            <a href=""><img src="{{asset('img/WA.svg')}}" alt=""></a>
            <a class="ms-3" href=""><img  src="{{asset('img/Twitter.svg')}}" alt=""></a>
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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

@livewireScripts
</body>
</html>