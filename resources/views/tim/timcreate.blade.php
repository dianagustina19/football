@include('header');

<link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-bulma@4/bulma.css" rel="stylesheet">
<div class="wrapper">
    <div class="section section-light-blue">
        <div class="container">
            <div id="menu-dropdown">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tim-title">
                            <center><h3>Tambah Tim</h3></center>
                                </div><br>
                                <form action="/timcreatePost" method="POST" enctype="multipart/form-data">
                                @csrf
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Nama Tim</th>
                                            <td><input type="text" name="nama_tim" id="nama_tim" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <th>Logo Tim</th>
                                            <td><input type="file" name="logo_tim" id="logo_tim" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <th>Tahun Berdiri</th>
                                            <td><input type="text" name="tahun_berdiri" id="tahun_berdiri" onkeypress="return hanyaAngka(event)" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <th>Alamat Markas Tim</th>
                                            <td><input type="text" name="alamat" id="alamat" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <th>Kota</th>
                                            <td><input type="text" name="kota" id="kota" class="form-control"></td>
                                        </tr>
                                    </table>
                                    <a href="/tim" class="btn btn-fill btn-neutral"><i class="fa fa-arrow-left"></i> Kembali</a>
                                    <button class="btn btn-fill btn-neutral" onclick="return updatepm()"><i class="fa fa-plus-circle"></i> Tambah</button>
                                </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('footer')
@include('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
<script>
    //validasi hanya angka  
    function hanyaAngka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))

        return false;
        return true;
    }

    function updatepm(){

        var nama_tim = document.getElementById('nama_tim').value;
        var logo_tim = document.getElementById('logo_tim').value;
        var tahun_berdiri = document.getElementById('tahun_berdiri').value;
        var alamat = document.getElementById('alamat').value;
        var kota = document.getElementById('kota').value;

        if(nama_tim == ''){
            event.preventDefault(); 
            swal.fire("Cancelled", "Nama Tim Tidak Boleh Kosong!", "error");
        
        }else if(logo_tim == ''){
            event.preventDefault(); 
            swal.fire("Cancelled", "Logo Tim Tidak Boleh Kosong!", "error");
        }else if(tahun_berdiri == ''){
            event.preventDefault(); 
            swal.fire("Cancelled", "Tahun Berdiri Tidak Boleh Kosong!", "error");
        }else if(alamat == ''){
            event.preventDefault(); 
            swal.fire("Cancelled", "Alamat Tidak Boleh Kosong!", "error");
        }else if(kota == ''){
            event.preventDefault(); 
            swal.fire("Cancelled", "Kota Tidak Boleh Kosong!", "error");
        }else{

                event.preventDefault(); // prevent form submit
                var form = event.target.form; // storing the form
                    swal.fire({
                dangerMode: true,
                title: 'Are you sure?',
                text: "Apakah semua data sudah sesuai ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, Create!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
                }).then(function(isConfirm) {
                if (isConfirm.value) {
                    form.submit();
                } else if (isConfirm.dismiss === 'cancel') {
                    swal.fire("Cancelled", "Tambah Tim dibatalkan!", "error");
                }
                });
        }


        }

</script>

