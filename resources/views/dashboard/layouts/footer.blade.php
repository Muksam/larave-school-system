@section('footer')
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" 
	integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" 
	crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="{{asset('dashboard/assets/plugins/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('dashboard/assets/plugins/popper/popper.js')}}"></script>
	<script src="{{asset('dashboard/assets/plugins/jquery-blockui/jquery.blockui.min.js')}}"></script>
	<script src="{{asset('dashboard/assets/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
	<!-- bootstrap -->
	<script src="{{asset('dashboard/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('dashboard/assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
	<script src="{{asset('dashboard/assets/plugins/sparkline/jquery.sparkline.js')}}"></script>
	<script src="http://radixtouch.in/templates/admin/smart/source/assets/js/pages/sparkline/sparkline-data.js"></script>
	<!-- Common js-->
	<script src="{{asset('dashboard/assets/js/app.js')}}"></script>
	<script src="{{asset('dashboard/assets/js/layout.js')}}"></script>
	<script src="{{asset('dashboard/assets/js/theme-color.js')}}"></script>
	<!-- material -->
	<script src="{{asset('dashboard/assets/plugins/material/material.min.js')}}"></script>
	<!-- chart js -->
	<script src="http://radixtouch.in/templates/admin/smart/source/assets/plugins/chart-js/Chart.bundle.js"></script>
	<script src="{{asset('dashboard/assets/plugins/chart-js/utils.js')}}"></script>
	<script src="{{asset('dashboard/assets/js/pages/chart/chartjs/home-data.js')}}"></script>
	<!-- summernote -->
	<script src="http://radixtouch.in/templates/admin/smart/source/assets/plugins/summernote/summernote.js"></script>
	<script src="{{asset('dashboard/assets/js/pages/summernote/summernote-data.js')}}"></script>
	<!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js'></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->

    <script type = "text/javascript">
		$("document").ready(function(){
			
			setTimeout(function(){
                $('div.alert').remove()
			},3000);
		})

	</script>

<script type = "text/javascript">
		$("document").ready(function(){
			
			setTimeout(function(){
                $('div.alert1').remove()
			},3000);
		})

	</script>
   

	@stack('js')

	    
	
	<!-- end js include path -->
</body>

</html>
		
@endsection