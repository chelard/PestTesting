<?php

namespace App\Http\Controllers;

use App\Models\Course;

class CourseDetailsController extends Controller
{

    public function __invoke( Course $course)
    {
        return view('course-details', compact('course'));
    }
}
