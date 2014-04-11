<?php

class LoginLogoutManager extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return bypass();
	}


	public function bypass()
	{
		return Redirect::to('home')->with('message','Mengarah ke Home!');
	}



	public function logout()
	{
		return Redirect::away('http://scele.cs.ui.ac.id')->with('message','Mengarah ke SSO!');
	}

	public function login()
	{
		return View::make('login');
	}
	public function doLogin()
	{
		$rules = array(
			'username'    => 'required', // make sure the email is an actual email
			'password' => 'required' // password can only be alphanumeric and has to be greater than 3 characters
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('login')
				->withErrors($validator) // send back all errors to the login form
				->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
		} else {

			// create our user data for the authentication
			$userdata = array(
				'email' 	=> Input::get('email'),
				'password' 	=> Input::get('password')
			);

			// attempt to do the login
			if (Auth::attempt($userdata)) {

				// validation successful!
				// redirect them to the secure section or whatever
				// return Redirect::to('secure');
				// for now we'll just echo success (even though echoing in a controller is bad)
				echo 'SUCCESS!';

			} else {	 	

				// validation not successful, send back to form	
				return Redirect::to('login');

			}

		}
	}

}