<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StudentRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $students = Student::all();
        $students = Student::paginate(5);
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
        $student = Student::find($id);
        return view('show-student', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::find($id);
        return view('edit-student', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentRequest $request, string $id)
    {
        $student = Student::find($id);
        $student->update($request->all());

        return redirect()->route('students.index')->with('notificacion', 'Estudiante actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('students.index')->with('notificacion', 'Estudiante eliminado correctamente');
    }
}
