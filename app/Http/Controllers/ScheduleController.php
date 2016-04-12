<?php

namespace App\Http\Controllers;

use App\Schedule;
use App\Http\Requests;
use App\Http\Controllers\RoomController;
use App\Http\Requests\RoomRequest;
use \Fhaculty\Graph\Graph as Graph;
use \Graphp\GraphViz\GraphViz as GraphViz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class ScheduleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$schedules = Schedule::all();

    	return view('pages.schedules.index', compact('schedules'));
    }

    public function create()
    {
    	return view('pages.schedules.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        
        $schedule = Schedule::create($input);

        //Session::flash('message', 'Successfully created schedule!');
        return redirect('pages.schedules.index');
    }

    public function show($id)
    {
        $schedule = Schedule::find($id);

        return view('pages.schedules.show', compact('room'));
       
    }

    public function edit($id)
    {
        $schedule = Schedule::find($id);

        return view('pages.schedules.edit', compact('schedule'));
    }

    public function update($id)
    {
        $schedule = Schedule::findOrFail($id);

        $input = $request::all();
        
        $schedule->update($input);

        return Redirect::route('pages.schedules.show', $id);
    }

    public function destroy($id)
    {
        Schedule::find($id)->delete();

        return Redirect::route('pages.schedules.index');
    }
}
