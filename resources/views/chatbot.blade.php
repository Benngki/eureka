@extends('layouts.master')

@section('title', 'Chatbot')

@push('css')
    <style>
        .message {
            max-width: 40%;
            word-wrap: break-word;
        }

        #input_message {
            height: fit-content;
            border: none;
            box-shadow: none;
            border-color: transparent;
        }
    </style>
@endpush

@push('js')
    <script>
        const textarea = document.querySelector('textarea#input_message');
        $(document).ready(function() {
            $("#input_message").keydown(function(e) {
                textarea.style.height = `100%`;
                let scHeight = e.target.scrollHeight;
                textarea.style.height = `${scHeight}px`;
            });

            $("#input_message").keyup(function(e) {
                if (e.key == 'Enter' && !e.shiftKey) {
                    e.preventDefault();
                    send();
                }

                textarea.style.height = `100%`;
                let scHeight = e.target.scrollHeight;
                textarea.style.height = `${scHeight}px`;
            });
        });

        function send() {

            if ($('#input_message').val() != "") {
                const val = $('#input_message').val().trim().replaceAll("\n", '<br>');
                $("#messages").append(

                    `<div style="background-color: #00B112" class="message p-3 my-2 rounded-4 align-self-end">
                <p class="text text-start m-0">` + val + `</p>
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


                // fixed scroll bottom
                var messages = document.querySelector('#messages');

                // alert(messages.scrollTop);

                messages.scrollTop = messages.scrollHeight - messages.clientHeight;


                // mengoo
                $('#input_message').val('');
            }
        }
    </script>
@endpush

@section('main-class', 'vh-100')

@section('sidebar-main')
    <h1 class="text-end m-4">
        <img src="{{ asset('img/logo.png') }}">
    </h1>

    <div id="messages" class="d-flex flex-column flex-fill pe-2 overflow-auto h-100">

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


    <div class="my-3 rounded-4 d-flex w-100">
        <div style="background-color: #FCF4F0;" class="w-100 mx-3 d-flex">
            <textarea id="input_message" type="text"
                style="max-height: 6rem; background-color: #FCF4F0; resize: none; overflow: hidden;"
                class="flex-fill form-control" rows="1"></textarea>
            <button type="button" id="btn_send" class="btn p-0 m-0 me-2 align-self-end"
                onclick="send()">
                <img style="height: 2rem" src="{{ asset('img/plane.png') }}">
            </button>
        </div>
    </div>
@endsection