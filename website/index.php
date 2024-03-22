<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Proyecto reservaciones</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

	<style type="text/css">
		.merienda-<uniquifier> {
		  font-family: "Merienda", cursive;
		  font-optical-sizing: auto;
		  font-weight: <weight>;
		  font-style: normal;
		}

		.poppins-regular {
		  font-family: "Poppins", sans-serif;
		  font-weight: 400;
		  font-style: normal;
		}

		.poppins-medium {
		  font-family: "Poppins", sans-serif;
		  font-weight: 500;
		  font-style: normal;
		}

		.poppins-semibold {
		  font-family: "Poppins", sans-serif;
		  font-weight: 600;
		  font-style: normal;
		}

		*{
			font-family: "Poppins", sans-serif;
		}

		.h-font{
			font-family: "Merienda", cursive;
		}

		/* Ocultar las flechas del input number */

		/* Chrome, Safari, Edge, Opera */
		input::-webkit-outer-spin-button,
		input::-webkit-inner-spin-button {
		  -webkit-appearance: none;
		  margin: 0;
		}

		/* Firefox */
		input[type=number] {
		  -moz-appearance: textfield;
		}

		.custom-bg{
			background-color: #2ec1ac;
		}

		.custom-bg:hover{
			background-color: #279e8c;
		}

		.availability-form{
			margin-top: -75px;
			z-index: 2;
			position: relative;
		}

		@media screen and (max-width: 575px) {
			.availability-form{
				margin-top: 0px;
				padding: 0 35px;
			}
		}

		@media (min-width: 992px) and (max-width: 1199.98px){
			.boton{	
				margin-left: -1rem;	
			}
		}

	</style>
</head>
<body class="bg-light">

	<nav class="navbar navbar-expand-lg bg-body-tertiary navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
	  <div class="container-fluid">
	    <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Reservacion</a>
	    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	        <li class="nav-item">
	          <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
	        </li>
	        <li class="nav-item me-2">
	          <a class="nav-link" href="#">Rooms</a>
	        </li>
	        <li class="nav-item me-2">
	          <a class="nav-link" href="#">Facilities</a>
	        </li>
	        <li class="nav-item me-2">
	          <a class="nav-link" href="#">Contact us</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#">About</a>
	        </li>
	      </ul>
	      <div class="d-flex" role="search">
	        <!-- Button trigger modal -->
			<button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
			  Login
			</button>
			<button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
			  Register
			</button>
	      </div>
	    </div>
	  </div>
	</nav>


	<!-- Modal Login -->
	<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">

	    	<form>
	    		<div class="modal-header">
			        <h5 class="modal-title d-flex align-items-center">
			        	<i class="bi bi-person-circle fs-3 me-2"></i> User Login
			        </h5>
			        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="mb-3">
					    <label class="form-label">Email address</label>
					    <input type="email" class="form-control shadow-none">
					</div>
					<div class="mb-4">
					    <label class="form-label">Password</label>
					    <input type="password" class="form-control shadow-none">
					</div>
					<div class="d-flex align-items-center justify-content-between mb-2">
						<button type="submit" class="btn btn-dark shadow-none">LOGIN</button>
						<a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
					</div>
				</div>
	    	</form>
	    </div>
	  </div>
	</div>


	<!-- Modal Register -->
	<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">

	    	<form>
	    		<div class="modal-header">
			        <h5 class="modal-title d-flex align-items-center">
			        	<i class="bi bi-person-lines-fill fs-3 me-2"></i> User Registration
			        </h5>
			        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<span class="badge rounded-pill text-bg-light mb-3 text-wrap lh-base">
						Note: Your details must match with your ID (DUI, passport, driving license, etc.)
						that will be required during check-in.
					</span>
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6 ps-0 mb-3">
								<label class="form-label">Name</label>
					    		<input type="text" class="form-control shadow-none">
							</div>
							<div class="col-md-6 p-0 mb-3">
								<label class="form-label">Email</label>
					    		<input type="email" class="form-control shadow-none">
							</div>
							<div class="col-md-6 ps-0 mb-3">
								<label class="form-label">Phone number</label>
					    		<input type="number" class="form-control shadow-none">
							</div>
							<div class="col-md-6 p-0 mb-3">
								<label class="form-label">Picture</label>
					    		<input type="file" class="form-control shadow-none">
							</div>
							<div class="col-md-12 p-0 mb-3">
								<label class="form-label">Address</label>
					    		<textarea class="form-control shadow-none" rows="1"></textarea>
							</div>
							<div class="col-md-6 ps-0 mb-3">
								<label class="form-label">Pincode</label>
					    		<input type="number" class="form-control shadow-none">
							</div>
							<div class="col-md-6 p-0 mb-3">
								<label class="form-label">Date of birth</label>
					    		<input type="date" class="form-control shadow-none">
							</div>
							<div class="col-md-6 ps-0 mb-3">
								<label class="form-label">Password</label>
					    		<input type="password" class="form-control shadow-none">
							</div>
							<div class="col-md-6 p-0 mb-3">
								<label class="form-label">Confirm Password</label>
					    		<input type="password" class="form-control shadow-none">
							</div>
						</div>
					</div>
					<div class="text-center my-1">
						<button type="submit" class="btn btn-dark shadow-none">REGISTER</button>
					</div>
				</div>
	    	</form>
	    </div>
	  </div>
	</div>


	<!-- Carousel -->
	<!-- Swiper -->
	<div class="container-fluid px-lg-4 mt-4">
		<div class="swiper swiper-container">
		    <div class="swiper-wrapper">
		      <div class="swiper-slide">
		        <img src="images/carousel/1.png" class="w-100 d-block">
		      </div>
		      <div class="swiper-slide">
		        <img src="images/carousel/2.png" class="w-100 d-block">
		      </div>
		      <div class="swiper-slide">
		        <img src="images/carousel/3.png" class="w-100 d-block">
		      </div>
		      <div class="swiper-slide">
		        <img src="images/carousel/4.png" class="w-100 d-block">
		      </div>
		      <div class="swiper-slide">
		        <img src="images/carousel/5.png" class="w-100 d-block">
		      </div>
		      <div class="swiper-slide">
		        <img src="images/carousel/6.png" class="w-100 d-block">
		      </div>
		    </div>
  		</div>
	</div>

	<!-- Check availability form -->\
	<div class="container availability-form">
		<div class="row">
			<div class="col-lg-12 bg-white shadow p-4 rounded">
				<h5 class="mb-4">Check Booking Availability</h5>
				<form>
					<div class="row align-items-end">
						<div class="col-lg-3 mb-3">
							<label class="form-label" style="font-weight: 500;">Check-in</label>
					    	<input type="date" class="form-control shadow-none">
						</div>
						<div class="col-lg-3 mb-3">
							<label class="form-label" style="font-weight: 500;">Check-out</label>
					    	<input type="date" class="form-control shadow-none">
						</div>
						<div class="col-lg-3 mb-3">
							<label class="form-label" style="font-weight: 500;">Adult</label>
					    	<select class="form-select shadow-none">
							  <option selected>Open this select menu</option>
							  <option value="1">One</option>
							  <option value="2">Two</option>
							  <option value="3">Three</option>
							</select>
						</div>
						<div class="col-lg-2 mb-3">
							<label class="form-label" style="font-weight: 500;">Children</label>
					    	<select class="form-select shadow-none">
							  <option selected>Open this select menu</option>
							  <option value="1">One</option>
							  <option value="2">Two</option>
							  <option value="3">Three</option>
							</select>
						</div>
						<div class="boton col-lg-1 mb-lg-3 mt-2">
							<button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<br><br><br>
	<br><br><br>

	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

	<!-- Initialize Swiper -->
	<script>
	    var swiper = new Swiper(".swiper-container", {
	      spaceBetween: 30,
	      loop: "true",
	      autoplay: {
	      	delay: 3500,
	      	disableOnInteraction: false
	      }
	    });
  	</script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script></body>
</html>