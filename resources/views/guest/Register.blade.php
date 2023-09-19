<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="./CSS/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link href="https://fonts.cdnfonts.com/css/clarendon-mt-std" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
    <title>DialogDiri</title>

    @livewireStyles
</head>

<body class="min-vh-100 d-flex align-items-center">
    <div class="container my-auto">
        <a href="{{ route('home') }}" class="d-flex justify-content-center">
            <img style="max-width: 25%;" src="{{ asset('img/logo.svg') }}" alt="Logo Dialog Diri">
        </a>

        <div class="d-flex justify-content-center mt-5">
            <div>
                <img style="max-width: 100%" src="{{ asset('img/RegisterImg.png') }}" alt="">
            </div>

            <div>
                <h3 style="font-family: 'Clarendon';">Register</h3>
                <p style="font-family: 'Open Sans', sans-serif;">Already have an account?<a wire:navigate
                        href="/login"> Login Here</a></p>
                <form method="POST" action="{{ route('registerNewUser') }}">
                    @csrf
                    {{-- <input type="text" class="form-control mb-3" id="UsernameInput" placeholder="Username" required>
                    <input type="email" class="form-control mb-3" id="EmailInput" placeholder="name@example.com"
                        required>
                    <div class="d-flex justify-content-end">
                        <input type="password" name="password" class="form-control mb-3" id="PasswordInput"
                            placeholder="Password" maxlength="20" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                            required>
                        <i class="bi bi-eye-slash mt-1 me-3" style="position: absolute;" id="togglePassword"></i>
                    </div>
                    <div class="d-flex justify-content-end">
                        <input type="password" name="password" class="form-control mb-3" id="PasswordInput2"
                            placeholder="Confirm Password" maxlength="20">
                        <i class="bi bi-eye-slash mt-1 me-3" style="position: absolute;" id="togglePassword2"></i>
                    </div> --}}
                    <button type="submit" class="btn btnLogin w-100 mb-3"
                        style="font-family: 'Open Sans', sans-serif;">Register</button>
                </form>

                <div class="p-3" id="message">
                    <p>Password must contain the following:</p>
                    <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                    <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                    <p id="number" class="invalid">A <b>number</b></p>
                    <p id="length" class="invalid"> <b>8-12 characters</b></p>
                </div>

                <div class="p-3" id="Confirm">
                    <p>Confirm Password:</p>
                    <p id="same" class="invalid">Confirm password is <b>Match</b></p>
                </div>


                <div class="text-center" style="font-size: smaller;">
                    <p style="font-family: 'Open Sans', sans-serif;" class="mt-1">Register instantly using your social
                        media</p>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="button" class="btn rounded-5"><img src="/img/logoGoogle.png" alt=""></button>
                    <button type="button" class="btn rounded-5"><img src="/img/logoFB.png" alt=""></button>
                </div>
            </div>
        </div>
    </div>



    <script>
        var myInput = document.getElementById("PasswordInput");
        var ConPas = document.getElementById("PasswordInput2");
        var letter = document.getElementById("letter");
        var capital = document.getElementById("capital");
        var number = document.getElementById("number");
        var length = document.getElementById("length");
        var same = document.getElementById("same");

        // When the user clicks on the password field, show the message box
        myInput.onfocus = function() {
            document.getElementById("message").style.display = "block";
        }

        // When the user clicks outside of the password field, hide the message box
        myInput.onblur = function() {
            document.getElementById("message").style.display = "none";
        }

        // When the user starts to type something inside the password field
        myInput.onkeyup = function() {
            // Validate lowercase letters
            var lowerCaseLetters = /[a-z]/g;
            if (myInput.value.match(lowerCaseLetters)) {
                letter.classList.remove("invalid");
                letter.classList.add("valid");
            } else {
                letter.classList.remove("valid");
                letter.classList.add("invalid");
            }

            // Validate capital letters
            var upperCaseLetters = /[A-Z]/g;
            if (myInput.value.match(upperCaseLetters)) {
                capital.classList.remove("invalid");
                capital.classList.add("valid");
            } else {
                capital.classList.remove("valid");
                capital.classList.add("invalid");
            }

            // Validate numbers
            var numbers = /[0-9]/g;
            if (myInput.value.match(numbers)) {
                number.classList.remove("invalid");
                number.classList.add("valid");
            } else {
                number.classList.remove("valid");
                number.classList.add("invalid");
            }

            // Validate length
            if (myInput.value.length >= 8 && myInput.value.length <= 12) {
                length.classList.remove("invalid");
                length.classList.add("valid");
            } else {
                length.classList.remove("valid");
                length.classList.add("invalid");
            }
        }




        ConPas.onfocus = function() {
            document.getElementById("Confirm").style.display = "block";
        }

        // When the user clicks outside of the password field, hide the message box
        ConPas.onblur = function() {
            document.getElementById("Confirm").style.display = "none";
        }
        ConPas.onkeyup = function() {
            if (myInput.value == ConPas.value) {
                same.classList.remove("invalid");
                same.classList.add("valid");
            } else if (myInput.value != ConPas.value) {
                same.classList.remove("valid");
                same.classList.add("invalid");
            }
        }
    </script>



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

        // prevent form submit
        const form = document.querySelector("form");
        form.addEventListener('submit', function(e) {
            e.preventDefault();
        });
    </script>
    <script>
        const togglePassword2 = document.querySelector("#togglePassword2");
        const password2 = document.querySelector("#PasswordInput2");

        togglePassword2.addEventListener("click", function() {
            // toggle the type attribute
            const type = password2.getAttribute("type") === "password" ? "text" : "password";
            password2.setAttribute("type", type);

            // toggle the icon
            this.classList.toggle("bi-eye");
        });

        // prevent form submit
        const form2 = document.querySelector("form");
        form.addEventListener('submit', function(e) {
            e.preventDefault();
        });
    </script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>

    @livewireScripts
</body>

</html>
