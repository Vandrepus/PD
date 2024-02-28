<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function Store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|max:255',
            'discription' => 'required',
            'baner' => 'required|max:255',
            'community' => 'required'
        ]);

        Course::create($validate);

        dd('OK');
    }

    public function Index()
    {
        return response()->json(Course::all());
    }
}
