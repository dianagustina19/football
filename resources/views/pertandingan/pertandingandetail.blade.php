@include('header')

<link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-bulma@4/bulma.css" rel="stylesheet">

<div class="wrapper">
    <div class="section section-light-blue">
        <div class="container">
            <div id="menu-dropdown">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tim-title">
                            <center><h3>Tambah Pertandingan</h3></center>
                        </div><br>
                        <form action="{{url('/pertandingancreatePost')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <table class="table table-bordered">
                                <tr>
                                    <th>Tanggal Pertandingan</th>
                                    <td><input type="text" name="tanggal_pertandingan" id="tanggal_pertandingan" class="form-control datepicker"></td>
                                </tr>
                                <tr>
                                    <th>Waktu Pertandingan (Menit)</th>
                                    <td><input type="text" name="waktu_pertandingan" id="waktu_pertandingan" value="90" class="form-control" readonly></td>
                                </tr>
                                <tr>
                                    <th>Tuan Rumah</th>
                                        <td>
                                            <select name="tim_asal" id="tim_asal" class="form-control">
                                                <option value="">Pilih Tim</option>
                                                @foreach($tim as $tim)
                                                <option value="{{$tim->id}}">{{$tim->nama_tim}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                </tr>
                                <tr>
                                    <th>Tamu</th>
                                    <td>
                                    <select name="tim_asal" id="tim_asal" class="form-control">
                                            <option value="">Pilih Tim</option>
                                            @foreach($tim2 as $tim2)
                                            <option value="{{$tim2->id}}">{{$tim2->nama_tim}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Pertandingan</th>
                                    <td>
                                        <input type="radio" name="yesno" value="no" id="noCheck" checked="checked"> 
                                        <strong>Pertandingan Masih Berjalan</strong><br>
                                        
                                        <input type="radio" name="yesno"  value="yes" id="yesCheck">
                                        <strong>Pertandingan Sudah Berakhir</strong>
                                    </td>
                                </tr>
                            
                                <tr class="showCta">
                                    <th>Skor Akhir</th>
                                    <td><input type="text" name="hasil_akhir" id="hasil_akhir" class="form-control"></td>
                                </tr>
                                <tr class="showCta">
                                    <th>Pemain Pencetak</th>
                                    <td>
                                        <select name="tim_asal" id="tim_asal" class="form-control">
                                            <option value="">Pilih Tim</option>
                                            @foreach($tim1 as $tim1)
                                            <option value="{{$tim1->id}}">{{$tim1->nama_tim}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr class="showCta">
                                    <th>Waktu Gol</th>
                                    <td><input type="text" name="nomor_punggung" id="nomor_punggung" onkeypress="return hanyaAngka(event)" class="form-control"></td>
                                </tr>
                            
                            </table>
                            <a href="/pertandingan" class="btn btn-fill btn-neutral"><i class="fa fa-arrow-left"></i> Kembali</a>
                            <button class="btn btn-fill btn-neutral" onclick="return updatepm()" ><i class="fa fa-plus"></i> Tambah</button>
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

    //validasi hanya huruf
    function harusHuruf(evt){
        var charCode = (evt.which) ? evt.which : event.keyCode
        if ((charCode < 65 || charCode > 90)&&(charCode < 97 || charCode > 122)&&charCode>32)
            
        return false;
        return true;
    }

    //radio box check uncheck
    $('input[type="radio"]').change(function(){
        if (this.checked){
            $('.showCta').toggle(this.value === 'yes');
        }
    }).change();

    //Function Submit
    function updatepm(){

        var nama_pemain = document.getElementById('nama_pemain').value;
        var tinggi_badan = document.getElementById('tinggi_badan').value;
        var berat_badan = document.getElementById('berat_badan').value;
        var posisi_pemain = document.getElementById('posisi_pemain').value;
        var nomor_punggung = document.getElementById('nomor_punggung').value;
        var tim_asal = document.getElementById('tim_asal').value;

        if(nama_pemain == ''){
            event.preventDefault(); 
            swal.fire("Cancelled", "Nama Pemain Tidak Boleh Kosong!", "error");
        
        }else if(tinggi_badan == ''){
            event.preventDefault(); 
            swal.fire("Cancelled", "Tinggi Badan Tidak Boleh Kosong!", "error");
        }else if(berat_badan == ''){
            event.preventDefault(); 
            swal.fire("Cancelled", "Berat Badan Tidak Boleh Kosong!", "error");
        }else if(posisi_pemain == ''){
            event.preventDefault(); // prevent form submit\
            swal.fire("Cancelled", "Posisi Pemain Tidak Boleh Kosong!", "error");
        }else if(nomor_punggung == ''){
            event.preventDefault(); // prevent form submit\
            swal.fire("Cancelled", "Nomor Punggung Tidak Boleh Kosong!", "error");
        }else if(tim_asal == ''){
            event.preventDefault(); // prevent form submit\
            swal.fire("Cancelled", "Tim Asal Tidak Boleh Kosong!", "error");
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
                    swal.fire("Cancelled", "Tambah pemain dibatalkan!", "error");
                }
            });
        }
    }

</script>