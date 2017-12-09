<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Larevl</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
	
	<div id="app">
	<Myheader></Myheader>
			<div class="container">

			  <router-view></router-view>
			  <Add></Add>

		<Myfooter></Myfooter>
		</div>
	</div>
		
	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>