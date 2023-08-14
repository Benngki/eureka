<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chatbot</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

        <style>
            .message{
                max-width: 40%;
                word-wrap: break-word;
            }
        </style>
</head>

<body>



    <header></header>

    <main style="background-color: #A2C29F" class="vh-100">

        <div class="container-fluid text-center">
            <div class="row">
                {{-- start of sidebar --}}
                <div style="background-color: #48904F" class="col-1 vh-100 d-flex flex-column ">
                    <a class="btn my-2 mt-4 p-0" role="button">
                        <img class="w-50" src="{{asset('img/avatar.png')}}">
                        <p>Username</p>
                    </a>

                    <a class="btn my-2 p-0" role="button">
                        <div class="p-2 bg-white">
                            <img class="w-50" src="{{asset('img/chatbot.png')}}">
                        </div>
                        <p>Chatbot</p>
                    </a>

                    <a class="btn my-2 p-0" role="button">
                        <img class="w-50" src="{{asset('img/test.png')}}">
                        <p>Test</p>
                    </a>

                    <a href="#" class="btn mt-auto mb-4" role="button">
                        <img class="w-75" src="{{asset('img/home.png')}}">
                    </a>
                </div>
                {{-- end of sidebar --}}


                <div style="background-color: #A2C29F" class="col-11 d-flex flex-column vh-100">
                    <h1 class="text-end m-4">
                        <img src="{{ asset('img/logo.png') }}">
                    </h1>

                    <div id="messages" class="d-flex flex-column flex-fill pe-2" style="overflow: auto">

                        <div class="d-flex my-2">
                            <img class="m-2" width="30" height="30"
                                src="{{ asset('img/lingkaran_hitam.png') }}" alt="">

                            <div style="background-color: #FCF4F0" class="message p-3 rounded-4">
                                <p class="text text-start m-0">Halo, Selamat datang!</p>
                                <p class="time text-end fw-bold m-0">18.44</p>
                            </div>
                        </div>

                        <div style="background-color: #00B112" class="message p-3 my-2 rounded-4 align-self-end">
                            <p class="text text-start m-0">Saya ingin konsultasi</p>
                            <p class="time text-end fw-bold m-0">18.44</p>
                        </div>

                        <div class="d-flex my-2">
                            <img class="m-2" width="30" height="30"
                                src="{{ asset('img/lingkaran_hitam.png') }}" alt="">

                            <div style="background-color: #FCF4F0" class="message p-3 rounded-4">
                                <p class="text text-start m-0">Saya dialogBot siap membantu anda!</p>
                                <p class="time text-end fw-bold m-0">18.44</p>
                            </div>
                        </div>

                    </div>

                    {{-- <div class="position-relative my-3 d-flex">
                        <textarea class="flex-fill" rows="1"></textarea>
                        <button type="button" class="btn position-absolute top-50 end-0 translate-middle p-0 m-0">
                            <img style="height: 2rem" src="{{ asset('img/plane.png') }}">
                        </button>
                    </div> --}}

                    <div style="background-color: #FCF4F0; min-height: 4rem"
                        class="my-4 mx-2 rounded-4 d-flex position-relative fixed-bottom">
                        <textarea id="input_message" type="text" style="background-color: #FCF4F0; "
                            class="flex-fill form-control" rows="1"></textarea>
                        <button type="button" id="btn_send"
                            class="btn position-absolute top-50 end-0 translate-middle p-0 m-0">
                            <img style="height: 2rem" src="{{ asset('img/plane.png') }}" onclick="send()">
                        </button>
                    </div>

                    {{-- <div class="input-group mb-3">
                        <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
                      </div> --}}

                </div>
            </div>
        </div>


    </main>

    <footer></footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <script>

        $(document).ready(function () {
            $("#input_message").keypress(function (e) { 
                if (e.key == 'Enter' && !e.shiftKey) {
                    send()
                }
            });
        });

        function send() {

            if ($('#input_message').val() != "") {
                $("#messages").append(

                    `<div style="background-color: #00B112" class="message p-3 my-2 rounded-4 align-self-end">
                            <p class="text text-start m-0">` + $('#input_message').val() + `</p>
                            <p class="time text-end fw-bold m-0">18.44</p>
                        </div>` +
                    `
                        <div class="d-flex my-2">
                            <img class="m-2" width="30" height="30"
                                src="{{ asset('img/lingkaran_hitam.png') }}" alt="">

                            <div style="background-color: #FCF4F0" class="message p-3 rounded-4">
                                <p class="text text-start m-0">Saya dialogBot siap membantu anda!</p>
                                <p class="time text-end fw-bold m-0">18.44</p>
                            </div>
                        </div>`

                );

                // mengoo
                $('#input_message').val("")

                // fixed bottom
                var messages = document.querySelector('#messages');
                messages.scrollTop = messages.scrollHeight - messages.clientHeight;
            }


        }
    </script>
</body>

</html>
