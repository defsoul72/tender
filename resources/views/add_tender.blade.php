@extends('master')
@section('content')
<div class="container custom-adding">
    <h2>Add Tender</h2>
    {{-- <p>The form below contains two input elements; one of type text and one of type password:</p> --}}
    <form action="add_tender" method="POST">
        @csrf
        <div class="form-group">
        <label for="no-tender">No.Tender:</label>
        <input type="text" class="form-control" id="no_tender" name="no_tender">
      </div>
      <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control" id="title" name="title">
      </div>
      <div class="form-group">
        <label for="state">State:</label>  
        <input type="text" class="form-control" id="state" name="state">
      </div>
      <div class="form-group">
        <label for="dueDate">Closing Date:</label>
        <input type="date" class="form-control" id="due_date" name="due_date">
      </div>
      <div class="form-group">
        <label for="agent">Agent:</label>
        <input type="text" class="form-control" id="agent" name="agent">
      </div>
      {{-- <div class="form-group">
        <label for="desc">Description:</label>
        <input type="text" class="form-control" id="description" name="description">
      </div> --}}
      {{-- <div class="form-group">
        <label for="cb">Kod Bidang:</label>
        <input type="text" class="form-control" id="kod_bidang" name="kod_bidang">
      </div> --}}
      <button type="submit" class="btn btn-default">Done</button>
    </form>
  </div>
@endsection
  