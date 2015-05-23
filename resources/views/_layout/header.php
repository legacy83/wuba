<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Wuba</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= PUBLIC_URL; ?>/css/site.css">
</head>

<body>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand brand" href="<?= PUBLIC_URL; ?>">Wuba</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?= PUBLIC_URL; ?>">Home</a></li>
                <li><a href="<?= PUBLIC_URL; ?>?r=@todo">About</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?= PUBLIC_URL; ?>?r=@todo">@todo</a></li>
                <li><a href="<?= PUBLIC_URL; ?>?r=@foo">@foo</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
