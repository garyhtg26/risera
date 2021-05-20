<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC" />
<link rel="shortcut icon" type="image/jpg" href="<?= base_url(''); ?>assets/img/favicon.png"/>
<link href="<?= base_url(''); ?>assets/css/auth.css" rel="stylesheet">
<title><?= $title;?></title>
<!------ Include the above in your HEAD tag ---------->

<section class="">
    <div class="container-fluid pl-5">
	<div class="row">
		<div class="col-md-4 login-sec">
		    <h2 class="text-center">Login</h2>

	<form class="login-form">
  <div class="form-group">
    <label for="exampleInputEmail1"  >Username</label>
    <input type="text" class="form-control" placeholder="">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"  >Password</label>
    <input type="password" class="form-control" placeholder="">
  </div>
  
  
    <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      <small>Remember me</small>
    </label>
    
  </div>
  <button type="submit" class="btn btn-login mt-4 mb-2" style="width:100%">Masuk</button>
  
</form>
<div >
				<div class="col-xs-12 col-sm-12 col-md-12 ">
          <small>Atau melanjutkan dengan akun sosial media</small>
					<ul class="list-unstyled list-inline social text-center mt-2">
						<li class="list-inline-item"><a href=" #"><i class="fa fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href=" #"><i class="fa fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href=" #"><i class="fa fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href=" #"><i class="fa fa-google-plus"></i></a></li>
					
          </ul>
          <small>Tidak punya akun? <a style="color:#fffce9" href="<?= base_url('auth/register'); ?> ">Daftar sekarang</a></small>
				</div>
				<hr>
			</div>	
		</div>
		<div class="col-md-8 banner-sec">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="assets/img/2.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/img/1.jpg" alt="Second slide">
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
            
		    
		</div>
	</div>
</div>
</section>																				                            