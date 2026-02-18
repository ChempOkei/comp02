<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(
            Lesson::all()
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $lesson = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'link' => '',
            'duration' => 'required|max:4'
        ]);

        return response()->json($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json[
            Lesson::where('id', $id)->first()
        ];
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
