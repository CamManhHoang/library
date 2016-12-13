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

	public function edit($username)
	{
		try
		{
			$user = User::with('student')->whereUsername($username)->firstOrFail();
		}
		catch(Illuminate\Database\Eloquent\ModelNotFoundException $e)
		{
			return Redirect::home();
		}

		return View::make('profiles.edit')->withUser($user);
	}

	public function update($username)
	{
		
		$rules = array(
            'first_name'       => 'required',
            'last_name'       => 'required',
            'email_id'      => 'required|email',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::back()
                ->withErrors($validator);
        } else {

            $user = User::with('student')->whereUsername($username)->firstOrFail();

            $user->student->first_name = Input::get('first_name');
            $user->student->last_name = Input::get('last_name');
            $user->student->email_id = Input::get('email_id');
            $user->student->save();

            // redirect
            Session::flash('success', 'Successfully updated profile!');
            return Redirect::back();
        }
	}


}
