<?php

class Fetch_Controller extends Base_Controller {

	public function action_index()
	{
		$data = DB::table('peoples')->get(array('id', 'nama', 'g_depan', 'g_belakang'));
		$res = array();
		$no = 0;
		foreach ($data as $people)
		{
			$u = $people->g_depan . " " . $people->nama . " " . $people->g_belakang;
			$k = array('key' => $people->id, 'value' => $u);
			$res[$no] = $k;
			$no++;
		}
		echo json_encode($res);
	}
	
	public function action_kerjasama()
	{
		$data = DB::table('tipes')->get(array('id', 'tipe'));
		$res = array();
		$no = 0;
		foreach ($data as $tipe)
		{
			$k = array('key' => $tipe->id, 'value' => $tipe->tipe);
			$res[$no] = $k;
			$no++;
		}
		echo json_encode($res);
	}
	
	public function action_mitra()
	{
		$data = DB::table('mitras')->get(array('id', 'mitra'));
		$res = array();
		$no = 0;
		foreach ($data as $tipe)
		{
			$k = array('key' => $tipe->id, 'value' => $tipe->mitra);
			$res[$no] = $k;
			$no++;
		}
		echo json_encode($res);
	}

}