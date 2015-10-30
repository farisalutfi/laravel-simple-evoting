<?php

class Kandidat_Controller extends Base_Controller {
	
	public function __construct() 
	{
		$this->filter('before', 'auth');
	}

	public function action_index()
	{
		$join = DB::table('candidates')
			->select(array('candidates.id as id_kandidat',
					'candidates.nama as nama_kandidat','elections.nama'))
			->join('election_candidate', 'candidates.id', '=', 'election_candidate.candidate_id')
			->join('elections', 'election_candidate.election_id', '=', 'elections.id')
			->paginate(5);

		$candidate_id = Candidate::lists('id');
	
		return View::make('kandidat.index')
			->with('kandidat',$join);
	}
	
	public function action_edit($id)
	{
		$data = Candidate::find($id);
		return View::make('kandidat/edit')
			->with('data',$data);
	}
	
	public function action_delete($id)
	{
		$kandidat = Candidate::find($id);
		$kandidat->delete();
		return Redirect::to('kandidat')
		->with('delete_success','ok');
	}
	
	public function action_save()
	{
		$data = new Candidate;
            $data->id = Input::get('candidate_id');
            $data->nama= Input::get('nama');
						
		$candidate_id = Input::get('candidate_id');
		$election_id = Input::get('el_id');
		
		$ada = Candidate::find($candidate_id);
		
			if ($ada){
				return Redirect::to('kandidat/add')
						->with('ada','ok');
			}else{
				$data->save();
				DB::table('election_candidate')->insert(array('candidate_id' => $candidate_id,'election_id'=> $election_id));
				return Redirect::to('kandidat/index')
						->with('save_success','ok');
			}
			
	}
	public function action_add()
	{
		$page=20;
		$pemilu = Election::order_by('nama','asc')->paginate($page);
		// print_r($pemilu);
		return View::make('kandidat/add')
			->with('data2',$pemilu);
	}
	
	public function action_update($id)
	{
		$data = Candidate::find($id);
		$data->id = Input::get('candidate_id');
		$data->nama = Input::get('nama');
				
		$data->save();
        return Redirect::to('kandidat/index')
				->with('save_success','ok');
	}
	
}

?>