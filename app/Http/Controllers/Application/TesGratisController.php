<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TesGratisController extends Controller
{
    public function stressTestHomeView()
    {
        return view('app.feature.tesGratis.optionTest-view.test-stress');
    }
    public function depressionTestHomeView()
    {
        return view('app.feature.tesGratis.optionTest-view.test-depression');
    }
    public function traumaTestHomeView()
    {
        return view('app.feature.tesGratis.optionTest-view.test-trauma');
    }
    public function moodTestHomeView()
    {
        return view('app.feature.tesGratis.optionTest-view.test-mood');
    }
    public function anxietyTestHomeView()
    {
        return view('app.feature.tesGratis.optionTest-view.test-anxiety');
    }
    public function FreeTestHomeView()
    {
        return view('app.feature.tesGratis.optionTest-view.test-free');
    }

    public function runTestView($testType)
    {
        if ($testType == 'stress') {
            return view('app.feature.tesGratis.runTest-view.runTest-stress');
        } elseif ($testType == 'depression') {
            return view(
                'app.feature.tesGratis.runTest-view.runTest-depression'
            );
        } elseif ($testType == 'trauma') {
            return view('app.feature.tesGratis.runTest-view.runTest-trauma');
        } elseif ($testType == 'kecemasan') {
            return view('app.feature.tesGratis.runTest-view.runTest-anxiety');
        } elseif ($testType == 'mood') {
            return view('app.feature.tesGratis.runTest-view.runTest-mood');
        }
        elseif ($testType == 'free') {
            $questions = [
                // Stress
                ["id" => 1, "soal" => "stress_1", "pertanyaan" => "Saya merasa bahwa diri saya menjadi marah karena hal-hal sepele.", "opsi" => ["tidak pernah", "kadang-kadang", "sering", "sangat sering"]],
                ["id" => 6, "soal" => "stress_2", "pertanyaan" => "Saya cenderung bereaksi berlebihan terhadap suatu situasi.", "opsi" => ["tidak pernah", "kadang-kadang", "sering", "sangat sering"]],
                ["id" => 8, "soal" => "stress_3", "pertanyaan" => "Saya merasa telah menghabiskan banyak energi disaat merasa cemas.", "opsi" => ["tidak pernah", "kadang-kadang", "sering", "sangat sering"]],
                ["id" => 11, "soal" => "stress_4", "pertanyaan" => "Saya sedang merasa gelisah.", "opsi" => ["tidak pernah", "kadang-kadang", "sering", "sangat sering"]],
                ["id" => 12, "soal" => "stress_5", "pertanyaan" => "Saya merasa sulit untuk bersantai.", "opsi" => ["tidak pernah", "kadang-kadang", "sering", "sangat sering"]],
                ["id" => 14, "soal" => "stress_6", "pertanyaan" => "Saya sulit untuk sabar dalam menghadapi gangguan terhadap hal yang sedang saya lakukan.", "opsi" => ["tidak pernah", "kadang-kadang", "sering", "sangat sering"]],
                ["id" => 18, "soal" => "stress_7", "pertanyaan" => "Saya merasa bahwa saya mudah tersinggung.", "opsi" => ["tidak pernah", "kadang-kadang", "sering", "sangat sering"]],

                // Anxiety (Kecemasan)
                ["id" => 2, "soal" => "anxiety_1", "pertanyaan" => "Saya merasa mulut saya sering kering.", "opsi" => ["tidak pernah", "kadang-kadang", "sering", "sangat sering"]],
                ["id" => 4, "soal" => "anxiety_2", "pertanyaan" => "Saya mengalami kesulitan bernafas (misalnya: sering kali terengah-engah atau tidak dapat bernafas padahal tidak melakukan aktivitas fisik sebelumnya).", "opsi" => ["tidak pernah", "kadang-kadang", "sering", "sangat sering"]],
                ["id" => 7, "soal" => "anxiety_3", "pertanyaan" => "Saya merasa gemetar (misalnya: pada tangan).", "opsi" => ["tidak pernah", "kadang-kadang", "sering", "sangat sering"]],
                ["id" => 9, "soal" => "anxiety_4", "pertanyaan" => "Saya merasa khawatir dengan situasi dimana saya mungkin menjadi panik dan mempermalukan diri sendiri.", "opsi" => ["tidak pernah", "kadang-kadang", "sering", "sangat sering"]],
                ["id" => 15, "soal" => "anxiety_5", "pertanyaan" => "Saya merasa saya hampir panik.", "opsi" => ["tidak pernah", "kadang-kadang", "sering", "sangat sering"]],
                ["id" => 19, "soal" => "anxiety_6", "pertanyaan" => "Saya menyadari perubahan detak jantung, walaupun tidak sehabis melakukan aktivitas fisik (misalnya: merasa detak jantung meningkat atau melemah).", "opsi" => ["tidak pernah", "kadang-kadang", "sering", "sangat sering"]],
                ["id" => 20, "soal" => "anxiety_7", "pertanyaan" => "Saya merasa takut tanpa alasan yang jelas.", "opsi" => ["tidak pernah", "kadang-kadang", "sering", "sangat sering"]],

                // Depresi
                ["id" => 3, "soal" => "depresi_1", "pertanyaan" => "Saya sama sekali tidak dapat merasakan perasaan positif.", "opsi" => ["tidak pernah", "kadang-kadang", "sering", "sangat sering"]],
                ["id" => 5, "soal" => "depresi_2", "pertanyaan" => "Saya sepertinya tidak kuat lagi untuk melakukan suatu kegiatan.", "opsi" => ["tidak pernah", "kadang-kadang", "sering", "sangat sering"]],
                ["id" => 10, "soal" => "depresi_3", "pertanyaan" => "Saya merasa tidak ada hal yang dapat diharapkan di masa depan.", "opsi" => ["tidak pernah", "kadang-kadang", "sering", "sangat sering"]],
                ["id" => 13, "soal" => "depresi_4", "pertanyaan" => "Saya merasa sedih dan tertekan.", "opsi" => ["tidak pernah", "kadang-kadang", "sering", "sangat sering"]],
                ["id" => 16, "soal" => "depresi_5", "pertanyaan" => "Saya tidak merasa antusias dalam hal apapun.", "opsi" => ["tidak pernah", "kadang-kadang", "sering", "sangat sering"]],
                ["id" => 17, "soal" => "depresi_6", "pertanyaan" => "Saya merasa bahwa saya tidak berharga sebagai seorang manusia.", "opsi" => ["tidak pernah", "kadang-kadang", "sering", "sangat sering"]],
                ["id" => 21, "soal" => "depresi_7", "pertanyaan" => "Saya merasa bahwa hidup tidak bermanfaat.", "opsi" => ["tidak pernah", "kadang-kadang", "sering", "sangat sering"]]
            ];

            return view('app.feature.tesGratis.runTest-view.runTest-free',compact('questions'));
        }
    }

    public function countScoreStressTest(Request $request)
{
    $total_anxiety = 0;
    $total_depresi = 0;
    $total_stress = 0;

    $i = 1;
    while ($request->input('stress_' . $i) !== null) {
        if ($request->input('stress_' . $i) !== '') {
            $total_stress += (int) $request->input('stress_' . $i);
        }
        if ($request->input('depresi_' . $i) !== null) {
            $total_depresi += (int) $request->input('depresi_' . $i);
        }
        if ($request->input('anxiety_' . $i) !== null) {
            $total_anxiety += (int) $request->input('anxiety_' . $i);
        }
        $i++;
    }

    // Determine the scale for each category
    $scale_anxiety = $this->scalingScoreAnxiety($total_anxiety);
    $scale_depresi = $this->scalingScoreDepresi($total_depresi);
    $scale_stress = $this->scalingScoreStress($total_stress);

    return view(
        'app.feature.tesGratis.runTest-view.runTest-result',
        compact('total_anxiety', 'total_depresi', 'total_stress', 'scale_anxiety', 'scale_depresi', 'scale_stress')
    );
}

private function scalingScoreAnxiety($score)
{
    if ($score >= 0 && $score <= 7) {
        return 'Normal';
    } elseif ($score >= 8 && $score <= 9) {
        return 'Ringan';
    } elseif ($score >= 10 && $score <= 14) {
        return 'Sedang';
    } elseif ($score >= 15 && $score <= 19) {
        return 'Parah';
    } else {
        return 'Sangat-Parah';
    }
}

private function scalingScoreDepresi($score)
{
    if ($score >= 0 && $score <= 9) {
        return 'Normal';
    } elseif ($score >= 10 && $score <= 13) {
        return 'Ringan';
    } elseif ($score >= 14 && $score <= 20) {
        return 'Sedang';
    } elseif ($score >= 21 && $score <= 27) {
        return 'Parah';
    } else {
        return 'Sangat-Parah';
    }
}

private function scalingScoreStress($score)
{
    if ($score >= 0 && $score <= 14) {
        return 'Normal';
    } elseif ($score >= 15 && $score <= 18) {
        return 'Ringan';
    } elseif ($score >= 19 && $score <= 25) {
        return 'Sedang';
    } elseif ($score >= 26 && $score <= 33) {
        return 'Parah';
    } else {
        return 'Sangat-Parah';
    }
}

}
