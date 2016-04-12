<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
use App\Http\Controllers\RoomController;
use App\Http\Requests\RoomRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function getUser($email)
    {
        $user = User::find('name')->where('email', $email);

        return $user;
    }

    public function index()
    {
    	$users = User::paginate(10);

    	return view('pages.users.index', compact('users'));
    }
}
