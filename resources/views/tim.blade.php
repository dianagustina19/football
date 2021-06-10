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
                                    <th>Nama Tim</th>
                                    <th>Kota Tim</th>
                                    <th><center>Action</center></th>
                                </tr>
                            </thead>
                            <tbod>
                                <tr>
                                    <td>xx</td>
                                    <td>xx</td>
                                    <td>
                                        <center>
                                            <a href="" class="btn btn-black">Detail</a>
                                        </center>
                                    </td>
                                </tr>
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