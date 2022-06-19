<!DOCTYPE html>
<html lang="en">

	@include('admin._partial._head')

   	<body>
      	<div id="db-wrapper">

			<!-- navbar vertical -->
			@include('admin._partial._sidebar')


			<!-- Page content -->
			<div id="page-content">

				@include('admin._partial._header')

				@section('content')
		        @show

			</div>

      	</div>

		  
        <!-- Scripts -->
		@include('admin._partial._script')

   	</body>
</html>
