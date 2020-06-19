@extends('layouts.app')

@section('content')
<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./images/10.jpeg" class="d-block w-100 h-75 img-fluid" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./images/1.jpeg" class="d-block w-100 h-75 img-fluid" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./images/2.jpeg" class="d-block w-100 h-75 img-fluid" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./images/6.jpeg" class="d-block w-100 h-75 img-fluid" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./images/4.jpeg" class="d-block w-100 h-75 img-fluid" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./images/5.jpeg" class="d-block w-100 h-75 img-fluid" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./images/9.jpeg" class="d-block w-100 h-75 img-fluid" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header

<main class="" style="margin-top:0px;">

    <section class="clearfix urgent-donation-s2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 col-sm-12 urgent-donation" style="background: url(./img/bidyanondo-scholarship_thumbnail_image.jpg) center center/cover no-repeat local;">

                    <div class="donation">
                        <h2>About Us</h2>
                        <span>
                            MyPak was established to meet consumer goods end user expectation.
                        </span>
                        <p class="text-justify">
                            <ul  style="color:white !important; margin-left: 4%;">
                                <li>Assurance in box supply to support end-user's future business Growth</li>
                                <li>Higher quality of boxes at competitive price ...<a href="/about" style="color: #8acceb;">See more</a></li>
                            </ul>

                        </p>

                    </div>
                </div>

                <div class="col-md-5 col-12 donation-meter-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/kEnFTaiwiyc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="help clearfix">
        <div class="parallax">
            <div class="parallax-content">
                <h1 style="color:black; text-shadow: 0px 2px 0px white">OUR MISSION</h1>
                <ul style="list-style-type: none;font-size:25px;">
                    <li>With the assistance of our expert workforce with years of
                        experiences in corrugating industry and modern technology
                        equipment We are committed to set new benchmark in
                        packaging industry by constantly strive to seek innovative,
                        sustainable ways to better accommodate our customers.</li><br>

                    <li>Since our commencement in July 2017 our aims have always
                        been working closely with all of our customers to achieve better
                        mutual understanding In this way we believe we will be able to
                        comply with our customers need and consequently gain our
                        customers appreciation.</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="clearfix cta-bg" style="background-color: #C8EFFD;text-align: center;">
        <div class="container ml-3-0">
            <h1 style="text-align: center;" class="qlt mb-5">OUR BUISNESS MODEL</h1>
            <img src="./images/model.jpg" style="text-align: center;" class="col-12 col-md-12">
        </div>
    </section>

    <section class="clearfix campaigns" style="background-image: linear-gradient(180deg,#C8EFFD,#7effa4,90%,#fff);">
        <div class="container py-5">
            <h1 style="text-align: center;" class="qlt">Machinery Specification</h1>
            <img src="./images/table.PNG" class="col-12 col-md-12 img-fluid">
            <table class="table table-striped mt-4">
                <thead>
                <tr>
                    <th scope="col">Equipment</th>
                    <th scope="col">Supplier</th>
                    <th scope="col">Qty</th>
                    <th scope="col">Size</th>
                    <th scope="col">Max Speed</th>
                    <th scope="col">Total Capacity</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Corrugator Machine</td>
                    <td>BHS</td>
                    <td>2</td>
                    <td>2,500 MM</td>
                    <td>300 mpm</td>
                    <td>12,000 MT / Month</td>
                </tr>
                <tr>
                    <td>Flexo Folder Gluer</th>
                    <td>TCY</td>
                    <td>6</td>
                    <td>660x1,800MM</td>
                    <td>400 sheet/min</td>
                    <td>7,200 MT / Month</td>
                </tr>
                <tr>
                    <td>Flexo Rotary Die Cut</th>
                    <td>TCY</td>
                    <td>2</td>
                    <td>1,600x2,600MM</td>
                    <td>150 sheet/min</td>
                    <td>6,000 MT / Month</td>
                </tr>
                <tr>
                    <td>Conveyor System</th>
                    <td>TE</td>
                    <td>1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Glue Kitchen</th>
                    <td>CHC</td>
                    <td>1</td>
                    <td></td>
                    <td></td>
                    <td>2 MT</td>
                </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section class="card-full-body pt-4 clearfix">
        <div class="text-center">
            <div class="mt-3">
                <h1 style="color: white !important;" class="qlt">AFFILIATE WITH</h1>
            </div>

            <div class="w-100 pt-1 mt-5">
                <img src="./images/fajar.png" class="col-6 col-md-2">
                <h1 style="display: inline-flex;transform: translateY(20px); color: #32e35b;" class="pl-3">Fajar Paper Factory</h1>
            </div>
        </div>
    </section>
</main>
@endsection

