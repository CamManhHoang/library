<?php

class ProfilesController extends \BaseController {

	public function show($username)
	{
		try
		{
			$user = User::with('student')->whereUsername($username)->firstOrFail();
		}
		catch(Illuminate\Database\Eloquent\ModelNotFoundException $e)
		{
			return Redirect::home();
		}

		return View::make('profiles.show')->withUser($user);
	}

}
