<nav class="navbar navbar-expand-lg navbar-light bg-light">

<a class="navbar-brand" href="#"><img src="img/h.png">   XYZ HOSPITAL</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
 <li class="nav-item active">
   <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
 </li>
 <li class="nav-item">
   <a class="nav-link" href="{{ route('signup')}}">Register</a>
 </li>
   <li class="nav-item">
   <a class="nav-link" href="{{route('getloginpage')}}">Login</a>
 </li>
   <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</ul>

</div>
</nav>
<div class="row">

   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
   <div class="banner1">
       <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
 <img class="d-block w-100" src="img/hospital1.jpg" alt="First slide">
</div>
<div class="carousel-item">
 <img class="d-block w-100" src="img/h2.jpg"  height="495px" width="200px" alt="Second slide">
</div>
<div class="carousel-item">
 <img class="d-block w-100" src="img/h3.jpg" alt="Third slide">
</div>
</div>
<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div>
       </div></div></div>
