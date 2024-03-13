<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\App;

class ReportsController extends Controller
{
    public function print_cardex($id)
    {
        $mystudent=Student::find($id);
        $data = [
            'title' => 'Cardex del estudiante',
            'student' => $mystudent
        ];

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('reports.cardex' , $data);
        return $pdf->stream();
    }
}
