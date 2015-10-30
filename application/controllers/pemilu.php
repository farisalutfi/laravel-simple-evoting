<?php

class Pemilu_Controller extends Base_Controller {
	
	public function __construct() 
	{
		$this->filter('before', 'auth');
	}

	public function action_index()
	{
		$page=3;
		$pemilu = Election::paginate($page);
		// print_r($pemilu);
		return View::make('pemilu.index')
			->with('data',$pemilu);
	}
	
	public function action_edit($id)
	{
		$data = Election::find($id);
		return View::make('pemilu/edit')
			->with('data',$data);
	}
	
	public function action_delete($id)
	{
		$pemilu = Election::find($id);
		$pemilu->delete();
		return Redirect::to('pemilu')
		->with('delete_success','ok');
	}
	
	public function action_save()
	{
		$data = new Election;
            $data->nama = Input::get('nama');
            $data->waktu = Input::get('waktu');
            
            $data->save();
           
            return Redirect::to('pemilu/index')
				->with('save_success','ok');
	}
	public function action_add()
	{
		return View::make('pemilu/add');	
	}
	
	public function action_update($id)
	{
		$data = Election::find($id);
		$data->nama = Input::get('nama_pemilu');
		$data->waktu = Input::get('waktu_pemilu');
		
		$data->save();
		return Redirect::to('pemilu/index')
			->with('edit_success','ok');
	}
	
	public function action_grafik()
	{
		$data = array();
		for ($i=1;$i<=12;$i++)
		{
			$hasil = DB::query('select count(*) as jumlah from elections where month(waktu)='.$i);
			array_push($data,$hasil[0]->jumlah);
		}
		$data = json_encode($data);
		// print_r($data);
		return View::make('pemilu.grafik')
			->with('data',$data);
	}
	
}

?>