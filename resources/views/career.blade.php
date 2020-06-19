@extends('layouts.app')

@section('content')
    <section class="clearfix mt-5">
        <img src="./images/career.jpg" class="col-12 col-md-12" style="height: 400px;">

    </section>
    <section class="clearfix cta-bg" style="background-color: #C8EFFD;">
        <div class="container w-75">
            <?php  $datas = DB::select('SELECT * from career');
            $p=0;
            ?>
            @foreach ($datas as $data)
                <?php $p=1; ?>
                <div class="m-2 p-2" style="background-color:#1e6dc7; color: white !important;">
                    <div class="w-100 new_car">
                        <h4 class="d-inline" style="color: white;">{{ $data->title }}</h4>
                    </div>
                    <div>
                        <p>{{ $data->body }}</p>
                    </div>
                </div>
            @endforeach
            @if($p==0)
                <div><h1>No News</h1></div>
            @endif
        </div>
    </section>
@endsection
