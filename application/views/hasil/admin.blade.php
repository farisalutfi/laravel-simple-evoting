@layout('template.main')

@section('content')

<legend>Grafik Hasil {{$pemilu->nama}}</legend>

<script>
	$(function () {
    var chart;
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'container',
                type: 'bar'
            },
            title: {
                text: 'Grafik Perolehan Suara'
            },
            subtitle: {
                text: 'Source: Sekolah vokasi'
            },
            xAxis: {
                categories: <?php echo $nama; ?>
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah Pemilih'
                }
            },
            legend: {
                layout: 'vertical',
                backgroundColor: '#FFFFFF',
                align: 'right',
                verticalAlign: 'top',
                x: 100,
                y: 70,
                floating: true,
                shadow: true
            },
            tooltip: {
                formatter: function() {
                    return ''+
                        this.x +': '+ this.y;
                }
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
                series: [{
                name: 'Pemilu',
                data: <?php echo $jumlah; ?>
    
            }]
        });
    });
    
});
</script>
<table width="100%">
				<tr align="center">
					<td >
						<form action="{{URL::to('hasil/result')}}" method="POST">
							
							<select id="el_id" name="el_id">
							<option>-pilih nama pemilu-</option>
							@foreach ($nama_pemilu->results as $row)
							<option value="{{$row->id}}">{{$row->nama}}</option>
							@endforeach
							</select>
							
							<input type="submit" class="btn btn-primary" value="Tampilkan" />
						</form>
					</td>
				</tr>
			</table>
<div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>


@endsection