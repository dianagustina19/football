@include('header')
<div class="wrapper">
    <div class="demo-header demo-header-image">
            <div class="motto">
                <h1 class="title-uppercase">Paper Kit</h1>
                <h3>Make your mark with a new design.</h3>
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
                            <center><h3>Pertandingan Hari Ini</h3></center>
                        </div><br>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>xxx</th>
                                    <th>ccc</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>xx</td>
                                    <td>xx</td>
                                </tr>
                            </tbody>
                        </table>
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
                  <img src="assets/paper_img/pencils.jpg" alt="Awesome Image">
                </div>
                <div class="item">
                  <img src="assets/paper_img/shoes.jpg" alt="Awesome Image">
                </div>
                <div class="item">
                  <img src="assets/paper_img/types.jpg" alt="Awesome Image">
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


<div class="main">
    <div class="section section-white section-with-space">
            <div class="container tim-container text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2>Completed with examples</h2>
                        <p>The kit comes with three pre-built pages to help you get started faster. You can change the text and images and you're good to go. More importantly, looking at them will give you a picture of what you can built with this powerful kit.</p>
                    </div>
                </div>
                <div class="row example-pages">
                    <div class="col-md-4">
                        <a href="examples/landing.html" target="_blank">
                            <img src="assets/paper_img/examples/landing.jpg" alt="Rounded Image" class="img-rounded img-responsive">
                            <h5>Landing Page</h5>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="examples/register.html" target="_blank">
                            <img src="assets/paper_img/examples/register.jpg" alt="Rounded Image" class="img-rounded img-responsive">
                            <h5>Register</h5>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="examples/profile.html" target="_blank">
                            <img src="assets/paper_img/examples/profile.jpg" alt="Rounded Image" class="img-rounded img-responsive">
                            <h5>Profile</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-nude section-with-space">
            <div class="container tim-container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2>Do you like what you see?</h2>
                        <p>Cause if you do, it can be yours for free. Hit the button below to navigate to Creative Tim where you can find the kit. Start a new project or give an old Bootstrap project a new look, we've got you covered. </p>
                    </div>
                    <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4 col-md-4 col-md-offset-4 download-area">
                        <a href="http://www.creative-tim.com/product/paper-kit" class="btn btn-danger btn-fill btn-block btn-lg">Download</a>
                    </div>
                </div>
                <div class="row sharing-area text-center">
                        <h3>Sharing is caring!</h3>
                        <a href="#" class="btn">
                            <i class="fa fa-twitter"></i>
                            Twitter
                        </a>
                        <a href="#" class="btn">
                            <i class="fa fa-facebook-square"></i>
                            Facebook
                        </a>
                </div>
            </div>
        </div>
    </div>

@include('footer')
</div>



</body>
    <script src="{{asset('assets/js/jquery-1.10.2.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/js/jquery-ui-1.10.4.custom.min.js')}}" type="text/javascript"></script>
	<script src="{{('bootstrap3/js/bootstrap.js')}}" type="text/javascript"></script>
	<!--  Plugins -->
	<script src="{{asset('assets/js/ct-paper-checkbox.js')}}"></script>
	<script src="{{asset('assets/js/ct-paper-radio.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap-select.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap-datepicker.js')}}"></script>
	<script src="{{asset('assets/js/ct-paper.js')}}"></script>
</html>
