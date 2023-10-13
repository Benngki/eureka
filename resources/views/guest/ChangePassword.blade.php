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

    <link rel="stylesheet" href="{{ asset('CSS/my.css') }}">
    <title>DialogDiri</title>

    @livewireStyles
</head>

<body class="min-vh-100 d-flex align-items-center">
    <div class="container my-auto ">
        <a href="{{ route('home') }}" class="d-flex justify-content-center">
            <img style="max-width: 25%;" src="{{ asset('img/logo.svg') }}" alt="Logo Dialog Diri">
        </a>
       
        <div class="d-flex justify-content-center mt-5">
            <div class="w-100 w-md-75 w-lg-30">
                <h3 style="font-family: 'Clarendon';">Ubah Password</h3>

                <form method="post" action="{{ route('auth.change-password.update') }}">
                    @csrf
                    {{-- alert success --}}
                    @if (session('success'))
                        <div>
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        </div>
                    @endif
                    {{-- kata sandi lama --}}
                    <div>
                        <div class="d-flex justify-content-end">
                            <input type="password" name="old_password" class="form-control mb-3" id="PasswordInput1"
                                placeholder="Kata Sandi Lama" maxlength="12" autofocus required>
                            <i class="bi bi-eye-slash mt-1 me-3" style="position: absolute;" id="togglePassword1"></i>
                        </div>
                        {{-- jika error --}}
                        @error('old_password')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    {{-- kata sandi baru --}}
                    <div>
                        <div class="d-flex justify-content-end">
                            <input type="password" name="new_password" class="form-control mb-3" id="PasswordInput2"
                                placeholder="Kata Sandi Baru" maxlength="12" autofocus required>
                            <i class="bi bi-eye-slash mt-1 me-3" style="position: absolute;" id="togglePassword2"></i>
                        </div>
                        {{-- jika error --}}
                        @error('new_password')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    {{-- konfirmasi kata sandi baru --}}
                    <div>
                        <div class="d-flex justify-content-end">
                            <input type="password" name="new_password_conf" class="form-control mb-3" id="PasswordInput3"
                                placeholder="Konfirmasi Kata Sandi Baru" maxlength="12" autofocus required>
                            <i class="bi bi-eye-slash mt-1 me-3" style="position: absolute;" id="togglePassword3"></i>
                        </div>
                        {{-- jika error --}}
                        @error('new_password_conf')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btnLogin w-100 mb-3" style="">Kirim</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function togglePassword(toggle_id, input_id) {
            const togglePassword = document.querySelector(toggle_id);
            const password = document.querySelector(input_id);
    
            togglePassword.addEventListener("click", function() {
                // toggle the type attribute
                const type = password.getAttribute("type") === "password" ? "text" : "password";
                password.setAttribute("type", type);
    
                // toggle the icon
                this.classList.toggle("bi-eye");
            });            
        }

        // kata sandi lama 
        togglePassword("#togglePassword1", "#PasswordInput1")
        // kata sandi baru 
        togglePassword("#togglePassword2", "#PasswordInput2")
        // konfirmasi kata sandi baru 
        togglePassword("#togglePassword3", "#PasswordInput3")
    </script>

<script src="https://apis.google.com/js/platform.js" async defer></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>

    @livewireScripts
</body>

</html>
