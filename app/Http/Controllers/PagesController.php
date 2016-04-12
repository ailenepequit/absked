<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PagesController extends Controller
{
	public function getAddRoom()
	{
		return view('pages.addroom');
	}

	public function getRooms()
	{
		return view('pages.rooms');
	}

	public function getAddSchedule()
	{
		return view('pages.addsched');
	}
}