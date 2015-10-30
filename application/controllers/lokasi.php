<?php

class Lokasi_Controller extends Base_Controller {
	
	public function __construct() 
	{
		$this->filter('before', 'auth');
	}

	public function action_index()
	{
		$page=3;
		$lokasi = Location::order_by('lokasi','asc')->paginate($page);
		return View::make('lokasi.index')
			->with('data',$lokasi);
	}
	
	public function action_edit($id)
	{
		$data = Location::find($id);
		return View::make('lokasi/edit')
			->with('data',$data);
	}
	
	public function action_delete($id)
	{
		$lokasi = Location::find($id);
		$lokasi->delete();
		return Redirect::to('lokasi')
		->with('delete_success','ok');
	}
	
	public function action_save()
	{
		$data = new Location;
            $data->lokasi = Input::get('lokasi');
            $data->alamat = Input::get('alamat');
                 
			$data->save();
            return Redirect::to('lokasi/index')
				->with('save_success','ok');
			
	}
	public function action_add()
	{
		return View::make('lokasi/add');	
	}
	
	public function action_update($id)
	{
		$data = Location::find($id);
		$data->lokasi = Input::get('lokasi');
		$data->alamat = Input::get('alamat');
		
		$data->save();
        return Redirect::to('lokasi/index')
				->with('save_success','ok');
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
		//print_r($data);
		return View::make('pemilu.grafik')
			->with('data',$data);
	}
	
}

?>