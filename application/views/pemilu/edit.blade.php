@layout('template.main')

@section('content')

<legend>Edit Pemilu</legend>

	<form action="{{URL::to('pemilu/update/'.$data->id)}}" method="POST">
 
		<p>Nama Pemilu:</p>
		<p><input type="text" id="nama_pemilu" name="nama_pemilu" value="{{$data->nama}}" /></p>
		<p>Waktu Pemilu:</p>
		<p><input type="text" id="waktu_pemilu" name="waktu_pemilu" class="datepicker" data-date-format="yyyy-mm-dd" data-date-viewMode="2" value="{{$data->waktu}}" /></p>
		<input type="submit" class="btn btn-primary" value="Simpan" />
    </form>


@endsection

