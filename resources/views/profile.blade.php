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

        .TMD {
            font-family: 'clarendon';

        }

        #profile_pict .pencil {
            width: 2.5vw;
            height: 2.5vw;
            border: none;
        }

        #profile_pict .picture {
            border-radius: 50%;
            /* Ini akan membuat gambar menjadi lingkaran */
            width: 9vw;
            /* Sesuaikan lebar sesuai kebutuhan Anda */
            height: 9vw;
            /* Sesuaikan tinggi sesuai kebutuhan Anda */
            object-fit: cover;
            /* Untuk memastikan gambar sesuai dengan lingkaran tanpa distorsi */
            border: solid;
            border-width: 3px
        }

        p {
            margin: 0;
        }
    </style>
@endpush

@push('css')
    <link rel="stylesheet" href="{{ asset('CSS/main.css') }}">
@endpush

@section('sidebar-main')
    <h1 class="text-end m-4 mfont-clarendon fw-bold">
        Profile.
    </h1>

    <div class="mt-4">
        <div class="container">
            <div class="row gx-5 pb-4">
                {{-- munculkan alert ketika berhasil update profile --}}
                @if (session('updated'))
                    <div class="col-12">
                        <div class="alert alert-success text-start" role="alert">
                            {{ session('updated') }}
                        </div>
                    </div>
                {{-- munculkan error --}}
                @elseif ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @elseif (session('error'))
                    <div class="col-12">
                        <div class="alert alert-danger text-start" role="alert">
                            {{ session('error') }}
                        </div>
                    </div>              
                @endif

                <div class="col-3 d-flex flex-column align-items-center">
                    <form action="{{route('profile.update.avatar')}}" method="POST">
                        @csrf
                        <div id="profile_pict">
                            <button type="button" class="btn position-absolute bottom-0 end-0" style="border: none"
                                id="button-upload">
                                <img class="pencil position-absolute bottom-0 end-0" src="{{ asset('img/pencil.png') }}">
                                <input type="file" id="fileInput" accept="image/*" style="display: none;" name="avatar">
                            </button>
                            <div id="image-container"><img class="picture" src="{{asset('img/avatar.png')}}"></div>
                            <button id="" type="submit" class="visually-hidden"></button>
                        </div>
                    </form>

                    @if ($img_status)
                        {{-- <div style="background-color: #FFEE4C" class="px-4 py-2 mt-3 rounded-4">
                            <p>Hasil Tes Akhir</p>
                            <span class="fw-bold fs-4">SEDANG</span>
                        </div> --}}
                        {{-- {{dd(asset($img_status))}}; --}}
                        <img src="{{ asset($img_status) }}" class="mt-3 w-75">
                    @else
                        <small class="text-danger mtext-justify mt-3">
                            *Lakukan tes untuk update tingkat stress anda
                        </small>
                    @endif

                </div>
                <div class="col text-start ">
                    <form action="{{ route('profile.update') }}" class="mt-4" method="POST">
                        @csrf
                        {{-- name --}}
                        <div class="mb-1">
                            <label for="Name" class="form-label">Nama</label>
                            <input name="name" value="{{ $user->name }}" type="name" class="form-control border-3"
                                id="lastName" placeholder="paidi" required>
                            {{-- error --}}
                            @error('name')
                                <small class="text-danger mtext-justify">
                                    Error
                                </small>
                            @enderror
                        </div>
                        {{-- phone number --}}
                        <div class="mb-1">
                            <label for="phoneNumber" class="form-label">Nomor Telepon</label>
                            <input name="phoneNumber" value="{{ $user->phone_number }}" type="number"
                                class="form-control border-3" id="phoneNumber" placeholder="088123456743"required>
                        </div>
                        {{-- error --}}
                        @error('phoneNumber')
                            <small class="text-danger mtext-justify">
                                {{ $message }}
                            </small>
                        @enderror
                        {{-- date of birth --}}
                        <div class="mb-1">
                            <label for="birthDay" class="form-label">Tanggal lahir</label>

                            <div class="d-flex">
                                {{-- tanggal --}}
                                <div class="flex-fill">
                                    <select name="tanggal" class="form-select me-3 border-3" id="birthDay" required>
                                        <option value="">Hari</option>
                                        @for ($day = 1; $day <= 31; $day++)
                                            <option value="{{ $day }}"
                                                @if ($user->tanggal_lahir == $day) selected @endif>{{ $day }}
                                            </option>
                                        @endfor
                                    </select>
                                    {{-- error --}}
                                    @error('tanggal')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>

                                {{-- bulan --}}
                                <div class="flex-fill">
                                    <select name="bulan" class="form-select me-3 border-3" id="birthMonth" required>
                                        <option value="">Bulan</option>
                                        <option value="Januari" @if ($user->bulan_lahir == 'Januari') selected @endif>Januari
                                        </option>
                                        <option value="Februari" @if ($user->bulan_lahir == 'Februari') selected @endif>Februari
                                        </option>
                                        <option value="Maret" @if ($user->bulan_lahir == 'Maret') selected @endif>Maret
                                        </option>
                                        <option value="April" @if ($user->bulan_lahir == 'April') selected @endif>April
                                        </option>
                                        <option value="Mei" @if ($user->bulan_lahir == 'Mei') selected @endif>Mei
                                        </option>
                                        <option value="Juni" @if ($user->bulan_lahir == 'Juni') selected @endif>Juni
                                        </option>
                                        <option value="Juli" @if ($user->bulan_lahir == 'Juli') selected @endif>Juli
                                        </option>
                                        <option value="Agustus" @if ($user->bulan_lahir == 'Agustus') selected @endif>Agustus
                                        </option>
                                        <option value="September" @if ($user->bulan_lahir == 'September') selected @endif>
                                            September</option>
                                        <option value="Oktober" @if ($user->bulan_lahir == 'Oktober') selected @endif>Oktober
                                        </option>
                                        <option value="November" @if ($user->bulan_lahir == 'November') selected @endif>
                                            November</option>
                                        <option value="Desember" @if ($user->bulan_lahir == 'Desember') selected @endif>
                                            Desember</option>
                                    </select>
                                    {{-- error --}}
                                    @error('bulan')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>
                                {{-- tahun --}}
                                <div class="flex-fill">
                                    <select name="tahun" class="form-select me-3 border-3" id="birthYear" required>
                                        <option value="">Tahun</option>
                                        @for ($year = 1950; $year <= 2023; $year++)
                                            <option value="{{ $year }}" @selected($user->tahun_lahir == $year)>
                                                {{ $year }}</option>
                                        @endfor
                                    </select>
                                    {{-- error --}}
                                    @error('tahun')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{-- email --}}
                        <div class="mb-1">
                            <label for="email" class="form-label">Email</label>
                            <input name="email" value="{{ $user->email }}" type="email" class="form-control border-3"
                                id="email" placeholder="nama@contoh.com" required>
                            {{-- error --}}
                            @error('email')
                                <small class="text-danger mtext-justify">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-4 d-flex  ">
                                <button type="submit" class="btn btn-success mt-4 flex-fill TMD">
                                    Simpan Perubahan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const fileInput = document.getElementById("fileInput");
                const button = document.querySelector("#button-upload");
                const imageContainer = document.getElementById("image-container");

                button.addEventListener("click", function() {
                    fileInput.click();
                });

                fileInput.addEventListener("change", function() {
                    const selectedFile = fileInput.files[0];

                    if (selectedFile) {
                        // Buat elemen gambar baru dan atur atribut src-nya untuk menampilkan gambar yang dipilih.
                        // const image = document.createElement("img");
                        // image.src = URL.createObjectURL(selectedFile);
                        // image.classList.add(
                        //     "picture"); // Tambahkan kelas "picture" untuk mengikuti gaya lingkaran

                        // // Kosongkan kontainer gambar sebelum menambahkan gambar yang baru diunggah.
                        // imageContainer.innerHTML = '';

                        // // Tambahkan elemen gambar ke kontainer gambar di halaman.
                        // imageContainer.appendChild(image);

                        // // Di sini Anda dapat mengirimkan gambar ke server atau melakukan tindakan lain sesuai kebutuhan Anda.
                        // console.log("Anda telah memilih file:", selectedFile.name);

                        $('#profile_pict button[type="submit"]').click();
                    }
                });
            });
        </script>
    @endsection
