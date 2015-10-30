@layout('template.main')

@section('content')

<legend>Hasil Pemilihan</legend>
<table width="100%">
				<tr align="center">
					<td >
						<form action="{{URL::to('hasil/result')}}" method="POST">
							<p>Nama Pemilu:</p>
							<p><select id="el_id" name="el_id">
							<option>-pilih nama pemilu-</option>
							@foreach ($pemilu->results as $row)
							<option value="{{$row->id}}">{{$row->nama}}</option>
							@endforeach
							</select></p>
							
							<input type="submit" class="btn btn-primary" value="Lanjut" />
						</form>
					</td>
				</tr>
			</table>
			
@endsection