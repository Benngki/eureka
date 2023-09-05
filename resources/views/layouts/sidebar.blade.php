<div style="background-color: #48904F; position: fixed" class="col-1 vh-100 d-flex flex-column rounded-end-5 ">
    <a wire:navigate class="btn my-2 mt-4 p-0" role="button" href="/profile">
        <img class="w-50" src="{{ asset('img/avatar.png') }}">
        <p class="m-0">Username</p>
    </a>

    <a wire:navigate class="btn my-2 p-0" role="button" href="/chatbot">
        <div class="py-1 m-2 mb-0 rounded-4 bg-white mx-auto p-2" style="width: 60%">
            <img class="w-100" src="{{ asset('img/chatbot.png') }}">
        </div>
        <p class="m-0">Chatbot</p>
    </a>

    <a class="btn my-2 p-0" role="button">
        <div class="py-1 m-2 mb-0 rounded-4 bg-white mx-auto p-2" style="width: 60%">
            <img class="w-100" src="{{ asset('img/test.png') }}">
        </div>
        <p class="m-0">Test</p>
    </a>

    <a href="#" class="btn mt-auto mb-5 mx-auto" role="button" style="width: 60%">
        <img class="w-100" src="{{ asset('img/home.png') }}">
    </a>
</div>