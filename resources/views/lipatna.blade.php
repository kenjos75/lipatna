<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lipat Na</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/custom.css')}}" rel="stylesheet" >

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div id="navbar-container">
		<nav class="navbar navbar-inverse navbar-fixed-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="#">Lipat Na</a>
	        </div>
	        <div class="comp search-bar-wrapper" role="search">
	        	<form action="/s" class="search-form">
	        		<div class="search-bar">
	        			<i class="header-icon icon-search-alt-gray search-icon" aria-hidden="true"></i>
	        			<label class="screen-reader-only" for="header-search-form" aria-hidden="true">Where to?</label>
	        			<input type="text" placeholder="Where to?" autocomplete="off" name="location" id="header-search-form" class="location" value="" >
	        			<input type="hidden" name="source" value="hdr">
	        			<input type="hidden" name="place_id">
	        		</div>
	        		<div id="header-search-settings" class="panel search-settings header-menu"></div>
	        	</form>
	        </div>
	       	<div id="navbar" class="collapse navbar-collapse pull-right">
	          <ul class="nav navbar-nav">
	            <li class="active"><a href="#">Home</a></li>
	            <li><a href="#about">About</a></li>
	            <li><a href="#contact">Contact</a></li>
	          </ul>
       		</div><!--/.nav-collapse -->
	       </div>
	    </nav>
	</div>
	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
