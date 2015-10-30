<?php

class Voter_Controller extends Base_Controller {
	
	public function __construct() 
	{
		$this->filter('before', 'auth');
	}

	public function action_index()
	{
		$page=20;
		$pemilu = Election::order_by('nama','asc')->paginate($page);
		$tps = Location::order_by('lokasi','asc')->paginate($page);
		return View::make('voter.tahap')
		->with('pemilu',$pemilu)
		->with('tps',$tps);
		
	}
	
	public function action_save()
	{
		$data = new Voter;
			$data->id = Input::get('ktp');
            $data->nama = Input::get('nama');
			$data->alamat = Input::get('alamat');
            $data->tgl_lahir = Input::get('ttl');
					
			$voter_id = Input::get('ktp');
			$el_id = Input::get('el_id');
			$loc_id = Input::get('loc_id');	
			
            $tgl_lahir = Input::get('ttl');
			$tgl_skrg = date('Y-m-d');
			$umur = $tgl_skrg-$tgl_lahir;
			
			$election = Election::find($el_id);
		
			$candidate = DB::table('candidates')
					->select(array('candidates.id','candidates.nama'))
					->join('election_candidate', 'candidates.id', '=', 'election_candidate.candidate_id')
					->where_in('election_id', array($el_id))
					->paginate(50);
		 			
			$cek_voter_id = Voter::find($voter_id);
			
			if ($cek_voter_id){
				return View::make('voter/add')
				->with('ktp_sama','ok')
				->with('el_id',$el_id)
				->with('loc_id',$loc_id);		
			}elseif($umur<17){
				return View::make('voter/add')
				->with('el_id',$el_id)
				->with('loc_id',$loc_id)
				->with('dibawah_umur','ok');
			}else{
				$data->save();
				return View::make('pemilihan.index')
						 ->with('el_id',$el_id)
						 ->with('election',$election)
						 ->with('candidate',$candidate)
						 ->with('loc_id',$loc_id)
						 ->with('voter_id',$voter_id);
			}
       
	}
	
	public function action_appear()
	{
		$election=Input::get('el_id');
		$location=Input::get('loc_id');
		DB::query('insert into election_location(election_id,location_id) values('.$election.','.$location.')');
			return View::make('voter.add')
				->with('el_id',$election)
				->with('loc_id',$location);
			
	}
	
		public function action_add()
	{
		$election=Input::get('el_id');
		$location=Input::get('loc_id');
	
			return View::make('voter.add')
				->with('el_id',$election)
				->with('loc_id',$location);
			
	}


}