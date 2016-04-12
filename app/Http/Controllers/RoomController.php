<?php

namespace App\Http\Controllers;

use App\Room;
use App\Http\Requests;
use App\Http\Controllers\RoomController;
use App\Http\Requests\RoomRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;

class RoomController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$rooms = Room::paginate(10);

    	return view('pages.rooms.index', compact('rooms'));
    }

    public function create()
    {
    	return view('pages.rooms.create');
    }

    public function store(RoomRequest $request)
    {
        $input = $request->all();
        
        $room = Room::create($input);
        
        //Session::flash('message', 'Successfully created room!');
        flash()->success('The note has been stored in the database.', 'Note created.');
        
        return redirect('pages.rooms.index');
    }

    public function show($id)
    {
        $room = Room::find($id);

        return view('pages.rooms.show', compact('room'));
    }

    public function edit($id)
    {
        $room = Room::findOrFail($id);

        return view('pages.rooms.edit', compact('room'));
    }

    public function update($id, RoomRequest $request)
    {
        $room = Room::findOrFail($id);

        $input = $request::all();
        
        $room->fill($input)->save();

        return redirect('pages.rooms.index');
    }

    public function destroy($id)
    {
        flash()->success('message', 'Successfully deleted room!');

        Room::find($id)->delete();

        return back();
    }

    public function getRoomID()
    {

    }
}
