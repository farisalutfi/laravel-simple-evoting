<?php

class Admin_Controller extends Base_Controller {
	
	public function __construct() 
	{
		$this->filter('before', 'auth');
	}

	public function action_index()
	{
		return View::make('admin.index');
	}
	
	// http://localhost/evoting/public/--controller--/--action--/--parameter--/--parameter--

}