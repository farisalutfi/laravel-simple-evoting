@layout('template.main')

@section('content')

<legend>Tambah Lokasi Baru</legend>
	<form action="{{URL::to('lokasi/save')}}" method="POST">
	
		<p>Nama TPS:</p>
		<p><input type="text" id="lokasi" name="lokasi" /></p>
		<p>Nama Alamat:</p>
		<p><input type="text" id="alamat" name="alamat" /></p>
		<input type="submit" class="btn btn-primary" value="Simpan" />
	</form>
@endsection