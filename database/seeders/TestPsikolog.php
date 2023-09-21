<?php

namespace Database\Seeders;

use App\Models\TesPsikolog;
use Illuminate\Database\Seeder;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TestPsikolog extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        TesPsikolog::create([
            "soal" => "Kamu lebih suka sosialisasi atau bergaul?",
            "jawaban1" => "Saya ingin menghindar",
            "jawaban2" => "Saya senang sendiri",
            "jawaban3" => "Ya, Saya senang sosialisasi",
            "jawaban4" => "Ya, jika dengan orang yang saya kenal",
            "point1" => 4,
            "point2" => 3,
            "point3" => 1,
            "point4" => 2,
        ]);
        TesPsikolog::create([
            "soal" => "Apa peranmu dalam keluarga?",
            "jawaban1" => "Si pendiam",
            "jawaban2" => "Orang yang sensibel",
            "jawaban3" => "Bahagia atau ceria",
            "jawaban4" => "Saya tidak punya peran",
            "point1" => 4,
            "point2" => 2,
            "point3" => 1,
            "point4" => 3,
        ]);

        TesPsikolog::create([
            "soal" => "Jelaskan keadaan mood kamu sekarang?",
            "jawaban1" => "Hidup adalah perjuangan dan setelah berjuang lebih banyak untuk bertahan hidup",
            "jawaban2" => "Masa-masa sulit mengungkapkan siapa teman sejati",
            "jawaban3" => "Kekhawatiran lebih produktif dari kunyahan permen karet",
            "jawaban4" => "Selalu melihat sisi terang di dalam kehidupan",
            "point1" => 3,
            "point2" => 4,
            "point3" => 2,
            "point4" => 1,
        ]);
        TesPsikolog::create([
            "soal" => "Bagaimana caramu menghabiskan waktu luang?",
            "jawaban1" => "Mendengarkan musik",
            "jawaban2" => "Bertemu teman dan saudara",
            "jawaban3" => "Memikirkan sesuatu",
            "jawaban4" => "Saya senang menonton film horor",
            "point1" => 4,
            "point2" => 1,
            "point3" => 2,
            "point4" => 3,
        ]);
        TesPsikolog::create([
            "soal" => "Kamu dikontrol oleh emosi kamu?",
            "jawaban1" => "Ya, bisa dibilang begitu",
            "jawaban2" => "Saya tidak terlalu punya emosi",
            "jawaban3" => "Sering sekali setiap saat",
            "jawaban4" => "Tidak begitu",
            "point1" => 4,
            "point2" => 4,
            "point3" => 2,
            "point4" => 1,
        ]);
        TesPsikolog::create([
            "soal" => "Apakah kamu punya masalah kesalahan mental?",
            "jawaban1" => "Saya merasa akhir-akhir ini sedih terus",
            "jawaban2" => "Saya khawatir dan terlalu cemas",
            "jawaban3" => "Saya anti sosial",
            "jawaban4" => "Saya rasa tidak",
            "point1" => 4,
            "point2" => 2,
            "point3" => 3,
            "point4" => 1,
        ]);
        TesPsikolog::create([
            "soal" => "Bagaimana orang lain mendeskripsikan kamu?",
            "jawaban1" => "Bahagia",
            "jawaban2" => "Tidak bahagia",
            "jawaban3" => "Canggung bersosialisasi",
            "jawaban4" => "Dingin",
            "point1" => 1,
            "point2" => 4,
            "point3" => 2,
            "point4" => 3,
        ]);
        TesPsikolog::create([
            "soal" => "Pilih satu harapan di bawah ini",
            "jawaban1" => "Lebih menjadi diri sendiri",
            "jawaban2" => "Selalu bahagia seperti ini",
            "jawaban3" => "Berhenti Khawatir",
            "jawaban4" => "Tidak merasa puas",
            "point1" => 3,
            "point2" => 2,
            "point3" => 4,
            "point4" => 1,
        ]);
        TesPsikolog::create([
            "soal" => "Kamu mencintai kehidupan?",
            "jawaban1" => "Tidak peduli",
            "jawaban2" => "Ya, saya mencintai",
            "jawaban3" => "Ya, saya berharap lebih mudah dari ini",
            "jawaban4" => "Akan saya coba",
            "point1" => 3,
            "point2" => 1,
            "point3" => 2,
            "point4" => 4,
        ]);
        TesPsikolog::create([
            "soal" => "Pilih kutipan yang kamu suka",
            "jawaban1" => "Hidup adalah perjuangan dan berjuang untuk bertahan hidup",
            "jawaban2" => "Masa-masa sulit mengungkapkan siapa teman sejati",
            "jawaban3" => "Kekhawatiran lebih produktif dari kunyahan permen karet",
            "jawaban4" => "Selalu melihat sisi terang di dalam kehidupan",
            "point1" => 3,
            "point2" => 4,
            "point3" => 2,
            "point4" => 1,
        ]);
    }
}
