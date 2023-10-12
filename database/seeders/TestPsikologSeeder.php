<?php

namespace Database\Seeders;

use App\Models\TestAnswer;
use App\Models\TesPsikolog;

use App\Models\TestQuestion;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TestPsikologSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // soal
        TestQuestion::create([
            "soal" => "Kamu lebih suka sosialisasi atau bergaul?"
        ]);
        TestQuestion::create([
            "soal" => "Apa peranmu dalam keluarga?"
        ]);

        TestQuestion::create([
            "soal" => "Jelaskan keadaan mood kamu sekarang?"
        ]);
        TestQuestion::create([
            "soal" => "Bagaimana caramu menghabiskan waktu luang?"
        ]);
        TestQuestion::create([
            "soal" => "Kamu dikontrol oleh emosi kamu?"
        ]);
        TestQuestion::create([
            "soal" => "Apakah kamu punya masalah kesalahan mental?"
        ]);
        TestQuestion::create([
            "soal" => "Bagaimana orang lain mendeskripsikan kamu?"
        ]);
        TestQuestion::create([
            "soal" => "Pilih satu harapan di bawah ini"
        ]);
        TestQuestion::create([
            "soal" => "Kamu mencintai kehidupan?"
        ]);
        TestQuestion::create([
            "soal" => "Pilih kutipan yang kamu suka"
        ]);

        // jawaban 1
        TestAnswer::create([
            'test_question_id' => 1,
            "jawaban" => "Saya ingin menghindar",
            "point" => 4
        ]);
        TestAnswer::create([
            'test_question_id' => 2,
            "jawaban" => "Si pendiam",
            "point" => 4
        ]);
        TestAnswer::create([
            'test_question_id' => 3,
            "jawaban" => "Hidup adalah perjuangan dan setelah berjuang lebih banyak untuk bertahan hidup",
            "point" => 3
        ]);
        TestAnswer::create([
            'test_question_id' => 4,
            "jawaban" => "Mendengarkan musik",
            "point" => 4
        ]);
        TestAnswer::create([
            'test_question_id' => 5,
            "jawaban" => "Ya, bisa dibilang begitu",
            "point" => 4
        ]);
        TestAnswer::create([
            'test_question_id' => 6,
            "jawaban" => "Saya merasa akhir-akhir ini sedih terus",
            "point" => 4
        ]);
        TestAnswer::create([
            'test_question_id' => 7,
            "jawaban" => "Bahagia",
            "point" => 1
        ]);
        TestAnswer::create([
            'test_question_id' => 8,
            "jawaban" => "Lebih menjadi diri sendiri",
            "point" => 3
        ]);
        TestAnswer::create([
            'test_question_id' => 9,
            "jawaban" => "Tidak peduli",
            "point" => 3
        ]);
        TestAnswer::create([
            'test_question_id' => 10,
            "jawaban" => "Hidup adalah perjuangan dan berjuang untuk bertahan hidup",
            "point" => 3
        ]);

        // jawaban 2
        TestAnswer::create([
            'test_question_id' => 1,
            "jawaban" => "Saya senang sendiri",
            "point" => 3
        ]);
        TestAnswer::create([
            'test_question_id' => 2,
            "jawaban" => "Orang yang sensibel",
            "point" => 2
        ]);
        TestAnswer::create([
            'test_question_id' => 3,
            "jawaban" => "Masa-masa sulit mengungkapkan siapa teman sejati",
            "point" => 4
        ]);
        TestAnswer::create([
            'test_question_id' => 4,
            "jawaban" => "Bertemu teman dan saudara",
            "point" => 1
        ]);
        TestAnswer::create([
            'test_question_id' => 5,
            "jawaban" => "Saya tidak terlalu punya emosi",
            "point" => 4
        ]);
        TestAnswer::create([
            'test_question_id' => 6,
            "jawaban" => "Saya khawatir dan terlalu cemas",
            "point" => 2
        ]);
        TestAnswer::create([
            'test_question_id' => 7,
            "jawaban" => "Tidak bahagia",
            "point" => 4
        ]);
        TestAnswer::create([
            'test_question_id' => 8,
            "jawaban" => "Selalu bahagia seperti ini",
            "point" => 2
        ]);
        TestAnswer::create([
            'test_question_id' => 9,
            "jawaban" => "Ya, saya mencintai",
            "point" => 1
        ]);
        TestAnswer::create([
            'test_question_id' => 10,
            "jawaban" => "Masa-masa sulit mengungkapkan siapa teman sejati",
            "point" => 4
        ]);

        // jawaban 3
        TestAnswer::create([
            'test_question_id' => 1,
            "jawaban" => "Ya, Saya senang sosialisasi",
            "point" => 1,
        ]);
        TestAnswer::create([
            'test_question_id' => 2,
            "jawaban" => "Bahagia atau ceria",
            "point" => 1,
        ]);
        TestAnswer::create([
            'test_question_id' => 3,
            "jawaban" => "Kekhawatiran lebih produktif dari kunyahan permen karet",
            "point" => 2,
        ]);
        TestAnswer::create([
            'test_question_id' => 4,
            "jawaban" => "Memikirkan sesuatu",
            "point" => 2,
        ]);
        TestAnswer::create([
            'test_question_id' => 5,
            "jawaban" => "Sering sekali setiap saat",
            "point" => 2,
        ]);
        TestAnswer::create([
            'test_question_id' => 6,
            "jawaban" => "Saya anti sosial",
            "point" => 3,
        ]);
        TestAnswer::create([
            'test_question_id' => 7,
            "jawaban" => "Canggung bersosialisasi",
            "point" => 2,
        ]);
        TestAnswer::create([
            'test_question_id' => 8,
            "jawaban" => "Berhenti Khawatir",
            "point" => 4,
        ]);
        TestAnswer::create([
            'test_question_id' => 9,
            "jawaban" => "Ya, saya berharap lebih mudah dari ini",
            "point" => 2,
        ]);
        TestAnswer::create([
            'test_question_id' => 10,
            "jawaban" => "Kekhawatiran lebih produktif dari kunyahan permen karet",
            "point" => 2,
        ]);

        // jawaban 4
        TestAnswer::create([
            'test_question_id' => 1,
            "jawaban" => "Ya, jika dengan orang yang saya kenal",
            "point" => 2,
        ]);
        TestAnswer::create([
            'test_question_id' => 2,
            "jawaban" => "Saya tidak punya peran",
            "point" => 3,
        ]);
        TestAnswer::create([
            'test_question_id' => 3,
            "jawaban" => "Selalu melihat sisi terang di dalam kehidupan",
            "point" => 1,
        ]);
        TestAnswer::create([
            'test_question_id' => 4,
            "jawaban" => "Saya senang menonton film horor",
            "point" => 3,
        ]);
        TestAnswer::create([
            'test_question_id' => 5,
            "jawaban" => "Tidak begitu",
            "point" => 1,
        ]);
        TestAnswer::create([
            'test_question_id' => 6,
            "jawaban" => "Saya rasa tidak",
            "point" => 1,
        ]);
        TestAnswer::create([
            'test_question_id' => 7,
            "jawaban" => "Dingin",
            "point" => 3,
        ]);
        TestAnswer::create([
            'test_question_id' => 8,
            "jawaban" => "Tidak merasa puas",
            "point" => 1,
        ]);
        TestAnswer::create([
            'test_question_id' => 9,
            "jawaban" => "Akan saya coba",
            "point" => 4,
        ]);
        TestAnswer::create([
            'test_question_id' => 10,
            "jawaban" => "Selalu melihat sisi terang di dalam kehidupan",
            "point" => 1,
        ]);
    }
}
