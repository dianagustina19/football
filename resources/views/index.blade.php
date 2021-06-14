@include('header')

<div class="wrapper">
    <div class="demo-header demo-header-image">
            <div class="motto">
                <h1 class="title-uppercase">Football XYZ</h1>
                <h3>Association Football Champion</h3>
            </div>
    </div>
</div>
<div class="wrapper">
    <div class="section section-light-blue">
        <div class="container">
            <div id="menu-dropdown">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tim-title">
                            <center><h3>Pertandingan Yang Akan Datang</h3></center>
                        </div><br>
                        @foreach($pertandingan as $p)
                        <div class="col-sm-4 col-md-6">
                            <div class="thumbnail">
                                <div class="col-sm-4 col-sm-6">
                                    <center><img src="{{ url('/data_foto/'.$p->tim->logo_tim) }}" width="70%"></center>
                                </div>
                                <div class="col-sm-2">
                                <br><br>
                                    <center><img src="{{ url('/assets/paper_img/vs.jpg') }}" width="70%"></center>
                                </div>
                                <div class=" col-sm-4 col-sm-6">
                                    <center><img src="{{ url('/data_foto/'.$p->logo_tamu) }}" width="70%"></center>
                                </div>    
                                <br><br><br><br>
                                <div class="caption"> 
                                        <h4>{{$p->tim->nama_tim}} vs {{$p->tamu}}</h4>
                                        <p>Pertandingan bola {{$p->tim->nama_tim}} melawan {{$p->tamu}}</p>
                                        <p>Tanggal Pertandingan : {{$p->tanggal_pertandingan}}</p>
                                        <br>
                                        <p>
                                            <center>
                                            @if($p->status == 1)
                                                <a href="/pertandinganedit/{{$p->id}}" class="btn btn-default" role="button">OnProgress</a>
                                            @else
                                                <a href="/pertandingandetail/{{$p->id}}" class="btn btn-default" role="button">Selesai</a>
                                            @endif
                                            </center>
                                        </p>
                                    </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    

<div id="carousel">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <div class="carousel slide" data-ride="carousel">

              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                  <center><img src="assets/paper_img/1.png" alt="Awesome Image" width="30%"></center>
                </div>
                <div class="item">
                  <center><img src="assets/paper_img/2.jpg" alt="Awesome Image" width="30%"></center>
                </div>
                <div class="item">
                  <center><img src="assets/paper_img/3.png" alt="Awesome Image" width="20%"></center>
                </div>
              </div>

              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="fa fa-angle-left"></span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span class="fa fa-angle-right"></span>
              </a>
        </div>
    </div> 
</div>


@include('footer')
@include('js')


</body>
</html>
