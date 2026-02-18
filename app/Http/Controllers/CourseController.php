<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'data' => Course::all(),
            'pagination' => [
                'total' => 1,
                'current' => 1,
                'per_page' => 5
            ]
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $course = $request->validate([
            'name' => 'required|max:30',
            'description' => 'max:100',
            'hours' => 'required|max:10',
            'price' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        return response()->json(Course::create($course));
    }
    public function storeWeb(Request $request)
    {
        $course = $request->validate([
            'name' => 'required|max:30',
            'description' => 'max:100',
            'hours' => 'required|max:10',
            'price' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        Course::create($course);

        return redirect('/course-admin/courses');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json(['data' => [ Course::where('id', $id)->first()] ]);
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
    
    public function buy()
    {
        return response()->json([
            'pay_url' => 'https://your-provider.com/j7HGa'
        ]);
    }

    public function webhook()
    {
        return response()->json('', 204);
    }
}
