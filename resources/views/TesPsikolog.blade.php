<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="TesPsikolog.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

</head>

<body class="min-vh-100 d-flex flex-column py-4">
<div class="container-fluid text-center position-absolute"style="opacity: 30%; background-size: vh-100 ; background-image: url('{{ asset('img/testsoal.jpg') }}'); height: 100%"></div>
    <div class="container-fluid text-center">
        <div class="d-flex flex-column justify-content-center">
            <div class="cotainer d-flex flex-column align-items-center">
                <div class="d-flex justify-content-center">
                    <div class="MengelDiri ">
                        <h1 class="TMD text-center mt-2">
                            Test Mengenal Diri
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="d-flex justify-content-center align-self-stretch ">
        <img style=" width: 20%;" class="Dialogdirir" alt="" src="{{ asset('img/test soal.jpg') }}" />
    </div> --}}

    <div class="container-fluid text-center d-flex justify-content-center flex-fill position-relative">
        <div class="card align-self-center" style="border:none; background-color:transparent">
            <div class="progress mt-2" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0"
                aria-valuemax="100" style="width: 100%">
                <div class="progress-bar" style="width: 20% ; "></div>
            </div>
            <p class="title mt-4">1. Kamu lebih suka sosialisasi atau bergaul?</p>
            <div class="content">
                <input type="radio" name="rd" id="one">
                <input type="radio" name="rd" id="two">
                <input type="radio" name="rd" id="three">
                <input type="radio" name="rd" id="four">
                <label for="one" class="box first">
                    <div class="plan">
                        <span class="circle"></span>
                        <span class="yearly">Saya ingin menghindar</span>
                    </div>
                </label>
                <label for="two" class="box second">
                    <div class="plan">
                        <span class="circle"></span>
                        <span class="yearly">Saya senang sendiri </span>
                    </div>
                </label>
                <label for="three" class="box third">
                    <div class="plan">
                        <span class="circle"></span>
                        <span class="yearly">Ya, Saya senang sosialisasi</span>
                    </div>
                </label>
                <label for="four" class="box fourw">
                    <div class="plan">
                        <span class="circle"></span>
                        <span class="yearly">Ya, jika dengan orang yang saya kenal </span>
                </label>
            </div>
        </div>
    </div>


    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>