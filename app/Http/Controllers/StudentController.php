<?php

namespace App\Http\Controllers;

use App\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index () {
        $students = Student::all();

        return $this->createSuccessResponse($students, 200);
    }

    public function show ($id) {
        $student = Student::find($id);

        if ($student) {
            return $this->createSuccessResponse($student, 200);
        }

        return $this->createErrorResponse("The student with id {$id} does not exist", 404);
    }

    public function store (Request $request) {
        $rules = [
            'name' => 'required',
            'phone' => 'required|numeric',
            'address' => 'required',
            'career' => 'required|in:engineering,math,physics'
        ];

        $this->validate($request, $rules);

        $student = Student::create($request->all());

        return $this->createSuccessResponse("The student with id {$student->id} has been created", 201);
    }

    public function update () {
        return __METHOD__;
    }

    public function destroy () {
        return __METHOD__;
    }
}
