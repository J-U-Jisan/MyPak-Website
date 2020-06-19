<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MyPak</title>
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/fontawesome.min.css">
    <link rel="stylesheet" href="../css/lightbox.min.css">
    <link rel="stylesheet" href="../animation.css">
    <link rel="stylesheet" href="../css/style1.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/home"><img src="../images/logo.png" class="col-4 col-md-2"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Request::path()=='admin'? 'active' : ''}}">
                    <a class="nav-link" href="/admin">Home</a>
                </li>
                <li class="nav-item {{ Request::path()=='admin/news'? 'active' : ''}}">
                    <a class="nav-link" href="/admin/news">News</a>
                </li>
                <li class="nav-item {{ Request::path()=='admin/career'? 'active' : ''}}">
                    <a class="nav-link" href="/admin/career">Career</a>
                </li>
                <li class="nav-item {{ Request::path()=='admin/contact'? 'active' : ''}}">
                    <a class="nav-link" href="/admin/contact">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/logout">Log out</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')

@include('script')
</body>
</html>
