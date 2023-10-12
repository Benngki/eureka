<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="TesPsikolog.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <style>
        @font-face {
            font-family: "clarendon";
            src: {{ asset('fonts/CLARENDO.ttf') }}
        }

        .TMD {
            font-family: 'clarendon';

        }

        .Opensans {
            font-family: 'Open Sans';
        }

        .inter {
            font-family: 'inter'
        }
    </style>
    <link rel="stylesheet" href="./TesPsikolog.css" />
    <link rel="stylesheet" href="{{ asset('CSS/main.css') }}">

    @livewireStyles
</head>

<body class="vh-100 d-flex flex-column position-relative overflow-hidden">
    <div class="container-fluid text-center">
        <div class="row">
            {{-- start of sidebar --}}
            @include('layouts.sidebar')
            {{-- end of sidebar --}}


            <div class="col-11 offset-1 d-flex flex-column vh-100">
                <div class="container-fluid text-center position-absolute"style="
    opacity: 30%; background-size: vh-100 ;
    background-image: url('{{ asset('img/testsoal.jpg') }}');
    height: 100%; background-position: top;
    transform: translateY(3rem);">
                </div>
                <div class="container-fluid text-center position-relative ">
                    <div class="d-flex flex-column justify-content-center">
                        <div class="cotainer d-flex flex-column align-items-center">
                            <div class="d-flex justify-content-center">
                                <div class="MengelDiri ">
                                    <h1 class="TMD text-center mt-4">
                                        Test Mengenal Diri
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="d-flex justify-content-center align-self-stretch ">
        <img style=" width: 20%;" class="Dialogdirir" alt="" src="{{ asset('img/test soal.jpg') }}" />
    </div> --}}

                <form action="/TesPsikolog" method="POST"
                    class="container-fluid text-center d-flex flex-fill justify-content-center position-relative w-50">
                    {{-- <div class="d-grid gap-2 d-md-block my-auto mx-4" style="transform: translateY(3rem)">
                        <a wire:navigate href="{{ $test->previousPageUrl() }}" role="button" class="btn"><img
                                src="{{ asset('img/next1.png') }}"></a>
                    </div> --}}
                    @csrf
                    <div class="card align-self-center w-75 " style="border:none; background-color:transparent">
                        <p class="title mt-4">{{ $test->first()->soal }}</p>
                        {{-- <div class="content w-100">
                            @foreach ($test->first()->answers as $answer)
                                <input type="radio" name="point" id="{{$answer->id}}">
                            @endforeach
                            @foreach ($test->first()->answers as $answer)
                                <label for="{{$answer->id}}" class="box first">
                                    <div class="plan">
                                        <span class="circle"></span>
                                        <span class="yearly">{{$answer->jawaban}}</span>
                                    </div>
                                </label>
                            @endforeach
                        </div> --}}
                        <div class="content">
                            <input type="radio" name="ans_id" id="one"
                                value="{{ $test->first()->answers->all()[0]['id'] }}"  @if (session('submitted') == $test->first()->answers->all()[0]['id'])
                                    checked
                                @endif>
                            <input type="radio" name="ans_id" id="two"
                                value="{{ $test->first()->answers->all()[1]['id'] }}" @if (session('submitted') == $test->first()->answers->all()[1]['id'])
                                    checked
                                @endif>
                            <input type="radio" name="ans_id" id="three"
                                value="{{ $test->first()->answers->all()[2]['id'] }}" @if (session('submitted') == $test->first()->answers->all()[2]['id'])
                                    checked
                                @endif>
                            <input type="radio" name="ans_id" id="four"
                                value="{{ $test->first()->answers->all()[3]['id'] }}" @if (session('submitted') == $test->first()->answers->all()[3]['id'])
                                    checked
                                @endif>
                            <label for="one" class="box first">
                                <div class="plan">
                                    <span class="circle"></span>
                                    <span class="yearly">{{ $test->first()->answers->all()[0]['jawaban'] }}</span>
                                </div>
                            </label>
                            <label for="two" class="box second">
                                <div class="plan">
                                    <span class="circle"></span>
                                    <span class="yearly">{{ $test->first()->answers->all()[1]['jawaban'] }}</span>
                                </div>
                            </label>
                            <label for="three" class="box third">
                                <div class="plan">
                                    <span class="circle"></span>
                                    <span class="yearly">{{ $test->first()->answers->all()[2]['jawaban'] }}</span>
                                </div>
                            </label>
                            <label for="four" class="box fourw">
                                <div class="plan">
                                    <span class="circle"></span>
                                    <span class="yearly">{{ $test->first()->answers->all()[3]['jawaban'] }}</span>
                            </label>
                            
                        </div>

                        <input type="hidden" name="page_id" value="{{ $test->currentPage() }}">
                        <input type="hidden" name="next_url" value="{{$test->nextPageUrl()}}">
                    </div>
                    
                    {{-- button --}}
                    <button type="submit" class="btn btn-primary mt-3 @if (session('submitted'))
                        disabled
                    @endif">
                        @if ($test->currentPage() < 10)
                            Selanjutnya
                        @else
                            Selesai
                        @endif
                    </button>
                </div>
                    {{-- <div class="d-grid gap-2 d-md-block my-auto mx-4" style="transform: translateY(3rem)">
                        <a wire:navigate href="{{ $test->nextPageUrl() }}" role="button" class="btn"><img
                                src="{{ asset('img/next2.png') }}"></a>
                    </div> --}}
                </form>


            </div>
        </div>
    </div>


    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>

    @livewireScripts
</body>

</html>
