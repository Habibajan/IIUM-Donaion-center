@extends('welcome')
@section('content')
<div class="contact">
		<div class="container">		
			<h3 class="hdng">How to Find Us</h3>
			<div class="map">
					<iframe src="https://maps.google.com/maps?q=iium&t=&z=13&ie=UTF8&iwloc=&output=embed"  style="border:0" allowfullscreen></iframe>

			</div>
		</div>
		<div class="contact-form">
			<div class="container">		
				<h3 class="hdng">Contact Us</h3>
				<div class="contact-grids-info">
					<div class="col-md-7 contact-right">				
						<form>
							<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
							<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
							<input type="text" value="Telephone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required="">
							<textarea onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
							<input type="submit" value="Submit" >
						</form>
					</div>
					<div class="col-md-5 contact-left">
						{{-- <p>"Lorem Ipsum"is the common name dummy text often used in the design, printing, and type setting industriescommon name dummy text often used in the design, printing, and type setting industries. "</p> --}}
						<ul>
							<li><span class="glyphicon3 glyphicon-map-marker" aria-hidden="true"></span>
								International Islamic University Malaysia.
							</li>					
							<li><span class="glyphicon3 glyphicon-earphone" aria-hidden="true"></span>
								+603 3224 000
							</li>
							<li><span class="glyphicon3 glyphicon-envelope" aria-hidden="true"></span>
								<a href="mailto:example@mail.com">donation@live.edu.my</a>
							</li>
						</ul>
					</div>						
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>			
</div>

@stop