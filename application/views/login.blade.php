<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>E-Voting</title>
	{{ Asset::container('bootstrapper')->styles(); }}
	{{ Asset::container('bootstrapper')->scripts(); }} 
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="span6 offset3" style="margin-top:30px">
			    {{ Form::open('user/do_login', 'POST', array('style' => 'text-align:center;margin-top:15px')) }}
			        <p><i class="icon-user"></i> Username</p>
			        <p>{{ Form::text('username', '', array('style' => 'width:250px')) }}</p>
			        <p><i class="icon-lock"></i> Password</p>
			        <p>{{ Form::password('password', array('style' => 'width:250px')) }}</p>
			        <p>{{ Form::submit('&nbsp; &nbsp; Login &nbsp; &nbsp;', array('class' => 'btn btn-large btn-primary')) }}</p>
			    {{ Form::close() }}
			</div>
		</div>
	</div>
</body>
</html>
