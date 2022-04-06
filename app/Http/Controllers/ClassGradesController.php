<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassGradesController extends Controller
{
    public function start()
    {
        return view('start');
    }

    public function enter_Names(Request $request)
    {
        $Student_1 = $request->name_1;
        $Student_2 = $request->name_2;
        $Student_3 = $request->name_3;
        $Student_4 = $request->name_4;
        $Student_5 = $request->name_5;

        return view('names', [
            'Student_1' => $name_1,
            'Student_2' => $name_2,
            'Student_3' => $name_3,
            'Student_4' => $name_4,
            'Student_5' => $name_5,
        ]);
    }

    protected function computeAverageGrade($midterm, $final)
    {
        $average = ($midterm + $final) / 2;
        return round($average, 2);
    }

    public function computeGrades(Request $request)
    {
        $Student_1 = $request->name_1;
        $Student_2 = $request->name_2;
        $Student_3 = $request->name_3;
        $Student_4 = $request->name_4;
        $Student_5 = $request->name_5;

        $s1_average = $this->computeAverageGrade($request->s1_midterm, $request->s1finals);
        $s2_average = $this->computeAverageGrade($request->s2_midterm, $request->s2_finals);
        $s3_average = $this->computeAverageGrade($request->s3_midterm, $request->s3_finals);
        $s4_average = $this->computeAverageGrade($request->s4_midterm, $request->s4_finals);
        $s5_average = $this->computeAverageGrade($request->s5_midterm, $request->s5_finals);

        return view('scores', [
            'Student_1' => $player_1,
            'Student_2' => $player_2,
            'Student_3' => $player_3,
            // Player 1 Grades
            's1_midterm' => $request->s1_midterms,
            's1_finals' => $request->s1_finals,
            's1_average' => $s1_average,
            // Player 2 Grades
            's2_midterm' => $request->s2_midterms,
            's2_finals' => $request->s2_finals,
            's2_average' => $s2_average,
            // Player 3 Grades
            's3_midterm' => $request->s3_midterms,
            's3_finals' => $request->s3_finals,
            's3_average' => $s3_average,
            // Player 4 Grades
            's4_midterm' => $request->s4_midterms,
            's4_finals' => $request->s4_finals,
            's4_average' => $s4_average,
            // Player 5 Grades
            's5_midterm' => $request->s5_midterms,
            's5_finals' => $request->s5_finals,
            's5_average' => $s5_average,
        ]);
    }
}
