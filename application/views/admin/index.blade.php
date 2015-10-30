@layout('template.main')

@section('content')

<legend>
	Welcome Admin
</legend>
<div class="container">
	<div class="row" >

		<div class="span12" >
			
			<table width="100%">
				<tr align="center">
					<td >
						<div class="span3 well">
						<h1>Pendaftaran Pemilu</h1><img src="{{ URL::base()}}/img/pemilu.png" width="100px" height="100px" /><p></p>
						<p><a href="pemilu/add" class="btn btn-primary btn-large">Lanjut</a></p>
						</div>
					</td>
					
					<td>
						<div class="span3 well">
						<h1>Pendaftaran Kandidat</h1><img src="{{ URL::base()}}/img/candidate.ico" width="120px" height="100px" /><p></p>
						<p><a href="kandidat/add" class="btn btn-primary btn-large">Lanjut</a></p>
						</div>
					</td>
					<td>
						<div class="span3 well">
						<h1>Pendaftaran Lokasi</h1><img src="{{ URL::base()}}/img/tps.png" width="120px" height="150px" /><p></p>
						<p><a href="lokasi/add" class="btn btn-primary btn-large">Lanjut</a></p>
						</div>
					</td>
				</tr>
			</table>
			
		</div>
	</div>
</div>
@endsection

