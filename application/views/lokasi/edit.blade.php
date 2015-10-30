@layout('template.main')

@section('content')

<legend>Edit Lokasi</legend>
	<form action="{{URL::to('lokasi/update/'.$data->id)}}" method="POST">
 
		<p>Nama Pemilih:</p>
		<p><input type="text" id="lokasi" name="lokasi" value="{{$data->lokasi}}" /></p>
		<p>Alamat:</p>
		<p><input type="text" id="alamat" name="alamat" value="{{$data->alamat}}" /></p>
		<input type="submit" class="btn btn-primary" value="Simpan" />
    </form>


@endsection