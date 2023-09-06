@extends('layouts.master')

@section('title', 'Chatbot')

@push('css')
    <style>
        .message {
            max-width: 40%;
            word-wrap: break-word;
        }
    </style>
@endpush

@push('js')
    <script>
        $(document).ready(function() {
            $("#input_message").keypress(function(e) {
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
@endpush

@section('sidebar-main')
    <h1 class="text-end m-4">
        <img src="{{ asset('img/logo.png') }}">
    </h1>

    <div id="messages" class="d-flex flex-column flex-fill pe-2" style="overflow: auto">

        <div class="d-flex my-2">
            <img class="m-2" width="30" height="30" src="{{ asset('img/lingkaran_hitam.png') }}" alt="">

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
            <img class="m-2" width="30" height="30" src="{{ asset('img/lingkaran_hitam.png') }}" alt="">

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
        <textarea id="input_message" type="text" style="background-color: #FCF4F0; " class="flex-fill form-control"
            rows="1"></textarea>
        <button type="button" id="btn_send" class="btn position-absolute top-50 end-0 translate-middle p-0 m-0">
            <img style="height: 2rem" src="{{ asset('img/plane.png') }}" onclick="send()">
        </button>
    </div>

    {{-- <div class="input-group mb-3">
    <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2">
    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
  </div> --}}


@endsection
