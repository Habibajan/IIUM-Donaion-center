
		 <div class="header-top">
			 <div class="logo">
				 <a href="index.html"><h1>IIUM Donation <span>Center</span></h1></a>
			 </div>
			 <div class="hdr-address">
				 <div class="address1">
					 <h5>Jalan Gombak, 53100 Kuala Lumpur, Malaysia</h5>
					 <p>International Islamic University Malaysia</p>
				 </div>
				 <div class="call">
					 <h5>03 6196 4000</h5>
					 <p>Call me</p>
				 </div>
				 <div class="clearfix"></div>
			 </div>
			 {{-- <div class="search">
				 <div class="search-box">
					 <div id="sb-search" class="sb-search">
						  <form>
							<input class="sb-search-input" placeholder="search term..." type="search" name="search" id="search">
							<input class="sb-search-submit" type="submit" value="">
							<span class="sb-icon-search"> </span>
						 </form>
					 </div>
				 </div> --}}
			 </div>
			 <div class="clearfix"> </div>
			 <!-- search-scripts -->
			<script src="/js/classie.js"></script>
			<script src="/js/uisearch.js"></script>
				<script>
					new UISearch( document.getElementById( 'sb-search' ) );
				</script>
			<!-- //search-scripts -->
		 </div>
		 <div class="top-menu">
			 <span class="menu">MENU</span>
			 <ul>
			 <li class="{{Request::is('/')?'active':''}}"><a href="{{route('homePage')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
			 <li class="{{Request::is('about')?'active':''}}"><a href="{{route('about')}}"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>About</a></li>
			 <li class="{{Request::is('contact')?'active':''}}"><a href="{{route('contact')}}"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Contact</a></li>

			 <li class="{{Request::is('login')?'active':''}}"> @if (Route::has('login'))
                
                    @auth
					   <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>Login</a></li>
			 <li class="{{Request::is('register')?'active':''}}"> @if (Route::has('register'))
                            <a href="{{ route('register') }}"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Register</a></li> 
							@endif
                    @endauth
					  @endif 
			 </ul>
		 </div>
		 <!-- script-for-menu -->
		 <script>					
					$("span.menu").click(function(){
						$(".top-menu ul").slideToggle("slow" , function(){
						});
					});
		 </script>
		 <!-- script-for-menu -->	
		 <div class="clearfix"></div>
	 
          