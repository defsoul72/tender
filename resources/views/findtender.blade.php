@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <form action="{{route('tender.result')}}" method="GET">
            <label for="agency">Choose agency:</label>

<select name="agency" id="agency">
  <option value="MARA">MARA</option>
  <option value="UiTM">UiTM</option>
  <option value="Government">Government</option>
</select>
<label for="place">Choose places:</label>

<select name="place" id="places">
  <option value="Melaka">Melaka</option>
  <option value="Johor">Johor</option>
  <option value="Selangor">Selangor</option>
</select>
<label for="service">Choose services:</label>

<select name="service" id="services">
  <option value="Tender">Tender</option>
  <option value="Quotation">Quotation</option>
</select>
<button type="submit" > Search </button>
        </form>
        <a href="/">Back</a>
    </div>
</div>
@endsection

{{-- <script>

    $(document).ready(function(){
        $("#agency").change(function(){
            var el = $(this);
            if(el.val()!="Government"){
                $("#service").style.display="none";
            }
        })
    }) --}}
</script>