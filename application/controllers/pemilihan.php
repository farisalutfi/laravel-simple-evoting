<?php

class Pemilihan_Controller extends Base_Controller {
	
	public function __construct() 
	{
		$this->filter('before', 'auth');
	}
	
		
	public function action_vote()
	{
            $candidate_id = Input::get('candidate_id');
            $election_id = Input::get('el_id');
			$election = Election::find($election_id);
            $loc_id = Input::get('loc_id');
            $voter_id = Input::get('voter_id');
			$stat = 2;
			
			$candidate = DB::table('candidates')
				->select(array('candidates.id','candidates.nama'))
				->join('election_candidate', 'candidates.id', '=', 'election_candidate.candidate_id')
				->where_in('election_id', array($election_id))
				->paginate(50);
			
			$cek_voter_id = DB::table('election_voter')
							->select(array(DB::raw('COUNT(voter_id) as jum')))
							->where('voter_id','=',$voter_id)
							->lists('jum');
			
			$cek_voter_id = json_encode($cek_voter_id);
			
			if ($cek_voter_id=='[1]'){
				return View::make('pemilihan.index')
						 ->with('el_id',$election_id)
						 ->with('election',$election)
						 ->with('candidate',$candidate)
						 ->with('loc_id',$loc_id)
						 ->with('voter_id',$voter_id);
			}else{
				DB::table('election_voter')
				->insert(array('candidate_id' => $candidate_id, 
									  'election_id' => $election_id, 
									  'voter_id'=>$voter_id,
									  'location_id'=>$loc_id));
				return Redirect::to('hasil/index/'.$election_id.'/'.$loc_id.'/'.$stat);
			}
	}

}

?>