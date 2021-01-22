@extends('master')
@section('content')
<h3> Latest Tender</h3> 
        <div class="container"> 
          <table class="table table-hover">  
                 
            <thead>
              <tr>
                <th>No</th>
                <th>No Tender</th>
                <th>Name/Tittle</th>
                <th>State</th>
                <th>Due_date</th>
                <th>Agent</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($tenders as $item)
              <div><a href="detail/{{$item['id']}}">              
              <tr>
                <td>{{$item['id']}}</td>
                <td>{{$item['no_tender']}}</td>
                <td><a href="detail/{{$item['id']}}">{{$item['title']}}</a></td>
                <td>{{$item['state']}}</td>
                <td>{{$item['due_date']}}</td>
                <td>{{$item['agent']}}</td>
              </tr>
            </a>
              </div>
            </tbody>
            @endforeach
            
          </table>
          <a href="/findTender">Back</a>  
        </div>
@endsection