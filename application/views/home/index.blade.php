@layout('template.main')

@section('content')

<legend>
	Home
</legend>
<div class="container">
	<div class="row" >

		<div class="span12" >
			
			<table width="100%">
				<tr align="center">
					<td >
						<div class="span3 well">
						<h1>Admin</h1><img src="{{ URL::base()}}/img/Admin1.png" width="100px" height="100px" /><p></p>
						<p><a href="admin" class="btn btn-primary btn-large">Lanjut</a></p>
						</div>
					</td>
					
					<td>
						<div class="span3 well">
						<h1>Voting</h1><img src="{{ URL::base()}}/img/voting.jpg" width="100px" height="100px" /><p></p>
						<p><a href="voter" class="btn btn-primary btn-large">Lanjut</a></p>
						</div>
					</td>
					<td>
						<div class="span3 well">
						<h1>Result</h1><img src="{{ URL::base()}}/img/grafik.png" width="120px" height="120px" /><p></p>
						<p><a href="hasil/pilih" class="btn btn-primary btn-large">Lanjut</a></p>
						</div>
					</td>
				</tr>
			</table>
			
		</div>
	</div>
</div>
@endsection

