﻿<!DOCTYPE html> 
<html lang="en"> 
<head> 
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>jQueryMobile - DateBox Demos</title>
	<link rel="stylesheet" href="http://code.jquery.com/mobile/latest/jquery.mobile.css" />
	<link type="text/css" href="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.min.css" rel="stylesheet" /> 
	<link type="text/css" href="http://dev.jtsage.com/cdn/simpledialog/latest/jquery.mobile.simpledialog.min.css" rel="stylesheet" /> 
	<link type="text/css" href="http://dev.jtsage.com/jQM-DateBox/css/demos.css" rel="stylesheet" /> 

	<!-- NOTE: Script load order is significant! -->

	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.js"></script> 
	<script type="text/javascript" src="http://code.jquery.com/mobile/latest/jquery.mobile.js"></script>
	<script type="text/javascript" src="http://dev.jtsage.com/jquery.mousewheel.min.js"></script>
	<script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.core.min.js"></script>
	<script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.mode.calbox.min.js"></script>
	<script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.mode.datebox.min.js"></script>
	<script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.mode.flipbox.min.js"></script>
	<script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.mode.durationbox.min.js"></script>
	<script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.mode.slidebox.min.js"></script>
	<script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/i18n/jquery.mobile.datebox.i18n.en_US.utf8.js"></script>

	<script type="text/javascript" src="http://dev.jtsage.com/cdn/simpledialog/latest/jquery.mobile.simpledialog.min.js"></script>
	<script type="text/javascript" src="../extras.js"></script>
	<script type="text/javascript" src="http://dev.jtsage.com/gpretty/prettify.js"></script>
	<link type="text/css" href="http://dev.jtsage.com/gpretty/prettify.css" rel="stylesheet" />
	<script type="text/javascript">
		$('div').live('pagecreate', function() {
			prettyPrint()
		});
	</script>

</head>
<body>
<div data-role="page" id="slideIndex"> 
	<div data-role="header" data-position="fixed"> 
		<h1>jQueryMobile - DateBox</h1>
		<a href="../../" data-icon="home" data-iconpos="notext">Home</a>
	</div>
	<div data-role="content">
		<div class="content-secondary"> 
			<div id="jqm-homeheader"> 
				<h1 id="jqm-logo"><img src="../jquery-logo-db.png" alt="jQuery Mobile Framework :: DateBox" /></h1> 
				<p>A Date and Time Picker plugin for jQueryMobile</p> 
			</div> 

			<div class="modedemos sidebar"></div>
		</div>

		<div class="content-primary"> 
			<div data-role="collapsible-set" data-mini="true">
				<div data-role="collapsible" data-collapsed="false"> 
					<h2>Flip Default</h2>
					<p>Using the flip mode is as simple as setting the 'mode' option to "flipbox".</p>

					<div data-role="fieldcontain">
						<label for="defflip">Some Date</label><input name="defflip" type="date" data-role="datebox" id="defflip" data-options='{"mode": "flipbox"}' />
					</div>

					<pre class="prettyprint">&lt;label for="mydate"&gt;Some Date&lt;/label&gt;

&lt;input name="mydate" id="mydate" type="date" data-role="datebox"
   data-options='{"mode": "flipbox"}'&gt;</pre>
   
				</div>
				<div data-role="collapsible">
					<h2>Theme Options</h2>
					<ul data-role="listview" data-inset="true">
						<li><h3>themeDateHigh</h3><p>Theme swatch for today's date</p></li>
						<li><h3>themeDatePick</h3><p>Theme swatch for choosen (centered) date</p></li>
						<li><h3>themeDate</h3><p>Theme swatch for other date elements</p></li>
					</ul>
				</div>
				<div data-role="collapsible">
					<h2>Roller Length</h2>
					<p>To control the "length" of the rollers, you can alter the 'flen' option.  It has six properties:</p>
					<pre class="prettyprint">flen: {'y': 15, 'm':12, 'd':15, 'h':12, 'i':15, 'a':3}</pre>
					<p>Note that these numbers are *half* of the roller length - this is the pad on either end of the centered element</p>
				</div>
			</div>
		</div> 

	</div>
	<div data-role="footer" data-position="fixed">
	</div>
</div>
</html>