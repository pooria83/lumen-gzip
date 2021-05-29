<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\Course as V1Course;
use App\Http\Resources\CourseCollection;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {

        $courses = Course::all();

        return new CourseCollection($courses);
    }

    public function single(Course $course)
    {
        return new V1Course($course);
    }
}
