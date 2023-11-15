<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentStoreRequest;
use App\Http\Requests\StudentUpdateRequest;
use App\Http\Resources\StudentResource;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentStoreRequest $request)
    {
        $validated = $request->validated();
        $student=new Student;
        $student=$student->create($validated);

        return $this->return_api(true, Response::HTTP_OK, null, new StudentResource($student), null, null);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentUpdateRequest $request, Student $student)
    {
        $validated = $request->validated();
        $id = Student::find($student)->first();
        $student=$id->update($validated);

        return $this->return_api(true, Response::HTTP_OK, null, null, null, null);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Student $student)
    {
        $student->delete();
        return $this->return_api(true, Response::HTTP_OK, null, new StudentResource($student), null, null);
    }
}
