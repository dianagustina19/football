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
                                <form action="/timupdate" method="POST" enctype="multipart/form-data">
                                @csrf
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Nama Tim</th>
                                            <input type="hidden" name="id" value="{{$tim->id}}">
                                            <td><input type="text" name="nama_tim" value="{{$tim->nama_tim}}" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <th>Logo Tim</th>
                                            <td>
                                                <img src="{{ url('/data_foto/'.$tim->logo_tim) }}" alt="" width="20%">
                                                <input type="hidden" name="logo_tim_lama" value="{{$tim->logo_tim}}">
                                                <input type="file" name="logo_tim_baru" value="" class="form-control">
                                            </td>
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
                                    <a href="/tim" class="btn btn-black"><i class="fa fa-arrow-left"></i>Kembali</a>
                                    <button type="submit" class="btn btn-secondary"><i class="fa fa-pencil"></i>Edit</button>
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