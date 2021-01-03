@extends('master')
@section('content')
<div class="container">
    <div class="row">
        
        <div class="col-sm-6">
            <a href="/">Back</a>
            <h2>{{$product['name']}}</h2>
            <h3>Closing date: {{$product['closing_date']}}</h3>
            <p>Details : {{$product['description']}}</p>
            <p>Agent : {{$product['agent']}}</p>
            <p>Field Code : {{$product['kod_bidang']}}</p>
            <br><br>
            

        </div>
    </div>
</div>
@endsection