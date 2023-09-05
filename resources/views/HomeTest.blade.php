<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <style>
        @font-face {
        font-family: "clarendon";
        src: {{ asset('fonts/CLARENDO.ttf') }}
        
    }
    .TMD{
     font-family: 'clarendon';

       }
    .Opensans{
      font-family: 'Open Sans';
    }
    </style>
    <link rel="stylesheet" href="./HomeTest.css" />
    
</head>

<body>
    <main class="vh-100">
        <div class="container-fluid text-center">
            <div class="row">
                {{-- start of sidebar --}}
                @include('layouts.sidebar')
                {{-- end of sidebar --}}


                <div class="col-11 offset-1 d-flex flex-column vh-100 justify-content-center">
                    <div class="cotainer d-flex flex-column align-items-center">
                        <div class="d-flex justify-content-center">
                            <div class="MengelDiri ">
                                <h1 class="TMD text-center">
                                    Test Mengenal Diri
                                </h1>
                                <div class="Opensans Test1 ">
                                    <p>
                                        Tes ini ditujukan untuk mengenal diri anda lebih dalam dan mengukur tingkat stress pada diri
                                        sendiri
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center align-self-stretch">
                            <img style=" width: 30%;" class="Dialogdiri" alt="" src="{{ asset('img/image 13.png') }}" />
                        </div>
                
                      <div class=" d-flex justify-content-center flex-column text-start" >
                        <p class="invisible m-0 ">
                          Tes ini ditujukan untuk mengenal diri anda lebih dalam dan mengukur tingkat stress pada diri
                          sendiri
                        </p>
                          <h3 class="TMD">
                            Panduan Mengisi:
                          </h3>
                          <p class="m-0 Opensans "> 1. Kerjakan dengan pikiran dan hati yang tenang </p>
                          <p class="m-0 Opensans "> 2. Tidak ada jawaban salah/benar </p>
                          <p class="Opensans "> 3. jawab sesuai dengan keadaanmu saat ini </p>
                      </div>
                      <button type="button" class="boti btn btn-success TMD mt-5 " style="border-radius:100px">Mulai</button>
                    </div>
                </div>
            </div>
        </div>


    </main>

    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
