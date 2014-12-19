<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SMS :: {{$title}}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon"
              type="image/png"
              href="{{ asset('favicon.png') }}">
    	  <link rel="stylesheet" type="text/css" href='{{asset("css/bootstrap-cerulean.css")}}'>
    	  <link rel="stylesheet" type="text/css" href='{{asset("css/custom.css")}}'>
    	  <link rel="stylesheet" type="text/css" href='{{asset("css/bootstrap-responsive.css")}}'>
    	  <link rel="stylesheet" type="text/css" href='{{asset("css/charisma-app.css")}}'>
    	  <link rel="stylesheet" type="text/css" href='{{asset("css/jquery-ui-1.8.21.custom.css")}}'>
    	  <link rel="stylesheet" type="text/css" href='{{asset("css/fullcalendar.css")}}'>
    	  <link rel="stylesheet" type="text/css" href='{{asset("css/fullcalendar.print.css")}}'>
    	  <link rel="stylesheet" type="text/css" href='{{asset("css/chosen.css")}}'>
    	  <link rel="stylesheet" type="text/css" href='{{asset("css/uniform.default.css")}}'>
    	  <link rel="stylesheet" type="text/css" href='{{asset("css/colorbox.css")}}'>
    	  <link rel="stylesheet" type="text/css" href='{{asset("css/jquery.cleditor.css")}}'>
    	  <link rel="stylesheet" type="text/css" href='{{asset("css/jquery.noty.css")}}'>
    	  <link rel="stylesheet" type="text/css" href='{{asset("css/noty_theme_default.css")}}'>
    	  <link rel="stylesheet" type="text/css" href='{{asset("css/elfinder.min.css")}}'>
    	  <link rel="stylesheet" type="text/css" href='{{asset("css/elfinder.theme.css")}}'>
    	  <link rel="stylesheet" type="text/css" href='{{asset("css/jquery.iphone.toggle.css")}}'>
    	  <link rel="stylesheet" type="text/css" href='{{asset("css/opa-icons.css")}}'>
    	  <link rel="stylesheet" type="text/css" href='{{asset("css/uploadify.css")}}'>
        <!-- jQuery -->
        <script src='{{asset("js/jquery.min.js")}}'></script>
        <!-- autocomplete library -->
        <script src='{{asset("js/bootstrap-typeahead.js")}}'></script>
</head>
<body>
    @yield('content')
</body>
    <!-- external javascript
    	================================================== -->
    	<!-- Placed at the end of the document so the pages load faster -->


    	<!-- jQuery UI -->
    	<script src='{{asset("js/jquery-ui-1.8.21.custom.min.js")}}'></script>
    	<!-- transition / effect library -->
    	<script src='{{asset("js/bootstrap-transition.js")}}'></script>
    	<!-- alert enhancer library -->
    	<script src='{{asset("js/bootstrap-alert.js")}}'></script>
    	<!-- modal / dialog library -->
    	<script src='{{asset("js/bootstrap-modal.js")}}'></script>
    	<!-- custom dropdown library -->
    	<script src='{{asset("js/bootstrap-dropdown.js")}}'></script>
    	<!-- scrolspy library -->
    	<script src='{{asset("js/bootstrap-scrollspy.js")}}'></script>
    	<!-- library for creating tabs -->
    	<script src='{{asset("js/bootstrap-tab.js")}}'></script>
    	<!-- library for advanced tooltip -->
    	<script src='{{asset("js/bootstrap-tooltip.js")}}'></script>
    	<!-- popover effect library -->
    	<script src='{{asset("js/bootstrap-popover.js")}}'></script>
    	<!-- button enhancer library -->
    	<script src='{{asset("js/bootstrap-button.js")}}'></script>
    	<!-- accordion library (optional, not used in demo) -->
    	<script src='{{asset("js/bootstrap-collapse.js")}}'></script>
    	<!-- carousel slideshow library (optional, not used in demo) -->
    	<script src='{{asset("js/bootstrap-carousel.js")}}'></script>

    	<!-- tour library -->
    	<script src='{{asset("js/bootstrap-tour.js")}}'></script>
    	<!-- library for cookie management -->
    	<script src='{{asset("js/jquery.cookie.js")}}'></script>
    	<!-- calander plugin -->
    	<script src='{{asset("js/fullcalendar.min.js")}}'></script>
    	<!-- data table plugin -->
    	<script src='{{asset("js/jquery.dataTables.min.js")}}'></script>
        @yield('datatable')

    	<!-- chart libraries start -->
    	<script src='{{asset("js/excanvas.js")}}'></script>
    	<script src='{{asset("js/jquery.flot.min.js")}}'></script>
    	<script src='{{asset("js/jquery.flot.pie.min.js")}}'></script>
    	<script src='{{asset("js/jquery.flot.stack.js")}}'></script>
    	<script src='{{asset("js/jquery.flot.resize.min.js")}}'></script>
    	<!-- chart libraries end -->

    	<!-- select or dropdown enhancer -->
    	<script src='{{asset("js/jquery.chosen.min.js")}}'></script>
    	<!-- checkbox, radio, and file input styler -->
    	<script src='{{asset("js/jquery.uniform.min.js")}}'></script>
    	<!-- plugin for gallery image view -->
    	<script src='{{asset("js/jquery.colorbox.min.js")}}'></script>
    	<!-- rich text editor library -->
    	<script src='{{asset("js/jquery.cleditor.min.js")}}'></script>
    	<!-- notification plugin -->
    	<script src='{{asset("js/jquery.noty.js")}}'></script>
    	<!-- file manager library -->
    	<script src='{{asset("js/jquery.elfinder.min.js")}}'></script>
    	<!-- star rating plugin -->
    	<script src='{{asset("js/jquery.raty.min.js")}}'></script>
    	<!-- for iOS style toggle switch -->
    	<script src='{{asset("js/jquery.iphone.toggle.js")}}'></script>
    	<!-- autogrowing textarea plugin -->
    	<script src='{{asset("js/jquery.autogrow-textarea.js")}}'></script>
    	<!-- multiple file upload plugin -->
    	<script src='{{asset("js/jquery.uploadify-3.1.min.js")}}'></script>
    	<!-- history.js for cross-browser state change on ajax -->
    	<script src='{{asset("js/jquery.history.js")}}'></script>
    	<!-- application script for Charisma demo -->
    	<script src='{{asset("js/charisma.js")}}'></script>
</html>
