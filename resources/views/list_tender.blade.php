@extends('master')
@section('content')
<h3> List Tender</h3>
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
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($tenders as $item)
              <div>              
              <tr>
                <td>{{$item['id']}}</td>
                <td>{{$item['no_tender']}}</td>
                <td>{{$item['title']}}</td>
                <td>{{$item['state']}}</td>
                <td>{{$item['due_date']}}</td>
                <td>{{$item['agent']}}</td>
                <td><a href="update_show/{{$item['id']}}"><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td><a href="delete_tender/{{$item['id']}}"><span class="glyphicon glyphicon-trash"></span></a></td>
                
              </tr>
              </div>
            </tbody>
            @endforeach
            
          </table>
        </div>
@endsection