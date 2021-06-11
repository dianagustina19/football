@include('header');

<div class="wrapper">
    <div class="section section-light-blue">
        <div class="container">
            <div id="menu-dropdown">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tim-title">
                            <center><h3>Edit Tim</h3></center>
                                </div><br>
                                <form action="/edittimPost" method="POST" enctype="mutiple/form-data">
                                @csrf
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Nama Tim</th>
                                            <td><input type="text" name="nama_tim" value="{{$tim->nama_tim}}" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <th>Logo Tim</th>
                                            <td><input type="text" name="logo_tim" value="{{$tim->logo_tim}}" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <th>Tahun Berdiri</th>
                                            <td><input type="text" name="tahun_berdiri" value="{{$tim->tahun_berdiri}}" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <th>Alamat Markas Tim</th>
                                            <td><input type="text" name="alamat" value="{{$tim->alamat}}" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <th>Kota</th>
                                            <td><input type="text" name="kota" value="{{$tim->kota}}" class="form-control"></td>
                                        </tr>
                                    </table>
                                    <button type="submit" class="btn btn-secondary">Edit</button>
                                </form>
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