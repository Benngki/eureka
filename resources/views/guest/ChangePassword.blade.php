<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('CSS/Reset_Password.css')}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
</head>

<body class="vh-100">
    <div class="container d-flex flex-column justify-content-center h-100 py-2">
        <div class="d-flex justify-content-center mb-5">
            <img style="max-height: 20vh; max-width: 80%;" class="Dialogdiri" src="{{ asset('img/logo.png') }}" />
        </div>
        
        <div class="d-flex justify-content-center mt-4">
            <div class="ForgotName" >
                <p >
                    Reset Password
                </p>

                <form action="">
                    <div >
                        <div class="d-flex justify-content-end">
                        <input type="password" name="password" class="form-control" id="PasswordInput"
                            placeholder="Password" maxlength="20" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                            required>
                        <i class="bi bi-eye-slash mt-1 me-3" style="position: absolute;font-size: 1rem; " id="togglePassword"></i>
                        </div>

                        <div class="d-flex justify-content-end mt-3">
                        <input type="password" name="password" class="form-control " id="ConfirmPass"
                            placeholder="Confirm Password" maxlength="20" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                            required>
                        <i class="bi bi-eye-slash mt-1 me-3" style="position: absolute;font-size: 1rem;" id="togglePassword2"></i>
                        </div>    
                    </div>
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
                    
                    <button type="submit" class="btn btnpo w-100">Send Email</button>                    
                </form>
            </div>
        </div>
    </div>

    {{-- Bootstrap --}}
    <script>
        var myInput = document.getElementById("PasswordInput");
        var ConPas = document.getElementById("ConfirmPass");
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
        const password2 = document.querySelector("#ConfirmPass");

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
</body>

</html>
