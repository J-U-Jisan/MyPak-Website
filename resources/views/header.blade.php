<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/home"><img src="./images/logo.png" class="col-4 col-md-2"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Request::path()=='/'? 'active' : ''}}">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item {{ Request::path()=='about'? 'active' : ''}}">
                    <a class="nav-link" href="/about">About Us</a>
                </li>
                <li class="nav-item {{ Request::path()=='product'? 'active' : ''}}">
                    <a class="nav-link" href="/product">Product</a>
                </li>
                <li class="nav-item {{ Request::path()=='customer'? 'active' : ''}}">
                    <a class="nav-link" href="/customer">Customer</a>
                </li>
                <li class="nav-item {{ Request::path()=='news'? 'active' : ''}}">
                    <a class="nav-link" href="/news">News</a>
                </li>
                <li class="nav-item {{ Request::path()=='career'? 'active' : ''}}">
                    <a class="nav-link" href="/career">Career</a>
                </li>
                <li class="nav-item {{ Request::path()=='contact'? 'active' : ''}}">
                    <a class="nav-link" href="/contact">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
