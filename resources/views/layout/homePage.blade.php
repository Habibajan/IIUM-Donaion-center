@extends('welcome')
@section('content')

<div class="banner">
	 <div class="container">			
			<script src="/js/responsiveslides.min.js"></script>
			  <script>
					$(function () {
					  $("#slider").responsiveSlides({
						auto: true,
						nav: false,
						speed: 500,
						namespace: "callbacks",
						pager: true,
					  });
					});
			 </script>
			 <div class="slider">
				 <div class="callbacks_container">
				     <ul class="rslides" id="slider">
						 <li>	          
							  <h2>Give a Helping Hand</h2>
						 </li>					
					  </ul>
				 </div>
			 </div>
			  <!----->		  

	 </div>
</div>
<!---->
<div class="welcome">
	 <div class="container">
		 <div class="welcome-top">
			 <h3>Welcome to IIUM-Donation-Center</h3>
			 <p>E-sadaqah aims to stenghten humanit's fight against poverty.Through the provision of immediate relief and estblishment of self-sustaining development program.</p>
		 </div>
		  <div class="charitys">
			  <div class="col-md-4 chrt_grid" style="visibility: visible; -webkit-animation-delay: 0.4s;">
				   <div class="chrty">
						<figure class="icon">
							 <span class="glyphicon-icon glyphicon-book" aria-hidden="true"></span>
						</figure>
						<h3>Book</h3>
						<p>As a university student we always need books for every single subject. Lets help our brother and sister, and give the books we do not need them any more.</p>
				  </div><br>
					<button type="button" class="btn btn-success"><a href="{{route('donations.donationForm')}}">Donate</a></button>
			  </div>
			  <div class="col-md-4 chrt_grid" style="visibility: visible; -webkit-animation-delay: 0.4s;">
				   <div class="chrty">
						<figure class="icon">
							<span class="glyphicon-icon glyphicon-usd" aria-hidden="true"></span>
						</figure>						
						<h3>Education Fee </h3>
						<p>Education is the most powerful weapon which you can use to change the world. (Nelson Mandela) As a Muslims we must help each other to have an educated and healthy society.</p>
				  </div><br>
					<button type="button" class="btn btn-success" ><a href="{{route('donations.donationForm')}}">Donate</a></button>
			  </div>
			  <div class="col-md-4 chrt_grid" style="visibility: visible; -webkit-animation-delay: 0.4s;">
				   <div class="chrty">
						 <figure class="icon">
							<span class="glyphicon-icon glyphicon-briefcase" aria-hidden="true"></span>
						</figure>						
						<h3>Job</h3>
						<p>The struggle is real-- especially for students. There are student who are struggling with financial problem and searching for part time or full time job</p>
				  </div><br>
					<button type="button" class="btn btn-success"><a href="{{route('donations.donationForm')}}">Donate</a></button>
			  </div>
			  <div class="clearfix"></div>
		 </div>		 
	 </div>
</div>
<!---->
  @stop
