@layout('template.main')

@section('content')

<legend>Tambah Pemilu Baru</legend>
	<form action="{{URL::to('pemilu/save')}}" method="POST">
	
		<p>Nama Pemilu:</p>
		<p><input type="text" id="nama" name="nama" /></p>
		<p>Waktu Pemilu:</p>
		<p><input type="text" id="waktu" name="waktu" class="datepicker" data-date-format="yyyy-mm-dd" data-date-viewMode="2" /></p>
		<input type="submit" class="btn btn-primary" value="Simpan" />
	</form>
@endsection