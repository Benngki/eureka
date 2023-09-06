<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('CSS/forgot_password.css')}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>

<body class="vh-100">
    <div class="container d-flex flex-column justify-content-center h-100 py-2">
        <div class="d-flex justify-content-center">
            <img style="max-height: 20vh; max-width: 80%;" class="Dialogdiri" src="{{ asset('img/logo.png') }}" />
        </div>
        <div class="d-flex justify-content-center mt-4">
            <img style="max-height: 40vh; max-width: 80%;" class="Dialogdiri" src="{{ asset('img/Feb-Business_9 1.png') }}" />
        </div>
        <div class="d-flex justify-content-center mt-4">
            <div class="ForgotName">
                <p>
                    Forgot Password
                </p>
                <div class="Dpa">
                    <p>
                        Don’t have an account?
                        <a wire:navigate href="/register" class="singup" style="font-family: 'Open Sans', sans-serif;" >
                            Sign Up Here
                        </a>
                    </p>
                </div>

                <form action="">
                    <div class="">
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="Enter your email!" style="font-family: 'Open Sans' " required>
                    </div>
                    <button type="submit" class="btn btnpo w-100">Send Email</button>                    
                </form>
            </div>
        </div>
    </div>

    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
