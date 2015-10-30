@layout('template.main')

@section('content')

<legend>Pendaftaran Pemilih Pemilu</legend>
<table width="100%">
				<tr align="center">
					<td >
						<form action="{{URL::to('voter/appear')}}" method="POST">
							<p>Nama Pemilu:</p>
							<p><select id="el_id" name="el_id">
								<option>-pilih nama pemilu-</option>
								@foreach ($pemilu->results as $row)
								<option value="{{$row->id}}">{{$row->nama}}</option>
								@endforeach
							</select></p>
							<p>Nama TPS:</p>
							<p><select id="loc_id" name="loc_id">
							<option>-pilih nama TPS-</option>
							@foreach ($tps->results as $tp)
							<option value="{{$tp->id}}">{{$tp->lokasi}}</option>
							@endforeach
							</select></p>
							<input type="submit" class="btn btn-primary" value="Lanjut" />
						</form>
					</td>
				</tr>
			</table>
			
@endsection