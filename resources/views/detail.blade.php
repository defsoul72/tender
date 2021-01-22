@extends('master')
@section('content')
<div class="container">
    <div class="row">
        
        <div class="col-sm-6">
            <a href="/">Back</a>
            <h2>{{$tender['title']}}</h2>
            <h2>No Tender: {{$tender['no_tender']}}</h2>
            <h3>Closing date: {{$tender['due_date']}}</h3>
            <p>State : {{$tender['state']}}</p>
            <p>Agent : {{$tender['agent']}}</p>
            <br><br>
            

        </div>
    </div>
</div>
@endsection