<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    public function up()
    {
        DB::statement("
        CREATE OR REPLACE VIEW view_status_jawaban_pesertas 
        AS
        SELECT 
            p.id_peserta,
            uj.id_ujian,
            s.id_soal,
            s.soal,
            ju.id_jawaban,
            j.jawaban,
            CASE
                WHEN ju.id_jawaban IS NULL THEN 'no answer'
                WHEN j.status_jawaban = 1 THEN 'true'
                WHEN j.status_jawaban = 0 THEN 'false'
            END AS jawaban_status,
            CASE
                WHEN j.status_jawaban IS NULL THEN uj.kosong
                WHEN j.status_jawaban = 1 THEN uj.benar
                WHEN j.status_jawaban = 0 THEN uj.salah
                ELSE uj.kosong
            END AS result
        FROM
            pesertas p
        JOIN
            assign_tests at ON p.id_peserta = at.id_peserta
        JOIN
            ujians uj ON at.id_ujian = uj.id_ujian
        JOIN
            soals s ON uj.id_ujian = s.id_ujian
        LEFT JOIN
            jawaban_users ju ON p.id_peserta = ju.id_peserta AND s.id_soal = ju.id_soal
        LEFT JOIN
            jawabans j ON ju.id_jawaban = j.id_jawaban
        ORDER BY
            p.id_peserta, uj.id_ujian, s.id_soal 
    ");

    DB::statement("
        CREATE OR REPLACE VIEW view_nilai_ujian_pesertas 
        AS
        SELECT 
            id_peserta,
            id_ujian,
            SUM(result) AS total_score
        FROM 
            view_status_jawaban_pesertas
        GROUP BY 
            id_peserta, id_ujian
        ORDER BY
            id_peserta, id_ujian 
    ");
    }

    public function down()
    {
        // 
    }
};
