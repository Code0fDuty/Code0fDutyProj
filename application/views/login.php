<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
	


    <title>GOAL RACKER LOGIN</title>
  </head>
  <body style='background-color:#F8956F'>

  	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <div class="container-fluid">
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <a class="navbar-brand" href="#"> <img src="https://img.icons8.com/bubbles/64/000000/google-tag-manager.png"/> GOAL TRACKER </a>
            <form class="d-flex">
		    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
		      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
		        <!-- <li class="nav-item"> 
		          <a class="nav-link active" aria-current="page" href="#">Register</a>
		        </li> -->
                <li class="nav-item">
						<a class="nav-link" href="<?=base_url('welcome')?>">Register</a>
					</li>
				</ul>
		        <!-- <li class="nav-item">
		          <a class="nav-link" href="#">Link</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
		        </li>
		      </ul> -->
		      <form class="d-flex">
		        <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
		        <button class="btn btn-outline-success" type="submit">Search</button> -->
		      </form>
		    </div>
		  </div>
		</nav>
       
		<div class="container">
			<div class="row">
				
			<div class="col-md-6" font-family="sans-serif-bold">
				<br><br>

				&nbsp; <h1> Create your Plan <br> Set your Goal <br>Build your Habit! </h1>
			</div>
			<div class="col-md-4">
				<div class="card" style="margin-top: 30px">
					<div class="card-header text-center">
					<img src="https://img.icons8.com/ios-glyphs/50/000000/user--v1.png"/>
					</div>
					  <div class="card-body">
					   <form method="post" autocomplete="off" action="<?=base_url('welcome/loginnow')?>">
					 
						  <div class="mb-3">
						    <label for="exampleInputEmail1" class="form-label">Email address</label>
						    <input type="email"  placeholder="Email Address" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
						  </div>
						  <div class="mb-3">
						    <label for="exampleInputPassword1" class="form-label">Password</label>
						    <input type="password" name="password"  placeholder="User Password"  class="form-control" id="exampleInputPassword1">
						  </div>

						 <div class="text-center">
						  <button type="submit" class="btn btn-primary">Login Now</button>
						</div>
				<br>
						<p class="login-register-text">Don't have an account? <a href="/Team-7/welcome">Login Here</a>.</p>
				
						<?php
						if($this->session->flashdata('error')) {?>
						 <p class="text-danger text-center" style="margin-top: 10px;"> <?=$this->session->flashdata('error')?></p>
						<?php } ?>
						
						</form>
					  </div>
					</div>
				</div>
				<div class="col-md-4"></div>
			</div>
		</div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>