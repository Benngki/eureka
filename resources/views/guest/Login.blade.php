<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="./CSS/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
    <title>DialogDiri</title>

    @livewireStyles
</head>

<body class="min-vh-100 d-flex align-items-center">
    <div class="container my-auto ">
        <a href="{{ route('home') }}" class="d-flex justify-content-center">
            <img style="max-width: 100%;" class="mt-5 mt-lg-0" src="{{ asset('img/logo.svg') }}" alt="Logo Dialog Diri">
        </a>
       
        <div class="d-flex flex-column flex-lg-row justify-content-lg-center mt-5">
            <img style="max-width: 100%" src="{{ asset('img/Gambasr_login.png') }}" alt="">
            <div>
                <h3 style="font-family: 'Clarendon';">Masuk</h3>

                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        
                        {{session('success')}}
                    </div>
                @endif  
                @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        
                        {{session('loginError')}}
                    </div>
                @endif  
                

                <p style="font-family: 'Open Sans', sans-serif;">Belum Punya Akun?
                    <a wire:navigate href="/register"> Daftar</a>
                </p>
                <form method="post" action="{{ route('LoginUser') }}">
                    @csrf
                    <input name="email" type="email" class="form-control mb-3 @error('email') is-invalid @enderror" id="email" placeholder="name@example.com"
                       autofocus required value="{{old('email')}}">
                    <div class="d-flex justify-content-end">
                        <input type="password" name="password" class="form-control mb-3" id="PasswordInput"
                            placeholder="Password" maxlength="12" autofocus required>
                        <i class="bi bi-eye-slash mt-1 me-3" style="position: absolute;" id="togglePassword"></i>
                    </div>
                    <button type="submit" class="btn btnLogin w-100 mb-3" style="">Masuk</button>
                </form>
                {{-- <div class="text-center" style="font-size: smaller;">
                    <a wire:navigate wire style="font-family: 'Open Sans', sans-serif;" href="/forgot-password">Lupa kata sandi?</a>
                    
                </div> --}}
                {{-- <div class="d-flex justify-content-center">
                    <button type="button" class="btn rounded-5"><img src="{{ asset('img/logoGoogle.png') }}"
                            alt=""></button>
                    <button type="button" class="btn rounded-5"><img src="{{ asset('img/logoFB.png') }}"
                            alt=""></button>
                </div> --}}
            </div>
        </div>
    </div>
    
    {{-- <div class="g-signin2" data-onsuccess="onSignIn"></div> --}}



    <script>
        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#PasswordInput");

        togglePassword.addEventListener("click", function() {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);

            // toggle the icon
            this.classList.toggle("bi-eye");
        });
    </script>

<script src="https://apis.google.com/js/platform.js" async defer></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>

    @livewireScripts
</body>

</html>
