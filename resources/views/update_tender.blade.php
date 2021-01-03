@extends('master')
@section('content')
<div class="container custom-adding">
    <h2>Form control: input</h2>
    <p>The form below contains two input elements; one of type text and one of type password:</p>
    <form action="update_tender/{{$products->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
        <label for="no-tender">No.Tender:</label>
        <input type="text" class="form-control" id="no_tender" name="no_tender" value="{{$products->no_tender}}">
      </div>
      <div class="form-group">
        <label for="name_title">Title:</label>
        <input type="text" class="form-control" id="name" name="name" value="{{$products->name}}">
      </div>
      <div class="form-group">
        <label for="publishDate">Publish Date:</label>  
        <input type="date" class="m-wrap" id="publish_date" name="publish_date" value= "{{strftime('%d/%m/%y',
        strtotime($products->publish_date))}}">
      </div>
      <div class="form-group">
        <label for="closingDate">Closing Date:</label>
        <input type="date" class="m-wrap" id="closing_date" name="closing_date" value="{{strftime('%d/%m/%Y',
        strtotime($products["closing_date"]))}}">
      </div>
      <div class="form-group">
        <label for="agent">Agent:</label>
        <input type="text" class="form-control" id="agent" name="agent" value="{{$products->agent}}">
      </div>
      <div class="form-group">
        <label for="desc">Description:</label>
        <input type="text" class="form-control" id="description" name="description" value="{{$products->description}}">
      </div>
      <div class="form-group">
        <label for="cb">Kod Bidang:</label>
        <input type="text" class="form-control" id="kod_bidang" name="kod_bidang" value="{{$products->kod_bidang}}">
      </div>
      <button type="submit" class="btn btn-default">Done</button>
    </form>
  </div>
@endsection
  