@include('header');
<style>

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #a7c4bc;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #2f5d62;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>
<div class="wrapper">
    <div class="section section-light-blue">
        <div class="container">
            <div id="menu-dropdown">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tim-title">
                            <center><h3>Detail Tim</h3></center>
                                </div><br>

                                <div class="tab">
                                <button class="tablinks" onclick="openCity(event, 'Tim')">Tim</button>
                                <button class="tablinks" onclick="openCity(event, 'Pemain')">Pemain</button>
                                <button class="tablinks" onclick="openCity(event, 'Pertandingan')">Pertandingan</button>
                                </div>

                                <div id="Tim" class="tabcontent">
                                <h3>{{$tim->nama_tim}}</h3>
                                <p><img src="{{ url('/data_foto/'.$tim->logo_tim) }}" alt="" width="20%" height="50%"></p>
                                <p>Tahun Berdiri : {{$tim->tahun_berdiri}}</p>
                                <p>Alamat : {{$tim->alamat}}</p>
                                <p>Kota : {{$tim->kota}}</p>
                                </div>

                                <div id="Pemain" class="tabcontent">
                                <h3>Paris</h3>
                                <p>Paris is the capital of France.</p> 
                                </div>

                                <div id="Pertandingan" class="tabcontent">
                                <h3>Tokyo</h3>
                                <p>Tokyo is the capital of Japan.</p>
                                </div>

                                <br>    
                                <a href="/tim" class="btn btn-black"><i class="fa fa-arrow-left"></i>Kembali</a>
                      
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('footer')


<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>