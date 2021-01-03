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
                <th>Publish_date</th>
                <th>Agent</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($products as $item)
              <div>              
              <tr>
                <td>{{$item['id']}}</td>
                <td>{{$item['no_tender']}}</td>
                <td>{{$item['name']}}</td>
                <td>{{$item['publish_date']}}</td>
                <td>{{$item['agent']}}</td>
                <td><a href="#"><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td><a href="delete_tender/{{$item['id']}}"><span class="glyphicon glyphicon-trash"></span></a></td>
                
              </tr>
              </div>
            </tbody>
            @endforeach
            
          </table>
        </div>
@endsection