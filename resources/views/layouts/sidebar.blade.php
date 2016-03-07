<div class="wrapper">
    	@include('includes.header')   
    	
    	@include('includes.sidebar')

    	<div id="page-wrapper">
    		<div id="page-inner">
    			@yield('content')
    		</div>
		</div>
</div>