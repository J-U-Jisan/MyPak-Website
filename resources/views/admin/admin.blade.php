@extends('layouts.index')

@section('content')
<section class="clearfix cta-bg mt-5" style="background-color: #C8EFFD;">
    <div class="container">
        <div class="card mt-5 py-5">
            <div class="card-body">
                <!--Body-->
                <form action="/admin/news" method="POST">
                    @csrf
                    <div class="form-header blue accent-1 text-center mb-3">
                        <h3>Write News</h3>
                    </div>
                    <div class="md-form">
                        <input type="text" id="form-name" class="form-control" placeholder="Title" name="title">
                    </div>


                    <div class="md-form mt-2">
                        <textarea id="form-text" class="form-control md-textarea" rows="3" placeholder="News" name="news"></textarea>

                    </div>

                    <div class="text-center mt-4">
                        <button class="btn border border-dark btn-light-blue" name="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="clearfix cta-bg" style="background-color: #C8EFFD;">
    <div class="container">
        <div class="card mt-5 py-5">
            <div class="card-body">
                <!--Body-->
                <form action="/admin/career" method="POST">
                    @csrf
                    <div class="form-header blue accent-1 text-center mb-3">
                        <h3>Content of Career</h3>
                    </div>
                    <div class="md-form">
                        <input type="text" id="form-name" class="form-control" placeholder="Title" name="title">
                    </div>


                    <div class="md-form mt-2">
                        <textarea id="form-text" class="form-control md-textarea" rows="3" placeholder="Content" name="career"></textarea>

                    </div>

                    <div class="text-center mt-4">
                        <button class="btn border border-dark btn-light-blue" name="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
