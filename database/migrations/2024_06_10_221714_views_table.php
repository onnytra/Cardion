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
            s.id_subyek,
            s.soal,
            ju.id_jawaban,
            j.jawaban,
            CASE
                WHEN ju.id_jawaban IS NULL THEN 'kosong'
                WHEN j.status_jawaban = 1 THEN 'benar'
                WHEN j.status_jawaban = 0 THEN 'salah'
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
            SUM(result) AS total_score,
            COUNT(CASE WHEN jawaban_status = 'benar' THEN 1 END) AS total_benar,
            COUNT(CASE WHEN jawaban_status = 'salah' THEN 1 END) AS total_salah,
            COUNT(CASE WHEN jawaban_status = 'kosong' THEN 1 END) AS total_kosong
        FROM 
            view_status_jawaban_pesertas
        GROUP BY 
            id_peserta, id_ujian
        ORDER BY
            id_peserta, id_ujian 
    ");

    DB::statement("
        CREATE OR REPLACE VIEW view_nilai_ujian_pesertas_ranking 
        AS
        SELECT 
            id_peserta,
            id_ujian,
            total_score,
            total_benar,
            total_salah,
            total_kosong,
            (SELECT COUNT(DISTINCT total_score) 
            FROM view_nilai_ujian_pesertas v2 
            WHERE v2.id_ujian = v1.id_ujian AND v2.total_score >= v1.total_score) AS peringkat
        FROM 
            view_nilai_ujian_pesertas v1
        ORDER BY 
            id_ujian, peringkat  
    ");

    DB::statement("
        CREATE OR REPLACE VIEW view_status_jawaban_pesertas_by_subyek 
        AS
        SELECT 
            p.id_peserta,
            uj.id_ujian,
            s.id_subyek,
            SUM(CASE
                WHEN j.status_jawaban IS NULL THEN uj.kosong
                WHEN j.status_jawaban = 1 THEN uj.benar
                WHEN j.status_jawaban = 0 THEN uj.salah
                ELSE uj.kosong
            END) AS total_score,
            COUNT(CASE WHEN ju.id_jawaban IS NULL THEN 1 END) AS total_kosong,
            COUNT(CASE WHEN j.status_jawaban = 1 THEN 1 END) AS total_benar,
            COUNT(CASE WHEN j.status_jawaban = 0 THEN 1 END) AS total_salah
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
        GROUP BY 
            p.id_peserta, uj.id_ujian, s.id_subyek
        ORDER BY
            p.id_peserta, uj.id_ujian, s.id_subyek 
    ");

    DB::statement("
        CREATE OR REPLACE VIEW view_status_jawban_pesertas_by_subyek_rangking 
        AS
        SELECT 
            v1.id_peserta,
            v1.id_ujian,
            v1.id_subyek,
            v1.total_score,
            v1.total_benar,
            v1.total_salah,
            v1.total_kosong,
            (SELECT COUNT(DISTINCT v2.total_score) 
            FROM view_status_jawaban_pesertas_by_subyek v2 
            WHERE v2.id_ujian = v1.id_ujian 
            AND v2.id_subyek = v1.id_subyek 
            AND v2.total_score >= v1.total_score) AS peringkat
        FROM 
            view_status_jawaban_pesertas_by_subyek v1
        ORDER BY 
            v1.id_ujian, v1.id_subyek, peringkat 
    ");
    }

    public function down()
    {
        // 
    }
};
