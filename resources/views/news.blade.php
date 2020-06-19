@extends('layouts.app')

@section('content')
    <section class="clearfix cta-bg mt-5" style="background-color: #C8EFFD;">
        <div class="container w-75">
            <?php  $datas = DB::select('SELECT * from news');
                    $p=0;
            ?>
            @foreach ($datas as $data)
                <?php $p=1; ?>
                <div class="m-2 p-2" style="background-color:#3b3d3c; color: white;">
                    <div class="w-100 new_car">
                        <h4 class="d-inline text-light">{{ $data->title }}</h4>
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
