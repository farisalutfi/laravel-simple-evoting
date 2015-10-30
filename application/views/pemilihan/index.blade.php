@layout('template.main')

@section('content')

	<legend>{{$election->nama}}</legend>
	@if(Session::has('ktp_sama'))
		{{Alert::success('maaf pemilih hanya boleh memilih 1 kali')}}
	@endif
	<p>Pilih <strong>1 (satu)</strong> nama kandidat yang tersedia di bawah ini</p>
	@foreach ($candidate->results as $row)
		<div>
		<form method="POST" action="{{URL::to('pemilihan/vote')}}">
			<div class=span3>
				<div class="hero-unit">
				<center><h2>{{$row->nama}}</h2>
				<input type="hidden" value="{{$row->id}}" id="candidate_id" name="candidate_id">
				<input type="hidden" value="{{$el_id}}" id="el_id" name="el_id">
				<input type="hidden" value="{{$loc_id}}" id="loc_id" name="loc_id">
				<input type="hidden" value="{{$voter_id}}" id="voter_id" name="voter_id">
				<input type="submit" class="btn btn-primary" value="pilih" />
				</center>	
				</div>
			</div>
		</form>
		</div>
		@endforeach
@endsection

