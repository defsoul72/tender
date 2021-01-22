@extends('master')
@section('content')
<div class="custom-product">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="jumbotron text-center">
          <h1>QuoTenFinder</h1>
          <p>Procurement Offer</p>
          <row>
            <div class="searchTender">
              <a class="btn btn-success" href="{{route('tender.search')}}"> Find my Tender</a>
          </div>
          </row>
         
        </div>

        <!-- Container (Portfolio Section) -->
<div class="container-fluid text-center bg-grey">
  <h2>Agent</h2><br>
  <div class="row text-center">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="https://www.pdp.gov.my/jpdpv2/assets/2019/09/logo-procurement.png" alt="myprocurement"  width="400" height="300">
        <p><strong>MyProcurement</strong></p>
        <p>Pusat Perolehan Kerajaan</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="https://seeklogo.com/images/M/Majlis_Amanah_Rakyat__MARA_-logo-6967BE1573-seeklogo.com.png" alt="New York" width="400" height="300">
        <p><strong>MARA</strong></p>
        <p>Majlis Amanah Rakyat(MARA)</p>
      </div>
    </div>
    <div class="col-sm-4">
      {{-- <div class="thumbnail"> --}}
        <img src="https://logos-download.com/wp-content/uploads/2017/11/UiTM_Universiti_Teknologi_MARA_logo.png" alt="San Francisco" width="275" height="140">
        <br></br>
        <p><strong>UiTM</strong></p>
        <p>Universiti Teknologi Mara</p>
      </div>
    </div>
  </div>
</div>

        <h3> Latest Tender</h3>
        <div class="container">           
          <table class="table table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>No Tender</th>
                <th>Name/Tittle</th>
                <th>State</th>
                <th>Closing_date</th>
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
        </div>
  </div>
</div>
@endsection