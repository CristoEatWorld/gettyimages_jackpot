<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') | Mi aplicación</title>

    {{HTML::style('css/bootstrap.min.css')}}
    {{HTML::style('css/jumbotron-narrow.css')}}
</head>
<body>
	<div class="container">
	    <div class="jumbotron">
	        {{HTML::image('/img/gettyimages_jackpot.png', 'gettyimages_jackpot', array('width' =>'500'))}}
	    </div>

	    @yield('content')

	    <div class="footer">
	        <p>GettyImages</p>
	    </div>
	</div>
    <script src="https://code.jquery.com/jquery.js"></script>
    {{HTML::style('css/bootstrap.min.css')}}
</body>
</html>