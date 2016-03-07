<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

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