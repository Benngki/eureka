@extends('layouts.master')

@section('title', 'Profile')

@push('css')
    <style>
        @font-face {
            font-family: "clarendon";
            src: {{ asset('fonts/CLARENDO.ttf') }}
        }

        .mfont-clarendon {
            font-family: "clarendon";
        }

        .mtext-justify {
            text-align: justify;
        }

        .message {
            max-width: 40%;
            word-wrap: break-word;
        }

        #profile_pict {
            position: relative;
            width: fit-content;
        }

        #profile_pict .picture {
            width: 8rem;
            height: 8rem;
        }

        #profile_pict .pencil {
            width: 2.5rem;
            height: 2.5rem;
        }

        p {
            margin: 0;
        }
    </style>
@endpush

@push('css')
    <link rel="stylesheet" href="{{asset('CSS/main.css')}}">
@endpush

@section('sidebar-main')
    <h1 class="text-end m-4 mfont-clarendon fw-bold">
        Profile
    </h1>

    <form action="#">
        <div class="container">
            <div class="row gx-5 pb-4">
                <div class="col-3 d-flex flex-column align-items-center">
                    <div id="profile_pict">
                        <img class="picture" src="{{ asset('img/avatar.png') }}">
                        <button type="button" class="btn position-absolute bottom-0 end-0">
                            <img class="pencil position-absolute bottom-0 end-0" src="{{ asset('img/pencil.png') }}">
                        </button>
                    </div>

                    <div style="background-color: #FFEE4C" class="px-4 py-2 my-3 rounded-4">
                        <p>Hasil Tes Akhir</p>
                        <span class="fw-bold fs-4">SEDANG</span>
                    </div>


                    <small class="text-danger mtext-justify">
                        *Lakukan tes untuk update tingkat stress anda
                    </small>

                    <button type="submit" class="btn btn-success align-self-stretch mt-5">
                        Save Changes
                    </button>

                </div>
                <div class="col text-start">

                    {{-- first name --}}
                    <div class="mb-1">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="name" class="form-control border-3" id="firstName" required>
                    </div>
                    {{-- last name --}}
                    <div class="mb-1">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="name" class="form-control border-3" id="lastName" required>
                    </div>
                    {{-- phone number --}}
                    <div class="mb-1">
                        <label for="phoneNumber" class="form-label">Phone Number</label>
                        <input type="number" class="form-control border-3" id="phoneNumber" required>
                    </div>
                    {{-- date of birth --}}
                    <div class="mb-1">
                        <label for="birthDay" class="form-label">Date of Birth</label>

                        <div class="d-flex">
                            {{-- tanggal --}}
                            <input type="number" class="form-control border-3 me-3" id="birthDay" required>
                            {{-- bulan --}}
                            <select class="form-select me-3 border-3" id="birthMonth">
                                <option value="January" selected>January</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                            </select>
                            {{-- tahun --}}
                            <input type="number" class="form-control border-3" id="birthYear" required>
                        </div>
                    </div>
                    {{-- email --}}
                    <div class="mb-1">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control border-3" id="email" required>
                    </div>
                    {{-- new password --}}
                    <div class="mb-1">
                        <label for="newPassword" class="form-label">New Password</label>
                        <input type="password" class="form-control border-3" id="newPassword">
                    </div>
                    {{-- confirm password --}}
                    <div class="mb-1">
                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control border-3" id="confirmPassword">
                    </div>

                </div>
            </div>
        </div>
    </form>
@endsection
