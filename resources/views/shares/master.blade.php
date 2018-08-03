@section("header-page")
	@include('shares.header')
@show
@section("main-page")
	<div class="main-page {{@$mainClass}}">
		<div class="container-fluid">
			@section("main-content") 
				
			@show
		</div>
	</div>
@show
@section("footer-page")
	@include('shares.footer')
@show