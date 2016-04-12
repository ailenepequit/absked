<?php

namespace App\Http\Controllers;

use App\Subject;
use App\Http\Requests;
use App\Http\Controllers\RoomController;
use App\Http\Requests\RoomRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class SubjectController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$subjects = Subject::paginate(10);

    	return view('pages.subjects.index', compact('subjects'));
    }

    public static function getSubjects($id) 
    {
        $subjects = Subject::join( 'subjects', 'subjects.subjID', '=', 'subjID' )
                        ->join( 'offerings', 'offerings.offerno', '=', 'employee_positions.employee_id' )
                        ->get()->toArray();

        return $subjects;
    }
}
