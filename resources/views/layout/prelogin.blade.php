<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel 5 login with Bootstrap</title>
	<meta name="description" content="Laravel 5 login with Bootstrap Metro Dashboard">
	<meta name="author" content="Sutha Ji">
	<meta name="keyword" content="Admin login, registration with Laravel 5">

    <!-- Bootstrap core CSS -->

    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <link href="/fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="/css/custom.css" rel="stylesheet">
    <link href="/css/icheck/flat/green.css" rel="stylesheet">

    <link rel="icon" type="/image/png" href="/favicon.png">
    <script src="/js/jquery.min.js"></script>
    <link href="/css/main.css" rel="stylesheet">    

    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body style="background:#F7F7F7;">
    <div class="">
    	<div class="logo"><img src="/images/simple-logo.png"></div>
        <div id="wrapper">
            
            <div>
        	@yield('content')
        	</div>
        </div>
    </div>

</body>

</html>