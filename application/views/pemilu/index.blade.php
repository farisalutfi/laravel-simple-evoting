@layout('template.main')

@section('content')

<legend>Pengelolaan Pemilu
	<a class="btn btn-primary btn-small pull-right" href="{{ URL::to('pemilu/add/') }}"><i class="icon-plus icon-white"></i>&nbsp Tambah</a>
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
		<th>ID</th>
		<th>Pemilu</th>
		<th>Waktu</th>
		<th class="muted" style="width: 80px;">Action</th>
	</thead>
	<tbody>
		@foreach ($data->results as $row)
		<tr>
			<td>{{ $row->id }}</td>
			<td>{{ $row->nama }}</a></td>
			<td>{{ $row->waktu }}</td>
			<td>
				<a class="btn btn-info btn-small" href="{{ URL::to('pemilu/edit/'.$row->id) }}"><i class="icon-edit icon-white"></i></a>
				<!-- http://localhost/evoting/public/pemilu/edit/1 -->
				<a class="btn btn-danger btn-small" href="{{ URL::to('pemilu/delete/'.$row->id) }}"><i class="icon-remove icon-white"></i></a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
{{$data->links()}}

@endsection

