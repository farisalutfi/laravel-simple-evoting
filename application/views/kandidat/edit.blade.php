@layout('template.main')

@section('content')

<legend>Edit kandidat</legend>
	<form action="{{URL::to('kandidat/update/'.$data->id)}}" method="POST">
 
		<p>No KTP:</p>
		<p><input type="text" id="candidate_id" name="candidate_id" value="{{$data->id}}" /></p>
		<p>Nama Kandidat:</p>
		<p><input type="text" id="nama" name="nama" value="{{$data->nama}}" /></p>
		
		<input type="submit" class="btn btn-primary" value="Simpan" />
    </form>


@endsection