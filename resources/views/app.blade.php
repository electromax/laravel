<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<link href="/content/bootstrap.min.css" rel="stylesheet">
	<style>
		.flash {padding:10px}
		.flash p {margin:0}
		.content {margin:auto 30px}
		label{display:block}
	</style>     
</head>
<body>                  
	<div class="content">
		@if (Session::has('message'))
			<div class="flash alert-info">
				<p>{{ Session::get('message') }}</p>
			</div>
		@endif
		@if ($errors->any())
			<div class='flash alert-danger'>
				@foreach ( $errors->all() as $error )
					<p>{{ $error }}</p>
				@endforeach
			</div>
		@endif

		@yield('content')
	</div>
</body>
</html>
