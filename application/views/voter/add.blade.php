@layout('template.main')

@section('content')

<legend>Pendaftaran Pemilih Pemilu</legend>
@if(Session::has('dibawah_umur'))
	{{Alert::success('Pemilih minimal berusia 17 tahun')}}
@endif
@if(Session::has('ktp_sama'))
	{{Alert::success('maaf pemilih hanya boleh memilih 1 kali')}}
@endif

<table width="100%">
				<tr align="center">
					<td >
						<form action="{{URL::to('voter/save')}}" method="POST">
							<p><input type="hidden" id="el_id" name="el_id" value="{{$el_id}}" /></p>
							<p><input type="hidden" id="loc_id" name="loc_id" value="{{$loc_id}}" /></p>
							<p>No KTP:</p>
							<p><input type="text" id="ktp" name="ktp" /></p>
							<p>Nama Pemilih:</p>
							<p><input type="text" id="nama" name="nama" /></p>
							<p>Alamat:</p>
							<p><input type="text" id="alamat" name="alamat" /></p>
							<p>Tanggal Lahir:</p>
							<p><input type="text" id="ttl" name="ttl" class="datepicker" data-date-format="yyyy-mm-dd" data-date-viewMode="2" /></p>
							<input type="submit" class="btn btn-primary" value="Lanjut" />
						</form>
					</td>
				</tr>
			</table>
@endsection