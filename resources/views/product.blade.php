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
          <form class="form-inline" action="/search">
            <div class="input-group">
              <input type="text" name="query" class="form-control search-box" placeholder="Search">
              <div class="input-group-btn">
                <button type="submit" class="btn btn-default">
                  <i class="glyphicon glyphicon-search"></i>
                </button>
              </div>
            </div>
          </form>
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
    {{-- <div class="col-sm-4">
      <div class="thumbnail">
        <img src="https://paraboxstudio.com/wp-content/uploads/2018/07/jkr-logo.png" alt="San Francisco" width="400" height="300">
        <p><strong>JKR</strong></p>
        <p>Jabatan Kerja Raya</p>
      </div>
    </div> --}}
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
                <th>Publish_date</th>
                <th>Agent</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($products as $item)
              <div><a href="detail/{{$item['id']}}">              
              <tr>
                <td>{{$item['id']}}</td>
                <td>{{$item['no_tender']}}</td>
                <td><a href="detail/{{$item['id']}}">{{$item['name']}}</a></td>
                <td>{{$item['publish_date']}}</td>
                <td>{{$item['agent']}}</td>
              </tr>
            </a>
              </div>
            </tbody>
            @endforeach
            
          </table>
        </div>
</div>
@endsection