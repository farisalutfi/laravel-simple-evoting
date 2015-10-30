@layout('template.main')

@section('content')

<legend>Pengelolaan Kandidat
	<a class="btn btn-primary btn-small pull-right" href="{{ URL::to('kandidat/add') }}"><i class="icon-plus icon-white"></i>&nbsp Tambah</a>
</legend>
@if(Session::has('save_success'))
	{{Alert::success('Data Telah Tersimpan')}}
@endif
@if(Session::has('delete_success'))
	{{Alert::success('Data Telah Dihapus')}}
@endif
@if(Session::has('edit_success'))
	{{Alert::success('Data telah berhasil diedit')}}
@endif
<table class="table table-bordered table-striped table-hover">
	<thead>
		<th><center>ID Kandidat</center></th>
		<th><center>Nama Kandidat</center></th>
		<th><center>Nama Pemilu</center></th>
		<th class="muted" style="width: 80px;">Action</th>
	</thead>
	<tbody>
		@foreach ($kandidat->results as $row)
		<tr>
			<td>{{ $row->id_kandidat }}</td>
			<td>{{ $row->nama_kandidat }}</td>
			<td>{{ $row->nama }}</td>
			<td>
				<a class="btn btn-info btn-small" href="{{ URL::to('kandidat/edit/'.$row->id_kandidat) }}"><i class="icon-edit icon-white"></i></a>
				<!-- http://localhost/evoting/public/pemilu/edit/1 -->
				<a class="btn btn-danger btn-small" href="{{ URL::to('kandidat/delete/'.$row->id_kandidat) }}"><i class="icon-remove icon-white"></i></a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
{{$kandidat->links()}}


@endsection

