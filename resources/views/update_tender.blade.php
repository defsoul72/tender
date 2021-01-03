@extends('master')
@section('content')
<div class="container custom-adding">
    <h2>Form control: input</h2>
    <p>The form below contains two input elements; one of type text and one of type password:</p>
    <form action="{{route("update.tender")}}" method="POST">
        @csrf
        <div class="form-group">
        <label for="no-tender">No.Tender:</label>
        <input type="text" class="form-control" id="no_tender" name="no_tender" value="{{$tenders->no_tender}}">
        <input type="hidden" class="form-control" id="no_tender" name="tender_id" value="{{$tenders->id}}" hidden>
      </div>
      <div class="form-group">
        <label for="name_title">Title:</label>
        <input type="text" class="form-control" id="title" name="title" value="{{$tenders->title}}">
      </div>
      <div class="form-group">
        <label for="state">State:</label>  
        <input type="text" class="m-wrap" id="state" name="state" value= "{{$tenders->state}}">
      </div>
      <div class="form-group">
        <label for="closingDate">Due Date:</label>
        <input type="text" class="m-wrap" id="due_date" name="due_date" value="{{$tenders["due_date"]}}">
      </div>
      <div class="form-group">
        <label for="agent">Agent:</label>
        <input type="text" class="form-control" id="agent" name="agent" value="{{$tenders->agent}}">
      </div>
      {{-- <div class="form-group">
        <label for="desc">Description:</label>
        <input type="text" class="form-control" id="description" name="description" value="{{$tenders->description}}">
      </div>
      <div class="form-group">
        <label for="cb">Kod Bidang:</label>
        <input type="text" class="form-control" id="kod_bidang" name="kod_bidang" value="{{$tenders->kod_bidang}}">
      </div> --}}
      <button type="submit" class="btn btn-default">Done</button>
    </form>
  </div>
@endsection
  