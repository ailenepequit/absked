<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FacultyController extends Controller
{
    public function index()
    {
    	$faculty = Faculty::all()->paginate(10);

    	return view('pages.faculty.index', compact('faculty'));
    }
}
