<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Subject;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Unit;
use Illuminate\Support\Facades\App;

class ReportsController extends Controller
{
    public function print_cardex($id)
    {
        $mystudent = Student::find($id);
        $units = Unit::all();
        $activities = Student::find($id)->activities()->get();
        $subjects = Subject::with('units')->get();

        $data = [
            'title' => 'Cardex del estudiante',
            'student' => $mystudent,
            'subjects' => $subjects,
            'activities' => $activities,
            'units' => $units
        ];

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('reports.cardex', $data);
        return $pdf->stream();
    }
}
