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

    <form action="/profile/store" class="mt-4" method="POST">
        @csrf
        <div class="container">
            <div class="row gx-5 pb-4">
                <div class="col-3 d-flex flex-column align-items-center">
                    <div id="profile_pict">
                        <button type="button" class="btn position-absolute bottom-0 end-0" style="border: none"
                            id="button-upload">
                            <img class="pencil position-absolute bottom-0 end-0" src="{{ asset('img/pencil.png') }}">
                            <input type="file" id="fileInput" accept="image/*" style="display: none;" name="image">
                        </button>
                        <div id="image-container"><img class="picture" src="{{ asset('img/avatar.png') }}"></div>

                    </div>

                    <div style="background-color: #FFEE4C" class="px-4 py-2 my-3 rounded-4">
                        <p>Hasil Tes Akhir</p>
                        <span class="fw-bold fs-4">SEDANG</span>
                    </div>


                    <small class="text-danger mtext-justify">
                        *Lakukan tes untuk update tingkat stress anda
                    </small>

                    <x-button-a href="{{route('logout')}}" class="w-100 mt-3">
                        keluar
                    </x-button-a>
                </div>
                <div class="col text-start">

                    {{-- first name --}}
                    <div class="mb-1">
                        <label for="firstName" class="form-label">First Name</label>
                        <input name="firstName" type="text" class="form-control border-3" id="firstName" required >
                    </div>
                    {{-- last name --}}
                    <div class="mb-1">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input name= "lastName" type="text" class="form-control border-3" id="lastName" required>
                    </div>
                    {{-- phone number --}}
                    <div class="mb-1">
                        <label for="phoneNumber" class="form-label">Phone Number</label>
                        <input  name= "phoneNumber" type="text" class="form-control border-3" id="phoneNumber" required>
                    </div>
                    {{-- date of birth --}}
                    <div class="mb-1">
                        <label for="birthDay" class="form-label">Date of Birth</label>

                        <div class="d-flex">
                            {{-- tanggal --}}
                            <input name= "tanggal" type="number" class="form-control border-3 me-3" id="birthDay" required>
                            {{-- bulan --}}
                            <select name="bulan" class="form-control me-3 border-3" id="birthMonth">
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
                            <input name="tahun" type="number" class="form-control border-3" id="birthYear" required>
                        </div>
                    </div>
                    {{-- email --}}
                    <div class="mb-1">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control border-3" id="email" required>
                    </div>
                    <div class="row">
                        <div class="col-4 d-flex  ">
                            <button type="submit" class="btn btn-success mt-4 flex-fill">
                                Save Changes
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </form>
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
                    const image = document.createElement("img");
                    image.src = URL.createObjectURL(selectedFile);
                    image.classList.add(
                    "picture"); // Tambahkan kelas "picture" untuk mengikuti gaya lingkaran

                    // Kosongkan kontainer gambar sebelum menambahkan gambar yang baru diunggah.
                    imageContainer.innerHTML = '';

                    // Tambahkan elemen gambar ke kontainer gambar di halaman.
                    imageContainer.appendChild(image);

                    // Di sini Anda dapat mengirimkan gambar ke server atau melakukan tindakan lain sesuai kebutuhan Anda.
                    console.log("Anda telah memilih file:", selectedFile.name);
                }
            });
        });
    </script>
@endsection
