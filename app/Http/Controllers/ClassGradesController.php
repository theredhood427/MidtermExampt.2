<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassGradesController extends Controller
{
    public function startClass()
    {
        return view('begin');
    }

    public function enterGrades(Request $request)
    {
        $Student_1 = $request->name_1;
        $Student_2 = $request->name_2;
        $Student_3 = $request->name_3;
        $Student_4 = $request->name_4;
        $Student_5 = $request->name_5;

        return view('enter-grades', [
            'Student_1' => $Student_1,
            'Student_2' => $Student_2,
            'Student_3' => $Student_3,
            'Student_4' => $Student_4,
            'Student_5' => $Student_5,
        ]);
    }

    protected function computeAverageGrade($midterm, $final)
    {
        $average = ($midterm + $final) / 2;
        return round($average, 2);
    }

    protected function remarks ($average)
    {
        $passOrfail;
            if ($average >= 75){
                $passOrfail="PASSED";
                return $passOrfail;
            }
            else {
                $passOrfail="FAILED";
                return $passOrfail;
            }
    }

    public function computeFinals(Request $request)
    {
        $Student_1 = $request->Student_1;
        $Student_2 = $request->Student_2;
        $Student_3 = $request->Student_3;
        $Student_4 = $request->Student_4;
        $Student_5 = $request->Student_5;

        $s1_average = $this->computeAverageGrade($request->s1_midterms, $request->s1_finals);
        $s2_average = $this->computeAverageGrade($request->s2_midterms, $request->s2_finals);
        $s3_average = $this->computeAverageGrade($request->s3_midterms, $request->s3_finals);
        $s4_average = $this->computeAverageGrade($request->s4_midterms, $request->s4_finals);
        $s5_average = $this->computeAverageGrade($request->s5_midterms, $request->s5_finals);

        $s1_remarks = $this->remarks($s1_average);
        $s2_remarks = $this->remarks($s2_average);
        $s3_remarks = $this->remarks($s3_average);
        $s4_remarks = $this->remarks($s4_average);
        $s5_remarks = $this->remarks($s5_average);
        
        return view('compute-grades', [
            'Student_1' => $Student_1,
            'Student_2' => $Student_2,
            'Student_3' => $Student_3,
            'Student_4' => $Student_4,
            'Student_5' => $Student_5,
            // Player 1 Grades
            's1_midterm' => $request->s1_midterms, 
            's1_finals' => $request->s1_finals,
            's1_average' => $s1_average, 
            's1_remarks' => $s1_remarks,
            // Player 2 Grades
            's2_midterm' => $request->s2_midterms,
            's2_finals' => $request->s2_finals,
            's2_average' => $s2_average,
            's2_remarks' => $s2_remarks,
            // Player 3 Grades
            's3_midterm' => $request->s3_midterms,
            's3_finals' => $request->s3_finals,
            's3_average' => $s3_average,
            's3_remarks' => $s3_remarks,
            // Player 4 Grades
            's4_midterm' => $request->s4_midterms,
            's4_finals' => $request->s4_finals,
            's4_average' => $s4_average,
            's4_remarks' => $s4_remarks,
            // Player 5 Grades
            's5_midterm' => $request->s5_midterms,
            's5_finals' => $request->s5_finals,
            's5_average' => $s5_average,
            's5_remarks' => $s5_remarks,
        ]);
    }
}
