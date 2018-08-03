    <div class="footer-page">
    	@section("footer-content")
    		<div class="container-fluid"></div>
    	@show
    </div>
    <div class="custom-loading" style="display: none;">
	    <div class="loader"></div>
	</div>
	<style type="text/css">
		.custom-loading{position: fixed;top: 0;bottom: 0;left: 0;right: 0;background: rgba(0, 0, 0, 0.55);z-index: 8998;display: none;}
		.custom-loading .loader{border: 8px solid #f3f3f3;border-radius: 50%;border-top: 8px solid #3498db;width: 70px;height: 70px;-webkit-animation: spin 2s linear infinite;animation: spin 2s linear infinite;position: absolute;top: 45%;left: 45%;}
	    @-webkit-keyframes spin {
	        0% { -webkit-transform: rotate(0deg); }
	        100% { -webkit-transform: rotate(360deg); }
	    }
	    @keyframes spin {
	        0% { transform: rotate(0deg); }
	        100% { transform: rotate(360deg); }
	    }
	</style>
    @section("js-page")
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="{{ asset('html/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('html/js/datetimepicker/build/jquery.datetimepicker.full.min.js') }}"></script>
		<script src="{{ asset('html/js/main.js') }}"></script>
	@show
	@stack('js-add')
</body>