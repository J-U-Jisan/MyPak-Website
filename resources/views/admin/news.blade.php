@extends('layouts.index')

@section('content')
    <section class="clearfix cta-bg mt-5" style="background-color: #C8EFFD;">
        <div class="container w-75">
            @foreach ($datas as $data)

            <div class="m-2 p-2" style="background-color:white;">
            <div class="w-100">
                <h3 class="d-inline">Title: {{ $data->title }}</h3>
                <form action="/admin/news" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="float-right" value="{{ $data->id }}" name="delete">Delete</button>
                </form>
            </div>
            <div><h5>News: </h5>
            <p>{{ $data->body }}</p>
            </div>
            </div>
            @endforeach
        </div>
    </section>
@endsection
