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

	public function changePassword()
	{
		return View::make('profiles.change-password');
	}

	public function postChangePassword()
	{
		$user = Auth::user();
	    $rules = array(
	        'old_password' => 'required|alphaNum|between:6,16',
	        'password' => 'required|alphaNum|between:6,16|confirmed'
	    );

	    $validator = Validator::make(Input::all(), $rules);

	    if ($validator->fails()) 
	    {
	        return Redirect::back()->withErrors($validator);
	    } 
	    else 
	    {
	        if (!Hash::check(Input::get('old_password'), $user->password)) 
	        {
	            return Redirect::back()->withErrors('Mật Khẩu Cũ Không Đúng!');
	        }
	        else
	        {
	            $user->password = Hash::make(Input::get('password'));
	            $user->save();
	            return Redirect::back()->withSuccess("Mật Khẩu Của Bạn Đã Được Update Thành Công!");
	        }
	    }
	}

}
