@include('header');


<div class="wrapper">
    <div class="section section-light-blue">
        <div class="container">
            <div id="menu-dropdown">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tim-title">
                            <center><h3>Tim</h3></center>
                        </div><br>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Tim</th>
                                    <th>Kota Tim</th>
                                    <th><center>Action</center></th>
                                </tr>
                            </thead>
                            <tbod>
                            @foreach($tim as $key => $tim)
                                <tr>
                                    <td>{{$key+1}}.</td>
                                    <td>{{$tim->nama_tim}}</td>
                                    <td>{{$tim->kota}}</td>
                                    <td>
                                        <center>
                                            <a href="/detailtim/{{$tim->id}}" class="btn btn-black">Detail</a>
                                            <a href="/edittim/{{$tim->id}}" class="btn btn-warning">Edit</a>
                                            <a href="/deletetim/{{$tim->id}}" class="btn btn-danger">Delete</a>
                                        </center>
                                    </td>
                                </tr>
                            @endforeach
                            </tbod>
                        </table>
                        <a href="/timcreate" class="btn btn-success">Tambah Tim</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br>
<div class="main">
@include('footer')
</div>