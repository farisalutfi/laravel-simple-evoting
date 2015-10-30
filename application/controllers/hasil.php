<?php
class Hasil_Controller extends Base_Controller {
	public function __construct() 
	{
		$this->filter('before', 'auth');
	}
	public function action_index($el_id,$loc_id,$stat)
	{
		$nama_kandidat = DB::table('candidates')
			->select(array('candidates.nama as nama_kandidat'))
			->join('election_candidate', 'candidates.id', '=', 'election_candidate.candidate_id')
			->join('elections', 'elections.id', '=', 'election_candidate.election_id')
			->where('elections.id','=',$el_id)
			->distinct()
			->lists('nama_kandidat');
		
		$jumlah = DB::table('election_voter')
			->select(array('candidates.id as kandidat',
					DB::raw('COUNT(voter_id) as jum')))
			->left_join('elections', 'election_voter.election_id', '=', 'elections.id')
			->left_join('candidates', 'election_voter.candidate_id', '=', 'candidates.id')
			->where('elections.id','=',$el_id)
			->group_by('election_voter.candidate_id')
			->lists('jum');
			
		$nama_kandidat = json_encode($nama_kandidat);
		$jumlah = json_encode($jumlah);
		$pemilu = Election::find($el_id);
		$nama_pemilu = Election::order_by('nama','asc')->paginate(10);
		// print_r($nama);echo "<br><br>";
		// print_r($jumlah);
		if ($stat==1){
			return View::make('hasil.admin')
				->with('nama_pemilu',$nama_pemilu)
				->with('pemilu',$pemilu)
				->with('loc_id',$loc_id)
				->with('nama',$nama_kandidat)
				->with('jumlah',$jumlah);
		}
		elseif ($stat==2){
			$pemilu = Election::find($el_id);
			return View::make('hasil.index')
				->with('pemilu',$pemilu)
				->with('loc_id',$loc_id)
				->with('nama',$nama_kandidat)
				->with('jumlah',$jumlah);
		}
	}
	public function action_pilih()
	{
		$page=20;
		$pemilu = Election::order_by('nama','asc')->paginate($page);
		return View::make('hasil.pilih')
		->with('pemilu',$pemilu);
	}
	public function action_result()
	{
		$el_id = Input::get('el_id');
		$stat = 1;
		return Redirect::to('hasil/index/'.$el_id.'/1/'.$stat);
	}
}
?>