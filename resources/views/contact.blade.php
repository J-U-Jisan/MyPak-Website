@extends('layouts.app')

@section('content')
<!--Section: Contact v.1-->
<section class="section py-4 mt-5">

    <!--Section heading-->
    <h2 class="section-heading h1 pt-4 text-center">Contact us</h2>
    <!--Section description-->

    <div class="row">

        <!--Grid column-->
        <div class="col-lg-5 mb-4">

            <!--Form with header-->
            <div class="card">

                <div class="card-body">
                    <!--Header-->
                    <div class="form-header blue accent-1">
                        <h3><i class="fas fa-envelope"></i> Write to us:</h3>
                    </div>

                    <p>We'll write rarely, but with only the best content.</p>
                    <br>

                    <!--Body-->
                    <form action="/contact" method="POST">
                        @csrf
                        <div class="md-form">
                            <i class="fas fa-user prefix grey-text"></i>
                            <input type="text" id="form-name" class="form-control" placeholder="Your name" name="username" required>
                        </div>

                        <div class="md-form">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <input type="email" id="form-email" class="form-control" placeholder="Your email" name="email" required>
                        </div>

                        <div class="md-form">
                            <i class="fas fa-tag prefix grey-text"></i>
                            <input type="text" id="form-Subject" class="form-control" placeholder="Subject" name="subject" value="">
                        </div>

                        <div class="md-form">
                            <i class="fas fa-pencil-alt prefix grey-text"></i>
                            <textarea id="form-text" class="form-control md-textarea" rows="3" placeholder="Message" name="message" required></textarea>

                        </div>

                        <div class="text-center mt-4">
                            <button class="btn border border-dark btn-light-blue" type="submit" name="submit" value="submit">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
            <!--Form with header-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-7">

            <!--Google map-->
            <div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 400px">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.983461182252!2d107.13164791400396!3d-6.26590499546469!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698517aaf16cc1%3A0xc25b9e19e7df3d36!2sPT%20Prokemas%20Adhikari%20Kreasi!5e0!3m2!1sen!2sbd!4v1591532130182!5m2!1sen!2sbd"
                        frameborder="0" style="border:0;" allowfullscreen="" ></iframe>
            </div>

            <br>
            <!--Buttons-->
            <div class="row text-center">
                <div class="col-md-4">
                    <a class="btn-floating blue accent-1"><i class="fas fa-map-marker-alt"></i></a>
                    <p>Jl. Raya Fatahillah No.106, Kalijaya,
                        Cikarang Barat., Bekasi,
                        Jawa Barat 17530.</p>
                    <p>Indonesia</p>
                </div>

                <div class="col-md-4">
                    <a class="btn-floating blue accent-1"><i class="fas fa-phone"></i></a>
                    <p>+ 01 234 567 89</p>
                    <p>Mon - Fri, 8:00-22:00</p>
                </div>

            </div>

        </div>
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.1-->

@endsection
