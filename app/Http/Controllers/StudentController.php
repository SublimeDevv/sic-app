<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('students', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.formulario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name_student' => ['required', 'string', 'max:30',],
            'lastname_student' => 'required|max:30',
            'id_student' => 'required|max:60',
            'email_student' => 'required|email|unique:students,email_student',
            'password_student' => 'required'
        ]);

        Student::create([
            'name_student' => $request->name_student,
            'lastname_student' => $request->lastname_student,
            'id_student' => $request->id_student,
            'email_student' => $request->email_student,
            'password_student' => Hash::make($request->password_student),
        ]);

        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Mostrar el detalle
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Mostrar el formulario de edición
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Procesar
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Eliminar
    }
}
