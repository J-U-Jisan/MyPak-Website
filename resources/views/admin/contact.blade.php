@extends('layouts.index')
<section class="clearfix cta-bg mt-5" style="background-color: #C8EFFD;">
    <div class="container w-75">
        <?php  $datas = DB::select('SELECT * from contact'); ?>
        @foreach ($datas as $data)

            <div class="m-2 p-2" style="background-color:white;">
                <div class="w-100">
                    <h5 class="d-inline">Name: {{ $data->username }}</h5>
                    <form action="/admin/contact" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="float-right" value="{{ $data->id }}" name="delete">Delete</button>
                    </form>
                </div>
                <div class="mt-3">
                    <h5 class="d-inline">Email: {{ $data->email }}</h5>
                </div>
                <div class="mt-3">
                    <h5 class="d-inline">Subject: {{ $data->subject }}</h5>
                </div>
                <div class="mt-3"><h5>Message: </h5>
                    <p>{{ $data->message }}</p>
                </div>
            </div>
        @endforeach
    </div>
</section>
