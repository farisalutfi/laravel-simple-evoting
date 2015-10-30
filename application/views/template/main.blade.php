<!DOCTYPE html>
<html>
	
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Penerimaan Mahasiswa S3 Ilmu Komputer UGM</title>
		{{ Asset::container('bootstrapper')->styles(); }}
	    {{ Asset::container('bootstrapper')->scripts(); }} 
		<script src="{{ URL::base()}}/js/highcharts.js"></script>
	</head>
	
	<body>
	
			<div class="navbar navbar-fixed-top">
				      <div class="navbar-inner">
				        <div class="container">
				          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				            <span class="icon-bar"></span>
				            <span class="icon-bar"></span>
				            <span class="icon-bar"></span>
				          </a>
				          <a class="brand" href="{{ URL::base() }}">E-Voting</a>
				          <ul class="nav pull-right">
						    <li class="dropdown">
							    <a href="#" class="dropdown-toggle" data-toggle="dropdown">				    
								    <i class="icon-user"></i> &nbsp;
								    {{  Auth::user()->username }} 
								    <b class="caret"></b>
							    </a>
			
							    <ul class="dropdown-menu">
								    @if ( Auth::guest() )
						                <li><a href="{{ URL::to('/') }}">Login</a></li>
						            @else
						            	<!--<li><a href="{{ URL::to('user/chpass') }}">Ubah Password</a></li>-->
						            	<li><a href="{{ URL::to('user/logout') }}">Logout</a></li>
						            @endif			    
								</ul>   
						    </li>
				          </ul>
				          <div class="nav-collapse">
				            <ul class="nav">
				              	<li>
								    <a href="{{ URL::to('admin') }}">Registrasi</a> 
								</li>
								<li>
								    <a href="{{ URL::to('voter') }}">Voting</a> 
								</li>
								<li>
								    <a href="{{ URL::to('hasil/pilih') }}">Hasil</a> 
								</li>
				            </ul>
				          </div>
				        </div>
				      </div>
				    </div>
				    
				    <div class="container">
				     @yield('content')
				    </div>
					 <div class="container-fluid">
					  <div class="row-fluid">
					  
						<!-- menu -->
						<div class="span3">
						  <div class="well sidebar-nav">
							<table align=center cellpadding=10>
							<tr><td>
								<a href="http://um.ugm.ac.id">
								<img src="#" width="100px">
								<center><h4>UM UGM</h4></center>
								</a>
							</td></tr>
							<tr><td>
								<a href="http://daa.ugm.ac.id">
								<img src="#" width="80px">
								<center><h4>DAA</h4></center>
								</a>
							</td></tr>
							
							</table>
							
						  </div><!--/.well -->
						</div><!--/span-->
						<!-- /menu -->
						
						<div class="span9">
							<div class="container">
								@yield('content')
							</div>
						</div><!--/span-->
						</div>
						</div><!--/.fluid-container-->
				    
				    <div class="container">
				    	<br /><br /><br />
				    	<footer class="footer">	
				    	<p align="center" class="muted " style="border-top:1px solid rgb(219, 228, 235); padding-top:10px; padding-bottom:20px">
				    		E-Voting &copy; 2012 Sekolah Vokasi<br></small>
				    	</p>
				    	</footer>
				    </div>

	</body>
	
</html>