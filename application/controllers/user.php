<?php

class User_Controller extends Base_Controller {

	public function action_login()
	{
		return View::make('login');
	}
	
	public function action_do_login()
	{
		 $userdata = array(
			'username' => Input::get('username'),
			'password' => Input::get('password')
			);
		$user = new Verify;
		try 
		{
		    $user->attempt($userdata);
		}
		catch (Exception $e)
		{
		    return Redirect::to('user/login');
		}
		return Redirect::to('/');
	}
	
	public function action_logout()
	{
		Auth::logout();
		return Redirect::to('/');
	}

}