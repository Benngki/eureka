<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="./CSS/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
    <title>DialogDiri</title>
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-center">
            <img style="width: 25%;" src="{{asset('img/logo.svg')}}" alt="Logo Dialog Diri">
        </div>

        <div class="d-flex justify-content-center mt-5">
            <img style="width: 60%" src="{{asset('img/Gambasr_login.png')}}" alt="">
            <div>
                <h3 style="font-family: 'Clarendon';" >Login</h3>
                <p style="font-family: 'Open Sans', sans-serif;">Dont Have an account?<a href="/register"> Sign Up Here</a></p>
                <form method="post">
                    <input type="email" class="form-control mb-3" id="EmailInput" placeholder="name@example.com" required >
                    <div class="d-flex justify-content-end">
                        <input type="password" name="password" class="form-control mb-3" id="PasswordInput" placeholder="Password" maxlength="12" required>
                        <i class="bi bi-eye-slash mt-1 me-3" style="position: absolute;" id="togglePassword"></i>
                    </div>
                    <button type="submit" class="btn btnLogin w-100 mb-3" style="">Login</button>
                </form>
                <div class="text-center" style="font-size: smaller;">
                    <a style="font-family: 'Open Sans', sans-serif;" href="/forgot-password">Forgot Password?</a>
                    <p style="font-family: 'Open Sans', sans-serif;" class="mt-1">Login instantly using your social media</p>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="button" class="btn rounded-5"><img src="{{asset('img/logoGoogle.png')}}" alt=""></button>
                    <button type="button" class="btn rounded-5"><img src="{{asset('img/logoFB.png')}}" alt=""></button>
                </div>
            </div>
        </div>
    </div>
    
        



    <script>
        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#PasswordInput");

        togglePassword.addEventListener("click", function () {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // toggle the icon
            this.classList.toggle("bi-eye");
        });

        // prevent form submit
        const form = document.querySelector("form");
        form.addEventListener('submit', function (e) {
            e.preventDefault();
        });
    </script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>