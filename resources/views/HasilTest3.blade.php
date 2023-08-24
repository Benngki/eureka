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

.inter{
  font-family: 'inter'
}
</style>
  <link rel="stylesheet" href="./HomeTest.css" />

</head>
<body>
  <div class="container-fluid text-center">
    <div class="col-11 offset-1 d-flex flex-column vh-100 justify-content-center">
      <div class="cotainer d-flex flex-column align-items-center">
          <div class="d-flex justify-content-center">
              <div class="MengelDiri ">
                  <h1 class="TMD text-center">
                      Test Mengenal Diri
                  </h1>
                  <div class=" mt-4 TMD Opensans Test1">
                      <p class=" TMD" style="font-size: 210%">
                        Hasil Tes anda Rendah
                  </div>
              </div>
          </div>
          <div class="d-flex justify-content-center align-self-stretch ">
              <img style=" width: 20%;" class="Dialogdirir" alt="" src="{{ asset('img/rendah.png') }}" />
          </div>
            <p class="mt-3 Opensans m-0 text-center"> Hasil tes menunjukkan bahwa tingkat stres Anda saat ini 
                                                <br> pada tingkat <b>Rendah,</b> yang menunjukkan bahwa Anda dalam keadaan 
                                                <br> baik-baik saja. Anda mungkin merasa ringan dalam menghadapi berbagai 
                                                <br> aspek kehidupan Anda saat ini, dan tidak ada banyak beban atau masalah yang 
                                                <br> membuat Anda merasa khawatir. Anda merasa lebih terkendali dan tidak banyak 
                                                <br> kejadian tak terduga yang mengganggu kehidupan Anda.</p>
        <button type="button" class="boti btn TMD mt-5 btn-lg " style="background-color: #48904F; width: 15%; color: #FFFFFF; border-radius: 100px;">Kembali</button>
      </div>
  </div>

  </div>
  
      {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
  </script>
</body>
</html>