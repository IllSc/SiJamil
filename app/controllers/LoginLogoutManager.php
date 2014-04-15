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
		Auth::logout(); // log the user out of our application
		return Redirect::to('login'); // redirect the user to the login screen
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
				'name' 	=> Input::get('username'),
				'password' 	=> Input::get('password')
			);
			// $ab = Hash::make('123');
			// print_r ($ab);
			// attempt to do the login
			if (Auth::attempt($userdata)) {

				// validation successful!
				// redirect them to the secure section or whatever
				// return Redirect::to('secure');
				// for now we'll just echo success (even though echoing in a controller is bad)
				$role = Auth::user()->role;
				if($role == "Humas"){
					return Redirect::action('PenyetujuManager@humas');
				} else if($role == "Mahalum"){
					return Redirect::action('PenyetujuManager@mahalum');
				} else if($role == "Perlengkapan"){
					return Redirect::action('PenyetujuManager@perlengkapan');
				} else {
					return Redirect::action('RuanganManager@ruanganHome');
				}

			} else {	 	

				// validation not successful, send back to form	
				return Redirect::to('login');

			}

		}
	}

}