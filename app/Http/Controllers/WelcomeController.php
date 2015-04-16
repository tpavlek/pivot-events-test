<?php namespace App\Http\Controllers;

use App\Model\Role;
use App\Model\User;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
        $user = User::create([ 'username' => 'test' ]);
        $role = Role::create([ 'name' => 'test' ]);
        $user->roles()->attach($role->id);

        dd("done");
	}

}
