<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo FRONT_URL; ?>/assets/images/favicon.ico">

    <title>Wuba Front</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="<?php echo PUBLIC_URL; ?>/assets/css/frontStyles.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">
    <div class="header">
        <nav>
            <ul class="nav nav-pills pull-right">
                <li role="presentation"><a href="<?php echo PUBLIC_URL; ?>">Home</a></li>
                <li role="presentation"><a href="<?php echo PUBLIC_URL; ?>?r=@empty">@empty</a></li>
                <li role="presentation"><a href="<?php echo PUBLIC_URL; ?>?r=@todo">@todo</a></li>
            </ul>
        </nav>
        <h3 class="text-muted">Wuba Front</h3>
    </div>
