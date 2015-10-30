@layout('template.main')

@section('content')
@if(Session::has('ada'))
	{{Alert::success('No KTP kandidat tidak boleh sama')}}
@endif
<legend>Tambah Kandidat Baru</legend>
	<form action="{{URL::to('kandidat/save')}}" method="POST">
		<p>No KTP:</p>
		<p><input type="text" id="candidate_id" name="candidate_id" /></p>
		<p>Nama Kandidat:</p>
		<p><input type="text" id="nama" name="nama" /></p>
		<p>Nama Pemilu:</p>
		<p><select id="el_id" name="el_id">
		<option>-pilih nama pemilu-</option>
		@foreach ($data2->results as $row)
		<option value="{{$row->id}}">{{$row->nama}}</option>
		@endforeach
		</select></p>
		
		<input type="submit" class="btn btn-primary" value="Simpan" />
	</form>
@endsection