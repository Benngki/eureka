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

    <form action="#"  class="mt-4 ">
        <div class="container">
            <div class="row gx-5 pb-4">
                <div class="col-3 d-flex flex-column align-items-center">
                    <div id="profile_pict">
                        <button type="button" class="btn position-absolute bottom-0 end-0" style="border: none"
                            id="button-upload">
                            <img class="pencil position-absolute bottom-0 end-0" src="{{ asset('img/pencil.png') }}">
                            <input type="file" id="fileInput" accept="image/*" style="display: none;">
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

                </div>
                <div class="col text-start ">
                    {{-- last name --}}
                    <div class="mb-1">
                        <label for="Name" class="form-label">Nama</label>
                        <input type="name" class="form-control border-3" id="lastName" placeholder="paidi" required>
                    </div>
                    {{-- phone number --}}
                    <div class="mb-1">
                        <label for="phoneNumber" class="form-label">Nomor Telepon</label>
                        <input type="number" class="form-control border-3" id="phoneNumber"  placeholder="088123456743"required>
                    </div>
                    {{-- date of birth --}}
                    <div class="mb-1">
                        <label for="birthDay" class="form-label">Tanggal lahir</label>

                        <div class="d-flex">
                            {{-- tanggal --}}
                            <select class="form-select me-3 border-3" id="birthDay" required>
                                @for ($day = 1; $day <= 31; $day++)
                                    <option value="{{ $day }}">{{ $day }}</option>
                                @endfor
                            </select>
                            
                            {{-- bulan --}}
                            <select class="form-select me-3 border-3" id="birthMonth">
                                <option value="January" selected>Januari</option>
                                <option value="February">Februari</option>
                                <option value="March">Maret</option>
                                <option value="April">April</option>
                                <option value="May">Mei</option>
                                <option value="June">Juni</option>
                                <option value="July">Juli</option>
                                <option value="August">Agustus</option>
                                <option value="September">September</option>
                                <option value="October">Oktober</option>
                                <option value="November">November</option>
                                <option value="December">Desember</option>
                            </select>
                            {{-- tahun --}}
                            <label for="birthYear" class="form-label"></label>
                            <select class="form-select me-3 border-3" id="birthYear" required>
                                @for ($year = 1950; $year <= 2023; $year++)
                                    <option value="{{ $year }}">{{ $year }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                    {{-- email --}}
                    <div class="mb-1">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control border-3" id="email" placeholder="nama@contoh.com" required>
                    </div>
                    <div class="row">
                        <div class="col-4 d-flex  ">
                            <button type="submit" class="btn btn-success mt-4 flex-fill TMD">
                                Simpan Perubahan
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
